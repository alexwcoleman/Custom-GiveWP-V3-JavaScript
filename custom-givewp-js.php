<?php
/**
 * Plugin Name:		Custom GiveWP V3 JS.
 * Description:		Custom JS inserted in GiveWP's iframe for Visual Form Builder forms.
 * Author:			Alex Coleman
 * Version: 		1.0	
 */

defined('ABSPATH') || exit;



function givewp_custom_v3_script() {
	wp_enqueue_script( 'give-custom-V3-script', plugin_dir_url( __FILE__ ) . 'assets/js/give-custom-V3-script.js', array(), '1.0.0', true );
}
add_action( 'givewp_donation_form_enqueue_scripts', 'givewp_custom_v3_script' );