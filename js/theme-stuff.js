( function( $ ) {
    $(document).ready(function( $ ) {

        $('.multi-ellipsis').dotdotdot({
            truncate: "word",
            ellipsis: " [\u2026]"
        });

        var img = new Image,
            canvas = document.getElementById('canvas'),
            ctx = canvas.getContext('2d'),
            templateUrl = object_name.templateUrl;

        ctx.fillStyle = '#fff';

        img.onload = render;
        img.src = templateUrl + '/img/dust.gif';
        console.log(img.src);
        // img.src = 'http://i.imgur.com/eABw6yv.gif';

        function render() {
            /// this composite mode clears the canvas as well
            ctx.globalCompositeOperation = 'copy';
            ctx.drawImage(img, 0, 0);

            /// this mode fills in whatever, in the image
            ctx.globalCompositeOperation = 'source-in';
            ctx.fillRect(0, 0, canvas.width, canvas.height);
        }

    });
} )( jQuery );