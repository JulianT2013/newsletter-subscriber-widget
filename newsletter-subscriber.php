<?php
/**
 * Plugin name: Newsletter Subscriber Widget
 * Description: Form to subscribe to a newsletter.
 * Version: 1.0
 * Author: Julian Tapping
 */

/* Exit if Accessed Directly */
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/* Load scripts */
require_once( plugin_dir_path( __FILE__ ) . '/includes/newsletter-subscriber-scripts.php' );

/* Load class */
require_once( plugin_dir_path( __FILE__ ) . '/includes/newsletter-subscriber-class.php' );

/* Register Widget */
function register_newsletter_subscriber() {
	register_widget( 'newsletter_subscriber_widget' );
}

add_action( 'widgets_init', 'register_newsletter_subscriber' );