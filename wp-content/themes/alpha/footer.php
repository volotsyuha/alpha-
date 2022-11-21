<?php wp_footer(); ?>
<footer>
    <div class="wrapper">
        <div class="logo">
            <img src="<?php bloginfo('template_url'); ?>/assets/img/logo.svg " alt="">
        </div>
        <div class="footer-row">
            <div class="section">
                <?php dynamic_sidebar('number'); ?>

                <?php dynamic_sidebar('address'); ?>

                <?php dynamic_sidebar('mail'); ?>

                <?php dynamic_sidebar('button'); ?>

                <div class="copyright"> 
                    <span>All rights reserved © 2005-<?php echo date("Y"); ?></span>
                </div>
            </div>
            <div class="fooer-menu">
                <h4>About company</h4>
                <?php
                wp_nav_menu([
                    'theme_location' => 'footer-menu-about',
                ]);
                ?>
            </div>
            <div class="fooer-menu">
                <h4>Customer services</h4>
                <?php
                wp_nav_menu([
                    'theme_location' => 'footer-menu-services',
                ]);
                ?>
            </div>
            <div class="fooer-menu">
                <h4>Help and support</h4>
                <?php
                wp_nav_menu([
                    'theme_location' => 'footer-menu-support',
                ]);
                ?>
                <?php dynamic_sidebar('social'); ?>
            </div>
        </div>
    </div>
</footer>
</body>

</html>