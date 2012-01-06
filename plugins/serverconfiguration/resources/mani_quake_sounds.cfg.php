<?php
$res_config_name = 'Quake Sounds';

$res_prefixes = array(
'mani_quake',
);

$res_config = array(

	'Main Settings' => array(

		'mani_quake_sounds' => array(

			'value' 	=> '1',
			'info' 		=> 'Turn on quake style sounds',
			'field_type' => '1',
			'advanced' 	=> '0',

		),

		'mani_quake_kill_streak_mode' => array(

			'value' 	=> '0',
			'info' 		=> 'Reset kill streak',
			'field_type' => '2',
			'options' 	=> array(
					'0'	=> 'Per round/death',
					'1'	=> 'Per death only',
			),
			'advanced' 	=> '0',

		),
		
		'mani_quake_prepare_to_fight_mode' => array(

			'value' 	=> '1',
			'info' 		=> 'Turns on prepare to fight sound',
			'field_type' => '2',
			'options' 	=> array(
					'0'	=> 'Off',
					'1'	=> 'All players',
					'2'	=> 'Players involved',
					'3'	=> 'Attackers',
					'4' => 'Victim',
			),
			'advanced' 	=> '0',

		),
		
		'mani_quake_humiliation_weapon' => array(

			'value' 	=> 'knife',
			'info' 		=> 'Weapon name that triggers the humiliation sound',
			'field_type' => '2',
			'options' 	=> array(
				'ak47' 			=> 'AK 47',
				'm4a1' 			=> 'M4A1',
				'mp5navy' 		=> 'MP5 Navy',
				'awp' 			=> 'Magnum AWP',
				'usp' 			=> 'USP Pistol',
				'deagle' 		=> 'Deagle',
				'aug' 			=> 'AUG',
				'hegrenade' 	=> 'Grenade',
				'xm1014' 		=> 'XM1014',
				'knife' 		=> 'Knife',
				'g3sg1' 		=> 'G3SG1',
				'sg550' 		=> 'SG550', 
				'famas' 		=> 'Famas',
				'glock' 		=> 'Glock',
				'tmp' 			=> 'TMP',
				'ump45' 		=> 'UMP45',
				'p90' 			=> 'P90',
				'm249' 			=> 'M249',
				'elite' 		=> 'Dual Elites',
				'mac10' 		=> 'Mac10',
				'fiveseven' 		=> 'Five-Seven',
				'p228' 			=> 'P228',
				'flashbang' 		=> 'Flashbang',
				'smokegrenade' 	=> 'Smokegrenade'
			),
			'advanced' 	=> '0',

		),
		
		'mani_quake_firstblood_reset_per_round' => array(

			'value' 	=> '1',
			'info' 		=> 'When to reset the firstblood action',
			'field_type' => '2',
			'options' 	=> array(
					'0'	=> 'Reset per map',
					'1'	=> 'Reset per round',
			),
			'advanced' 	=> '0',

		),
		
		'mani_player_settings_quake' => array(

			'value' 	=> '1',
			'info' 		=> 'Turns on quake sounds by default per player, "quake" switches this setting',
			'field_type' => '1',
			'advanced' 	=> '0',

		),

		'mani_quake_auto_download' => array(

			'value' 	=> '1',
			'info' 		=> 'Whether the quake sounds should be auto-downloaded to connecting clients',
			'field_type' => '1',
			'advanced' 	=> '0',

		),

	),
	
	'Trigger counts'	=> array(
	
		'mani_quake_dominating_trigger_count' => array(

			'value' 	=> '4',
			'info' 		=> 'Kills streak required to trigger sound',
			'field_type' => '3',
			'advanced' 	=> '0',

		),
		
		'mani_quake_rampage_trigger_count' => array(

			'value' 	=> '6',
			'info' 		=> 'Kills streak required to trigger sound',
			'field_type' => '3',
			'advanced' 	=> '0',

		),
		
		'mani_quake_killing_spree_trigger_count' => array(

			'value' 	=> '8',
			'info' 		=> 'Kills streak required to trigger sound',
			'field_type' => '3',
			'advanced' 	=> '0',

		),
		
		'mani_quake_monster_kill_trigger_count' => array(

			'value' 	=> '10',
			'info' 		=> 'Kills streak required to trigger sound',
			'field_type' => '3',
			'advanced' 	=> '0',

		),

		'mani_quake_unstoppable_trigger_count' => array(

			'value' 	=> '12',
			'info' 		=> 'Kills streak required to trigger sound',
			'field_type' => '3',
			'advanced' 	=> '0',

		),
		
		'mani_quake_ultra_kill_trigger_count' => array(

			'value' 	=> '14',
			'info' 		=> 'Kills streak required to trigger sound',
			'field_type' => '3',
			'advanced' 	=> '0',

		),
		
		'mani_quake_god_like_trigger_count' => array(

			'value' 	=> '16',
			'info' 		=> 'Kills streak required to trigger sound',
			'field_type' => '3',
			'advanced' 	=> '0',

		),
	
		'mani_quake_wicked_sick_trigger_count' => array(

			'value' 	=> '18',
			'info' 		=> 'Kills streak required to trigger sound',
			'field_type' => '3',
			'advanced' 	=> '0',

		),	
	
		'mani_quake_ludicrous_kill_trigger_count' => array(

			'value' 	=> '20',
			'info' 		=> 'Kills streak required to trigger sound',
			'field_type' => '3',
			'advanced' 	=> '0',

		),
		
		'mani_quake_holy_shit_trigger_count' => array(

			'value' 	=> '24',
			'info' 		=> 'Kills streak required to trigger sound',
			'field_type' => '3',
			'advanced' 	=> '0',

		),
		
	),
	
	'Sounds'	=> array(
		
		'mani_quake_humiliation_mode' => array(

			'value' 	=> '1',
			'info' 		=> 'Defines the scope of the sounds',
			'field_type' => '2',
			'options' 	=> array(
					'0'	=> 'Off',
					'1'	=> 'All players',
					'2'	=> 'Players involved',
					'3'	=> 'Attackers',
					'4' => 'Victim',
			),
			'advanced' 	=> '0',

		),
		
		'mani_quake_firstblood_mode' => array(

			'value' 	=> '1',
			'info' 		=> 'Defines the scope of the sounds',
			'field_type' => '2',
			'options' 	=> array(
					'0'	=> 'Off',
					'1'	=> 'All players',
					'2'	=> 'Players involved',
					'3'	=> 'Attackers',
					'4' => 'Victim',
			),
			'advanced' 	=> '0',

		),
		
		'mani_quake_headshot_mode' => array(

			'value' 	=> '3',
			'info' 		=> 'Defines the scope of the sounds',
			'field_type' => '2',
			'options' 	=> array(
					'0'	=> 'Off',
					'1'	=> 'All players',
					'2'	=> 'Players involved',
					'3'	=> 'Attackers',
					'4' => 'Victim',
			),
			'advanced' 	=> '0',

		),
		
		'mani_quake_multi_kill_mode' => array(

			'value' 	=> '1',
			'info' 		=> 'Defines the scope of the sounds',
			'field_type' => '2',
			'options' 	=> array(
					'0'	=> 'Off',
					'1'	=> 'All players',
					'2'	=> 'Players involved',
					'3'	=> 'Attackers',
					'4' => 'Victim',
			),
			'advanced' 	=> '0',

		),
		
		'mani_quake_dominating_mode' => array(

			'value' 	=> '3',
			'info' 		=> 'Defines the scope of the sounds',
			'field_type' => '2',
			'options' 	=> array(
					'0'	=> 'Off',
					'1'	=> 'All players',
					'2'	=> 'Players involved',
					'3'	=> 'Attackers',
					'4' => 'Victim',
			),
			'advanced' 	=> '0',

		),
		
		'mani_quake_rampage_mode' => array(

			'value' 	=> '1',
			'info' 		=> 'Defines the scope of the sounds',
			'field_type' => '2',
			'options' 	=> array(
					'0'	=> 'Off',
					'1'	=> 'All players',
					'2'	=> 'Players involved',
					'3'	=> 'Attackers',
					'4' => 'Victim',
			),
			'advanced' 	=> '0',

		),
		
		'mani_quake_killing_spree_mode' => array(

			'value' 	=> '3',
			'info' 		=> 'Defines the scope of the sounds',
			'field_type' => '2',
			'options' 	=> array(
					'0'	=> 'Off',
					'1'	=> 'All players',
					'2'	=> 'Players involved',
					'3'	=> 'Attackers',
					'4' => 'Victim',
			),
			'advanced' 	=> '0',

		),
		
		'mani_quake_monster_kill_mode' => array(

			'value' 	=> '3',
			'info' 		=> 'Defines the scope of the sounds',
			'field_type' => '2',
			'options' 	=> array(
					'0'	=> 'Off',
					'1'	=> 'All players',
					'2'	=> 'Players involved',
					'3'	=> 'Attackers',
					'4' => 'Victim',
			),
			'advanced' 	=> '0',

		),
		
		'mani_quake_unstoppable_mode' => array(

			'value' 	=> '1',
			'info' 		=> 'Defines the scope of the sounds',
			'field_type' => '2',
			'options' 	=> array(
					'0'	=> 'Off',
					'1'	=> 'All players',
					'2'	=> 'Players involved',
					'3'	=> 'Attackers',
					'4' => 'Victim',
			),
			'advanced' 	=> '0',

		),
		
		'mani_quake_ultra_kill_mode' => array(

			'value' 	=> '1',
			'info' 		=> 'Defines the scope of the sounds',
			'field_type' => '2',
			'options' 	=> array(
					'0'	=> 'Off',
					'1'	=> 'All players',
					'2'	=> 'Players involved',
					'3'	=> 'Attackers',
					'4' => 'Victim',
			),
			'advanced' 	=> '0',

		),
		
		'mani_quake_god_like_mode' => array(

			'value' 	=> '1',
			'info' 		=> 'Defines the scope of the sounds',
			'field_type' => '2',
			'options' 	=> array(
					'0'	=> 'Off',
					'1'	=> 'All players',
					'2'	=> 'Players involved',
					'3'	=> 'Attackers',
					'4' => 'Victim',
			),
			'advanced' 	=> '0',

		),
		
		'mani_quake_wicked_sick_mode' => array(

			'value' 	=> '1',
			'info' 		=> 'Defines the scope of the sounds',
			'field_type' => '2',
			'options' 	=> array(
					'0'	=> 'Off',
					'1'	=> 'All players',
					'2'	=> 'Players involved',
					'3'	=> 'Attackers',
					'4' => 'Victim',
			),
			'advanced' 	=> '0',

		),
		
		'mani_quake_ludicrous_kill_mode' => array(

			'value' 	=> '1',
			'info' 		=> 'Defines the scope of the sounds',
			'field_type' => '2',
			'options' 	=> array(
					'0'	=> 'Off',
					'1'	=> 'All players',
					'2'	=> 'Players involved',
					'3'	=> 'Attackers',
					'4' => 'Victim',
			),
			'advanced' 	=> '0',

		),
		
		'mani_quake_holy_shit_mode' => array(

			'value' 	=> '1',
			'info' 		=> 'Defines the scope of the sounds',
			'field_type' => '2',
			'options' 	=> array(
					'0'	=> 'Off',
					'1'	=> 'All players',
					'2'	=> 'Players involved',
					'3'	=> 'Attackers',
					'4' => 'Victim',
			),
			'advanced' 	=> '0',

		),
	
	),

	'Visuals'	=> array(
		
		'mani_quake_humiliation_visual_mode' => array(

			'value' 	=> '1',
			'info' 		=> 'Defines the scope of the visuals',
			'field_type' => '2',
			'options' 	=> array(
					'0'	=> 'Off',
					'1'	=> 'All players',
					'2'	=> 'Players involved',
					'3'	=> 'Attackers',
					'4' => 'Victim',
			),
			'advanced' 	=> '0',

		),

		'mani_quake_firstblood_visual_mode' => array(

			'value' 	=> '1',
			'info' 		=> 'Defines the scope of the visuals',
			'field_type' => '2',
			'options' 	=> array(
					'0'	=> 'Off',
					'1'	=> 'All players',
					'2'	=> 'Players involved',
					'3'	=> 'Attackers',
					'4' => 'Victim',
			),
			'advanced' 	=> '0',

		),

		'mani_quake_headshot_visual_mode' => array(

			'value' 	=> '1',
			'info' 		=> 'Defines the scope of the visuals',
			'field_type' => '2',
			'options' 	=> array(
					'0'	=> 'Off',
					'1'	=> 'All players',
					'2'	=> 'Players involved',
					'3'	=> 'Attackers',
					'4' => 'Victim',
			),
			'advanced' 	=> '0',

		),

		'mani_quake_prepare_to_fight_visual_mode' => array(

			'value' 	=> '1',
			'info' 		=> 'Defines the scope of the visuals',
			'field_type' => '2',
			'options' 	=> array(
					'0'	=> 'Off',
					'1'	=> 'All players',
					'2'	=> 'Players involved',
					'3'	=> 'Attackers',
					'4' => 'Victim',
			),
			'advanced' 	=> '0',

		),

		'mani_quake_multi_kill_visual_mode' => array(

			'value' 	=> '1',
			'info' 		=> 'Defines the scope of the visuals',
			'field_type' => '2',
			'options' 	=> array(
					'0'	=> 'Off',
					'1'	=> 'All players',
					'2'	=> 'Players involved',
					'3'	=> 'Attackers',
					'4' => 'Victim',
			),
			'advanced' 	=> '0',

		),

		'mani_quake_dominating_visual_mode' => array(

			'value' 	=> '1',
			'info' 		=> 'Defines the scope of the visuals',
			'field_type' => '2',
			'options' 	=> array(
					'0'	=> 'Off',
					'1'	=> 'All players',
					'2'	=> 'Players involved',
					'3'	=> 'Attackers',
					'4' => 'Victim',
			),
			'advanced' 	=> '0',

		),

		'mani_quake_rampage_visual_mode' => array(

			'value' 	=> '1',
			'info' 		=> 'Defines the scope of the visuals',
			'field_type' => '2',
			'options' 	=> array(
					'0'	=> 'Off',
					'1'	=> 'All players',
					'2'	=> 'Players involved',
					'3'	=> 'Attackers',
					'4' => 'Victim',
			),
			'advanced' 	=> '0',

		),



		'mani_quake_killing_spree_visual_mode' => array(

			'value' 	=> '0',
			'info' 		=> 'Defines the scope of the visuals',
			'field_type' => '2',
			'options' 	=> array(
					'0'	=> 'Off',
					'1'	=> 'All players',
					'2'	=> 'Players involved',
					'3'	=> 'Attackers',
					'4' => 'Victim',
			),
			'advanced' 	=> '0',

		),

		'mani_quake_monster_kill_visual_mode' => array(

			'value' 	=> '1',
			'info' 		=> 'Defines the scope of the visuals',
			'field_type' => '2',
			'options' 	=> array(
					'0'	=> 'Off',
					'1'	=> 'All players',
					'2'	=> 'Players involved',
					'3'	=> 'Attackers',
					'4' => 'Victim',
			),
			'advanced' 	=> '0',

		),

		'mani_quake_unstoppable_visual_mode' => array(

			'value' 	=> '1',
			'info' 		=> 'Defines the scope of the visuals',
			'field_type' => '2',
			'options' 	=> array(
					'0'	=> 'Off',
					'1'	=> 'All players',
					'2'	=> 'Players involved',
					'3'	=> 'Attackers',
					'4' => 'Victim',
			),
			'advanced' 	=> '0',

		),

		'mani_quake_ultra_kill_visual_mode' => array(

			'value' 	=> '1',
			'info' 		=> 'Defines the scope of the visuals',
			'field_type' => '2',
			'options' 	=> array(
					'0'	=> 'Off',
					'1'	=> 'All players',
					'2'	=> 'Players involved',
					'3'	=> 'Attackers',
					'4' => 'Victim',
			),
			'advanced' 	=> '0',

		),

		'mani_quake_god_like_visual_mode' => array(

			'value' 	=> '1',
			'info' 		=> 'Defines the scope of the visuals',
			'field_type' => '2',
			'options' 	=> array(
					'0'	=> 'Off',
					'1'	=> 'All players',
					'2'	=> 'Players involved',
					'3'	=> 'Attackers',
					'4' => 'Victim',
			),
			'advanced' 	=> '0',

		),

		'mani_quake_wicked_sick_visual_mode' => array(

			'value' 	=> '1',
			'info' 		=> 'Defines the scope of the visuals',
			'field_type' => '2',
			'options' 	=> array(
					'0'	=> 'Off',
					'1'	=> 'All players',
					'2'	=> 'Players involved',
					'3'	=> 'Attackers',
					'4' => 'Victim',
			),
			'advanced' 	=> '0',

		),

		'mani_quake_ludicrous_kill_visual_mode' => array(

			'value' 	=> '1',
			'info' 		=> 'Defines the scope of the visuals',
			'field_type' => '2',
			'options' 	=> array(
					'0'	=> 'Off',
					'1'	=> 'All players',
					'2'	=> 'Players involved',
					'3'	=> 'Attackers',
					'4' => 'Victim',
			),
			'advanced' 	=> '0',

		),

		'mani_quake_holy_shit_visual_mode' => array(

			'value' 	=> '1',
			'info' 		=> 'Defines the scope of the visuals',
			'field_type' => '2',
			'options' 	=> array(
					'0'	=> 'Off',
					'1'	=> 'All players',
					'2'	=> 'Players involved',
					'3'	=> 'Attackers',
					'4' => 'Victim',
			),
			'advanced' 	=> '0',

		),

	),

);
?>