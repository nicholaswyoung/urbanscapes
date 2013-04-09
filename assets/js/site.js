// @codekit-prepend jquery.js
// @codekit-prepend lib/cart.js

window.Cart = new ShoppingCart();

$(document).ready(function () {
	$('.content.gallery img').on('dragstart', function (event) {
		event.preventDefault();
	});
	
	$('button.add').click(function (event) {
		event.preventDefault();
		Cart.add($(this).data('id'));
		$('.cart .items').attr('value', new String(Cart.items));
	});
});
