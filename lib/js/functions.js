$(document).ready(function(){
    var windowWidth = $(window).width();
    
    $('#menu-icon').on('click', function() {
        if($('#menu').hasClass('active')) {
            // Close menu.
            $('#menu').animate({ width: 0 }, 400, 'easeInOutQuint').removeClass('active');
            $('.content-wrapper, .fixed').animate({ left: 0 }, 400, 'easeInOutQuint');
        } else {
            // Open menu.
            if(windowWidth < 641) {
                $('#menu').animate({ width: 246 }, 400, 'easeInOutQuint').addClass('active');
                $('.content-wrapper, .fixed').animate({ left: 246 }, 400, 'easeInOutQuint');
            } else {
                $('#menu').animate({ width: 286 }, 400, 'easeInOutQuint').addClass('active');
                $('.content-wrapper, .fixed').animate({ left: 286 }, 400, 'easeInOutQuint');
            }
        }
    });    
});