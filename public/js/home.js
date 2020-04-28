$(document).ready(function() {
	$('.btn-open').click(function(event) {
		$('.sidenav').addClass('show');
		$('.main-content').addClass('push');
	});
	$('.btn-close').click(function(event) {
		$('.sidenav').removeClass('show');
		$('.main-content').removeClass('push');
	});
});
