<?php
/**
 * The DataManagerFTP class handles file management with a ftp server
 */
class DataManagerFTP {

	protected $core;
	protected $ftp;
	protected $connected;
	
	public function DataManagerFTP($core) {
		// Set the core
		$this->core = $core;
		// Initialize the ftp datamanager
		$this->initFtp();
	}
	
	/**
	 * initFtp initializes the connection with the server
	 */
	protected function initFtp() {
		// Include the ftp connection library and initialize it
		include_once('lib/ftp/ftp.class.php');
		$this->ftp = new FTP();
		
		// Connect and continue if successful
		if($this->ftp->connect($this->core->getConfig()->getFtpHost(), $this->core->getConfig()->getFtpPort())) {
			// Login and continue if successful
			if($this->ftp->login($this->core->getConfig()->getFtpUsername(), $this->core->getConfig()->getFtpPassword())) {
				//$path = $this->core->getConfig()->getSrcdsPath();

				//$this->changeDirectory($path);
				// If all succeeded, set the connected variable
				$this->connected = true;
				
			} else {
				// If the login procedure failed, print an error message
				echo 'invalid ftp credentials';
			}
		} else {
			// If the connection procedure failed, print an error message
			echo 'invalid ftp host or host not available';
		}
	}
	
	/**
	 * isConnected returns if the connection with the server was successful
	 */
	public function isConnected() {
		return $this->connected;
	}
	
	/**
	 * getContents returns the specified file as raw text
	 * @param $file The filename of the file to return
	 */
	public function getContents($file) {
		// Move to the directory of the file
		$this->changeDirectory($this->getFilepath($file));
		// Get the file and return it
		return $this->ftp->get($this->getFilename($file));
	}
	
	/**
	 * getFile returns the specified file as an array of lines
	 * @param $file The filename of the file to return
	 */
	public function getFile($file) {
		// Get the file as raw text
		$file = $this->getContents($file);
		// Split the text up into lines
		$explode = explode("\n", $file);
		// Create a buffer
		$result = array();
		// For each line, add it to the buffer
		foreach($explode as $line) {
			// Check if the line is not empty, trim it and add it to the buffer
			if(strlen($line) > 0) $result[] = trim($line);
		}
		// Return the buffer
		return $result;
	}
	
	/**
	 * getDirectory returns a listing of the files in the specified directory
	 * @param $directory the directory to list
	 */
	public function getDirectory($directory) {
		// Get the file listing in the specified directory
		$files = $this->ftp->nlist($directory);
		// Create a buffer
		$result = array();
		// For each file, add it to the buffer
		foreach($files as $file) {
			// Remove the path from the filename
			$result[] = substr($file, strlen($directory) + 1);
		}
		// Return the buffer
		return $result;
	}
	
	/**
	 * setContents sets the specified raw text for the specified file
	 * @param $file The filename of the file to use
	 * @param $contents The contents to set
	 */
	public function setContents($file, $contents) {
		// Move to the directory of the specified file
		$this->changeDirectory($this->getFilepath($file));
		// Set the content for the file
		$this->ftp->putAscii($this->getFilename($file), $contents);
	}
	
	/**
	 * getFilename extracts the filename part of the specified path
	 * @param $path The path to the file
	 */
	protected function getFilename($path) {
		// Check for a slash in the path and return a substring of the input from the point of that slash
		return (strpos($path, '/') !== false) ? substr($path, strrpos($path, '/') + 1) : $path;
	}
	
	/**
	 * getFilepath extracts the full folder path of the specified path
	 * @param $path The path to the file
	 */
	protected function getFilepath($path) {
		// Check for a slash in the path and return a substring of the input to the point of that slash
		return (strpos($path, '/') !== false) ? substr($path, 0, strrpos($path, '/')) : $path;
	}
	
	/**
	 * changeDirectory changes the workpath to the specified directory
	 * @param $path The path to the directory to move to
	 */
	protected function changeDirectory($path) {
		// Move to the root directory
		$this->ftp->chdir('/');
		// Add the initial directory to the path
		$path = $this->core->getConfig()->getSrcdsPath() . '/' . $path;
		
		// Split the path in the different directories
		$explode = explode('/', $path);
		
		// For each folder, change path to it
		foreach($explode as $folder) {
			// If the foldername is emptyt, continue to the next one
			if(strlen($folder) == 0) continue;
			// Change to the next folder
			$this->ftp->chdir($folder);
		}
	}
}
?>
