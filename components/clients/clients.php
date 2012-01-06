<?php
class Clients {

	protected $ap;
	protected $core;
	protected $clients;
	protected $dm;
	
	public function Clients($core) {
		$this->core = $core;
		$this->initClients();
	}
	
	protected function initClients() {
		$this->ap = $this->core->loadComponent('ArrayParser');
		$this->dm = $this->core->loadComponent('DataManager');
		
		$this->clients = $this->ap->parse($this->dm->getContents('clients.txt'));
		$this->validateClients();
	}
	
	public function addClient($name, $steam) {
		$id = str_replace(' ', '', $name);
		if(!array_key_exists($id, $this->clients['clients.txt']['players'])) $this->clients['clients.txt']['players'][$id] = array();
		$this->clients['clients.txt']['players'][$id]['name'] = $name;
		$this->clients['clients.txt']['players'][$id]['steam'] = $steam;
		return $id;
	}
	
	public function addGroup($name) {
		$id = str_replace(' ', '', $name);
		if(!array_key_exists($id, $this->clients['clients.txt']['groups']['Admin'])) $this->clients['clients.txt']['groups']['Admin'][$id] = '';
		if(!array_key_exists($id, $this->clients['clients.txt']['groups']['Immunity'])) $this->clients['clients.txt']['groups']['Immunity'][$id] = '';
		return $id;
	}
	
	public function deleteClient($id) {
		if($this->hasId($id)) {
			unset($this->clients['clients.txt']['players'][$id]);
		}
	}
	
	public function deleteGroup($name) {
		if(array_key_exists($name, $this->clients['clients.txt']['groups']['Admin'])) unset($this->clients['clients.txt']['groups']['Admin'][$name]);
		if(array_key_exists($name, $this->clients['clients.txt']['groups']['Immunity'])) unset($this->clients['clients.txt']['groups']['Immunity'][$name]);
	}
	
	public function getGroup($group) {
		$result = array('Admin' => array(), 'Immunity' => array());
		if(array_key_exists($group, $this->clients['clients.txt']['groups']['Admin'])) $result['Admin'] = explode(' ', $this->clients['clients.txt']['groups']['Admin'][$group]);
		if(array_key_exists($group, $this->clients['clients.txt']['groups']['Immunity'])) $result['Immunity'] = explode(' ', $this->clients['clients.txt']['groups']['Immunity'][$group]);
		
		return $result;
	}
	
	public function getGroups() {
		$groups = array();
		$groups_buffer = $this->clients['clients.txt']['groups'];
		
		foreach($groups_buffer['Admin'] as $group => $flags) {
			if(!in_array($group, $groups)) $groups[] = $group;
		}
		
		foreach($groups_buffer['Immunity'] as $group => $flags) {
			if(!in_array($group, $groups)) $groups[] = $group;
		}
		
		return $groups;
	}
	
	public function getId($steam) {
		foreach($this->clients['clients.txt']['players'] as $player => $info) {
			if($info['steam'] == $steam) return $player;
		}
		return false;
	}
	
	public function getPlayers() {
		return $this->clients['clients.txt']['players'];
	}
	
	public function getPlayer($id) {
		if($this->hasId($id)) return $this->clients['clients.txt']['players'][$id];
		return false;
	}
	
	public function getPlayerFlags($id) {
		$flags = array('Admin' => array(), 'Immunity' => array());
		$player = $this->getPlayer($id);
		if($player) {
			$flags['Admin'] = explode(' ', $player['flags']['Admin']);
			$flags['Immunity'] = explode(' ', $player['flags']['Immunity']);
		}
		return $flags;
	}
	
	public function getPlayerGroups($id) {
		$groups = array();
		$player = $this->getPlayer($id);
		if($player) {
			$admin = explode(' ', $player['groups']['Admin']);
			$immunity = explode(' ', $player['groups']['Immunity']);
			
			foreach($admin as $group) {
				if(!in_array($group, $groups)) $groups[] = $group;
			}
			
			foreach($immunity as $group) {
				if(!in_array($group, $groups)) $groups[] = $group;
			}
		}
		return $groups;
	}
	
	public function hasGroup($group) {
		$groups = $this->getGroups();
		return in_array($group, $groups);
	}
	
	public function hasId($id) {
		return array_key_exists($id, $this->clients['clients.txt']['players']);
	}
	
	public function hasSteam($steam) {
		foreach($this->clients['clients.txt']['players'] as $player => $info) {
			if(array_key_exists('steam', $info) && $info['steam'] == $steam) return true;
		}
		return false;
	}
	
	public function save() {
		$this->dm->setContents('clients.txt', $this->ap->export($this->clients));
	}
	
	public function setGroupFlags($id, $flags) {
		if(is_array($flags)) {
			if($this->hasGroup($id)) {
				if(array_key_exists('Admin', $flags)) $this->clients['clients.txt']['groups']['Admin'][$id] = $this->concatArray($flags['Admin']);
				if(array_key_exists('Immunity', $flags)) $this->clients['clients.txt']['groups']['Immunity'][$id] = $this->concatArray($flags['Immunity']);
			}
		}
	}
	
	public function setPlayerFlags($id, $flags) {
		if(is_array($flags)) {
			if($this->hasId($id)) {
				if(array_key_exists('Admin', $flags)) $this->clients['clients.txt']['players'][$id]['flags']['Admin'] = $this->concatArray($flags['Admin']);
				if(array_key_exists('Immunity', $flags)) $this->clients['clients.txt']['players'][$id]['flags']['Immunity'] = $this->concatArray($flags['Immunity']);
			}
		}
	}
	
	public function setPlayerGroups($id, $groups) {
		if(is_array($groups)) {
			$player = $this->getPlayer($id);
			if($player) {
				$groups = $this->concatArray($groups);
				$this->clients['clients.txt']['players'][$id]['groups']['Admin'] = $groups;
				$this->clients['clients.txt']['players'][$id]['groups']['Immunity'] = $groups;
			}
		}
	}
	
	protected function concatArray($flags) {
		$result = '';
		foreach($flags as $flag) {
			if(strlen($result) > 0) $result .= ' ';
			$result .= $flag;
		}
		return $result;
	}
	
	protected function validateClients() {
		if(!is_array($this->clients)) $this->clients = array();
		if(!array_key_exists('clients.txt', $this->clients)) $this->clients['clients.txt'] = array();
		if(!array_key_exists('version', $this->clients['clients.txt'])) $this->clients['clients.txt']['version'] = '1';
		if(!array_key_exists('players', $this->clients['clients.txt'])) $this->clients['clients.txt']['players'] = array();
		if(!array_key_exists('groups', $this->clients['clients.txt'])) $this->clients['clients.txt']['groups'] = array();
		
		foreach($this->clients['clients.txt']['players'] as $id => $info) {
			if(!array_key_exists('groups', $this->clients['clients.txt']['players'][$id])) $this->clients['clients.txt']['players'][$id]['groups'] = array();
			if(!array_key_exists('Admin', $this->clients['clients.txt']['players'][$id]['groups'])) $this->clients['clients.txt']['players'][$id]['groups']['Admin'] = '';
			if(!array_key_exists('Immunity', $this->clients['clients.txt']['players'][$id]['groups'])) $this->clients['clients.txt']['players'][$id]['groups']['Immunity'] = '';
			
			if(!array_key_exists('flags', $this->clients['clients.txt']['players'][$id])) $this->clients['clients.txt']['players'][$id]['flags'] = array();
			if(!array_key_exists('Admin', $this->clients['clients.txt']['players'][$id]['flags'])) $this->clients['clients.txt']['players'][$id]['flags']['Admin'] = '';
			if(!array_key_exists('Immunity', $this->clients['clients.txt']['players'][$id]['flags'])) $this->clients['clients.txt']['players'][$id]['flags']['Immunity'] = '';
		}
	}
}