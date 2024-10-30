<?php
defined( 'ABSPATH' ) || die();
?>

</p><?php esc_html_e( 'Copy below shortcode in any Page/Post to publish your slider', 'ccis' ); ?></p>
<input readonly="readonly" type="text" value="<?php echo '[CCIS id=' . esc_attr( get_the_ID() ) . ']'; ?>">
