<table style="border: 0; width: 100%;">
	<tr>
		<td colspan="2"><h3 style="margin: 0;"><?php echo $lang->PlayerDetails->GameplayStats; ?></h3></td>
	</tr>
	<tr>
		<td><?php echo $lang->PlayerDetails->MemberSince; ?>:</td>
		<td><?php echo $steam['memberSince']; ?></td>
	</tr>
	<tr>
		<td><?php echo $lang->PlayerDetails->SteamRating; ?>:</td>
		<td><?php echo $steam['steamRating']; ?></td>
	</tr>
	<tr>
		<td><?php echo $lang->PlayerDetails->PlayingTime; ?>:</td>
		<td><?php echo $steam['hoursPlayed2Wk']; ?></td>
	</tr>
	<tr>
		<td colspan="2"><h3 style="margin: 0;"><?php echo $lang->PlayerDetails->FavoriteGames; ?></h3></td>
	</tr>
	<?php foreach($steam['mostPlayedGames'] as $game): ?>
	<tr>
		<td colspan="2">
			<div class="steam_game">
				<img src="<?php echo $game['gameLogoSmall']; ?>" style="float: left;" alt="<?php echo $game['gameName']; ?> logo" />
				<div class="steam_game_name"><?php echo $game['gameName']; ?></div>
				<div class="steam_game_time"><?php echo $game['hoursPlayed']; ?>hrs / <?php echo $game['hoursOnRecord']; ?>hrs</div>
			</div>
		</td>
	</tr>
	<?php endforeach; ?>
	<tr>
		<td colspan="2"><h3 style="margin: 0;"><?php echo $lang->PlayerDetails->Friends; ?></h3></td>
	</tr>
	<?php foreach($steam['friends'] as $friend): ?>
	<?php
	if($friend['onlineState'] == 'online') $state = 'online';
	else if($friend['onlineState'] == 'in-game') $state = 'ingame';
	else $state = 'offline';
	?>
	<tr>
		<td colspan="2">
			<div class="steam_player">
				<div class="steam_player_status_<?php echo $state; ?>"></div>
				<div class="steam_player_image" style="background-image: url('images/logo.png');"><img src="<?php echo $friend['avatarIcon']; ?>" alt="friend avatar" /></div>
				<div class="steam_player_text"><?php echo $friend['steamID']; ?><br /><?php echo str_replace("<br />", " ", $friend['stateMessage']); ?><br /><?php echo $lang->PlayerDetails->FriendsSince; ?> <?php echo date('F, j, Y', $friend['friendsSince']); ?></div>
			</div>
		</td>
	</tr>
	<?php endforeach; ?>
	<tr>
		<td colspan="2"><h3><?php echo $lang->PlayerDetails->Groups; ?></h3></td>
	</tr>
</table>