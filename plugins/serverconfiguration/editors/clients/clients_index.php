<script type="text/javascript">
$(document).ready(function() {
	$('.remove_client').click(function() {
		return confirm("Are you sure you want to delete this player?");
	});
	
	$('.remove_group').click(function() {
		return confirm("Are you sure you want to delete this group?");
	});
});
</script>
<h2>Players</h2>
<table>
	<tr>
		<th colspan="2">Player</th>
	</tr>
	<?php foreach($players as $id => $info): ?>
	<tr>
		<td><a href="?page=serverconfiguration&config=clients.txt&player=<?php echo $id; ?>"><?php echo $info['name']; ?></a></td>
		<td style="width: 50px;"><a class="remove_client" href="?page=serverconfiguration&config=clients.txt&deletePlayer=<?php echo $id; ?>">Delete</a></td>
	</tr>
	<?php endforeach; ?>
</table>
<div style="text-align: right;">
	Name<input type="text" name="playerName" />
	Steam<input type="text" name="playerSteam" />
	<input type="submit" name="createPlayer" value="Create Player" />
</div>

<h2>Groups</h2>
<table>
	<tr>
		<th colspan="2">Group</th>
	</tr>
	<?php foreach($groups as $group): ?>
	<tr>
		<td><a href="?page=serverconfiguration&config=clients.txt&group=<?php echo $group; ?>"><?php echo $group; ?></a></td>
		<td style="width: 50px;"><a class="remove_group" href="?page=serverconfiguration&config=clients.txt&deleteGroup=<?php echo $group; ?>">Delete</a></td>
	</tr>
	<?php endforeach; ?>
	</tr>
</table>
<div style="text-align: right;">
	<input type="text" name="groupName" />
	<input type="submit" name="createGroup" value="Create Group" />
</div>