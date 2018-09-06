(function ($) {
    var YTdeferred = $.Deferred();
    window.onYouTubeIframeAPIReady = function() {
        console.log('API ready');
        // resolve when youtube callback is called
        // passing YT as a parameter
        YTdeferred.resolve(window.YT);
    };
    $(document).ready(function ($) {

        $('.multi-ellipsis').dotdotdot({
            truncate: "word",
            ellipsis: " [\u2026]"
        });

        function scrollPos(trigger, elem) {
            var scrl = $(document).scrollTop();
            if (scrl >= trigger) {
                $(elem).addClass('scrolled');
            } else {
                $(elem).removeClass('scrolled');
            }
        }

        $(window).scroll(function () {
            scrollPos(50, '.main-navigation');
        });
        scrollPos(50, '.main-navigation');

        $("#countdown")
            .countdown("2018/10/12", function (event) {
                $(this).text(
                    event.strftime('%Dp %H:%M:%S')
                );
            });
        getUrlAndSHow();

        $(".owl-carousel").owlCarousel({
            loop: true,
            autoplay: true,
            autoplayTimeout: 2000,
            autoplayHoverPause: true,
            autoplaySpeed: 1000,
            responsive : {
                0 : {
                    items: 1
                 },
                480 : {
                    items: 3
                 },
                1024 : {
                    items: 5
                }
            }
        });
    });


    // fu yt api
    var tag = document.createElement('script');

    tag.src = "https://www.youtube.com/iframe_api";
    var firstScriptTag = document.getElementsByTagName('script')[0];
    firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

    var player;

    YTdeferred.done(function(YT) {
        player = new YT.Player('ytheader', {
            events: {
                'onReady': onPlayerReady
            }
        });
    });

    function onPlayerReady() {
        // player.playVideo();
        // Mute!
        player.mute();
        console.log('Mute!');
    }

    //info page menu
    $('.info-menu-item a').click(function() {
        var url = $(this).data('url');
        history.pushState({}, url, '?'+url);
        getUrlAndSHow();
    });
    function getUrlAndSHow() {
        var pathname = window.location.href.split('?');
        var link = '#' + pathname[1];
        var menu = $('[data-url="'+pathname[1]+'"]');
        $('.info-menu-item').removeClass('active');
        menu.parent().addClass('active');
        if (link != '#undefined') {
            $('.info-content').hide();
            $(link).show();
        }
    }

})(jQuery);