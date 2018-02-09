$(function() {
	$('#printemps').click(function(){
		$('#biliotheque').load('bibliotheque.html #printemps', function(){});
	});
	$('#murge').click(function(){
		$('#biliotheque').load('bibliotheque.html #murge', function(){});
	});

});