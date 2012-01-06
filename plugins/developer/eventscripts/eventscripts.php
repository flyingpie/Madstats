<?php

$dm = $core->loadComponent('DataManager');



$plugins = $dm->getDirectory('addons/eventscripts');

?>

<table>
	<tr>
		<th>Name</th>
		<th>Actions</th>
	</tr>
	<?php foreach($plugins as $plugin): ?>
	<tr>
		<td><?php echo $plugin; ?></td>
		<td></td>
	</tr>
	<?php endforeach; ?>
</table>