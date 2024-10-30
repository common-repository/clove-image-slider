<?php
defined( 'ABSPATH' ) || die();

require_once CCIS_PLUGIN_DIR_PATH . 'public/inc/CCIS_Language.php';
require_once CCIS_PLUGIN_DIR_PATH . 'public/inc/CCIS_Slider.php';
require_once CCIS_PLUGIN_DIR_PATH . 'public/inc/CCIS_Shortcode.php';

/* Load translation */
add_action( 'plugins_loaded', array( 'CCIS_Language', 'load_translation' ) );

add_action( 'init', array( 'CCIS_Slider', 'register_slider_post_type' ) );

add_shortcode( 'CCIS', array( 'CCIS_Shortcode', 'shortcode' ) );

add_action( 'wp_enqueue_scripts', array( 'CCIS_Shortcode', 'shortcode_assets' ) );
