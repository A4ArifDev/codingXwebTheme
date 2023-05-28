<?php 
/**
 * The template for displaying Single Post
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
<section id="articles" class="single_article">
    <div class="single_container">
        <div class="left_single">
            <?php while(have_posts()){
                the_post();
            ?>
            <div class="meta_data">
                <p><?php echo get_the_category_list('', ''); ?></p>
                <h1><?php the_title(); ?></h1>
                <div class="single_author_data">
                    <div class="author">
                    <?php
                                                        // Get the author's ID
                                                        $author_id = get_the_author_meta( 'ID' );

                                                        // Get the author's avatar
                                                        $author_avatar = get_avatar( $author_id );

                                                        // Display the author avatar
                                                        echo $author_avatar;
                                                        ?>
                    </div> 
                    <div class="ml-10">
                        <h2><?php echo get_the_author_posts_link(); ?></h2>
                    <span>
                        
                        <?php
                                                            // Get the post's published date
                                                            $post_date = get_the_date();

                                                            // Calculate the relative time difference
                                                            $time_diff = human_time_diff( strtotime( $post_date ), current_time( 'timestamp' ) );

                                                            // Display the relative time difference
                                                            echo $time_diff . ' ago';
                                                            ?>
                    </span>
                    </div>
                    </div>
            </div>
                <?php if (has_post_thumbnail()) : ?>
                        <?php the_post_thumbnail('single-page-thumbnail'); ?>
                    <?php endif; ?>
            <p><?php the_content(); ?></p>
            <div class="share_bar">
                <li><a href="https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink(); ?>" target="_blank"><i class="uil uil-facebook-f"></i></a></li>
                <li><a href="https://twitter.com/intent/tweet?url=<?php the_permalink(); ?>&text=<?php the_title(); ?>" target="_blank"><i class="uil uil-twitter-alt"></i></a></li>
                <li><a href="https://www.linkedin.com/sharing/share-offsite/?url=<?php the_permalink(); ?>" target="_blank"><i class="uil uil-linkedin"></i></i></a></li>
                <li><a href="https://pinterest.com/pin/create/button/?url=<?php the_permalink(); ?>&media=<?php echo wp_get_attachment_url(get_post_thumbnail_id()); ?>&description=<?php the_title(); ?>" target="_blank"><i class="uil uil-instagram"></i></a></li>
            </div>
            <?php } ?>
        </div>
        <?php get_sidebar(); ?>
    </div>
</section>
<?php get_footer(); ?>