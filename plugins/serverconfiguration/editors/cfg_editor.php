<script type="text/javascript">
$(document).ready(function() {
	
	$('.cfg_apply').click(function() {
		var id = $(this).attr('id');
		var field = $("#" + id);
		
		if(field.is(':checkbox')) {
			var value = (field.attr('checked')) ? '1' : '0';
		} else {
			var value = field.val();
		}
		
		if(confirm('Are you sure you want to change \'' + id + '\' to \'' + value + '\'?')) {		
			$.get('?ajax=applyconfig&property=' + id + '&value=' + value, function(data) {
				if(data == '1') {
					// Successful
				} else {
					// Failed
				}
			});
		}
		
		return false;
	});
});
</script>
<?php
$cfg_file = $_GET['config'];

if($cfg_file == 'bots.cfg' || $cfg_file == 'mani_quake_sounds.cfg' || $cfg_file == 'mani_server.cfg' || $cfg_file == 'server.cfg') {
	include('plugins/serverconfiguration/resources/' . $cfg_file . '.php');
}

if(isset($_GET['save'])):

$result = array();
foreach($res_config as $category => $items) {
	foreach($items as $item => $data) {
		$result[$item] = ($data['field_type'] == 1) ? '0' : $data['value'];
	}
}

foreach($_POST as $field_type => $fields) {
	if(is_array($fields)) {
		foreach($fields as $field => $value) {
			if($field_type == 'checkbox') $value = ($value == 'on') ? '1' : '0';
			$result[$field] = $value;
		}
	}
}

if(isset($res_postcvars) && is_array($res_postcvars)) {
	foreach($res_postcvars as $post_cvar => $value) {
		$result[$post_cvar] = $value;
	}
}

$dm->setConfigFile($cfg_file, $result);

else:

echo '<h2>' . $res_config_name . '</h2>';

$uri = '';
foreach($_GET as $key => $value) {
	if($key == 'mode') continue;
	
	if(strlen($uri) > 0) $uri .= '&';
	else $uri .= '?';
	
	$uri .= $key . '=' . $value;
}

$mode = (isset($_GET['mode']) && ($_GET['mode'] == 'simple' || $_GET['mode'] == 'advanced')) ? $_GET['mode'] : 'simple';

if($mode == 'simple') {
	$mode_button = '<a href="' . $uri . '&mode=advanced">Advanced</a>';
} else {
	$mode_button = '<a href="' . $uri . '&mode=simple">Simple</a>';
}

echo '<div style="text-align: right;">' . $mode_button . '</div>';

$cfg_current = $dm->getConfigFile($cfg_file);

?>

<table>
	<?php foreach($res_config as $category => $items): ?>
	<tr>
		<th colspan="2"><?php echo $category; ?></th>
		<th style="text-align: right;"><input name="execute" type="submit" value="Execute" /><input type="submit" value="Save" /></th>
	</tr>
	<?php foreach($items as $item => $data): ?>
	<?php
	$current_value = $data['value'];
	if(array_key_exists($item, $cfg_current)) $current_value = $cfg_current[$item];

	if($mode == 'simple' && $data['advanced']) {
		echo '<input name="hidden[' . $item . ']" type="hidden" value="' . $current_value .'" />';
		continue;
	}
	
	switch($data['field_type']) {
		case 1:
			// checkbox
			$input = '<input id="' . $item . '" name="checkbox[' . $item . ']" type="checkbox" ' . (($current_value === '1') ? 'checked="checked"' : '') . ' />';
			break;
		case 2:
			// combobox
			$input = '<select id="' . $item . '" name="combobox[' . $item . ']">';
			foreach($data['options'] as $value => $name) {
				$input .= '<option value="' . $value . '" ' . (($value == $current_value) ? 'selected' : '') . '>' . $name . '</option>';
			}
			
			$input .= '</select>';
			break;
		case 3:
			// textbox
			$input = '<input id="' . $item . '" name="textbox[' . $item . ']" type="text" value="' . $current_value . '" />';
			break;
	}
	?>
	<tr>
		<td style="width: 200px;"><?php echo ucwords(trim(str_replace('_', ' ', str_replace($res_prefixes, array(), $item)))); ?></td>
		<td style="width: 160px;"><?php echo $input; ?></td>
		<td><?php echo $data['info']; ?></td>
	</tr>
	<?php endforeach; ?>
	<?php endforeach; ?>
</table>

<?php endif; ?>