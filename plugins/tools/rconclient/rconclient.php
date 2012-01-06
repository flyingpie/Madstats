<?php

$core->registerScript('lib/jquery/jquery.1.4.2.min.js');
$core->registerScript('lib/jquery/jquery-ui-1.8.5.custom.min.js');

?>

<script type="text/javascript">

$(document).ready(function() {

	$('#send_rcon').click(sendCmd);
	$('#rcon_cmd').keyup(function(e) {
		
		if(e.keyCode == 13) {
		
			sendCmd();
			
		}
		
	});
	
	$('#rcon_cmd').autocomplete({
		source: "?ajax=rconsuggest&cmd=mp"
	});
	
	
	function sendCmd() {
		
		if($('#rcon_cmd').val().length > 0) {
		
			$('#rcon_output').append($('#rcon_cmd').val() + "\n");
			scrollToBottom();
		
			$('#loader').css('display', 'inline');
			$.get('?ajax=rcon&cmd=' + $('#rcon_cmd').val(), function(data) {
				$('#rcon_output').append(data + "\n\n");
				$('#loader').css('display', 'none');
				scrollToBottom();
			});
			
			$('#rcon_cmd').val('');
		}
		
	}
	
	function scrollToBottom() {
		$('#rcon_output').scrollTop($('#rcon_output')[0].scrollHeight - $('#rcon_output').height());
	}
});

</script>

<style type="text/css">
.ui-autocomplete {
	background-color: #323232;
	color: #b4b3b2;
	font-size: 12px;
	list-style: none;
	margin: 0;
	padding: 2px;
	text-align: left;
	width: 200px;
}
</style>

<div class="rcon_client">
<div style="margin: 3px;">Rcon client</div>
<textarea id="rcon_output"></textarea>
<input style="width: 100%;" id="rcon_cmd", type="text" />
<div style="text-align: right;"><img id="loader" style="display: none; margin-right: 10px; vertical-align: middle;" src="templates/simple/images/ajax-loader.gif" /><input id="send_rcon" type="button" value="Send" /></div>
</div>