<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package business
 */

get_header(min); ?>

    <div id="primary" class="content-area">
        <main id="main" class="site-main container single">

            <div class="headline">
                <h2><?php echo get_theme_mod('blog_page_title'); ?></h2>
                <span><?php echo get_theme_mod('blog_page_subtitle'); ?></span>
            </div>

            <?php setPostViews(get_the_ID()); ?>

            <?php
            while (have_posts()) : the_post();

                get_template_part('template-parts/content', get_post_type());

                the_post_navigation();

                // If comments are open or we have at least one comment, load up the comment template.
                if (comments_open() || get_comments_number()) :
                    comments_template();
                endif;

            endwhile; // End of the loop.
            ?>

        </main><!-- #main -->
    </div><!-- #primary -->

<?php
get_footer();
