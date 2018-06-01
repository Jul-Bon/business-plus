<?php
/**
 * business functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package business
 */

if (!function_exists('business_setup')) :
    /**
     * Sets up theme defaults and registers support for various WordPress features.
     *
     * Note that this function is hooked into the after_setup_theme hook, which
     * runs before the init hook. The init hook is too late for some features, such
     * as indicating support for post thumbnails.
     */
    function business_setup()
    {
        /*
         * Make theme available for translation.
         * Translations can be filed in the /languages/ directory.
         * If you're building a theme based on business, use a find and replace
         * to change 'business' to the name of your theme in all the template files.
         */
        load_theme_textdomain('business', get_template_directory() . '/languages');

        // Add default posts and comments RSS feed links to head.
        add_theme_support('automatic-feed-links');

        /*
         * Let WordPress manage the document title.
         * By adding theme support, we declare that this theme does not use a
         * hard-coded <title> tag in the document head, and expect WordPress to
         * provide it for us.
         */
        add_theme_support('title-tag');

        /*
         * Enable support for Post Thumbnails on posts and pages.
         *
         * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
         */
        add_theme_support('post-thumbnails');


        // This theme uses wp_nav_menu() in one location.
        register_nav_menus(array(
            'menu-1' => esc_html__('Primary', 'business'),
            'menu-2' => esc_html__('Footer', 'business'),
            'menu-3' => esc_html__('Social', 'business'),
        ));

        /*
         * Switch default core markup for search form, comment form, and comments
         * to output valid HTML5.
         */
        add_theme_support('html5', array(
            'search-form',
            'comment-form',
            'comment-list',
            'gallery',
            'caption',
        ));

        //Add support for posts in different formats
        add_theme_support('post-formats', array(
            'aside',
            'image',
            'video',
            'gallery',
        ));

        // Set up the WordPress core custom background feature.
        add_theme_support('custom-background', apply_filters('business_custom_background_args', array(
            'default-color' => 'ffffff',
            'default-image' => '',
        )));

        // Add theme support for selective refresh for widgets.
        add_theme_support('customize-selective-refresh-widgets');

        /**
         * Add support for core custom logo.
         *
         * @link https://codex.wordpress.org/Theme_Logo
         */
        add_theme_support('custom-logo', array(
            'height' => 34,
            'width' => 164,
            'flex-width' => true,
            'flex-height' => true,
        ));
    }
endif;
add_action('after_setup_theme', 'business_setup');

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function business_content_width()
{
    $GLOBALS['content_width'] = apply_filters('business_content_width', 640);
}

add_action('after_setup_theme', 'business_content_width', 0);

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function business_widgets_init()
{
    register_sidebar(array(
        'name' => esc_html__('Sidebar', 'business'),
        'id' => 'sidebar-1',
        'description' => esc_html__('Add widgets here.', 'business'),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget' => '</section>',
        'before_title' => '<h2 class="widget-title">',
        'after_title' => '</h2>',
    ));
}

add_action('widgets_init', 'business_widgets_init');

/**
 * Enqueue scripts and styles.
 */
function business_scripts()
{
    wp_enqueue_style('business-style', get_stylesheet_uri());

    wp_enqueue_script('business-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true);

    wp_enqueue_script('business-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true);

    if (is_singular() && comments_open() && get_option('thread_comments')) {
        wp_enqueue_script('comment-reply');
    }
}

add_action('wp_enqueue_scripts', 'business_scripts');

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if (defined('JETPACK__VERSION')) {
    require get_template_directory() . '/inc/jetpack.php';
}

//Register custom navigation walker

require_once('class-wp-bootstrap-navwalker.php');

/**
 * Register style sheet.
 */
// Add template unique style sheet.
function add_business_scripts()
{
    //Font-awesome
    wp_enqueue_style('font-awesome', get_template_directory_uri() . '/fonts/font-awesome/css/font-awesome.min.css');
    //Bootstrap stylesheet.
    wp_enqueue_style('bootstrap-style', get_template_directory_uri() . '/libs/bootstrap/css/bootstrap.min.css', array(), ' ');
    //My styles
    wp_enqueue_style('main-css', get_template_directory_uri() . '/css/main.css');
    //Flexslider styles
    wp_enqueue_style('business-flexslider', get_template_directory_uri() . '/flexslider/flexslider.css');
}

add_action('wp_enqueue_scripts', 'add_business_scripts');


// Add jQuery and JS.
//Flexslider.
function jquery_init()
{
    if (!is_admin()) {
        wp_enqueue_script('jquery');
    }
}

add_action('wp_enqueue_scripts', 'jquery_init');

function add_my_scripts()
{
    //Bootstrap js
    wp_enqueue_script('bootstrap-js', get_template_directory_uri() .
        '/libs/bootstrap/js/bootstrap.min.js', array('jquery'), ' ');
    //Flexslider js
    wp_enqueue_script('jquery.flexslider', get_template_directory_uri() . '/flexslider/jquery.flexslider.js');
    //Theme JS
    wp_enqueue_script('main_js', get_template_directory_uri() . '/js/main.js');
}

add_action('wp_enqueue_scripts', 'add_my_scripts');


//Add a filter to remove the structure [...]


add_filter('excerpt_more', function ($more) {
    return '...';
});

function new_excerpt_length($length)
{
    return 28;
}

add_filter('excerpt_length', 'new_excerpt_length');


//Function for post views count
function getPostViews($postID)
{
    $count_key = 'post_views_count';
    $count = get_post_meta($postID, $count_key, true);
    if ($count == '') {
        delete_post_meta($postID, $count_key);
        add_post_meta($postID, $count_key, '0');
        return "0 - View";
    }
    return $count . ' - View';
}

function setPostViews($postID)
{
    $count_key = 'post_views_count';
    $count = get_post_meta($postID, $count_key, true);
    if ($count == '') {
        $count = 0;
        delete_post_meta($postID, $count_key);
        add_post_meta($postID, $count_key, '0');
    } else {
        $count++;

        update_post_meta($postID, $count_key, $count);
    }
}


//ADD Settings for Coments form
function wph_change_submit_label($defaults)
{
    $defaults['title_reply'] = 'Leave your comment';
    $defaults['comment_notes_before'] = 'Submit your comments now';
    $defaults['label_submit'] = 'SUBMIT NOW';
    return $defaults;
}

add_filter('comment_form_defaults', 'wph_change_submit_label');

function true_phone_number_field($fields)
{
    $fields['phone'] = '<p class="comment-form-phone"><label for="phone">Phone*
                         </label> <input id="phone" name="phone" type="text" value="" size="30" /></p>';
    return $fields;
}

add_filter('comment_form_default_fields', 'true_phone_number_field', 10, 1);

function true_remove_url_field($fields)
{
    unset($fields['url']);
    return $fields;
}

add_filter('comment_form_default_fields', 'true_remove_url_field', 10, 1);

function sort_comment_fields($fields)
{
    $new_fields = array();
    $myorder = array('author', 'email', 'phone', 'comment'); // порядок полей

    foreach ($myorder as $key) {
        $new_fields[$key] = $fields[$key];
        unset($fields[$key]);
    }

    if ($fields)
        foreach ($fields as $key => $val)
            $new_fields[$key] = $val;
    return $new_fields;
}

add_filter('comment_form_fields', 'sort_comment_fields');