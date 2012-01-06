<style>
#mapcycle {
	margin: 0 auto;
	position: relative;
	width: 95%;
}

.map_previous {
	float: left;
	height: 140px;
	position: relative;
	width: 150px;
}

.map_current {
	background-color: #bf892c;
	float: left;
	height: 140px;
	position: relative;
	width: 150px;
}

.map_next {
	float: left;
	height: 140px;
	position: relative;
	width: 150px;
}

.map_image {
	bottom: 18px;
	position: absolute;
	text-align: center;
	width: 100%;
}

.map_name {
	bottom: 0;
	position: absolute;
	text-align: center;
	width: 100%;
}
</style>

<table>	<tr>		<th colspan="2"><?php echo $lang->ServerStatus->ServerStatistics; ?></th>	</tr>	<tr>		<td style="width: 160px;"><?php echo $lang->ServerStatus->ServerName; ?></td>		<td><?php echo $server_info['hostname']; ?></td>	</tr>	<tr>		<td><?php echo $lang->ServerStatus->Address; ?></td>		<td><?php echo $server_info['address']; ?></td>	</tr>	<tr>		<td><?php echo $lang->ServerStatus->Players; ?></td>		<td><?php echo $server_info['players']; ?></td>	</tr></table>
<br />
<table>
	<tr>
		<th><?php echo $lang->ServerStatus->Mapcycle; ?></th>
	</tr>
	<tr>
		<td>
			<div id="mapcycle">
				<?php foreach($maps as $map): ?>
				<?php if($map == $server_info['map']): ?>
				<div class="map_current" name="<?php echo $map; ?>">
					<div class="map_image"><img style="height: 113px;" src="http://www.flyingpie.nl/madstats/maps/normal/<?php echo $map; ?>.jpg" alt="<?php echo $map; ?>" /></div>
					<div class="map_name"><?php echo $map; ?></div>
				</div>
				<?php else: ?>
				<div class="map_previous" name="<?php echo $map; ?>">
					<div class="map_image"><img style="height: 100px;" src="http://www.flyingpie.nl/madstats/maps/normal/<?php echo $map; ?>.jpg" alt="<?php echo $map; ?>" /></div>
					<div class="map_name"><?php echo $map; ?></div>
				</div>
				<?php endif; ?>
				<?php endforeach; ?>
			</div>
		</td>
	</tr>
</table>
<br />
<table>
	<tr>
		<th style="width: 70%;"><?php echo $lang->ServerStatus->PlayerName; ?></th>
		<th style="width: 10%;"><?php echo $lang->ServerStatus->TimeOnline; ?></th>
		<th style="width: 10%;"><?php echo $lang->ServerStatus->Status; ?></th>
		<th style="width: 10%;"><?php echo $lang->ServerStatus->Ping; ?></th>
	</tr>
	<?php foreach($server_info['players_list'] as $player): ?>
	<tr>
		<td><a href="?page=playerdetails&amp;steamid=<?php echo $player['steam_id']; ?>"><?php echo $player['player_name']; ?></a></td>
		<td><?php echo $player['time_online']; ?></td>
		<td><?php echo $player['status']; ?></td>
		<td><?php echo $player['ping']; ?></td>
	</tr>
	<?php endforeach; ?>
</table>