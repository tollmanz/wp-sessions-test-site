<?php

function zdt_async( $tag, $handle ) {
	if ( 'twentyfifteen-fonts-css' !== $handle ) {
		return $tag;
	}

	return str_replace( ' src', ' defer="defer" src', $tag );
}

add_filter( 'script_loader_tag', 'zdt-async', 10, 2 );