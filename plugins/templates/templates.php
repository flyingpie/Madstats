<?php
$skins = scandir('templates');
?>
<table>
	<?php foreach($skins as $skin): ?>
	<?php if(substr($skin, 0, 1) == '.') continue; ?>
	<tr>
		<td style="width: 150px;"><a href="?template=<?php echo $skin; ?>"><img src="templates/<?php echo $skin; ?>/images/thumbnail.png" alt="<?php echo $skin; ?>" /></a></td>
		<td valign="top"><?php echo (file_exists('templates/' . $skin . '/info.txt')) ? file_get_contents('templates/' . $skin . '/info.txt') : $skin; ?></td>
	</tr>
	<?php endforeach; ?>
</table>
