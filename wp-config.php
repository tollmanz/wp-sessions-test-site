<?php
// Load sensitive data from a location outside the repo
if ( file_exists( '../zdt-me-config.php' ) ) {
	require_once( '../zdt-me-config.php' );
}

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
