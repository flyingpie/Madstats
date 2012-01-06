<?php
$config = $core->loadComponent('Config');
$rc = $core->loadComponent('RconClient');
$activeServer = $config->getActiveServer();
?>
<?php foreach($config->getServers() as $server): ?>
<?php
$config->readConfiguration($server);
$rc->connect();
$server_info = $rc->getServerInfo();
?>
<table>
	<?php if($server_info !== false): ?>
	<tr class="<?php echo ($server == $activeServer) ? 'serverselector_activeserver' : 'serverselector_inactiveserver'; ?>">
		<td style="width: 150px;"><a href="?server=<?php echo $server; ?>"><img src="http://www.flyingpie.nl/madstats/maps/normal/<?php echo $server_info['map']; ?>.jpg" alt="<?php echo $server_info['map']; ?>" /></a></td>
		<td><?php echo $server_info['hostname']; ?><br /><?php echo $server_info['address']; ?><br /><?php echo $server_info['map']; ?><br /><?php echo $server_info['players']; ?></td>
	</tr>
	<?php else: ?>
	<tr>
		<td colspan="2"><?php echo $lang->ServerStatus->CouldNotConnectToServer; ?></td>
	</tr>
	<?php endif; ?>
</table>
<?php endforeach; ?>
