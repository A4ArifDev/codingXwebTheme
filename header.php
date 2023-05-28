<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>">
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body onload="load()" <?php body_class(); ?>>
    <header id="header">
        <nav id="nav">
            <div class="mob_nav">
                <div class="logo">
                    <a href="<?php echo site_url(); ?>">
                        <div class="logo_outline">
                            <i class="uil uil-gitlab"></i>
                            <h2 class="codignX">CodingX.</h2>
                        </div>
                    </a>
                </div>
               <div class="toggle">
                    <span></span>
                    <span></span>
                    <span></span>
               </div>
            </div>
            <ul class="links">
                <li><a href="<?php echo home_url(); ?>" class="<?php if(get_post_type() == 'page' && is_front_page()) echo 'active' ?>">Home</a></li>
                <li><a href="<?php echo site_url('/about-us'); ?>" class="<?php if(get_post_type() == 'page' && is_page('about-us')) echo 'active' ?>">About</a></li>
                <li><a href="<?php echo get_post_type_archive_link('plans'); ?>" class="<?php if(get_post_type() == 'plans') echo 'active' ?>">Plan</a></li>
                <li><a href="<?php echo site_url('/blog'); ?>" class="<?php if(get_post_type() == 'post') echo 'active' ?>">Article</a></li>
                <li><a href="<?php echo site_url('/contact-us'); ?>" class="<?php if(get_post_type() == 'page' && is_page('contact-us')) echo 'active' ?>">Contact</a></li>
            </ul>
        </nav>
    </header>
    <div id="preloader">
        <div class="loader"></div>
    </div>