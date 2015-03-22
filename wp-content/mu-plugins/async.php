<?php

function zdt_remove_google_fonts() {
	wp_deregister_style( 'twentyfifteen-fonts' );
	wp_deregister_style( 'genericons' );
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

function zdt_late_load_genericons() {
?>
	<style>
		@font-face{font-family:'Genericons';src:url('/wp-content/themes/twentyfifteen/genericons/Genericons.eot')}@font-face{font-family:'Genericons';src:url('/wp-content/themes/twentyfifteen/genericons/Genericons.woff') format('woff'),
		url('/wp-content/themes/twentyfifteen/genericons/Genericons.ttf') format('truetype'),
		url('/wp-content/themes/twentyfifteen/genericons/Genericons.svg#genericonsregular') format('svg');font-weight:normal;font-style:normal}@media screen and (-webkit-min-device-pixel-ratio:0){@font-face{font-family:"Genericons";src:url("/wp-content/themes/twentyfifteen/genericons/Genericons.svg#Genericons") format("svg")}}.genericon{font-size:16px;vertical-align:top;text-align:center;-moz-transition:color .1s ease-in 0;-webkit-transition:color .1s ease-in 0;display:inline-block;font-family:"Genericons";font-style:normal;font-weight:normal;font-variant:normal;line-height:1;text-decoration:inherit;text-transform:none;-moz-osx-font-smoothing:grayscale;-webkit-font-smoothing:antialiased;speak:none}.genericon-404:before{content:"\f423"}.genericon-activity:before{content:"\f508"}.genericon-anchor:before{content:"\f509"}.genericon-aside:before{content:"\f101"}.genericon-attachment:before{content:"\f416"}.genericon-audio:before{content:"\f109"}.genericon-bold:before{content:"\f471"}.genericon-book:before{content:"\f444"}.genericon-bug:before{content:"\f50a"}.genericon-cart:before{content:"\f447"}.genericon-category:before{content:"\f301"}.genericon-chat:before{content:"\f108"}.genericon-checkmark:before{content:"\f418"}.genericon-close:before{content:"\f405"}.genericon-close-alt:before{content:"\f406"}.genericon-cloud:before{content:"\f426"}.genericon-cloud-download:before{content:"\f440"}.genericon-cloud-upload:before{content:"\f441"}.genericon-code:before{content:"\f462"}.genericon-codepen:before{content:"\f216"}.genericon-cog:before{content:"\f445"}.genericon-collapse:before{content:"\f432"}.genericon-comment:before{content:"\f300"}.genericon-day:before{content:"\f305"}.genericon-digg:before{content:"\f221"}.genericon-document:before{content:"\f443"}.genericon-dot:before{content:"\f428"}.genericon-downarrow:before{content:"\f502"}.genericon-download:before{content:"\f50b"}.genericon-draggable:before{content:"\f436"}.genericon-dribbble:before{content:"\f201"}.genericon-dropbox:before{content:"\f225"}.genericon-dropdown:before{content:"\f433"}.genericon-dropdown-left:before{content:"\f434"}.genericon-edit:before{content:"\f411"}.genericon-ellipsis:before{content:"\f476"}.genericon-expand:before{content:"\f431"}.genericon-external:before{content:"\f442"}.genericon-facebook:before{content:"\f203"}.genericon-facebook-alt:before{content:"\f204"}.genericon-fastforward:before{content:"\f458"}.genericon-feed:before{content:"\f413"}.genericon-flag:before{content:"\f468"}.genericon-flickr:before{content:"\f211"}.genericon-foursquare:before{content:"\f226"}.genericon-fullscreen:before{content:"\f474"}.genericon-gallery:before{content:"\f103"}.genericon-github:before{content:"\f200"}.genericon-googleplus:before{content:"\f206"}.genericon-googleplus-alt:before{content:"\f218"}.genericon-handset:before{content:"\f50c"}.genericon-heart:before{content:"\f461"}.genericon-help:before{content:"\f457"}.genericon-hide:before{content:"\f404"}.genericon-hierarchy:before{content:"\f505"}.genericon-home:before{content:"\f409"}.genericon-image:before{content:"\f102"}.genericon-info:before{content:"\f455"}.genericon-instagram:before{content:"\f215"}.genericon-italic:before{content:"\f472"}.genericon-key:before{content:"\f427"}.genericon-leftarrow:before{content:"\f503"}.genericon-link:before{content:"\f107"}.genericon-linkedin:before{content:"\f207"}.genericon-linkedin-alt:before{content:"\f208"}.genericon-location:before{content:"\f417"}.genericon-lock:before{content:"\f470"}.genericon-mail:before{content:"\f410"}.genericon-maximize:before{content:"\f422"}.genericon-menu:before{content:"\f419"}.genericon-microphone:before{content:"\f50d"}.genericon-minimize:before{content:"\f421"}.genericon-minus:before{content:"\f50e"}.genericon-month:before{content:"\f307"}.genericon-move:before{content:"\f50f"}.genericon-next:before{content:"\f429"}.genericon-notice:before{content:"\f456"}.genericon-paintbrush:before{content:"\f506"}.genericon-path:before{content:"\f219"}.genericon-pause:before{content:"\f448"}.genericon-phone:before{content:"\f437"}.genericon-picture:before{content:"\f473"}.genericon-pinned:before{content:"\f308"}.genericon-pinterest:before{content:"\f209"}.genericon-pinterest-alt:before{content:"\f210"}.genericon-play:before{content:"\f452"}.genericon-plugin:before{content:"\f439"}.genericon-plus:before{content:"\f510"}.genericon-pocket:before{content:"\f224"}.genericon-polldaddy:before{content:"\f217"}.genericon-portfolio:before{content:"\f460"}.genericon-previous:before{content:"\f430"}.genericon-print:before{content:"\f469"}.genericon-quote:before{content:"\f106"}.genericon-rating-empty:before{content:"\f511"}.genericon-rating-full:before{content:"\f512"}.genericon-rating-half:before{content:"\f513"}.genericon-reddit:before{content:"\f222"}.genericon-refresh:before{content:"\f420"}.genericon-reply:before{content:"\f412"}.genericon-reply-alt:before{content:"\f466"}.genericon-reply-single:before{content:"\f467"}.genericon-rewind:before{content:"\f459"}.genericon-rightarrow:before{content:"\f501"}.genericon-search:before{content:"\f400"}.genericon-send-to-phone:before{content:"\f438"}.genericon-send-to-tablet:before{content:"\f454"}.genericon-share:before{content:"\f415"}.genericon-show:before{content:"\f403"}.genericon-shuffle:before{content:"\f514"}.genericon-sitemap:before{content:"\f507"}.genericon-skip-ahead:before{content:"\f451"}.genericon-skip-back:before{content:"\f450"}.genericon-skype:before{content:"\f220"}.genericon-spam:before{content:"\f424"}.genericon-spotify:before{content:"\f515"}.genericon-standard:before{content:"\f100"}.genericon-star:before{content:"\f408"}.genericon-status:before{content:"\f105"}.genericon-stop:before{content:"\f449"}.genericon-stumbleupon:before{content:"\f223"}.genericon-subscribe:before{content:"\f463"}.genericon-subscribed:before{content:"\f465"}.genericon-summary:before{content:"\f425"}.genericon-tablet:before{content:"\f453"}.genericon-tag:before{content:"\f302"}.genericon-time:before{content:"\f303"}.genericon-top:before{content:"\f435"}.genericon-trash:before{content:"\f407"}.genericon-tumblr:before{content:"\f214"}.genericon-twitch:before{content:"\f516"}.genericon-twitter:before{content:"\f202"}.genericon-unapprove:before{content:"\f446"}.genericon-unsubscribe:before{content:"\f464"}.genericon-unzoom:before{content:"\f401"}.genericon-uparrow:before{content:"\f500"}.genericon-user:before{content:"\f304"}.genericon-video:before{content:"\f104"}.genericon-videocamera:before{content:"\f517"}.genericon-vimeo:before{content:"\f212"}.genericon-warning:before{content:"\f414"}.genericon-website:before{content:"\f475"}.genericon-week:before{content:"\f306"}.genericon-wordpress:before{content:"\f205"}.genericon-xpost:before{content:"\f504"}.genericon-youtube:before{content:"\f213"}.genericon-zoom:before{content:"\f402"}
	</style>
<?php
}

add_action( 'wp_footer', 'zdt_late_load_genericons', 20 );