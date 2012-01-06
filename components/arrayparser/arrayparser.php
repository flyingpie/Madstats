<?php
/**
 * The ArrayParser class is used to read some of the formats used by Mani Admin Plugin, such as the clients.txt file.
 * It can both read and write which makes it useful for editing the config files used by MAP.
 *
 * @author Marco van den Oever
 */
class ArrayParser {

	private $core;
	
	public function ArrayParser($core) {
		// Set the core
		$this->core= $core;
	}

	/**
	 * parse converts a file to an array, which can be used by MadStats
	 * @param $input The file to convert as string
	 */
	public function parse($input) {
		// Create an array to contain the result
		$properties = array();
		// Create a buffer to contain the current key
		$key;
		// Create a buffer to contain the current value
		$value;
		// Create a variable to keep track of at what kind of element we are, 0 = Nothing yet, 1 = In key, 2 = In between key and value, 3 = In value
		$inProperty = 0;
		// Loop through each character
		for($i = 0; $i < strlen($input); $i++) {
			// If the current character is an opening bracket, recursively parse the contents
			if($input[$i] == '{') {
				// Find the position of the closing bracket
				$bracket = $this->findBracket(substr($input, $i + 1));
				// Get the content until the position of the closing bracket
				$substring = substr($input, $i + 1, $bracket);
				// Increment the index to the end of the content in between brackets
				$i += $bracket + 1;
				// Set the inProperty value to be not parsing anything yet
				$inProperty = 0;
				// Parse the content between the brackets and add it to the result
				$properties[$key] = $this->parse($substring);
			// If the current character is a paranthese, handle the key or value
			} else if($input[$i] == '"') {
				// If we where in a key, a value should be coming
				if($inProperty == 1) {
					$inProperty = 2;
				// If we where in between a key and a value, wait for the ending paranthese
				} else if($inProperty == 2) {
					$inProperty = 3;
				// If we where in a value, save the key and the value
				} else if($inProperty == 3) {
					// Set the current element to none
					$inProperty = 0;
					// If the key already exists, add the value to the key, else create a new key with the value
					if(array_key_exists($key, $properties)) $properties[$key] .= ' ' . $value;
					else $properties[$key] = $value;
				} else {
					// If we where not in an element yet, set it to the key
					$inProperty = 1;
					// Reset the key buffer
					$key = "";
					// Reset the value buffer
					$value = "";
				}
			// If we are in a key, add the current character to the key
			} else if($inProperty == 1) {
				$key .= $input[$i];
			// If we are in between a key an a value, do nothing
			} else if($inProperty == 2) {
				
			// If we are in a value, add the current character to the value
			} else if($inProperty == 3) {
				$value .= $input[$i];
			} else {
				
			}
		}
		// Return the result
		return $properties;
	}
	
	/**
	 * findBracket returns the position of the next matching closing bracket
	 * @param $input The string to search for the bracket
	 */
	private function findBracket($input) {
		// Keep count of the brackets in between
		$brackets = 0;
		// Loop through each character and check for brackets
		for($i = 0; $i < strlen($input); $i++) {
			// If the current character is an opening bracket, increase the bracket count
			if($input[$i] == '{') {
				$brackets++;
			// Else if the current character is a closing brackets, decrease the bracket count if it's greater than 0, else return the position
			} else if($input[$i] == '}') {
				if($brackets == 0) return $i;
				// Decrease the bracket count
				$brackets--;
			}
		}
		// Return 0 when no bracket was found
		return 0;
	}
	
	/**
	 * export recursively converts the given array into a string to save to the config file
	 * @param $array The array to convert
	 * @param $indent The amount of tabs to add before every line
	 */
	public function export($array, $indent = 0) {
		// Create a buffer to contain the result
		$result = '';
		// Loop through each entry
		foreach($array as $key => $value) {
			// If the current value is an array, recurse it
			if(is_array($value)) {
				// Add the head of the data
				$result .= $this->getTabs($indent) . '"' . $key . '"' . "\r\n";
				// Add an opening bracket
				$result .= $this->getTabs($indent) . '{' . "\r\n";
				// Export the array and add it to the result, with an increased indent
				$result .= $this->export($value, $indent + 1);
				// Add the closing bracket
				$result .= $this->getTabs($indent) . '}' . "\r\n";
			} else {
				// If the current value is not an array, add it to the result
				$result .= $this->getTabs($indent) . '"' . $key . '"' . "\t" . '"' . $value . '"' . "\r\n";
			}
		}
		// Return the result
		return $result;
	}
	
	/**
	 * getTabs returns a string of tabs, based on the amount given by tabCount
	 * @param $tabCount The amount of tabs to return
	 */
	private function getTabs($tabCount) {
		$result = '';
		for($i = 0; $i < $tabCount; $i++) {
			$result .= "\t";
		}
		return $result;
	}

}
?>