<?php
$core->registerScript('lib/jquery/jquery.1.4.2.min.js');
$core->registerScript('lib/jquery/jquery-ui-1.8.5.custom.min.js');
?>
<style type="text/css">
ul {
	list-style-type: square;
}

.menuoption {
	border-left: 1px black solid;
	margin: 0;
	padding: 0;
}
</style>
<script type="text/javascript">
$(document).ready(function() {

	loadMenu('');

	function loadMenu(item) {
		$('#adminmenu').html('Loading...');
		
		$.getJSON('?ajax=adminmenu', { item: item }, function(data) {

			$('#adminmenu').html('<ul id="adminmenulist"></ul>');
			
			$.each(data, function(i, item) {
				var name;
				if(item['action'] == 'goto') name = item['menu'];
				else if(item['action'] == 'list_items' || item['action'] == 'list_players') name = i;
				else if(item['action'] == 'rcon') name = 'rcon_command ' + item['command'];
				
				$('#adminmenulist').append('<li><a class="adminmenuitem" href="#" name="' + name + '">' + item['name'] + '</a></li>');
			});
			
			addListeners();
			
		});
	}
	
	function addListeners() {
		$('.adminmenuitem').click(function() {
			loadMenu($(this).attr('name'));
		});
	}
});
</script>
<h2>Admin menu</h2>
<div id="adminmenu"></div>