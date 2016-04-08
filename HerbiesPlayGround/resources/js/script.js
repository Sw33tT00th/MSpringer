//$(document).ready(function() {
// /* For the sticky navigation */
//    $('.righthere').waypoint(function(direction) {
//        if (direction == "down") {
//            $('nav').addClass('peekaboo');
//          $('div.girls').removeClass('banner');
//           
//            $('div.girls').addClass('nobanner');
//             $('.nobanner').css({'margin-top':'350px'});
//             $('img.girllogo').removeClass('home');
//            $('img.girllogo').addClass('logo');
//           
//        } else {
//            $('nav').removeClass('peekaboo');
//             $('div.girls').removeClass('nobanner');
//            
//           $('div.girls').addClass('banner');
//            $('img.girllogo').removeClass('logo');
//            $('img.girllogo').addClass('home');
//        }
//    }, {
//      offset: '0px'
//    });
//    
//    
//    
//});

		$(function(){
    $(window).scroll(function() {
        if ($(this).scrollTop() >= 350) {
              $('nav').addClass('peekaboo');
         // $('div.girls').removeClass('banner');
            $('.righthere').css({'margin-top':'350px'});
           $('div.girls').addClass('nobanner')
            //$('.nobanner').css({'margin-bottom':'350px'});
             $('img.girllogo').removeClass('home');
           $('img.girllogo').addClass('logo');
        }
        else {
              $('nav').removeClass('peekaboo');
             $('div.girls').removeClass('nobanner');
            $('.righthere').css({'margin-top':'0px'});
           //$('div.girls').addClass('banner');
            $('img.girllogo').removeClass('logo');
            $('img.girllogo').addClass('home');
        }
    });
});