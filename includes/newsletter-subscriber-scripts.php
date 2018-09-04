<?php
/**
 * Created by PhpStorm.
 * User: Julian
 * Date: 4/09/2018
 * Time: 12:30 PM
 */

/* Add scripts */
function PREFEIX_add_scripts() {
	wp_enqueue_style( 'ns-main-style', plugins_url() . '/newsletter-subscriber/css/styles.css' );
	wp_enqueue_style( 'ns-main-script', plugins_url() . '/newsletter-subscriber/js/main.js' );
}

add_action( 'wp_enqueue_scripts', 'ns_add_scripts' );