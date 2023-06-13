<?php
/*
Plugin Name: Mon Module
Description: Un module pour augmenter ou diminuer un chiffre avec des boutons.
Version: 1.0
Author: Votre nom
*/
require_once plugin_dir_path(__FILE__) . 'step.php';


if (!defined('ABSPATH')) {
    exit; // Bloque l'accès direct au script
}

function mon_module_enqueue_scripts() {
    wp_enqueue_style('mon-module-styles', plugins_url('css/style.css', __FILE__));
    wp_enqueue_script('mon-module-scripts', plugins_url('js/script.js', __FILE__), array('jquery'), '', true);
}

add_action('wp_enqueue_scripts', 'mon_module_enqueue_scripts');

function mon_module_shortcode() {
    return mon_module_html();
}


