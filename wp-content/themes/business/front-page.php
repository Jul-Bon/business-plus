<?php
/**
 * Created by PhpStorm.
 * User: Hi-Tech
 * Date: 24.02.2018
 * Time: 19:32
 */


get_header(); ?>

    <div id="primary" class="content-area">
        <main id="main" class="site-main">

            <?php if (is_front_page()) : ?>
                <section class="about_us">
                    <div class="container clearfix">
                        <div class="headline">
                            <h2><?php echo get_theme_mod('section_title'); ?></h2>
                            <span><?php echo get_theme_mod('section_subtitle'); ?></span>
                        </div>
                        <div class="story">
                            <p><?php echo get_theme_mod('section_short_story'); ?></p>
                            <a class="button" href="<?php echo get_theme_mod('url_about_button'); ?>">
                                <?php echo get_theme_mod('about_button_text'); ?>
                            </a>
                        </div>
                    </div>
                </section>

                <section class="services">
                    <div class="container">
                        <div class="headline">
                            <h2><?php echo get_theme_mod('services_section_title'); ?></h2>
                            <span><?php echo get_theme_mod('services_section_subtitle'); ?></span>
                        </div>
                        <ul class="clearfix">
                            <?php
                            //The query
                            $args = array(
                                'post_type' => 'our_services',
                                'order' => 'ASC',
                                'posts_per_page' => 4
                            );
                            $services = new WP_Query($args); ?>

                            <?php if ($services->have_posts()): ?>

                                <!-- The loop -->
                                <?php while ($services->have_posts()) : $services->the_post(); ?>
                                    <?php get_template_part('template-parts/content-home-services', 'services'); ?>
                                <?php endwhile; ?>
                                <!-- End of the loop -->

                                <?php wp_reset_query(); ?>
                            <?php endif; ?>
                        </ul>
                        <a class="button-view-more button" href="<?php echo get_theme_mod('url_services_button'); ?>">
                            <?php echo get_theme_mod('services_button_text'); ?></a>
                    </div>
                </section>

                <section class="clients">
                    <div class="container">
                        <div class="headline">
                            <h2><?php echo get_theme_mod('clients_section_title'); ?></h2>
                            <span><?php echo get_theme_mod('clients_section_subtitle'); ?></span>
                        </div>
                        <div class="flexslider clients-say-slider">
                            <ul class="clearfix clients_slide slides">
                                <?php
                                //The query
                                $args = array(
                                    'post_type' => 'clients_say',
                                    'order' => 'ASC',
                                    'posts_per_page' => 8
                                );
                                $clients = new WP_Query($args); ?>

                                <?php if ($clients->have_posts()): ?>

                                    <!-- The loop -->
                                    <?php while ($clients->have_posts()) : $clients->the_post(); ?>
                                        <?php get_template_part('template-parts/content-home-clients', 'clients'); ?>
                                    <?php endwhile; ?>
                                    <!-- End of the loop -->

                                    <?php wp_reset_query(); ?>
                                <?php endif; ?>
                            </ul>
                        </div>
                    </div>
                </section>

                <section class="news">
                    <div class="container">
                        <div class="headline">
                            <h2><?php echo get_theme_mod('news_section_title'); ?></h2>
                            <span><?php echo get_theme_mod('news_section_subtitle'); ?></span>
                        </div>

                        <div class="last_new clearfix">
                            <?php $catquery = new WP_Query('orderby=date&posts_per_page=1'); ?>
                            <div class="big-post clearfix">
                                <?php while ($catquery->have_posts()) : $catquery->the_post(); ?>
                                    <div class="floated_part">
                                        <span class="date part"><?php the_modified_date('j</\b\r> M-Y'); ?></span>
                                        <span class="comments part">
                                            <i class="fa fa-comments-o" aria-hidden="true"></i><br>
                                            <?php comments_number('0 - Com', '1 - Com', '% - Com'); ?>
                                        </span>
                                        <span class="part view">
                                            <i class="fa fa-eye" aria-hidden="true"></i><br>
                                            <?php echo getPostViews(get_the_ID()); ?>
                                        </span>
                                    </div>

                                    <div class="float_date">
                                        <div class="article-img"><?php the_post_thumbnail(); ?></div>
                                        <h3><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a>
                                        </h3>
                                        <p><?php the_excerpt(); ?></p>
                                    </div>
                                <?php endwhile;
                                wp_reset_postdata();
                                ?>
                            </div>
                            <div class="posts-list">
                                <?php $catquery = new WP_Query('orderby=date&offset=1&posts_per_page=2'); ?>

                                <?php while ($catquery->have_posts()) : $catquery->the_post(); ?>
                                    <div class="new">
                                        <h3><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a>
                                        </h3>
                                        <span class="date"><?php the_date(); ?></span>
                                        <p><?php the_excerpt(); ?></p>
                                    </div>
                                <?php endwhile;
                                wp_reset_postdata();
                                ?>
                                <a class="button-view-more button"
                                   href="<?php echo get_theme_mod('url_news_button'); ?>">
                                    <?php echo get_theme_mod('news_button_text'); ?></a>
                            </div>
                        </div>
                </section>

                <section class="parters">
                    <div class="container">
                        <div class="headline">
                            <h2><?php echo get_theme_mod('partners_section_title'); ?></h2>
                            <span><?php echo get_theme_mod('partners_section_subtitle'); ?></span>
                        </div>

                        <div class="flexslider partners_slider">
                            <ul class="clearfix partners_slide slides">
                                <?php
                                //The query
                                $args = array(
                                    'post_type' => 'partners',
                                    'order' => 'ASC',
                                    'posts_per_page' => 10
                                );
                                $partners = new WP_Query($args); ?>

                                <?php if ($partners->have_posts()): ?>

                                    <!-- The loop -->
                                    <?php while ($partners->have_posts()) : $partners->the_post(); ?>
                                        <?php get_template_part('template-parts/content-home-partners', 'partners'); ?>
                                    <?php endwhile; ?>
                                    <!-- End of the loop -->

                                    <?php wp_reset_query(); ?>
                                <?php endif; ?>
                            </ul>
                        </div>
                </section>
            <?php endif; ?>

        </main><!-- #main -->
    </div><!-- #primary -->


<?php
get_footer();


