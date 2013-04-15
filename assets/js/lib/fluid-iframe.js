$(function () {
	var $allFrames = $('iframe.shoplocket-embed'),
		 $fluidEl 	= $('div.photo');
		 
	$allFrames.each(function () {
		$(this).data('aspectRatio', this.height / this.width).removeAttr('height').removeAttr('width');
	});
	
	$(window).resize(function () {
		var newWidth = $fluidEl.width();
		$allFrames.each(function () {
			var $el = $(this);
			$el.width(newWidth).height(newWidth * $el.data('aspectRatio'));
		})
	}).resize();
});