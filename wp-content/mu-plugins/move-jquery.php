<?php

function zdt_move_jquery() {
	if ( false === is_admin() ) {
		wp_deregister_script( 'jquery' );
		wp_register_script(
			'jquery',
			site_url( '/wp-includes/js/jquery/jquery.js' ),
			array(),
			'1.11.1',
			true
		);
	}
}

add_action( 'init', 'zdt_move_jquery', 11 );