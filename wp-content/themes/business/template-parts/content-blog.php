<?php
/**
 * Created by PhpStorm.
 * User: Hi-Tech
 * Date: 24.02.2018
 * Time: 21:08
 */
?>


<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

     <div class="content_part">
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
                     business_posted_by();
                     business_posted_on();
                     ?>
                 </div><!-- .entry-meta -->
             <?php
             endif; ?>
         </header><!-- .entry-header -->


         <?php business_post_thumbnail(); ?>

         <div class="entry-content clearfix">
             <?php
             the_excerpt();


             wp_link_pages(array(
                 'before' => '<div class="page-links">' . esc_html__('Pages:', 'business'),
                 'after' => '</div>',
             ));
             ?>

             <a href="<?php the_permalink(); ?>" class="button">Read more</a>
         </div><!-- .entry-content -->
     </div>


    <footer class="entry-footer">
       
    </footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->

