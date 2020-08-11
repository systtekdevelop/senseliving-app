<?php
/**
 * Sense App Theme functions definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WordPress
 * @subpackage SenseLiving_App
 * @since SenseLiving App Theme 1.0
 *
 **/

define( 'SenseLiving_App_Theme_Version', '1.0.0' );
define( 'SenseLIving_App_Theme_Settings', 'senseliving_app_settings' );
define( 'SenseLIving_App_Theme_Dir', trailingslashit( get_template_directory() ) );
define( 'SenseLIving_App_Theme_Uri', trailingslashit( esc_url( get_template_directory_uri() ) ) );

function senselivingapp_theme_version() {
    $theme_version = '1.0.0';
    $senseliving_app_theme_version = $theme_version;
    return $senseliving_app_theme_version;
}

/** Initialize Menus */
function senseliving_app_menus() {
    register_nav_menus(array(
        'header-menu-location' => __( 'Header Menu', 'senseliving-app'),
        'footer-menu-location' => __( 'Footer Menu', 'senseliving-app')
    ));
}
add_action( 'init', 'senseliving_app_menus' );


function senseliving_app_styles() {
    /** Font Awesome */
    wp_enqueue_style( 'fontawesome5', get_stylesheet_directory_uri(). '/icons/all.min.css' , false, '5.14.0' );
    /** Google Fonts */
    wp_enqueue_style('custom-google-fonts', '//fonts.googleapis.com/css?family=Assistant:200,400,700&display=swap');
    /** Swiper */
    wp_enqueue_style( 'swiper', get_stylesheet_directory_uri(). '/css/swiper.css' , false, '4.2.2' );
    /** Reset */
    wp_enqueue_style( 'reset', get_stylesheet_directory_uri(). '/css/reset.css', false, false );
    /** Theme Styles */
    wp_enqueue_style( 'senseliving-app', get_stylesheet_directory_uri(). '/css/style.css', false, '1.0.0');
    /** Custom Styles */
    wp_enqueue_style( 'senseliving-custom', get_stylesheet_directory_uri(). '/custom.css', false, false);
}
add_action( 'wp_enqueue_scripts', 'senseliving_app_styles', 5 );

function senseliving_app_scripts() {
    /** JQuery */
    wp_enqueue_script( 'jquery', get_stylesheet_directory_uri(). '/js/jquery-3.3.1.min.js', array(), '3.3.1', true );
    /** Validate */
    wp_enqueue_script('jquery-validate', get_stylesheet_directory_uri(). '/js/jquery.validate.min.js', array('jquery'), '1.11.1', true);
    /** Swiper */
    wp_enqueue_script('swiper', get_stylesheet_directory_uri(). '/js/swiper.min.js', array('jquery'), '4.2.2', true);
    /** SenseLiving App */
    wp_enqueue_script('senseliving-app', get_stylesheet_directory_uri(). '/js/jquery.custom.js', array('jquery'), false, true);
    
}
add_action( 'wp_enqueue_scripts', 'senseliving_app_scripts', 5 );
