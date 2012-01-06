<?php
class Ranks {

	protected $core;
	protected $dm;
	protected $ranks = array();
	protected $playerCount = 200;

	public function Ranks($core) {
		$this->core = $core;
	}
	
	protected function initRanks($playerCount = null, $start = null) {
		if($this->ranks == null) {
			if($playerCount === null && $start === null) {
				$cache = $this->core->loadComponent('Cache');
				$ranks = $cache->retrieveArray('ranks');
				if(!empty($ranks)) {
					$this->ranks = $ranks;
					return;
				}
			}
			
			if($start === null) $start = 0;
			if($playerCount !== null) $this->playerCount = $playerCount;
			$this->playerCount += $start;
			
			$this->dm = $this->core->loadComponent('DataManager');
			$ranks = $this->dm->getFile('mani_ranks.txt');
		
			for($i = $start; $i < count($ranks); $i++) {
				$line = $ranks[$i];
				$rank = $this->parseRank($line);
				if($rank != null) $this->ranks[$rank['steam_id']] = $rank;
				if($this->playerCount > 0 && $i >= $this->playerCount - 1) break;
			}
			if($playerCount === null && $start === null) $cache->cacheArray('ranks', $this->ranks);
		}
	}
	
	protected function parseRank($line) {
		$explode = explode(',', $line);
		
		if(count($explode) == 65) {
			$result = array(
				'steam_id' => $explode[0],
				'ip_address' => $explode[1],
				'last_connected' => $explode[2],
				'rank' => $explode[3],
				'points' => $explode[4],
				'deaths' => $explode[5],
				'headshots' => $explode[6],
				'kills' => $explode[7],
				'suicides' => $explode[8],
				'team_kills' => $explode[9],
				'total_time_online' => $explode[10],
				'damage' => $explode[11],
				'hit_generic' => $explode[12],
				'hit_head' => $explode[13],
				'hit_chest' => $explode[14],
				'hit_stomach' => $explode[15],
				'hit_leftarm' => $explode[16],
				'hit_rightarm' => $explode[17],
				'hit_leftleg' => $explode[18],
				'hit_rightleg' => $explode[19],
				'ak47_kills' => $explode[20],
				'm4a1_kills' => $explode[21],
				'mp5navy_kills' => $explode[22],
				'awp_kills' => $explode[23],
				'usp_kills' => $explode[24],
				'deagle_kills' => $explode[25],
				'aug_kills' => $explode[26],
				'hegrenade_kills' => $explode[27],
				'xm1014_kills' => $explode[28],
				'knife_kills' => $explode[29],
				'g3sg1_kills' => $explode[30],
				'sg550_kills' => $explode[31],
				'galil_kills' => $explode[32],
				'm3_kills' => $explode[33],
				'scout_kills' => $explode[34],
				'sg552_kills' => $explode[35],
				'famas_kills' => $explode[36],
				'glock_kills' => $explode[37],
				'tmp_kills' => $explode[38],
				'ump45_kills' => $explode[39],
				'p90_kills' => $explode[40],
				'm249_kills' => $explode[41],
				'elite_kills' => $explode[42],
				'mac10_kills' => $explode[43],
				'fiveseven_kills' => $explode[44],
				'p228_kills' => $explode[45],
				'flashbang_kills' => $explode[46],
				'smokegrenade_kills' => $explode[47],
				'shots_fired' => $explode[48],
				'shots_hit' => $explode[49],
				'bombs_planted' => $explode[50],
				'bombs_defused' => $explode[51],
				'hostages_rescued' => $explode[52],
				'hostages_touched' => $explode[53],
				'hostages_killed' => $explode[54],
				'bombs_exploded' => $explode[55],
				'bombs_dropped' => $explode[56],
				'bomb_defusals_attempted' => $explode[57],
				'vip_escaped' => $explode[58],
				'vip_killed' => $explode[59],
				'won_as_ct' => $explode[60],
				'lost_as_ct' => $explode[61],
				'won_as_t' => $explode[62],
				'lost_as_t' => $explode[63],
				'player_name' => htmlspecialchars($explode[64]),
				'hostage_touch_rescue_ratio' => @round($explode[52] / $explode[53], 2),
				'bombs_plant_explode_ratio' => @round($explode[50] / $explode[55], 2),
				'bombs_attempt_defuse_ratio' => @round($explode[51] / $explode[57], 2),
				'accuracy' => @round($explode[49] / $explode[48] * 100, 2),
				'bullets_per_minute' => @round($explode[48] / ($explode[10] / 60), 2),
				'kills_per_minute' => @round($explode[7] / ($explode[10] / 60), 2),
				'bullets_per_kill' => @round($explode[49] / $explode[7], 2),
				'damage_per_kill' => @round($explode[11] / $explode[7], 2),
				'ct_win_loss_ratio' => @round($explode[60] / $explode[61], 2),
				't_win_loss_ratio' => @round($explode[62] / $explode[63], 2)
			);
			
			return $result;
		}
		
		return null;
	}
	
	public function getPlayer($steamid) {
		$this->initRanks();
		if(array_key_exists($steamid, $this->ranks)) return $this->ranks[$steamid];
		return null;
	}
	
	public function getPlayers($playerCount = null, $start = null) {
		$this->initRanks($playerCount, $start);
		return $this->ranks;
	}

}
?>
