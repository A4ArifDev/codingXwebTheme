<?php 
/**
 * The template for displaying Post Page
 *
 * @package CodingXweb
 *
 * @since 1.0.0
 *
 **/
get_header(); ?>
<section id="page_banner_theme">
        <div class="headline_box">
            <h2 class="heading text-white">OUR BLOG</h2>
        </div>
</section>
<section id="articles">
    <div class="single_container">
        <div class="left_single">
            <?php get_template_part('template_parts/post/post_template'); ?>
            <?php get_sidebar(); ?>
    </div>
</section>
<?php get_footer(); ?>