( function( $ ) {
    $(document).ready(function( $ ) {

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
        $(window).scroll(function(){
            scrollPos(50, '.main-navigation');
        });
        scrollPos(50, '.main-navigation');
    });
} )( jQuery );