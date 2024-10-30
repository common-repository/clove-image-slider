<?php
defined('ABSPATH') || die();

require_once CCIS_PLUGIN_DIR_PATH . 'admin/inc/CCIS_Slider_Admin.php';

add_filter('manage_edit-ccis_slider_columns', array('CCIS_Slider_Admin', 'edit_columns'));

add_action('manage_ccis_slider_posts_custom_column', array('CCIS_Slider_Admin', 'custom_column'), 10, 2);

add_action('add_meta_boxes', array('CCIS_Slider_Admin', 'add_meta_boxes'));

add_action('admin_enqueue_scripts', array('CCIS_Slider_Admin', 'enqueue_scripts_styles'));

add_action('save_post', array('CCIS_Slider_Admin', 'save_metaboxes'), 10, 2);
