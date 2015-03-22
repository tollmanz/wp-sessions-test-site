<?php

function zdt_remove_google_fonts() {
	wp_deregister_style( 'twentyfifteen-fonts' );
}

add_filter( 'wp_enqueue_scripts', 'zdt_remove_google_fonts', 11 );

function zdt_async_load_fonts() {
?>
	<script type="text/javascript">
		WebFontConfig = {
			google: {
				families: [
					'Noto Sans:400italic,700italic,400,700',
					'Noto Serif:400italic,700italic,400,700',
					'Inconsolata:400,700'
				]
			}
		};

		(function() {
			var wf = document.createElement('script');
			wf.src = ('https:' == document.location.protocol ? 'https' : 'http') +
			'://ajax.googleapis.com/ajax/libs/webfont/1/webfont.js';
			wf.type = 'text/javascript';
			wf.async = 'true';
			var s = document.getElementsByTagName('script')[0];
			s.parentNode.insertBefore(wf, s);
		})();
	</script>
<?php
}

add_action( 'wp_footer', 'zdt_async_load_fonts' );