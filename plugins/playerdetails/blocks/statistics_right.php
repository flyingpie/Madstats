<h3 style="margin-top: 0;"><?php echo $lang->PlayerDetails->Guns; ?></h3>
<div class="bar_outline">
	<div class="bar_progress" style="width: 0%;"></div>
	<div class="bar_text"><?php echo $lang->PlayerDetails->ShotsFired; ?></div>
	<div class="bar_percentage"><?php echo $rank['shots_fired']; ?></div>
</div>
<div class="bar_outline">
	<div class="bar_progress" style="width: 0%;"></div>
	<div class="bar_text"><?php echo $lang->PlayerDetails->ShotsHit; ?></div>
	<div class="bar_percentage"><?php echo $rank['shots_hit']; ?></div>
</div>
<div class="bar_outline">
	<div class="bar_progress" style="width: 0%;"></div>
	<div class="bar_text"><?php echo $lang->PlayerDetails->Accuracy; ?></div>
	<div class="bar_percentage"><?php echo $rank['accuracy']; ?></div>
</div>
<div class="bar_outline">
	<div class="bar_progress" style="width: 0%;"></div>
	<div class="bar_text"><?php echo $lang->PlayerDetails->BulletsPerMinute; ?></div>
	<div class="bar_percentage"><?php echo $rank['bullets_per_minute']; ?></div>
</div>
<div class="bar_outline">
	<div class="bar_progress" style="width: 0%;"></div>
	<div class="bar_text"><?php echo $lang->PlayerDetails->KillsPerMinute; ?></div>
	<div class="bar_percentage"><?php echo $rank['kills_per_minute']; ?></div>
</div>
<div class="bar_outline">
	<div class="bar_progress" style="width: 0%;"></div>
	<div class="bar_text"><?php echo $lang->PlayerDetails->BulletsPerKill; ?></div>
	<div class="bar_percentage"><?php echo $rank['bullets_per_kill']; ?></div>
</div>
<div class="bar_outline">
	<div class="bar_progress" style="width: 0%;"></div>
	<div class="bar_text"><?php echo $lang->PlayerDetails->DamagePerKill; ?></div>
	<div class="bar_percentage"><?php echo $rank['damage_per_kill']; ?></div>
</div>
<div class="bar_outline">
	<div class="bar_progress" style="width: 0%;"></div>
	<div class="bar_text"><?php echo $lang->PlayerDetails->HeadshotKills; ?></div>
	<div class="bar_percentage"><?php echo $rank['headshots']; ?></div>
</div>
<div class="bar_outline">
	<div class="bar_progress" style="width: 0%;"></div>
	<div class="bar_text"><?php echo $lang->PlayerDetails->KnifeKills; ?></div>
	<div class="bar_percentage"><?php echo $rank['knife_kills']; ?></div>
</div>
<div class="bar_outline">
	<div class="bar_progress" style="width: 0%;"></div>
	<div class="bar_text"><?php echo $lang->PlayerDetails->NadeKills; ?></div>
	<div class="bar_percentage"><?php echo $rank['hegrenade_kills']; ?></div>
</div>
<h3>Team</h3>
<div class="bar_outline">
	<div class="bar_progress" style="width: 0%;"></div>
	<div class="bar_text"><?php echo $lang->PlayerDetails->PlayedAsCt; ?></div>
	<div class="bar_percentage"><?php echo $rank['won_as_ct'] + $rank['lost_as_ct']; ?></div>
</div>
<div class="bar_outline">
	<div class="bar_progress" style="width: <?php echo $rank['won_as_ct'] / ($rank['won_as_ct'] + $rank['lost_as_ct']) * 100; ?>%;"></div>
	<div class="bar_text"><?php echo $lang->PlayerDetails->WonAsCt; ?></div>
	<div class="bar_percentage"><?php echo $rank['won_as_ct']; ?></div>
</div>
<div class="bar_outline">
	<div class="bar_progress" style="width: <?php echo $rank['lost_as_ct'] / ($rank['won_as_ct'] + $rank['lost_as_ct']) * 100; ?>%;"></div>
	<div class="bar_text"><?php echo $lang->PlayerDetails->LostAsCt; ?></div>
	<div class="bar_percentage"><?php echo $rank['lost_as_ct']; ?></div>
</div>
<div class="bar_outline">
	<div class="ratio_bar_progress" style="right: <?php echo $rank['ct_win_loss_ratio'] + 50; ?>%;"></div>
	<div class="bar_text"><?php echo $lang->PlayerDetails->Win; ?></div>
	<div class="ratio_bar_text_ratio"><?php echo $rank['ct_win_loss_ratio']; ?></div>
	<div class="bar_percentage"><?php echo $lang->PlayerDetails->Loss; ?></div>
</div>
<div class="bar_outline">
	<div class="bar_progress" style="width: 0%;"></div>
	<div class="bar_text"><?php echo $lang->PlayerDetails->PlayedAsT; ?></div>
	<div class="bar_percentage"><?php echo $rank['won_as_t'] + $rank['lost_as_t']; ?></div>
</div>
<div class="bar_outline">
	<div class="bar_progress" style="width: <?php echo $rank['won_as_t'] / ($rank['won_as_t'] + $rank['lost_as_t']) * 100; ?>%;"></div>
	<div class="bar_text"><?php echo $lang->PlayerDetails->WonAsT; ?></div>
	<div class="bar_percentage"><?php echo $rank['won_as_t']; ?></div>
</div>
<div class="bar_outline">
	<div class="bar_progress" style="width: <?php echo $rank['lost_as_t'] / ($rank['won_as_t'] + $rank['lost_as_t']) * 100; ?>%;"></div>
	<div class="bar_text"><?php echo $lang->PlayerDetails->LostAsT; ?></div>
	<div class="bar_percentage"><?php echo $rank['lost_as_t']; ?></div>
</div>
<div class="bar_outline">
	<div class="ratio_bar_progress" style="right: <?php echo $rank['t_win_loss_ratio'] + 50; ?>%;"></div>
	<div class="bar_text"><?php echo $lang->PlayerDetails->Win; ?></div>
	<div class="ratio_bar_text_ratio"><?php echo $rank['t_win_loss_ratio']; ?></div>
	<div class="bar_percentage"><?php echo $lang->PlayerDetails->Loss; ?></div>
</div>