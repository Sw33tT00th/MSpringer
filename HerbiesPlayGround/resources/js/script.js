$(document).ready(function() {
 /* For the sticky navigation */
    $('.righthere').waypoint(function(direction) {
        if (direction == "down") {
            $('nav').addClass('peekaboo');
            $('div.girls').removeClass('banner');
            $('div.girls').addClass('nobanner');
             $('img.girllogo').removeClass('home');
            $('img.girllogo').addClass('logo');
           
        } else {
            $('nav').removeClass('peekaboo');
             $('div.girls').removeClass('nobanner');
            $('div.girls').addClass('banner');
            $('img.girllogo').removeClass('logo');
            $('img.girllogo').addClass('home');
        }
    }, {
      offset: '10px'
    });
    
    
    
});