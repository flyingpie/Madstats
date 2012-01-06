<?php
$config_files = array(

	$lang->Configuration->CategoryMainServer => array(
		
		'server.cfg' => array(
				'description' => $lang->Configuration->ServerInfo,
				'editor' => 'cfg_editor',
				'name' => $lang->Configuration->Server
			),
		'mani_server.cfg' => array(
				'description' => $lang->Configuration->ManiServerInfo,
				'editor' => 'cfg_editor',
				'name' => $lang->Configuration->ManiServer
			),
		'bots.cfg' => array(
				'description' => $lang->Configuration->BotsInfo,
				'editor' => 'cfg_editor',
				'name' => $lang->Configuration->Bots
			),
		'mapcycle.txt' => array(
				'description' => $lang->Configuration->MapcycleInfo,
				'editor' => 'map_editor',
				'name' => $lang->Configuration->Mapcycle
			),
		'motd.txt' => array(
				'description' => $lang->Configuration->MessageOfTheDayInfo,
				'editor' => 'motd_editor',
				'name' => $lang->Configuration->MessageOfTheDay
			),
		'clients.txt' => array(
				'description' => $lang->Configuration->ClientsInfo,
				'editor' => 'clients_editor',
				'name' => $lang->Configuration->Clients
			)
		
	),
	
	$lang->Configuration->CategoryChat => array(
		'adverts.txt' => array(
				'description' => $lang->Configuration->AdvertsInfo,
				'editor' => 'txt_editor',
				'name' => $lang->Configuration->Adverts
			),
		'chattriggers.txt' => array(
				'description' => $lang->Configuration->ChattriggersInfo,
				'editor' => 'txt_editor',
				'name' => $lang->Configuration->Chattriggers
			),
		'commandlist.txt' => array(
				'description' => $lang->Configuration->CommandlistInfo,
				'editor' => 'txt_editor',
				'name' => $lang->Configuration->Commandlist
			),
		'mutelist.txt' => array(
				'description' => $lang->Configuration->MutelistInfo,
				'editor' => 'txt_editor',
				'name' => $lang->Configuration->Mutelist
			),
		'webshortcutlist.txt' => array(
				'description' => $lang->Configuration->WebshortcutlistInfo,
				'editor' => 'weblinks_editor',
				'name' => $lang->Configuration->Webshortcutlist
			),
		'wordfilter.txt' => array(
				'description' => $lang->Configuration->WordfilterInfo,
				'editor' => 'wordfilter_editor',
				'name' => $lang->Configuration->Wordfilter
			)
	),
	
	$lang->Configuration->CategoryKickingAndBanning => array(
		'autokick_ip.txt' => array(
				'description' => $lang->Configuration->AutokickByIpInfo,
				'editor' => 'txt_editor',
				'name' => $lang->Configuration->AutokickByIp
			),
		'autokick_name.txt' => array(
				'description' => $lang->Configuration->AutokickByNameInfo,
				'editor' => 'txt_editor',
				'name' => $lang->Configuration->AutokickByName
			),
		'autokick_pname.txt' => array(
				'description' => $lang->Configuration->AutokickByPartialNameInfo,
				'editor' => 'txt_editor',
				'name' => $lang->Configuration->AutokickByPartialName
			),
		'autokick_steam.txt' => array(
				'description' => $lang->Configuration->AutokickBySteamIdInfo,
				'editor' => 'txt_editor',
				'name' => $lang->Configuration->AutokickBySteamId
			),
		'banlist.txt' => array(
				'description' => $lang->Configuration->BanlistInfo,
				'editor' => 'txt_editor',
				'name' => $lang->Configuration->Banlist
			),
		'pingimmunity.txt' => array(
				'description' => $lang->Configuration->PingImmunityInfo,
				'editor' => 'txt_editor',
				'name' => $lang->Configuration->PingImmunity
			)
	),
	
	$lang->Configuration->CategoryRcon => array(
		'crontablist.txt' => array(
				'description' => $lang->Configuration->CrontablistInfo,
				'editor' => 'txt_editor',
				'name' => $lang->Configuration->Crontablist
			),
		'cexeclist_all.txt' => array(
				'description' => $lang->Configuration->CommandExecAllInfo,
				'editor' => 'txt_editor',
				'name' => $lang->Configuration->CommandExecAll
			),
		'cexeclist_ct.txt' => array(
				'description' => $lang->Configuration->CommandExecCtInfo,
				'editor' => 'txt_editor',
				'name' => $lang->Configuration->CommandExecCt
			),
		'cexeclist_t.txt' => array(
				'description' => $lang->Configuration->CommandExecTInfo,
				'editor' => 'txt_editor',
				'name' => $lang->Configuration->CommandExecT
			),
		'cexeclist_player.txt' => array(
				'description' => $lang->Configuration->CommandExecPlayerInfo,
				'editor' => 'txt_editor',
				'name' => $lang->Configuration->CommandExecPlayer
			),
		'cexeclist_spec.txt' => array(
				'description' => $lang->Configuration->CommandExecSpecInfo,
				'editor' => 'txt_editor',
				'name' => $lang->Configuration->CommandExecSpec
			),
		'rconlist.txt' => array(
				'description' => $lang->Configuration->RconlistInfo,
				'editor' => 'txt_editor',
				'name' => $lang->Configuration->Rconlist
			)
	),
	
	$lang->Configuration->CategoryRestrictions => array(
		'default_weapon_restrict.txt' => array(
				'description' => $lang->Configuration->WeaponRestrictInfo,
				'editor' => 'txt_editor',
				'name' => $lang->Configuration->WeaponRestrict
			),
		'reserveslots.txt' => array(
				'description' => $lang->Configuration->ReservedSlotsInfo,
				'editor' => 'txt_editor',
				'name' => $lang->Configuration->ReservedSlots
			)
	),
	
	$lang->Configuration->CategorySounds => array(
		'mani_quake_sounds.cfg' => array(
				'description' => $lang->Configuration->QuakeSoundsInfo,
				'editor' => 'cfg_editor',
				'name' => $lang->Configuration->QuakeSounds
			),
		'actionsoundlist.txt' => array(
				'description' => $lang->Configuration->ActionsoundlistInfo,
				'editor' => 'txt_editor',
				'name' => $lang->Configuration->Actionsoundlist
			),
		'soundlist.txt' => array(
				'description' => $lang->Configuration->SoundlistInfo,
				'editor' => 'txt_editor',
				'name' => $lang->Configuration->Soundlist
			),
		'quakesoundlist.txt' => array(
				'description' => $lang->Configuration->QuakesoundlistInfo,
				'editor' => 'txt_editor',
				'name' => $lang->Configuration->Quakesoundlist
			)
	),
	
	$lang->Configuration->CategoryVoting => array(
		'votequestionlist.txt' => array(
				'description' => $lang->Configuration->VotequestionlistInfo,
				'editor' => 'txt_editor',
				'name' => $lang->Configuration->Votequestionlist
			),
		'votersconlist.txt' => array(
				'description' => $lang->Configuration->VotersconlistInfo,
				'editor' => 'txt_editor',
				'name' => $lang->Configuration->Votersconlist
			)
	),

);
?>