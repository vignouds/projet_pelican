$(function() {
	$('#printemps').click(function(){
		$('#biliotheque').load('bibliotheque.html #printemps', function(){});
	});
	$('#murge').click(function(){
		$('#biliotheque').load('bibliotheque.html #murge', function(){});
	});

	$('#biere').click(function(){
		$('#taverneDesc').fadeOut(2000, function(){
			$('#taverneDesc').load('taverne.html #commandeBiere', function(){});
			$('#taverneDesc').fadeIn(2000);
		});
	});
});