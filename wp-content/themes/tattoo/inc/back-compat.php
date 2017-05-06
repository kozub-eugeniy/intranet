<?php
/**
 * Tattoo back compat functionality
 * *
 * @package WordPress
 * @subpackage Tattoo
 * @since Tattoo 1.0
 */
function tattoo_switch_theme() {
	switch_theme( WP_DEFAULT_THEME, WP_DEFAULT_THEME );

	unset( $_GET['activated'] );

	add_action( 'admin_notices', 'tattoo_upgrade_notice' );
}
add_action( 'after_switch_theme', 'tattoo_switch_theme' );

/**
 * Adds a message for unsuccessful theme switch.
 *
 * Prints an update nag after an unsuccessful attempt to switch to
 * Tattoo on WordPress versions prior to 4.4.
 *
 * @since Tattoo 1.0
 *
 * @global string $wp_version WordPress version.
 */
function tattoo_upgrade_notice() {
	$message = sprintf( __( 'Tattoo requires at least WordPress version 4.4. You are running version %s. Please upgrade and try again.', 'tattoo' ), $GLOBALS['wp_version'] );
	printf( '<div class="error"><p>%s</p></div>', $message );
}

/**
 * Prevents the Customizer from being loaded on WordPress versions prior to 4.4.
 *
 * @since Tattoo 1.0
 *
 * @global string $wp_version WordPress version.
 */
function tattoo_customize() {
	wp_die( sprintf( __( 'Tattoo requires at least WordPress version 4.4. You are running version %s. Please upgrade and try again.', 'tattoo' ), $GLOBALS['wp_version'] ), '', array(
		'back_link' => true,
	) );
}
add_action( 'load-customize.php', 'tattoo_customize' );

/**
 * Prevents the Theme Preview from being loaded on WordPress versions prior to 4.4.
 *
 * @since Tattoo 1.0
 *
 * @global string $wp_version WordPress version.
 */
function tattoo_preview() {
	if ( isset( $_GET['preview'] ) ) {
		wp_die( sprintf( __( 'Tattoo requires at least WordPress version 4.4. You are running version %s. Please upgrade and try again.', 'tattoo' ), $GLOBALS['wp_version'] ) );
	}
}
add_action( 'template_redirect', 'tattoo_preview' );
