<?php
class DataManagerLocal {

	protected $core;
	
	public function DataManagerLocal($core) {
		$this->core = $core;
	}
	
	public function getContents($file) {
		return file_get_contents($this->getPath($file));
	}
	
	public function getFile($file) {
		$lines = file($this->getPath($file));
		$result = array();
		foreach($lines as $line) {
			if(strlen($line) > 0) $result[] = trim($line);
		}
		return $result;
	}
	
	public function getDirectory($directory) {
		return scandir($this->getPath($directory));
	}
	
	public function setContents($file, $contents) {
		$handle = fopen($this->getPath($file), 'w');
		return fwrite($handle, $contents);
	}
	
	protected function getPath($file) {
		$file = trim($file, '/');
		$srcdsPath = $this->core->getConfig()->getSrcdsPath();
		if($srcdsPath[strlen($srcdsPath) - 1] != '/') $srcdsPath .= '/';
		return $srcdsPath . $file;
	}
}
?>
