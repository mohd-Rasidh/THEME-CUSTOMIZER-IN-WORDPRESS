    </div><!-- #content -->

    <footer id="colophon" class="site-footer">
        <div class="container">
            <div class="footer-content">
                <div class="footer-section">
                    <h4><?php bloginfo('name'); ?></h4>
                    <p><?php bloginfo('description'); ?></p>
                </div>

                <div class="footer-section">
                    <h4><?php _e('Quick Links', 'theme-customizer'); ?></h4>
                    <ul>
                        <li><a href="<?php echo esc_url(home_url('/')); ?>"><?php _e('Home', 'theme-customizer'); ?></a></li>
                        <li><a href="#"><?php _e('About', 'theme-customizer'); ?></a></li>
                        <li><a href="#"><?php _e('Services', 'theme-customizer'); ?></a></li>
                        <li><a href="#"><?php _e('Contact', 'theme-customizer'); ?></a></li>
                    </ul>
                </div>
            </div>

            <div class="footer-bottom">
                <p class="copyright-text">© 2025 Your Website. All rights reserved.</p>
            </div>
        </div>
    </footer>

</div><!-- #page -->

<?php wp_footer(); ?>
</body>
</html>