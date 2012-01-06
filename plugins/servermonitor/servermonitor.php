<?php

$core->registerScript('lib/jquery/jquery.1.4.2.min.js');

?>

<script type="text/javascript">

$(document).ready(function() {

	content_set = false;

	updateServerMonitor();

	function updateServerMonitor() {
		
		$.getJSON('?ajax=servermonitor', function(data) {
			if(data['status'] == 1) {
				content_set = true;
				setTimeout(updateServerMonitor, 10000);
			} else if(data['status'] == 0) {
				setTimeout(updateServerMonitor, 4000);
			} else if(data['status'] == -1) {
				content_set = false;
				setTimeout(updateServerMonitor, 10000);
			}
			
			if(!content_set || data['status'] == 1) $('#serverstats_content').html(data['message']);
			
		});
		
	}

});

</script>