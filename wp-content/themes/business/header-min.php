<?php
/**
 * Created by PhpStorm.
 * User: Hi-Tech
 * Date: 24.02.2018
 * Time: 18:49
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
    <div class="min_bunner" style="background: url('<?php echo get_theme_mod('main_section_background'); ?>') no-repeat center/cover">
            <nav class="main_menu container clearfix blog_menu">

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
                <a href="tel:+78142332211"></a>
                <span class="phone">
                    <a href="tel:+9978 8856 999">
                        <i class="fa fa-phone" aria-hidden="true"></i>
                        <?php echo get_theme_mod('phone_number'); ?>
                    </a>
                </span>
            </nav>

    </div><!-- .site-banner -->
</header><!-- #masthead -->

<div id="content" class="site-content">

