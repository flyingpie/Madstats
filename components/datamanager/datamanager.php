<?php
/**
 * The DataManager class is a facade controller to abstract the actual method of connection with the server.
 * Certain abstracted functionality such as config file parsing it done here.
 * Connection methods currently supported are FTP and local
 *
 * @author Marco van den Oever
 */
class DataManager {

	protected $core;
	protected $dm;
	
	public function DataManager($core) {
		// Set the core
		$this->core = $core;
		// Initialize the datamanager for the specified connection method
		$this->initDataManager($core->getConfig()->getConnectionMethod());
	}
	
	/**
	 * initDataManager initializes the datamanager, based on the specified connection method
	 * @param $connectionMethod The connection method to use
	 */
	protected function initDataManager($connectionMethod) {
		switch($connectionMethod) {
			case 'ftp':
				// If the connection method was ftp, load the datamanager for ftp and initialize it
				include_once('components/datamanager/datamanager_ftp.php');
				$this->dm = new DataManagerFtp($this->core);
				// Check if a connection could be made, else exit
				if(!$this->dm->isConnected()) {
					exit(0);
				}
				break;
			case 'local':
				// If the connection method was local, load the datamanager for local and initialize it
				include_once('components/datamanager/datamanager_local.php');
				$this->dm = new DataManagerLocal($this->core);
				break;
		}
	}
	
	/**
	 * getConfigFile returns a cfg file as an array
	 * @param $file Filename of the requested cfg file
	 */
	public function getConfigFile($file) {
		// Get the file as an array
		$data = $this->getFile($file);
		// Format it as cfg and return it
		return $this->cleanCfg($data);
	}
	
	/**
	 * getContents returns a file as raw text
	 * @param $file Filename of the requested file
	 */
	public function getContents($file) {
		// Get the full path of the file and return its contents
		return $this->dm->getContents($this->core->getConfig()->getPath($file));
	}
	
	/**
	 * getFile returns a file as an array of lines
	 * @param $file Filename of the requested file
	 */
	public function getFile($file, $options = array()) {
		// Get the full path of the file and return its contents
		$file = $this->dm->getFile($this->core->getConfig()->getPath($file));
		
		if(array_key_exists('comments', $options) && $options['comments'] == false) $file = $this->removeComments($file);
		
		if(array_key_exists('split', $options)) {
			$split = $options['split'];
			
			if($split === true) $file = $this->splitLines($file);
			else if(is_string($split)) $file = $this->splitLines($file, $split);
			else if(is_numeric($split)) $file = $this->splitLines($file, null, $split);
			else if(is_array($split)) {
				$delimiter = (array_key_exists('delimiter', $split)) ? $split['delimiter'] : null;
				$limit = (array_key_exists('limit', $split)) ? $split['limit'] : null;
				$respectParantheses = (array_key_exists('respectParantheses', $split)) ? $split['respectParantheses'] : null;

				$file = $this->splitLines($file, $delimiter, $limit, $respectParantheses);
			}
		}
		
		return $file;
	}
	
	/**
	 * getDirectory returns a list of the files in the requested directory
	 * @param $directory The directory to index
	 * @param $extensions An array of extensions to filter for, by default all are returned
	 * @param $options An array of options, 'hide_extensions': cuts off the extensions of the returned files
	 */
	public function getDirectory($directory, $extensions = array(), $options = array()) {
		// Get the directory contents
		$files = $this->dm->getDirectory($directory, $extensions);

		// Create a buffer
		$result = array();
		foreach($files as $file) {
			// If the file is a dot, continue
			if($file == '.' || $file == '..') continue;
			// Find the last dot in the filename, in front of the extension
			$dot = strrpos($file, '.');
			// If an extension filter was set and the current file doesn't match it, continue to the next filename
			if(!empty($extensions) && !in_array(substr($file, $dot + 1), $extensions)) continue;
			// If the hide_extensions option was set to true, filter out the extension from the filename
			if(array_key_exists('hide_extensions', $options) && $options['hide_extensions'] === true) $result[] = substr($file, 0, $dot);
			else $result[] = $file;
		}
		// Return the result
		return $result;
	}
	
	/**
	 * setContents sets the specified content as raw text for the specified file
	 * @param $file The file to use
	 * @param $contents The content to set
	 */
	public function setContents($file, $contents) {
		// Get the full path of the file and set the content for the file
		return $this->dm->setContents($this->core->getConfig()->getPath($file), $contents);
	}
	
	/**
	 * setFile sets the specified content as line array for the specified file
	 * @param $file The file to use
	 * @param $contents The content to set, as an array of lines
	 */
	public function setFile($file, $contents) {
		// Create a buffer
		$data = "";
		
		// Add each line to the buffer
		foreach($contents as $line) {
			// If the buffer is not empty, add a newline
			if(strlen($data) > 0) $data .= "\r\n";
			// Add the line
			$data .= $line;
		}
		// Return the result of the setContents operation, which should set the file
		return $this->setContents($file, $data);
	}
	
	/**
	 * setConfigFile sets the specified config options in the specified file
	 * @param $file The file to use
	 * @param $config The config array to set
	 */
	public function setConfigFile($file, $config) {
		// Create a buffer
		$data = '';
		// Foreach config property and value, create a cfg line
		foreach($config as $key => $value) {
			// If the buffer is not empty, add a newline
			if(strlen($data) > 0) $data .= "\r\n";
			
			// If the value is an array, it indicates a property with multiple values
			if(is_array($value)) {
				// For each of the subvalues, create a cfg line
				foreach($value as $subvalue) {
					$data .= $key . ' ' . '"' . $subvalue . '"' . "\r\n";
				}
			} else {
				// Add the line to the buffer
				$data .= $key . ' ' . '"' . $value . '"';
			}
		}
		// Trim the buffer and save it
		return $this->setContents($file, trim($data));
	}
	
	/**
	 * cleanCfg cleans a file as an array and returns it as an cfg array
	 * @param $file The file to format as an array of lines
	 */
	protected function cleanCfg($file) {
		// Create a buffer
		$result = array();
		// Loop trough each line
		foreach($file as $line) {
			// Filter out any comments
			$commentposs = strpos($line, '//');
			// If a comment is present, remove it from the line
			if($commentposs !== false) {
				// Remove the comment
				$line = substr($line, 0, $commentposs);
				// If the line is empty, continue to the next one
				if(strlen($line) == 0) continue;
			}
			
			// Split the line into property and value
			$explode = explode(' ', $line, 2);
			// If the line has a valid property and value, add it to the buffer
			if(count($explode) == 2) {
				$result[trim($explode[0])] = trim($explode[1], '"');
			}
		}
		// Return the buffer
		return $result;
	}
	
	/**
	 * removeComments clears the file of any comments and empty lines
	 * @param $file The file to clear of comments as an array of lines
	 * @param $token The token used to indicate comments, by default "//"
	 */
	protected function removeComments($file, $token = '//') {
		// Create an array to contain the resulting file
		$result = array();
		// Loop through each line and process it
		foreach($file as $line) {
			// Get the position of the comment, if any
			$commentPos = strpos($line, $token);
			// If there was a comment, get the part of the line from the start until the comment
			if($commentPos !== false) {
				$line = substr($line, 0, $commentPos);
			}
			// If the resulting line is not empty, add it to the result
			if(!empty($line)) $result[] = trim($line);
		}
		// Return the result;
		return $result;
	}
	
	/**
	 * splitLines loops through each line and splits it up into an array, based upon the given parameters
	 * @param $file The input file as an array of lines
	 * @param $delimiter The character to split on
	 * @param $limit The maximum amount of items to return per line
	 */
	protected function splitLines($file, $delimiter = null, $limit = null, $respectParantheses = null) {
		// If no delimiter was given, use the default one, a space
		if($delimiter == null) $delimiter = ' ';

		// Create an array to contain the resulting file
		$result = array();
		// Loop through each line
		foreach($file as $line) {
			// Explode the line and put it in the array
			$result[] = $this->explode($line, $delimiter, $limit, $respectParantheses);
		}
		// Return the result
		return $result;
	}
	
	/**
	 * explode is a custom version of PHP's explode() function, with added functionality to respect parantheses in the line
	 * @param $line The input line to explode
	 * @param $delimiter The character to explode on, by default this is a space
	 * @param $respectParantheses Whether to respect parantheses, which causes words to be held together when the're surrounded by parantheses
	 */
	protected function explode($line, $delimiter = ' ', $limit = null, $respectParantheses = null) {
		// If respectParantheses is not set, use the default value
		if($respectParantheses === null) $respectParantheses = true;
		// Create an array to contain the resulting line
		$result = array();
		// Get the length of the string for looping
		$strlen = strlen($line);
		// Create a buffer to contain an element of the resulting array while processing
		$buffer = "";
		// Keep track of whether we're in between parantheses or not
		$inParants = false;
		// Loop through the string character by character
		for($i = 0; $i < $strlen; $i++) {
			// Get the character
			$char = $line[$i];
			// If respect parantheses is enabled and the current character is a paranthese, handle it
			if($respectParantheses && $char == '"') {
				// Decide if we are in parantheses or not
				if(!$inParants) $inParants = true;
				else $inParants = false;

				// Advance the character position to ommit the paranthese characters
				$i++;
				$char = $line[$i];
			}

			// If we are not in between parantheses or we don't care whether we are, and the curretn character is the delimiter
			// and we are not at the beginning of a string, add a new element
			if(!$inParants && $char == $delimiter && $i > 0) {
				// Add the buffer to the result array
				$result[] = $buffer;
				// Empty the buffer
				$buffer = "";

				// If the limit is set and we've reached it, add the rest of the string to the last element en stop exploding
				if($limit != null && count($result) >= $limit) {
					// Check if we are not at the end of the string yet
					if($i < $strlen - 1) {
						// Create a buffer to contain the rest of the string
						$rest = "";
						// Loop through the rest of the string add each element to the buffer
						for($j = $i; $j < $strlen; $j++) {
							$rest .= $line[$j];
						}
						// Add the rest to the last element of the result array
						$result[count($result) - 1] .= $rest;
					}
					// Stop exploding
					break;
				}
				// Since the current character was the delimiter, we don't want to add it to the buffer
				continue;
			}
			// Add the current character to the buffer
			$buffer .= $char;
		}
		// Add the remaining buffer if it contains anything
		if(!empty($buffer)) $result[] = $buffer;
		// Return the result
		return $result;
	}
}
?>
