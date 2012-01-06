<h3 style="margin-top: 0;"><?php echo $lang->PlayerDetails->Hostages; ?></h3>
<div class="bar_outline">
	<div class="bar_progress" style="width: 0%;"></div>
	<div class="bar_text"><?php echo $lang->PlayerDetails->HostagesTouched; ?></div>
	<div class="bar_percentage"><?php echo $rank['hostages_touched']; ?></div>
</div>
<div class="bar_outline">
	<div class="bar_progress" style="width: 0%;"></div>
	<div class="bar_text"><?php echo $lang->PlayerDetails->HostagesRescued; ?></div>
	<div class="bar_percentage"><?php echo $rank['hostages_rescued']; ?></div>
</div>
<div class="bar_outline">
	<div class="ratio_bar_progress" style="left: <?php echo $rank['hostage_touch_rescue_ratio'] * 100; ?>%;"></div>
	<div class="bar_text"><?php echo $lang->PlayerDetails->Touch; ?></div>
	<div class="ratio_bar_text_ratio"><?php echo $rank['hostage_touch_rescue_ratio']; ?></div>
	<div class="bar_percentage"><?php echo $lang->PlayerDetails->Rescue; ?></div>
</div>
<h3><?php echo $lang->PlayerDetails->Bombs; ?></h3>
<div class="bar_outline">
	<div class="bar_progress" style="width: 0%;"></div>
	<div class="bar_text"><?php echo $lang->PlayerDetails->BombsPlanted; ?></div>
	<div class="bar_percentage"><?php echo $rank['bombs_planted']; ?></div>
</div>
<div class="bar_outline">
	<div class="bar_progress" style="width: 0%;"></div>
	<div class="bar_text"><?php echo $lang->PlayerDetails->BombsExploded; ?></div>
	<div class="bar_percentage"><?php echo $rank['bombs_exploded']; ?></div>
</div>
<div class="bar_outline">
	<div class="ratio_bar_progress" style="left: <?php echo $rank['bombs_plant_explode_ratio'] * 100; ?>%;"></div>
	<div class="bar_text"><?php echo $lang->PlayerDetails->Plant; ?></div>
	<div class="ratio_bar_text_ratio"><?php echo $rank['bombs_plant_explode_ratio']; ?></div>
	<div class="bar_percentage"><?php echo $lang->PlayerDetails->Explode; ?></div>
</div>

<div class="bar_outline">
	<div class="bar_progress" style="width: 0%;"></div>
	<div class="bar_text"><?php echo $lang->PlayerDetails->BombsDefuseAttempts; ?></div>
	<div class="bar_percentage"><?php echo $rank['bomb_defusals_attempted']; ?></div>
</div>
<div class="bar_outline">
	<div class="bar_progress" style="width: 0%;"></div>
	<div class="bar_text"><?php echo $lang->PlayerDetails->BombsDefused; ?></div>
	<div class="bar_percentage"><?php echo $rank['bombs_defused']; ?></div>
</div>
<div class="bar_outline">
	<div class="ratio_bar_progress" style="left: <?php echo $rank['bombs_attempt_defuse_ratio'] * 100; ?>%;"></div>
	<div class="bar_text"><?php echo $lang->PlayerDetails->Attempt; ?></div>
	<div class="ratio_bar_text_ratio"><?php echo $rank['bombs_attempt_defuse_ratio']; ?></div>
	<div class="bar_percentage"><?php echo $lang->PlayerDetails->Defuse; ?></div>
</div>