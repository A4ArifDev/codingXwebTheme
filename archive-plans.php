<?php 
/**
 * The template for displaying Plans of Archive
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
<section id="plan">
        <div class="price_container">
        <?php
                        $args_for_plan = array(
                            'post_type' => 'Plans',
                        );
                        $plan_query = new WP_Query( $args_for_plan );
                        if ( $plan_query->have_posts() ) {
                            while ( $plan_query->have_posts() ) {
                                $plan_query->the_post();
                               ?>
                                 <div class="price_item">
                                        <div class="ex-head">
                                            <a href="">
                                            <?php
                                                    $image_plan = get_field('plan_image');
                                                    if ($image_plan) {
                                                        echo '<img src="' . esc_url($image_plan['url']) . '" alt="' . esc_attr($image_plan['alt']) . '">';
                                                    }
                                                    ?>
                                            </a>
                                        </div>
                                        <div class="ex-body">
                                        <a href=""> <p><?php the_title(); ?></p></a>
                                            <div class="ib">
                                                <p><i class="uil uil-star"></i> <?php echo get_field('rating') ?>.00 (<?php echo get_field('review') ?>)</p>
                                                <p><strong><?php echo get_field('delivery_time') ?> Days</strong> Delivery</p>
                                            </div>
                                        </div>
                                        <div class="ex-footer">
                                            <span>Starting At <strong>$<?php echo get_field('price') ?></strong></span>
                                            <a href=""><i class="uil uil-heart"></i></a>
                                        </div>
                                    </div>
                            <?php }
                            wp_reset_postdata();
                        } else {
                            // If no posts are found
                            echo 'No posts found.';
                        }
                    ?>
        </div>
</section>
<?php get_footer(); ?>