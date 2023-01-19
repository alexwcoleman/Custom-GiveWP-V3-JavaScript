<?php
/**
 * Plugin Name:		Custom GiveWP JS.
 * Description:		Custom JS inserted in GiveWP's iframe.
 * Author:			Alex Coleman
 * Version: 		1.0	
 */

defined('ABSPATH') || exit;

function add_custom_give_script() {
	wp_enqueue_script( 'give-custom-script', plugin_dir_url( __FILE__ ) . 'assets/js/give-custom-script.js' );
}
add_action( 'give_embed_head', 'add_custom_give_script' );

// ADDING SCRIPTS PER FORM
function add_script_per_form( $form_id ) {

	// Customize form title here or remove conditional for all forms.
	if ( $form_id == 3958 ) {
		wp_enqueue_script( 'give-3958', plugin_dir_url( __FILE__ ) . 'assets/js/test-3958.js' );
	}
}

add_action( 'give_pre_form_output', 'add_script_per_form', 10, 1 );