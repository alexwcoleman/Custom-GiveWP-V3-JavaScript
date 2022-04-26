<?php
/**
 * Plugin Name:       Custom GiveWP JS.
 * Description:       Custom JS inserted in GiveWP's iframe.
 */
function add_custom_give_script() {
	wp_enqueue_script( 'give-custom-script', plugin_dir_url( __FILE__ ) . 'assets/js/give-custom-script.js' );
}
add_action( 'give_embed_head', 'add_custom_give_script' );
