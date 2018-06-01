<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package business
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Raleway:400,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lora:400i" rel="stylesheet">

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<header id="masthead" class="site-header">
    <div class="site_banner">
        <div class="flexslider main_slider">
            <ul class="slides">
                <?php
                //The query
                $args = array(
                    'post_type' => 'header_slider',
                    'order' => 'ASC',
                );
                $slide = new WP_Query($args); ?>

                <?php if ($slide->have_posts()): ?>

                    <!-- The loop -->
                    <?php while ($slide->have_posts()) : $slide->the_post(); ?>
                        <li>
                            <?php if (get_field('header_image')): ?>
                                <img class="main-image" src="<?php the_field('header_image'); ?>"/>
                            <?php endif; ?>
                        </li>
                    <?php endwhile; ?>
                    <!-- End of the loop -->

                    <?php wp_reset_query(); ?>
                <?php endif; ?>
            </ul>
        </div>
        <div class="head_menu_container">
            <nav class="main_menu container clearfix">
                <section class="nav_section">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <nav class="navbar navbar-default main_nav">
                                    <div class="navbar-header">
                                        <button type="button" class="navbar-toggle collapsed"
                                                data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                                            <span class="sr-only">Toggle navigation</span>
                                            <span class="icon-bar"></span>
                                            <span class="icon-bar"></span>
                                            <span class="icon-bar"></span>
                                        </button>
                                    </div>

                                    <!-- Collect the nav links, forms, and other content for toggling -->
                                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                                        <?php /* Primary navigation */

                                        wp_nav_menu( array(
                                                'menu' => 'Header menu',
                                                'theme_location' => 'primary',
                                                'depth' => 2,
                                                'container' => false,
                                                'menu_class' => 'nav navbar-nav header_menu',
                                                'menu_id' => '',
                                                //Process nav menu using our custom nav walker
                                                'walker' => new wp_bootstrap_navwalker())
                                        );
                                        ?>
                                    </div><!-- /.navbar-collapse -->
                                </nav>
                            </div>
                        </div>
                    </div>
                </section>


                <div class="logo"><?php the_custom_logo(); ?></div>
                <span class="phone">
                    <a href="tel:+9978 8856 999">
                        <i class="fa fa-phone" aria-hidden="true"></i>
                        <?php echo get_theme_mod('phone_number'); ?>
                    </a>
                </span>
            </nav>
        </div>
        <div class="container main_banner">
            <div class="main_headline">
                <span class="welcome"><?php echo get_theme_mod('header_subtitle'); ?></span>
                <h1><?php echo get_theme_mod('header_title'); ?></h1>
                <p><?php echo get_theme_mod('header_description'); ?></p>

                <a class="button welcome_button" href="<?php echo get_theme_mod('url_button'); ?>">
                    <?php echo get_theme_mod('text_button'); ?>
                </a>
            </div>
        </div>


    </div><!-- .site-banner -->
</header><!-- #masthead -->

<div id="content" class="site-content">
