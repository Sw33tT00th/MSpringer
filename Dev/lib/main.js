var width = window.innerWidth;

window.onresize = function(event) {
	width = window.innerWidth;
}

$('#main-menu-toggle').click(function() {
	$('#primary-menu-mobile').toggle();
});

$(function(){
	if(width >= 480) {
	    $(window).scroll(function() {
	        if ($(this).scrollTop() >= 300) {
	            $('#nav-container').addClass('sticky-nav');
	            $('.banner').addClass('banner-margin');
	        } else {
	            $('#nav-container').removeClass('sticky-nav');
	            $('.banner').removeClass('banner-margin');
	        }
	    });
	}
});