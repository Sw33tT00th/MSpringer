$(function(){
    $(window).scroll(function() {
        if ($(this).scrollTop() >= 300) {
            $('#nav-container').addClass('sticky-nav');
            $('.banner').addClass('banner-margin');
        } else {
            $('#nav-container').removeClass('sticky-nav');
            $('.banner').removeClass('banner-margin');
        }
    });
});