<?php
/* 
 *
 *  @package Vet Clinic
 *  @since 1.0.0
 *  
*/
function add_theme_scripts() {
    //Google fonts
    wp_enqueue_style( 'Oxygen', '"https://fonts.googleapis.com/css2?family=Oxygen:wght@300&display=swap" rel="stylesheet"',false);
    wp_enqueue_style( 'Noto Sans', '"https://fonts.googleapis.com/css2?family=Noto+Sans:wght@400;700&display=swap" rel="stylesheet"', false);
    //styles
    wp_enqueue_style( 'reset', get_template_directory_uri() . '/assets/css/reset.css', false, '1.0','all');
    wp_enqueue_style( 'style', get_stylesheet_uri() );
    //scripts
    wp_enqueue_script( 'main', get_template_directory_uri() . '/assets/js/main.js', array ( 'jquery' ), 1.1, true);
}

add_action( 'wp_enqueue_scripts', 'add_theme_scripts' );
    

function theme_setup() {

    $post_formats = array('aside','image','gallery','video','audio','link','quote','status');
    add_theme_support( 'post-formats', $post_formats);

    /** post thumbnail **/
    add_theme_support( 'post-thumbnails' );

    /** title-tag **/
    add_theme_support( 'title-tag' );

    /** HTML5 support **/
    add_theme_support( 'html5', array( 'comment-list', 'comment-form',
    'search-form', 'gallery', 'caption' ) );

    /** refresh widgest **/
    add_theme_support( 'customize-selective-refresh-widgets' );

    /** custom background **/
    $bg_defaults = array(
    'default-image' => '',
    'default-preset' => 'default',
    'default-size' => 'cover',
    'default-repeat' => 'no-repeat',
    'default-attachment' => 'scroll',
    );
    add_theme_support( 'custom-background', $bg_defaults );

    /** custom header **/
    $header_defaults = array(
    'default-image' => '',
    'width' => 300,
    'height' => 60,
    'flex-height' => true,
    'flex-width' => true,
    'default-text-color' => '',
    'header-text' => true,
    'uploads' => true,
    );
    add_theme_support( 'custom-header', $header_defaults );
    
    /** custom logo **/
    add_theme_support( 'custom-logo', array(
    'height' => 60,
    'width' => 400,
    'flex-height' => true,
    'flex-width' => true,
    'header-text' => array( 'site-title', 'site-description' ),
    ) );

}
add_action('after_setup_theme', 'theme_setup');

/** REGISTER MENUS */
//this menu function will allow for multiple menus :)
function register_menus() { 
    register_nav_menus(
        array(
            'main-menu' => 'Main Menu', //primary menu
            'footer-menu' => 'Footer Menu',
            //'footer-community' => 'Footer Menu - Community',
            //'footer-resources' => 'Footer Menu - Resources',
        )
    ); 
}
add_action( 'init', 'register_menus' );

/**  multiple plugin area **/
$vetclinic_includes = array (
    '/widgets.php',
);

foreach ($vetclinic_includes as $file) {
    $filepath = locate_template( 'includes' . $file );
    if( !$filepath ){
        trigger_error(sprintf ('Error locating /includes%s for inclusion', $file), E_USER_ERROR);
    }
    require_once $filepath;
}
