$(document).ready(function() {

	//$('.playerlist-player').tooltip();
	
	$('.add_client').click(function() {
		if(confirm("Do you want this player to the clients list?")) $(this).parent().submit();
	});
	
	$('.remove_client').click(function() {
		return confirm("Are you sure you want to delete this player from the clients list?");
	});
	
	Shadowbox.init();
	
});