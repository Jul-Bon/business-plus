<?php
/**
 * Template Name: Contact Us
 *
 * Created by PhpStorm.
 * User: Hi-Tech
 * Date: 16.02.2018
 * Time: 13:45
 */

get_header(min); ?>
<div class="container">
    <div id="primary" class="content-area">
        <main id="main" class="site-main contacts_list">

            <?php
            //The query
            $args = array(
            'post_type' => 'region_contacts',
            'order' => 'ASC',

            );
            $practice = new WP_Query($args); ?>

            <?php if ($practice->have_posts()): ?>

                <!-- The loop -->

                <?php while ($practice->have_posts()) : $practice->the_post(); ?>
                    <?php get_template_part( 'template-parts/content-contacts', 'page-contacts' ); ?>
                <?php endwhile; ?>
                <!-- End of the loop -->

                <?php wp_reset_query(); ?>
            <?php endif; ?>

        </main><!-- #main -->
    </div><!-- #primary -->

    <div class="sidebar"><?php get_sidebar(); ?></div>
</div>


<?php
get_footer();