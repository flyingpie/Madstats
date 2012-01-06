<?php foreach($config_files as $category => $configs): ?>

<table class="serverconfiguration">
	<tr>
		<th colspan="2"><?php echo $category; ?></th>
	</tr>
	
	<?php foreach($configs as $file => $item): ?>
	<tr>
		<td style="width: 200px;"><a href="?page=serverconfiguration&amp;config=<?php echo $file; ?>"><?php echo $item['name']; ?></a></td>
		<td><?php echo $item['description']; ?></td>
	</tr>
	<?php endforeach; ?>

</table>
<br />

<?php endforeach; ?>