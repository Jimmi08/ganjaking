<?php
/**
 * Cart Message Template
 *
 * @class   YWCM_Cart_Message
 * @package YITH
 * @since   1.0.0
 * @author  Your Inspiration Themes
 */

/**
 * Variables.
 *
 * @var string $slug
 * @var int $ywcm_id
 */
if ( ! defined( 'ABSPATH' ) || ! defined( 'YITH_YWCM_VERSION' ) ) {
	exit; // Exit if accessed directly.
}
?>
<div id="yit-cart-message-<?php echo esc_attr( $slug ); ?>" class="yith-cart-message yith-cart-message-layout6" data-id="<?php echo esc_attr( $ywcm_id ); ?>">
	<div class="icon-wrapper"></div><div class="content"><?php echo $text . ' ' . $button; //phpcs:ignore ?></div>
</div>
