<?php
$res_config_name = 'Server';

$res_prefixes = array(
'mp_',
'sv_',
);

$res_postcvars = array(
'log' => 'on',
'sv_logbans' => '1',
'sv_logfile' => '1',
'sv_log_onefile' => '1',
'exec' => array(
	'mani_server.cfg',
	'mani_quake_sounds.cfg',
	'bots.cfg'
)
);

$res_config = array(
	$lang->ConfigurationServerCfg->MainSettings => array(

		'hostname' => array(

			'value' 		=> 'CS:S Server',
			'info' 			=> 'The name of the server',
			'field_type' 	=> '3',
			'advanced' 		=> '0',

		),
		
		'sv_lan' => array(
		
			'value' 		=> '0',
			'info' 			=> 'Defines whether the server should be lan only',
			'field_type' 	=> '1',
			'advanced' 		=> '0',
		
		),
		
		'sv_region' => array(
		
			'value' 		=> '255', 
			'info' 			=> 'The region the server is in',
			'field_type' 	=> '2',
			'options'		=> array(
				'0'			=> 'US East',
				'1'			=> 'US West',
				'2'			=> 'South America',
				'3'			=> 'Europe',
				'4'			=> 'Asia',
				'5'			=> 'Australia',
				'6'			=> 'Middle East',
				'7'			=> 'Africa',
				'255'		=> 'World',
			),
			'advanced' 		=> '0',
		
		),
		
		'sv_password' => array(
		
			'value' 		=> '',
			'info' 			=> 'If you want your server to be private, enter a password here',
			'field_type' 	=> '3',
			'advanced' 		=> '0',
		
		),
		
		'rcon_password' => array(
		
			'value' 		=> '', 
			'info' 			=> 'Enter the Rcon password for the server, this will change the password for MadStats as well', 
			'field_type' 	=> '3',
			'advanced' 		=> '0',
		
		),
		
		'sv_rcon_banpenalty' => array(
		
			'value' 		=> 'disabled', 
			'info' 			=> 'After this amount of minutes, a non-authenticated user will be banned', 
			'field_type' 	=> '2',
			'options'		=> array(
				'0'			=> 'disabled',
				'10'		=> '10 minutes',
				'15'		=> '15 minutes',
				'20'		=> '20 minutes',
				'25'		=> '25 minutes',
				'30'		=> '30 minutes',
				'35'		=> '35 minutes',
				'40'		=> '40 minutes',
				'45'		=> '45 minutes',
				'50'		=> '50 minutes',
				'55'		=> '55 minutes',
				'60'		=> '60 minutes',
			),
			'advanced' 		=> '1',
		
		),
		
		'sv_rcon_maxfailures' => array(
		
			'value' 		=> '10', 
			'info' 			=> 'After this amount of rcon-login tries, a user will be banned', 
			'field_type' 	=> '2',
			'options'		=> array(
				'1'			=> '1 try',
				'2'			=> '2 tries',
				'3'			=> '3 tries',
				'4'			=> '4 tries',
				'5'			=> '5 tries',
				'6'			=> '6 tries',
				'7'			=> '7 tries',
				'8'			=> '8 tries',
				'9'			=> '9 tries',
				'10'		=> '10 tries',
				'15'		=> '15 tries',
				'20'		=> '20 tries',
			),
			'advanced' 		=> '1',
		
		),
		
		'sv_rcon_minfailures' => array(
		
			'value' 		=> '5', 
			'info' 			=> 'How many times a user can try to login within the time defined at Rcon Minfailuretime', 
			'field_type' 	=> '2',
			'options'		=> array(
				'1'			=> '1 time',
				'2'			=> '2 times',
				'3'			=> '3 times',
				'4'			=> '4 times',
				'5'			=> '5 times',
				'6'			=> '6 times',
				'7'			=> '7 times',
				'8'			=> '8 times', 
				'9'			=> '9 times',
				'10'		=> '10 times',
				'15'		=> '15 times',
				'20'		=> '20 times',
			),
			'advanced' 		=> '1',
		
		),
		
		'sv_rcon_minfailuretime' => array(
		
			'value' 		=> '30', 
			'info' 			=> 'After this amount of seconds, the Rcon Minfailurecounts is resetted', 
			'field_type' 	=> '2',
			'options'		=> array(
				'5'			=> '5 seconds',
				'10'		=> '10 seconds',
				'15'		=> '15 seconds',
				'20'		=> '20 seconds',
				'25'		=> '25 seconds',
				'30'		=> '30 seconds',
				'35'		=> '35 seconds',
				'40'		=> '40 seconds',
				'45'		=> '45 seconds',
				'50'		=> '50 seconds',
				'55'		=> '55 seconds',
				'60'		=> '60 seconds',
			),
			'advanced' 		=> '1',
		
		),
		
	),
	
	'Gameplay' => array(
		
		'mp_autokick' => array(
		
			'value' 		=> '0', 
			'info' 			=> 'Kick non-active and team-killing players', 
			'field_type' 	=> '1',
			'advanced' 		=> '0',
		
		),
		
		'mp_flashlight' => array(
		
			'value' 		=> '0', 
			'info' 			=> 'Enables or disables the flashlight', 
			'field_type' 	=> '1',
			'advanced' 		=> '0',
		
		),
		
		'sv_pausable' => array(
		
			'value' 		=> '0', 
			'info' 			=> 'Defines whether the game should be pausable', 
			'field_type' 	=> '1',
			'advanced' 		=> '0',
		
		),
		
		'sv_cheats' => array(
		
			'value' 		=> '0', 
			'info' 			=> 'Enables or disables cheats', 
			'field_type' 	=> '1',
			'advanced' 		=> '0',
		
		),
		
		'mp_hostagepenalty' => array(
		
			'value' 		=> '5', 
			'info' 			=> 'How many hostages may be killed before a player is kicked', 
			'field_type' 	=> '3',
			'advanced' 		=> '0',
		
		),
		
		'mp_allowspectators' => array(
		
			'value' 		=> '1', 
			'info' 			=> 'Whether spectators are allowed to be in the server', 
			'field_type' 	=> '1',
			'advanced' 		=> '0',
		
		),
		
		'mp_chattime' => array(
		
			'value' 		=> '10', 
			'info' 			=> 'How much time in seconds players can chat after a round', 
			'field_type' 	=> '3',
			'advanced' 		=> '0',
		
		),
		
		'mp_freezetime' => array(
		
			'value' 		=> '6', 
			'info' 			=> 'How much time in seconds a player is frozen at the round start', 
			'field_type' 	=> '3',
			'advanced' 		=> '0',
		
		),
		
		'mp_buytime' => array(
		
			'value' 		=> '60', 
			'info' 			=> 'How much time in seconds a player can buy', 
			'field_type' 	=> '3',
			'advanced' 		=> '0',
		
		),
		
		'mp_startmoney' => array(
		
			'value' 		=> '800', 
			'info' 			=> 'Defines how much money a player gets when he joins the game', 
			'field_type' 	=> '3',
			'advanced' 		=> '0',
		
		),
		
		'mp_c4timer' => array(
		
			'value' 		=> '45', 
			'info' 			=> 'Defines how much seconds it will take for the bomb to explode', 
			'field_type' 	=> '3',
			'advanced' 		=> '1',
		
		),
		
		'mp_fraglimit' => array(
		
			'value' 		=> '0', 
			'info' 			=> 'After this amount of kills of a player, the next map will be loaded', 
			'field_type' 	=> '3',
			'advanced' 		=> '0',
		
		),
		
		'mp_playerid' => array(
		
			'value' 		=> '0', 
			'info' 			=> 'Defines what information is shown in the status bar', 
			'field_type' 	=> '2',
			'options'		=> array(
				'0' 	=> 'All', 
				'1' 	=> 'Team Names', 
				'2' 	=> 'No Names',
			),
			'advanced' 		=> '1',
		
		),
		

	),
		
	'Teams and Rounds' => array(

		'sv_alltalk' => array(
		
			'value' 		=> '1', 
			'info' 			=> 'Defines if different teams should hear eachother', 
			'field_type' 	=> '1',
			'advanced' 		=> '1',
		
		),
		
		'mp_autoteambalance' => array(
		
			'value' 		=> 'on', 
			'info'			=> 'When on, this will force player to let the server choose the team, teams will stay ballanced', 
			'field_type' 	=> '1',
			'advanced' 		=> '0',
		
		),
		
		'mp_forcecamera' => array(
		
			'value' 		=> '0', 
			'info' 			=> 'When on, this forces players to only view their teammates when dead', 
			'field_type' 	=> '1',
			'advanced' 		=> '1',
		
		),

		'mp_friendlyfire' => array(
		
			'value' 		=> '0', 
			'info' 			=> 'Defines whether teammates can shoot eachother', 
			'field_type' 	=> '1',
			'advanced' 		=> '0',
		
		),
		
		'mp_limitteams' => array(
		
			'value' 		=> '2', 
			'info' 			=> 'Maximum difference in players their may be between teams', 
			'field_type' 	=> '3',
			'advanced' 		=> '1',
		
		),
		
		'mp_maxrounds' => array(
		
			'value' 		=> '0', 
			'info' 			=> 'After this amount of roudns, the next map will be loaded', 
			'field_type' 	=> '3',
			'advanced' 		=> '0',
		
		),
		
		'mp_roundtime' => array(
		
			'value' 		=> '5', 
			'info' 			=> 'How much time in seconds a round will last', 
			'field_type' 	=> '3',
			'advanced' 		=> '0',
		
		),
		
		'mp_spawnprotectiontime' => array(
		
			'value' 		=> '5', 
			'info' 			=> 'How much time in seconds after the round start a teamkiller will be kicked', 
			'field_type' 	=> '3',
			'advanced' 		=> '1',
		
		),
		
		'mp_timelimit' => array(
		
			'value' 		=> '25', 
			'info' 			=> 'How much time in minutes before a map is changed', 
			'field_type' 	=> '3',
			'advanced' 		=> '0',
		
		),

		'mp_tkpunish' => array(
		
			'value' 		=> '1', 
			'info' 			=> 'Defines whether teamkillers should be punished next round', 
			'field_type' 	=> '1',
			'advanced' 		=> '1',
		
		),
		
		'sv_timeout' => array(
		
			'value' 		=> '65', 
			'info' 			=> 'How much time in seconds before an idle player is dropped', 
			'field_type' 	=> '3',
			'advanced' 		=> '1',
		
		),
		
		'mp_winlimit' => array(
		
			'value' 		=> '0', 
			'info' 			=> 'When a team has won this much, the next map will be loaded', 
			'field_type' 	=> '3',
			'advanced' 		=> '0',
		
		),
		
	),
	
	'Physics' 	=> array(
		
		'mp_footsteps' => array(
		
			'value' 		=> '1', 
			'info' 			=> 'Defines whether footsteps are heard or not', 
			'field_type' 	=> '1',
			'advanced' 		=> '0',
		
		),
	
	),
	
	'Technical' => array(
		
		'sv_allowupload' => array(
		
			'value' 		=> '1', 
			'info' 			=> 'Enables or disables players to upload their decals', 
			'field_type' 	=> '1',
			'advanced' 		=> '1',
		
		),
		
		'sv_allowdownload' => array(
		
			'value' 		=> '1', 
			'info' 			=> 'Enables or disables players to download files (maps, textures, sounds, etc.) from the server', 
			'field_type' 	=> '1',
			'advanced' 		=> '1',
		
		),
		
		'sv_voiceenable' => array(
		
			'value' 		=> '1', 
			'info' 			=> 'Whether voice communication is enabled', 
			'field_type' 	=> '1',
			'advanced' 		=> '0',
		
		),
		
		'sv_consistency' => array(
		
			'value' 		=> 'on', 
			'info' 			=> 'Defines whether clients files should be checked when joining the server', 
			'field_type' 	=> '1',
			'advanced' 		=> '1',
		
		),
		
		'sv_maxspeed' => array(
		
			'value' 		=> '320', 
			'info' 			=> 'The maximum speed a player will move', 
			'field_type' 	=> '3',
			'advanced' 		=> '1',
		
		),
	
		'sv_minrate' => array(
		
			'value' 		=> '0', 
			'info' 			=> 'Minimum bandwith rate that is allowed on a server', 
			'field_type' 	=> '3',
			'advanced' 		=> '1',
		
		),
		
		'sv_maxrate' => array(
		
			'value' 		=> '0', 
			'info' 			=> 'Maximum bandwith rate that is allowed on a server', 
			'field_type' 	=> '3',
			'advanced' 		=> '1',
		
		),
		
		'decalfrequency' => array(
		
			'value' 		=> '10', 
			'info' 			=> 'How much time in seconds before a player can spray another tag', 
			'field_type' 	=> '3',
			'advanced' 		=> '0',
		
		),
		
		'sv_maxupdaterate' => array(
		
			'value' 		=> '60', 
			'info' 			=> 'Maximum amount of updates per second that the server allows', 
			'field_type' 	=> '3',
			'advanced' 		=> '1',
		
		),
		
		'sv_minupdaterate' => array(
		
			'value' 		=> '10', 
			'info' 			=> 'Minimum amount of updates per second that the server allows', 
			'field_type' 	=> '3',
			'advanced' 		=> '1',
		
		),
		
		'fps_max' => array(
		
			'value' 		=> '265', 
			'info' 			=> 'How much calculations the server may make per second, the higher, the better. Max is 712', 
			'field_type' 	=> '3',
			'advanced' 		=> '1',
		
		),
		
		'sv_logecho' => array(
		
			'value' 		=> '1', 
			'info' 			=> 'Defines whether log info should be shown in the console', 
			'field_type' 	=> '1',
			'advanced' 		=> '1',
		
		),
	
	)
);

?>
