<?php
/**
 * VW Security Guard: Block Patterns
 *
 * @package VW Security Guard
 * @since   1.0.0
 */

/**
 * Register Block Pattern Category.
 */
if ( function_exists( 'register_block_pattern_category' ) ) {

	register_block_pattern_category(
		'vw-security-guard',
		array( 'label' => __( 'VW Security Guard', 'vw-security-guard' ) )
	);
}

/**
 * Register Block Patterns.
 */
if ( function_exists( 'register_block_pattern' ) ) {
	register_block_pattern(
		'vw-security-guard/banner-section',
		array(
			'title'      => __( 'Banner Section', 'vw-security-guard' ),
			'categories' => array( 'vw-security-guard' ),
			'content'    => "<!-- wp:cover {\"url\":\"" . esc_url(get_template_directory_uri()) . "/inc/block-patterns/images/banner.png\",\"id\":9009,\"dimRatio\":70,\"customGradient\":\"linear-gradient(100deg,rgb(0,37,61) 48%,rgba(9,60,78,0.5) 51%)\",\"align\":\"full\",\"className\":\"main-banner\"} -->\n<div class=\"wp-block-cover alignfull is-light main-banner\"><span aria-hidden=\"true\" class=\"wp-block-cover__background has-background-dim-70 has-background-dim wp-block-cover__gradient-background has-background-gradient\" style=\"background:linear-gradient(100deg,rgb(0,37,61) 48%,rgba(9,60,78,0.5) 51%)\"></span><img class=\"wp-block-cover__image-background wp-image-9009\" src=\"" . esc_url(get_template_directory_uri()) . "/inc/block-patterns/images/banner.png\" data-object-fit=\"cover\"/><div class=\"wp-block-cover__inner-container\"><!-- wp:columns {\"align\":\"wide\",\"className\":\"mx-5 px-lg-2\"} -->\n<div class=\"wp-block-columns alignwide mx-5 px-lg-2\"><!-- wp:column {\"verticalAlignment\":\"center\",\"className\":\"ps-lg-5\"} -->\n<div class=\"wp-block-column is-vertically-aligned-center ps-lg-5\"><!-- wp:heading {\"textAlign\":\"left\",\"level\":1,\"style\":{\"typography\":{\"fontSize\":40},\"elements\":{\"link\":{\"color\":{\"text\":\"var:preset|color|white\"}}}},\"textColor\":\"white\"} -->\n<h1 class=\"wp-block-heading has-text-align-left has-white-color has-text-color has-link-color\" style=\"font-size:40px\">Lorem ipsum dolor sit amet, consectetur adipiscing elit</h1>\n<!-- /wp:heading -->\n\n<!-- wp:paragraph {\"align\":\"left\",\"style\":{\"typography\":{\"fontSize\":15},\"elements\":{\"link\":{\"color\":{\"text\":\"var:preset|color|white\"}}}},\"textColor\":\"white\",\"className\":\"text-left mb-4\"} -->\n<p class=\"has-text-align-left text-left mb-4 has-white-color has-text-color has-link-color\" style=\"font-size:15px\">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:buttons {\"className\":\"m-0\",\"layout\":{\"type\":\"flex\",\"justifyContent\":\"left\"}} -->\n<div class=\"wp-block-buttons m-0\"><!-- wp:button {\"style\":{\"color\":{\"background\":\"#00c8ff\"}}} -->\n<div class=\"wp-block-button\"><a class=\"wp-block-button__link has-background wp-element-button\" style=\"background-color:#00c8ff\">GET SERVICE QUOTE</a></div>\n<!-- /wp:button --></div>\n<!-- /wp:buttons --></div>\n<!-- /wp:column -->\n\n<!-- wp:column -->\n<div class=\"wp-block-column\"></div>\n<!-- /wp:column --></div>\n<!-- /wp:columns --></div></div>\n<!-- /wp:cover -->",
		)
	);

	register_block_pattern(
		'vw-security-guard/services-section',
		array(
			'title'      => __( 'Services Section', 'vw-security-guard' ),
			'categories' => array( 'vw-security-guard' ),
			'content'    => "<!-- wp:cover {\"overlayColor\":\"white\",\"align\":\"wide\",\"className\":\"services-section m-0\"} -->\n<div class=\"wp-block-cover alignwide has-white-background-color has-background-dim services-section m-0\"><div class=\"wp-block-cover__inner-container\"><!-- wp:heading {\"textAlign\":\"center\",\"style\":{\"color\":{\"text\":\"#04456f\"},\"typography\":{\"fontSize\":30}}} -->\n<h2 class=\"has-text-align-center has-text-color\" style=\"color:#04456f;font-size:30px\">OUR SERVICES</h2>\n<!-- /wp:heading -->\n\n<!-- wp:columns {\"align\":\"wide\",\"className\":\"m-0 px-lg-4\"} -->\n<div class=\"wp-block-columns alignwide m-0 px-lg-4\"><!-- wp:column {\"className\":\"serv-box mb-4\"} -->\n<div class=\"wp-block-column serv-box mb-4\"><!-- wp:columns -->\n<div class=\"wp-block-columns\"><!-- wp:column {\"verticalAlignment\":\"center\",\"width\":\"33.33%\"} -->\n<div class=\"wp-block-column is-vertically-aligned-center\" style=\"flex-basis:33.33%\"><!-- wp:image {\"align\":\"center\",\"id\":9031,\"sizeSlug\":\"large\",\"linkDestination\":\"media\"} -->\n<div class=\"wp-block-image\"><figure class=\"aligncenter size-large\"><img src=\"" . esc_url(get_template_directory_uri()) . "/inc/block-patterns/images/services-1.png\" alt=\"\" class=\"wp-image-9031\"/></figure></div>\n<!-- /wp:image --></div>\n<!-- /wp:column -->\n\n<!-- wp:column {\"width\":\"66.66%\"} -->\n<div class=\"wp-block-column\" style=\"flex-basis:66.66%\"><!-- wp:heading {\"textAlign\":\"left\",\"level\":3,\"style\":{\"color\":{\"text\":\"#04456f\"},\"typography\":{\"fontSize\":15}}} -->\n<h3 class=\"has-text-align-left has-text-color\" style=\"color:#04456f;font-size:15px\">NETWORK SECURITY</h3>\n<!-- /wp:heading -->\n\n<!-- wp:paragraph {\"align\":\"left\",\"className\":\"text-left mb-0\",\"style\":{\"color\":{\"text\":\"#a4b1bf\"},\"typography\":{\"fontSize\":12}}} -->\n<p class=\"has-text-align-left text-left mb-0 has-text-color\" style=\"color:#a4b1bf;font-size:12px\">Lorem Ipsum has been the industrys standard.&nbsp;Lorem Ipsum has been the industrys standard.&nbsp;</p>\n<!-- /wp:paragraph --></div>\n<!-- /wp:column --></div>\n<!-- /wp:columns --></div>\n<!-- /wp:column -->\n\n<!-- wp:column {\"className\":\"serv-box mb-4\"} -->\n<div class=\"wp-block-column serv-box mb-4\"><!-- wp:columns -->\n<div class=\"wp-block-columns\"><!-- wp:column {\"verticalAlignment\":\"center\",\"width\":\"33.33%\"} -->\n<div class=\"wp-block-column is-vertically-aligned-center\" style=\"flex-basis:33.33%\"><!-- wp:image {\"align\":\"center\",\"id\":9036,\"sizeSlug\":\"large\",\"linkDestination\":\"media\"} -->\n<div class=\"wp-block-image\"><figure class=\"aligncenter size-large\"><img src=\"" . esc_url(get_template_directory_uri()) . "/inc/block-patterns/images/services-2.png\" alt=\"\" class=\"wp-image-9036\"/></figure></div>\n<!-- /wp:image --></div>\n<!-- /wp:column -->\n\n<!-- wp:column {\"width\":\"66.66%\"} -->\n<div class=\"wp-block-column\" style=\"flex-basis:66.66%\"><!-- wp:heading {\"textAlign\":\"left\",\"level\":3,\"style\":{\"color\":{\"text\":\"#04456f\"},\"typography\":{\"fontSize\":15}}} -->\n<h3 class=\"has-text-align-left has-text-color\" style=\"color:#04456f;font-size:15px\">DEFENCE TRAINIG</h3>\n<!-- /wp:heading -->\n\n<!-- wp:paragraph {\"align\":\"left\",\"className\":\"text-left mb-0\",\"style\":{\"color\":{\"text\":\"#a4b1bf\"},\"typography\":{\"fontSize\":12}}} -->\n<p class=\"has-text-align-left text-left mb-0 has-text-color\" style=\"color:#a4b1bf;font-size:12px\">Lorem Ipsum has been the industrys standard.&nbsp;Lorem Ipsum has been the industrys standard.&nbsp;</p>\n<!-- /wp:paragraph --></div>\n<!-- /wp:column --></div>\n<!-- /wp:columns --></div>\n<!-- /wp:column -->\n\n<!-- wp:column {\"className\":\"serv-box mb-4\"} -->\n<div class=\"wp-block-column serv-box mb-4\"><!-- wp:columns -->\n<div class=\"wp-block-columns\"><!-- wp:column {\"verticalAlignment\":\"center\",\"width\":\"33.33%\"} -->\n<div class=\"wp-block-column is-vertically-aligned-center\" style=\"flex-basis:33.33%\"><!-- wp:image {\"align\":\"center\",\"id\":9037,\"sizeSlug\":\"large\",\"linkDestination\":\"media\"} -->\n<div class=\"wp-block-image\"><figure class=\"aligncenter size-large\"><img src=\"" . esc_url(get_template_directory_uri()) . "/inc/block-patterns/images/services-3.png\" alt=\"\" class=\"wp-image-9037\"/></figure></div>\n<!-- /wp:image --></div>\n<!-- /wp:column -->\n\n<!-- wp:column {\"width\":\"66.66%\"} -->\n<div class=\"wp-block-column\" style=\"flex-basis:66.66%\"><!-- wp:heading {\"textAlign\":\"left\",\"level\":3,\"style\":{\"color\":{\"text\":\"#04456f\"},\"typography\":{\"fontSize\":15}}} -->\n<h3 class=\"has-text-align-left has-text-color\" style=\"color:#04456f;font-size:15px\">GUARD HOUSE</h3>\n<!-- /wp:heading -->\n\n<!-- wp:paragraph {\"align\":\"left\",\"className\":\"text-left mb-0\",\"style\":{\"color\":{\"text\":\"#a4b1bf\"},\"typography\":{\"fontSize\":12}}} -->\n<p class=\"has-text-align-left text-left mb-0 has-text-color\" style=\"color:#a4b1bf;font-size:12px\">Lorem Ipsum has been the industrys standard.&nbsp;Lorem Ipsum has been the industrys standard.&nbsp;</p>\n<!-- /wp:paragraph --></div>\n<!-- /wp:column --></div>\n<!-- /wp:columns --></div>\n<!-- /wp:column --></div>\n<!-- /wp:columns --></div></div>\n<!-- /wp:cover -->",
		)
	);
}