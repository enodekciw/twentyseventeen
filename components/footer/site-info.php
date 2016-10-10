<?php
/**
 * Displays footer site info
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

?>
<div class="site-info">
	<?php printf( wp_kses( __( '<a href="%s">%s</a>', 'twentyseventeen' ), array(  'a' => array( 'href' => array() ) ) ), esc_url( __( 'https://wordpress.org/', 'twentyseventeen' ) ), sprintf( __( 'Proudly powered by %s', 'twentyseventeen' ), 'WordPress' ) ); ?>
</div><!-- .site-info -->
