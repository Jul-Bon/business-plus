<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package business
 */

get_header(min); ?>

    <div id="primary" class="content-area">
        <main id="main" class="site-main blog-page">
            <div class="container">

                <div class="headline">
                    <h2><?php echo get_theme_mod('blog_page_title'); ?></h2>
                    <span><?php echo get_theme_mod('blog_page_subtitle'); ?></span>
                </div>
                <div class="blog-description">
                    <?php
                    if (have_posts()) :

                        /* Start the Loop */
                        while (have_posts()) : the_post();
                            /*
                             * Include the Post-Format-specific template for the content.
                             * If you want to override this in a child theme, then include a file
                             * called content-___.php (where ___ is the Post Format name) and that will be used instead.
                             */
                            get_template_part('template-parts/content-blog', get_post_format());
                        endwhile;

                    endif; ?>
                </div>
                <nav id="<?php echo $html_id; ?>" class="navigation" role="navigation">
                         <?php if ( function_exists( 'wp_pagenavi' ) ) wp_pagenavi(); ?>
                </nav><!-- #<?php echo $html_id; ?> .navigation -->
            </div>

        </main><!-- #main -->
    </div><!-- #primary -->

<?php
get_footer();
