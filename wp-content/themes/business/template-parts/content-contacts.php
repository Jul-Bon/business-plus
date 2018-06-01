<?php
/**
 * Template part for displaying contacts page content in page-contacts.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package business
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <header class="entry-header">
        <?php the_title('<h1 class="entry-title">', '</h1>'); ?>
    </header><!-- .entry-header -->


    <div class="entry-content clearfix">
        <div class="contacts_content"><?php the_content(); ?></div>

        <div class="contacts_region"><a hrer="#"><?php the_title(); ?></a></div>

    </div><!-- .entry-content -->


</article><!-- #post-<?php the_ID(); ?> -->

