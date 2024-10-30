<?php
/*
 * Plugin Name: Clove Image Slider
 * Plugin URI: https://codeclove.com/plugins
 * Description: Clove Image Slider comes with different slider layouts which can be used to create and display multiple sliders on your WordPress website.
 * Version: 1.0.2
 * Author: codeclove
 * Author URI: https://codeclove.com
 * Text Domain: ccis
*/

defined('ABSPATH') || die();

if (!defined('CCIS_PLUGIN_URL')) {
	define('CCIS_PLUGIN_URL', plugin_dir_url(__FILE__));
}

if (!defined('CCIS_PLUGIN_DIR_PATH')) {
	define('CCIS_PLUGIN_DIR_PATH', plugin_dir_path(__FILE__));
}

final class CCIS {
	private static $instance = null;

	private function __construct() {
		$this->initialize_hooks();
	}

	public static function get_instance() {
		if (is_null(self::$instance)) {
			self::$instance = new self();
		}
		return self::$instance;
	}

	private function initialize_hooks() {
		if (is_admin()) {
			require_once CCIS_PLUGIN_DIR_PATH . 'admin/admin.php';
		}
		require_once CCIS_PLUGIN_DIR_PATH . 'public/public.php';
	}
}
CCIS::get_instance();
