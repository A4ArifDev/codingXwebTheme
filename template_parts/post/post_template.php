<?php
                if(have_posts()){
                    while(have_posts()){
                        the_post(); ?>
            <div class="per-blog">
                <a href="">
                <?php if (has_post_thumbnail()) : ?>
                        <?php the_post_thumbnail('single-page-thumbnail'); ?>
                    <?php endif; ?>
                </a>
                <h2><a href="<?php the_permalink(); ?>"><?php echo wp_trim_words(get_the_title(), 10); ?></a></h2>
                <p><?php echo wp_trim_words(get_the_content(), 30); ?></p>
                <a href="<?php the_permalink(); ?>" class="read-more-btn">Read More</a>
            </div>
             <?php } } ?>
            <div class="btn_box">
                <?php echo paginate_links(); ?>
            </div>
        </div>