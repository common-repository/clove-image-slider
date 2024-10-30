<?php
defined( 'ABSPATH' ) || die();

$post_id = $post->ID;

$images = get_post_meta( $post_id, 'ccis_image', true );

wp_nonce_field( 'save_slider_meta_' . $post_id, 'slider_meta_' . $post_id );
?>
<div id="ccis-container">
	<ul id="ccis-slider-images" class="clearfix">
	<?php
	if ( is_array( $images ) && count( $images ) ) {
		foreach ( $images as $key => $image ) {
			?>
		<li class="ccis-image-entry">
			<input type="hidden" name="image[]" value="<?php echo esc_attr( $image['id'] ); ?>">
			
			<img src="<?php echo esc_url( wp_get_attachment_url( $image['id'] ) ); ?>" />
			<label><?php esc_html_e( 'Enter slide title', 'ccis' ); ?></label>
			<input type="text" name="image_title[]" placeholder="<?php esc_attr_e( 'Enter slide title', 'ccis' ); ?>" value="<?php echo esc_attr( $image['title'] ); ?>" />
			<label><?php esc_html_e( 'Enter slide title link', 'ccis' ); ?></label>
			<input type="text" name="image_link[]" placeholder="<?php esc_attr_e( 'Enter slide link', 'ccis' ); ?>" value="<?php echo esc_attr( isset( $image['link'] ) ? $image['link'] : '' ); ?>" />
			<label><?php esc_html_e( 'Enter slide description', 'ccis' ); ?></label>
			<textarea rows="4" class="ccis_textarea_<?php echo esc_attr( $image['id'] ); ?>" name="image_desc[]" placeholder="<?php esc_attr_e( 'Enter slide description', 'ccis' ); ?>"><?php echo wp_kses_post( $image['desc'] ); ?></textarea>
			<button type="button" data-id="<?php echo esc_attr( $image['id'] ); ?>" class="btn btn-sm btn-primary btn-block ccis-rich-editor-btn" data-toggle="modal" data-target="#ccis-editor-modal">
				<?php esc_html_e( 'Rich Text Editor', 'ccis' ); ?> <span class="dashicons dashicons-admin-appearance"></span>
			</button>
			<button type="button" class=" btn btn-sm btn-danger btn-block ccis-remove-image-btn"><?php esc_html_e( 'Delete', 'ccis' ); ?><span class="dashicons dashicons-trash"></span></button>
		</li>
			<?php
		}
	}
	?>
	</ul>
</div>

<div class="ccis-action-container clearfix">
	<div class="ccis-image-entry add-ccis-image" id="ccis-upload-image-btn" data-title="<?php esc_attr_e( 'Upload Image', 'ccis' ); ?>" data-button-text="<?php esc_attr_e( 'Select', 'ccis' ); ?>" data-slide-title="<?php esc_attr_e( 'Enter slide title', 'ccis' ); ?>" data-slide-desc="<?php esc_attr_e( 'Enter slide description', 'ccis' ); ?>" data-slide-link="<?php esc_attr_e( 'Enter slide link', 'ccis' ); ?>" data-rich-editor="<?php esc_attr_e( 'Use Rich Text Editor', 'ccis' ); ?>">
		<div class="dashicons dashicons-plus"></div>
		<p><?php esc_html_e( 'Add Slide', 'ccis' ); ?></p>
	</div>
	<div class="ccis-image-entry delete-ccis-image" id="ccis-delete-all-btn" data-message="<?php esc_attr_e( 'Are you sure to delete all the slides?', 'ccis' ); ?>">
		<div class="dashicons dashicons-trash"></div>
		<p><?php esc_html_e( 'Delete All Slides', 'ccis' ); ?></p>
	</div>
</div>

<div class="modal fade" id="ccis-editor-modal" role="dialog">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title"><?php esc_attr_e( 'Rich Editor', 'ccis' ); ?></h4>
				<button type="button" class="close" data-dismiss="modal">&times;</button>
			</div>
			<div class="modal-body">
				<p>
					<?php
					$settings = array(
						'media_buttons' => false,
						'quicktags'     => array( 'buttons' => 'strong,em,del,link,close' ),
					);
					wp_editor( '', 'fetch_wpeditor_data', $settings );
					?>
					<input type="hidden" value="" id="fetch_wpelement" name="fetch_wpelement" />
				</p>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-primary ccis-rich-editor-continue-btn" data-dismiss="modal"><?php esc_attr_e( 'Continue', 'ccis' ); ?></button>
				<button type="button" class="btn btn-secondary" data-dismiss="modal"><?php esc_attr_e( 'Exit', 'ccis' ); ?></button>
			</div>
		</div>
	</div>
</div>
