<?php
if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}
if (class_exists('CSF')) {

    // Define Uniqe ID
    $prefix = 'theme_options';


    // Create options
    CSF::createOptions($prefix, array(
        'framework_title'       => 'تنظیمات قالب وب دنج',
        'menu_title'            => 'تنظیمات قالب',
        'menu_slug'             => 'theme-options',
        'menu_icon'             => 'dashicons-admin-generic',
        'show_in_customizer'    => false,
        'menu_position'         => 60,
        'theme'                 => 'light'
    ));


    // Create a section
    CSF::createSection($prefix, array(
        'id'     => 'generl_settings',
        'title'  => 'تنظیمات عمومی',
        'icon'   => 'fa fa-home',
        'fields' => array(

            // Email box switch
            array(
                'id'       => 'g_emailshow_opt',
                'type'     => 'switcher',
                'title'    => 'ایمیل نمایش داده شود؟',
                'text_on'  => 'بله',
                'text_off' => 'خیر',
            ),

            //Email value
            array(
                'id'    => 'g_email_opt',
                'type'  => 'text',
                'title' => 'ایمیل شما',
                'help'  => 'این ایمیل در فوتر سایت نمایش داده می شود.',
                'desc'  => 'در صورت خالی بودن فیلد ایمیل تنظیم شده در تنظیمات وردپرس نمایش داده می شود'
            ),

        )
    ));

    CSF::createSection($prefix, array(
        'id'     => 'header_settings',
        'title'  => 'تنظیمات سربرگ',
        'icon'   => 'fa fa-arrow-up',
        'fields' => array(

            // A text field
            array(
                'id'    => 'opt-text',
                'type'  => 'text',
                'title' => 'Simple Text',
            ),

        )
    ));
}

// A Custom function for get an option
if (! function_exists('webdenj_get_option')) {
    function webdenj_get_option($option = '', $default = null)
    {
        $options = get_option('theme_options');
        return (isset($options[$option]) && $options[$option] != '') ? $options[$option] : $default;
    }
}
