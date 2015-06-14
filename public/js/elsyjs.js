$(function(){
	new WOW().init();
	
	var $document = $(document),
	    $element = $('#top-nav'),
	    className = 'hasScrolled';

	$document.scroll(function() {
	  if ($document.scrollTop() >= 50) {
	    // user scrolled 50 pixels or more;
	    // do stuff
	    $element.addClass(className);
	  } else {
	    $element.removeClass(className);
	  }
	});
});