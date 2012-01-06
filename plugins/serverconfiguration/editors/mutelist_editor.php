<?php
$file = $dm->getFile($config);
$mutelist = array();
$row = 
'<tr class="mute">
	<td><input class="steam_id" type="text" value="" name="mutelist[0][steam_id]" style="width: 99%;" /></td>
	<td><input class="time" type="text" value="" name="mutelist[0][time]" style="width: 99%;" /></td>
	<td><input class="author" type="text" value="" name="mutelist[0][author]" style="width: 99%;" /></td>
	<td><a class="remove_mute" href="#">Delete</a></td>
</tr>';
foreach($file as $line) {
	$line = trim($line);
	if(substring($line, 0, 5) == 'STEAM') $mutelist[] = $line;
}

if(isset($_GET['save'])):

else:
?>
<script type="text/javascript">
$(document).ready(function() {
	$('#add_mute').click(function() {
		$('#mutes tr:last').before('');
		$('.command:last').attr('value', '<?php echo $row; ?>');
		$('.link:last').attr('value', '');
		addListeners();
	});
	
	addListeners();
	function addListeners() {
		$('.remove_mute').unbind('click');
		$('.remove_mute').click(function() {
			$(this).parent().parent().remove();
		});
	}
	
	$('#save').click(function() {
		$.each($('.mute'), function(index) {
			$(this).children('td').children('.steam_id').attr('name', 'mutelist[' + index + '][steam_id]');
			$(this).children('td').children('.time').attr('name', 'mutelist[' + index + '][steam_id]');
		});
	});
});
</script>

<h2>Webshortcuts</h2>
<table id="mutes">
	<tr>
		<th style="width: 200px;">Command</th>
		<th>Link</th>
		<th style="width: 50px;"></th>
	</tr>
	<?php $i = 0; ?>
	<?php foreach($weblinks as $command => $link): ?>
	<?php echo $row; ?>
	<?php $i++; ?>
	<?php endforeach; ?>
	<tr>
		<td colspan="3"><a id="add_weblink" href="#">Add</a></td>
	</tr>
</table>
<div style="text-align: right;"><input id="save" type="submit" value="Save" /></div>

<?php endif; ?>