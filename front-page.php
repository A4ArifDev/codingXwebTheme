<?php 
/**
 * The template for displaying front-page
 *
 * @package CodingXweb
 *
 * @since 1.0.0
 *
 **/
get_header(); ?>
    <main id="hero">
            <div class="slider">
                <div class="slides-container">
                    <?php
                        $args_home_page_banner = array(
                            'post_type' => 'Page Banner',
                        );
                        $Home_page_banner_query = new WP_Query( $args_home_page_banner );
                        if ( $Home_page_banner_query->have_posts() ) {
                            while ( $Home_page_banner_query->have_posts() ) {
                                $Home_page_banner_query->the_post();
                               ?>
                                <div class="slide">
                                <?php
                                    $image = get_field('page_banner');
                                    if ($image) {
                                        echo '<img src="' . esc_url($image['url']) . '" alt="' . esc_attr($image['alt']) . '">';
                                    }
                                    ?>

                                    <div class="overlay">
                                        <h2><?php the_title(); ?></h2>
                                        <p><?php the_content(); ?></p>
                                        <a href="#" class="btn_normal">Learn More</a>
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
                <div class="dark_overlay"></div>
                <div class="dots-container"></div>
                
                <a class="prev-arrow">&#10094;</a>
                <a class="next-arrow">&#10095;</a>
              </div>
              
    </main>
    <section id="about_us">
        <div class="left_about">
            <h2>Building Friendlier Digital Experiences</h2>
            <p>At CodingX, we specialize in creating friendly and engaging web designs, developing user-centric websites, and optimizing SEO strategies to help your business thrive online.</p>
            <div class="accordion_container">
                <div class="accordion">
                <ul>
                    <li>
                    <div class="accordion-header">
                        <h2 class="accordion_tag">Crafting Digital Excellence</h2>
                        <span class="accordion_sign">
                            <span></span>
                            <span></span>
                            </span>
                    </div>
                    <div class="accordion-content">
                        <p>Step into the world of CodingX, where we passionately craft exceptional web solutions. From flawless web development to captivating designs, and strategic SEO optimizations, we create digital experiences that resonate with your audience and elevate your brand to new heights.</p>
                    </div>
                    </li>
                    <li>
                    <div class="accordion-header">
                        <h2 class="accordion_tag">Building Dynamic Web Experiences</h2>
                        <span class="accordion_sign">
                            <span></span>
                            <span></span>
                            </span>
                    </div>
                    <div class="accordion-content">
                        <p>Discover the power of dynamic web experiences with CodingX. Our web development services encompass interactive features, intuitive user interfaces, and robust backend functionality. Let us elevate your online presence and engage your audience with cutting-edge web solutions.</p>
                    </div>
                    </li>
                    <li>
                    <div class="accordion-header">
                        <h2 class="accordion_tag">Crafting Websites That Wow</h2>
                        <span class="accordion_sign">
                            <span></span>
                            <span></span>
                            </span>
                    </div>
                    <div class="accordion-content">
                        <p>CodingX is your go-to partner for captivating web development. We create visually stunning websites with clean code and seamless functionality. From responsive design to e-commerce integration, our team crafts bespoke solutions that leave a lasting impression on your users.</p>
                    </div>
                    </li>
                    <li>
                    <div class="accordion-header">
                        <h2 class="accordion_tag">Empowering Web Solutions</h2>
                        <span class="accordion_sign">
                            <span></span>
                            <span></span>
                            </span>
                    </div>
                    <div class="accordion-content">
                        <p>CodingX: Unleash the power of our web development expertise to drive your online success. Crafted with innovation and precision, our solutions empower businesses to thrive in the digital landscape.</p>
                    </div>
                    </li>
                </ul>
                </div>  
            </div>
            <div class="btn_box">
                <a href="" class="btn_normal">Lets Get Started</a>
            </div>
        </div>
        <div class="right_about">
            <div class="ic-box">
                <div class="ic">
                    <i class="uil uil-arrow"></i>
                </div>
                <div class="ic-content">
                    <h3 class="headline__third">We Design</h3>
                    <p class="p-small">CodingX: Where creativity meets functionality. Our expert designers craft captivating web experiences that engage users and leave a lasting impression</p>
                </div>
            </div>
            <div class="ic-box">
                <div class="ic">
                    <i class="uil uil-brush-alt"></i>
                </div>
                <div class="ic-content">
                    <h3 class="headline__third">We Develop</h3>
                    <p class="p-small">Empowering businesses with custom web development solutions, transforming ideas into stunning websites that captivate audiences and drive success.</p>
                </div>
            </div>
            <div class="ic-box">
                <div class="ic">
                    <i class="uil uil-laptop"></i>
                </div>
                <div class="ic-content">
                    <h3 class="headline__third">We Optimize</h3>
                    <p class="p-small">At CodingX, we specialize in optimizing online success. Our SEO experts employ proven strategies to boost your website's visibility</p>
                </div>
            </div>
        </div>
    </section>
    <section id="rewards">

                    <?php
                        $args_for_rewards= array(
                            'post_type' => 'Rewards',
                            'posts_per_page' => 4,
                        );
                        $rewards_query = new WP_Query( $args_for_rewards );
                        if ( $rewards_query->have_posts() ) {
                            while ( $rewards_query->have_posts() ) {
                                $rewards_query->the_post();
                               ?>
                                <div class="reward">
                                        <?php echo get_field('rewards_icon'); ?>
                                        <h2 id="0101"><?php echo get_field('quantity'); ?></h2>
                                        <h4><?php the_title(); ?></h4>
                                        <p class="p-small"><?php the_content(); ?></p>
                                </div> 
                            <?php }
                            wp_reset_postdata();
                        } else {
                            // If no posts are found
                            echo 'No posts found.';
                        }
                    ?>
    </section>
    <section id="testimonial">
        <h2 class="heading">what our clients says</h2>
         <div class="testi-slider-container">
          <div class="testi-slider">
          <?php
                        $args_testimonial = array(
                            'post_type' => 'Testimonial',
                            'posts_per_page' => -1,
                        );
                        $testimonial_query = new WP_Query( $args_testimonial);
                        if ( $testimonial_query->have_posts() ) {
                            while ( $testimonial_query->have_posts() ) {
                                $testimonial_query->the_post();
                               ?>
                                <div class="testi-slider_item">
                                    <div class="user_details">
                                    <div class="user_avatar">
                                            <?php
                                                 $image_testi = get_field('clients_avatar');
                                                ?>
                                                <img src="<?php echo esc_url($image_testi['sizes']['avatar-thumbnail']); ?>" alt="">
                                    </div>
                                    <div class="user_info">
                                        <h2><?php echo get_field('clients_name'); ?></h2>
                                        <p><?php echo get_field('clients_bio'); ?></p>
                                    </div>
                                    </div>
                                    <div class="con">" <?php  the_content(); ?> "</div>
                                    <div class="user_social">
                                    <ul>
                                        <li><a href="<?php echo get_field('clients_fb'); ?>" target="_blank"><i class="uil uil-facebook-f"></i></a></li>
                                        <li><a href="<?php echo get_field('clients_insta'); ?>" target="_blank"><i class="uil uil-instagram"></i></a></li>
                                        <li><a href="<?php echo get_field('clients_twitter'); ?>" target="_blank"><i class="uil uil-twitter-alt"></i></a></li>
                                    </ul>
                                    </div>
                                </div>
                            <?php }
                            wp_reset_postdata();
                        } else {
                            // If no posts are found
                            echo 'No posts found.';
                        }
                    ?>
          <button class="prev-btn">&#10094;</button>
          <button class="next-btn">&#10095;</button>
        </div>
    </section>
    <section id="blog">
        <div class="headline_box">
            <h2 class="heading">CHECK OUR ARTICLES</h2>
        </div>
        <div class="blog_container">
                    <?php
                        $args_for_articles= array(
                            'post_type' => 'post',
                            'posts_per_page' => 3,
                        );
                        $articles_query = new WP_Query( $args_for_articles );
                        if ( $articles_query->have_posts() ) {
                            while ( $articles_query->have_posts() ) {
                                $articles_query->the_post();
                               ?>
                                 <div class="blog_content">
                                        <div class="thumb_box">
                                            <a href="<?php the_permalink(); ?>">
                                            <?php if (has_post_thumbnail()) : ?>
                                                <?php the_post_thumbnail('front-page-thumbnail'); ?>
                                            <?php endif; ?>
                                            </a>
                                        </div>
                                        <div class="blog_body">
                                            <div class="meta_data">
                                                <div class="category_data"><i class="uil uil-book-medical"></i><p><?php echo get_the_category_list('', ''); ?></p></div>
                                            </div>
                                            <h4><a href="<?php the_permalink(); ?>"><?php echo wp_trim_words(get_the_title(), 10); ?></a></h4>
                                            <p><?php echo wp_trim_words(get_the_content(), 20); ?></p>
                                            <div class="author_data">
                                                <div class="author_avatar">
                                                    <?php
                                                        // Get the author's ID
                                                        $author_id = get_the_author_meta( 'ID' );

                                                        // Get the author's avatar
                                                        $author_avatar = get_avatar( $author_id );

                                                        // Display the author avatar
                                                        echo $author_avatar;
                                                        ?>
                                                </div>
                                                <div class="author_details">
                                                    <h4><a href="#"><?php echo get_the_author_posts_link(); ?></a></h4>
                                                    <p><?php
                                                                // Get the post's published date
                                                                $post_date = get_the_date();

                                                                // Calculate the relative time difference
                                                                $time_diff = human_time_diff( strtotime( $post_date ), current_time( 'timestamp' ) );

                                                                // Display the relative time difference
                                                                echo $time_diff . ' ago';
                                                                ?>
                                                        </p>
                                                </div>
                                            </div>
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
        <div class="show_btn_box">
            <a href="<?php echo site_url('/blog'); ?>" class="btn_show_more">Show More</a>
        </div>
    </section>
    <section id="clients">
        <div class="headline_box">
            <h2 class="heading">OUR CLIENTS</h2>
        </div>
        <div class="my_clients">
        <?php
                        $args_for_clients = array(
                            'post_type' => 'Clients',
                            'posts_per_page' => 4,
                        );
                        $Clients_query = new WP_Query( $args_for_clients );
                        if ( $Clients_query->have_posts() ) {
                            while ( $Clients_query->have_posts() ) {
                                $Clients_query->the_post();
                               ?>
                                 <div class="client">
                                 <a href="">
                                <?php
                                    $image_client = get_field('clients_logo');
                                    if ($image_client) {
                                        echo '<img src="' . esc_url($image_client['url']) . '" alt="' . esc_attr($image_client['alt']) . '">';
                                    }
                                    ?>
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
    <section id="plan">
        <div class="headline_box">
            <h2 class="heading">CHECK OUR PLANS</h2>
        </div>
        <div class="price_container">
            <?php
                        $args_for_plan = array(
                            'post_type' => 'Plans',
                            'posts_per_page' => 3,
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
                                                    ?>
                                                    <img src="<?php echo esc_url($image_plan['sizes']['front-page-thumbnail']); ?>" alt="">
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
        <div class="show_btn_box">
            <a href="<?php echo get_post_type_archive_link('plans'); ?>" class="btn_show_more">Show More</a>
        </div>
    </section>
    <section id="contact">
        <div class="left_contact">
            <h2>KNOW US MORE</h2>
            <div class="contact_box">
                <div class="contact_item">
                    <div class="contact_icon">
                    <i class="uil uil-headphones"></i>
                    </div>
                    <div class="contact_content">
                        <h4>Technical Support</h4>
                        <p>codingxbd@gmail.com</p>
                    </div>
                </div>
                <div class="contact_item">
                    <div class="contact_icon">
                    <i class="uil uil-envelope-heart"></i>
                    </div>
                    <div class="contact_content">
                        <h4>Email Address</h4>
                        <p>codingxbd@gmail.com</p>
                    </div>
                </div>
                <div class="contact_item">
                    <div class="contact_icon">
                    <i class="uil uil-mobile-android"></i>
                    </div>
                    <div class="contact_content">
                        <h4>Phone Number</h4>
                        <p>BD:+8801842663963</p>
                    </div>
                </div>
                <div class="contact_item">
                    <div class="contact_icon">
                    <i class="uil uil-location-arrow"></i>
                    </div>
                    <div class="contact_content">
                        <h4>Our Location</h4>
                        <p>Dhaka, Dohar, Joypara</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="right_contact">
        <?php echo do_shortcode('[contact-form-7 id="86" title="Contact form 1"]'); ?>
        </div>
    </section>
    <?php get_footer(); ?>