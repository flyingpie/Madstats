<?php
class IniParser {

	protected $core;
	
	protected $data;
	protected $file;
	protected $last_section = '';
	
	public function IniParser($core) {
		$this->core = $core;
	}
	
	public function parse($file) {
		$fp = fopen ($file, 'r');

		while ($data = fgets($fp, 4096)) {
			$this->parseIni($data);
		}
		
		return $this->data;
	}
	
	/**
	* Internal function to handle different section
	*/
	private function parseIni($data) {
		// trim beginning and ending spaces
		$data = trim($data);

		// skip white lines
		if (empty($data))
			return;

		// skip comment lines
		if (substr($data, 0, 1) == ';')
			return;

		// section
		if ((substr($data, 0, 1) == '[') AND (substr($data, -1) == ']')) {
			$this->last_section = substr($data, 1, (strlen($data) - 2));
			return;
		}

		// entry
		$pos = strpos($data, '=');
		if ($pos !== FALSE) { // boolean false
			// set name
			$name = substr($data, 0, $pos);

			// set value
			$value = substr ($data, ($pos + 1), (strlen($data) - $pos - 1));

			// check for comma's and spaces in value, if so make array of it
			if (strpos($value, ", ")) {
				$list = explode (",", $value);

				// unset value
				$value = array();

				// loop through values and add them to array
				foreach ($list as $val) {
					$value[] = trim($val);
				}
			}

			// store value
			$this->data->{$this->last_section}->$name = $value;
		}
	}
}
?>