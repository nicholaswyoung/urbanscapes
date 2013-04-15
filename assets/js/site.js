// @codekit-prepend jquery.js
// @codekit-prepend lib/fluid-iframe.js

window.Cart = new ShoppingCart();

$(document).ready(function () {
	$('.content.gallery img').on('dragstart', function (event) {
		event.preventDefault();
	});
});
