<?php

function zdt_dns_prefetch() {
?>
	<link rel="dns-prefetch" href="//fonts.googleapis.com">
	<link rel="dns-prefetch" href="//fonts.gstatic.com">
	<link rel="dns-prefetch" href="//ajax.googleapis.com">
<?php
}

add_action( 'wp_head', 'zdt_dns_prefetch', 1 );