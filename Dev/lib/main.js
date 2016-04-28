var width = window.innerWidth;
var height = document.body.clientHeight;
var sidebarSpace = height - ($('.site-footer').outerHeight(true) + $('.site-header').outerHeight(true) + 14);
var bottomBreak = height - ($('.site-footer').outerHeight(true) + $('.widget-area').outerHeight(true)) - 115;

$('#main-menu-toggle').click(function() {
	$('#primary-menu-mobile').toggle();
});

$('#sidebar-button').click(function() {
	if($('#sidebar-button').hasClass('sidebar-button-toggled')) {
		$('#sidebar').removeClass('sidebar-show');
		$('#sidebar-button').removeClass('sidebar-button-toggled');
		$('#sidebar-button').html('<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>');
	} else {
		$('#sidebar').addClass('sidebar-show');
		$('#sidebar-button').addClass('sidebar-button-toggled');
		$('#sidebar-button').html('<span class="glyphicon glyphicon-remove" aria-hidden="true"></span>');
		// $('#sidebar-button').text('<');
	}
});

$(document).ready(function() {
	if(width >= 992) {
		$('.widget-area').width($('.widget-area').parent().width());
		if($(window).scrollTop() >= 300 && $(window).scrollTop() < bottomBreak) {
			$('.widget-area').width($('.widget-area').parent().width());
			$('.widget-area').addClass('sticky-sidebar');
			$('.widget-area').removeClass('static-sidebar-bottom');
			$('#sidebar').removeAttr('height');
		} else if ($(window).scrollTop() >= bottomBreak) {
			$('.widget-area').removeClass('sticky-sidebar');
			$('.widget-area').addClass('static-sidebar-bottom');
			$('#sidebar').height(sidebarSpace);
		} else {
			$('.widget-area').removeClass('sticky-sidebar');
			$('.widget-area').removeClass('static-sidebar-bottom');
			$('#sidebar').removeAttr('height');
		}
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

	if(width >= 992) {
		if($(this).scrollTop() >= 300 && $(this).scrollTop() < bottomBreak) {
			$('.widget-area').width($('.widget-area').parent().width());
			$('.widget-area').addClass('sticky-sidebar');
			$('.widget-area').removeClass('static-sidebar-bottom');
			$('#sidebar').removeAttr('height');
		} else if ($(this).scrollTop() >= bottomBreak) {
			$('.widget-area').removeClass('sticky-sidebar');
			$('.widget-area').addClass('static-sidebar-bottom');
			$('#sidebar').height(sidebarSpace);
		} else {
			$('.widget-area').removeClass('sticky-sidebar');
			$('.widget-area').removeClass('static-sidebar-bottom');
			$('#sidebar').removeAttr('height');
		}
	}
});

window.onresize = function(event) {
	width = window.innerWidth;
	if(width >= 992) {
		$('#sidebar').removeClass('sidebar-show');
		$('#sidebar-button').removeClass('sidebar-button-toggled');
		$('#sidebar-button').html('<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>');
		$('.widget-area').width($('.widget-area').parent().width());
		if($(window).scrollTop() >= 300 && $(window).scrollTop() < bottomBreak) {
			$('.widget-area').width($('.widget-area').parent().width());
			$('.widget-area').addClass('sticky-sidebar');
			$('.widget-area').removeClass('static-sidebar-bottom');
			$('#sidebar').removeAttr('height');
		} else if ($(window).scrollTop() >= bottomBreak) {
			$('.widget-area').removeClass('sticky-sidebar');
			$('.widget-area').addClass('static-sidebar-bottom');
			$('#sidebar').height(sidebarSpace);
		} else {
			$('.widget-area').removeClass('sticky-sidebar');
			$('.widget-area').removeClass('static-sidebar-bottom');
			$('#sidebar').removeAttr('height');
		}
	}
}

$(function(){
    $(window).scroll(function() {
    	if(width >= 480) {
	        if ($(this).scrollTop() >= 300) {
	            $('#nav-container').addClass('sticky-nav');
	            $('.banner').addClass('banner-margin');
	        } else {
	            $('#nav-container').removeClass('sticky-nav');
	            $('.banner').removeClass('banner-margin');
	        }
		}
    });
});

$(function(){
	$(window).scroll(function() {
		if(width >= 992) {
			if($(this).scrollTop() >= 300 && $(this).scrollTop() < bottomBreak) {
				$('.widget-area').width($('.widget-area').parent().width());
				$('.widget-area').addClass('sticky-sidebar');
				$('.widget-area').removeClass('static-sidebar-bottom');
				$('#sidebar').removeAttr('height');
			} else if ($(this).scrollTop() >= bottomBreak) {
				$('.widget-area').removeClass('sticky-sidebar');
				$('.widget-area').addClass('static-sidebar-bottom');
				$('#sidebar').height(sidebarSpace);
			} else {
				$('.widget-area').removeClass('sticky-sidebar');
				$('.widget-area').removeClass('static-sidebar-bottom');
				$('#sidebar').removeAttr('height');
			}
		}
	})
});