<?php
if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}
if (class_exists('CSF')) {

    // Define Uniqe ID
    $prefix = 'theme_options';


    // Create options
    CSF::createOptions($prefix, array(
        'framework_title'       => 'تنظیمات قالب نفت و گاز',
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

    CSF::createSection($prefix, array(
        'id'        => 'footer _settings',
        'title'     => 'تنظیمات پابرگ',
        'icon'      => 'fa fa-arrow-down',
        'fields'    => array(


            //social repeater field
            array(
                'id'     => 'footer_detail_items',
                'type'   => 'repeater',
                'title'  => 'سوشیال مدیا',
                'fields' => array(
                    array(
                        'id'    => 'detail_url',
                        'type'  => 'text',
                        'title' => 'لینک',
                        'sanitize' => 'esc_url',
                        'validate' => 'csf_validate_url',
                    ),
                    array(
                        'id'    => 'detail_icon',
                        'type'  => 'text',
                        'title' => 'کلاس آیکن (Font Awesome)',
                        'desc'  => 'مثلا: fas fa-paper-plane یا fa-solid fa-paper-plane',
                    ),
                ),
            ),
            // footer phone number 
            array(
                'id'     => 'footer_phone_number',
                'type'   => 'text',
                'title'  => 'شماره تماس فوتر',
                'default' => '+7 495 589 12 00',
            ),


            //links repeater field 
            array(
                'id'     => 'fr_links',
                'type'   => 'repeater',
                'title'  => 'لینک های فوتر',
                'fields' => array(

                    array(
                        'id'    => 'fr_links_titles',
                        'type'  => 'text',
                        'title' => 'عنوان لینک',
                    ),
                    array(
                        'id'        => 'fr_links_url',
                        'type'      => 'text',
                        'title'     => 'آدرس لینک',
                        'sanitize'  => 'esc_url',
                        'validate'  => 'csf_validate_url',
                    ),

                ),
            ),
            // footer bottom links 
            array(
                'id'      => 'footer_second_link_1_title',
                'type'    => 'text',
                'title'   => 'عنوان لینک اول (سطر دوم فوتر)',
                'default' => 'سایت توسط VIDE INFRA',
            ),
            array(
                'id'      => 'footer_second_link_1_url',
                'type'    => 'text',
                'title'   => 'لینک اول (سطر دوم فوتر)',
                'default' => '#',
                'sanitize' => 'esc_url',
                'validate' => 'csf_validate_url',
            ),
            array(
                'id'      => 'footer_second_link_2_title',
                'type'    => 'text',
                'title'   => 'عنوان لینک دوم (سطر دوم فوتر)',
                'default' => 'سیاست حفظ حریم خصوصی',
            ),
            array(
                'id'      => 'footer_second_link_2_url',
                'type'    => 'text',
                'title'   => 'لینک دوم (سطر دوم فوتر)',
                'default' => '#',
                'sanitize' => 'esc_url',
                'validate' => 'csf_validate_url',
            ),
            array(
                'id'      => 'footer_copyright',
                'type'    => 'text',
                'title'   => 'متن کپی‌رایت فوتر',
                'default' => '© ۲۰۲۵ شرکت سهامی نفتاگاز',
            ),



        )
    ));
}

// A Custom function for get an option
if (! function_exists('naftagaz_get_option')) {
    function naftagaz_get_option($option = '', $default = null)
    {
        $options = get_option('theme_options');
        return (isset($options[$option]) && $options[$option] != '') ? $options[$option] : $default;
    }
}
