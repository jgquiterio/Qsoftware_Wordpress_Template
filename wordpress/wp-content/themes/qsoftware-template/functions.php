<?php
/**
 * Theme functions.
 *
 * @package Qsoftware_Template
 */

function qsoftware_template_enqueue_assets() {

    wp_enqueue_style(
        'qsoftware-template-main',
        get_theme_file_uri('/assets/css/main.css'),
        array(),
        wp_get_theme()->get('Version')
    );

    wp_enqueue_script(
        'qsoftware-template-main',
        get_theme_file_uri('/assets/js/main.js'),
        array(),
        wp_get_theme()->get('Version'),
        true
    );
}

add_action('wp_enqueue_scripts', 'qsoftware_template_enqueue_assets');