<?php
    function CodingX_files(){
        wp_enqueue_style('CodingX_icon', 'https://unicons.iconscout.com/release/v4.0.8/css/line.css');
        wp_enqueue_style('CodingX_font_one', 'https://fonts.googleapis.com/css2?family=Raleway:wght@300;400;500;600;700;800&display=swap');
        wp_enqueue_style('CodingX_font_two', 'https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300;500;600&family=Raleway:wght@300;400;500;600;700;800&display=swap');
        wp_enqueue_style('CodingX_main_style', get_stylesheet_uri());

        wp_enqueue_script('jquery');
        wp_enqueue_script('CodingX_main_script', get_theme_file_uri().'/assets/js/main.js', NULL, '1.0.0', true);

    }
    add_action('wp_enqueue_scripts', 'CodingX_files');
?>