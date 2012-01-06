<?php

function totalTimeOnline($time) {
	
	if($time > 60) {
		$time = $time / 60;
		
		if($time > 60) {
			$time = $time / 60;
			
			if($time > 24) {
				$time = $time / 24;
				
				return round($time) . ' days';
			} else {
				return round($time) . ' hours';
			}
		} else {
			return round($time) . ' minutes';
		}
	} else {
		return round($time) . ' seconds';
	}
	
}

?>