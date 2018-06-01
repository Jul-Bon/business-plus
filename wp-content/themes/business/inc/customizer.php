<?php
/**
 * business Theme Customizer
 *
 * @package business
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function business_customize_register($wp_customize)
{
    $wp_customize->get_setting('blogname')->transport = 'postMessage';
    $wp_customize->get_setting('blogdescription')->transport = 'postMessage';
    $wp_customize->get_setting('header_textcolor')->transport = 'postMessage';

    if (isset($wp_customize->selective_refresh)) {
        $wp_customize->selective_refresh->add_partial('blogname', array(
            'selector' => '.site-title a',
            'render_callback' => 'business_customize_partial_blogname',
        ));
        $wp_customize->selective_refresh->add_partial('blogdescription', array(
            'selector' => '.site-description',
            'render_callback' => 'business_customize_partial_blogdescription',
        ));
    }

    //Add settings fo the main Banner
    $wp_customize->add_section('banner', array(
        'title' => __('Settings for Header Section ', 'business'),
        'priority' => 20,
    ));

    $wp_customize->add_setting('main_section_background', array(
        'type' => 'theme_mod',
        'capability' => 'edit_theme_options',
        'theme_supports' => '',
        'default' => '',
        'transport' => 'refresh',
    ));

    $wp_customize->add_control(new WP_Customize_Media_Control($wp_customize, 'main_section_background', array(
        'label' => __('Section Background Image', 'notify'),
        'section' => 'banner',
        'type' => 'background',
    )));

    //Add settings for the phone number
    $wp_customize->add_setting('phone_number', array(
        'default' => __('Phone number', 'business'),
        'transport' => 'refresh',
    ));

    $wp_customize->add_control('phone_number', array(
        'label' => __('Phone number settings', 'business'),
        'section' => 'main_banner',
        'settings' => 'phone_number',
        'type' => 'text',
    ));

    //Header SubTitle
    $wp_customize->add_setting('header_subtitle', array(
        'default' => __('Welcome Text', 'business'),
        'transport' => 'refresh',
    ));

    $wp_customize->add_control('header_subtitle', array(
        'label' => __('Welcome text ', 'business'),
        'section' => 'main_banner',
        'settings' => 'header_subtitle',
        'type' => 'text',
    ));

    //Header Title
    $wp_customize->add_setting('header_title', array(
        'default' => __('Main title', 'business'),
        'transport' => 'refresh',
    ));

    $wp_customize->add_control('header_title', array(
        'label' => __('Headline before the site ', 'business'),
        'section' => 'main_banner',
        'settings' => 'header_title',
        'type' => 'text',
    ));

    //Header description
    $wp_customize->add_setting('header_description', array(
        'default' => __('Headline description', 'business'),
        'transport' => 'refresh',
    ));

    $wp_customize->add_control('header_description', array(
        'label' => __('Main headline description', 'business'),
        'section' => 'main_banner',
        'settings' => 'header_description',
        'type' => 'textarea',
    ));

    //Add settings for the banner button
    $wp_customize->add_setting('text_button', array(
        'default' => __('Button text', 'business'),
        'transport' => 'refresh',
    ));

    $wp_customize->add_control('text_button', array(
        'label' => __('Button settings', 'business'),
        'section' => 'main_banner',
        'settings' => 'text_button',
        'type' => 'text',
    ));

    $wp_customize->add_setting('url_button', array(
        'default' => __('Url button', 'business'),
        'transport' => 'refresh',
    ));

    $wp_customize->add_control('url_button', array(
        'label' => __('Button url', 'business'),
        'section' => 'main_banner',
        'settings' => 'url_button',
        'type' => 'dropdown-pages',
    ));
    //end settings fo the main Banner

    //Section ABOUT US
    $wp_customize->add_section('section_about', array(
        'title' => __('Section About Us ', 'business'),
        'priority' => 30,
        'active_callback' => 'is_front_page',
    ));

    //Section Title
    $wp_customize->add_setting('section_title', array(
        'default' => __('Section title', 'business'),
        'transport' => 'refresh',
    ));

    $wp_customize->add_control('section_title', array(
        'label' => __('Title for section About Us ', 'business'),
        'section' => 'section_about',
        'settings' => 'section_title',
        'type' => 'text',
    ));

    //Section SubTitle
    $wp_customize->add_setting('section_subtitle', array(
        'default' => __('Section subtitle', 'business'),
        'transport' => 'refresh',
    ));

    $wp_customize->add_control('section_subtitle', array(
        'label' => __('Subtitle for section About Us ', 'business'),
        'section' => 'section_about',
        'settings' => 'section_subtitle',
        'type' => 'text',
    ));

    //Section description
    $wp_customize->add_setting('section_short_story', array(
        'default' => __('Section description', 'business'),
        'transport' => 'refresh',
    ));

    $wp_customize->add_control('section_short_story', array(
        'label' => __('Short story for section About Us ', 'business'),
        'section' => 'section_about',
        'settings' => 'section_short_story',
        'type' => 'textarea',
    ));

    //Add settings for the button in About Us Section
    $wp_customize->add_setting('about_button_text', array(
        'default' => __('Button text', 'business'),
        'transport' => 'refresh',
    ));

    $wp_customize->add_control('about_button_text', array(
        'label' => __('Button title', 'business'),
        'section' => 'section_about',
        'settings' => 'about_button_text',
        'type' => 'text',
    ));

    $wp_customize->add_setting('url_about_button', array(
        'default' => __('Url button', 'business'),
        'transport' => 'refresh',
    ));

    $wp_customize->add_control('url_about_button', array(
        'label' => __('Button url', 'business'),
        'section' => 'section_about',
        'settings' => 'url_about_button',
        'type' => 'url',
    ));

    //Section SERVICES
    $wp_customize->add_section('section_services', array(
        'title' => __('Section Services ', 'business'),
        'priority' => 31,
        'active_callback' => 'is_front_page',

    ));

    //Section Title
    $wp_customize->add_setting('services_section_title', array(
        'default' => __('Section title', 'business'),
        'transport' => 'refresh',
    ));

    $wp_customize->add_control('services_title', array(
        'label' => __('Title for section Services ', 'business'),
        'section' => 'section_services',
        'settings' => 'services_section_title',
        'type' => 'text',
    ));

    //Section SubTitle
    $wp_customize->add_setting('services_section_subtitle', array(
        'default' => __('Section subtitle', 'business'),
        'transport' => 'refresh',
    ));

    $wp_customize->add_control('services_subtitle', array(
        'label' => __('Subtitle for section Services ', 'business'),
        'section' => 'section_services',
        'settings' => 'services_section_subtitle',
        'type' => 'text',
    ));

    //Add settings for the button in Services Section
    $wp_customize->add_setting('services_button_text', array(
        'default' => __('Button text', 'business'),
        'transport' => 'refresh',
    ));

    $wp_customize->add_control('services_button_text', array(
        'label' => __('Button title', 'business'),
        'section' => 'section_services',
        'settings' => 'services_button_text',
        'type' => 'text',
    ));

    $wp_customize->add_setting('url_services_button', array(
        'default' => __('Url button', 'business'),
        'transport' => 'refresh',
    ));

    $wp_customize->add_control('url_services_button', array(
        'label' => __('Button url', 'business'),
        'section' => 'section_services',
        'settings' => 'url_services_button',
        'type' => 'url',
    ));

    //Section CLIENTS
    $wp_customize->add_section('section_clients', array(
        'title' => __('Section Clients ', 'business'),
        'priority' => 32,
        'active_callback' => 'is_front_page',

    ));

    //Section Title
    $wp_customize->add_setting('clients_section_title', array(
        'default' => __('Section title', 'business'),
        'transport' => 'refresh',
    ));

    $wp_customize->add_control('clients_title', array(
        'label' => __('Title for section Clients ', 'business'),
        'section' => 'section_clients',
        'settings' => 'clients_section_title',
        'type' => 'text',
    ));

    //Section SubTitle
    $wp_customize->add_setting('clients_section_subtitle', array(
        'default' => __('Section subtitle', 'business'),
        'transport' => 'refresh',
    ));

    $wp_customize->add_control('clients_subtitle', array(
        'label' => __('Subtitle for section Clients ', 'business'),
        'section' => 'section_clients',
        'settings' => 'clients_section_subtitle',
        'type' => 'text',
    ));


    //Section NEWS
    $wp_customize->add_section('section_news', array(
        'title' => __('Section News ', 'business'),
        'priority' => 33,
        'active_callback' => 'is_front_page',
    ));

    //Section Title
    $wp_customize->add_setting('news_section_title', array(
        'default' => __('Section title', 'business'),
        'transport' => 'refresh',
    ));

    $wp_customize->add_control('news_title', array(
        'label' => __('Title for section News ', 'business'),
        'section' => 'section_news',
        'settings' => 'news_section_title',
        'type' => 'text',
    ));

    //Section SubTitle
    $wp_customize->add_setting('news_section_subtitle', array(
        'default' => __('Section subtitle', 'business'),
        'transport' => 'refresh',
    ));

    $wp_customize->add_control('news_subtitle', array(
        'label' => __('Subtitle for section News ', 'business'),
        'section' => 'section_news',
        'settings' => 'news_section_subtitle',
        'type' => 'text',
    ));

    //Add settings for the button in News Section
    $wp_customize->add_setting('news_button_text', array(
        'default' => __('Button text', 'business'),
        'transport' => 'refresh',
    ));

    $wp_customize->add_control('news_button_text', array(
        'label' => __('Button title', 'business'),
        'section' => 'section_news',
        'settings' => 'news_button_text',
        'type' => 'text',
    ));

    $wp_customize->add_setting('url_news_button', array(
        'default' => __('Url button', 'business'),
        'transport' => 'refresh',
    ));

    $wp_customize->add_control('url_news_button', array(
        'label' => __('Button url', 'business'),
        'section' => 'section_news',
        'settings' => 'url_news_button',
        'type' => 'url',
    ));

    //Section PARTNERS
    $wp_customize->add_section('section_partners', array(
        'title' => __('Section Partners ', 'business'),
        'priority' => 34,
        'active_callback' => 'is_front_page',
    ));

    //Section Title
    $wp_customize->add_setting('partners_section_title', array(
        'default' => __('Section title', 'business'),
        'transport' => 'refresh',
    ));

    $wp_customize->add_control('partners_title', array(
        'label' => __('Title for section Partners ', 'business'),
        'section' => 'section_partners',
        'settings' => 'partners_section_title',
        'type' => 'text',
    ));

    //Section SubTitle
    $wp_customize->add_setting('partners_section_subtitle', array(
        'default' => __('Section subtitle', 'business'),
        'transport' => 'refresh',
    ));

    $wp_customize->add_control('partners_subtitle', array(
        'label' => __('Subtitle for section Partners ', 'business'),
        'section' => 'section_partners',
        'settings' => 'partners_section_subtitle',
        'type' => 'text',
    ));

    //Add Footer settings
    //Add settings for the copyright field
    $wp_customize->add_section('footer_setting', array(
        'title' => __('Footer settings', 'business'),
        'priority' => 35,
    ));

    $wp_customize->add_setting('footer_copy', array(
        'default' => __('Copyright text', 'business'),
        'transport' => 'refresh',
    ));

    $wp_customize->add_control('footer_copy', array(
        'label' => __('Footer settings', 'business'),
        'section' => 'footer_setting',
        'settings' => 'footer_copy',
        'type' => 'textarea',
    ));

    //Footer SubTitles
    $wp_customize->add_setting('first_subtitle', array(
        'default' => __('Navigation subtitle', 'business'),
        'transport' => 'refresh',
    ));

    $wp_customize->add_control('first_subtitle', array(
        'label' => __('Subtitle for section Navigation ', 'business'),
        'section' => 'footer_setting',
        'settings' => 'first_subtitle',
        'type' => 'text',
    ));

    $wp_customize->add_setting('second_subtitle', array(
        'default' => __('Navigation subtitle', 'business'),
        'transport' => 'refresh',
    ));

    $wp_customize->add_control('second_subtitle', array(
        'label' => __('Subtitle for section Contact Us', 'business'),
        'section' => 'footer_setting',
        'settings' => 'second_subtitle',
        'type' => 'text',
    ));

    //Add the settings of social networking icons
    $wp_customize->add_section('social_section', array(
        'title' => __('Social settings', 'business'),
        'priority' => 36,
    ));

    $wp_customize->add_control('social_menu', array(
        'label' => __('Social menu in footer', 'business'),
        'section' => 'social_section',
        'settings' => 'social_menu',
        'type' => 'text',
    ));

    $wp_customize->add_setting('facebook_social', array(
        'default' => __('Url facebook', 'business'),
        'transport' => 'refresh',
    ));

    $wp_customize->add_setting('google_plus_social', array(
        'default' => __('Url google_plus', 'business'),
        'transport' => 'refresh',
    ));

    $wp_customize->add_setting('twitter_social', array(
        'default' => __('Url twitter', 'business'),
        'transport' => 'refresh',
    ));

    $wp_customize->add_setting('linked_social', array(
        'default' => __('Url Linked In social', 'business'),
        'transport' => 'refresh',
    ));

    $wp_customize->add_control('facebook_social', array(
        'label' => __('Facebook profile url', 'business'),
        'section' => 'social_section',
        'settings' => 'facebook_social',
        'type' => 'text',
    ));

    $wp_customize->add_control('google_plus_social', array(
        'label' => __('Google Plus profile url', 'business'),
        'section' => 'social_section',
        'settings' => 'google_plus_social',
        'type' => 'text',
    ));

    $wp_customize->add_control('twitter_social', array(
        'label' => __('Twitter profile url', 'business'),
        'section' => 'social_section',
        'settings' => 'twitter_social',
        'type' => 'text',
    ));

    $wp_customize->add_control('linked_social', array(
        'label' => __('Linked in profile url', 'business'),
        'section' => 'social_section',
        'settings' => 'linked_social',
        'type' => 'text',
    ));


    //BLOG PAGE
    $wp_customize->add_section('blog_page', array(
        'title' => __('Page Blog ', 'business'),
        'priority' => 20,
    ));

    //Section Title
    $wp_customize->add_setting('blog_page_title', array(
        'default' => __('Blog Page title', 'business'),
        'transport' => 'refresh',
    ));

    $wp_customize->add_control('blog_page_title', array(
        'label' => __('Title for Blog Page ', 'business'),
        'section' => 'blog_page',
        'settings' => 'blog_page_title',
        'type' => 'text',
    ));

    //Section SubTitle
    $wp_customize->add_setting('blog_page_subtitle', array(
        'default' => __('Page subtitle', 'business'),
        'transport' => 'refresh',
    ));

    $wp_customize->add_control('blog_page_subtitle', array(
        'label' => __('Subtitle Blog Page ', 'business'),
        'section' => 'blog_page',
        'settings' => 'blog_page_subtitle',
        'type' => 'text',
    ));

}

add_action('customize_register', 'business_customize_register');

/**
 * Render the site title for the selective refresh partial.
 *
 * @return void
 */
function business_customize_partial_blogname()
{
    bloginfo('name');
}

/**
 * Render the site tagline for the selective refresh partial.
 *
 * @return void
 */
function business_customize_partial_blogdescription()
{
    bloginfo('description');
}

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function business_customize_preview_js()
{
    wp_enqueue_script('business-customizer', get_template_directory_uri() . '/js/customizer.js', array('customize-preview'), '20151215', true);
}

add_action('customize_preview_init', 'business_customize_preview_js');
