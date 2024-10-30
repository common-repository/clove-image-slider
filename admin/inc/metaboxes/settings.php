<?php
defined( 'ABSPATH' ) || die();

$post_id = $post->ID;

$general_settings = get_post_meta( $post_id, 'ccis_general_setting', true );
$layout1_settings = get_post_meta( $post_id, 'ccis_layout1_setting', true );
$layout2_settings = get_post_meta( $post_id, 'ccis_layout2_setting', true );
$layout3_settings = get_post_meta( $post_id, 'ccis_layout3_setting', true );
$layout4_settings = get_post_meta( $post_id, 'ccis_layout4_setting', true );

require_once CCIS_PLUGIN_DIR_PATH . 'includes/CCIS_Helper.php';
require_once CCIS_PLUGIN_DIR_PATH . 'admin/inc/metaboxes/default_settings.php';

/* Settings: General */
if ( is_array( $general_settings ) ) {
	if ( isset( $general_settings['layout'] ) && ! empty( $general_settings['layout'] ) ) {
		$layout = esc_attr( $general_settings['layout'] );
	}

	if ( isset( $general_settings['display_slide_title'] ) ) {
		$display_slide_title = (bool) $general_settings['display_slide_title'];
	}
}

/* Settings: Layout 1 */
if ( is_array( $layout1_settings ) ) {
	if ( isset( $layout1_settings['custom_css'] ) && ! empty( $layout1_settings['custom_css'] ) ) {
		$l1_custom_css = $layout1_settings['custom_css'];
	}
	if ( isset( $layout1_settings['autoplay'] ) ) {
		$l1_autoplay = (bool) $layout1_settings['autoplay'];
	}
	if ( isset( $layout1_settings['autoplay_on_hover'] ) ) {
		$l1_autoplay_on_hover = $layout1_settings['autoplay_on_hover'];
	}
	if ( isset( $layout1_settings['autoplay_interval'] ) ) {
		$l1_autoplay_interval = $layout1_settings['autoplay_interval'];
	}
	if ( isset( $layout1_settings['full_screen'] ) ) {
		$l1_full_screen = (bool) $layout1_settings['full_screen'];
	}
	if ( isset( $layout1_settings['width_type'] ) ) {
		$l1_width_type = $layout1_settings['width_type'];
	}
	if ( isset( $layout1_settings['width_fixed'] ) ) {
		$l1_width_fixed = $layout1_settings['width_fixed'];
	}
	if ( isset( $layout1_settings['width_percentage'] ) ) {
		$l1_width_percentage = $layout1_settings['width_percentage'];
	}
	if ( isset( $layout1_settings['force_size'] ) ) {
		$l1_force_size = $layout1_settings['force_size'];
	}
	if ( isset( $layout1_settings['height_type'] ) ) {
		$l1_height_type = $layout1_settings['height_type'];
	}
	if ( isset( $layout1_settings['height_fixed'] ) ) {
		$l1_height_fixed = $layout1_settings['height_fixed'];
	}
	if ( isset( $layout1_settings['height_percentage'] ) ) {
		$l1_height_percentage = $layout1_settings['height_percentage'];
	}
	if ( isset( $layout1_settings['auto_height'] ) ) {
		$l1_auto_height = (bool) $layout1_settings['auto_height'];
	}
	if ( isset( $layout1_settings['fade'] ) ) {
		$l1_fade = (bool) $layout1_settings['fade'];
	}
	if ( isset( $layout1_settings['image_scale_mode'] ) ) {
		$l1_image_scale_mode = $layout1_settings['image_scale_mode'];
	}
	if ( isset( $layout1_settings['slide_distance'] ) ) {
		$l1_slide_distance = $layout1_settings['slide_distance'];
	}
	if ( isset( $layout1_settings['orientation'] ) ) {
		$l1_orientation = $layout1_settings['orientation'];
	}
	if ( isset( $layout1_settings['pagination'] ) ) {
		$l1_navigation = (bool) $layout1_settings['pagination'];
	}
	if ( isset( $layout1_settings['thumbnail_type'] ) ) {
		$l1_thumbnail_type = $layout1_settings['thumbnail_type'];
	}
	if ( isset( $layout1_settings['arrows'] ) ) {
		$l1_arrows = (bool) $layout1_settings['arrows'];
	}
	if ( isset( $layout1_settings['thumbnail_arrows'] ) ) {
		$l1_thumbnail_arrows = (bool) $layout1_settings['thumbnail_arrows'];
	}
	if ( isset( $layout1_settings['thumbnail_pointer'] ) ) {
		$l1_thumbnail_pointer = (bool) $layout1_settings['thumbnail_pointer'];
	}
	if ( isset( $layout1_settings['thumbnail_pointer_color'] ) ) {
		$l1_thumbnail_pointer_color = $layout1_settings['thumbnail_pointer_color'];
	}
	if ( isset( $layout1_settings['thumbnails_position'] ) ) {
		$l1_thumbnails_position = $layout1_settings['thumbnails_position'];
	}
	if ( isset( $layout1_settings['thumbnail_width'] ) ) {
		$l1_thumbnail_width = $layout1_settings['thumbnail_width'];
	}
	if ( isset( $layout1_settings['thumbnail_height'] ) ) {
		$l1_thumbnail_height = $layout1_settings['thumbnail_height'];
	}
	if ( isset( $layout1_settings['shuffle'] ) ) {
		$l1_shuffle = (bool) $layout1_settings['shuffle'];
	}
	if ( isset( $layout1_settings['title_link_color'] ) ) {
		$l1_title_link_color = $layout1_settings['title_link_color'];
	}
	if ( isset( $layout1_settings['layer_text_color'] ) ) {
		$l1_layer_text_color = $layout1_settings['layer_text_color'];
	}
	if ( isset( $layout1_settings['layer_background_color'] ) ) {
		$l1_layer_background_color = $layout1_settings['layer_background_color'];
	}
	if ( isset( $layout1_settings['layer_background_opacity'] ) ) {
		$l1_layer_background_opacity = $layout1_settings['layer_background_opacity'];
	}
	if ( isset( $layout1_settings['layer_title_font_size'] ) ) {
		$l1_layer_title_font_size = $layout1_settings['layer_title_font_size'];
	}
	if ( isset( $layout1_settings['layer_text_font_size'] ) ) {
		$l1_layer_text_font_size = $layout1_settings['layer_text_font_size'];
	}
	if ( isset( $layout1_settings['thumbnail_title_font_size'] ) ) {
		$l1_thumbnail_title_font_size = $layout1_settings['thumbnail_title_font_size'];
	}
	if ( isset( $layout1_settings['thumbnail_text_font_size'] ) ) {
		$l1_thumbnail_text_font_size = $layout1_settings['thumbnail_text_font_size'];
	}
	if ( isset( $layout1_settings['layer_text_align'] ) ) {
		$l1_layer_text_align = $layout1_settings['layer_text_align'];
	}
	if ( isset( $layout1_settings['title_layer_position'] ) ) {
		$l1_title_layer_position = $layout1_settings['title_layer_position'];
	}
	if ( isset( $layout1_settings['text_layer_position'] ) ) {
		$l1_text_layer_position = $layout1_settings['text_layer_position'];
	}
	if ( isset( $layout1_settings['font_family'] ) ) {
		$l1_font_family = $layout1_settings['font_family'];
	}
	if ( isset( $layout1_settings['link_new_tab'] ) ) {
		$l1_link_new_tab = (bool) $layout1_settings['link_new_tab'];
	}
	if ( isset( $layout1_settings['show_thumbnails'] ) ) {
		$l1_show_thumbnails = (bool) $layout1_settings['show_thumbnails'];
	}
}

/* Settings: Layout 2 */
if ( is_array( $layout2_settings ) ) {
	if ( isset( $layout2_settings['custom_css'] ) && ! empty( $layout2_settings['custom_css'] ) ) {
		$l2_custom_css = $layout2_settings['custom_css'];
	}
	if ( isset( $layout2_settings['show_thumbnails'] ) ) {
		$l2_show_thumbnails = (bool) $layout2_settings['show_thumbnails'];
	}
	if ( isset( $layout2_settings['show_toolbar'] ) ) {
		$l2_show_toolbar = (bool) $layout2_settings['show_toolbar'];
	}
	if ( isset( $layout2_settings['show_infobar'] ) ) {
		$l2_show_infobar = (bool) $layout2_settings['show_infobar'];
	}
	if ( isset( $layout2_settings['arrows'] ) ) {
		$l2_arrows = (bool) $layout2_settings['arrows'];
	}
	if ( isset( $layout2_settings['title_color'] ) ) {
		$l2_title_color = $layout2_settings['title_color'];
	}
	if ( isset( $layout2_settings['title_link_color'] ) ) {
		$l2_title_link_color = $layout2_settings['title_link_color'];
	}
	if ( isset( $layout2_settings['desc_color'] ) ) {
		$l2_desc_color = $layout2_settings['desc_color'];
	}
	if ( isset( $layout2_settings['font_family'] ) ) {
		$l2_font_family = $layout2_settings['font_family'];
	}
	if ( isset( $layout2_settings['link_new_tab'] ) ) {
		$l2_link_new_tab = (bool) $layout2_settings['link_new_tab'];
	}
}

/* Settings: Layout 3 */
if ( is_array( $layout3_settings ) ) {
	if ( isset( $layout3_settings['custom_css'] ) && ! empty( $layout3_settings['custom_css'] ) ) {
		$l3_custom_css = $layout3_settings['custom_css'];
	}
	if ( isset( $layout3_settings['autoplay'] ) ) {
		$l3_autoplay = (bool) $layout3_settings['autoplay'];
	}
	if ( isset( $layout3_settings['auto_hover'] ) ) {
		$l3_auto_hover = (bool) $layout3_settings['auto_hover'];
	}
	if ( isset( $layout3_settings['speed'] ) ) {
		$l3_speed = $layout3_settings['speed'];
	}
	if ( isset( $layout3_settings['pause'] ) ) {
		$l3_pause = $layout3_settings['pause'];
	}
	if ( isset( $layout3_settings['arrows'] ) ) {
		$l3_arrows = (bool) $layout3_settings['arrows'];
	}
	if ( isset( $layout3_settings['pager'] ) ) {
		$l3_pager = (bool) $layout3_settings['pager'];
	}
	if ( isset( $layout3_settings['transition'] ) ) {
		$l3_transition = $layout3_settings['transition'];
	}
	if ( isset( $layout3_settings['adaptive_height'] ) ) {
		$l3_adaptive_height = (bool) $layout3_settings['adaptive_height'];
	}
	if ( isset( $layout3_settings['max_height_fixed'] ) ) {
		$l3_max_height_fixed = $layout3_settings['max_height_fixed'];
	}
	if ( isset( $layout3_settings['title_color'] ) ) {
		$l3_title_color = $layout3_settings['title_color'];
	}
	if ( isset( $layout3_settings['title_link_color'] ) ) {
		$l3_title_link_color = $layout3_settings['title_link_color'];
	}
	if ( isset( $layout3_settings['desc_color'] ) ) {
		$l3_desc_color = $layout3_settings['desc_color'];
	}
	if ( isset( $layout3_settings['pager_background_color'] ) ) {
		$l3_pager_background_color = $layout3_settings['pager_background_color'];
	}
	if ( isset( $layout3_settings['caption_background_color'] ) ) {
		$l3_caption_background_color = $layout3_settings['caption_background_color'];
	}
	if ( isset( $layout3_settings['caption_background_opacity'] ) ) {
		$l3_caption_background_opacity = $layout3_settings['caption_background_opacity'];
	}
	if ( isset( $layout3_settings['title_font_size'] ) ) {
		$l3_title_font_size = $layout3_settings['title_font_size'];
	}
	if ( isset( $layout3_settings['text_font_size'] ) ) {
		$l3_text_font_size = $layout3_settings['text_font_size'];
	}
	if ( isset( $layout3_settings['title_align'] ) ) {
		$l3_title_align = $layout3_settings['title_align'];
	}
	if ( isset( $layout3_settings['text_align'] ) ) {
		$l3_text_align = $layout3_settings['text_align'];
	}
	if ( isset( $layout3_settings['font_family'] ) ) {
		$l3_font_family = $layout3_settings['font_family'];
	}
	if ( isset( $layout3_settings['link_new_tab'] ) ) {
		$l3_link_new_tab = (bool) $layout3_settings['link_new_tab'];
	}
}

/* Settings: Layout 4 */
if ( is_array( $layout4_settings ) ) {
	if ( isset( $layout4_settings['custom_css'] ) && ! empty( $layout4_settings['custom_css'] ) ) {
		$l4_custom_css = $layout4_settings['custom_css'];
	}
	if ( isset( $layout4_settings['overlay'] ) ) {
		$l4_overlay = (bool) $layout4_settings['overlay'];
	}
	if ( isset( $layout4_settings['spinner'] ) ) {
		$l4_spinner = (bool) $layout4_settings['spinner'];
	}
	if ( isset( $layout4_settings['nav'] ) ) {
		$l4_nav = (bool) $layout4_settings['nav'];
	}
	if ( isset( $layout4_settings['swipe_close'] ) ) {
		$l4_close = (bool) $layout4_settings['swipe_close'];
	}
	if ( isset( $layout4_settings['swipe_close'] ) ) {
		$l4_swipe_close = (bool) $layout4_settings['swipe_close'];
	}
	if ( isset( $layout4_settings['doc_close'] ) ) {
		$l4_doc_close = (bool) $layout4_settings['doc_close'];
	}
	if ( isset( $layout4_settings['counter'] ) ) {
		$l4_counter = (bool) $layout4_settings['counter'];
	}
	if ( isset( $layout4_settings['preloading'] ) ) {
		$l4_preloading = (bool) $layout4_settings['preloading'];
	}
	if ( isset( $layout4_settings['keyboard'] ) ) {
		$l4_keyboard = (bool) $layout4_settings['keyboard'];
	}
	if ( isset( $layout4_settings['loop'] ) ) {
		$l4_loop = (bool) $layout4_settings['loop'];
	}
	if ( isset( $layout4_settings['width_ratio'] ) ) {
		$l4_width_ratio = $layout4_settings['width_ratio'];
	}
	if ( isset( $layout4_settings['height_ratio'] ) ) {
		$l4_height_ratio = $layout4_settings['height_ratio'];
	}
	if ( isset( $layout4_settings['scale_image_to_ratio'] ) ) {
		$l4_scale_image_to_ratio = (bool) $layout4_settings['scale_image_to_ratio'];
	}
	if ( isset( $layout4_settings['disable_right_click'] ) ) {
		$l4_disable_right_click = (bool) $layout4_settings['disable_right_click'];
	}
	if ( isset( $layout4_settings['double_tap_zoom'] ) ) {
		$l4_double_tap_zoom = $layout4_settings['double_tap_zoom'];
	}
	if ( isset( $layout4_settings['max_zoom'] ) ) {
		$l4_max_zoom = $layout4_settings['max_zoom'];
	}
	if ( isset( $layout4_settings['animation_slide'] ) ) {
		$l4_animation_slide = (bool) $layout4_settings['animation_slide'];
	}
	if ( isset( $layout4_settings['animation_speed'] ) ) {
		$l4_animation_speed = $layout4_settings['animation_speed'];
	}
	if ( isset( $layout4_settings['caption'] ) ) {
		$l4_caption = (bool) $layout4_settings['caption'];
	}
	if ( isset( $layout4_settings['caption_position'] ) ) {
		$l4_caption_position = $layout4_settings['caption_position'];
	}
	if ( isset( $layout4_settings['title_font_size'] ) ) {
		$l4_title_font_size = $layout4_settings['title_font_size'];
	}
	if ( isset( $layout4_settings['text_font_size'] ) ) {
		$l4_text_font_size = $layout4_settings['text_font_size'];
	}
	if ( isset( $layout4_settings['title_align'] ) ) {
		$l4_title_align = $layout4_settings['title_align'];
	}
	if ( isset( $layout4_settings['text_align'] ) ) {
		$l4_text_align = $layout4_settings['text_align'];
	}
	if ( isset( $layout4_settings['title_color'] ) ) {
		$l4_title_color = $layout4_settings['title_color'];
	}
	if ( isset( $layout4_settings['title_link_color'] ) ) {
		$l4_title_link_color = $layout4_settings['title_link_color'];
	}
	if ( isset( $layout4_settings['desc_color'] ) ) {
		$l4_desc_color = $layout4_settings['desc_color'];
	}
	if ( isset( $layout4_settings['caption_background_color'] ) ) {
		$l4_caption_background_color = $layout4_settings['caption_background_color'];
	}
	if ( isset( $layout4_settings['font_family'] ) ) {
		$l4_font_family = $layout4_settings['font_family'];
	}
	if ( isset( $layout4_settings['link_new_tab'] ) ) {
		$l4_link_new_tab = (bool) $layout4_settings['link_new_tab'];
	}
}
?>
<div class="ccis-setting-container">

	<!-- Settings: General -->
	<div class="ccis-setting-general">
		<div class="row">
			<div class="col-xs-12 col-md-4 ccis-setting-col">
				<span class="ccis_setting_key">
					<?php esc_html_e( 'Slider Layout', 'ccis' ); ?>
				</span>
			</div>
			<div class="col-xs-12 col-md-8 ccis-setting-col">
				<span class="ccis_setting_value">
					<div class="form-check form-check-inline">
						<input <?php checked( $layout, 'layout1', true ); ?> class="form-check-input" type="radio" name="layout" id="ccis_layout1" value="layout1">
						<label class="form-check-label" for="ccis_layout1"><?php esc_html_e( 'Layout 1', 'ccis' ); ?></label>
					</div>

					<div class="form-check form-check-inline">
						<input <?php checked( $layout, 'layout2', true ); ?> class="form-check-input" type="radio" name="layout" id="ccis_layout2" value="layout2">
						<label class="form-check-label" for="ccis_layout2"><?php esc_html_e( 'Layout 2', 'ccis' ); ?></label>
					</div>

					<div class="form-check form-check-inline">
						<input <?php checked( $layout, 'layout3', true ); ?> class="form-check-input" type="radio" name="layout" id="ccis_layout3" value="layout3">
						<label class="form-check-label" for="ccis_layout3"><?php esc_html_e( 'Layout 3', 'ccis' ); ?></label>
					</div>

					<div class="form-check form-check-inline">
						<input <?php checked( $layout, 'layout4', true ); ?> class="form-check-input" type="radio" name="layout" id="ccis_layout4" value="layout4">
						<label class="form-check-label" for="ccis_layout4"><?php esc_html_e( 'Layout 4', 'ccis' ); ?></label>
					</div>
				</span>
			</div>
		</div>

		<div class="row">
			<div class="col-xs-12 col-md-4 ccis-setting-col">
				<span class="ccis_setting_key">
					<?php esc_html_e( 'Display Slider Title', 'ccis' ); ?>
				</span>
			</div>
			<div class="col-xs-12 col-md-8 ccis-setting-col">
				<span class="ccis_setting_value">
					<div class="form-check form-check-inline">
						<input <?php checked( $display_slide_title, true, true ); ?> class="form-check-input" type="radio" name="display_slide_title" id="ccis_display_slide_title_1" value="1">
						<label class="form-check-label" for="ccis_display_slide_title_1">
							<span class="dashicons dashicons-yes"></span>
						</label>
					</div>

					<div class="form-check form-check-inline">
						<input <?php checked( $display_slide_title, false, true ); ?> class="form-check-input" type="radio" name="display_slide_title" id="ccis_display_slide_title_0" value="0">
						<label class="form-check-label" for="ccis_display_slide_title_0">
							<span class="dashicons dashicons-no"></span>
						</label>
					</div>

					<div class="ccis-setting-helper">
						<?php esc_html_e( 'Select Yes/No option to show/hide slide title above slider.', 'ccis' ); ?>
					</div>
				</span>
			</div>
		</div>
	</div>

	<!-- Settings: Layout 1 -->
	<div class="ccis-setting-layout ccis-setting-layout1">
		<div class="row">
			<div class="col-md-6">
				<div class="card">
					<div class="row">
						<div class="col-xs-12 col-md-4 ccis-setting-col">
							<span class="ccis_setting_key">
								<?php esc_html_e( 'Autoplay', 'ccis' ); ?>
							</span>
						</div>
						<div class="col-xs-12 col-md-8 ccis-setting-col">
							<span class="ccis_setting_value">
								<div class="form-check form-check-inline">
									<input <?php checked( $l1_autoplay, true, true ); ?> class="form-check-input" type="radio" name="l1_autoplay" id="ccis_l1_autoplay_1" value="1">
									<label class="form-check-label" for="ccis_l1_autoplay_1">
										<span class="dashicons dashicons-yes"></span>
									</label>
								</div>

								<div class="form-check form-check-inline">
									<input <?php checked( $l1_autoplay, false, true ); ?> class="form-check-input" type="radio" name="l1_autoplay" id="ccis_l1_autoplay_0" value="0">
									<label class="form-check-label" for="ccis_l1_autoplay_0">
										<span class="dashicons dashicons-no"></span>
									</label>
								</div>

								<div class="ccis-setting-helper">
								<?php esc_html_e( 'Select Yes/No option to enable/disable slider autoplay.', 'ccis' ); ?>
								</div>
							</span>
						</div>
					</div>
					<div class="row">
						<div class="col-xs-12 col-md-4 ccis-setting-col">
							<span class="ccis_setting_key">
								<?php esc_html_e( 'Autoplay Interval', 'ccis' ); ?>
							</span>
						</div>
						<div class="col-xs-12 col-md-8 ccis-setting-col">
							<span class="ccis_setting_value">
								<div class="form-group">
									<input name="l1_autoplay_interval" type="number" id="ccis_l1_autoplay_interval" value="<?php echo esc_attr( $l1_autoplay_interval ); ?>" step="1" min="1">
								</div>

								<div class="ccis-setting-helper">
									<?php esc_html_e( 'Set the delay/interval (in milliseconds) at which the autoplay will run. Default value is "5000".', 'ccis' ); ?>
								</div>
							</span>
						</div>
					</div>
					<div class="row">
						<div class="col-xs-12 col-md-4 ccis-setting-col">
							<span class="ccis_setting_key">
								<?php esc_html_e( 'Autoplay on Hover', 'ccis' ); ?>
							</span>
						</div>
						<div class="col-xs-12 col-md-8 ccis-setting-col">
							<span class="ccis_setting_value">
								<div class="form-check form-check-inline">
									<input <?php checked( $l1_autoplay_on_hover, 'pause', true ); ?> class="form-check-input" type="radio" name="l1_autoplay_on_hover" id="ccis_l1_autoplay_pause" value="pause">
									<label class="form-check-label" for="ccis_l1_autoplay_pause">
										<?php esc_html_e( 'Pause', 'ccis' ); ?>
									</label>
								</div>

								<div class="form-check form-check-inline">
									<input <?php checked( $l1_autoplay_on_hover, 'stop', true ); ?> class="form-check-input" type="radio" name="l1_autoplay_on_hover" id="ccis_l1_autoplay_stop" value="stop">
									<label class="form-check-label" for="ccis_l1_autoplay_stop">
										<?php esc_html_e( 'Stop', 'ccis' ); ?>
									</label>
								</div>

								<div class="form-check form-check-inline">
									<input <?php checked( $l1_autoplay_on_hover, 'none', true ); ?> class="form-check-input" type="radio" name="l1_autoplay_on_hover" id="ccis_l1_autoplay_none" value="none">
									<label class="form-check-label" for="ccis_l1_autoplay_none">
										<?php esc_html_e( 'None', 'ccis' ); ?>
									</label>
								</div>

								<div class="ccis-setting-helper">
									<?php esc_html_e( 'Select whether the autoplay will be paused or stopped when the slider is hovered.', 'ccis' ); ?>
								</div>
							</span>
						</div>
					</div>
					<div class="row">
						<div class="col-xs-12 col-md-4 ccis-setting-col">
							<span class="ccis_setting_key">
								<?php esc_html_e( 'Full Screen', 'ccis' ); ?>
							</span>
						</div>
						<div class="col-xs-12 col-md-8 ccis-setting-col">
							<span class="ccis_setting_value">
								<div class="form-check form-check-inline">
									<input <?php checked( $l1_full_screen, true, true ); ?> class="form-check-input" type="radio" name="l1_full_screen" id="ccis_l1_full_screen_1" value="1">
									<label class="form-check-label" for="ccis_l1_full_screen_1">
										<span class="dashicons dashicons-yes"></span>
									</label>
								</div>

								<div class="form-check form-check-inline">
									<input <?php checked( $l1_full_screen, false, true ); ?> class="form-check-input" type="radio" name="l1_full_screen" id="ccis_l1_full_screen_0" value="0">
									<label class="form-check-label" for="ccis_l1_full_screen_0">
										<span class="dashicons dashicons-no"></span>
									</label>
								</div>

								<div class="ccis-setting-helper">
								<?php esc_html_e( 'Select whether the full-screen button is enabled.', 'ccis' ); ?>
								</div>
							</span>
						</div>
					</div>
					<div class="row">
						<div class="col-xs-12 col-md-4 ccis-setting-col">
							<span class="ccis_setting_key">
								<?php esc_html_e( 'Width', 'ccis' ); ?>
							</span>
						</div>
						<div class="col-xs-12 col-md-8 ccis-setting-col">
							<span class="ccis_setting_value">
								<div class="form-check form-check-inline">
									<input <?php checked( $l1_width_type, 'fixed', true ); ?> class="form-check-input" type="radio" name="l1_width_type" id="ccis_l1_width_type_fixed" value="fixed">
									<label class="form-check-label" for="ccis_l1_width_type_fixed">
										<?php esc_html_e( 'Fixed Value', 'ccis' ); ?>
									</label>
								</div>

								<div class="form-check form-check-inline">
									<input <?php checked( $l1_width_type, 'percentage', true ); ?> class="form-check-input" type="radio" name="l1_width_type" id="ccis_l1_width_type_percentage" value="percentage">
									<label class="form-check-label" for="ccis_l1_width_type_percentage">
										<?php esc_html_e( 'Percentage Value', 'ccis' ); ?>
									</label>
								</div>

								<div class="ccis_l1_width ccis_l1_width_fixed">
									<div class="form-group mt-2">
										<input name="l1_width_fixed" type="number" id="ccis_l1_width_fixed" value="<?php echo esc_attr( $l1_width_fixed ); ?>" step="any" min="1">
									</div>

									<div class="ccis-setting-helper">
										<?php esc_html_e( 'Set the width of the slide. Can be set to a fixed value, like "900" (indicating 900 pixels). Default value is "500".', 'ccis' ); ?>
									</div>
								</div>

								<div class="ccis_l1_width ccis_l1_width_percentage">
									<div class="form-group mt-2">
										<input name="l1_width_percentage" type="number" id="ccis_l1_width_percentage" value="<?php echo esc_attr( $l1_width_percentage ); ?>" step="any" min="1" max="100"> %
									</div>

									<div class="ccis-setting-helper">
									<?php esc_html_e( 'Set the width of the slide. Can be set to a percentage value, like "100". Default value is "100".', 'ccis' ); ?>
									</div>
								</div>
							</span>
						</div>
					</div>
					<div class="row">
						<div class="col-xs-12 col-md-4 ccis-setting-col">
							<span class="ccis_setting_key">
								<?php esc_html_e( 'Force Size', 'ccis' ); ?>
							</span>
						</div>
						<div class="col-xs-12 col-md-8 ccis-setting-col">
							<span class="ccis_setting_value">
								<div class="form-check form-check-inline">
									<input <?php checked( $l1_force_size, 'none', true ); ?> class="form-check-input" type="radio" name="l1_force_size" id="ccis_l1_force_size_none" value="none">
									<label class="form-check-label" for="ccis_l1_force_size_none">
										<?php esc_html_e( 'None', 'ccis' ); ?>
									</label>
								</div>
								<div class="form-check form-check-inline">
									<input <?php checked( $l1_force_size, 'fullWidth', true ); ?> class="form-check-input" type="radio" name="l1_force_size" id="ccis_l1_force_size_full_width" value="fullWidth">
									<label class="form-check-label" for="ccis_l1_force_size_full_width">
										<?php esc_html_e( 'Full Width', 'ccis' ); ?>
									</label>
								</div>
								<div class="form-check form-check-inline">
									<input <?php checked( $l1_force_size, 'fullWindow', true ); ?> class="form-check-input" type="radio" name="l1_force_size" id="ccis_l1_force_size_full_window" value="fullWindow">
									<label class="form-check-label" for="ccis_l1_force_size_full_window">
										<?php esc_html_e( 'Full Window', 'ccis' ); ?>
									</label>
								</div>

								<div class="ccis-setting-helper">
									<?php esc_html_e( 'Select whether the size of the slider will be forced to full width or full window. Default value is "None".', 'ccis' ); ?>
								</div>
							</span>
						</div>
					</div>
					<div class="row">
						<div class="col-xs-12 col-md-4 ccis-setting-col">
							<span class="ccis_setting_key">
								<?php esc_html_e( 'Height', 'ccis' ); ?>
							</span>
						</div>
						<div class="col-xs-12 col-md-8 ccis-setting-col">
							<span class="ccis_setting_value">
								<div class="form-check form-check-inline">
									<input <?php checked( $l1_height_type, 'fixed', true ); ?> class="form-check-input" type="radio" name="l1_height_type" id="ccis_l1_height_type_fixed" value="fixed">
									<label class="form-check-label" for="ccis_l1_height_type_fixed">
										<?php esc_html_e( 'Fixed Value', 'ccis' ); ?>
									</label>
								</div>

								<div class="form-check form-check-inline">
									<input <?php checked( $l1_height_type, 'percentage', true ); ?> class="form-check-input" type="radio" name="l1_height_type" id="ccis_l1_height_type_percentage" value="percentage">
									<label class="form-check-label" for="ccis_l1_height_type_percentage">
										<?php esc_html_e( 'Percentage Value', 'ccis' ); ?>
									</label>
								</div>

								<div class="ccis_l1_height ccis_l1_height_fixed">
									<div class="form-group mt-2">
										<input name="l1_height_fixed" type="number" id="ccis_l1_height_fixed" value="<?php echo esc_attr( $l1_height_fixed ); ?>" step="any" min="1">
									</div>

									<div class="ccis-setting-helper">
										<?php esc_html_e( 'Set the height of the slide. Can be set to a fixed value, like "300" (indicating 300 pixels). Default value is "300".', 'ccis' ); ?>
									</div>
								</div>

								<div class="ccis_l1_height ccis_l1_height_percentage">
									<div class="form-group mt-2">
										<input name="l1_height_percentage" type="number" id="ccis_l1_height_percentage" value="<?php echo esc_attr( $l1_height_percentage ); ?>" step="any" min="1" max="100"> %
									</div>

									<div class="ccis-setting-helper">
										<?php esc_html_e( 'Set the height of the slide. Can be set to a percentage value, like "100". Default value is "100".', 'ccis' ); ?>
									</div>
								</div>
							</span>
						</div>
					</div>
					<div class="row">
						<div class="col-xs-12 col-md-4 ccis-setting-col">
							<span class="ccis_setting_key">
								<?php esc_html_e( 'Auto Height', 'ccis' ); ?>
							</span>
						</div>
						<div class="col-xs-12 col-md-8 ccis-setting-col">
							<span class="ccis_setting_value">
								<div class="form-check form-check-inline">
									<input <?php checked( $l1_auto_height, true, true ); ?> class="form-check-input" type="radio" name="l1_auto_height" id="ccis_l1_auto_height_1" value="1">
									<label class="form-check-label" for="ccis_l1_auto_height_1">
										<span class="dashicons dashicons-yes"></span>
									</label>
								</div>

								<div class="form-check form-check-inline">
									<input <?php checked( $l1_auto_height, false, true ); ?> class="form-check-input" type="radio" name="l1_auto_height" id="ccis_l1_auto_height_0" value="0">
									<label class="form-check-label" for="ccis_l1_auto_height_0">
										<span class="dashicons dashicons-no"></span>
									</label>
								</div>

								<div class="ccis-setting-helper">
									<?php esc_html_e( 'Select Yes/No option to set if the height of the slider will be adjusted to the height of the selected slide.', 'ccis' ); ?>
								</div>
							</span>
						</div>
					</div>
					<div class="row">
						<div class="col-xs-12 col-md-4 ccis-setting-col">
							<span class="ccis_setting_key">
								<?php esc_html_e( 'Fade', 'ccis' ); ?>
							</span>
						</div>
						<div class="col-xs-12 col-md-8 ccis-setting-col">
							<span class="ccis_setting_value">
								<div class="form-check form-check-inline">
									<input <?php checked( $l1_fade, true, true ); ?> class="form-check-input" type="radio" name="l1_fade" id="ccis_l1_fade_1" value="1">
									<label class="form-check-label" for="ccis_l1_fade_1">
										<span class="dashicons dashicons-yes"></span>
									</label>
								</div>

								<div class="form-check form-check-inline">
									<input <?php checked( $l1_fade, false, true ); ?> class="form-check-input" type="radio" name="l1_fade" id="ccis_l1_fade_0" value="0">
									<label class="form-check-label" for="ccis_l1_fade_0">
										<span class="dashicons dashicons-no"></span>
									</label>
								</div>

								<div class="ccis-setting-helper">
									<?php esc_html_e( 'Select Yes/No option to set if fade will be used.', 'ccis' ); ?>
								</div>
							</span>
						</div>
					</div>
					<div class="row">
						<div class="col-xs-12 col-md-4 ccis-setting-col">
							<span class="ccis_setting_key">
								<?php esc_html_e( 'Image Scale Mode', 'ccis' ); ?>
							</span>
						</div>
						<div class="col-xs-12 col-md-8 ccis-setting-col">
							<span class="ccis_setting_value">
								<div class="form-group">
									<select name="l1_image_scale_mode" id="ccis_l1_image_scale_mode">
										<option <?php selected( $l1_image_scale_mode, 'cover', true ); ?> value="cover"><?php esc_html_e( 'Cover', 'ccis' ); ?></option>
										<option <?php selected( $l1_image_scale_mode, 'contain', true ); ?> value="contain"><?php esc_html_e( 'Contain', 'ccis' ); ?></option>
										<option <?php selected( $l1_image_scale_mode, 'exact', true ); ?> value="exact"><?php esc_html_e( 'Exact', 'ccis' ); ?></option>
										<option <?php selected( $l1_image_scale_mode, 'none', true ); ?> value="none"><?php esc_html_e( 'None', 'ccis' ); ?></option>
									</select>
								</div>

								<div class="ccis-setting-helper">
									<?php esc_html_e( 'Set the scale mode of the main slide images. "Cover" will scale and crop the image so that it fills the entire slide. "Contain" will keep the entire image visible inside the slide. "Exact" will match the size of the image to the size of the slide. "None" will leave the image to its original size. Default value is "Cover".', 'ccis' ); ?>
								</div>
							</span>
						</div>
					</div>
					<div class="row">
						<div class="col-xs-12 col-md-4 ccis-setting-col">
							<span class="ccis_setting_key">
								<?php esc_html_e( 'Slide Distance', 'ccis' ); ?>
							</span>
						</div>
						<div class="col-xs-12 col-md-8 ccis-setting-col">
							<span class="ccis_setting_value">
								<div class="form-group">
									<input name="l1_slide_distance" type="number" id="ccis_l1_slide_distance" value="<?php echo esc_attr( $l1_slide_distance ); ?>" step="1" min="0">
								</div>

								<div class="ccis-setting-helper">
									<?php esc_html_e( 'Set the distance between the slides. Default value is "10".', 'ccis' ); ?>
								</div>
							</span>
						</div>
					</div>
					<div class="row">
						<div class="col-xs-12 col-md-4 ccis-setting-col">
							<span class="ccis_setting_key">
								<?php esc_html_e( 'Orientation', 'ccis' ); ?>
							</span>
						</div>
						<div class="col-xs-12 col-md-8 ccis-setting-col">
							<span class="ccis_setting_value">
								<div class="form-check form-check-inline">
									<input <?php checked( $l1_orientation, 'horizontal', true ); ?> class="form-check-input" type="radio" name="l1_orientation" id="ccis_l1_orientation_horizontal" value="horizontal">
									<label class="form-check-label" for="ccis_l1_orientation_horizontal">
										<?php esc_html_e( 'Horizontal', 'ccis' ); ?>
									</label>
								</div>

								<div class="form-check form-check-inline">
									<input <?php checked( $l1_orientation, 'vertical', true ); ?> class="form-check-input" type="radio" name="l1_orientation" id="ccis_l1_orientation_vertical" value="vertical">
									<label class="form-check-label" for="ccis_l1_orientation_vertical">
										<?php esc_html_e( 'Vertical', 'ccis' ); ?>
									</label>
								</div>

								<div class="ccis-setting-helper">
									<?php esc_html_e( 'Select whether the slides will be arranged horizontally or vertically.', 'ccis' ); ?>
								</div>
							</span>
						</div>
					</div>
					<div class="row">
						<div class="col-xs-12 col-md-4 ccis-setting-col">
							<span class="ccis_setting_key">
								<?php esc_html_e( 'Navigation Buttons', 'ccis' ); ?>
							</span>
						</div>
						<div class="col-xs-12 col-md-8 ccis-setting-col">
							<span class="ccis_setting_value">
								<div class="form-check form-check-inline">
									<input <?php checked( $l1_navigation, true, true ); ?> class="form-check-input" type="radio" name="l1_navigation" id="ccis_l1_navigation_1" value="1">
									<label class="form-check-label" for="ccis_l1_navigation_1">
										<span class="dashicons dashicons-yes"></span>
									</label>
								</div>

								<div class="form-check form-check-inline">
									<input <?php checked( $l1_navigation, false, true ); ?> class="form-check-input" type="radio" name="l1_navigation" id="ccis_l1_navigation_0" value="0">
									<label class="form-check-label" for="ccis_l1_navigation_0">
										<span class="dashicons dashicons-no"></span>
									</label>
								</div>

								<div class="ccis-setting-helper">
									<?php esc_html_e( 'Select Yes/No option to add/remove navigation buttons below the slider.', 'ccis' ); ?>
								</div>
							</span>
						</div>
					</div>
					<div class="row">
						<div class="col-xs-12 col-md-4 ccis-setting-col">
							<span class="ccis_setting_key">
								<?php esc_html_e( 'Shuffle Slides', 'ccis' ); ?>
							</span>
						</div>
						<div class="col-xs-12 col-md-8 ccis-setting-col">
							<span class="ccis_setting_value">
								<div class="form-check form-check-inline">
									<input <?php checked( $l1_shuffle, true, true ); ?> class="form-check-input" type="radio" name="l1_shuffle" id="ccis_l1_shuffle_1" value="1">
									<label class="form-check-label" for="ccis_l1_shuffle_1">
										<span class="dashicons dashicons-yes"></span>
									</label>
								</div>

								<div class="form-check form-check-inline">
									<input <?php checked( $l1_shuffle, false, true ); ?> class="form-check-input" type="radio" name="l1_shuffle" id="ccis_l1_shuffle_0" value="0">
									<label class="form-check-label" for="ccis_l1_shuffle_0">
										<span class="dashicons dashicons-no"></span>
									</label>
								</div>

								<div class="ccis-setting-helper">
									<?php esc_html_e( 'Select Yes/No option to set if the slides will be shuffled.', 'ccis' ); ?>
								</div>
							</span>
						</div>
					</div>
					<div class="row">
						<div class="col-xs-12 col-md-4 ccis-setting-col">
							<span class="ccis_setting_key">
								<?php esc_html_e( 'Arrows', 'ccis' ); ?>
							</span>
						</div>
						<div class="col-xs-12 col-md-8 ccis-setting-col">
							<span class="ccis_setting_value">
								<div class="form-check form-check-inline">
									<input <?php checked( $l1_arrows, true, true ); ?> class="form-check-input" type="radio" name="l1_arrows" id="ccis_l1_arrows_1" value="1">
									<label class="form-check-label" for="ccis_l1_arrows_1">
										<span class="dashicons dashicons-yes"></span>
									</label>
								</div>

								<div class="form-check form-check-inline">
									<input <?php checked( $l1_arrows, false, true ); ?> class="form-check-input" type="radio" name="l1_arrows" id="ccis_l1_arrows_0" value="0">
									<label class="form-check-label" for="ccis_l1_arrows_0">
										<span class="dashicons dashicons-no"></span>
									</label>
								</div>

								<div class="ccis-setting-helper">
									<?php esc_html_e( 'Select Yes/No option to set if the arrow buttons will be created.', 'ccis' ); ?>
								</div>
							</span>
						</div>
					</div>
					<div class="row">
						<div class="col-xs-12 col-md-4 ccis-setting-col">
							<span class="ccis_setting_key">
								<?php esc_html_e( 'Open Link in New Tab', 'ccis' ); ?>
							</span>
						</div>
						<div class="col-xs-12 col-md-8 ccis-setting-col">
							<span class="ccis_setting_value">
								<div class="form-check form-check-inline">
									<input <?php checked( $l1_link_new_tab, true, true ); ?> class="form-check-input" type="radio" name="l1_link_new_tab" id="ccis_l1_link_new_tab_1" value="1">
									<label class="form-check-label" for="ccis_l1_link_new_tab_1">
										<span class="dashicons dashicons-yes"></span>
									</label>
								</div>

								<div class="form-check form-check-inline">
									<input <?php checked( $l1_link_new_tab, false, true ); ?> class="form-check-input" type="radio" name="l1_link_new_tab" id="ccis_l1_link_new_tab_0" value="0">
									<label class="form-check-label" for="ccis_l1_link_new_tab_0">
										<span class="dashicons dashicons-no"></span>
									</label>
								</div>

								<div class="ccis-setting-helper">
								<?php esc_html_e( 'Select Yes/No option to set whether link opens in a new tab.', 'ccis' ); ?>
								</div>
							</span>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-6">
				<div class="card">
					<div class="row">
						<div class="col-xs-12 col-md-4 ccis-setting-col">
							<span class="ccis_setting_key">
								<?php esc_html_e( 'Show Thumbnails', 'ccis' ); ?>
							</span>
						</div>
						<div class="col-xs-12 col-md-8 ccis-setting-col">
							<span class="ccis_setting_value">
								<div class="form-check form-check-inline">
									<input <?php checked( $l1_show_thumbnails, true, true ); ?> class="form-check-input" type="radio" name="l1_show_thumbnails" id="ccis_l1_show_thumbnails_1" value="1">
									<label class="form-check-label" for="ccis_l1_show_thumbnails_1">
										<span class="dashicons dashicons-yes"></span>
									</label>
								</div>

								<div class="form-check form-check-inline">
									<input <?php checked( $l1_show_thumbnails, false, true ); ?> class="form-check-input" type="radio" name="l1_show_thumbnails" id="ccis_l1_show_thumbnails_0" value="0">
									<label class="form-check-label" for="ccis_l1_show_thumbnails_0">
										<span class="dashicons dashicons-no"></span>
									</label>
								</div>

								<div class="ccis-setting-helper">
									<?php esc_html_e( 'Select Yes/No option to show/hide thumbnails.', 'ccis' ); ?>
								</div>
							</span>
						</div>
					</div>
					<div class="row">
						<div class="col-xs-12 col-md-4 ccis-setting-col">
							<span class="ccis_setting_key">
								<?php esc_html_e( 'Thumbnail Type', 'ccis' ); ?>
							</span>
						</div>
						<div class="col-xs-12 col-md-8 ccis-setting-col">
							<span class="ccis_setting_value">
								<div class="form-check form-check-inline">
									<input <?php checked( $l1_thumbnail_type, 'image', true ); ?> class="form-check-input" type="radio" name="l1_thumbnail_type" id="ccis_l1_thumbnail_type_image" value="image">
									<label class="form-check-label" for="ccis_l1_thumbnail_type_image">
										<?php esc_html_e( 'Image', 'ccis' ); ?>
									</label>
								</div>

								<div class="form-check form-check-inline">
									<input <?php checked( $l1_thumbnail_type, 'text', true ); ?> class="form-check-input" type="radio" name="l1_thumbnail_type" id="ccis_l1_thumbnail_type_text" value="text">
									<label class="form-check-label" for="ccis_l1_thumbnail_type_text">
										<?php esc_html_e( 'Text', 'ccis' ); ?>
									</label>
								</div>

								<div class="ccis-setting-helper">
									<?php esc_html_e( 'Select thumbnail type.', 'ccis' ); ?>
								</div>
							</span>
						</div>
					</div>
					<div class="row">
						<div class="col-xs-12 col-md-4 ccis-setting-col">
							<span class="ccis_setting_key">
								<?php esc_html_e( 'Thumbnail Arrows', 'ccis' ); ?>
							</span>
						</div>
						<div class="col-xs-12 col-md-8 ccis-setting-col">
							<span class="ccis_setting_value">
								<div class="form-check form-check-inline">
									<input <?php checked( $l1_thumbnail_arrows, true, true ); ?> class="form-check-input" type="radio" name="l1_thumbnail_arrows" id="ccis_l1_thumbnail_arrows_1" value="1">
									<label class="form-check-label" for="ccis_l1_thumbnail_arrows_1">
										<span class="dashicons dashicons-yes"></span>
									</label>
								</div>

								<div class="form-check form-check-inline">
									<input <?php checked( $l1_thumbnail_arrows, false, true ); ?> class="form-check-input" type="radio" name="l1_thumbnail_arrows" id="ccis_l1_thumbnail_arrows_0" value="0">
									<label class="form-check-label" for="ccis_l1_thumbnail_arrows_0">
										<span class="dashicons dashicons-no"></span>
									</label>
								</div>

								<div class="ccis-setting-helper">
									<?php esc_html_e( 'Select Yes/No option to set if the thumbnail arrows will be enabled.', 'ccis' ); ?>
								</div>
							</span>
						</div>
					</div>
					<div class="row">
						<div class="col-xs-12 col-md-4 ccis-setting-col">
							<span class="ccis_setting_key">
								<?php esc_html_e( 'Thumbnail Pointer', 'ccis' ); ?>
							</span>
						</div>
						<div class="col-xs-12 col-md-8 ccis-setting-col">
							<span class="ccis_setting_value">
								<div class="form-check form-check-inline">
									<input <?php checked( $l1_thumbnail_pointer, true, true ); ?> class="form-check-input" type="radio" name="l1_thumbnail_pointer" id="ccis_l1_thumbnail_pointer_1" value="1">
									<label class="form-check-label" for="ccis_l1_thumbnail_arrows_1">
										<span class="dashicons dashicons-yes"></span>
									</label>
								</div>

								<div class="form-check form-check-inline">
									<input <?php checked( $l1_thumbnail_pointer, false, true ); ?> class="form-check-input" type="radio" name="l1_thumbnail_pointer" id="ccis_l1_thumbnail_pointer_0" value="0">
									<label class="form-check-label" for="ccis_l1_thumbnail_arrows_0">
										<span class="dashicons dashicons-no"></span>
									</label>
								</div>

								<div class="ccis-setting-helper">
									<?php esc_html_e( 'Select Yes/No option to indicate if a pointer will be displayed for the selected thumbnail.', 'ccis' ); ?>
								</div>
							</span>
						</div>
					</div>
					<div class="row">
						<div class="col-xs-12 col-md-4 ccis-setting-col">
							<span class="ccis_setting_key">
								<?php esc_html_e( 'Thumbnail Pointer Color', 'ccis' ); ?>
							</span>
						</div>
						<div class="col-xs-12 col-md-8 ccis-setting-col">
							<span class="ccis_setting_value">
								<div class="form-group">
									<input name="l1_thumbnail_pointer_color" type="text" class="color-picker" id="ccis_l1_thumbnail_pointer_color" value="<?php echo esc_attr( $l1_thumbnail_pointer_color ); ?>">
								</div>

								<div class="ccis-setting-helper">
									<?php esc_html_e( 'Choose color for thumbnail pointer.', 'ccis' ); ?>
								</div>
							</span>
						</div>
					</div>
					<div class="row">
						<div class="col-xs-12 col-md-4 ccis-setting-col">
							<span class="ccis_setting_key">
								<?php esc_html_e( 'Thumbnails Position', 'ccis' ); ?>
							</span>
						</div>
						<div class="col-xs-12 col-md-8 ccis-setting-col">
							<span class="ccis_setting_value">
								<div class="form-group">
									<select name="l1_thumbnails_position" id="ccis_l1_thumbnails_position">
										<option <?php selected( $l1_thumbnails_position, 'top', true ); ?> value="top"><?php esc_html_e( 'Top', 'ccis' ); ?></option>
										<option <?php selected( $l1_thumbnails_position, 'bottom', true ); ?> value="bottom"><?php esc_html_e( 'Bottom', 'ccis' ); ?></option>
										<option <?php selected( $l1_thumbnails_position, 'right', true ); ?> value="right"><?php esc_html_e( 'Right', 'ccis' ); ?></option>
										<option <?php selected( $l1_thumbnails_position, 'left', true ); ?> value="left"><?php esc_html_e( 'Left', 'ccis' ); ?></option>
									</select>
								</div>

								<div class="ccis-setting-helper">
									<?php esc_html_e( 'Select the position of the thumbnail scroller. Default value is "bottom".', 'ccis' ); ?>
								</div>
							</span>
						</div>
					</div>
					<div class="row">
						<div class="col-xs-12 col-md-4 ccis-setting-col">
							<span class="ccis_setting_key">
								<?php esc_html_e( 'Thumbnail Width', 'ccis' ); ?>
							</span>
						</div>
						<div class="col-xs-12 col-md-8 ccis-setting-col">
							<span class="ccis_setting_value">
								<div class="form-group">
									<input name="l1_thumbnail_width" type="number" id="ccis_l1_thumbnail_width" value="<?php echo esc_attr( $l1_thumbnail_width ); ?>" step="1" min="0">
								</div>

								<div class="ccis-setting-helper">
									<?php esc_html_e( 'Set the width of the thumbnail. Default value is "100".', 'ccis' ); ?>
								</div>
							</span>
						</div>
					</div>
					<div class="row">
						<div class="col-xs-12 col-md-4 ccis-setting-col">
							<span class="ccis_setting_key">
								<?php esc_html_e( 'Thumbnail Height', 'ccis' ); ?>
							</span>
						</div>
						<div class="col-xs-12 col-md-8 ccis-setting-col">
							<span class="ccis_setting_value">
								<div class="form-group">
									<input name="l1_thumbnail_height" type="number" id="ccis_l1_thumbnail_height" value="<?php echo esc_attr( $l1_thumbnail_height ); ?>" step="1" min="0">
								</div>

								<div class="ccis-setting-helper">
									<?php esc_html_e( 'Set the height of the thumbnail. Default value is "80".', 'ccis' ); ?>
								</div>
							</span>
						</div>
					</div>
					<div class="row">
						<div class="col-xs-12 col-md-4 ccis-setting-col">
							<span class="ccis_setting_key">
								<?php esc_html_e( 'Title Link Color', 'ccis' ); ?>
							</span>
						</div>
						<div class="col-xs-12 col-md-8 ccis-setting-col">
							<span class="ccis_setting_value">
								<div class="form-group">
									<input name="l1_title_link_color" type="text" class="color-picker" id="ccis_l1_title_link_color" value="<?php echo esc_attr( $l1_title_link_color ); ?>">
								</div>

								<div class="ccis-setting-helper">
									<?php esc_html_e( 'Choose color for slide title link.', 'ccis' ); ?>
								</div>
							</span>
						</div>
					</div>
					<div class="row">
						<div class="col-xs-12 col-md-4 ccis-setting-col">
							<span class="ccis_setting_key">
								<?php esc_html_e( 'Layer Text Color', 'ccis' ); ?>
							</span>
						</div>
						<div class="col-xs-12 col-md-8 ccis-setting-col">
							<span class="ccis_setting_value">
								<div class="form-group">
									<input name="l1_layer_text_color" type="text" class="color-picker" id="ccis_l1_layer_text_color" value="<?php echo esc_attr( $l1_layer_text_color ); ?>">
								</div>

								<div class="ccis-setting-helper">
									<?php esc_html_e( 'Choose layer text color.', 'ccis' ); ?>
								</div>
							</span>
						</div>
					</div>
					<div class="row">
						<div class="col-xs-12 col-md-4 ccis-setting-col">
							<span class="ccis_setting_key">
								<?php esc_html_e( 'Layer Background Color', 'ccis' ); ?>
							</span>
						</div>
						<div class="col-xs-12 col-md-8 ccis-setting-col">
							<span class="ccis_setting_value">
								<div class="form-group">
									<input name="l1_layer_background_color" type="text" class="color-picker" id="ccis_l1_layer_background_color" value="<?php echo esc_attr( $l1_layer_background_color ); ?>">
								</div>

								<div class="ccis-setting-helper">
									<?php esc_html_e( 'Choose layer background color.', 'ccis' ); ?>
								</div>
							</span>
						</div>
					</div>
					<div class="row">
						<div class="col-xs-12 col-md-4 ccis-setting-col">
							<span class="ccis_setting_key">
								<?php esc_html_e( 'Layer Background Opacity', 'ccis' ); ?>
							</span>
						</div>
						<div class="col-xs-12 col-md-8 ccis-setting-col">
							<span class="ccis_setting_value">
								<div class="form-group">
									<select name="l1_layer_background_opacity" id="ccis_l1_layer_background_opacity">
										<?php foreach ( CCIS_Helper::layer_background_opacity() as $key => $value ) { ?>
										<option <?php selected( $l1_layer_background_opacity, $key, true ); ?> value="<?php echo esc_attr( $key ); ?>">
											<?php echo esc_html( $value ); ?>
										</option>
										<?php } ?>
									</select>
								</div>

								<div class="ccis-setting-helper">
									<?php esc_html_e( 'Choose layer background opacity.', 'ccis' ); ?>
								</div>
							</span>
						</div>
					</div>
					<div class="row">
						<div class="col-xs-12 col-md-4 ccis-setting-col">
							<span class="ccis_setting_key">
								<?php esc_html_e( 'Layer Title Font Size', 'ccis' ); ?>
							</span>
						</div>
						<div class="col-xs-12 col-md-8 ccis-setting-col">
							<span class="ccis_setting_value">
								<div class="form-group">
									<input name="l1_layer_title_font_size" type="number" id="ccis_l1_layer_title_font_size" value="<?php echo esc_attr( $l1_layer_title_font_size ); ?>" step="1" min="0">
								</div>

								<div class="ccis-setting-helper">
									<?php esc_html_e( 'Set the layer title font size. Default value is "18".', 'ccis' ); ?>
								</div>
							</span>
						</div>
					</div>
					<div class="row">
						<div class="col-xs-12 col-md-4 ccis-setting-col">
							<span class="ccis_setting_key">
								<?php esc_html_e( 'Layer Text Font Size', 'ccis' ); ?>
							</span>
						</div>
						<div class="col-xs-12 col-md-8 ccis-setting-col">
							<span class="ccis_setting_value">
								<div class="form-group">
									<input name="l1_layer_text_font_size" type="number" id="ccis_l1_layer_text_font_size" value="<?php echo esc_attr( $l1_layer_text_font_size ); ?>" step="1" min="0">
								</div>

								<div class="ccis-setting-helper">
									<?php esc_html_e( 'Set the layer text font size. Default value is "14".', 'ccis' ); ?>
								</div>
							</span>
						</div>
					</div>
					<div class="row">
						<div class="col-xs-12 col-md-4 ccis-setting-col">
							<span class="ccis_setting_key">
								<?php esc_html_e( 'Thumbnail Title Font Size', 'ccis' ); ?>
							</span>
						</div>
						<div class="col-xs-12 col-md-8 ccis-setting-col">
							<span class="ccis_setting_value">
								<div class="form-group">
									<input name="l1_thumbnail_title_font_size" type="number" id="ccis_l1_thumbnail_title_font_size" value="<?php echo esc_attr( $l1_thumbnail_title_font_size ); ?>" step="1" min="0">
								</div>

								<div class="ccis-setting-helper">
									<?php esc_html_e( 'Set the thumbnail title font size. Default value is "18".', 'ccis' ); ?>
								</div>
							</span>
						</div>
					</div>
					<div class="row">
						<div class="col-xs-12 col-md-4 ccis-setting-col">
							<span class="ccis_setting_key">
								<?php esc_html_e( 'Thumbnail Text Font Size', 'ccis' ); ?>
							</span>
						</div>
						<div class="col-xs-12 col-md-8 ccis-setting-col">
							<span class="ccis_setting_value">
								<div class="form-group">
									<input name="l1_thumbnail_text_font_size" type="number" id="ccis_l1_thumbnail_text_font_size" value="<?php echo esc_attr( $l1_thumbnail_text_font_size ); ?>" step="1" min="0">
								</div>

								<div class="ccis-setting-helper">
									<?php esc_html_e( 'Set the thumbnail text font size. Default value is "14".', 'ccis' ); ?>
								</div>
							</span>
						</div>
					</div>
					<div class="row">
						<div class="col-xs-12 col-md-4 ccis-setting-col">
							<span class="ccis_setting_key">
								<?php esc_html_e( 'Layer Text Alignment', 'ccis' ); ?>
							</span>
						</div>
						<div class="col-xs-12 col-md-8 ccis-setting-col">
							<span class="ccis_setting_value">
								<div class="form-check form-check-inline">
									<input <?php checked( $l1_layer_text_align, 'left', true ); ?> class="form-check-input" type="radio" name="l1_layer_text_align" id="ccis_l1_layer_text_align_left" value="left">
									<label class="form-check-label" for="ccis_l1_layer_text_align_left">
										<?php esc_html_e( 'Left', 'ccis' ); ?>
									</label>
								</div>

								<div class="form-check form-check-inline">
									<input <?php checked( $l1_layer_text_align, 'center', true ); ?> class="form-check-input" type="radio" name="l1_layer_text_align" id="ccis_l1_layer_text_align_center" value="center">
									<label class="form-check-label" for="ccis_l1_layer_text_align_center">
										<?php esc_html_e( 'Center', 'ccis' ); ?>
									</label>
								</div>

								<div class="form-check form-check-inline">
									<input <?php checked( $l1_layer_text_align, 'right', true ); ?> class="form-check-input" type="radio" name="l1_layer_text_align" id="ccis_l1_layer_text_align_right" value="right">
									<label class="form-check-label" for="ccis_l1_layer_text_align_right">
										<?php esc_html_e( 'Right', 'ccis' ); ?>
									</label>
								</div>

								<div class="ccis-setting-helper">
									<?php esc_html_e( 'Select layer text alignment.', 'ccis' ); ?>
								</div>
							</span>
						</div>
					</div>
					<div class="row">
						<div class="col-xs-12 col-md-4 ccis-setting-col">
							<span class="ccis_setting_key">
								<?php esc_html_e( 'Title Layer Position', 'ccis' ); ?>
							</span>
						</div>
						<div class="col-xs-12 col-md-8 ccis-setting-col">
							<span class="ccis_setting_value">
								<div class="form-group">
									<select name="l1_title_layer_position" id="ccis_l1_title_layer_position">
										<option <?php selected( $l1_title_layer_position, 'topLeft', true ); ?> value="topLeft"><?php esc_html_e( 'Top Left', 'ccis' ); ?></option>
										<option <?php selected( $l1_title_layer_position, 'topCenter', true ); ?> value="topCenter"><?php esc_html_e( 'Top Center', 'ccis' ); ?></option>
										<option <?php selected( $l1_title_layer_position, 'topRight', true ); ?> value="topRight"><?php esc_html_e( 'Top Right', 'ccis' ); ?></option>
										<option <?php selected( $l1_title_layer_position, 'bottomLeft', true ); ?> value="bottomLeft"><?php esc_html_e( 'Bottom Left', 'ccis' ); ?></option>
										<option <?php selected( $l1_title_layer_position, 'bottomCenter', true ); ?> value="bottomCenter"><?php esc_html_e( 'Bottom Center', 'ccis' ); ?></option>
										<option <?php selected( $l1_title_layer_position, 'bottomRight', true ); ?> value="bottomRight"><?php esc_html_e( 'Bottom Right', 'ccis' ); ?></option>
										<option <?php selected( $l1_title_layer_position, 'centerLeft', true ); ?> value="centerLeft"><?php esc_html_e( 'Center Left', 'ccis' ); ?></option>
										<option <?php selected( $l1_title_layer_position, 'centerRight', true ); ?> value="centerRight"><?php esc_html_e( 'Center Right', 'ccis' ); ?></option>
										<option <?php selected( $l1_title_layer_position, 'centerCenter', true ); ?> value="centerCenter"><?php esc_html_e( 'Center Center', 'ccis' ); ?></option>
									</select>
								</div>

								<div class="ccis-setting-helper">
									<?php esc_html_e( 'Select title layer position.', 'ccis' ); ?>
								</div>
							</span>
						</div>
					</div>
					<div class="row">
						<div class="col-xs-12 col-md-4 ccis-setting-col">
							<span class="ccis_setting_key">
								<?php esc_html_e( 'Text Layer Position', 'ccis' ); ?>
							</span>
						</div>
						<div class="col-xs-12 col-md-8 ccis-setting-col">
							<span class="ccis_setting_value">
								<div class="form-group">
									<select name="l1_text_layer_position" id="ccis_l1_text_layer_position">
										<option <?php selected( $l1_text_layer_position, 'topLeft', true ); ?> value="topLeft"><?php esc_html_e( 'Top Left', 'ccis' ); ?></option>
										<option <?php selected( $l1_text_layer_position, 'topCenter', true ); ?> value="topCenter"><?php esc_html_e( 'Top Center', 'ccis' ); ?></option>
										<option <?php selected( $l1_text_layer_position, 'topRight', true ); ?> value="topRight"><?php esc_html_e( 'Top Right', 'ccis' ); ?></option>
										<option <?php selected( $l1_text_layer_position, 'bottomLeft', true ); ?> value="bottomLeft"><?php esc_html_e( 'Bottom Left', 'ccis' ); ?></option>
										<option <?php selected( $l1_text_layer_position, 'bottomCenter', true ); ?> value="bottomCenter"><?php esc_html_e( 'Bottom Center', 'ccis' ); ?></option>
										<option <?php selected( $l1_text_layer_position, 'bottomRight', true ); ?> value="bottomRight"><?php esc_html_e( 'Bottom Right', 'ccis' ); ?></option>
										<option <?php selected( $l1_text_layer_position, 'centerLeft', true ); ?> value="centerLeft"><?php esc_html_e( 'Center Left', 'ccis' ); ?></option>
										<option <?php selected( $l1_text_layer_position, 'centerRight', true ); ?> value="centerRight"><?php esc_html_e( 'Center Right', 'ccis' ); ?></option>
										<option <?php selected( $l1_text_layer_position, 'centerCenter', true ); ?> value="centerCenter"><?php esc_html_e( 'Center Center', 'ccis' ); ?></option>
									</select>
								</div>

								<div class="ccis-setting-helper">
									<?php esc_html_e( 'Select text layer position.', 'ccis' ); ?>
								</div>
							</span>
						</div>
					</div>
					<div class="row">
						<div class="col-xs-12 col-md-4 ccis-setting-col">
							<span class="ccis_setting_key">
								<?php esc_html_e( 'Font Family', 'ccis' ); ?>
							</span>
						</div>
						<div class="col-xs-12 col-md-8 ccis-setting-col">
							<span class="ccis_setting_value">
								<div class="form-group">
									<input name="l1_font_family" type="text" id="ccis_l1_font_family" value="<?php echo esc_attr( $l1_font_family ); ?>">
								</div>

								<div class="ccis-setting-helper">
									<?php esc_html_e( 'Select the font family.', 'ccis' ); ?>
								</div>
							</span>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-12 col-md-4 ccis-setting-col">
				<span class="ccis_setting_key">
					<?php esc_html_e( 'Custom CSS', 'ccis' ); ?>
				</span>
			</div>
			<div class="col-xs-12 col-md-8 ccis-setting-col">
				<span class="ccis_setting_value">
					<div class="form-group">
						<textarea name="l1_custom_css" class="form-control ccis-custom-css" id="ccis_l1_custom_css"><?php echo esc_html( $l1_custom_css ); ?></textarea>
					</div>

					<div class="ccis-setting-helper">
						<?php esc_html_e( 'Enter any custom css into textarea field you want to apply on this slider.', 'ccis' ); ?>
						<div class="alert alert-secondary">
							<?php esc_html_e( 'Note: Please Do Not Use Style Tag With Custom CSS', 'ccis' ); ?>
						</div>
					</div>
				</span>
			</div>
		</div>
	</div>

	<!-- Settings: Layout 2 -->
	<div class="ccis-setting-layout ccis-setting-layout2">
		<div class="row">
			<div class="col-xs-12 col-md-4 ccis-setting-col">
				<span class="ccis_setting_key">
					<?php esc_html_e( 'Show Thumbnails', 'ccis' ); ?>
				</span>
			</div>
			<div class="col-xs-12 col-md-8 ccis-setting-col">
				<span class="ccis_setting_value">
					<div class="form-check form-check-inline">
						<input <?php checked( $l2_show_thumbnails, true, true ); ?> class="form-check-input" type="radio" name="l2_show_thumbnails" id="ccis_l2_show_thumbnails_1" value="1">
						<label class="form-check-label" for="ccis_l2_show_thumbnails_1">
							<span class="dashicons dashicons-yes"></span>
						</label>
					</div>

					<div class="form-check form-check-inline">
						<input <?php checked( $l2_show_thumbnails, false, true ); ?> class="form-check-input" type="radio" name="l2_show_thumbnails" id="ccis_l2_show_thumbnails_0" value="0">
						<label class="form-check-label" for="ccis_l2_show_thumbnails_0">
							<span class="dashicons dashicons-no"></span>
						</label>
					</div>

					<div class="ccis-setting-helper">
						<?php esc_html_e( 'Select Yes/No option to show/hide thumbnails on start.', 'ccis' ); ?>
					</div>
				</span>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-12 col-md-4 ccis-setting-col">
				<span class="ccis_setting_key">
					<?php esc_html_e( 'Show Toolbar', 'ccis' ); ?>
				</span>
			</div>
			<div class="col-xs-12 col-md-8 ccis-setting-col">
				<span class="ccis_setting_value">
					<div class="form-check form-check-inline">
						<input <?php checked( $l2_show_toolbar, true, true ); ?> class="form-check-input" type="radio" name="l2_show_toolbar" id="ccis_l2_show_toolbar_1" value="1">
						<label class="form-check-label" for="ccis_l2_show_toolbar_1">
							<span class="dashicons dashicons-yes"></span>
						</label>
					</div>

					<div class="form-check form-check-inline">
						<input <?php checked( $l2_show_toolbar, false, true ); ?> class="form-check-input" type="radio" name="l2_show_toolbar" id="ccis_l2_show_toolbar_0" value="0">
						<label class="form-check-label" for="ccis_l2_show_toolbar_0">
							<span class="dashicons dashicons-no"></span>
						</label>
					</div>

					<div class="ccis-setting-helper">
						<?php esc_html_e( 'Select Yes/No option to show/hide toolbar.', 'ccis' ); ?>
					</div>
				</span>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-12 col-md-4 ccis-setting-col">
				<span class="ccis_setting_key">
					<?php esc_html_e( 'Show Counter', 'ccis' ); ?>
				</span>
			</div>
			<div class="col-xs-12 col-md-8 ccis-setting-col">
				<span class="ccis_setting_value">
					<div class="form-check form-check-inline">
						<input <?php checked( $l2_show_infobar, true, true ); ?> class="form-check-input" type="radio" name="l2_show_infobar" id="ccis_l2_show_infobar_1" value="1">
						<label class="form-check-label" for="ccis_l2_show_infobar_1">
							<span class="dashicons dashicons-yes"></span>
						</label>
					</div>

					<div class="form-check form-check-inline">
						<input <?php checked( $l2_show_infobar, false, true ); ?> class="form-check-input" type="radio" name="l2_show_infobar" id="ccis_l2_show_infobar_0" value="0">
						<label class="form-check-label" for="ccis_l2_show_infobar_0">
							<span class="dashicons dashicons-no"></span>
						</label>
					</div>

					<div class="ccis-setting-helper">
						<?php esc_html_e( 'Select Yes/No option to show/hide counter at the top left corner.', 'ccis' ); ?>
					</div>
				</span>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-12 col-md-4 ccis-setting-col">
				<span class="ccis_setting_key">
					<?php esc_html_e( 'Arrows', 'ccis' ); ?>
				</span>
			</div>
			<div class="col-xs-12 col-md-8 ccis-setting-col">
				<span class="ccis_setting_value">
					<div class="form-check form-check-inline">
						<input <?php checked( $l2_arrows, true, true ); ?> class="form-check-input" type="radio" name="l2_arrows" id="ccis_l2_arrows_1" value="1">
						<label class="form-check-label" for="ccis_l2_arrows_1">
							<span class="dashicons dashicons-yes"></span>
						</label>
					</div>

					<div class="form-check form-check-inline">
						<input <?php checked( $l2_arrows, false, true ); ?> class="form-check-input" type="radio" name="l2_arrows" id="ccis_l2_arrows_0" value="0">
						<label class="form-check-label" for="ccis_l2_arrows_0">
							<span class="dashicons dashicons-no"></span>
						</label>
					</div>

					<div class="ccis-setting-helper">
						<?php esc_html_e( 'Select Yes/No option to set if the arrow buttons will be created.', 'ccis' ); ?>
					</div>
				</span>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-12 col-md-4 ccis-setting-col">
				<span class="ccis_setting_key">
					<?php esc_html_e( 'Title Color', 'ccis' ); ?>
				</span>
			</div>
			<div class="col-xs-12 col-md-8 ccis-setting-col">
				<span class="ccis_setting_value">
					<div class="form-group">
						<input name="l2_title_color" type="text" class="color-picker" id="ccis_l2_title_color" value="<?php echo esc_attr( $l2_title_color ); ?>">
					</div>

					<div class="ccis-setting-helper">
						<?php esc_html_e( 'Choose color for slide title.', 'ccis' ); ?>
					</div>
				</span>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-12 col-md-4 ccis-setting-col">
				<span class="ccis_setting_key">
					<?php esc_html_e( 'Title Link Color', 'ccis' ); ?>
				</span>
			</div>
			<div class="col-xs-12 col-md-8 ccis-setting-col">
				<span class="ccis_setting_value">
					<div class="form-group">
						<input name="l2_title_link_color" type="text" class="color-picker" id="ccis_l2_title_link_color" value="<?php echo esc_attr( $l2_title_link_color ); ?>">
					</div>

					<div class="ccis-setting-helper">
						<?php esc_html_e( 'Choose color for slide title link.', 'ccis' ); ?>
					</div>
				</span>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-12 col-md-4 ccis-setting-col">
				<span class="ccis_setting_key">
					<?php esc_html_e( 'Description Color', 'ccis' ); ?>
				</span>
			</div>
			<div class="col-xs-12 col-md-8 ccis-setting-col">
				<span class="ccis_setting_value">
					<div class="form-group">
						<input name="l2_desc_color" type="text" class="color-picker" id="ccis_l2_desc_color" value="<?php echo esc_attr( $l2_desc_color ); ?>">
					</div>

					<div class="ccis-setting-helper">
						<?php esc_html_e( 'Choose color for slide description.', 'ccis' ); ?>
					</div>
				</span>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-12 col-md-4 ccis-setting-col">
				<span class="ccis_setting_key">
					<?php esc_html_e( 'Open Link in New Tab', 'ccis' ); ?>
				</span>
			</div>
			<div class="col-xs-12 col-md-8 ccis-setting-col">
				<span class="ccis_setting_value">
					<div class="form-check form-check-inline">
						<input <?php checked( $l2_link_new_tab, true, true ); ?> class="form-check-input" type="radio" name="l2_link_new_tab" id="ccis_l2_link_new_tab_1" value="1">
						<label class="form-check-label" for="ccis_l2_link_new_tab_1">
							<span class="dashicons dashicons-yes"></span>
						</label>
					</div>

					<div class="form-check form-check-inline">
						<input <?php checked( $l2_link_new_tab, false, true ); ?> class="form-check-input" type="radio" name="l2_link_new_tab" id="ccis_l2_link_new_tab_0" value="0">
						<label class="form-check-label" for="ccis_l2_link_new_tab_0">
							<span class="dashicons dashicons-no"></span>
						</label>
					</div>

					<div class="ccis-setting-helper">
					<?php esc_html_e( 'Select Yes/No option to set whether link opens in a new tab.', 'ccis' ); ?>
					</div>
				</span>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-12 col-md-4 ccis-setting-col">
				<span class="ccis_setting_key">
					<?php esc_html_e( 'Font Family', 'ccis' ); ?>
				</span>
			</div>
			<div class="col-xs-12 col-md-8 ccis-setting-col">
				<span class="ccis_setting_value">
					<div class="form-group">
						<input name="l2_font_family" type="text" id="ccis_l2_font_family" value="<?php echo esc_attr( $l2_font_family ); ?>">
					</div>

					<div class="ccis-setting-helper">
						<?php esc_html_e( 'Select the font family.', 'ccis' ); ?>
					</div>
				</span>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-12 col-md-4 ccis-setting-col">
				<span class="ccis_setting_key">
					<?php esc_html_e( 'Custom CSS', 'ccis' ); ?>
				</span>
			</div>
			<div class="col-xs-12 col-md-8 ccis-setting-col">
				<span class="ccis_setting_value">
					<div class="form-group">
						<textarea name="l2_custom_css" class="form-control ccis-custom-css" id="ccis_l2_custom_css"><?php echo esc_html( $l2_custom_css ); ?></textarea>
					</div>

					<div class="ccis-setting-helper">
						<?php esc_html_e( 'Enter any custom css into textarea field you want to apply on this slider.', 'ccis' ); ?>
						<div class="alert alert-secondary">
							<?php esc_html_e( 'Note: Please Do Not Use Style Tag With Custom CSS', 'ccis' ); ?>
						</div>
					</div>
				</span>
			</div>
		</div>
	</div>

	<!-- Settings: Layout 3 -->
	<div class="ccis-setting-layout ccis-setting-layout3">
		<div class="row">
			<div class="col-xs-12 col-md-4 ccis-setting-col">
				<span class="ccis_setting_key">
					<?php esc_html_e( 'Autoplay', 'ccis' ); ?>
				</span>
			</div>
			<div class="col-xs-12 col-md-8 ccis-setting-col">
				<span class="ccis_setting_value">
					<div class="form-check form-check-inline">
						<input <?php checked( $l3_autoplay, true, true ); ?> class="form-check-input" type="radio" name="l3_autoplay" id="ccis_l3_autoplay_1" value="1">
						<label class="form-check-label" for="ccis_l3_autoplay_1">
							<span class="dashicons dashicons-yes"></span>
						</label>
					</div>

					<div class="form-check form-check-inline">
						<input <?php checked( $l3_autoplay, false, true ); ?> class="form-check-input" type="radio" name="l3_autoplay" id="ccis_l3_autoplay_0" value="0">
						<label class="form-check-label" for="ccis_l3_autoplay_0">
							<span class="dashicons dashicons-no"></span>
						</label>
					</div>

					<div class="ccis-setting-helper">
					<?php esc_html_e( 'Select whether the slider should run automatically on load.', 'ccis' ); ?>
					</div>
				</span>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-12 col-md-4 ccis-setting-col">
				<span class="ccis_setting_key">
					<?php esc_html_e( 'Speed', 'ccis' ); ?>
				</span>
			</div>
			<div class="col-xs-12 col-md-8 ccis-setting-col">
				<span class="ccis_setting_value">
					<div class="form-group">
						<input name="l3_speed" type="number" id="ccis_l3_speed" value="<?php echo esc_attr( $l3_speed ); ?>" step="1" min="1">
					</div>

					<div class="ccis-setting-helper">
						<?php esc_html_e( 'Set the time which transition takes to complete. Default value is "800".', 'ccis' ); ?>
					</div>
				</span>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-12 col-md-4 ccis-setting-col">
				<span class="ccis_setting_key">
					<?php esc_html_e( 'Pause', 'ccis' ); ?>
				</span>
			</div>
			<div class="col-xs-12 col-md-8 ccis-setting-col">
				<span class="ccis_setting_value">
					<div class="form-group">
						<input name="l3_pause" type="number" id="ccis_l3_pause" value="<?php echo esc_attr( $l3_pause ); ?>" step="1" min="1">
					</div>

					<div class="ccis-setting-helper">
						<?php esc_html_e( 'Set the time a slide lasts. Default value is "3000".', 'ccis' ); ?>
					</div>
				</span>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-12 col-md-4 ccis-setting-col">
				<span class="ccis_setting_key">
					<?php esc_html_e( 'Adaptive Height', 'ccis' ); ?>
				</span>
			</div>
			<div class="col-xs-12 col-md-8 ccis-setting-col">
				<span class="ccis_setting_value">
					<div class="form-check form-check-inline">
						<input <?php checked( $l3_adaptive_height, true, true ); ?> class="form-check-input" type="radio" name="l3_adaptive_height" id="ccis_l3_adaptive_height_1" value="1">
						<label class="form-check-label" for="ccis_l3_adaptive_height_1">
							<span class="dashicons dashicons-yes"></span>
						</label>
					</div>

					<div class="form-check form-check-inline">
						<input <?php checked( $l3_adaptive_height, false, true ); ?> class="form-check-input" type="radio" name="l3_adaptive_height" id="ccis_l3_adaptive_height_0" value="0">
						<label class="form-check-label" for="ccis_l3_adaptive_height_0">
							<span class="dashicons dashicons-no"></span>
						</label>
					</div>

					<div class="ccis-setting-helper">
					<?php esc_html_e( 'Select whether the slider height should change on the fly according to the current slide.', 'ccis' ); ?>
					</div>
				</span>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-12 col-md-4 ccis-setting-col">
				<span class="ccis_setting_key">
					<?php esc_html_e( 'Arrows', 'ccis' ); ?>
				</span>
			</div>
			<div class="col-xs-12 col-md-8 ccis-setting-col">
				<span class="ccis_setting_value">
					<div class="form-check form-check-inline">
						<input <?php checked( $l3_arrows, true, true ); ?> class="form-check-input" type="radio" name="l3_arrows" id="ccis_l3_arrows_1" value="1">
						<label class="form-check-label" for="ccis_l3_arrows_1">
							<span class="dashicons dashicons-yes"></span>
						</label>
					</div>

					<div class="form-check form-check-inline">
						<input <?php checked( $l3_arrows, false, true ); ?> class="form-check-input" type="radio" name="l3_arrows" id="ccis_l3_arrows_0" value="0">
						<label class="form-check-label" for="ccis_l3_arrows_0">
							<span class="dashicons dashicons-no"></span>
						</label>
					</div>

					<div class="ccis-setting-helper">
					<?php esc_html_e( 'Select whether the slider should have arrows.', 'ccis' ); ?>
					</div>
				</span>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-12 col-md-4 ccis-setting-col">
				<span class="ccis_setting_key">
					<?php esc_html_e( 'Pager', 'ccis' ); ?>
				</span>
			</div>
			<div class="col-xs-12 col-md-8 ccis-setting-col">
				<span class="ccis_setting_value">
					<div class="form-check form-check-inline">
						<input <?php checked( $l3_pager, true, true ); ?> class="form-check-input" type="radio" name="l3_pager" id="ccis_l3_pager_1" value="1">
						<label class="form-check-label" for="ccis_l3_pager_1">
							<span class="dashicons dashicons-yes"></span>
						</label>
					</div>

					<div class="form-check form-check-inline">
						<input <?php checked( $l3_pager, false, true ); ?> class="form-check-input" type="radio" name="l3_pager" id="ccis_l3_pager_0" value="0">
						<label class="form-check-label" for="ccis_l3_pager_0">
							<span class="dashicons dashicons-no"></span>
						</label>
					</div>

					<div class="ccis-setting-helper">
					<?php esc_html_e( 'Select whether the slider should have pager.', 'ccis' ); ?>
					</div>
				</span>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-12 col-md-4 ccis-setting-col">
				<span class="ccis_setting_key">
					<?php esc_html_e( 'Transition', 'ccis' ); ?>
				</span>
			</div>
			<div class="col-xs-12 col-md-8 ccis-setting-col">
				<span class="ccis_setting_value">
					<div class="form-group">
						<select name="l3_transition" id="ccis_l3_transition">
							<option <?php selected( $l3_transition, 'fade', true ); ?> value="fade"><?php esc_html_e( 'Fade', 'ccis' ); ?></option>
							<option <?php selected( $l3_transition, 'horizontal', true ); ?> value="horizontal"><?php esc_html_e( 'Horizontal', 'ccis' ); ?></option>
							<option <?php selected( $l3_transition, 'vertical', true ); ?> value="vertical"><?php esc_html_e( 'Vertical', 'ccis' ); ?></option>
							<option <?php selected( $l3_transition, 'kenburns', true ); ?> value="kenburns"><?php esc_html_e( 'Kenburns', 'ccis' ); ?></option>
							<option <?php selected( $l3_transition, '', true ); ?> value=""><?php esc_html_e( 'None', 'ccis' ); ?></option>
						</select>
					</div>

					<div class="ccis-setting-helper">
						<?php esc_html_e( 'Set the transition type to use.', 'ccis' ); ?>
					</div>
				</span>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-12 col-md-4 ccis-setting-col">
				<span class="ccis_setting_key">
					<?php esc_html_e( 'Max Height', 'ccis' ); ?>
				</span>
			</div>
			<div class="col-xs-12 col-md-8 ccis-setting-col">
				<span class="ccis_setting_value">
					<div class="form-check form-check-inline">
						<input <?php checked( $l3_max_height_fixed, '', true ); ?> class="form-check-input" type="radio" name="l3_max_height" id="ccis_l1_max_height_unset" value="unset">
						<label class="form-check-label" for="ccis_l1_max_height_unset">
							<?php esc_html_e( 'Unset', 'ccis' ); ?>
						</label>
					</div>

					<div class="form-check form-check-inline">
						<input <?php checked( (bool) $l3_max_height_fixed, true, true ); ?> class="form-check-input" type="radio" name="l3_max_height" id="ccis_l3_max_height_fixed" value="fixed">
						<label class="form-check-label" for="ccis_l3_max_height_fixed">
							<?php esc_html_e( 'Fixed Value', 'ccis' ); ?>
						</label>
					</div>

					<div class="ccis_l3_max_height_fixed">
						<div class="form-group mt-2">
							<input name="l3_max_height_fixed" type="number" value="<?php echo esc_attr( $l3_max_height_fixed ); ?>" step="1" min="0">
						</div>

						<div class="ccis-setting-helper">
						<?php esc_html_e( 'Set the height of the slide. Can be set to a fixed value in pixel, like "500"', 'ccis' ); ?>
						</div>
					</div>
				</span>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-12 col-md-4 ccis-setting-col">
				<span class="ccis_setting_key">
					<?php esc_html_e( 'Autoplay on Hover', 'ccis' ); ?>
				</span>
			</div>
			<div class="col-xs-12 col-md-8 ccis-setting-col">
				<span class="ccis_setting_value">
					<div class="form-check form-check-inline">
						<input <?php checked( $l3_auto_hover, true, true ); ?> class="form-check-input" type="radio" name="l3_auto_hover" id="ccis_l3_autoplay_1" value="1">
						<label class="form-check-label" for="ccis_l3_autoplay_1">
							<span class="dashicons dashicons-yes"></span>
						</label>
					</div>

					<div class="form-check form-check-inline">
						<input <?php checked( $l3_auto_hover, false, true ); ?> class="form-check-input" type="radio" name="l3_auto_hover" id="ccis_l3_autoplay_0" value="0">
						<label class="form-check-label" for="ccis_l3_autoplay_0">
							<span class="dashicons dashicons-no"></span>
						</label>
					</div>

					<div class="ccis-setting-helper">
						<?php esc_html_e( 'Select whether the slideshow should pause automatically on hover.', 'ccis' ); ?>
					</div>
				</span>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-12 col-md-4 ccis-setting-col">
				<span class="ccis_setting_key">
					<?php esc_html_e( 'Title Color', 'ccis' ); ?>
				</span>
			</div>
			<div class="col-xs-12 col-md-8 ccis-setting-col">
				<span class="ccis_setting_value">
					<div class="form-group">
						<input name="l3_title_color" type="text" class="color-picker" id="ccis_l3_title_color" value="<?php echo esc_attr( $l3_title_color ); ?>">
					</div>

					<div class="ccis-setting-helper">
						<?php esc_html_e( 'Choose color for slide title.', 'ccis' ); ?>
					</div>
				</span>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-12 col-md-4 ccis-setting-col">
				<span class="ccis_setting_key">
					<?php esc_html_e( 'Title Link Color', 'ccis' ); ?>
				</span>
			</div>
			<div class="col-xs-12 col-md-8 ccis-setting-col">
				<span class="ccis_setting_value">
					<div class="form-group">
						<input name="l3_title_link_color" type="text" class="color-picker" id="ccis_l3_title_link_color" value="<?php echo esc_attr( $l3_title_link_color ); ?>">
					</div>

					<div class="ccis-setting-helper">
						<?php esc_html_e( 'Choose color for slide title link.', 'ccis' ); ?>
					</div>
				</span>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-12 col-md-4 ccis-setting-col">
				<span class="ccis_setting_key">
					<?php esc_html_e( 'Description Color', 'ccis' ); ?>
				</span>
			</div>
			<div class="col-xs-12 col-md-8 ccis-setting-col">
				<span class="ccis_setting_value">
					<div class="form-group">
						<input name="l3_desc_color" type="text" class="color-picker" id="ccis_l3_desc_color" value="<?php echo esc_attr( $l3_desc_color ); ?>">
					</div>

					<div class="ccis-setting-helper">
						<?php esc_html_e( 'Choose color for slide description.', 'ccis' ); ?>
					</div>
				</span>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-12 col-md-4 ccis-setting-col">
				<span class="ccis_setting_key">
					<?php esc_html_e( 'Pager Background Color', 'ccis' ); ?>
				</span>
			</div>
			<div class="col-xs-12 col-md-8 ccis-setting-col">
				<span class="ccis_setting_value">
					<div class="form-group">
						<input name="l3_pager_background_color" type="text" class="color-picker" id="ccis_l3_pager_background_color" value="<?php echo esc_attr( $l3_pager_background_color ); ?>">
					</div>

					<div class="ccis-setting-helper">
						<?php esc_html_e( 'Choose background color for pager.', 'ccis' ); ?>
					</div>
				</span>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-12 col-md-4 ccis-setting-col">
				<span class="ccis_setting_key">
					<?php esc_html_e( 'Caption Background Color', 'ccis' ); ?>
				</span>
			</div>
			<div class="col-xs-12 col-md-8 ccis-setting-col">
				<span class="ccis_setting_value">
					<div class="form-group">
						<input name="l3_caption_background_color" type="text" class="color-picker" id="ccis_l3_caption_background_color" value="<?php echo esc_attr( $l3_caption_background_color ); ?>">
					</div>

					<div class="ccis-setting-helper">
						<?php esc_html_e( 'Choose background color for caption.', 'ccis' ); ?>
					</div>
				</span>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-12 col-md-4 ccis-setting-col">
				<span class="ccis_setting_key">
					<?php esc_html_e( 'Caption Background Opacity', 'ccis' ); ?>
				</span>
			</div>
			<div class="col-xs-12 col-md-8 ccis-setting-col">
				<span class="ccis_setting_value">
					<div class="form-group">
						<select name="l3_caption_background_opacity" id="ccis_l3_caption_background_opacity">
							<?php foreach ( CCIS_Helper::layer_background_opacity() as $key => $value ) { ?>
							<option <?php selected( $l3_caption_background_opacity, $key, true ); ?> value="<?php echo esc_attr( $key ); ?>">
								<?php echo esc_html( $value ); ?>
							</option>
							<?php } ?>
						</select>
					</div>

					<div class="ccis-setting-helper">
						<?php esc_html_e( 'Choose caption background opacity.', 'ccis' ); ?>
					</div>
				</span>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-12 col-md-4 ccis-setting-col">
				<span class="ccis_setting_key">
					<?php esc_html_e( 'Title Font Size', 'ccis' ); ?>
				</span>
			</div>
			<div class="col-xs-12 col-md-8 ccis-setting-col">
				<span class="ccis_setting_value">
					<div class="form-group">
						<input name="l3_title_font_size" type="number" id="ccis_l3_title_font_size" value="<?php echo esc_attr( $l3_title_font_size ); ?>" step="1" min="0">
					</div>

					<div class="ccis-setting-helper">
						<?php esc_html_e( 'Set the title font size. Default value is "18".', 'ccis' ); ?>
					</div>
				</span>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-12 col-md-4 ccis-setting-col">
				<span class="ccis_setting_key">
					<?php esc_html_e( 'Text Font Size', 'ccis' ); ?>
				</span>
			</div>
			<div class="col-xs-12 col-md-8 ccis-setting-col">
				<span class="ccis_setting_value">
					<div class="form-group">
						<input name="l3_text_font_size" type="number" id="ccis_l3_text_font_size" value="<?php echo esc_attr( $l3_text_font_size ); ?>" step="1" min="0">
					</div>

					<div class="ccis-setting-helper">
						<?php esc_html_e( 'Set the text font size. Default value is "14".', 'ccis' ); ?>
					</div>
				</span>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-12 col-md-4 ccis-setting-col">
				<span class="ccis_setting_key">
					<?php esc_html_e( 'Title Alignment', 'ccis' ); ?>
				</span>
			</div>
			<div class="col-xs-12 col-md-8 ccis-setting-col">
				<span class="ccis_setting_value">
					<div class="form-check form-check-inline">
						<input <?php checked( $l3_title_align, 'left', true ); ?> class="form-check-input" type="radio" name="l3_title_align" id="ccis_l3_title_align_left" value="left">
						<label class="form-check-label" for="ccis_l3_title_align_left">
							<?php esc_html_e( 'Left', 'ccis' ); ?>
						</label>
					</div>

					<div class="form-check form-check-inline">
						<input <?php checked( $l3_title_align, 'center', true ); ?> class="form-check-input" type="radio" name="l3_title_align" id="ccis_l3_title_align_center" value="center">
						<label class="form-check-label" for="ccis_l3_title_align_center">
							<?php esc_html_e( 'Center', 'ccis' ); ?>
						</label>
					</div>

					<div class="form-check form-check-inline">
						<input <?php checked( $l3_title_align, 'right', true ); ?> class="form-check-input" type="radio" name="l3_title_align" id="ccis_l3_title_align_right" value="right">
						<label class="form-check-label" for="ccis_l3_title_align_right">
							<?php esc_html_e( 'Right', 'ccis' ); ?>
						</label>
					</div>

					<div class="ccis-setting-helper">
						<?php esc_html_e( 'Select title alignment.', 'ccis' ); ?>
					</div>
				</span>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-12 col-md-4 ccis-setting-col">
				<span class="ccis_setting_key">
					<?php esc_html_e( 'Text Alignment', 'ccis' ); ?>
				</span>
			</div>
			<div class="col-xs-12 col-md-8 ccis-setting-col">
				<span class="ccis_setting_value">
					<div class="form-check form-check-inline">
						<input <?php checked( $l3_text_align, 'left', true ); ?> class="form-check-input" type="radio" name="l3_text_align" id="ccis_l3_text_align_left" value="left">
						<label class="form-check-label" for="ccis_l3_text_align_left">
							<?php esc_html_e( 'Left', 'ccis' ); ?>
						</label>
					</div>

					<div class="form-check form-check-inline">
						<input <?php checked( $l3_text_align, 'center', true ); ?> class="form-check-input" type="radio" name="l3_text_align" id="ccis_l3_text_align_center" value="center">
						<label class="form-check-label" for="ccis_l3_text_align_center">
							<?php esc_html_e( 'Center', 'ccis' ); ?>
						</label>
					</div>

					<div class="form-check form-check-inline">
						<input <?php checked( $l3_text_align, 'right', true ); ?> class="form-check-input" type="radio" name="l3_text_align" id="ccis_l3_text_align_right" value="right">
						<label class="form-check-label" for="ccis_l3_text_align_right">
							<?php esc_html_e( 'Right', 'ccis' ); ?>
						</label>
					</div>

					<div class="ccis-setting-helper">
						<?php esc_html_e( 'Select text alignment.', 'ccis' ); ?>
					</div>
				</span>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-12 col-md-4 ccis-setting-col">
				<span class="ccis_setting_key">
					<?php esc_html_e( 'Open Link in New Tab', 'ccis' ); ?>
				</span>
			</div>
			<div class="col-xs-12 col-md-8 ccis-setting-col">
				<span class="ccis_setting_value">
					<div class="form-check form-check-inline">
						<input <?php checked( $l3_link_new_tab, true, true ); ?> class="form-check-input" type="radio" name="l3_link_new_tab" id="ccis_l3_link_new_tab_1" value="1">
						<label class="form-check-label" for="ccis_l3_link_new_tab_1">
							<span class="dashicons dashicons-yes"></span>
						</label>
					</div>

					<div class="form-check form-check-inline">
						<input <?php checked( $l3_link_new_tab, false, true ); ?> class="form-check-input" type="radio" name="l3_link_new_tab" id="ccis_l3_link_new_tab_0" value="0">
						<label class="form-check-label" for="ccis_l3_link_new_tab_0">
							<span class="dashicons dashicons-no"></span>
						</label>
					</div>

					<div class="ccis-setting-helper">
					<?php esc_html_e( 'Select Yes/No option to set whether link opens in a new tab.', 'ccis' ); ?>
					</div>
				</span>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-12 col-md-4 ccis-setting-col">
				<span class="ccis_setting_key">
					<?php esc_html_e( 'Font Family', 'ccis' ); ?>
				</span>
			</div>
			<div class="col-xs-12 col-md-8 ccis-setting-col">
				<span class="ccis_setting_value">
					<div class="form-group">
						<input name="l3_font_family" type="text" id="ccis_l3_font_family" value="<?php echo esc_attr( $l3_font_family ); ?>">
					</div>

					<div class="ccis-setting-helper">
						<?php esc_html_e( 'Select the font family.', 'ccis' ); ?>
					</div>
				</span>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-12 col-md-4 ccis-setting-col">
				<span class="ccis_setting_key">
					<?php esc_html_e( 'Custom CSS', 'ccis' ); ?>
				</span>
			</div>
			<div class="col-xs-12 col-md-8 ccis-setting-col">
				<span class="ccis_setting_value">
					<div class="form-group">
						<textarea name="l3_custom_css" class="form-control ccis-custom-css" id="ccis_l3_custom_css"><?php echo esc_html( $l3_custom_css ); ?></textarea>
					</div>

					<div class="ccis-setting-helper">
						<?php esc_html_e( 'Enter any custom css into textarea field you want to apply on this slider.', 'ccis' ); ?>
						<div class="alert alert-secondary">
							<?php esc_html_e( 'Note: Please Do Not Use Style Tag With Custom CSS', 'ccis' ); ?>
						</div>
					</div>
				</span>
			</div>
		</div>
	</div>

	<!-- Settings: Layout 4 -->
	<div class="ccis-setting-layout ccis-setting-layout4">
		<div class="row">
			<div class="col-md-6">
				<div class="card">
					<div class="row">
						<div class="col-xs-12 col-md-4 ccis-setting-col">
							<span class="ccis_setting_key">
								<?php esc_html_e( 'Overlay', 'ccis' ); ?>
							</span>
						</div>
						<div class="col-xs-12 col-md-8 ccis-setting-col">
							<span class="ccis_setting_value">
								<div class="form-check form-check-inline">
									<input <?php checked( $l4_overlay, true, true ); ?> class="form-check-input" type="radio" name="l4_overlay" id="ccis_l4_overlay_1" value="1">
									<label class="form-check-label" for="ccis_l4_overlay_1">
										<span class="dashicons dashicons-yes"></span>
									</label>
								</div>

								<div class="form-check form-check-inline">
									<input <?php checked( $l4_overlay, false, true ); ?> class="form-check-input" type="radio" name="l4_overlay" id="ccis_l4_overlay_0" value="0">
									<label class="form-check-label" for="ccis_l4_overlay_0">
										<span class="dashicons dashicons-no"></span>
									</label>
								</div>

								<div class="ccis-setting-helper">
								<?php esc_html_e( 'Show fullscreen overlay.', 'ccis' ); ?>
								</div>
							</span>
						</div>
					</div>
					<div class="row">
						<div class="col-xs-12 col-md-4 ccis-setting-col">
							<span class="ccis_setting_key">
								<?php esc_html_e( 'Spinner', 'ccis' ); ?>
							</span>
						</div>
						<div class="col-xs-12 col-md-8 ccis-setting-col">
							<span class="ccis_setting_value">
								<div class="form-check form-check-inline">
									<input <?php checked( $l4_spinner, true, true ); ?> class="form-check-input" type="radio" name="l4_spinner" id="ccis_l4_spinner_1" value="1">
									<label class="form-check-label" for="ccis_l4_spinner_1">
										<span class="dashicons dashicons-yes"></span>
									</label>
								</div>

								<div class="form-check form-check-inline">
									<input <?php checked( $l4_spinner, false, true ); ?> class="form-check-input" type="radio" name="l4_spinner" id="ccis_l4_spinner_0" value="0">
									<label class="form-check-label" for="ccis_l4_spinner_0">
										<span class="dashicons dashicons-no"></span>
									</label>
								</div>

								<div class="ccis-setting-helper">
								<?php esc_html_e( 'Show loading spinner.', 'ccis' ); ?>
								</div>
							</span>
						</div>
					</div>
					<div class="row">
						<div class="col-xs-12 col-md-4 ccis-setting-col">
							<span class="ccis_setting_key">
								<?php esc_html_e( 'Navigation arrows', 'ccis' ); ?>
							</span>
						</div>
						<div class="col-xs-12 col-md-8 ccis-setting-col">
							<span class="ccis_setting_value">
								<div class="form-check form-check-inline">
									<input <?php checked( $l4_nav, true, true ); ?> class="form-check-input" type="radio" name="l4_nav" id="ccis_l4_nav_1" value="1">
									<label class="form-check-label" for="ccis_l4_nav_1">
										<span class="dashicons dashicons-yes"></span>
									</label>
								</div>

								<div class="form-check form-check-inline">
									<input <?php checked( $l4_nav, false, true ); ?> class="form-check-input" type="radio" name="l4_nav" id="ccis_l4_nav_0" value="0">
									<label class="form-check-label" for="ccis_l4_nav_0">
										<span class="dashicons dashicons-no"></span>
									</label>
								</div>

								<div class="ccis-setting-helper">
								<?php esc_html_e( 'Show navigation arrows.', 'ccis' ); ?>
								</div>
							</span>
						</div>
					</div>
					<div class="row">
						<div class="col-xs-12 col-md-4 ccis-setting-col">
							<span class="ccis_setting_key">
								<?php esc_html_e( 'Close button', 'ccis' ); ?>
							</span>
						</div>
						<div class="col-xs-12 col-md-8 ccis-setting-col">
							<span class="ccis_setting_value">
								<div class="form-check form-check-inline">
									<input <?php checked( $l4_close, true, true ); ?> class="form-check-input" type="radio" name="l4_close" id="ccis_l4_close_1" value="1">
									<label class="form-check-label" for="ccis_l4_close_1">
										<span class="dashicons dashicons-yes"></span>
									</label>
								</div>

								<div class="form-check form-check-inline">
									<input <?php checked( $l4_close, false, true ); ?> class="form-check-input" type="radio" name="l4_close" id="ccis_l4_close_0" value="0">
									<label class="form-check-label" for="ccis_l4_close_0">
										<span class="dashicons dashicons-no"></span>
									</label>
								</div>

								<div class="ccis-setting-helper">
								<?php esc_html_e( 'Show close button.', 'ccis' ); ?>
								</div>
							</span>
						</div>
					</div>
					<div class="row">
						<div class="col-xs-12 col-md-4 ccis-setting-col">
							<span class="ccis_setting_key">
								<?php esc_html_e( 'Swipe Close', 'ccis' ); ?>
							</span>
						</div>
						<div class="col-xs-12 col-md-8 ccis-setting-col">
							<span class="ccis_setting_value">
								<div class="form-check form-check-inline">
									<input <?php checked( $l4_swipe_close, true, true ); ?> class="form-check-input" type="radio" name="l4_swipe_close" id="ccis_l4_swipe_close_1" value="1">
									<label class="form-check-label" for="ccis_l4_swipe_close_1">
										<span class="dashicons dashicons-yes"></span>
									</label>
								</div>

								<div class="form-check form-check-inline">
									<input <?php checked( $l4_swipe_close, false, true ); ?> class="form-check-input" type="radio" name="l4_swipe_close" id="ccis_l4_swipe_close_0" value="0">
									<label class="form-check-label" for="ccis_l4_swipe_close_0">
										<span class="dashicons dashicons-no"></span>
									</label>
								</div>

								<div class="ccis-setting-helper">
								<?php esc_html_e( 'Swipe up or down to close gallery.', 'ccis' ); ?>
								</div>
							</span>
						</div>
					</div>
					<div class="row">
						<div class="col-xs-12 col-md-4 ccis-setting-col">
							<span class="ccis_setting_key">
								<?php esc_html_e( 'Close on Outside Click', 'ccis' ); ?>
							</span>
						</div>
						<div class="col-xs-12 col-md-8 ccis-setting-col">
							<span class="ccis_setting_value">
								<div class="form-check form-check-inline">
									<input <?php checked( $l4_doc_close, true, true ); ?> class="form-check-input" type="radio" name="l4_doc_close" id="ccis_l4_doc_close_1" value="1">
									<label class="form-check-label" for="ccis_l4_doc_close_1">
										<span class="dashicons dashicons-yes"></span>
									</label>
								</div>

								<div class="form-check form-check-inline">
									<input <?php checked( $l4_doc_close, false, true ); ?> class="form-check-input" type="radio" name="l4_doc_close" id="ccis_l4_doc_close_0" value="0">
									<label class="form-check-label" for="ccis_l4_doc_close_0">
										<span class="dashicons dashicons-no"></span>
									</label>
								</div>

								<div class="ccis-setting-helper">
								<?php esc_html_e( 'Close the lightbox when clicking outside.', 'ccis' ); ?>
								</div>
							</span>
						</div>
					</div>
					<div class="row">
						<div class="col-xs-12 col-md-4 ccis-setting-col">
							<span class="ccis_setting_key">
								<?php esc_html_e( 'Counter', 'ccis' ); ?>
							</span>
						</div>
						<div class="col-xs-12 col-md-8 ccis-setting-col">
							<span class="ccis_setting_value">
								<div class="form-check form-check-inline">
									<input <?php checked( $l4_counter, true, true ); ?> class="form-check-input" type="radio" name="l4_counter" id="ccis_l4_counter_1" value="1">
									<label class="form-check-label" for="ccis_l4_counter_1">
										<span class="dashicons dashicons-yes"></span>
									</label>
								</div>

								<div class="form-check form-check-inline">
									<input <?php checked( $l4_counter, false, true ); ?> class="form-check-input" type="radio" name="l4_counter" id="ccis_l4_counter_0" value="0">
									<label class="form-check-label" for="ccis_l4_counter_0">
										<span class="dashicons dashicons-no"></span>
									</label>
								</div>

								<div class="ccis-setting-helper">
								<?php esc_html_e( 'Show counter.', 'ccis' ); ?>
								</div>
							</span>
						</div>
					</div>
					<div class="row">
						<div class="col-xs-12 col-md-4 ccis-setting-col">
							<span class="ccis_setting_key">
								<?php esc_html_e( 'Image Preloading', 'ccis' ); ?>
							</span>
						</div>
						<div class="col-xs-12 col-md-8 ccis-setting-col">
							<span class="ccis_setting_value">
								<div class="form-check form-check-inline">
									<input <?php checked( $l4_preloading, true, true ); ?> class="form-check-input" type="radio" name="l4_preloading" id="ccis_l4_preloading_1" value="1">
									<label class="form-check-label" for="ccis_l4_preloading_1">
										<span class="dashicons dashicons-yes"></span>
									</label>
								</div>

								<div class="form-check form-check-inline">
									<input <?php checked( $l4_preloading, false, true ); ?> class="form-check-input" type="radio" name="l4_preloading" id="ccis_l4_preloading_0" value="0">
									<label class="form-check-label" for="ccis_l4_preloading_0">
										<span class="dashicons dashicons-no"></span>
									</label>
								</div>

								<div class="ccis-setting-helper">
								<?php esc_html_e( 'Image preloading.', 'ccis' ); ?>
								</div>
							</span>
						</div>
					</div>
					<div class="row">
						<div class="col-xs-12 col-md-4 ccis-setting-col">
							<span class="ccis_setting_key">
								<?php esc_html_e( 'Keyboard Navigation', 'ccis' ); ?>
							</span>
						</div>
						<div class="col-xs-12 col-md-8 ccis-setting-col">
							<span class="ccis_setting_value">
								<div class="form-check form-check-inline">
									<input <?php checked( $l4_keyboard, true, true ); ?> class="form-check-input" type="radio" name="l4_keyboard" id="ccis_l4_keyboard_1" value="1">
									<label class="form-check-label" for="ccis_l4_keyboard_1">
										<span class="dashicons dashicons-yes"></span>
									</label>
								</div>

								<div class="form-check form-check-inline">
									<input <?php checked( $l4_keyboard, false, true ); ?> class="form-check-input" type="radio" name="l4_keyboard" id="ccis_l4_keyboard_0" value="0">
									<label class="form-check-label" for="ccis_l4_keyboard_0">
										<span class="dashicons dashicons-no"></span>
									</label>
								</div>

								<div class="ccis-setting-helper">
								<?php esc_html_e( 'Enable keyboard navigation.', 'ccis' ); ?>
								</div>
							</span>
						</div>
					</div>
					<div class="row">
						<div class="col-xs-12 col-md-4 ccis-setting-col">
							<span class="ccis_setting_key">
								<?php esc_html_e( 'Loop', 'ccis' ); ?>
							</span>
						</div>
						<div class="col-xs-12 col-md-8 ccis-setting-col">
							<span class="ccis_setting_value">
								<div class="form-check form-check-inline">
									<input <?php checked( $l4_loop, true, true ); ?> class="form-check-input" type="radio" name="l4_loop" id="ccis_l4_loop_1" value="1">
									<label class="form-check-label" for="ccis_l4_loop_1">
										<span class="dashicons dashicons-yes"></span>
									</label>
								</div>

								<div class="form-check form-check-inline">
									<input <?php checked( $l4_loop, false, true ); ?> class="form-check-input" type="radio" name="l4_loop" id="ccis_l4_loop_0" value="0">
									<label class="form-check-label" for="ccis_l4_loop_0">
										<span class="dashicons dashicons-no"></span>
									</label>
								</div>

								<div class="ccis-setting-helper">
								<?php esc_html_e( 'Enable endless looping.', 'ccis' ); ?>
								</div>
							</span>
						</div>
					</div>
					<div class="row">
						<div class="col-xs-12 col-md-4 ccis-setting-col">
							<span class="ccis_setting_key">
								<?php esc_html_e( 'Width Ratio', 'ccis' ); ?>
							</span>
						</div>
						<div class="col-xs-12 col-md-8 ccis-setting-col">
							<span class="ccis_setting_value">
								<div class="form-group">
									<select name="l4_width_ratio" id="ccis_l4_width_ratio">
										<?php foreach ( CCIS_Helper::width_height_ratio() as $key => $value ) { ?>
										<option <?php selected( $l4_width_ratio, $key, true ); ?> value="<?php echo esc_attr( $key ); ?>">
											<?php echo esc_html( $value ); ?>
										</option>
										<?php } ?>
									</select>
								</div>

								<div class="ccis-setting-helper">
									<?php esc_html_e( 'Set width ratio. Default value is 0.8.', 'ccis' ); ?>
								</div>
							</span>
						</div>
					</div>
					<div class="row">
						<div class="col-xs-12 col-md-4 ccis-setting-col">
							<span class="ccis_setting_key">
								<?php esc_html_e( 'Height Ratio', 'ccis' ); ?>
							</span>
						</div>
						<div class="col-xs-12 col-md-8 ccis-setting-col">
							<span class="ccis_setting_value">
								<div class="form-group">
									<select name="l4_height_ratio" id="ccis_l4_height_ratio">
										<?php foreach ( CCIS_Helper::width_height_ratio() as $key => $value ) { ?>
										<option <?php selected( $l4_height_ratio, $key, true ); ?> value="<?php echo esc_attr( $key ); ?>">
											<?php echo esc_html( $value ); ?>
										</option>
										<?php } ?>
									</select>
								</div>

								<div class="ccis-setting-helper">
									<?php esc_html_e( 'Set height ratio. Default value is 0.9.', 'ccis' ); ?>
								</div>
							</span>
						</div>
					</div>
					<div class="row">
						<div class="col-xs-12 col-md-4 ccis-setting-col">
							<span class="ccis_setting_key">
								<?php esc_html_e( 'Scale Image to Ratio', 'ccis' ); ?>
							</span>
						</div>
						<div class="col-xs-12 col-md-8 ccis-setting-col">
							<span class="ccis_setting_value">
								<div class="form-check form-check-inline">
									<input <?php checked( $l4_scale_image_to_ratio, true, true ); ?> class="form-check-input" type="radio" name="l4_scale_image_to_ratio" id="ccis_l4_scale_image_to_ratio_1" value="1">
									<label class="form-check-label" for="ccis_l4_scale_image_to_ratio_1">
										<span class="dashicons dashicons-yes"></span>
									</label>
								</div>

								<div class="form-check form-check-inline">
									<input <?php checked( $l4_scale_image_to_ratio, false, true ); ?> class="form-check-input" type="radio" name="l4_scale_image_to_ratio" id="ccis_l4_scale_image_to_ratio_0" value="0">
									<label class="form-check-label" for="ccis_l4_scale_image_to_ratio_0">
										<span class="dashicons dashicons-no"></span>
									</label>
								</div>

								<div class="ccis-setting-helper">
								<?php esc_html_e( 'Scale the image up to the defined ratio size.', 'ccis' ); ?>
								</div>
							</span>
						</div>
					</div>
					<div class="row">
						<div class="col-xs-12 col-md-4 ccis-setting-col">
							<span class="ccis_setting_key">
								<?php esc_html_e( 'Disable Right Click', 'ccis' ); ?>
							</span>
						</div>
						<div class="col-xs-12 col-md-8 ccis-setting-col">
							<span class="ccis_setting_value">
								<div class="form-check form-check-inline">
									<input <?php checked( $l4_disable_right_click, true, true ); ?> class="form-check-input" type="radio" name="l4_disable_right_click" id="ccis_l4_disable_right_click_1" value="1">
									<label class="form-check-label" for="ccis_l4_disable_right_click_1">
										<span class="dashicons dashicons-yes"></span>
									</label>
								</div>

								<div class="form-check form-check-inline">
									<input <?php checked( $l4_disable_right_click, false, true ); ?> class="form-check-input" type="radio" name="l4_disable_right_click" id="ccis_l4_disable_right_click_0" value="0">
									<label class="form-check-label" for="ccis_l4_disable_right_click_0">
										<span class="dashicons dashicons-no"></span>
									</label>
								</div>

								<div class="ccis-setting-helper">
								<?php esc_html_e( 'Disable right click.', 'ccis' ); ?>
								</div>
							</span>
						</div>
					</div>
					<div class="row">
						<div class="col-xs-12 col-md-4 ccis-setting-col">
							<span class="ccis_setting_key">
								<?php esc_html_e( 'Double Tap Zoom', 'ccis' ); ?>
							</span>
						</div>
						<div class="col-xs-12 col-md-8 ccis-setting-col">
							<span class="ccis_setting_value">
								<div class="form-group">
									<input name="l4_double_tap_zoom" type="number" id="ccis_l4_double_tap_zoom" value="<?php echo esc_attr( $l4_double_tap_zoom ); ?>" step="1" min="0">
								</div>

								<div class="ccis-setting-helper">
									<?php esc_html_e( 'Set double tab zoom. Default value is 2.', 'ccis' ); ?>
								</div>
							</span>
						</div>
					</div>
					<div class="row">
						<div class="col-xs-12 col-md-4 ccis-setting-col">
							<span class="ccis_setting_key">
								<?php esc_html_e( 'Max Zoom', 'ccis' ); ?>
							</span>
						</div>
						<div class="col-xs-12 col-md-8 ccis-setting-col">
							<span class="ccis_setting_value">
								<div class="form-group">
									<input name="l4_max_zoom" type="number" id="ccis_l4_max_zoom" value="<?php echo esc_attr( $l4_max_zoom ); ?>" step="1" min="0">
								</div>

								<div class="ccis-setting-helper">
									<?php esc_html_e( 'Set the max zoom. Default value is 10.', 'ccis' ); ?>
								</div>
							</span>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-6">
				<div class="card">
					<div class="row">
						<div class="col-xs-12 col-md-4 ccis-setting-col">
							<span class="ccis_setting_key">
								<?php esc_html_e( 'Animation Slide', 'ccis' ); ?>
							</span>
						</div>
						<div class="col-xs-12 col-md-8 ccis-setting-col">
							<span class="ccis_setting_value">
								<div class="form-check form-check-inline">
									<input <?php checked( $l4_animation_slide, true, true ); ?> class="form-check-input" type="radio" name="l4_animation_slide" id="ccis_l4_animation_slide_1" value="1">
									<label class="form-check-label" for="ccis_l4_animation_slide_1">
										<span class="dashicons dashicons-yes"></span>
									</label>
								</div>

								<div class="form-check form-check-inline">
									<input <?php checked( $l4_animation_slide, false, true ); ?> class="form-check-input" type="radio" name="l4_animation_slide" id="ccis_l4_animation_slide_0" value="0">
									<label class="form-check-label" for="ccis_l4_animation_slide_0">
										<span class="dashicons dashicons-no"></span>
									</label>
								</div>

								<div class="ccis-setting-helper">
								<?php esc_html_e( 'Whether to slide in new photos or not, disable to fade.', 'ccis' ); ?>
								</div>
							</span>
						</div>
					</div>
					<div class="row">
						<div class="col-xs-12 col-md-4 ccis-setting-col">
							<span class="ccis_setting_key">
								<?php esc_html_e( 'Animation Speed', 'ccis' ); ?>
							</span>
						</div>
						<div class="col-xs-12 col-md-8 ccis-setting-col">
							<span class="ccis_setting_value">
								<div class="form-group">
									<input name="l4_animation_speed" type="number" id="ccis_l4_animation_speed" value="<?php echo esc_attr( $l4_animation_speed ); ?>" step="1" min="0">
								</div>

								<div class="ccis-setting-helper">
									<?php esc_html_e( 'Set the animation speed in ms. Default value is "250".', 'ccis' ); ?>
								</div>
							</span>
						</div>
					</div>
					<div class="row">
						<div class="col-xs-12 col-md-4 ccis-setting-col">
							<span class="ccis_setting_key">
								<?php esc_html_e( 'Caption', 'ccis' ); ?>
							</span>
						</div>
						<div class="col-xs-12 col-md-8 ccis-setting-col">
							<span class="ccis_setting_value">
								<div class="form-check form-check-inline">
									<input <?php checked( $l4_caption, true, true ); ?> class="form-check-input" type="radio" name="l4_caption" id="ccis_l4_caption_1" value="1">
									<label class="form-check-label" for="ccis_l4_caption_1">
										<span class="dashicons dashicons-yes"></span>
									</label>
								</div>

								<div class="form-check form-check-inline">
									<input <?php checked( $l4_caption, false, true ); ?> class="form-check-input" type="radio" name="l4_caption" id="ccis_l4_caption_0" value="0">
									<label class="form-check-label" for="ccis_l4_caption_0">
										<span class="dashicons dashicons-no"></span>
									</label>
								</div>

								<div class="ccis-setting-helper">
								<?php esc_html_e( 'Show image caption.', 'ccis' ); ?>
								</div>
							</span>
						</div>
					</div>
					<div class="row">
						<div class="col-xs-12 col-md-4 ccis-setting-col">
							<span class="ccis_setting_key">
								<?php esc_html_e( 'Caption Position', 'ccis' ); ?>
							</span>
						</div>
						<div class="col-xs-12 col-md-8 ccis-setting-col">
							<span class="ccis_setting_value">
								<div class="form-group">
									<select name="l4_caption_position" id="ccis_l4_caption_position">
										<option <?php selected( $l4_caption_position, 'top', true ); ?> value="top"><?php esc_html_e( 'Top', 'ccis' ); ?></option>
										<option <?php selected( $l4_caption_position, 'bottom', true ); ?> value="bottom"><?php esc_html_e( 'Bottom', 'ccis' ); ?></option>
									</select>
								</div>

								<div class="ccis-setting-helper">
									<?php esc_html_e( 'Set the caption position. Default value is "bottom".', 'ccis' ); ?>
								</div>
							</span>
						</div>
					</div>
					<div class="row">
						<div class="col-xs-12 col-md-4 ccis-setting-col">
							<span class="ccis_setting_key">
								<?php esc_html_e( 'Title Color', 'ccis' ); ?>
							</span>
						</div>
						<div class="col-xs-12 col-md-8 ccis-setting-col">
							<span class="ccis_setting_value">
								<div class="form-group">
									<input name="l4_title_color" type="text" class="color-picker" id="ccis_l4_title_color" value="<?php echo esc_attr( $l4_title_color ); ?>">
								</div>

								<div class="ccis-setting-helper">
									<?php esc_html_e( 'Choose color for slide title.', 'ccis' ); ?>
								</div>
							</span>
						</div>
					</div>
					<div class="row">
						<div class="col-xs-12 col-md-4 ccis-setting-col">
							<span class="ccis_setting_key">
								<?php esc_html_e( 'Title Link Color', 'ccis' ); ?>
							</span>
						</div>
						<div class="col-xs-12 col-md-8 ccis-setting-col">
							<span class="ccis_setting_value">
								<div class="form-group">
									<input name="l4_title_link_color" type="text" class="color-picker" id="ccis_l4_title_link_color" value="<?php echo esc_attr( $l4_title_link_color ); ?>">
								</div>

								<div class="ccis-setting-helper">
									<?php esc_html_e( 'Choose color for slide title link.', 'ccis' ); ?>
								</div>
							</span>
						</div>
					</div>
					<div class="row">
						<div class="col-xs-12 col-md-4 ccis-setting-col">
							<span class="ccis_setting_key">
								<?php esc_html_e( 'Description Color', 'ccis' ); ?>
							</span>
						</div>
						<div class="col-xs-12 col-md-8 ccis-setting-col">
							<span class="ccis_setting_value">
								<div class="form-group">
									<input name="l4_desc_color" type="text" class="color-picker" id="ccis_l4_desc_color" value="<?php echo esc_attr( $l4_desc_color ); ?>">
								</div>

								<div class="ccis-setting-helper">
									<?php esc_html_e( 'Choose color for slide description.', 'ccis' ); ?>
								</div>
							</span>
						</div>
					</div>
					<div class="row">
						<div class="col-xs-12 col-md-4 ccis-setting-col">
							<span class="ccis_setting_key">
								<?php esc_html_e( 'Caption Background Color', 'ccis' ); ?>
							</span>
						</div>
						<div class="col-xs-12 col-md-8 ccis-setting-col">
							<span class="ccis_setting_value">
								<div class="form-group">
									<input name="l4_caption_background_color" type="text" class="color-picker" id="ccis_l4_caption_background_color" value="<?php echo esc_attr( $l4_caption_background_color ); ?>">
								</div>

								<div class="ccis-setting-helper">
									<?php esc_html_e( 'Choose background color for caption.', 'ccis' ); ?>
								</div>
							</span>
						</div>
					</div>
					<div class="row">
						<div class="col-xs-12 col-md-4 ccis-setting-col">
							<span class="ccis_setting_key">
								<?php esc_html_e( 'Title Font Size', 'ccis' ); ?>
							</span>
						</div>
						<div class="col-xs-12 col-md-8 ccis-setting-col">
							<span class="ccis_setting_value">
								<div class="form-group">
									<input name="l4_title_font_size" type="number" id="ccis_l4_title_font_size" value="<?php echo esc_attr( $l4_title_font_size ); ?>" step="1" min="0">
								</div>

								<div class="ccis-setting-helper">
									<?php esc_html_e( 'Set the title font size. Default value is "16".', 'ccis' ); ?>
								</div>
							</span>
						</div>
					</div>
					<div class="row">
						<div class="col-xs-12 col-md-4 ccis-setting-col">
							<span class="ccis_setting_key">
								<?php esc_html_e( 'Text Font Size', 'ccis' ); ?>
							</span>
						</div>
						<div class="col-xs-12 col-md-8 ccis-setting-col">
							<span class="ccis_setting_value">
								<div class="form-group">
									<input name="l4_text_font_size" type="number" id="ccis_l4_text_font_size" value="<?php echo esc_attr( $l4_text_font_size ); ?>" step="1" min="0">
								</div>

								<div class="ccis-setting-helper">
									<?php esc_html_e( 'Set the text font size. Default value is "13".', 'ccis' ); ?>
								</div>
							</span>
						</div>
					</div>
					<div class="row">
						<div class="col-xs-12 col-md-4 ccis-setting-col">
							<span class="ccis_setting_key">
								<?php esc_html_e( 'Title Alignment', 'ccis' ); ?>
							</span>
						</div>
						<div class="col-xs-12 col-md-8 ccis-setting-col">
							<span class="ccis_setting_value">
								<div class="form-check form-check-inline">
									<input <?php checked( $l4_title_align, 'left', true ); ?> class="form-check-input" type="radio" name="l4_title_align" id="ccis_l4_title_align_left" value="left">
									<label class="form-check-label" for="ccis_l4_title_align_left">
										<?php esc_html_e( 'Left', 'ccis' ); ?>
									</label>
								</div>

								<div class="form-check form-check-inline">
									<input <?php checked( $l4_title_align, 'center', true ); ?> class="form-check-input" type="radio" name="l4_title_align" id="ccis_l4_title_align_center" value="center">
									<label class="form-check-label" for="ccis_l4_title_align_center">
										<?php esc_html_e( 'Center', 'ccis' ); ?>
									</label>
								</div>

								<div class="form-check form-check-inline">
									<input <?php checked( $l4_title_align, 'right', true ); ?> class="form-check-input" type="radio" name="l4_title_align" id="ccis_l4_title_align_right" value="right">
									<label class="form-check-label" for="ccis_l4_title_align_right">
										<?php esc_html_e( 'Right', 'ccis' ); ?>
									</label>
								</div>

								<div class="ccis-setting-helper">
									<?php esc_html_e( 'Select title alignment.', 'ccis' ); ?>
								</div>
							</span>
						</div>
					</div>
					<div class="row">
						<div class="col-xs-12 col-md-4 ccis-setting-col">
							<span class="ccis_setting_key">
								<?php esc_html_e( 'Text Alignment', 'ccis' ); ?>
							</span>
						</div>
						<div class="col-xs-12 col-md-8 ccis-setting-col">
							<span class="ccis_setting_value">
								<div class="form-check form-check-inline">
									<input <?php checked( $l4_text_align, 'left', true ); ?> class="form-check-input" type="radio" name="l4_text_align" id="ccis_l4_text_align_left" value="left">
									<label class="form-check-label" for="ccis_l4_text_align_left">
										<?php esc_html_e( 'Left', 'ccis' ); ?>
									</label>
								</div>

								<div class="form-check form-check-inline">
									<input <?php checked( $l4_text_align, 'center', true ); ?> class="form-check-input" type="radio" name="l4_text_align" id="ccis_l4_text_align_center" value="center">
									<label class="form-check-label" for="ccis_l4_text_align_center">
										<?php esc_html_e( 'Center', 'ccis' ); ?>
									</label>
								</div>

								<div class="form-check form-check-inline">
									<input <?php checked( $l4_text_align, 'right', true ); ?> class="form-check-input" type="radio" name="l4_text_align" id="ccis_l4_text_align_right" value="right">
									<label class="form-check-label" for="ccis_l4_text_align_right">
										<?php esc_html_e( 'Right', 'ccis' ); ?>
									</label>
								</div>

								<div class="ccis-setting-helper">
									<?php esc_html_e( 'Select text alignment.', 'ccis' ); ?>
								</div>
							</span>
						</div>
					</div>
					<div class="row">
						<div class="col-xs-12 col-md-4 ccis-setting-col">
							<span class="ccis_setting_key">
								<?php esc_html_e( 'Open Link in New Tab', 'ccis' ); ?>
							</span>
						</div>
						<div class="col-xs-12 col-md-8 ccis-setting-col">
							<span class="ccis_setting_value">
								<div class="form-check form-check-inline">
									<input <?php checked( $l4_link_new_tab, true, true ); ?> class="form-check-input" type="radio" name="l4_link_new_tab" id="ccis_l4_link_new_tab_1" value="1">
									<label class="form-check-label" for="ccis_l4_link_new_tab_1">
										<span class="dashicons dashicons-yes"></span>
									</label>
								</div>

								<div class="form-check form-check-inline">
									<input <?php checked( $l4_link_new_tab, false, true ); ?> class="form-check-input" type="radio" name="l4_link_new_tab" id="ccis_l4_link_new_tab_0" value="0">
									<label class="form-check-label" for="ccis_l4_link_new_tab_0">
										<span class="dashicons dashicons-no"></span>
									</label>
								</div>

								<div class="ccis-setting-helper">
								<?php esc_html_e( 'Select Yes/No option to set whether link opens in a new tab.', 'ccis' ); ?>
								</div>
							</span>
						</div>
					</div>
					<div class="row">
						<div class="col-xs-12 col-md-4 ccis-setting-col">
							<span class="ccis_setting_key">
								<?php esc_html_e( 'Font Family', 'ccis' ); ?>
							</span>
						</div>
						<div class="col-xs-12 col-md-8 ccis-setting-col">
							<span class="ccis_setting_value">
								<div class="form-group">
									<input name="l4_font_family" type="text" id="ccis_l4_font_family" value="<?php echo esc_attr( $l4_font_family ); ?>">
								</div>

								<div class="ccis-setting-helper">
									<?php esc_html_e( 'Select the font family.', 'ccis' ); ?>
								</div>
							</span>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-12 col-md-4 ccis-setting-col">
				<span class="ccis_setting_key">
					<?php esc_html_e( 'Custom CSS', 'ccis' ); ?>
				</span>
			</div>
			<div class="col-xs-12 col-md-8 ccis-setting-col">
				<span class="ccis_setting_value">
					<div class="form-group">
						<textarea name="l4_custom_css" class="form-control ccis-custom-css" id="ccis_l4_custom_css"><?php echo esc_html( $l4_custom_css ); ?></textarea>
					</div>

					<div class="ccis-setting-helper">
						<?php esc_html_e( 'Enter any custom css into textarea field you want to apply on this slider.', 'ccis' ); ?>
						<div class="alert alert-secondary">
							<?php esc_html_e( 'Note: Please Do Not Use Style Tag With Custom CSS', 'ccis' ); ?>
						</div>
					</div>
				</span>
			</div>
		</div>
	</div>

	<a href="#" class="ccis-smooth-up" title="<?php esc_html_e( 'Back to top', 'ccis' ); ?>"></a>
</div>
