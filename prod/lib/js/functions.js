$(document).ready(function(){
    
    // Header resize on scroll.
    $(document).scroll(function () {
        var distanceY = window.pageYOffset || document.documentElement.scrollTop;
        var shrinkHeaderOn = 55;
        var header = $('header');
        var mainNav = $('nav.main-nav');

        if(distanceY > shrinkHeaderOn) {
            header.addClass('scrolling');
            mainNav.addClass('scrolling');
        } else {
            if(header.hasClass('scrolling')) {
                header.removeClass('scrolling');
                mainNav.removeClass('scrolling');    
            }
        }
    });

    // Service Detail Trigger
    $('.service-detail-trigger').on('click', function(e) {
        e.preventDefault();
        
        var detailId = $(this).data('servicename');
        $('#' + detailId).slideDown();
    });

});