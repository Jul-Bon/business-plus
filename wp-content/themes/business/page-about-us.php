<?php
/**
 * Template Name: About Us
 *
 * Created by PhpStorm.
 * User: Hi-Tech
 * Date: 16.02.2018
 * Time: 13:45
 */

get_header(min); ?>

    <div id="primary" class="content-area">
        <main id="main" class="site-main about-page">
                <?php get_sidebar(); ?>

            <div class="about_content">
                <?php
                while (have_posts()) : the_post();

                    get_template_part('template-parts/content', 'page');

                    // If comments are open or we have at least one comment, load up the comment template.
                    if (comments_open() || get_comments_number()) :
                        comments_template();
                    endif;

                endwhile; // End of the loop.
                ?>
            </div>
        </main><!-- #main -->
    </div><!-- #primary -->

<?php
get_footer();