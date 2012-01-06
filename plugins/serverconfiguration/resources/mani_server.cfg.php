<?php
$res_config_name = 'Mani Server';

$res_prefixes = array(
'mani',
);

$res_config = array (
	'Adverts' => array (
	
		'mani_adverts' => array (
		
			'value'			=> '1',
			'info' 			=> 'Are adverts on?',
			'field_type'	=> '1',
			'advanced'		=> '0',
					
		),
		
		'mani_time_between_adverts' => array (
		
			'value'			=> '120',
			'info' 			=> 'Time between adverts displayed',
			'field_type' 	=> '3', 
			'advanced'		=> '0',
		
		),
		
		'mani_adverts_chat_area' => array (
		
			'value'			=> '1',
			'info' 			=> 'Allow adverts in chat area of screen',
			'field_type' 	=> '1',
			'advanced'		=> '0',
		
		),
		
		'mani_adverts_top_left' => array (
		
			'value'			=> '1',
			'info' 			=> 'Allow adverts in top left corner of screen',
			'field_type' 	=> '1',
			'advanced'		=> '0',
		
		),
		
		'mani_advert_col_red' => array (
		
			'value'			=> '0',
			'info' 			=> 'Red component colour of adverts (255 = max)',
			'field_type' 	=> '3', 
			'advanced'		=> '1',
		
		),
		
		'mani_advert_col_green' => array (
		
			'value'			=> '0',
			'info' 			=> 'Green component colour of adverts (255 = max)',
			'field_type' 	=> '3',
			'advanced'		=> '1',
		
		),
		
		'mani_advert_col_blue' => array (
		
			'value'			=> '255',
			'info' 			=> 'Blue component colour of adverts (255 = max)',
			'field_type' 	=> '3',
			'advanced'		=> '1',
		
		),
				
		'mani_advert_dead_only' => array (
		
			'value'			=> '0',
			'info' 			=> 'Only dead people can see adverts',
			'field_type'	=> '1',
			'advanced'		=> '0',
					
		),
		
		'mani_adverts_bottom_area' => array (
		
			'value'			=> '1',
			'info' 			=> 'Show adverts in the hint text area',
			'field_type'	=> '1',
			'advanced'		=> '0',
					
		),

	),
	
	'Stats' => array (
	
		'mani_stats' => array (
		
			'value'			=> '0',
			'info' 			=> 'Enable stats module?',
			'field_type'	=> '1',
			'advanced'		=> '0',
					
		),

		'mani_stats_mode' => array (
		
			'value'			=> '1',
			'info' 			=> 'Stats Mode',
			'field_type'	=> '2',
			'options' 		=> array (
			
				'0'	=> 'Calculate once per map',
				'1'	=> 'Calculate at end of each round (CSS Only)',
			
			),
			'advanced'		=> '0',
					
		),
		
		'mani_stats_drop_player_days' => array (
		
			'value'			=> '5',
			'info' 			=> 'Number of days since player last connected before they are removed from the stats list',
			'field_type'	=> '3',
			'advanced'		=> '0',
					
		),
		
		'mani_stats_calculate' => array (
		
			'value'			=> '3',
			'info' 			=> 'Type of stats calculation to use for ranking.',
			'field_type'	=> '2', 
			'options' 		=> array (
			
				'0'	=> 'Rank by pure kills',
				'1'	=> 'Rank by kill death ratio',
				'2'	=> 'Rank by kills minus deaths',
				'3'	=> 'Rank by points',
			
			),
			'advanced'		=> '0',
		
		),
		
		'mani_stats_kills_required' => array (
		
			'value'			=> '0',
			'info' 			=> 'Number of kills required before a player is given a rank.',
			'field_type'	=> '3',
			'advanced'		=> '0',
					
		),
				
		'mani_stats_kills_before_points_removed' => array (
		
			'value'			=> '0',
			'info' 			=> 'Number of kills + deaths required before a victims points are affected by the attackers kills',
			'field_type'	=> '3',
			'advanced'		=> '1',
					
		),
		
		'mani_stats_top_display_time' => array (
		
			'value'			=> '10',
			'info' 			=> 'Defines how long a top display lasts for before it fades (5 - 30 seconds)',
			'field_type'	=> '3',
			'advanced'		=> '0',
					
		),
		
		'mani_stats_show_rank_to_all' => array (
		
			'value'			=> '1',
			'info' 			=> 'Defines whether other players see your rank when you type rank',
			'field_type'	=> '2',
			'options' 		=> array (
			
				'1'	=> 'Show rank to all players',
				'0'	=> 'Only show rank to player who typed rank',
			
			),
			'advanced'		=> '0',
					
		),
		
		'mani_stats_write_text_file' => array (
		
			'value'			=> '1',
			'info' 			=> 'Enables writing of ranks to a text file called mani_ranks.txt for export to a web page',
			'field_type'	=> '1',
			'advanced'		=> '1',
					
		),
		
		'mani_stats_top_display_time' => array (
		
			'value'			=> '0',
			'info' 			=> 'How often you want the stats to recalculate. This should be used if you have long map times with no end of round.  0 = disables frequency calculating, > 0 = time in minutes between each stats',
			'field_type'	=> '3',
			'advanced'		=> '0',
					
		),
		
		'mani_stats_write_frequency_to_disk' => array (
		
			'value'			=> '0',
			'info' 			=> 'Set in minutes how often you want the stats to recalculate AND write to disk. This should be used if you have long map times with no end of round. 0 = disabled, > 0 = time in minutes between each save and recalculation of ranks',
			'field_type'	=> '3',
			'advanced'		=> '0',
					
		),
		
		'mani_stats_by_steam_id' => array (
		
			'value'			=> '1',
			'info' 			=> 'Defines whether you want your ranks to be by steam id',
			'field_type'	=> '2',
			'options' 		=> array (
			
				'1'	=> 'Ranks to be by steam id (default)',
				'0'	=> 'Not using steam ids (Lan mode)',
			
			),
			'advanced'		=> '0',
					
		),
		
		'mani_stats_include_bot_kills' => array (
		
			'value'			=> '0',
			'info' 			=> 'Defines whether bot kills made are included in stats',
			'field_type'	=> '2',
			'options' 		=> array (
			
				'1'	=> 'Include any bot kills made in stats',
				'0'	=> 'Killing a bot does not count to stats',
			
			),
			'advanced'		=> '0',
					
		),
		
		'mani_stats_decay_start' => array (
		
			'value'			=> '2',
			'info' 			=> 'Stats points decay settings. Number of days since last connect that points decay will start',
			'field_type'	=> '3',
			'advanced'		=> '0',
					
		),
		
		'mani_stats_decay_period' => array (
		
			'value'			=> '7',
			'info' 			=> 'Decay period (days). Points will drop to 500 over this period of time.',
			'field_type'	=> '3',
			'advanced'		=> '0',
					
		),
		
		'mani_stats_decay_restore_points_on_connect' => array (
		
			'value'			=> '0',
			'info' 			=> 'Check to restore a players points back to the full amount if decay has set in',
			'field_type'	=> '1',
			'advanced'		=> '0',
					
		),
		
		'mani_stats_points_add_only' => array (
		
			'value'			=> '0',
			'info' 			=> 'If selected a victim will never lose points ala BF2',
			'field_type'	=> '1',
			'advanced'		=> '1',
					
		),
		
		'mani_stats_ignore_ranks_after_x_days' => array (
		
			'value'			=> '21',
			'info' 			=> 'Number of days before a player is made invisible from ranks. If player rejoins their rank will be restored.',
			'field_type'	=> '3',
			'advanced'		=> '0',
					
		),
		
		'mani_stats_points_multiplier' => array (
		
			'value'			=> '5.0',
			'info' 			=> 'Multiplier used in points calculation, default is 5.0',
			'field_type'	=> '3',
			'advanced'		=> '0',
					
		),
		
		'mani_stats_points_death_multiplier' => array (
		
			'value'			=> '1.0',
			'info' 			=> 'Multiplier for victim points lost. e.g you want victims to lose half points for dying set to 0.5 etc',
			'field_type'	=> '3',
			'advanced'		=> '0',
					
		),
		
	),
	
	'Victim Stats'  => array (
	
		'mani_show_victim_stats' => array (
		
			'value'			=> '0',
			'info' 			=> 'Allow the use of victim stats',
			'field_type'	=> '1',
			'advanced'		=> '0',
					
		),
		
		'mani_show_victim_stats_inflicted_only' => array (
		
			'value'			=> '0',
			'info' 			=> 'Select if you do not want to see damage taken from yourself',
			'field_type'	=> '1',
			'advanced'		=> '0',
					
		),
		
		'mani_player_settings_damage' => array (
		
			'value'			=> '0',
			'info' 			=> 'Controls players victim stats mode, set when they first join and stored in player_settings.dat',
			'field_type'	=> '2', 
			'options' 		=> array (
			
				'0'	=> 'Mode 0',
				'1'	=> 'Mode 1',
				'2'	=> 'Mode 2',
				'3'	=> 'GUI mode',
			
			),
			'advanced'		=> '0',
					
		),
		
	),
	
	'Most Destructive'  => array (
	
		'mani_stats_most_destructive' => array (
		
			'value'			=> '1',
			'info' 			=> 'Enable most destructive stats output',
			'field_type'	=> '1',
			'advanced'		=> '0',
					
		),
	
		'mani_stats_most_destructive_mode' => array (
		
			'value'			=> '0',
			'info' 			=> 'Off = By Kills then damage, On = by damage alone',
			'field_type'	=> '1',
			'advanced'		=> '0',
					
		),
		
		'mani_player_settings_destructive' => array (
		
			'value'			=> '1',
			'info' 			=> 'Controls players most destructive stats mode, set first join and stored in player_settings.txt',
			'field_type'	=> '1',
			'advanced'		=> '0',
					
		),
	
	),
	
	'Team Kill/Wound Protection'  => array (
	
		'mani_tk_protection' => array (
		
			'value'			=> '0',
			'info' 			=> 'Enable TK Protection',
			'field_type'	=> '1',
			'advanced'		=> '0',
					
		),
		
		'mani_tk_forgive' => array (
		
			'value'			=> '1',
			'info' 			=> 'Enable TK Punishment menu',
			'field_type'	=> '1',
			'advanced'		=> '0',
					
		),
		
		'mani_tk_spawn_time' => array (
		
			'value'			=> '5',
			'info' 			=> 'Time allowed after freezetime where spawn protection is enabled',
			'field_type'	=> '3',
			'advanced'		=> '0',
					
		),
		
		'mani_tk_allow_bots_to_punish' => array (
		
			'value'			=> '1',
			'info' 			=> 'Defines whether bots can run tk punish options on other player',
			'field_type'	=> '1',
			'advanced'		=> '0',
					
		),
		
		'mani_tk_allow_bots_to_add_violations' => array (
		
			'value'			=> '0',
			'info' 			=> 'Defines whether when tking a bot adds to a players tk violation count',
			'field_type'	=> '1',
			'advanced'		=> '0',
					
		),
		
		'mani_tk_offences_for_ban' => array (
		
			'value'			=> '7',
			'info' 			=> 'Number of tk violations before player is banned',
			'field_type'	=> '3',
			'advanced'		=> '0',
					
		),
		
		'mani_tk_ban_time' => array (
		
			'value'			=> '5',
			'info' 			=> 'Time in minutes for a tk ban, 0 = permanent',
			'field_type'	=> '3',
			'advanced'		=> '0',
					
		),
		
		'mani_tk_slap_on_team_wound' => array (
		
			'value'			=> '0',
			'info' 			=> 'When set to 1 a player will be slapped and have their view moved when team wounding.',
			'field_type'	=> '1',
			'advanced'		=> '0',
					
		),
		
		'mani_tk_slap_on_team_wound_damage' => array (
		
			'value'			=> '0',
			'info' 			=> 'Sets the amount of damage a team wound inflicts on the attacker',
			'field_type'	=> '1',
			'advanced'		=> '0',
					
		),
		
		'mani_tk_show_opposite_team_wound' => array (
		
			'value'			=> '1',
			'info' 			=> 'If set to 1 shows opposition team wounds in chat and all team wounds if you are spectator, off = normal css style',
			'field_type'	=> '1',
			'advanced'		=> '0',
					
		),
		
		'mani_tk_add_violation_without_forgive' => array (
		
			'value'			=> '0',
			'info' 			=> 'Defines whether a players tk violation count is incremented even if forgiven',
			'field_type'	=> '1',
			'advanced'		=> '0',
					
		),
		
		'mani_tk_allow_forgive_option' => array (
		
			'value'			=> '1',
			'info' 			=> 'Turn on forgive option for tk punishments',
			'field_type'	=> '1',
			'advanced'		=> '0',
					
		),
		
		'mani_tk_allow_blind_option' => array (
		
			'value'			=> '1',
			'info' 			=> 'Defines whether the blind option can be used on players',
			'field_type'	=> '1',
			'advanced'		=> '0',
					
		),
		
		'mani_tk_blind_amount' => array (
		
			'value'			=> '253',
			'info' 			=> 'Amount of blindness for blind punishment (255 = completely blind)',
			'field_type'	=> '3',
			'advanced'		=> '0',
					
		),
		

		'mani_tk_allow_slap_option' => array (
		
			'value'			=> '1',
			'info' 			=> 'Turn on slap option for tk punishments',
			'field_type'	=> '1',
			'advanced'		=> '0',
					
		),
		
		'mani_tk_slap_to_damage' => array (
		
			'value'			=> '10',
			'info' 			=> 'Amount of health that a player will slapped to',
			'field_type'	=> '3',
			'advanced'		=> '0',
					
		),
				
		'mani_tk_allow_cash_option' => array (
		
			'value'			=> '1',
			'info' 			=> 'Turn on cash option for tk punishments',
			'field_type'	=> '1',
			'advanced'		=> '0',
					
		),
		
		'mani_tk_cash_percent' => array (
		
			'value'			=> '30',
			'info' 			=> 'Amount of cash to take from a team killer %',
			'field_type'	=> '3',
			'advanced'		=> '0',
					
		),
		
		'mani_tk_allow_freeze_option' => array (
		
			'value'			=> '1',
			'info' 			=> 'Turn on freeze option for tk punishments',
			'field_type'	=> '1',
			'advanced'		=> '0',
					
		),
		
		'mani_tk_allow_drugged_option' => array (
		
			'value'			=> '1',
			'info' 			=> 'Turn on drug option for tk punishments',
			'field_type'	=> '1',
			'advanced'		=> '0',
					
		),
		
		'mani_tk_allow_burn_option' => array (
		
			'value'			=> '1',
			'info' 			=> 'Turn on burn option for tk punishments',
			'field_type'	=> '1',
			'advanced'		=> '0',
					
		),
		
		'mani_tk_burn_time' => array (
		
			'value'			=> '100',
			'info' 			=> 'Burn time should be for in seconds for a tk punishment',
			'field_type'	=> '3',
			'advanced'		=> '0',
		
		),
		
		'mani_tk_allow_slay_option' => array (
		
			'value'			=> '1',
			'info' 			=> 'Turn on slay option for tk punishments',
			'field_type'	=> '1',
			'advanced'		=> '0',
					
		),
		
		'mani_tk_team_wound_reflect' => array (
		
			'value'			=> '0',
			'info' 			=> 'Main option to turn on damage reflection',
			'field_type'	=> '1',
			'advanced'		=> '0',
					
		),
		
		'mani_tk_team_wound_reflect_threshold' => array (
		
			'value'			=> '5',
			'info' 			=> 'Number of team wounds required during the course of a map before reflective damage kicks in',
			'field_type'	=> '3',
			'advanced'		=> '0',
		
		),
		
		'mani_tk_team_wound_reflect_ratio' => array (
		
			'value'			=> '1.0',
			'info' 			=> 'Damage multiplier inflicts damage back on the attacker. When set to 1.0, its reflected, if set at 2.0 the damage is doubled',
			'field_type'	=> '3',
			'advanced'		=> '0',
		
		),
		
		'mani_tk_team_wound_reflect_ratio_increase' => array (
		
			'value'			=> '0.1',
			'info' 			=> 'Increases the reflection ratio each time the player teamwounds another player.',
			'field_type'	=> '3',
			'advanced'		=> '0',
		
		),
		
		'mani_tk_allow_time_bomb_option' => array (
		
			'value'			=> '1',
			'info' 			=> 'Turn on tk time bomb option',
			'field_type'	=> '1',
			'advanced'		=> '0',
					
		),
		
		'mani_tk_time_bomb_seconds' => array (
		
			'value'			=> '10',
			'info' 			=> 'Defines the time before the bomb goes off',
			'field_type'	=> '3',
			'advanced'		=> '0',
					
		),
		
		'mani_tk_time_bomb_blast_radius' => array (
		
			'value'			=> '1000',
			'info' 			=> 'Defines the bomb blast radius',
			'field_type'	=> '3',
			'advanced'		=> '0',
					
		),
		
		'mani_tk_time_bomb_show_beams' => array (
		
			'value'			=> '1',
			'info' 			=> 'Show tk bomb beams',
			'field_type'	=> '1',
			'advanced'		=> '0',
					
		),
		
		'mani_tk_time_bomb_blast_mode' => array (
		
			'value'			=> '2',
			'info' 			=> 'Who the bomb blast affects',
			'field_type'	=> '2', 
			'options' 		=> array (
			
				'0'	=> 'Player only',
				'1'	=> 'Players on same team',
				'2'	=> 'All players',

			),
			'advanced'		=> '0',
					
		),
		
		'mani_tk_time_bomb_beep_radius' => array (
		
			'value'			=> '0',
			'info' 			=> 'Radius of beep circle, 0 = same radius as the bomb blast',
			'field_type'	=> '3',
			'advanced'		=> '0',
			
		),
		
		'mani_tk_allow_fire_bomb_option' => array (
		
			'value'			=> '1',
			'info' 			=> 'Turns on tk fire bomb option',
			'field_type'	=> '1',
			'advanced'		=> '0',
					
		),
		
		'mani_tk_fire_bomb_seconds' => array (
		
			'value'			=> '10',
			'info' 			=> 'Defines the time before the bomb goes off',
			'field_type'	=> '3',
			'advanced'		=> '0',
					
		),
		
		'mani_tk_fire_bomb_blast_radius' => array (
		
			'value'			=> '1000',
			'info' 			=> 'Defines the bomb blast radius',
			'field_type'	=> '3',
			'advanced'		=> '0',
					
		),
		
		'mani_tk_fire_bomb_show_beams' => array (
		
			'value'			=> '1',
			'info' 			=> 'Show fire bomb beams',
			'field_type'	=> '1',
			'advanced'		=> '0',
					
		),
		
		'mani_tk_fire_bomb_blast_mode' => array (
		
			'value'			=> '2',
			'info' 			=> 'Who the bomb blast affects',
			'field_type'	=> '2', 
			'options' 		=> array (
			
				'0'	=> 'Player only',
				'1'	=> 'Players on same team',
				'2'	=> 'All players',

			),
			'advanced'		=> '0',
					
		),
		
		'mani_tk_fire_bomb_beep_radius' => array (
		
			'value'			=> '0',
			'info' 			=> 'Radius of beep circle, 0 = same radius as the bomb blast',
			'field_type'	=> '3',
			'advanced'		=> '0',
			
		),
		
		'mani_tk_allow_freeze_bomb_option' => array (
		
			'value'			=> '1',
			'info' 			=> 'Turns on tk freeze bomb option',
			'field_type'	=> '1',
			'advanced'		=> '0',
					
		),
		
		'mani_tk_freeze_bomb_seconds' => array (
		
			'value'			=> '10',
			'info' 			=> 'Defines the time before the bomb goes off',
			'field_type'	=> '3',
			'advanced'		=> '0',
					
		),
		
		'mani_tk_freeze_bomb_blast_radius' => array (
		
			'value'			=> '1000',
			'info' 			=> 'Defines the bomb blast radius',
			'field_type'	=> '3',
			'advanced'		=> '0',
					
		),
		
		'mani_tk_freeze_bomb_show_beams' => array (
		
			'value'			=> '1',
			'info' 			=> 'Show fire bomb beams',
			'field_type'	=> '1',
			'advanced'		=> '0',
					
		),
		
		'mani_tk_freeze_bomb_blast_mode' => array (
		
			'value'			=> '2',
			'info' 			=> 'Who the bomb blast affects',
			'field_type'	=> '2', 
			'options' 		=> array (
			
				'0'	=> 'Player only',
				'1'	=> 'Players on same team',
				'2'	=> 'All players',

			),
			'advanced'		=> '0',
					
		),
		
		'mani_tk_freeze_bomb_beep_radius' => array (
		
			'value'			=> '0',
			'info' 			=> 'Radius of beep circle, 0 = same radius as the bomb blast',
			'field_type'	=> '3',
			'advanced'		=> '0',
			
		),
		
		'mani_tk_allow_beacon_option' => array (
		
			'value'			=> '1',
			'info' 			=> 'Turn on TK Beacon option',
			'field_type'	=> '1',
			'advanced'		=> '0',
					
		),
		
		'mani_tk_beacon_radius' => array (
		
			'value'			=> '384',
			'info' 			=> 'Radius of beacon circle',
			'field_type'	=> '3',
			'advanced'		=> '0',
			
		),
			
	),
	
	'Weapon Weighting For CSS Stats' => array (
		
		'mani_stats_css_weapon_ak47' => array (
		
			'value'			=> '1.0',
			'info' 			=> 'mani_stats_css_weapon_ak47',
			'field_type'	=> '3',
			'advanced'		=> '0',
					
		),
		
		'mani_stats_css_weapon_m4a1' => array (
		
			'value'			=> '1.0',
			'info' 			=> 'mani_stats_css_weapon_m4a1',
			'field_type'	=> '3',
			'advanced'		=> '0',
					
		),
		
		'mani_stats_css_weapon_mp5navy' => array (
		
			'value'			=> '1.2',
			'info' 			=> 'mani_stats_css_weapon_mp5navy',
			'field_type'	=> '3',
			'advanced'		=> '0',
					
		),
		
		'mani_stats_css_weapon_awp' => array (
		
			'value'			=> '1.0',
			'info' 			=> 'mani_stats_css_weapon_awp',
			'field_type'	=> '3',
			'advanced'		=> '0',
					
		),
		
		'mani_stats_css_weapon_usp' => array (
		
			'value'			=> '1.4',
			'info' 			=> 'mani_stats_css_weapon_usp',
			'field_type'	=> '3',
			'advanced'		=> '0',
					
		),

		'mani_stats_css_weapon_deagle' => array (
		
			'value'			=> '1.2',
			'info' 			=> 'mani_stats_css_weapon_deagle',
			'field_type'	=> '3',
			'advanced'		=> '0',
					
		),

		'mani_stats_css_weapon_aug' => array (
		
			'value'			=> '1.0',
			'info' 			=> 'mani_stats_css_weapon_aug',
			'field_type'	=> '3',
			'advanced'		=> '0',
					
		),

		'mani_stats_css_weapon_hegrenade' => array (
		
			'value'			=> '1.8',
			'info' 			=> 'mani_stats_css_weapon_hegrenade',
			'field_type'	=> '3',
			'advanced'		=> '0',
					
		), 

		'mani_stats_css_weapon_xm1014' => array (
		
			'value'			=> '1.1',
			'info' 			=> 'mani_stats_css_weapon_xm1014',
			'field_type'	=> '3',
			'advanced'		=> '0',
					
		),

		'mani_stats_css_weapon_knife' => array (
		
			'value'			=> '2.0',
			'info' 			=> 'mani_stats_css_weapon_knife',
			'field_type'	=> '3',
			'advanced'		=> '0',
					
		),

		'mani_stats_css_weapon_g3sg1' => array (
		
			'value'			=> '0.8',
			'info' 			=> 'mani_stats_css_weapon_g3sg1',
			'field_type'	=> '3',
			'advanced'		=> '0',
					
		),

		'mani_stats_css_weapon_sg550' => array (
		
			'value'			=> '0.8',
			'info' 			=> 'mani_stats_css_weapon_sg550',
			'field_type'	=> '3',
			'advanced'		=> '0',
					
		),

		'mani_stats_css_weapon_galil' => array (
		
			'value'			=> '1.1',
			'info' 			=> 'mani_stats_css_weapon_galil',
			'field_type'	=> '3',
			'advanced'		=> '0',
					
		),

		'mani_stats_css_weapon_m3' => array (
		
			'value'			=> '1.2',
			'info' 			=> 'mani_stats_css_weapon_m3',
			'field_type'	=> '3',
			'advanced'		=> '0',
					
		),

		'mani_stats_css_weapon_scout' => array (
		
			'value'			=> '1.1',
			'info' 			=> 'mani_stats_css_weapon_scout',
			'field_type'	=> '3',
			'advanced'		=> '0',
					
		),

		'mani_stats_css_weapon_sg552' => array (
		
			'value'			=> '1.0',
			'info' 			=> 'mani_stats_css_weapon_sg552',
			'field_type'	=> '3',
			'advanced'		=> '0',
					
		),

		'mani_stats_css_weapon_famas' => array (
		
			'value'			=> '1.0',
			'info' 			=> 'mani_stats_css_weapon_famas',
			'field_type'	=> '3',
			'advanced'		=> '0',
					
		),

		'mani_stats_css_weapon_glock' => array (
		
			'value'			=> '1.4',
			'info' 			=> 'mani_stats_css_weapon_glock',
			'field_type'	=> '3',
			'advanced'		=> '0',
					
		),

		'mani_stats_css_weapon_tmp' => array (
		
			'value'			=> '1.5',
			'info' 			=> 'mani_stats_css_weapon_tmp',
			'field_type'	=> '3',
			'advanced'		=> '0',
					
		),

		'mani_stats_css_weapon_ump45' => array (
		
			'value'			=> '1.2',
			'info' 			=> 'mani_stats_css_weapon_ump45',
			'field_type'	=> '3',
			'advanced'		=> '0',
					
		),

		'mani_stats_css_weapon_p90' => array (
		
			'value'			=> '1.2',
			'info' 			=> 'mani_stats_css_weapon_p90',
			'field_type'	=> '3',
			'advanced'		=> '0',
					
		),

		'mani_stats_css_weapon_m249' => array (
		
			'value'			=> '1.2',
			'info' 			=> 'mani_stats_css_weapon_m249',
			'field_type'	=> '3',
			'advanced'		=> '0',
					
		),

		'mani_stats_css_weapon_elite' => array (
		
			'value'			=> '1.4',
			'info' 			=> 'mani_stats_css_weapon_elite',
			'field_type'	=> '3',
			'advanced'		=> '0',
					
		),

		'mani_stats_css_weapon_mac10' => array (
		
			'value'			=> '1.5',
			'info' 			=> 'mani_stats_css_weapon_mac10',
			'field_type'	=> '3',
			'advanced'		=> '0',
					
		),

		'mani_stats_css_weapon_fiveseven' => array (
		
			'value'			=> '1.5',
			'info' 			=> 'mani_stats_css_weapon_fiveseven',
			'field_type'	=> '3',
			'advanced'		=> '0',
					
		),

		'mani_stats_css_weapon_p228' => array (
		
			'value'			=> '1.5',
			'info' 			=> 'mani_stats_css_weapon_p228',
			'field_type'	=> '3',
			'advanced'		=> '0',
					
		),

		'mani_stats_css_weapon_flashbang' => array (
		
			'value'			=> '5.0',
			'info' 			=> 'mani_stats_css_weapon_flashbang',
			'field_type'	=> '3',
			'advanced'		=> '0',
					
		),

		'mani_stats_css_weapon_smokegrenade' => array (
		
			'value'			=> '5.0',
			'info' 			=> 'mani_stats_css_weapon_smokegrenade',
			'field_type'	=> '3',
			'advanced'		=> '0',
					
		),

		// Bonus Points for CSS Players

		'mani_stats_css_bomb_planted_bonus' => array (
		
			'value'			=> '10',
			'info' 			=> 'mani_stats_css_bomb_planted_bonus',
			'field_type'	=> '3',
			'advanced'		=> '0',
					
		),

		'mani_stats_css_bomb_defused_bonus' => array (
		
			'value'			=> '10',
			'info' 			=> 'mani_stats_css_bomb_defused_bonus',
			'field_type'	=> '3',
			'advanced'		=> '0',
					
		),

		'mani_stats_css_hostage_rescued_bonus' => array (
		
			'value'			=> '5',
			'info' 			=> 'mani_stats_css_hostage_rescued_bonus',
			'field_type'	=> '3',
			'advanced'		=> '0',
					
		),

		'mani_stats_css_hostage_killed_bonus' => array (
		
			'value'			=> '-15',
			'info' 			=> 'mani_stats_css_hostage_killed_bonus',
			'field_type'	=> '3',
			'advanced'		=> '0',
					
		),

		'mani_stats_css_vip_escape_bonus' => array (
		
			'value'			=> '4',
			'info' 			=> 'mani_stats_css_vip_escape_bonus',
			'field_type'	=> '3',
			'advanced'		=> '0',
					
		),

		'mani_stats_css_vip_killed_bonus' => array (
		
			'value'			=> '10',
			'info' 			=> 'mani_stats_css_vip_killed_bonus',
			'field_type'	=> '3',
			'advanced'		=> '0',
					
		),

		// Bonus Points for CSS Teams

		'mani_stats_css_ct_eliminated_team_bonus' => array (
		
			'value'			=> '2',
			'info' 			=> 'mani_stats_css_ct_eliminated_team_bonus',
			'field_type'	=> '3',
			'advanced'		=> '0',
					
		),

		'mani_stats_css_t_eliminated_team_bonus' => array (
		
			'value'			=> '2',
			'info' 			=> 'mani_stats_css_t_eliminated_team_bonus',
			'field_type'	=> '3',
			'advanced'		=> '0',
					
		),

		'mani_stats_css_ct_vip_escaped_team_bonus' => array (
		
			'value'			=> '10',
			'info' 			=> 'mani_stats_css_ct_vip_escaped_team_bonus',
			'field_type'	=> '3',
			'advanced'		=> '0',
					
		),

		'mani_stats_css_t_vip_assassinated_team_bonus' => array (
		
			'value'			=> '6',
			'info' 			=> 'mani_stats_css_t_vip_assassinated_team_bonus',
			'field_type'	=> '3',
			'advanced'		=> '0',
					
		),

		'mani_stats_css_t_target_bombed_team_bonus' => array (
		
			'value'			=> '5',
			'info' 			=> 'mani_stats_css_t_target_bombed_team_bonus',
			'field_type'	=> '3',
			'advanced'		=> '0',
					
		),

		'mani_stats_css_ct_all_hostages_rescued_team_bonus' => array (
		
			'value'			=> '10',
			'info' 			=> 'mani_stats_css_ct_all_hostages_rescued_team_bonus',
			'field_type'	=> '3',
			'advanced'		=> '0',
					
		),

		'mani_stats_css_ct_bomb_defused_team_bonus' => array (
		
			'value'			=> '5',
			'info' 			=> 'mani_stats_css_ct_bomb_defused_team_bonus',
			'field_type'	=> '3',
			'advanced'		=> '0',
					
		),

		'mani_stats_css_ct_hostage_killed_team_bonus' => array (
		
			'value'			=> '1',
			'info' 			=> 'mani_stats_css_ct_hostage_killed_team_bonus',
			'field_type'	=> '3',
			'advanced'		=> '0',
					
		),

		'mani_stats_css_ct_hostage_rescued_team_bonus' => array (
		
			'value'			=> '1',
			'info' 			=> 'mani_stats_css_ct_hostage_rescued_team_bonus',
			'field_type'	=> '3',
			'advanced'		=> '0',
					
		),

		'mani_stats_css_t_bomb_planted_team_bonus' => array (
		
			'value'			=> '2',
			'info' 			=> 'mani_stats_css_t_bomb_planted_team_bonus',
			'field_type'	=> '3',
			'advanced'		=> '0',
					
		),

		// Weapon weighting for DODS Stats
		// Making a weight 2.0 will double the points given/taken
		// Making a weight 0.5 will halve the points given/taken

		'mani_stats_dods_weapon_amerknife' => array (
		
			'value'			=> '3.0',
			'info' 			=> 'mani_stats_dods_weapon_amerknife',
			'field_type'	=> '3',
			'advanced'		=> '0',
					
		),

		'mani_stats_dods_weapon_spade' => array (
		
			'value'			=> '3.0',
			'info' 			=> 'mani_stats_dods_weapon_spade',
			'field_type'	=> '3',
			'advanced'		=> '0',
					
		),

		'mani_stats_dods_weapon_colt' => array (
		
			'value'			=> '1.6',
			'info' 			=> 'mani_stats_dods_weapon_colt',
			'field_type'	=> '3',
			'advanced'		=> '0',
					
		),

		'mani_stats_dods_weapon_p38' => array (
		
			'value'			=> '1.5',
			'info' 			=> 'mani_stats_dods_weapon_p38',
			'field_type'	=> '3',
			'advanced'		=> '0',
					
		),

		'mani_stats_dods_weapon_c96' => array (
		
			'value'			=> '1.5',
			'info' 			=> 'mani_stats_dods_weapon_c96',
			'field_type'	=> '3',
			'advanced'		=> '0',
					
		),

		'mani_stats_dods_weapon_garand' => array (
		
			'value'			=> '1.3',
			'info' 			=> 'mani_stats_dods_weapon_garand',
			'field_type'	=> '3',
			'advanced'		=> '0',
					
		),

		'mani_stats_dods_weapon_m1carbine' => array (
		
			'value'			=> '1.2',
			'info' 			=> 'mani_stats_dods_weapon_m1carbine',
			'field_type'	=> '3',
			'advanced'		=> '0',
					
		),

		'mani_stats_dods_weapon_k98' => array (
		
			'value'			=> '1.3',
			'info' 			=> 'mani_stats_dods_weapon_k98',
			'field_type'	=> '3',
			'advanced'		=> '0',
					
		),

		'mani_stats_dods_weapon_spring' => array (
		
			'value'			=> '1.5',
			'info' 			=> 'mani_stats_dods_weapon_spring',
			'field_type'	=> '3',
			'advanced'		=> '0',
					
		),

		'mani_stats_dods_weapon_k98_scoped' => array (
		
			'value'			=> '1.5',
			'info' 			=> 'mani_stats_dods_weapon_k98_scoped',
			'field_type'	=> '3',
			'advanced'		=> '0',
					
		),

		'mani_stats_dods_weapon_thompson' => array (
		
			'value'			=> '1.25',
			'info' 			=> 'mani_stats_dods_weapon_thompson',
			'field_type'	=> '3',
			'advanced'		=> '0',
					
		),

		'mani_stats_dods_weapon_mp40' => array (
		
			'value'			=> '1.25',
			'info' 			=> 'mani_stats_dods_weapon_mp40',
			'field_type'	=> '3',
			'advanced'		=> '0',
					
		),

		'mani_stats_dods_weapon_mp44' => array (
		
			'value'			=> '1.35',
			'info' 			=> 'mani_stats_dods_weapon_mp44',
			'field_type'	=> '3',
			'advanced'		=> '0',
					
		),

		'mani_stats_dods_weapon_bar' => array (
		
			'value'			=> '1.2',
			'info' 			=> 'mani_stats_dods_weapon_bar',
			'field_type'	=> '3',
			'advanced'		=> '0',
					
		),

		'mani_stats_dods_weapon_30cal' => array (
		
			'value'			=> '1.25',
			'info' 			=> 'mani_stats_dods_weapon_30cal',
			'field_type'	=> '3',
			'advanced'		=> '0',
					
		),

		'mani_stats_dods_weapon_mg42' => array (
		
			'value'			=> '1.2',
			'info' 			=> 'mani_stats_dods_weapon_mg42',
			'field_type'	=> '3',
			'advanced'		=> '0',
					
		),

		'mani_stats_dods_weapon_bazooka' => array (
		
			'value'			=> '2.25',
			'info' 			=> 'mani_stats_dods_weapon_bazooka',
			'field_type'	=> '3',
			'advanced'		=> '0',
					
		),

		'mani_stats_dods_weapon_pschreck' => array (
		
			'value'			=> '2.25',
			'info' 			=> 'mani_stats_dods_weapon_pschreck',
			'field_type'	=> '3',
			'advanced'		=> '0',
					
		),

		'mani_stats_dods_weapon_frag_us' => array (
		
			'value'			=> '1.0',
			'info' 			=> 'mani_stats_dods_weapon_frag_us',
			'field_type'	=> '3',
			'advanced'		=> '0',
					
		),

		'mani_stats_dods_weapon_frag_ger' => array (
		
			'value'			=> '1.0',
			'info' 			=> 'mani_stats_dods_weapon_frag_ger',
			'field_type'	=> '3',
			'advanced'		=> '0',
					
		),

		'mani_stats_dods_weapon_smoke_us' => array (
		
			'value'			=> '5.0',
			'info' 			=> 'mani_stats_dods_weapon_smoke_us',
			'field_type'	=> '3',
			'advanced'		=> '0',
					
		),

		'mani_stats_dods_weapon_smoke_ger' => array (
		
			'value'			=> '5.0',
			'info' 			=> 'mani_stats_dods_weapon_smoke_ger',
			'field_type'	=> '3',
			'advanced'		=> '0',
					
		),

		'mani_stats_dods_weapon_riflegren_us' => array (
		
			'value'			=> '1.3',
			'info' 			=> 'mani_stats_dods_weapon_riflegren_us',
			'field_type'	=> '3',
			'advanced'		=> '0',
					
		),

		'mani_stats_dods_weapon_riflegren_ger' => array (
		
			'value'			=> '1.3',
			'info' 			=> 'mani_stats_dods_weapon_riflegren_ger',
			'field_type'	=> '3',
			'advanced'		=> '0',
					
		),

		'mani_stats_dods_weapon_punch' => array (
		
			'value'			=> '3.0',
			'info' 			=> 'mani_stats_dods_weapon_punch',
			'field_type'	=> '3',
			'advanced'		=> '0',
					
		),

		// Bonus Points for DODS


		'mani_stats_dods_capture_point' => array (
		
			'value'			=> '4',
			'info' 			=> 'mani_stats_dods_capture_point',
			'field_type'	=> '3',
			'advanced'		=> '0',
					
		),

		'mani_stats_dods_block_capture' => array (
		
			'value'			=> '4',
			'info' 			=> 'mani_stats_dods_block_capture',
			'field_type'	=> '3',
			'advanced'		=> '0',
					
		),

		'mani_stats_dods_round_win_bonus' => array (
		
			'value'			=> '4',
			'info' 			=> 'mani_stats_dods_round_win_bonus',
			'field_type'	=> '3',
			'advanced'		=> '0',
					
		),

	),
	
	'Reserve Slot' => array (
	
		'mani_reserve_slots' => array (
		
			'value'			=> '0',
			'info' 			=> 'Turn on reserve slots',
			'field_type'	=> '1',
			'advanced'		=> '0',
					
		),

		'mani_reserve_slots_number_of_slots' => array (
		
			'value'			=> '1',
			'info' 			=> 'Number of reserve slots you have',
			'field_type'	=> '3',
			'advanced'		=> '0',
					
		),
		
		'mani_reserve_slots_kick_message' => array (
		
			'value'			=> 'You were disconnected for using a reserve slot',
			'info' 			=> 'User defined message shown in players console when kicked',
			'field_type'	=> '3',
			'advanced'		=> '0',
					
		),
		
		'mani_reserve_slots_redirect_message' => array (
		
			'value'			=> 'This server is full, you are being redirected to another one of our servers',
			'info' 			=> 'User defined message for redirection of players to another server',
			'field_type'	=> '3',
			'advanced'		=> '0',
					
		),
		
		'mani_reserve_slots_allow_slot_fill' => array (
		
			'value'			=> '1',
			'info' 			=> 'Allow slots to fill with reserve players. Leave unticked to always keeps slots free and kick player instead',
			'field_type'	=> '1',
			'advanced'		=> '0',
					
		),
		
		'mani_reserve_slots_kick_method' => array (
		
			'value'			=> '1',
			'info' 			=> 'Type of method used to kick players',
			'field_type'	=> '2',
			'options' 		=> array (
			
				'0'	=> 'By highest ping (spectators first)',
				'1'	=> 'By connection time (spectators go first)',
			
			),
			'advanced'		=> '0',
					
		),
		
		'mani_reserve_slots_include_admin' => array (
		
			'value'			=> '1',
			'info' 			=> 'Include admins in the adminlist.txt file as players who have reserve slots',
			'field_type'	=> '1',
			'advanced'		=> '0',
					
		),
		
	),
	
	'High Ping Kick' => array (
	
		'mani_high_ping_kick' => array (
			
			'value'			=> '1',
			'info' 			=> 'Enable high ping kicker',
			'field_type'	=> '1',
			'advanced'		=> '0',
						
		),
		
		'mani_high_ping_kick_ping_limit' => array (
			
			'value'			=> '400',
			'info' 			=> 'Set the ping at which you want players kicked',
			'field_type'	=> '3',
			'advanced'		=> '0',
						
		),
		
		'mani_high_ping_kick_samples_required' => array (
			
			'value'			=> '60',
			'info' 			=> 'Number of samples and averaged before a decision is made to kick a player (1 sample is about 1.5 seconds)',
			'field_type'	=> '3',
			'advanced'		=> '0',
						
		),
		
		'mani_high_ping_kick_message' => array (
			
			'value'			=> 'Your ping is too high',
			'info' 			=> 'Message displayed in console when player is disconnected',
			'field_type'	=> '3',
			'advanced'		=> '0',
						
		),
		
	),
		
	'Admin Action Messages' => array (
		
		'mani_adminslap_anonymous' => array (
			
			'value'			=> '0',
			'info' 			=> 'Hide actions from non-admins',
			'field_type'	=> '1',
			'advanced'		=> '0',
						
		),
		
		'mani_adminblind_anonymous' => array (
			
			'value'			=> '0',
			'info' 			=> 'Hide actions from non-admins',
			'field_type'	=> '1',
			'advanced'		=> '0',
						
		),
	
		'mani_adminfreeze_anonymous' => array (
			
			'value'			=> '0',
			'info' 			=> 'Hide actions from non-admins',
			'field_type'	=> '1',
			'advanced'		=> '0',
						
		),
		
		'mani_adminteleport_anonymous' => array (
			
			'value'			=> '0',
			'info' 			=> 'Hide actions from non-admins',
			'field_type'	=> '1',
			'advanced'		=> '0',
						
		),
	
		'mani_admindrug_anonymous' => array (
			
			'value'			=> '0',
			'info' 			=> 'Hide actions from non-admins',
			'field_type'	=> '1',
			'advanced'		=> '0',
						
		),
		
		'mani_adminmap_anonymous' => array (
			
			'value'			=> '0',
			'info' 			=> 'Hide actions from non-admins',
			'field_type'	=> '1',
			'advanced'		=> '0',
						
		),
	
		'mani_adminswap_anonymous' => array (
			
			'value'			=> '0',
			'info' 			=> 'Hide actions from non-admins',
			'field_type'	=> '1',
			'advanced'		=> '0',
						
		),
		
		'mani_adminvote_anonymous' => array (
			
			'value'			=> '0',
			'info' 			=> 'Hide actions from non-admins',
			'field_type'	=> '1',
			'advanced'		=> '0',
						
		),
	
		'mani_adminsay_anonymous' => array (
			
			'value'			=> '0',
			'info' 			=> 'Hide actions from non-admins',
			'field_type'	=> '1',
			'advanced'		=> '0',
						
		),
	
		'mani_adminkick_anonymous' => array (
			
			'value'			=> '0',
			'info' 			=> 'Hide actions from non-admins',
			'field_type'	=> '1',
			'advanced'		=> '0',
						
		),
	
		'mani_adminslay_anonymous' => array (
			
			'value'			=> '0',
			'info' 			=> 'Hide actions from non-admins',
			'field_type'	=> '1',
			'advanced'		=> '0',
						
		),
		
		'mani_adminban_anonymous' => array (
			
			'value'			=> '0',
			'info' 			=> 'Hide actions from non-admins',
			'field_type'	=> '1',
			'advanced'		=> '0',
						
		),
		
		'mani_adminburn_anonymous' => array (
			
			'value'			=> '0',
			'info' 			=> 'Hide actions from non-admins',
			'field_type'	=> '1',
			'advanced'		=> '0',
						
		),
		
		'mani_adminnoclip_anonymous' => array (
			
			'value'			=> '0',
			'info' 			=> 'Hide actions from non-admins',
			'field_type'	=> '1',
			'advanced'		=> '0',
						
		),
	
		'mani_adminmute_anonymous' => array (
			
			'value'			=> '0',
			'info' 			=> 'Hide actions from non-admins',
			'field_type'	=> '1',
			'advanced'		=> '0',
						
		),
	
		'mani_admincash_anonymous' => array (
			
			'value'			=> '0',
			'info' 			=> 'Hide actions from non-admins',
			'field_type'	=> '1',
			'advanced'		=> '0',
						
		),
	
		'mani_adminsetskin_anonymous' => array (
			
			'value'			=> '0',
			'info' 			=> 'Hide actions from non-admins',
			'field_type'	=> '1',
			'advanced'		=> '0',
						
		),
	
		'mani_admindropc4_anonymous' => array (
			
			'value'			=> '0',
			'info' 			=> 'Hide actions from non-admins',
			'field_type'	=> '1',
			'advanced'		=> '0',
						
		),
		
		'mani_admintimebomb_anonymous' => array (
			
			'value'			=> '0',
			'info' 			=> 'Hide actions from non-admins',
			'field_type'	=> '1',
			'advanced'		=> '0',
						
		),
	
		'mani_adminfirebomb_anonymous' => array (
			
			'value'			=> '0',
			'info' 			=> 'Hide actions from non-admins',
			'field_type'	=> '1',
			'advanced'		=> '0',
						
		),
	
		'mani_adminfreezebomb_anonymous' => array (
			
			'value'			=> '0',
			'info' 			=> 'Hide actions from non-admins',
			'field_type'	=> '1',
			'advanced'		=> '0',
						
		),
	
		'mani_adminhealth_anonymous' => array (
			
			'value'			=> '0',
			'info' 			=> 'Hide actions from non-admins',
			'field_type'	=> '1',
			'advanced'		=> '0',
						
		),
		
		'mani_adminbeacon_anonymous' => array (
			
			'value'			=> '0',
			'info' 			=> 'Hide actions from non-admins',
			'field_type'	=> '1',
			'advanced'		=> '0',
						
		),
	
		'mani_admingravity_anonymous' => array (
			
			'value'			=> '0',
			'info' 			=> 'Hide actions from non-admins',
			'field_type'	=> '1',
			'advanced'		=> '0',
						
		),
		
	),
	
	'Chat Flooding Control' => array (
		
		'mani_chat_flood_time' => array (
			
			'value'			=> '0',
			'info' 			=> 'Sets the time threshold for chat spamming (0 = off, 1.5 is a good value for use)',
			'field_type'	=> '3',
			'advanced'		=> '0',
						
		),
		
		'mani_chat_flood_message' => array (
			
			'value'			=> 'STOP SPAMMING THE SERVER !!"',
			'info' 			=> 'Sets the message the player will receive when they are spamming',
			'field_type'	=> '3',
			'advanced'		=> '0',
						
		),
		
	),
	
	'Basic Auto Balance Teams' => array (
		
		'mani_autobalance_teams' => array (
			
			'value'			=> '0',
			'info' 			=> 'Auto team balancing at end of rounds (an alternative to the CSS built in team balancer)',
			'field_type'	=> '1',
			'advanced'		=> '0',
						
		),
		
		'mani_autobalance_mode' => array (
			
			'value'			=> '1',
			'info' 			=> 'Method used to balance teams',
			'field_type'	=> '2',
			'options' 		=> array (
			
				'0'	=> 'Players balanced regardless if dead or alive',
				'1'	=> 'Dead players swapped first followed by alive player',
				'2' => 'Only dead players can be swapped',
			
			),
			'advanced'		=> '0',
						
		),
		
	),
		
	'Current Time Display' => array (
		
		'mani_military_time' => array (
			
			'value'			=> '1',
			'info' 			=> 'Military style time, leave unticked for 12 hour clock',
			'field_type'	=> '1',
			'advanced'		=> '0',
						
		),
		
		'mani_thetime_timezone' => array (
			
			'value'			=> 'GMT',
			'info' 			=> 'Set to your servers timezone or leave it blank, it will be added to the end of the time when displayed',
			'field_type'	=> '3',
			'advanced'		=> '0',
						
		),
		
		'mani_adjust_time' => array (
			
			'value'			=> '0',
			'info' 			=> 'If you server is 20 minutes fast set mani_adjust_time -20, if it is 30 minutes slow set mani_adjust_time 30.',
			'field_type'	=> '3',
			'advanced'		=> '0',
						
		),
		
	),
	
	'Voting Functionality' => array (

		'mani_voting' => array (
			
			'value'			=> '0',
			'info' 			=> 'Allow voting (this cvar controls ALL voting)',
			'field_type'	=> '1',
			'advanced'		=> '0',
						
		),

		'mani_vote_dont_show_last_maps' => array (
			
			'value'			=> '3',
			'info' 			=> 'Defines the last number of maps played to not show in random votemap lists.',
			'field_type'	=> '3',
			'advanced'		=> '0',
						
		),

		'mani_vote_extend_time' => array (
			
			'value'			=> '20',
			'info' 			=> 'Defines the time in minutes a extend vote will add to the timeleft counter.',
			'field_type'	=> '3',
			'advanced'		=> '0',
						
		),

		'mani_vote_allow_extend' => array (
			
			'value'			=> '1',
			'info' 			=> 'Defines the whether the a map can be extended',
			'field_type'	=> '1',
			'advanced'		=> '0',
						
		),

		'mani_vote_allowed_voting_time' => array (
			
			'value'			=> '45',
			'info' 			=> 'Defines amount of time in seconds a vote will be allowed for.',
			'field_type'	=> '3',
			'advanced'		=> '0',
						
		),
		
		'mani_vote_allow_end_of_map_vote' => array (
			
			'value'			=> '0',
			'info' 			=> 'Defines whether a random map vote will be displayed towards the end of the map.',
			'field_type'	=> '1',
			'advanced'		=> '0',
						
		),
		
		'mani_vote_max_extends' => array (
			
			'value'			=> '2',
			'info' 			=> 'Number of extensions a map is allowed via user vote or random map vote, 0 = infinite',
			'field_type'	=> '1',
			'advanced'		=> '0',
						
		),

		'mani_vote_extend_rounds' => array (
			
			'value'			=> '10',
			'info' 			=> 'Number of rounds to extend by if mp_winlimit is not 0.',
			'field_type'	=> '3',
			'advanced'		=> '0',
						
		),
		
		'mani_vote_mapcycle_mode_for_random_map_vote' => array (
			
			'value'			=> '0',
			'info' 			=> 'Define the file to use for random map vote',
			'field_type'	=> '2',
			'options' 		=> array (
			
				'0'	=> 'mapcycle.txt',
				'1'	=> 'votemapslist.txt',
				'2' => 'maplist.txt',
			
			),
			'advanced'		=> '0',
						
		),
		
		'mani_vote_mapcycle_mode_for_admin_map_vote' => array (
			
			'value'			=> '0',
			'info' 			=> 'Define the file that admin can select from for admin started vote',
			'field_type'	=> '2',
			'options' 		=> array (
			
				'0'	=> 'mapcycle.txt',
				'1'	=> 'votemapslist.txt',
				'2' => 'maplist.txt',
			
			),
			'advanced'		=> '0',

						
		),
		
		'mani_vote_time_before_end_of_map_vote' => array (
			
			'value'			=> '3',
			'info' 			=> 'Defines how many minutes before the end of the map that a random map vote is started.',
			'field_type'	=> '3',
			'advanced'		=> '0',
						
		),

		'mani_vote_max_maps_for_end_of_map_vote' => array (
			
			'value'			=> '6',
			'info' 			=> 'Defines how many maps can be in the end of map vote.',
			'field_type'	=> '3',
			'advanced'		=> '0',
						
		),
		
		'mani_vote_end_of_map_swap_team' => array (
			
			'value'			=> '0',
			'info' 			=> 'Allow team swap option as part of Extend map on end of map vote (CSS Only)',
			'field_type'	=> '1',
			'advanced'		=> '0',
						
		),
		
		'mani_vote_end_of_map_percent_required' => array (
			
			'value'			=> '60',
			'info' 			=> 'Defines the vote percentage required to set map',
			'field_type'	=> '3',
			'advanced'		=> '0',
						
		),

		'mani_vote_rcon_percent_required' => array (
			
			'value'			=> '60',
			'info' 			=> 'Defines the vote percentage required to set rcon vote.',
			'field_type'	=> '3',
			'advanced'		=> '0',
						
		),

		'mani_vote_question_percent_required' => array (
			
			'value'			=> '60',
			'info' 			=> 'Defines the vote percentage required to set question vote.',
			'field_type'	=> '3',
			'advanced'		=> '0',
						
		),

		'mani_vote_map_percent_required' => array (
			
			'value'			=> '60',
			'info' 			=> 'Defines the vote percentage required to set map vote.',
			'field_type'	=> '3',
			'advanced'		=> '0',
						
		),

		'mani_vote_random_map_percent_required' => array (
			
			'value'			=> '60',
			'info' 			=> 'Defines the vote percentage required to set random map vote.',
			'field_type'	=> '3',
			'advanced'		=> '0',
						
		),
		
		'mani_vote_show_vote_mode' => array (
			
			'value'			=> '3',
			'info' 			=> 'This cvar determines how the players see the votes during voting',
			'field_type'	=> '2',
			'options' 		=> array (
			
				'0'	=> 'Quiet mode',
				'1'	=> 'Show players as they vote but not their choice',
				'2' => 'Show voted choice but not player',
				'3' => 'Show player name and their choice',
			
			),
			'advanced'		=> '0',
						
		),
		
		'mani_vote_dont_show_if_alive' => array (
			
			'value'			=> '3',
			'info' 			=> 'Following cvar now has 2 modes of operation',
			'field_type'	=> '2',
			'options' 		=> array (
			
				'0'	=> 'Alive players will see vote menu',
				'1'	=> 'Alive players will need to type vote to access the menu',
			
			),
			'advanced'		=> '0',
						
		),

		'mani_vote_allow_user_vote_map' => array (
			
			'value'			=> '0',
			'info' 			=> 'Allow user started votemaps',
			'field_type'	=> '1',
			'advanced'		=> '0',
						
		),

		'mani_vote_allow_user_vote_map_extend' => array (
			
			'value'			=> '1',
			'info' 			=> 'Allow the users to extend maps if time based',
			'field_type'	=> '1',
			'advanced'		=> '0',
						
		),

		'mani_vote_allow_user_vote_kick' => array (
			
			'value'			=> '0',
			'info' 			=> 'Allow the users to kick players by vote',
			'field_type'	=> '1',
			'advanced'		=> '0',
						
		),

		'mani_vote_allow_user_vote_ban' => array (
			
			'value'			=> '0',
			'info' 			=> 'Allow the users to ban players by vote',
			'field_type'	=> '1',
			'advanced'		=> '0',
						
		),

		'mani_vote_extend_percent_required' => array (
			
			'value'			=> '60',
			'info' 			=> 'Defines the vote percentage required to set an extend map vote.',
			'field_type'	=> '3',
			'advanced'		=> '0',
						
		),

		'mani_vote_user_vote_map_percentage' => array (
			
			'value'			=> '60',
			'info' 			=> 'Percentage of votes required from players before map change.',
			'field_type'	=> '3',
			'advanced'		=> '0',
						
		),

		'mani_vote_user_vote_map_time_before_vote' => array (
			
			'value'			=> '60',
			'info' 			=> 'Time after a new map starts that voting is allowed.',
			'field_type'	=> '3',
			'advanced'		=> '0',
						
		),

		'mani_vote_user_vote_map_minimum_votes' => array (
			
			'value'			=> '4',
			'info' 			=> 'Minimum number of votes required to change a map (override vote percentage).',
			'field_type'	=> '3',
			'advanced'		=> '0',
						
		),

		'mani_vote_user_vote_kick_mode' => array (
			
			'value'			=> '0',
			'info' 			=> '0 = only when no admin on server, 1 = all the time',
			'field_type'	=> '1',
			'advanced'		=> '0',
						
		),

		'mani_vote_user_vote_kick_percentage' => array (
			
			'value'			=> '60',
			'info' 			=> 'Percentage of votes required from players before kick occurs.',
			'field_type'	=> '3',
			'advanced'		=> '0',
						
		),

		'mani_vote_user_vote_kick_time_before_vote' => array (
			
			'value'			=> '60',
			'info' 			=> 'Time after a new map starts that voting is allowed.',
			'field_type'	=> '3',
			'advanced'		=> '0',
						
		),

		'mani_vote_user_vote_kick_minimum_votes' => array (
			
			'value'			=> '4',
			'info' 			=> 'Minimum number of votes required (override vote percentage).',
			'field_type'	=> '3',
			'advanced'		=> '0',
						
		),

		'mani_vote_user_vote_ban_mode' => array (
			
			'value'			=> '0',
			'info' 			=> '0 = only when no admin on server, 1 = all the time',
			'field_type'	=> '1',
			'advanced'		=> '0',
						
		),

		'mani_vote_user_vote_ban_percentage' => array (
			
			'value'			=> '60',
			'info' 			=> 'Percentage of votes required from players before kick occurs.',
			'field_type'	=> '3',
			'advanced'		=> '0',
						
		),

		'mani_vote_user_vote_ban_time_before_vote' => array (
			
			'value'			=> '60',
			'info' 			=> 'Time after a new map starts that voting is allowed.',
			'field_type'	=> '3',
			'advanced'		=> '0',
						
		),

		'mani_vote_user_vote_ban_minimum_votes' => array (
			
			'value'			=> '4',
			'info' 			=> 'Minimum number of votes required (override vote percentage).',
			'field_type'	=> '3',
			'advanced'		=> '0',
						
		),

		'mani_vote_user_vote_ban_time' => array (
			
			'value'			=> '30',
			'info' 			=> 'Time in minutes for the ban, 0 = permanent ban.',
			'field_type'	=> '3',
			'advanced'		=> '0',
						
		),
		
		'mani_vote_user_vote_ban_type' => array (
			
			'value'			=> '0',
			'info' 			=> 'Ban Type',
			'field_type'	=> '2',
			'options' 		=> array (
			
				'0'	=> 'Ban by ID',
				'1'	=> 'Ban by IP',
				'2'	=> 'Ban by ID and IP',
			
			),
			'advanced'		=> '0',
						
		),

		'mani_vote_allow_rock_the_vote' => array (
			
			'value'			=> '1',
			'info' 			=> 'Allow rock the vote',
			'field_type'	=> '1',
			'advanced'		=> '0',
						
		),

		'mani_vote_rock_the_vote_percent_required' => array (
			
			'value'			=> '60',
			'info' 			=> 'Defines the vote percentage required to set map.',
			'field_type'	=> '3',
			'advanced'		=> '0',
						
		),

		'mani_vote_time_before_rock_the_vote' => array (
			
			'value'			=> '120',
			'info' 			=> 'Time before rockthevote can be started after a new map starts.',
			'field_type'	=> '3',
			'advanced'		=> '0',
						
		),

		'mani_vote_rock_the_vote_number_of_nominations' => array (
			
			'value'			=> '4',
			'info' 			=> 'Number of nominations included in the vote.',
			'field_type'	=> '3',
			'advanced'		=> '0',
						
		),

		'mani_vote_rock_the_vote_number_of_maps' => array (
			
			'value'			=> '8',
			'info' 			=> 'Number of random maps chosen from votemaplist.txt.',
			'field_type'	=> '3',
			'advanced'		=> '0',
						
		),

		'mani_vote_rock_the_vote_threshold_percent' => array (
			
			'value'			=> '60',
			'info' 			=> 'Percentage of players on server required to type rockthevote before it starts',
			'field_type'	=> '3',
			'advanced'		=> '0',
						
		),
		
		'mani_vote_rock_the_vote_threshold_minimum' => array (
			
			'value'			=> '4',
			'info' 			=> 'Minimum number of players required to type rockthevote before it starts.',
			'field_type'	=> '3',
			'advanced'		=> '0',
						
		),
		
		'mani_player_settings_vote_progress' => array (
			
			'value'			=> '1',
			'info' 			=> 'Check to set the default mode players will have their show vote progress set to when they first join your server.',
			'field_type'	=> '1',
			'advanced'		=> '0',
						
		),
		
	),
	
	'Word filter module' => array (
	
		'mani_filter_words_mode' => array (
			
			'value'			=> '1',
			'info' 			=> 'Show warning to player',
			'field_type'	=> '1',
			'advanced'		=> '0',
						
		),
		
		'mani_filter_words_warning' => array (
			
			'value'			=> 'SWEARING IS NOT ALLOWED ON THIS SERVER !!!',
			'info' 			=> 'Message shown to player',
			'field_type'	=> '3',
			'advanced'		=> '0',
						
		),
	
	),
	
	'Sounds Control' => array (
	
		'mani_sounds_per_round' => array (
			
			'value'			=> '0',
			'info' 			=> 'No. of sounds a normal player can use per round',
			'field_type'	=> '3',
			'advanced'		=> '0',
						
		),
		
		'mani_sounds_filter_if_dead' => array (
			
			'value'			=> '0',
			'info' 			=> 'Check if you want alive players to hear sounds triggered by dead players.',
			'field_type'	=> '1',
			'advanced'		=> '0',
						
		),
	
		'mani_sounds_auto_download' => array (
			
			'value'			=> '1',
			'info' 			=> 'Check to auto download server sounds to clients',
			'field_type'	=> '1',
			'advanced'		=> '0',
						
		),
		
		'mani_player_settings_sounds' => array (
			
			'value'			=> '1',
			'info' 			=> 'Default sound setting for when a player first joins the server. Check to set default as on',
			'field_type'	=> '1',
			'advanced'		=> '0',
						
		),
	
	),
	
	'Plugin Logging' => array (
	
		'mani_log_mode' => array (
		
			'value'			=> '0',
			'info' 			=> 'Admin Logging mode',
			'field_type'	=> '2',
			'options' 		=> array (
			
				'0'	=> 'Log files placed in the same .log files that Valve creates',
				'1'	=> 'Logs created per map change using the same style filenames that Valve uses in the mani_log_directory directory',
				'2' => 'One large file is written in the mani_log_directory',
				'3' => 'A log is written as a steam id for each admin that runs a command, the format is STEAM_x_x_xxxxxxxx.log',
			),
			'advanced'		=> '0',
						
		),
		
		'mani_log_directory' => array (
			
			'value'			=> 'mani_logs',
			'info' 			=> 'Path where the logs are stored',
			'field_type'	=> '3',
			'advanced'		=> '0',
						
		),
	
	),
	
	'Death Beams' => array (
	
		'mani_show_death_beams' => array (
			
			'value'			=> '0',
			'info' 			=> 'Check to show death beams. Player must have them turned on in their settings',
			'field_type'	=> '1',
			'advanced'		=> '0',
						
		),
	
		'mani_player_settings_death_beam' => array (
			
			'value'			=> '1',
			'info' 			=> 'Default death beam setting for when a player first joins the server. Check to set default as on.',
			'field_type'	=> '1',
			'advanced'		=> '0',
						
		),
		
	),
	
	'Anti IP Ghosting' => array (
	
		'mani_blind_ghosters' => array (
			
			'value'			=> '0',
			'info' 			=> 'Check to blind ghosters on the same IP',
			'field_type'	=> '1',
			'advanced'		=> '0',
						
		),
		
		'mani_vote_allow_user_vote_ban_ghost' => array (
			
			'value'			=> '1',
			'info' 			=> 'Check to allow players on the same IP to use voteban',
			'field_type'	=> '1',
			'advanced'		=> '0',
						
		),
	
		'mani_vote_allow_user_vote_kick_ghost' => array (
			
			'value'			=> '1',
			'info' 			=> 'Check to allow players on the same IP to use votekick',
			'field_type'	=> '1',
			'advanced'		=> '0',
						
		),
	
	),
	
	'Decal Map Adverts' => array (
	
		'mani_map_adverts' => array (
			
			'value'			=> '0',
			'info' 			=> 'Check to display map adverts',
			'field_type'	=> '1',
			'advanced'		=> '0',
						
		),
		
		'mani_map_adverts_in_war' => array (
			
			'value'			=> '0',
			'info' 			=> 'Check to display map adverts during WAR mode',
			'field_type'	=> '1',
			'advanced'		=> '0',
						
		),
	
	),
	
	'Anti-Cheat' => array (
	
		'mani_player_name_change_threshold' => array (
			
			'value'			=> '15',
			'info' 			=> 'Number of name changes allowed before action is taken',
			'field_type'	=> '3',
			'advanced'		=> '0',
						
		),
		
		'mani_player_name_change_reset' => array (
			
			'value'			=> '0',
			'info' 			=> 'Check to reset counter every map.  Un-check to reset counter every round',
			'field_type'	=> '1',
			'advanced'		=> '0',
						
		),
		
		'mani_player_name_change_punishment' => array (
		
			'value'			=> '0',
			'info' 			=> 'Action taken after name change limit is reached',
			'field_type'	=> '2',
			'options' 		=> array (
			
				'0'	=> 'Kick',
				'1'	=> 'Ban by ID',
				'2' => 'Ban by IP',
				'3' => 'Ban by ID and IP',
			),
			'advanced'		=> '0',
						
		),
		
		'mani_player_name_change_ban_time' => array (
			
			'value'			=> '0',
			'info' 			=> 'Length of ban in minutes. 0 = permanent',
			'field_type'	=> '3',
			'advanced'		=> '0',
						
		),
	
	),
	
	'Extra spawnpoints' => array (
	
		'mani_spawnpoints_mode' => array (
			
			'value'			=> '0',
			'info' 			=> 'Check to enable extra spawnpoints (uses spawnpoints.txt file)',
			'field_type'	=> '1',
			'advanced'		=> '0',
						
		),
	
	),
	
	'Custom Skin Control' => array (
		
		'mani_skins_admin' => array (
			
			'value'			=> '0',
			'info' 			=> 'Allow admins to have admin skins',
			'field_type'	=> '1',
			'advanced'		=> '0',
						
		),
		
		'mani_skins_public' => array (
			
			'value'			=> '0',
			'info' 			=> 'Allow public skins  for normal players',
			'field_type'	=> '1',
			'advanced'		=> '0',
						
		),

		
		'mani_skins_force_public' => array (
			
			'value'			=> '0',
			'info' 			=> 'Force first skin  in list on public player',
			'field_type'	=> '1',
			'advanced'		=> '0',
						
		),

		'mani_skins_setskin_misc_only' => array (
			
			'value'			=> '0',
			'info' 			=> 'mani_skins_setskin_misc_only',
			'field_type'	=> '2',
			'options' 		=> array (
			
				'0'	=> 'Allow all skins to be selected via ma_setskin',
				'1'	=> 'Only allow misc skins to be used',
			
			),
			'advanced'		=> '0',
						
		),

		
		'mani_skins_auto_download' => array (
			
			'value'			=> '0',
			'info' 			=> 'auto download skin resources  to clients',
			'field_type'	=> '1',
			'advanced'		=> '0',
						
		),
		
		'mani_skins_reserved' => array (
			
			'value'			=> '0',
			'info' 			=> 'Allow immunity players to have reserved skins',
			'field_type'	=> '1',
			'advanced'		=> '0',
						
		),
		
		'mani_skins_force_choose_on_join' => array (
			
			'value'			=> '1',
			'info' 			=> 'mani_skins_force_choose_on_join',
			'field_type'	=> '2',
			'options' 		=> array (
			
				'0'	=> 'No menu on team join',
				'1'	=> 'Show skin chooser on team join',
				'2'	=> 'Show settings menu on team join',
			
			),
			'advanced'		=> '0',
						
		),
		
		'mani_skins_random_bot_skins' => array (
			
			'value'			=> '1',
			'info' 			=> 'Use random public class skins on bots',
			'field_type'	=> '1',
			'advanced'		=> '0',
						
		),
		
	),
	
	'Spray Tag Tracking' => array (
	
		'mani_spray_tag' => array (
			
			'value'			=> '0',
			'info' 			=> 'Turn on spray tag tracking control',
			'field_type'	=> '1',
			'advanced'		=> '0',
						
		),

		'mani_spray_tag_spray_duration' => array (
			
			'value'			=> '120',
			'info' 			=> 'Time in seconds that a spray will be tracked for',
			'field_type'	=> '3',
			'advanced'		=> '0',
						
		),

	
		'mani_spray_tag_spray_distance_limit' => array (
			
			'value'			=> '500',
			'info' 			=> 'Max distance away from a spray that you can be for acquisition',
			'field_type'	=> '3',
			'advanced'		=> '0',
						
		),
		
		'mani_spray_tag_spray_highlight' => array (
			
			'value'			=> '1',
			'info' 			=> 'Use effect to show which spray is being targetted',
			'field_type'	=> '2',
			'options' 		=> array (
			
				'0'	=> 'None',
				'1'	=> 'Beam (defaults to glow for DoD)',
				'2'	=> 'Glow',
			
			),
			'advanced'		=> '0',
						
		),

		'mani_spray_tag_ban_time' => array (
			
			'value'			=> '60',
			'info' 			=> 'Non-permanent ban time in minutes',
			'field_type'	=> '3',
			'advanced'		=> '0',
						
		),
	
		'mani_spray_tag_warning_message' => array (
			
			'value'			=> 'Please stop using your spray',
			'info' 			=> 'mani_spray_tag_warning_message',
			'field_type'	=> '3',
			'advanced'		=> '0',
						
		),
	
		'mani_spray_tag_kick_message' => array (
			
			'value'			=> 'You have been kicked for using an offensive spray',
			'info' 			=> 'mani_spray_tag_kick_message',
			'field_type'	=> '3',
			'advanced'		=> '0',
						
		),
	
		'mani_spray_tag_ban_message' => array (
			
			'value'			=> 'You have been banned for 60 minutes through using an offensive spray',
			'info' 			=> 'mani_spray_tag_ban_message',
			'field_type'	=> '3',
			'advanced'		=> '0',
						
		),
	
		'mani_spray_tag_perm_ban_message' => array (
			
			'value'			=> 'You have been permanently banned for using an offensive spray',
			'info' 			=> 'mani_spray_tag_perm_ban_message',
			'field_type'	=> '3',
			'advanced'		=> '0',
						
		),
	
		'mani_spray_tag_block_mode' => array (
			
			'value'			=> '0',
			'info' 			=> 'Block all sprays on the server (must have mani_spray_tag ticked)',
			'field_type'	=> '1',
			'advanced'		=> '0',
						
		),
	
		'mani_spray_tag_block_message' => array (
			
			'value'			=> 'Sprays are blocked on this server !!',
			'info' 			=> 'Warning message if sprays are blocked',
			'field_type'	=> '3',
			'advanced'		=> '0',
						
		),
		
		'mani_spray_tag_slap_damage' => array (
			
			'value'			=> '0',
			'info' 			=> 'Amount of damage to inflict for a spray tag warn with slap option',
			'field_type'	=> '3',
			'advanced'		=> '0',
						
		),
		
	),
	
	'Warmup Timer' => array (
	
		'mani_warmup_timer' => array (
			
			'value'			=> '0',
			'info' 			=> '0 = No warmup time on map load. Greater than 0 = number of seconds after map load until map restarts and play continues as normal',
			'field_type'	=> '3',
			'advanced'		=> '0',
						
		),
		
		'mani_warmup_timer_show_countdown' => array (
			
			'value'			=> '1',
			'info' 			=> 'Visible countdown displayed in center of screen',
			'field_type'	=> '1',
			'advanced'		=> '0',
						
		),

		'mani_warmup_timer_knives_only' => array (
			
			'value'			=> '0',
			'info' 			=> 'For CSS only, set for knife mode where players are only allowed to use  knives during the warmup period',
			'field_type'	=> '1',
			'advanced'		=> '0',
						
		),

	
		'mani_warmup_timer_knives_respawn' => array (
			
			'value'			=> '1',
			'info' 			=> 'For CSS only, allow players to respawn when dying in the warmup knife round only',
			'field_type'	=> '1',
			'advanced'		=> '0',
						
		),

	
		'mani_warmup_timer_ignore_tk' => array (
			
			'value'			=> '1',
			'info' 			=> 'Set the following if you do not want TK punishments to be used during  the warmup round. Set to 0 if you wish to allow tk punishments',
			'field_type'	=> '1',
			'advanced'		=> '0',
						
		),

	
		'mani_warmup_timer_knives_only_ignore_fyi_aim_maps' => array (
			
			'value'			=> '1',
			'info' 			=> 'If you want the knife mode to be disabled on fy_ and aim_ maps where guns are already on the ground then tick this',
			'field_type'	=> '1',
			'advanced'		=> '0',
						
		),
		
		'mani_warmup_timer_unlimited_grenades' => array (
			
			'value'			=> '0',
			'info' 			=> 'Set this for unlimited HE Grenades during warmup (this is really good fun !!)',
			'field_type'	=> '1',
			'advanced'		=> '0',
						
		), 

		// Items to give to player at spawn i.e weapon_ak47, item_assaultsuit etc
		// You can have multiple items on each cvar, the plugin will pick a random item
		// from each cvar for example
		// mani_warmup_timer_spawn_item_2 "weapon_xm1014:weapon_usp:weapon_ump45:weapon_tmp:weapon_scout:weapon_p90:weapon_aug:weapon_p228:weapon_mp5navy:weapon_mac10:weapon_m4a1:weapon_m3:weapon_m249:weapon_glock:weapon_galil:weapon_fiveseven:weapon_ak47"
		
		'mani_warmup_timer_spawn_item_1' => array (
			
			'value'			=> 'item_assaultsuit',
			'info' 			=> 'mani_warmup_timer_spawn_item_1',
			'field_type'	=> '3',
			'advanced'		=> '0',
						
		), 
		
		'mani_warmup_timer_spawn_item_2' => array (
			
			'value'			=> '',
			'info' 			=> 'mani_warmup_timer_spawn_item_2',
			'field_type'	=> '3',
			'advanced'		=> '0',
						
		), 
		
		'mani_warmup_timer_spawn_item_3' => array (
			
			'value'			=> '',
			'info' 			=> 'mani_warmup_timer_spawn_item_3',
			'field_type'	=> '3',
			'advanced'		=> '0',
						
		), 
		
		'mani_warmup_timer_spawn_item_4' => array (
			
			'value'			=> '',
			'info' 			=> 'mani_warmup_timer_spawn_item_4',
			'field_type'	=> '3',
			'advanced'		=> '0',
						
		), 
		
		'mani_warmup_timer_spawn_item_5' => array (
			
			'value'			=> '',
			'info' 			=> 'mani_warmup_timer_spawn_item_5',
			'field_type'	=> '3',
			'advanced'		=> '0',
						
		), 

	
		'mani_warmup_timer_disable_ff' => array (
			
			'value'			=> '1',
			'info' 			=> 'If friendly fire is enabled normally setting this to 1 will disable it during the course of the warmup',
			'field_type'	=> '1',
			'advanced'		=> '0',
						
		),
		
		'mani_warmup_infinite_ammo' => array (
			
			'value'			=> '0',
			'info' 			=> 'Set infinite ammo for CSS',
			'field_type'	=> '1',
			'advanced'		=> '0',
						
		),

	),
	
	'Menu Options' => array (
	
		'mani_use_amx_style_menu' => array (
			
			'value'			=> '1',
			'info' 			=> 'Check to enable amx style menus. Otherwise Escape style menus are used (overridden by gametypes.txt if unsupported)',
			'field_type'	=> '1',
			'advanced'		=> '0',
						
		),	
	
		'mani_sort_menus' => array (
			
			'value'			=> '1',
			'info' 			=> 'Check to sort most menus by player names',
			'field_type'	=> '1',
			'advanced'		=> '0',
						
		),
	
	),	
	
	'External logging (V1.2 required)' => array (
	
		'mani_external_stats_log' => array (
			
			'value'			=> '0',
			'info' 			=> 'Check to enable external logging',
			'field_type'	=> '1',
			'advanced'		=> '0',
						
		),
		
		'mani_external_stats_log_allow_war_logs' => array (
			
			'value'			=> '0',
			'info' 			=> 'Check to enable allow extra logs within WAR mode',
			'field_type'	=> '1',
			'advanced'		=> '0',
						
		),
		
		'mani_external_stats_css_include_bots' => array (
			
			'value'			=> '0',
			'info' 			=> 'Check to enable logging of bot kills',
			'field_type'	=> '1',
			'advanced'		=> '0',
						
		),
	
	),
	
	'Save Scores' => array (
	
		'mani_save_scores' => array (
			
			'value'			=> '0',
			'info' 			=> 'Check to enable save scores functionality',
			'field_type'	=> '1',
			'advanced'		=> '0',
						
		),
		
		'mani_save_scores_tracking_time' => array (
			
			'value'			=> '5',
			'info' 			=> 'Time in minutes to store a players score for.',
			'field_type'	=> '3',
			'advanced'		=> '0',
						
		),
		
		'mani_save_scores_css_cash' => array (
			
			'value'			=> '1',
			'info' 			=> 'Check to enable cash restoration as well as score (css only)',
			'field_type'	=> '1',
			'advanced'		=> '0',
						
		),
	
	),
	
	'Auto Join Restriction' => array (
	
		'mani_team_join_force_auto' => array (
			
			'value'			=> '0',
			'info' 			=> 'Check to force players to use auto-assign when joining a team',
			'field_type'	=> '1',
			'advanced'		=> '0',
						
		),
		
		'mani_team_join_keep_same_team' => array (
			
			'value'			=> '0',
			'info' 			=> 'Check to force players to rejoin their previous team when rejoining or change team within the game',
			'field_type'	=> '1',
			'advanced'		=> '0',
						
		),
	
	),
	
	'Steam ID Pending Kicker' => array (
	
		'mani_steam_id_pending_timeout' => array (
			
			'value'			=> '0',
			'info' 			=> 'Number of seconds to wait before kicking a player if their Steam ID is still pending. Suggested 15-20. Leave at 0 to disable',
			'field_type'	=> '3',
			'advanced'		=> '0',
						
		),
		
		'mani_steam_id_pending_show_admin' => array (
			
			'value'			=> '0',
			'info' 			=> 'Check to display a message to admin when a player is kicked for Steam ID pending problems',
			'field_type'	=> '1',
			'advanced'		=> '0',
						
		),
	
	),
	
	'Betting Module' => array (
	
		'mani_css_betting' => array (
			
			'value'			=> '0',
			'info' 			=> 'Enable betting module',
			'field_type'	=> '1',
			'advanced'		=> '0',
						
		),
		
		'mani_css_betting_dead_only' => array (
			
			'value'			=> '1',
			'info' 			=> 'When can betting occur',
			'field_type'	=> '2',
			'options' 		=> array (
			
				'0'	=> 'Players can bet when alive or dead',
				'1'	=> 'Players can only bet when dead',
			
			),
			'advanced'		=> '0',
						
		),
		
		'mani_css_betting_pay_losing_bets' => array (
			
			'value'			=> '0',
			'info' 			=> 'This determines if a in a x vs 1 situation if the single player who the odds are against wins, they receive the losing wager pot. The setting determines at what number of players that this option applies e.g 5 vs 1, you would set it to 5, 3 vs 1, set it to 3. In the example of 5 vs 1. If the total bets made total $4000 for the team of 5 and they lose, the player who killed all 5 will receive the $4000 that was wagered against that player.',
			'field_type'	=> '3',
			'advanced'		=> '0',
						
		),
		
		'mani_css_betting_announce_one_v_one' => array (
			
			'value'			=> '0',
			'info' 			=> 'Announcement made to place bets when one vs one',
			'field_type'	=> '1',
			'advanced'		=> '0',
						
		),
		
	),
	
	'Bounty Module' => array (

		'mani_css_bounty' => array (
			
			'value'			=> '0',
			'info' 			=> 'Enable Bounty Module',
			'field_type'	=> '1',
			'advanced'		=> '0',
						
		),


		'mani_css_bounty_kill_streak' => array (
			
			'value'			=> '5',
			'info' 			=> 'Sets the kill streak required to have a bounty placed on a player',
			'field_type'	=> '3',
			'advanced'		=> '0',
						
		),


		'mani_css_bounty_start_cash' => array (
			
			'value'			=> '1000',
			'info' 			=> 'Sets the start bounty for the player',
			'field_type'	=> '3',
			'advanced'		=> '0',
						
		),


		'mani_css_bounty_survive_round_cash' => array (
			
			'value'			=> '500',
			'info' 			=> 'Sets the amount of cash add to a players bounty for surviving a round with a bounty on their head',
			'field_type'	=> '3',
			'advanced'		=> '0',
						
		),


		'mani_css_bounty_kill_cash' => array (
			
			'value'			=> '250',
			'info' 			=> 'Sets the amount of cash added to a players bounty for killing another player whilst having a bounty on themseleves',
			'field_type'	=> '3',
			'advanced'		=> '0',
						
		),
		
		'mani_css_bounty_ct_red' => array (
			
			'value'			=> '255',
			'info' 			=> 'Sets the colour a player should turn into when a bounty is on them when playing as CT',
			'field_type'	=> '3',
			'advanced'		=> '0',
						
		),

		'mani_css_bounty_ct_green' => array (
			
			'value'			=> '255',
			'info' 			=> 'Sets the colour a player should turn into when a bounty is on them when playing as CT',
			'field_type'	=> '3',
			'advanced'		=> '0',
						
		),

		'mani_css_bounty_ct_blue' => array (
			
			'value'			=> '255',
			'info' 			=> 'Sets the colour a player should turn into when a bounty is on them when playing as CT',
			'field_type'	=> '3',
			'advanced'		=> '0',
						
		),

		'mani_css_bounty_ct_alpha' => array (
			
			'value'			=> '255',
			'info' 			=> 'Sets the colour a player should turn into when a bounty is on them when playing as CT',
			'field_type'	=> '3',
			'advanced'		=> '0',
						
		),

		'mani_css_bounty_t_red' => array (
			
			'value'			=> '255',
			'info' 			=> 'Sets the colour a player should turn into when a bounty is on them when playing as T',
			'field_type'	=> '3',
			'advanced'		=> '0',
						
		),

		'mani_css_bounty_t_green' => array (
			
			'value'			=> '255',
			'info' 			=> 'Sets the colour a player should turn into when a bounty is on them when playing as T',
			'field_type'	=> '3',
			'advanced'		=> '0',
						
		),

		'mani_css_bounty_t_blue' => array (
			
			'value'			=> '255',
			'info' 			=> 'Sets the colour a player should turn into when a bounty is on them when playing as T',
			'field_type'	=> '3',
			'advanced'		=> '0',
						
		),

		'mani_css_bounty_t_alpha' => array (
			
			'value'			=> '255',
			'info' 			=> 'Sets the colour a player should turn into when a bounty is on them when playing as T',
			'field_type'	=> '3',
			'advanced'		=> '0',
						
		),
		
	),
	
	'Objectives Module for CSS' => array (
	
		'mani_css_objectives' => array (
			
			'value'			=> '0',
			'info' 			=> 'Check to enable objectives e.g. CTs will be slayed at end of round if they choose not to diffuse a bomb',
			'field_type'	=> '1',
			'advanced'		=> '0',
						
		),
	
	),
	
	'AutoMap Module' => array (
	
		'mani_automap' => array (
			
			'value'			=> '0',
			'info' 			=> 'Check to enable AutoMap',
			'field_type'	=> '1',
			'advanced'		=> '0',
						
		),
		
		'mani_automap_map_list' => array (
			
			'value'			=> 'e.g. de_dust2:de_aztec:cs_office',
			'info' 			=> 'Maplist seperate maps with a :',
			'field_type'	=> '3',
			'advanced'		=> '0',
						
		),
		
		'mani_automap_player_threshold' => array (
			
			'value'			=> '0',
			'info' 			=> 'Threshold number of players which will trigger the AutoMap change',
			'field_type'	=> '3',
			'advanced'		=> '0',
						
		),
		
		'mani_automap_include_bots' => array (
			
			'value'			=> '0',
			'info' 			=> 'Check to include BOTS in the calculation',
			'field_type'	=> '1',
			'advanced'		=> '0',
						
		),
		
		'mani_automap_timer' => array (
			
			'value'			=> '300',
			'info' 			=> 'Time in seconds between the threshold being crossed and the map being changed. Default 5 mins (300 secs)',
			'field_type'	=> '3',
			'advanced'		=> '0',
						
		),
		
		'mani_automap_set_nextmap' => array (
			
			'value'			=> '0',
			'info' 			=> 'If an automap event happens, you can set the next map once that map has loaded to be the same as the current map. o.0',
			'field_type'	=> '1',
			'advanced'		=> '0',
						
		),
	
	),
	
	'Miscellaneous' => array (
	
		// exec mani_quake_sounds.cfg
		
		'mani_mapcycle_mode' => array (
			
			'value'			=> '0',
			'info' 			=> 'Set how the mapcycle is calculated',
			'field_type'	=> '2',
			'options' 		=> array (
			
				'0'	=> 'Standard Valve map cycle',
				'1'	=> 'If you do not want your mapcycle to reset to the first in the list when moving to a map not in the cycle',
				'2' => 'Random cycle (uses mani_vote_dont_show_last_maps cvar to exclude last maps played)',
				'3' => 'Skip to the next unplayed map in the map cycle list until all maps have been played when it is reset',
			),
			'advanced'		=> '0',
						
		),
		
		'mani_unlimited_grenades' => array (
			
			'value'			=> '0',
			'info' 			=> 'Check to enable unlimited (free) grenades',
			'field_type'	=> '1',
			'advanced'		=> '0',
						
		),
		
		'mani_war_mode_force_overview_zero' => array (
			
			'value'			=> '0',
			'info' 			=> 'Check to force all dead players to run overview_mode 0 every game frame',
			'field_type'	=> '1',
			'advanced'		=> '0',
						
		),
		
		'mani_cs_stacking_num_levels' => array (
			
			'value'			=> '2',
			'info' 			=> 'Set this to allow stacking of players in CSS (Overrides cs_stacking_num_levels cvar)',
			'field_type'	=> '3',
			'advanced'		=> '0',
						
		),
		
		'mani_use_ma_in_say_command' => array (
			
			'value'			=> '0',
			'info' 			=> 'When checked you must use the ma_ prefix in say commands. This is only for in game say commands and for Beetlefart compatibilty',
			'field_type'	=> '1',
			'advanced'		=> '0',
						
		),
		
		'mani_dead_alltalk' => array (
			
			'value'			=> '0',
			'info' 			=> 'Check to enable All Dead Talk',
			'field_type'	=> '1',
			'advanced'		=> '0',
						
		),
		
		'mani_mute_con_command_spam' => array (
			
			'value'			=> '0',
			'info' 			=> 'When enabled removes spam that call plugin functions.  Useful when using Event Scripts',
			'field_type'	=> '1',
			'advanced'		=> '0',
						
		),
		
		'mani_adminsay_top_left' => array (
			
			'value'			=> '1',
			'info' 			=> 'Enable top left ma_say and ma_chat',
			'field_type'	=> '1',
			'advanced'		=> '0',
						
		),
		
		'mani_adminsay_chat_area' => array (
			
			'value'			=> '1',
			'info' 			=> 'Enable chat area ma_say and ma_chat',
			'field_type'	=> '1',
			'advanced'		=> '0',
						
		),
		
		'mani_adminsay_bottom_area' => array (
			
			'value'			=> '0',
			'info' 			=> 'Allow admin say at bottom of screen',
			'field_type'	=> '1',
			'advanced'		=> '0',
						
		),
		
		'mani_allow_chat_to_admin' => array (
			
			'value'			=> '1',
			'info' 			=> 'Allow users to chat to admins using ma_chat',
			'field_type'	=> '1',
			'advanced'		=> '0',
						
		),
		
		'mani_ff_player_only' => array (
			
			'value'			=> '0',
			'info' 			=> 'When enabled the command ff is shown only to the player not the whole server',
			'field_type'	=> '1',
			'advanced'		=> '0',
						
		),
		
		'mani_nextmap_player_only' => array (
			
			'value'			=> '0',
			'info' 			=> 'When enabled the command nextmap is shown only to the player not the whole server',
			'field_type'	=> '1',
			'advanced'		=> '0',
						
		),
		
		'mani_timeleft_player_only' => array (
			
			'value'			=> '0',
			'info' 			=> 'When enabled the command timeleft is shown only to the player not the whole server',
			'field_type'	=> '1',
			'advanced'		=> '0',
						
		),
		
		'mani_thetime_player_only' => array (
			
			'value'			=> '0',
			'info' 			=> 'When enabled the command thetime is shown only to the player not the whole server',
			'field_type'	=> '1',
			'advanced'		=> '0',
						
		),
		
		'mani_admin_burn_time' => array (
			
			'value'			=> '20',
			'info' 			=> 'Defines length of burn time when a player is burned by admin',
			'field_type'	=> '3',
			'advanced'		=> '0',
						
		),
		
		'mani_hostage_follow_warning' => array (
			
			'value'			=> '0',
			'info' 			=> 'When enabled a message is displayed when a hostage stops following you in CSS',
			'field_type'	=> '1',
			'advanced'		=> '0',
						
		),
		
		'mani_say_command_prefix' => array (
			
			'value'			=> '@',
			'info' 			=> 'Defines prefix of admin chat commands',
			'field_type'	=> '3',
			'advanced'		=> '0',
						
		),
		
		'mani_all_see_ma_rates' => array (
			
			'value'			=> '0',
			'info' 			=> 'If checked anyone on the server can access ma_rates',
			'field_type'	=> '1',
			'advanced'		=> '0',
						
		),
		
		'mani_swap_team_score' => array (
			
			'value'			=> '1',
			'info' 			=> 'When checked if a team swap takes place via end of map vote, scores are also swapped (CSS only)',
			'field_type'	=> '1',
			'advanced'		=> '0',
						
		),
		
		'mani_old_style_menu_behaviour' => array (
			
			'value'			=> '0',
			'info' 			=> 'When checked the menus will close automaticly after running a command',
			'field_type'	=> '1',
			'advanced'		=> '0',
						
		),
		
		'mani_menu_force_text_input_via_esc' => array (
			
			'value'			=> '0',
			'info' 			=> 'Check to enable the escape style text input box when using the AMX style menu. Useful when setting a name in the Client Admin menu',
			'field_type'	=> '1',
			'advanced'		=> '0',
						
		),
		
		'mani_admin_temp_ban_time_limit' => array (
			
			'value'			=> '360',
			'info' 			=> 'Maximum time (minutes) that an admin can ban for if they only have the b (not the pban) permision. Default is 6 hours = 360 minutes',
			'field_type'	=> '3',
			'advanced'		=> '0',
						
		),
		
		'mani_anti_rejoin' => array (
			
			'value'			=> '1',
			'info' 			=> 'When checked players who are killed in a CSS round then leave and rejoin and spawn in the same round are slain',
			'field_type'	=> '1',
			'advanced'		=> '0',
						
		),
		
		'mani_weapon_restrict_refund_on_spawn' => array (
			
			'value'			=> '1',
			'info' 			=> 'When checked money is refunded to a player if their weapon is removed at spawn due to a weapon restriction',
			'field_type'	=> '1',
			'advanced'		=> '0',
						
		),
		
		'mani_weapon_restrict_prevent_pickup' => array (
			
			'value'			=> '1',
			'info' 			=> 'When checked players are prevented from picking up a weapon if it is restricted',
			'field_type'	=> '1',
			'advanced'		=> '0',
						
		),
		
		'mani_exec_default_file1' => array (
			
			'value'			=> 'mani_server.cfg',
			'info' 			=> 'configs that can be run at map load',
			'field_type'	=> '3',
			'advanced'		=> '0',
						
		),
		
		'mani_exec_default_file2' => array (
			
			'value'			=> './mani_admin_plugin/defaults.cfg',
			'info' 			=> 'configs that can be run at map load',
			'field_type'	=> '3',
			'advanced'		=> '0',
						
		),
		
		'mani_exec_default_file3' => array (
			
			'value'			=> '',
			'info' 			=> 'configs that can be run at map load',
			'field_type'	=> '3',
			'advanced'		=> '0',
						
		),
		
		'mani_exec_default_file4' => array (
			
			'value'			=> '',
			'info' 			=> 'configs that can be run at map load',
			'field_type'	=> '3',
			'advanced'		=> '0',
						
		),
		
		'mani_exec_default_file5' => array (
			
			'value'			=> '',
			'info' 			=> 'configs that can be run at map load',
			'field_type'	=> '3',
			'advanced'		=> '0',
						
		),
		
		'mani_sb_observe_mode' => array (
			
			'value'			=> '0',
			'info' 			=> 'When checked, if you are running steambans, you can get your client to automaticly run sb_status in console when choosing a player to observe',
			'field_type'	=> '1',
			'advanced'		=> '0',
						
		),
		
	),
	
);

?>