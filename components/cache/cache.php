<?php
class Cache {

	private $core;
	private $cacheDir = 'data/';
	private $cachedFiles;

	public function Cache($core) {
		$this->core = $core;
	}

	public function cacheArray($identifier, $data) {
		if(is_writeable($this->cacheDir)) file_put_contents($this->cacheDir . $this->getIdentifier($identifier) . '.' . time() . '.json', json_encode($data));
		else if(!isset($_GET['ajax'])) echo 'Warning: could not cache data, please ensure the \'data\' directory is writeable';
	}

	public function clearCache() {
		if(is_writable($this->cacheDir)) {
			$files = scandir($cacheDir);
			foreach($files as $file) {
				unlink($file);
			}
		}
	}
	
	public function isCached($identifier) {
		$this->loadCachedFiles();
		return array_key_exists($this->getIdentifier($identifier), $this->cachedFiles);
	}

	public function retrieveArray($identifier) {
		if($this->isCached($identifier)) {
			$data = file_get_contents($this->cacheDir . $this->cachedFiles[$this->getIdentifier($identifier)]);
			return json_decode($data, true);
		}
		return false;
	}

	public function getIdentifier($identifier) {
		return $identifier . '.' . $this->core->loadComponent('Config')->getActiveServer();
	}
	
	private function loadCachedFiles() {
		if(!isset($this->cachedFiles)) {
			$this->cachedFiles = array();
			$cache_time = $this->core->getConfig()->getCacheTime();
			$now = time();
			$files = scandir($this->cacheDir);
			foreach($files as $file) {
				if(substr($file, 0, 1) == '.') continue;
				$filename = substr($file, 0, strrpos($file, '.'));
				$mtime = substr($filename, strrpos($filename, '.') + 1);

				if($mtime + $cache_time < $now) {
					unlink($this->cacheDir . $file);
				} else {
					$this->cachedFiles[substr($filename, 0, strrpos($filename, '.'))] = $file;
				}
			}
		}
	}

}
?>
