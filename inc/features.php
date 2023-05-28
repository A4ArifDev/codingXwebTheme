<?php
    function codingXweb_features(){
        add_theme_support( 'title-tag' );
        add_theme_support( 'post-thumbnails' );
        add_image_size('front-page-thumbnail', 300, 250, true);
        add_image_size('single-page-thumbnail', 600, 300, true);
        add_image_size('avatar-thumbnail', 100, 100, true);
    }
    add_action('after_setup_theme','codingXweb_features');
?>