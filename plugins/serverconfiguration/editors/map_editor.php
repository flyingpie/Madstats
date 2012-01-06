<?php

$core->registerScript('lib/jquery/jquery.1.4.2.min.js');
$core->registerScript('lib/jquery/jquery-ui-1.8.5.custom.min.js');

if(isset($_GET['save'])):

$maps = array();
foreach($_POST['maps'] as $map) {
	$maps[] = $map;
}
$dm->setFile('mapcycle.txt', $maps);

else:

$maps = $dm->getFile('mapcycle.txt');

$maps_available = $dm->getDirectory('maps', array('bsp'), array('hide_extensions' => true));

?>

<script type="text/javascript">

$(document).ready(function() {

	$('#mapcycle-list, #mapcycle-available').sortable({
		connectWith: '.sortable',
		containment: '#content',
		helper: 'clone',
		placeholder: 'map-placeholder',
		receive: function(event, ui) {
			ui.item.children('input').addClass('map-input');
			ui.item.append('<div class="map-remove"></div>');
			registerEvents();
		}
	});
	$('#mapcycle-list, #mapcycle-available').disableSelection();

	registerEvents();
	
	function registerEvents() {
		$('.map-remove').unbind('click');
		$('.map-remove').click(function() {
			$(this).parent().remove();
		});
	}
	
	$('#save').click(function() {
		i = 0;
		
		$.each($('.map-input'), function(index) {
			$(this).attr('name', 'maps[' + i + ']');
			i++;
		});
	});

});

</script>

<style type="text/css">

#mapcycle-available {
	list-style: none;
	width: 100%;
}

#mapcycle-available li {
	float: left;
	height: 82px;
	width: 100px;
}

#mapcycle-list {
	float: left;
	list-style: none;
	width: 100%;
}

#mapcycle-list li {
	border: 1px grey solid;
	float: left;
	height: 82px;
	width: 100px;
}

.map-selector-map {
	cursor: pointer;
	margin: 10px;
	position: relative;
	text-align: center;
}

.map-selector-map:hover {
	background-color: #666666;
}

.map-name {
	background: #bf892c;
	bottom: 0;
	color: #000000;
	filter: alpha(opacity=70);
	opacity: 0.7;
	position: absolute;
	width: 100%;
}

.map-remove {
	background-image: url('templates/<?php echo $core->getConfig()->getTemplate(); ?>/images/icons/remove.png');
	height: 16px;
	position: absolute;
	right: 2px;
	top: 2px;
	width: 16px;
}

.map-remove:hover {
	background-image: url('templates/<?php echo $core->getConfig()->getTemplate(); ?>/images/icons/remove_hover.png');
}

.map-placeholder {
	background-color: #bf892c;
	margin: 10px;
}

</style>

<div id="mapcycle-editor" class="sortable">
	<h2>Maps available</h2>
	<div style="overflow: hidden;">
		<ul id="mapcycle-available">

		<?php foreach($maps_available as $map): ?>
		<li class="map-selector-map">
			<img style="width: 100px;" src="http://www.flyingpie.nl/madstats/maps/normal/<?php echo $map; ?>.jpg" alt="<?php echo $map; ?>" />
			<div class="map-name"><?php echo $map; ?></div>
			<input type="hidden" value="<?php echo $map; ?>" />
		</li>
		<?php endforeach; ?>
		</ul>
	</div>
	<h2>Current mapcycle</h2>
	<div style="overflow: hidden;">
		<ul id="mapcycle-list" class="sortable">
		<?php foreach($maps as $map): ?>

		<li class="map-selector-map map">
			<img style="width: 100px;" src="http://www.flyingpie.nl/madstats/maps/normal/<?php echo $map; ?>.jpg" alt="<?php echo $map; ?>" />
			<div class="map-remove"></div>
			<div class="map-name"><?php echo $map; ?></div>
			<input class="map-input" type="hidden" value="<?php echo $map; ?>" />
		</li>
		<?php endforeach; ?>
		</ul>
	</div>
	<div style="text-align: right; width: 100%;"><input id="save" type="submit" value="Save" /></div>
</div>
<?php endif; ?>