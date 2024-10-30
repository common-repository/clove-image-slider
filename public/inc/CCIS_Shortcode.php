<?php
defined( 'ABSPATH' ) || die();

class CCIS_Shortcode {
	public static function shortcode( $attr ) {
		ob_start();
		if ( isset( $attr['id'] ) && ! empty( $attr['id'] ) ) {
			$id = absint( $attr['id'] );

			$general_settings = get_post_meta( $id, 'ccis_general_setting', true );
			$images           = get_post_meta( $id, 'ccis_image', true );

			require CCIS_PLUGIN_DIR_PATH . 'admin/inc/metaboxes/default_settings.php';

			if ( is_array( $general_settings ) ) {
				if ( isset( $general_settings['layout'] ) && ! empty( $general_settings['layout'] ) ) {
					$layout = esc_attr( $general_settings['layout'] );
				}

				if ( isset( $general_settings['display_slide_title'] ) ) {
					$display_slide_title = (bool) $general_settings['display_slide_title'];
				}

				if ( 'layout1' === $layout ) {
					require CCIS_PLUGIN_DIR_PATH . 'public/inc/layouts/layout1.php';
				} elseif( 'layout2' === $layout ) {
					require CCIS_PLUGIN_DIR_PATH . 'public/inc/layouts/layout2.php';
				} elseif( 'layout3' === $layout ) {
					require CCIS_PLUGIN_DIR_PATH . 'public/inc/layouts/layout3.php';
				} elseif( 'layout4' === $layout ) {
					require CCIS_PLUGIN_DIR_PATH . 'public/inc/layouts/layout4.php';
				} else {
					esc_html_e( 'Layout is not set for this slider.', 'ccis' );
				}

			} else {
				esc_html_e( 'Settings not found for this slider.', 'ccis' );
			}
		} else {
			esc_html_e( 'Please provide a valid slider ID.', 'ccis' );
		}

		return ob_get_clean();
	}

	public static function shortcode_assets() {
		global $post;
		if ( is_a( $post, 'WP_Post' ) ) {
			if ( has_shortcode( $post->post_content, 'CCIS' ) ) {
				wp_enqueue_style( 'ccis', CCIS_PLUGIN_URL . 'assets/css/ccis.css' );
			}
		}
	}
}
