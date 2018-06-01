<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package business
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <div class="content_part single_post">
        <div class="author_picture">
            <?php $author_email = get_the_author_email(); echo get_avatar($author_email, '60');?>
        </div>
        <header class="entry-header">
            <?php
            if (is_singular()) :
                the_title('<h1 class="entry-title">', '</h1>');
            else :
                the_title('<h2 class="entry-title"><a href="' . esc_url(get_permalink()) . '" rel="bookmark">', '</a></h2>');
            endif;

            if ('post' === get_post_type()) : ?>
                <div class="entry-meta">
                    <?php
                    business_posted_on();
                    business_posted_by();
                    ?>
                </div><!-- .entry-meta -->
            <?php
            endif; ?>
        </header><!-- .entry-header -->

        <?php business_post_thumbnail(); ?>

        <div class="entry-content">
            <?php
            the_content(sprintf(
                wp_kses(
                /* translators: %s: Name of current post. Only visible to screen readers */
                    __('Continue reading<span class="screen-reader-text"> "%s"</span>', 'business'),
                    array(
                        'span' => array(
                            'class' => array(),
                        ),
                    )
                ),
                get_the_title()
            ));

            wp_link_pages(array(
                'before' => '<div class="page-links">' . esc_html__('Pages:', 'business'),
                'after' => '</div>',
            ));
            ?>


        </div><!-- .entry-content -->
        <div class="author_block clearfix">
            <div class="author_big_picture">
                <?php $author_email = get_the_author_email(); echo get_avatar($author_email, '170');?>
            </div>
            <div class="about_author">
                <h4><?php the_author(); ?></h4>
                <p><?php the_author_description();?></p>
            </div>
        </div>
    </div>




    <footer class="entry-footer">

    </footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->
