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
            .countdown("2018/10/13", function (event) {
                $(this).text(
                    event.strftime('%Dp %Hh %Mm %Ss rallini')
                );
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
        player.playVideo();
        // Mute!
        player.mute();
        console.log('Mute!');
    }

})(jQuery);