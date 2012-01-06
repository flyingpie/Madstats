<?php

require_once('playerlist.php');

?>
<?php echo $core->getStylesheet(array('layout', 'playerlist')); ?>
<div id="playerlistcontrols">
<script type="text/javascript" src="plugins/playerlist/scripts.js"></script>
<div id="playersearch">
<form method="get">
	<input name="page" type="hidden" value="playerlist" />
	<?php $i = 0; ?>
	<?php foreach($searchtypes as $searchtype => $name): ?>
	<?php $checked = ((isset($_GET['searchtype']) && $_GET['searchtype'] == $searchtype) || $i == 0) ? 'checked="checked"' : ''; ?>
	<input name="searchtype" type="radio" value="<?php echo $searchtype; ?>"  <?php echo $checked; ?> /><?php echo $name; ?>
	<?php $i++; ?>
	<?php endforeach; ?>
	<input name="term" type="text" value="<?php if(isset($_GET['term'])) echo $_GET['term']; ?>" />
	<input name="search" type="submit" value="<?php echo $lang->Common->Search; ?>" />
	<input name="reset" type="submit" value="<?php echo $lang->Common->Reset; ?>" />
</form>
</div>
<div id="pagesize">
<?php

require_once('pagesize.php');

?>
</div>
<div id="banmutelist"><a href="<?php echo $core->getURL(array('page' => 'banmutelist')); ?>"><?php echo $lang->PlayerList->BansMutesList; ?></a></div>
</div>
<table id="playerlist">
	<tr>
		<th><?php echo $lang->PlayerList->Rank; ?></th>
		<th><?php echo $lang->PlayerList->PlayerName; ?></th>
		<th><?php echo $lang->PlayerList->Kills; ?></th>
		<th><?php echo $lang->PlayerList->Deaths; ?></th>
		<th><?php echo $lang->PlayerList->Points; ?></th>
		<?php if($isLogged): ?>
		<th style="width: 100px;"><?php echo $lang->PlayerList->Permissions; ?></th>
		<?php endif; ?>
	</tr>
	<?php $i = 0; ?>
	<?php foreach($players as $player): ?>
	<tr class="row_alternate <?php echo ($i % 2 == 0) ? 'even' : 'odd'; ?>">
		<td><?php echo $player['rank']; ?></td>
		<td><a rel="shadowbox;width=1200" href="?ajax=playerdetails&amp;steamid=<?php echo $player['steam_id']; ?>"><?php echo $player['player_name'] ?></a></td>
		<td><?php echo $player['kills']; ?></td>
		<td><?php echo $player['deaths']; ?></td>
		<td><?php echo $player['points']; ?></td>
		<?php if($isLogged): ?>
		<td><?php echo ($clients->hasSteam($player['steam_id'])) ? '<a href="?page=serverconfiguration&amp;config=clients.txt&amp;player=' . $clients->getId($player['steam_id']) . '">Edit</a> <a class="remove_client" href="?page=serverconfiguration&amp;config=clients.txt&amp;deletePlayer=' . $clients->getId($player['steam_id']) . '">Delete</a>' : '<form action="?page=serverconfiguration&amp;config=clients.txt" method="post"><a class="add_client" href="#">Add</a><input type="hidden" name="playerName" value="' . $player['player_name'] . '" /><input type="hidden" name="playerSteam" value="' . $player['steam_id'] . '" /></form>'; ?></td>
		<?php endif; ?>
	</tr>
	<?php $i++; ?>
	<?php endforeach; ?>
</table>