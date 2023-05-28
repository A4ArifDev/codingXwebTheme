<footer id="footer">
        
        <div class="footer-1 footer-div">
            <h2><a href="#">A4ARIF</a></h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam reiciendis ipsam eligendi quos qui deserunt impedit repudiandae expedita nam, pariatur ab, illum debitis ratione itaque animi, fugiat nisi labore nulla.</p>
        </div>

        <div class="footer-2 footer-div">
            <h2>Company</h2>
            <ul>
                <li><a href="<?php echo site_url('/about-us'); ?>">About Us</a></li>
                <li><a href="<?php echo get_post_type_archive_link('plans'); ?>">Plans</a></li>
                <li><a href="<?php echo site_url('/blog'); ?>">Articles</a></li>
                <li><a href="<?php echo site_url('/contact-us'); ?>">Contact Us</a></li>
            </ul>
        </div>

        <div class="footer-3 footer-div">
            <h2>Get Help</h2>
            <ul>
                <li><a href="<?php echo site_url('/faq'); ?>">FAQ</a></li>
                <li><a href="<?php echo site_url('/privacy-policy'); ?>">Privacy-policy</a></li>
                <li><a href="<?php echo site_url('/helps'); ?>">Help</a></li>
                <li><a href="<?php echo site_url('/themes'); ?>">Themes</a></li>
            </ul>
        </div>

        <div class="footer-4 footer-div">
            <h2>Follow Us</h2>
            <ul>
                <li><a href="https://facebook.com/codingx" target="_blank"><i class="uil uil-facebook-f"></i></a></li>
                <li><a href="https://twitter.com/codingx" target="_blank"><i class="uil uil-twitter-alt"></i></a></li>
                <li><a href="https://github.com/codingx" target="_blank"><i class="uil uil-github-alt"></i></a></li>
                <li><a href="https://instagram.com/codingx" target="_blank"><i class="uil uil-instagram"></i></a></li>
            </ul>
        </div>

    </footer>
    <script src="./assets/js/main.js"></script>
    <?php wp_footer(); ?>
</body>
</html>