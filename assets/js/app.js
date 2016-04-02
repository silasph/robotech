$(document).ready(function() {
	$(document).foundation();
	fullscreen('.fullscreen');

	$(window).resize(function() {
		fullscreen('.fullscreen');
	});
});

function fullscreen(selector)
{
	var wh = $(window).height();
	$(selector).css('min-height', wh);
}