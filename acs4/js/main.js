jQuery(function($) {

	$('#progBtn').click(function(e) {
	
		e.preventDefault();
		$('p.title').css('top', 40);
		$('.concertInfo').hide();
		$('.music').slideDown().toggleClass('hidden');
		$(this).hide();
	
	});
	
	$('.board_member a').mouseenter(function() {
		$(this).nextSibling('p').toggleClass('hidden');
	});
	
	$('.board_thumb').mouseleave(function() {
		$(this).nextSibling.fadeOut().toggleClass('hidden');
	});

});