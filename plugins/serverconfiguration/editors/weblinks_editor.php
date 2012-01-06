<?php
$file = $dm->getFile($config);
$weblinks = array();

foreach($file as $line) {
	$line = trim($line);
	if($line[0] == '"') {
		$weblink = explode(' ', $line);
		$weblinks[trim($weblink[0], '"')] = trim($weblink[1]);
	}
}

if(isset($_GET['save'])):
		$file = array();
		foreach($_POST['weblinks'] as $key => $weblink) {
			if(!empty($weblink['command']) && !empty($weblink['link'])) $file[] = '"' . $weblink['command'] . '" ' . $weblink['link'];
		}
		$dm->setFile($config, $file);
else:
?>
<script type="text/javascript">
$(document).ready(function() {
	$('#add_weblink').click(function() {
		$('#weblinks tr:last').before('<tr class="weblink"><td><input class="command" type="text" value="" name="weblinks[0][command]" style="width: 99%;" /></td><td><input class="link" type="text" value="" name="weblinks[0][link]" style="width: 99%;" /></td><td><a class="remove_weblink" href="#">Delete</a></td></tr>');
		$('.command:last').attr('value', '');
		$('.link:last').attr('value', '');
		addListeners();
	});
	
	addListeners();
	function addListeners() {
		$('.remove_weblink').unbind('click');
		$('.remove_weblink').click(function() {
			$(this).parent().parent().remove();
		});
	}
	
	$('#save').click(function() {
		$.each($('.weblink'), function(index) {
			$(this).children('td').children('.command').attr('name', 'weblinks[' + index + '][command]');
			$(this).children('td').children('.link').attr('name', 'weblinks[' + index + '][link]');
		});
	});
});
</script>

<h2>Webshortcuts</h2>
<table id="weblinks">
	<tr>
		<th style="width: 200px;">Command</th>
		<th>Link</th>
		<th style="width: 50px;"></th>
	</tr>
	<?php $i = 0; ?>
	<?php foreach($weblinks as $command => $link): ?>
	<tr class="weblink">
		<td><input class="command" type="text" value="<?php echo $command; ?>" name="weblinks[<?php echo $i; ?>][command]" style="width: 99%;" /></td>
		<td><input class="link" type="text" value="<?php echo $link; ?>" name="weblinks[<?php echo $i; ?>][link]" style="width: 99%;" /></td>
		<td><a class="remove_weblink" href="#">Delete</a></td>
	</tr>
	<?php $i++; ?>
	<?php endforeach; ?>
	<tr>
		<td colspan="3"><a id="add_weblink" href="#">Add</a></td>
	</tr>
</table>
<div style="text-align: right;"><input id="save" type="submit" value="Save" /></div>

<?php endif; ?>