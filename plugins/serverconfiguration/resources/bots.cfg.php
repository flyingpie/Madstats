<?php
$res_config_name = 'Bots';

$res_prefixes = array(
'bot',
);

$res_precvars = array(
'bot_add',
);

$res_config = array(

	'Bots Main' => array(

		'bot_quota' => array(

			'value' 		=> '0', 
			'info' 			=> 'How many bots should be added without asking', 
			'field_type' 	=> '3',
			'advanced' 		=> '0',

		),
		
		'bot_quota_mode' => array(
		
			'value' 		=> '0', 
			'info' 			=> 'Defines in what way the bots should come, Fill fills the server to a max of the above value', 
			'field_type' 	=> '2',
			'options' => array(
		
				'0' 		=> 'normal',
				'1' 		=> 'fill',
		
			),
			'advanced'		=> '1',
		
		),
		
		'bot_difficulty' => array(
		
			'value' 		=> 'normal', 
			'info' 			=> 'Sets the skill of the bots', 
			'field_type' 	=> '2',
			'options' => array(
		
				'0' 		=> 'easy',
				'1' 		=> 'normal',
				'2' 		=> 'hard',
				'3' 		=> 'expert',
		
			),
			'advanced' 		=> '0',
		
		),
		
		'bot_chatter' => array(
		
			'value' 		=> 'normal', 
			'info' 			=> 'How much bots talk over the radio', 
			'field_type' 	=> '2',
			'options' => array(
		
				'0' 		=> 'off',
				'1' 		=> 'minimal',
				'2' 		=> 'normal',
				'3' 		=> 'radio',
		
			),
			'advanced' 		=> '1'
		
		),
		
		'bot_auto_follow' => array(
		
			'value' 		=> '0', 
			'info' 			=> 'Allow bots to follow humans', 
			'field_type' 	=> '1',
			'advanced' 		=> '1',
		
		),
		
		'bot_auto_vacate' => array(
		
			'value' 		=> '1', 
			'info' 			=> 'When human player joins, kick bots to make room', 
			'field_type' 	=> '1',
			'advanced' 		=> '0',
		
		),
		
		'bot_join_after_player' => array(
		
			'value' 		=> '1', 
			'info' 			=> 'Defines if bots may join the game when no human players are around', 
			'field_type' 	=> '1',
			'advanced' 		=> '1',
		
		),
		
		'bot_defer_to_human' => array(
		
			'value' 		=> '0', 
			'info' 			=> 'Defines wheter bots should be able to complete a mission on their own', 
			'field_type' 	=> '1',
			'advanced' 		=> '1',
		
		),
		
		'bot_prefix' => array(
		
			'value' 		=> '', 
			'info' 			=> 'Prefix for bot names, you could enter your clan tag for example', 
			'field_type' 	=> '3',
			'advanced' 		=> '0',
		
		),
		
		'bot_allow_rogues' => array(
		
			'value' 		=> '0', 
			'info' 			=> 'Defines wheter bots are allowed to go rambo-style', 
			'field_type' 	=> '1',
			'advanced' 		=> '0',
		
		),
		
		'bot_walk' => array(
		
			'value' 		=> '0', 
			'info' 			=> 'Defines wheter bots only may walk. Off means they run too', 
			'field_type' 	=> '1',
			'advanced' 		=> '1',
		
		),
		
		'bot_join_team' => array(
		
			'value' 		=> 'any', 
			'info' 			=> 'Which teams a bot may join',
			'field_type' 	=> '2',
			'options' 		=> array(
		
				'any' 		=> 'Any',
				'ct' 		=> 'Counter Terrorists',
				't' 		=> 'Terrorists',
		
			),
			'advanced' 		=> '0',
		
		),
		
		'bot_eco_limit' => array(
		
			'value' 		=> '2000', 
			'info' 			=> 'The amount of money a bot must have in order to buy weapons', 
			'field_type' 	=> '3',
			'advanced' 		=> '1',
		
		),
	
	),
	
	'Weapons' => array(
	
		'bot_allow_grenades' => array(
		
			'value' 		=> '1', 
			'info' 			=> 'Allow bots to use grenades', 
			'field_type' 	=> '1',
			'advanced' 		=> '1',
	
		),
		
		'bot_allow_pistols' => array(
		
			'value' 		=> '1', 
			'info' 			=> 'Allow bots to use pistols', 
			'field_type' 	=> '1',
			'advanced' 		=> '1',
		
		),
		
		'bot_allow_sub_machine_guns' => array(
		
			'value' 		=> '1', 
			'info' 			=> 'Allow bots to use smgs', 
			'field_type' 	=> '1',
			'advanced' 		=> '1',
		
		),
		
		'bot_allow_shotguns' => array(
		
			'value' 		=> '1', 
			'info' 			=> 'Allow bots to use shotguns', 
			'field_type' 	=> '1',
			'advanced' 		=> '1',
		
		),
		
		'bot_allow_rifles' => array(
		
			'value' 		=> '1', 
			'info' 			=> 'Allow bots to use rifles', 
			'field_type' 	=> '1',
			'advanced' 		=> '1',
		
		),
		
		'bot_allow_snipers' => array(
		
			'value' 		=> '1', 
			'info' 			=> 'Allow bots to use snipers', 
			'field_type' 	=> '1',
			'advanced' 		=> '1',
		
		),
		
		'bot_allow_machine_guns' => array(
		
			'value' 		=> '1', 
			'info' 			=> 'Allow bots to use machine guns', 
			'field_type' 	=> '1',
			'advanced' 		=> '1',
		
		),
	
	)
);

?>