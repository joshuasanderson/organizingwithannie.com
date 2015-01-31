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

    // Contact Form Validation & AJAX.
    $('#contact_form').submit(function(e) {
        e.preventDefault();
        var messageElem = $('#message');
        var proceed = true;

        // Client side validation.
        $('.req').each(function(i, elem) {
            if(!elem.value) {
                proceed = false;
                $(this).addClass('error');
            } else {
                $(this).removeClass('error');
            }
        });

        if(proceed) {
            $.ajax({
                beforeSend: function(){

                },
                type: "POST",
                url: $('#contact_form').attr('action'),
                dataType: "json",
                data: $('#contact_form').serialize()
            }).done(function(response) {
                console.log(response.type);
                console.log(response);
                messageElem.html(response.msg).show();
                if(!response.success) {
                    messageElem.addClass('error');
                }
            }).fail(function(response) {
                console.log(response.text);
                console.log(response);
                messageElem.html(response.msg).show();
            });
        } else {
            var errorMessage = $('#message').data('error');
            $('#message').html(errorMessage).show();

            // Add a shake animate and remove it after 2 seconds.
            $('div.contact').addClass('animated shake');
            window.setTimeout(function() {
                $('div.contact').removeClass('animated shake');
            }, 2000);
        }
    });

});
