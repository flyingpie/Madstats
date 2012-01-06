<table class="rowclick">
	<tr>
		<th colspan="2"><?php echo $type; ?></th>
	</tr>
	<?php foreach($flags as $flag => $description): ?>
	<tr>
		<td style="width: 22px;"><input type="checkbox" name="flags[<?php echo $type; ?>][<?php echo $flag; ?>]" <?php echo (in_array($flag, $selected)) ? 'checked="checked"' : ''; ?>/></td>
		<td><?php echo $description; ?></td>
	</tr>
	<?php endforeach; ?>
</table>