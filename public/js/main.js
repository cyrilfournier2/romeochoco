    $(document).ready(function($) {
        var alterClass = function() {
            var ww = document.body.clientWidth;
            if (ww < 800) {
                $('.myNavbar').removeClass('bouton-nav')
                $('.logo-small').show();
                $('.myNavbar').addClass('bouton-nav-small navbar-collapse collapse');
            } else if (ww >= 801) {
                $('.myNavbar').removeClass('bouton-nav-small navbar-collapse collapse')
                $('.logo-small').hide();
                $('.myNavbar').addClass('bouton-nav');
            };
        };
        $(window).resize(function(){
            alterClass();
        });
        //Fire it when the page first loads:
        alterClass();
    });


    $('section').horizon({

        scrollTimeout: null,
        scrollEndDelay: 250,
        scrollDuration: 400,
        i: 0,
        limit: 0,
        docWidth: 0,
        sections: null,
        swipe: true,
        fnCallback: function (i) {
        }

    });

    $(".video").hover( hoverVideo, hideVideo );
    $("#img-cover1").hover( hoverImage );
    $("#img-cover2").hover( hoverImage );

    function hoverImage(e) {
        $(this).hide();
        $(this).next().show();
    }
    function hoverVideo(e) {
        $('video', this).get(0).play();
        //$(this).parent().css('background-image', 'none');
    }

    function hideVideo(e) {
        $('video', this).get(0).pause();
    }