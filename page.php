<?php 
/**
 * The template for displaying Page
 *
 * @package CodingXweb
 *
 * @since 1.0.0
 *
 **/
get_header(); ?>
<section id="page_banner_theme">
        <div class="headline_box">
            <h2 class="heading text-white"><?php the_title(); ?></h2>
        </div>
</section>
<section id="page_content">
    <?php the_content(); ?>
</section>
<?php get_footer(); ?>