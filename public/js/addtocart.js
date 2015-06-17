$(function() {
	var cartbadge = 0;
	$('.add-to-cart').click(function(e) {
		e.preventDefault();

		var cb = $('#cart-badge').text();
		cb++;

		$('#cart-badge').text(cb);

	});
});