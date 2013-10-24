jQuery(function() {

	$('#progBtn').click(function(e) {
		
		e.preventDefault();
		$('div.music').slideDown('slow');
	});

	$('.moreLink').click(function(e) {
		$this = $(this);
		$document = $(document)
		
		e.preventDecault();
		$document.fadeOut();
		window.location = "concerts.html"
		$document.fadeIn();
	});

});