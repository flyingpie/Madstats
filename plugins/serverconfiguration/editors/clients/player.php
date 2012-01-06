<h2><?php echo $player['name']; ?></h2>

<h3>Information</h3>
<table>
	<tr>
		<td>SteamID</td>
		<td><input type="text" name="player[steam]" value="<?php echo $player['steam']; ?>" /></td>
	</tr>
</table>

<h3>Groups</h3>
<table>
	<?php foreach($groups as $group): ?>
	<tr>
		<td style="width: 22px;"><input type="checkbox" name="player[groups][<?php echo $group; ?>]" <?php echo (in_array($group, $playerGroups) || in_array($group, $playerGroups)) ? 'checked="checked"' : '' ?>/></td>
		<td><?php echo $group; ?></td>
	</tr>
	<?php endforeach; ?>
</table>

<h3>Flags</h3>
<div style="float: left; margin-right: 2px; width: 50%;">
<?php
$flags = $res_clients['flags_admin'];
$selected = $playerFlags['Admin'];
$type = 'Admin';
include('plugins/serverconfiguration/editors/clients/flags.php');
?>
</div>
<div style="width: 50%;">
<?php
$flags = $res_clients['flags_immunity'];
$selected = $playerFlags['Immunity'];
$type = 'Immunity';
include('plugins/serverconfiguration/editors/clients/flags.php');
?>
</div>
<input type="hidden" name="saveType" value="player" />
<input type="hidden" name="playerName" value="<?php echo $_GET['player']; ?>" />
<input type="submit" value="Save" />