<?php
if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}
if (class_exists('CSF')) {

    // Define Uniqe ID
    $prefix = 'custom_meta';


    // Create Metaboxe
    CSF::createMetabox($prefix, array(
        'title'     => 'Title Box',
        'post_type' => 'post',
        'context'   => 'advanced',
        'priority'  => 'high',
        'theme'     => 'light', // drak is default
        'data_type' => 'unserialize', // serialize is default
    ));

    // Create Section
    CSF::createSection($prefix, array(
        'title'  => 'Title Section',
        'fields' => array(
            // A text field
            array(
                'id'    => 'opt-text',
                'type'  => 'text',
                'title' => 'Simple Text',
            ),
        ),

    ));
}
