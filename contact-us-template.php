<?php 
/**
 * The template for displaying Contact Us Custom Template
 *
 * @package CodingXweb
 *
 * @since 1.0.0
*
 * Template Name: Contact Us Template
 *
 **/
get_header(); ?>
<section id="page_banner_theme">
        <div class="headline_box">
            <h2 class="heading text-white"><?php the_title(); ?></h2>
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