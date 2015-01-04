<?php
// Load sensitive data from a location outside the repo
if ( file_exists( dirname(__FILE__) . '/../zdt-me-config.php' ) ) {
	require_once( dirname(__FILE__) . '/../zdt-me-config.php' );
}

global $memcached_servers;
$memcached_servers = array(
	'default' => array(
		'127.0.0.1:11211'
	),
);

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
