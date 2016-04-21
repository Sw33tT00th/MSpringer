var width = window.innerWidth;
var height = document.body.clientHeight;
var bottomBreak = height - ($('.site-footer').outerHeight(true) + $('.widget-area').outerHeight(true)) - 115;

$('#main-menu-toggle').click(function() {
	$('#primary-menu-mobile').toggle();
});

$(document).ready(function() {
	if(width >= 768) {
		$('.widget-area').width($('.widget-area').parent().width());
	}

	if(width >= 480) {
		if ($(this).scrollTop() >= 300) {
            $('#nav-container').addClass('sticky-nav');
            $('.banner').addClass('banner-margin');
        } else {
            $('#nav-container').removeClass('sticky-nav');
            $('.banner').removeClass('banner-margin');
        }
	}

	if(width >= 768) {
		if($(this).scrollTop() >= 300 && $(this).scrollTop() < bottomBreak) {
			$('.widget-area').width($('.widget-area').parent().width());
			$('.widget-area').addClass('sticky-sidebar');
			$('.widget-area').removeClass('static-sidebar-bottom');
		} else if ($(this).scrollTop() > bottomBreak) {
			$('.widget-area').removeClass('sticky-sidebar');
			$('.widget-area').addClass('static-sidebar-bottom');
		} else {
			$('.widget-area').removeClass('sticky-sidebar');
			$('.widget-area').removeClass('static-sidebar-bottom');
		}
	}
});

window.onresize = function(event) {
	width = window.innerWidth;
	if(width >= 768) {
		$('.widget-area').width($('.widget-area').parent().width());
	}
}

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

$(function(){
	if(width >= 768) {
		$(window).scroll(function() {
			if($(this).scrollTop() >= 300 && $(this).scrollTop() < bottomBreak) {
				$('.widget-area').width($('.widget-area').parent().width());
				$('.widget-area').addClass('sticky-sidebar');
				$('.widget-area').removeClass('static-sidebar-bottom');
			} else if ($(this).scrollTop() > bottomBreak) {
				$('.widget-area').removeClass('sticky-sidebar');
				$('.widget-area').addClass('static-sidebar-bottom');
			} else {
				$('.widget-area').removeClass('sticky-sidebar');
				$('.widget-area').removeClass('static-sidebar-bottom');
			}
		})
	}
});