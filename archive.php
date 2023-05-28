<?php 
/**
 * The template for displaying Archive Post
 *
 * @package CodingXweb
 *
 * @since 1.0.0
 *
 **/
get_header(); ?>
<section id="page_banner_theme">
        <div class="headline_box">
            <h2 class="heading text-white"><?php the_archive_title(); ?></h2>
        </div>
</section>
<section id="articles">
    <div class="single_container">
        <div class="left_single">
            <?php get_template_part('template_parts/post/post_template'); ?>
    </div>
</section>
<?php get_footer(); ?>