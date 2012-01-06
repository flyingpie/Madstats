<?php
class Translation {
	
	protected $core;
	protected $dictionary;
	protected $ini;
	
	protected $lang;
	protected $lang_folder = 'languages/';
	protected $lang_ext = '.ini';
	protected $lang_default = 'english';
	
	public function Translation($core) {
		$this->core = $core;
		$this->ini = $this->core->loadComponent('IniParser');
		$this->lang = $this->core->getConfig()->getLanguage();
		
		$this->load('main');
	}
	
	public function getDictionary() {
		return $this->dictionary;
	}
	
	public function load($filename) {	
		$file = $this->lang_folder . $this->lang . '/' . $filename . $this->lang_ext;
		if(file_exists($file)) {
			$this->dictionary = $this->ini->parse($file, $this->dictionary);
		}
	}
}
?>