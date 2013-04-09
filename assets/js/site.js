// @codekit-prepend jquery.js

$(document).ready(function () {
	$('.content.gallery img').on('dragstart', function (event) {
		event.preventDefault();
	});
});
