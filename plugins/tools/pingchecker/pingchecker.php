<?php

$core->registerScript('lib/jquery/jquery.1.4.2.min.js');

?>

<script type="text/javascript">

$(document).ready(function() {

	refreshPing();

	function refreshPing() {
		
		$.get('?ajax=ping', function(data) {
		
			$('#ping_value').html(data);
			
		});
		
		setTimeout(refreshPing, 2000);
		
	}
	
});

</script>
Ping Checker<br /><br />

Ping: <span id="ping_value">-1</span>