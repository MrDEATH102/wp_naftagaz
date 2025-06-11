<?php
// add style and sctipt files to theme 
function naftagaz_style_script()
{

    // enqueue styles 
    wp_enqueue_style('fontawesome', get_template_directory_uri() . '/assets/css/all.min.css', array(), '6.0.0', 'all');
    wp_enqueue_style('index', get_template_directory_uri() . '/assets/css/index.css', array(), '1.0.0', 'all');
    wp_enqueue_style('company', get_template_directory_uri() . '/assets/css/company.css', array(), '1.0.0', 'all');
    wp_enqueue_style('services_drilling', get_template_directory_uri() . 'assets/css/services_drilling.css', array(), '1.0.0', 'all');
    wp_enqueue_style('services_service', get_template_directory_uri() . 'assets/css/services_service.css', array(), '1.0.0', 'all');
    wp_enqueue_style('careers-succes-stories', get_template_directory_uri() . 'assets/css/careers-succes-stories.css', array(), '1.0.0', 'all');
    wp_enqueue_style('careers-recognition-board', get_template_directory_uri() . 'assets/css/careers-recognition-board.css', array(), '1.0.0', 'all');

    // enqueue scripts 
    wp_enqueue_script('index', get_template_directory_uri() . '/assets/js/index.js', array('jquery'), '1.0.0', true);
    wp_enqueue_script('company', get_template_directory_uri() . '/assets/js/company.js', array('jquery'), '1.0.0', true);
    wp_enqueue_script('services_drilling', get_template_directory_uri() . '/assets/js/services_drilling.js', array('jquery'), '1.0.0', true);
    wp_enqueue_script('services_service', get_template_directory_uri() . '/assets/js/services_service.js', array('jquery'), '1.0.0', true);
    wp_enqueue_script('careers-succes-stories', get_template_directory_uri() . '/assets/js/careers-succes-stories.js', array('jquery'), '1.0.0', true);
    wp_enqueue_script('careers-recognition-board', get_template_directory_uri() . '/assets/js/careers-recognition-board.js', array('jquery'), '1.0.0', true);
}
add_action('wp_enqueue_scripts', 'naftagaz_style_script');


// Register nav menus 
if (! function_exists('naftagaz_nav_menus')) {

    function naftagaz_nav_menus()
    {
        register_nav_menus(
            array(
                'header_menu'   => 'Header Menu',
                'footer_menu'   => 'Footer Menu'
            )
        );
    }

    add_action('after_setup_theme', 'naftagaz_nav_menus');
}
