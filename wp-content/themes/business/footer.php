<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package business
 */

?>

</div><!-- #content -->

<footer id="colophon" class="site-footer">
    <div class="site-info container clearfix">
        <div class="logo-part">
            <div class="footer_logo"><?php the_custom_logo(); ?></div>
            <span class="copyright"><?php echo get_theme_mod('footer_copy'); ?></span>
            <ul class="social_networks">
                <?php if (get_theme_mod('facebook_social') != ''): ?>
                    <li>
                        <a href="<?php echo get_theme_mod('facebook_social'); ?>" target="_blank">
                            <i class="fa fa-facebook" aria-hidden="true"></i>
                        </a>
                    </li>
                <?php endif; ?>
                <?php if (get_theme_mod('google_plus_social') != ''): ?>
                    <li><a href="<?php echo get_theme_mod('google_plus_social'); ?>" target="_blank">
                            <i class="fa fa-google-plus" aria-hidden="true"></i>
                        </a>
                    </li>
                <?php endif; ?>
                <?php if (get_theme_mod('twitter_social') != ''): ?>
                    <li>
                        <a href="<?php echo get_theme_mod('twitter_social'); ?>" target="_blank">
                            <i class="fa fa-twitter" aria-hidden="true"></i>
                        </a>
                    </li>
                <?php endif; ?>

                <?php if (get_theme_mod('linked_social') != ''): ?>
                    <li>
                        <a href="<?php echo get_theme_mod('linked_social'); ?>" target="_blank">
                            <i class="fa fa-linkedin" aria-hidden="true"></i>
                        </a>
                    </li>
                <?php endif; ?>
            </ul>
        </div>

        <div class="footer_navigation">
            <h2><?php echo get_theme_mod('first_subtitle'); ?></h2>
            <div class="foot-menu">
                <?php
                wp_nav_menu('menu=Footer menu'); ?>
            </div>
        </div>
        <div class="contact-form">
            <h2><?php echo get_theme_mod('second_subtitle'); ?></h2>
            <div>
                <?php echo do_shortcode('[contact-form-7 id="86" title="Contact form 1"]'); ?>
            </div>
        </div>
    </div><!-- .site-info -->
</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
