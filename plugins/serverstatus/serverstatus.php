<?php

$core->registerScript('lib/jquery/jquery.1.4.2.min.js');

?>
<script type="text/javascript">
$(document).ready(function() {

	content_set = false;
	loadServerStatus();

	function loadServerStatus() {

		$.getJSON('?ajax=serverstatus', function(data) {

			if(data['status'] == 0) {
				setTimeout(loadServerStatus, 4000);
			} else if(data['status'] == 1) {
				content_set = true;
				setTimeout(loadServerStatus, 20000);
			} else if(data['status'] == -1) {
				content_set = false;
				setTimeout(loadServerStatus, 4000);
			}

			if(!content_set || data['status'] == 1) {
				$('#serverstatus').html(data['message']);
				if(data['is_logged'] == true) addListeners();
			}
		});
		
	}
	
	function addListeners() {
		$('.map_previous').css('cursor', 'pointer');
		$('.map_previous').click(function() {
			changeMap($(this).attr('name'));
		});
	}
	
	function changeMap(mapname) {
		if(confirm('<?php echo $lang->ServerStatus->ChangeMapConfirmation; ?>')) {
			$('#serverstatus').html('<?php echo $lang->ServerStatus->ChangingMap; ?>');
			$.get('?ajax=rcon&cmd=ma_map ' + mapname, function(data) {
				loadServerStatus();
			});
		}
	}

});
</script>
<div id="serverstatus"><img src="templates/<?php echo $core->getConfig()->getTemplate(); ?>/images/ajax-loader.gif" alt="ajax load icon" /><?php echo $lang->ServerStatus->RetrievingServerStatus; ?></div>