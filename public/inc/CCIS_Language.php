<?php
defined( 'ABSPATH' ) || die();

class CCIS_Language {
	public static function load_translation() {
		load_plugin_textdomain( 'ccis', false, basename( CCIS_PLUGIN_DIR_PATH ) . '/languages' );
	}
}
