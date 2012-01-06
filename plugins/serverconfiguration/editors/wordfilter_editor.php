<?php
$file = $dm->getFile($config);
$words = array();

foreach($file as $line) {
	if(strlen($line) == 0 || substr($line, 0, 2) == '//') continue;
	$words[] = $line;
}

if(isset($_GET['save'])):
	$file = array();
	foreach($_POST['words'] as $word) {
		$file[] = $word;
	}
	$dm->setFile($config, $file);
else:
?>
<script type="text/javascript">
$(document).ready(function() {
	$('#add_word').click(function() {
		$('#words tr:last').before('<tr class="word"><td><input class="word" type="text" value="" name="words[0]" style="width: 99%;" /></td><td><a class="remove_word" href="#">Delete</a></td></tr>');
		$('.word:last').attr('value', '');
		addListeners();
	});
	
	addListeners();
	function addListeners() {
		$('.remove_word').unbind('click');
		$('.remove_word').click(function() {
			$(this).parent().parent().remove();
		});
	}
	
	$('#save').click(function() {
		$.each($('.word'), function(index) {
			$(this).children('td').children('.word').attr('name', 'words[' + index + ']');
		});
	});
});
</script>

<h2>Wordfilter</h2>
<table id="words">
	<tr>
		<th>Word</th>
		<th style="width: 50px;"></th>
	</tr>
	<?php $i = 0; ?>
	<?php foreach($words as $word): ?>
	<tr class="word">
		<td><input class="word" type="text" value="<?php echo $word; ?>" name="words[0]" style="width: 99%;" />
		</td><td><a class="remove_word" href="#">Delete</a></td>
	</tr>
	<?php $i++; ?>
	<?php endforeach; ?>
	<tr>
		<td colspan="3"><a id="add_word" href="#">Add</a></td>
	</tr>
</table>
<div style="text-align: right;"><input id="save" type="submit" value="Save" /></div>

<?php endif; ?>