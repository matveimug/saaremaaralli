<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package mamasheaven
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,400i,700,700i,900,900i&amp;subset=cyrillic,latin-ext" rel="stylesheet">

    <script src="https://use.fontawesome.com/f99ed8505f.js"></script>
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<nav id="site-navigation" class="main-navigation">

    <div class="nav-bg"></div>

    <button class="menu-toggle-container">
        <svg class="burger burger-svg" viewBox="0 0 100 90">
            <rect class="bar" id="bar-1" width="1em" height="0.2em"></rect>
            <rect class="bar" id="bar-2" width="1em" height="0.2em" y="0.35em"></rect>
            <rect class="bar" id="bar-3" width="1em" height="0.2em" y="0.7em"></rect>
        </svg>
    </button>



    <div class="nav-container">
    <div class="site-branding-container">
        <div class="site-branding">
            <a href="<?php echo esc_url(home_url('/')); ?>" rel="home">
                <svg class="site-branding-svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 519.6 356.2">
                    <g class="site-branding-svg-island">
                        <path d="M356.3 25.5l9.5 4.3 22.1 9.5c4.5 1.9 5.7 4.4 3.4 8.2a9 9 0 0 0-.3 9.1c.7 1.5 1.4 3.1 2.6 4.2 5 4.9 5.9 11.3 7.9 17.2.5 1.4-1 3.8-2.3 5.1-2.3 2.1-3.2 4.2-2.5 7.1.8 3.1-.2 3.8-4.1 3l.6-2.2c1.4-4.2.8-5.3-3.5-7.2-.9-.4-1.4-1.5-2.2-2.2-.8-.8-1.5-2-2.4-2.2-.8-.2-2.3.6-2.7 1.4-1.1 1.8-2.2 2.8-4.7 1.9-1.8-.7-3.9-.6-4.7-2.8a3.3 3.3 0 0 0-2.2-1.6c-.5-.1-1.4 1-1.8 1.6-.2.4 0 1.3.4 1.5 3.4 1.7 1.5 4.3 1.8 6.7-3.1-.2-5.8-.3-8.4-.7-.8-.1-1.5-1.3-2.1-2l-3.6-5.1c-1.9-2.4-4.3-4.4-5.7-7a13.3 13.3 0 0 0-9.4-6.7c-4.3-1-8.2-3.4-12.1-5.6-1.1-.6-1.4-2.6-1.7-4.1-.5-1.9-.6-3.8-1-6.3 2.7-1.1 5.7-2.8 9.7-1.7 5.9 1.6 8.5-.8 7.4-6.4-.6-2.8-1.3-5.6-1.3-8.5-.1-4.4 1.6-5.9 6.2-6.9 1.8-.4 3.5-1.1 5.3-1.7l1.8.1zM75.7 201.6c-8.5-3.5-17.1-6.5-25.1-10.6-4.9-2.5-8.6-6.7-9-12.4-.1-1.3-1-2.5-1.2-3.8-.1-.8-.1-1.9.5-2.3.5-.4 1.8-.4 2.5-.1 2 .7 3.9 1.8 5.9 2.6 2.2.8 4.4 1 5.9-1 1.4-1.8 1.3-3.8-.2-5.6l-3.5-4c-2.3-2.7-2.5-3.5-2-7.7 4 3.4 8.5 5.8 10.6 10.4.8 1.7 1.2 4 4.2 3 2.2-.7 3.4-3.4 2.5-5.7-.8-2-1.9-4-2.8-6.1-.5-1.2-.6-2.5-1.1-4.3 3.2 1.3 5.7 2.5 8.4 3.4 1 .3 2.8.3 3.4-.3.8-.8.9-2.2 1.1-3.4.3-2-.1-4.3.8-6 2-3.7 1.5-6.8-1.2-9.9a22.9 22.9 0 0 0-4-3.6 11.4 11.4 0 0 1-5.1-8.5c-.3-3.1-2-5.2-4.2-7.5-1.4-1.4-2.2-3.3-3-5.1-1-2.2-1.5-4.5-2.6-6.7-.8-1.5-.7-2.3 1-3.2 4.2-2.3 4.7-3.8 2.9-8.1-.3-.7-.7-1.4-.7-2.2-.3-2.8 1.1-3.7 3.9-2.6a24 24 0 0 0 11.8 2.2 6.8 6.8 0 0 1 7.3 4.4c2.5 5.9 4.5 11.9 7 17.8a121 121 0 0 0 6.2 12.5c1.4 2.5 4.2 2.7 6.9 2.2 2.7-.6 3.5-2.5 3.4-4.8l-.4-10.6c-.2-5.1-.1-10.5 4-14.3 3.5-3.2 8-5.6 12.4-7.9 3.2-1.6 4.4-2.7 4.2-6.2v-7.3c4.4.9 5.8 2.6 6.1 6.4l.9 12c.2 2.6 1.7 4 4.4 4.6 5.9 1.2 11.1.2 12.1-6.7.5-3.8 2.2-7.5 0-11.2-.8-1.4-2.1-2.6-3.2-3.9-.5-.6-1.1-1.2-1.1-1.8-.1-2.3.1-4.6.2-6.9.1-1.7.8-2.1 2.8-2a35 35 0 0 0 7.9-.6c2.6-.4 5-1.3 7.6-1.5 6.3-.5 12.7-.5 19-1.2 2.9-.3 6-1.3 8.3-2.9 5.4-3.8 9.7-8.5 9.7-15.2 0-2.4-.3-4.7 2.8-5.6a8 8 0 0 1 8.5 3.4l6.6 12.4c.8 1.5 1.6 2.9 2.6 4.2 2.7 3.6 6.7 4.4 11.1 3.7 3.7-.6 5.4-3 6-6.2l1-1.5 4 4.1c1.1 1.2 2 2.8 3.3 3.7 3.4 2.4 6.7 1.7 8.4-1.9 1.4-2.9 2.4-6.1 3-9.2 1-4.9 5-7.3 9.9-5.2 3.7 1.6 7.1 1.6 10.8 0 1.1-.5 3.1-.5 4.2.1 3.1 1.7 6.1 2.4 9.8 2.4 2.6 0 5.3 1.3 7.7 2.4a42 42 0 0 1 7.4 4.3c2.4 1.7 4.6 3.7 6.9 5.6 1.4 1.2 2.8 2.5 4.3 3.5 1.8 1.3 3.6 2.6 5.6 3.6 3.2 1.6 6.3 3.3 9.8 4.2 4.7 1.2 5.7 2.1 5.2 6.5-.3 3-.9 6.3 2.1 8.6 1.7 1.3 3.8 2.4 5.9 2.7 4.2.6 8 1.6 11.3 4.4 1.6 1.4 3.8 2.2 6 2.9 6.3 2.1 11.7 4.9 13.5 11.5.3 1.3 1.8 2.5 3.1 3.4 1.6 1.1 1.9 1.8.7 3.5-1.1 1.5-1.6 3.4-2.3 5.1l-.8 2.7-5-6.7c-1.2-1.8-5.3-3.7-7.5-3.3-1.7.4-2.5 1.3-1.8 3l.5.7c1.3 1.5 3.1 3.2 1 5-2.3 1.9-4.1-.1-6-1.3-4.4-2.8-5.8-7-6.6-11.6l-.5-1.1c-2 .1-2.5.9-2.1 2.6.2.7-.3 1.6-.6 2.5l-2.3-1.2-4.3-2.1c.1 1.5 0 3.1.4 4.5.5 1.5 1.7 2.8 2.9 4.6-.8.5-1.8 1.7-3 2-3.2.6-5.4 2.4-7.2 4.7-1.2 1.5-2.5 2.3-4.8 1.6-2.7-.8-4.2.9-5.4 2.8-1.2 2-1.4 3.9.7 5.4 2.4 1.7 1.2 3.8.8 5.7-.1.3-1.4.6-2.1.5-5.3-.6-7.9.8-9.2 5.6-.6 2.3-1.7 2.9-4.1 2.7-3.5-.3-6.2-1.6-8.2-4.2-.7-.9-1.3-2.2-2.3-2.6a6 6 0 0 0-4.2-.1c-1.6.6-1.5 2-.6 3.4.7 1 1.7 2.2 1.8 3.3.1 1.5-.1 3.5-1.1 4.3a7.5 7.5 0 0 0-3 5.4c-.5 3.2-1.3 6-4.1 8.4-1.4 1.2-1.5 3.6-2.4 6-2-.2-4.4-.3-6.6-.9-7.5-2-15.5 4-14.6 11.1l.5 3.8-3.3-1.3c-.6-.2-1-.7-1.6-.9-5.7-1.5-11.4-3.2-17.2-4.4-2.7-.6-5.2.7-6.6 2.9-1.5 2.3-1.2 4.7.4 6.8 1.9 2.5 4.2 4.7 6.2 7.2 2.7 3.3 2.7 5.9.3 8a7.7 7.7 0 0 1-10 .4c-2.7-2-4.8-4.9-8.9-4.7-.5 0-1.4-1.5-1.5-2.4-.2-.9.3-1.9.5-2.8.4-2 .4-3.7-2.4-4.2-2.9-.5-4.9.5-5.5 2.9l-.7 3.4c-.9 2.9-1.6 3-4.7 2.1-1.2-.4-3 .1-4.3.6-1.4.6-2.6 1.7-4.5 3.1-.6-2.5-.9-4.4-1.6-6.2-.5-1.4-1.6-2.6-2.5-3.8-1.3 1.3-2.9 2.5-3.7 4.1-1.1 2-1.5 4.3-2.4 6.9-2.4-3.2-4-5.9-6.1-8.1-2.8-2.9-4.8-2.5-6.5 1l-1 2.1c-2.1 4.3-4.5 5.6-9.6 5.1a47 47 0 0 1-3.7-.5c-11.4-1.7-19.7 3.4-27.2 10.3-3 2.7-5.1 5.8-4.9 9.8.2 4.4.5 8.9.4 13.4 0 2.4-.7 4.9-1.2 7.3a188 188 0 0 1-2.1 10.3 7.3 7.3 0 0 1-1.6 3c-2.2 2.9-3.4 6-3.3 9.6 0 2-.8 4-1.7 5.9-1.8 3.4-4 6.7-6 10-1.9 3-1.6 5.9 0 9 3.2 6.3 1.4 10-6 11.8-5.6 1.4-8.3 5.8-12.1 9.1-4.1 3.5-7.8 7.3-12.1 10.6-1.6 1.3-4.2 1.6-6.4 2.2-.4.1-1.4-.5-1.6-1a65.2 65.2 0 0 1-3.5-8.2c-.7-2.1-1-4-3.4-5.2-.7-.3-1.2-1.5-1.3-2.3-.2-1.4.1-2.9-.1-4.3-.2-2.7.8-4.4 4-4.7 3-.3 4.4-2 4.1-4.7-.2-2.2.6-3.9 2.8-5 2.1-1.2 2.4-3.1 2.5-5.2.1-1.4 1-2.9 1.6-4.3 1.5-3.5 3.5-6.9 4.6-10.5 1.1-4 2.3-7.8 5.7-10.6 3-2.5 5.5-1.9 7.3 1.5a9.3 9.3 0 0 0 2.9 3.6c3.2 2.3 6.6 1.1 7.6-2.5.2-.7.5-1.5.4-2.2-.6-4.8 1.5-9 3.4-13.2 1.3-3.1 2.9-5.8 6.3-7.5 3-1.6 3.2-3.8 1.7-7.9-1.2-3.4-2.6-4.4-6.3-4.4l-5 .2a6 6 0 0 1-5.5-2.5c-1.1-1.4-3.1-2.3-4.8-3.1-2-1-4-1.9-6.2-2.6a6.8 6.8 0 0 0-3.7-.3c-2.5.7-3.4.5-4.7-2.1-3.2-6.4-2.6-14.1-8.2-19.6l-1.3-1.6c-3.3-3.9-5-3.7-7 1z"/>
                        <path d="M203.6 238.8l-9.4 4.7-6.8-4.5c.3-.4.8-1.2 1.4-1.8 2.2-2.2 3.8-4.7 4.2-7.8.1-.7.9-1.3 1.4-2 .7.6 1.6 1.1 2.1 1.8s.8 1.6.9 2.4c.2 3.4 1.7 6.1 6.2 7.2zM35.1 141.2c3.4-1.3 5.5-4.1 9.9-2.3 2.4 1 5.5.3 8.3.3l3 .2c.1 4.7-.3 5-4.8 5-1.6 0-3.3.2-4.9.5-4.4.8-8.1 0-11.5-3.7zM44.4 98.9c4.5 2 6.1 4.6 4.5 7.3-4.2-.9-6-3.8-4.5-7.3zM211.8 211.6c1.5 1.6 3.6 2.8 1.7 5.1-.3.3-1.8.4-2 .1-1.2-1.6-1.6-3.4.3-5.2zM317.2 45.6c-2-.4-3.4-1.3-2.9-3.5.1-.6 1.1-1.1 1.7-1.6l2.3 4.5-1.1.6z"/>
                    </g>
                    <g class="site-branding-svg-text">
                        <path d="M317.4 198.2a2 2 0 0 0-1.2.4c-.4.3-.7.6-.9 1l-2.3 4-.2.7c0 .4.3.7.8.7a2 2 0 0 0 1.2-.4l.9-.9.8-1.3c.2-.4.5-.7.9-.9a2 2 0 0 1 1.2-.4h6.7c.5 0 .8.2.8.7l-.2.7-1.9 3.3c-.3.4-.8.7-1.7.7h-18.8c-.5 0-.8-.2-.8-.7l.2-.7 3.9-6.7c.2-.4.5-.7.9-.9a2 2 0 0 1 1.2-.4h9.4c.4 0 .7-.1 1.2-.4l.9-.9.8-1.3.2-.7c0-.4-.3-.7-.8-.7a2 2 0 0 0-1.2.4l-.9.9a2 2 0 0 1-.9.9 2 2 0 0 1-1.2.4h-6.7c-.5 0-.8-.2-.8-.7l.2-.7 1.2-2c.3-.4.8-.7 1.7-.7h18.8c.5 0 .8.2.8.7l-.2.7-2.3 4a2 2 0 0 1-.9.9 2 2 0 0 1-1.2.4h-9.6zM354.3 191.5c.5 0 .8.2.8.7l-.2.7-7 12.1a2 2 0 0 1-.9.9 2 2 0 0 1-1.2.4H327c-.5 0-.8-.2-.8-.7l.2-.7 7-12.1c.2-.4.5-.7.9-.9a2 2 0 0 1 1.2-.4h18.8zm-9.6 2.7l.2-.7c0-.4-.3-.7-.8-.7a2 2 0 0 0-1.2.4c-.4.3-.7.6-.9 1l-5.4 9.4-.2.7c0 .4.3.7.8.7a2 2 0 0 0 1.2-.4l.9-.9 5.4-9.5zM366.4 191.5c.5 0 .8.2.8.7l-.2.7-7 12.1a2 2 0 0 1-.9.9 2 2 0 0 1-1.2.4h-6.7c-.5 0-.8-.2-.8-.7l.2-.7 6.2-10.7c.2-.4.5-.7.9-.9a2 2 0 0 1 1.2-.4c.7 0 1.2-.2 1.7-.7.5-.4 1.1-.7 1.7-.7h4.1zM386 197.1c-.5.2-.7.4-.7.7 0 .3.3.5 1 .5.5 0 .8.2.8.7l-.2.7-3.1 5.4a2 2 0 0 1-.9.9 2 2 0 0 1-1.2.4h-18.8c-.5 0-.8-.2-.8-.7l.2-.7 3.1-5.4c.2-.4.5-.7.9-.9a2 2 0 0 1 1.2-.4l1-.2c.5-.2.7-.4.7-.7 0-.3-.3-.5-1-.5-.5 0-.8-.2-.8-.7l.2-.7 1.5-2.7c.2-.4.5-.7.9-.9a2 2 0 0 1 1.2-.4H390c.5 0 .8.2.8.7l-.2.7-1.5 2.7a2 2 0 0 1-.9.9l-.6.4h-.5c-.3 0-.7 0-1.1.2zm-8.5 2.5l.2-.7c0-.4-.3-.7-.8-.7a2 2 0 0 0-1.2.4c-.4.3-.7.6-.9 1l-2.3 4c-.2.2-.2.5-.2.7 0 .4.3.7.8.7.4 0 .8-.1 1.2-.4l.9-.9 2.3-4.1zm3.1-5.4l.2-.7c0-.4-.3-.7-.8-.7-.4 0-.7.1-1.2.4-.4.3-.7.6-.9 1l-.8 1.3-.2.7c0 .4.3.7.8.7a2 2 0 0 0 1.2-.4l.9-.9.8-1.4z"/>
                        <g>
                            <path d="M415 141.9a8.6 8.6 0 0 0-2.7-4.6 9 9 0 0 0-6-1.8H370l2.7-4.8h53.1l13.4-23.8H360l-13.4 23.8-15.7 28h54.5l-2.8 4.9h-54.5l-13.4 23.8H379c2 0 4.2-.5 6.6-1.6a38 38 0 0 0 13.5-9.7c2-2.1 3.6-4.3 4.9-6.5l9.1-16.2a19 19 0 0 0 2-5.5c.3-2.2.3-4.1-.1-6zM451.4 106.9l-18.7 23.8h38.4l13.4-23.8zM414.5 187.3h24.7l29.2-51.9h-24.7z"/>
                        </g>
                        <g>
                            <path d="M141 111.5h-6.4l-1.4.2c-.3.2-1.3.8-1.6 1.9v.9l1.4 9.1c.1.8.2 3-3 6a8.8 8.8 0 0 1-5.7 2.6h-16l2.4-4.2h6.2c.5 0 1.1-.1 1.5-.3 1.3-.8 1.6-1.6 1.7-2.3l-.1-.8-1.4-8.7c-.1-.8.1-3.2 3.1-5.8 2.9-2.6 6.1-2.8 6.5-2.8h15l-2.2 4.2zM146.7 132.3l1.2-4.4h-9.5l-4.1 4.4h-4.8l22.4-25h12.3l-6.8 25h-10.7zm5.9-20.3l-10.1 11.4h6.7l3.4-11.4zM174.6 132.3l1.2-4.4h-9.5l-4.1 4.4h-4.8l22.4-25h12.3l-6.8 25h-10.7zm5.9-20.3l-10.1 11.4h6.7l3.4-11.4zM202.7 132.2l.6-8.1h-2l-4.7 8.1h-9.9l14.4-24.9h20c2.4 0 5.8 1.3 3 6.1l-2.6 4.4a13 13 0 0 1-7.2 5.8l-.4 8.7h-11.2zm11.3-18.6c1-1.8.6-2.2-.8-2.2h-4.6l-4.9 8.5h4.7c1.3 0 2.4-.7 3.3-2.2l2.3-4.1zM220.8 132.2c-3.8 0-3.9-2.3-2.1-5.5l8-13.9c1.8-3.2 4.8-5.5 8.5-5.5H250l-2.4 4.2h-8c-1.2 0-2.2.8-2.8 2l-2.2 3.7h8.2l-2.4 4.2h-8.2l-2.7 4.8c-.8 1.3-.5 1.9 1 1.9h7.6l-2.4 4.2h-14.9zM268.1 132.2l11.1-19.2c.7-1.1.5-1.5-.7-1.5h-3.6l-12 20.7H253.1l11.2-19.3c.6-1.1.4-1.4-.7-1.4H260l-12 20.7h-9.7l14.4-24.9H286c4.8 0 4.5 2.8 2.3 6.7l-10.6 18.3h-9.6zM296.2 132.3l1.2-4.4h-9.5l-4.1 4.4H279l22.4-25h12.3l-6.8 25h-10.7zm6-20.3L292 123.4h6.7l3.5-11.4zM324.1 132.3l1.2-4.4h-9.5l-4.1 4.4H307l22.4-25h12.3l-6.8 25h-10.8zM330 112l-10.1 11.4h6.7L330 112z"/>
                            <g>
                                <path d="M125.3 155.6c-2.8 0-4.3.9-5.9 3.6l-13.1 21.2-6.1 9.9H75.6l6.1-9.9 10.8-17.5c5.9-9.6 14.1-15.7 24.8-15.7h25l-5.2 8.4h-11.8zM124.5 190.3c-10.2 0-10.6-4-5.1-13l1.8-2.8c5.5-9 10.9-13 21.1-13h24.6l1.8-3c1.2-1.9 1-2.8-2.2-2.8h-23.7l5.2-8.4h35.1c10.9 0 12.7 4.2 5.3 16.1l-11.7 19-5 8.1h-47.2zm37.2-20.4h-10.1c-3.5 0-5.2.6-7.1 3.7l-2.8 4.7c-2 3.1-.9 3.7 2.5 3.7h5.3c4.3 0 4.6.3 8-5.2l4.2-6.9zM179 190.3l6.1-9.9 24-38.9c3.6-6 2.1-3.3 3.5-5.6h22.8l-27.5 44.5-6.1 9.9H179zM210 190.3l6.1-9.9 24-38.9c3.6-6 2.1-3.3 3.5-5.6h22.8l-27.5 44.5-6.1 9.9H210zM277.2 206.7h-24.3l5.2-8.4h10.3c3.9 0 5.3-1.1 6.5-3.1l2.9-4.8h-23c-10.7 0-11.4-6.1-5.5-15.7l10.8-17.5 6.1-9.9H289l-19 31c-1.7 2.7-1.2 3.6 1.6 3.6h8.4c2.1 0 2.8-.3 4.9-3.7l14.1-22.9 5-8.2h22.8L297.9 194c-5 8.2-12.4 12.7-20.7 12.7z"/>
                            </g>
                        </g>
                    </g>
                </svg>
            </a>
        </div>
    </div>
    <div class="menu-container">
        <?php
        $cartcount = WC()->cart->get_cart_contents_count();
        $ajax = sprintf(_n('%d', '%d', $cartcount), $cartcount);
        ?>
<!--        meta-->
        <div class="meta-container" id="meta_menu">
            <ul class="meta-menu menu">
                <li class="menu-item menu-social"><a href="<?php if (!empty($fb_link)) {echo $fb_link;} ?>"><i class="fa fa-2x fa-facebook"></i></a></li>
                <li class="menu-item menu-social"><a href="<?php if (!empty($insta_link)) {echo $insta_link;} ?>"><i class="fa fa-2x fa-instagram"></i></a></li>
                <li class="menu-item menu-social"><a href="<?php if (!empty($twitter_link)) {echo $twitter_link;} ?>"><i class="fa fa-2x fa-twitter"></i></a></li>
                <li class='menu-item menu-count'>
                    <span id="countdown"></span>
                </li>
                <li class='menu-item menu-search'>
                    <form action='/index.php/' id='searchform' method='get'>
                        <input type='search' name='s' id='s' placeholder='search'>
                        <button type='submit' class='menu-search-icon'><i class='fa fa-search'></i></button></i>
                    </form>
                </li>
                <li class='menu-item menu-lang'>
                    <select class='menu-lang-select'>
                        <option value='est' selected>eesti</option>
                        <option value='eng'>english</option>
                        <option value='rus'>русский</option>
                    </select>
                </li>
                <li class='menu-item cart'>
                    <a class='cart-label' href='<?php wc_get_cart_url() ?>'>
                        <i class='fa fa-shopping-cart'></i>
                        <span class='cart-count'><?php $ajax ?></span>
                    </a>
                </li>
            </ul>
        </div>
<!--        main-->
        <div class="main-menu" id="main_menu">
            <?php
            wp_nav_menu(array(
                'theme_location' => 'menu-1',
                'menu_id' => 'primary-menu',
            ));
            ?>
        </div>
    </div>
    </div>


</nav><!-- /#site-navigation -->
<div id="page" class="site">
    <a class="skip-link screen-reader-text" href="#content"><?php esc_html_e('Skip to content', 'mamas-heaven-wp-theme'); ?></a>

