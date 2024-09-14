<?php
	
	/*----------------------First highlight color-------------------*/

	$vw_security_guard_first_color = get_theme_mod('vw_security_guard_first_color');

	$vw_security_guard_custom_css = '';

	if($vw_security_guard_first_color != false){
		$vw_security_guard_custom_css .='.service-btn a, #slider .carousel-control-prev-icon, #slider .carousel-control-next-icon, .more-btn a, .catgory-box:hover, input[type="submit"], #footer .tagcloud a:hover, .scrollup i, nav.woocommerce-MyAccount-navigation ul li, .woocommerce #respond input#submit, .woocommerce a.button, .woocommerce button.button, .woocommerce input.button, .woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt, #sidebar input[type="submit"], .content-bttn i, .pagination span, .pagination a, #sidebar .tagcloud a:hover, .main-navigation a:hover, .toggle-nav i, #sidebar .widget_price_filter .ui-slider .ui-slider-range, #sidebar .widget_price_filter .ui-slider .ui-slider-handle, #sidebar .woocommerce-product-search button, #footer .widget_price_filter .ui-slider .ui-slider-range, #footer .widget_price_filter .ui-slider .ui-slider-handle, #footer .woocommerce-product-search button, #footer a.custom_read_more, #sidebar .more-button i, .error-btn i, #footer .custom-social-icons i:hover, #sidebar .custom-social-icons i:hover, .nav-previous a, .nav-next a, .woocommerce nav.woocommerce-pagination ul li a, #preloader, #footer .wp-block-search .wp-block-search__button, #sidebar .wp-block-search .wp-block-search__button, #slider .more-btn a,.bradcrumbs a,.bradcrumbs span,.post-categories li a,.wp-block-tag-cloud a:hover,.wp-block-button__link,#footer .custom-about-us a.custom_read_more, #sidebar .custom-about-us a.custom_read_more,nav.navigation.posts-navigation .nav-previous a,nav.navigation.posts-navigation .nav-next a{';
			$vw_security_guard_custom_css .='background-color: '.esc_attr($vw_security_guard_first_color).';';
		$vw_security_guard_custom_css .='}';
	}
	if($vw_security_guard_first_color != false){
		$vw_security_guard_custom_css .='#comments input[type="submit"].submit,.wp-block-woocommerce-cart .wc-block-cart__submit-button, .wc-block-components-checkout-place-order-button, .wc-block-components-totals-coupon__button,.wc-block-components-order-summary-item__quantity, .wc-block-components-order-summary-item__quantity{';
			$vw_security_guard_custom_css .='background-color: '.esc_attr($vw_security_guard_first_color).'!important;';
		$vw_security_guard_custom_css .='}';
	}
	if($vw_security_guard_first_color != false){
		$vw_security_guard_custom_css .='a, #topbar .custom-social-icons i:hover, .mid-header .icon i, #footer h3, .woocommerce-info::before, .woocommerce-message::before, .post-main-box:hover h2 a, .post-main-box:hover .post-info a, .single-post .post-info:hover a, .post-main-box:hover .content-bttn a.blogbutton-small, .post-navigation a:hover .post-title, .post-navigation a:focus .post-title,#footer li a:hover, #sidebar ul li a:hover, .main-navigation ul.sub-menu a:hover, .entry-content a, #sidebar .textwidget p a, .textwidget p a, #comments p a, .slider .inner_carousel p a, #sidebar a.custom_read_more:hover, #footer .custom-social-icons i, #sidebar .custom-social-icons i, .mid-header p a:hover, .logo .site-title a:hover, .copyright a:hover, #slider .inner_carousel h1 a:hover, #footer .wp-block-search .wp-block-search__label{';
			$vw_security_guard_custom_css .='color: '.esc_attr($vw_security_guard_first_color).';';
		$vw_security_guard_custom_css .='}';
	}
	if($vw_security_guard_first_color != false){
		$vw_security_guard_custom_css .='#footer .custom-social-icons i, #sidebar .custom-social-icons i, #footer .custom-social-icons i:hover, #sidebar .custom-social-icons i:hover{';
			$vw_security_guard_custom_css .='border-color: '.esc_attr($vw_security_guard_first_color).';';
		$vw_security_guard_custom_css .='}';
	}
	if($vw_security_guard_first_color != false){
		$vw_security_guard_custom_css .='.catgory-box hr, .woocommerce-info, .woocommerce-message, .post-info hr, .main-navigation ul ul{';
			$vw_security_guard_custom_css .='border-top-color: '.esc_attr($vw_security_guard_first_color).';';
		$vw_security_guard_custom_css .='}';
	}
	if($vw_security_guard_first_color != false){
		$vw_security_guard_custom_css .='#slider, .main-navigation ul ul{';
			$vw_security_guard_custom_css .='border-bottom-color: '.esc_attr($vw_security_guard_first_color).';';
		$vw_security_guard_custom_css .='}';
	}

	/*---------------Second highlight color-------------------*/

	$vw_security_guard_second_color = get_theme_mod('vw_security_guard_second_color');

	if($vw_security_guard_second_color != false){
		$vw_security_guard_custom_css .='.bg-top, #footer, #footer-2, .woocommerce #respond input#submit:hover, .woocommerce a.button:hover, .woocommerce button.button:hover, .woocommerce input.button:hover, .woocommerce #respond input#submit.alt:hover, .woocommerce a.button.alt:hover, .woocommerce button.button.alt:hover, .woocommerce input.button.alt:hover, .woocommerce span.onsale, .blogbutton-small, .pagination a:hover, .pagination .current, .bg-menu, #comments a.comment-reply-link, #sidebar a.custom_read_more, .error-btn a, .nav-previous a:hover, .nav-next a:hover, .woocommerce nav.woocommerce-pagination ul li a:hover, .woocommerce nav.woocommerce-pagination ul li span.current{';
			$vw_security_guard_custom_css .='background-color: '.esc_attr($vw_security_guard_second_color).';';
		$vw_security_guard_custom_css .='}';
	}

	if($vw_security_guard_second_color != false){
		$vw_security_guard_custom_css .='.wp-block-woocommerce-cart .wc-block-cart__submit-button:hover, .wc-block-components-checkout-place-order-button:hover{';
			$vw_security_guard_custom_css .='box-shadow:0 0.4rem 1rem  '.esc_attr($vw_security_guard_second_color).'!important;';
		$vw_security_guard_custom_css .='}';
	}

	if($vw_security_guard_second_color != false){
		$vw_security_guard_custom_css .='.woocommerce #respond input#submit:hover, .woocommerce a.button:hover, .woocommerce button.button:hover, .woocommerce input.button:hover, .woocommerce #respond input#submit.alt:hover, .woocommerce a.button.alt:hover, .woocommerce button.button.alt:hover, .woocommerce input.button.alt:hover{';
			$vw_security_guard_custom_css .='background-color: '.esc_attr($vw_security_guard_second_color).'!important;';
		$vw_security_guard_custom_css .='}';
	}

	if($vw_security_guard_second_color != false){
		$vw_security_guard_custom_css .='.service-btn i, .logo h1 a, p.site-description, .mid-header p, .mid-header p a, .more-btn i, #security-service h2, .catgory-box h3 a, h1, h2, h3, h4, h5, h6, #sidebar h3, .post-main-box h2 a, .logo h1 a, .logo p.site-title a, nav.woocommerce-MyAccount-navigation ul li a:hover, .service-btn a:hover, #slider .more-btn a:hover,#sidebar h3{';
			$vw_security_guard_custom_css .='color: '.esc_attr($vw_security_guard_second_color).';';
		$vw_security_guard_custom_css .='}';
	}
	if($vw_security_guard_first_color != false || $vw_security_guard_second_color != false){
		$vw_security_guard_custom_css .='#topbar{
		background: rgba(0, 0, 0, 0) linear-gradient(90deg, '.esc_attr($vw_security_guard_first_color).' 50%, '.esc_attr($vw_security_guard_second_color).' 50%) repeat scroll 0 0;
	 	}';
	}
	if($vw_security_guard_second_color != false || $vw_security_guard_first_color != false){
		$vw_security_guard_custom_css .='#header, .header-fixed{
		background: rgba(0, 0, 0, 0) linear-gradient(90deg, '.esc_attr($vw_security_guard_second_color).' 50%, '.esc_attr($vw_security_guard_first_color).' 50%) repeat scroll 0 0;
	 	}';
	}

	/*----------------Width Layout -------------------*/

	$vw_security_guard_theme_lay = get_theme_mod( 'vw_security_guard_width_option','Full Width');
    if($vw_security_guard_theme_lay == 'Boxed'){
		$vw_security_guard_custom_css .='body{';
			$vw_security_guard_custom_css .='max-width: 1140px; width: 100%; padding-right: 15px; padding-left: 15px; margin-right: auto; margin-left: auto;';
		$vw_security_guard_custom_css .='}';
		$vw_security_guard_custom_css .='.scrollup i{';
			$vw_security_guard_custom_css .='right: 100px;';
		$vw_security_guard_custom_css .='}';
		$vw_security_guard_custom_css .='.scrollup.left i{';
			$vw_security_guard_custom_css .='left: 100px;';
		$vw_security_guard_custom_css .='}';
	}else if($vw_security_guard_theme_lay == 'Wide Width'){
		$vw_security_guard_custom_css .='body{';
			$vw_security_guard_custom_css .='width: 100%;padding-right: 15px;padding-left: 15px;margin-right: auto;margin-left: auto;';
		$vw_security_guard_custom_css .='}';
		$vw_security_guard_custom_css .='.scrollup i{';
			$vw_security_guard_custom_css .='right: 30px;';
		$vw_security_guard_custom_css .='}';
		$vw_security_guard_custom_css .='.scrollup.left i{';
			$vw_security_guard_custom_css .='left: 30px;';
		$vw_security_guard_custom_css .='}';
	}else if($vw_security_guard_theme_lay == 'Full Width'){
		$vw_security_guard_custom_css .='body{';
			$vw_security_guard_custom_css .='max-width: 100%;';
		$vw_security_guard_custom_css .='}';
	}

	/*--------------------------- Slider Opacity -------------------*/

	$vw_security_guard_theme_lay = get_theme_mod( 'vw_security_guard_slider_opacity_color','0.5');
	if($vw_security_guard_theme_lay == '0'){
		$vw_security_guard_custom_css .='#slider img{';
			$vw_security_guard_custom_css .='opacity:0';
		$vw_security_guard_custom_css .='}';
		}else if($vw_security_guard_theme_lay == '0.1'){
		$vw_security_guard_custom_css .='#slider img{';
			$vw_security_guard_custom_css .='opacity:0.1';
		$vw_security_guard_custom_css .='}';
		}else if($vw_security_guard_theme_lay == '0.2'){
		$vw_security_guard_custom_css .='#slider img{';
			$vw_security_guard_custom_css .='opacity:0.2';
		$vw_security_guard_custom_css .='}';
		}else if($vw_security_guard_theme_lay == '0.3'){
		$vw_security_guard_custom_css .='#slider img{';
			$vw_security_guard_custom_css .='opacity:0.3';
		$vw_security_guard_custom_css .='}';
		}else if($vw_security_guard_theme_lay == '0.4'){
		$vw_security_guard_custom_css .='#slider img{';
			$vw_security_guard_custom_css .='opacity:0.4';
		$vw_security_guard_custom_css .='}';
		}else if($vw_security_guard_theme_lay == '0.5'){
		$vw_security_guard_custom_css .='#slider img{';
			$vw_security_guard_custom_css .='opacity:0.5';
		$vw_security_guard_custom_css .='}';
		}else if($vw_security_guard_theme_lay == '0.6'){
		$vw_security_guard_custom_css .='#slider img{';
			$vw_security_guard_custom_css .='opacity:0.6';
		$vw_security_guard_custom_css .='}';
		}else if($vw_security_guard_theme_lay == '0.7'){
		$vw_security_guard_custom_css .='#slider img{';
			$vw_security_guard_custom_css .='opacity:0.7';
		$vw_security_guard_custom_css .='}';
		}else if($vw_security_guard_theme_lay == '0.8'){
		$vw_security_guard_custom_css .='#slider img{';
			$vw_security_guard_custom_css .='opacity:0.8';
		$vw_security_guard_custom_css .='}';
		}else if($vw_security_guard_theme_lay == '0.9'){
		$vw_security_guard_custom_css .='#slider img{';
			$vw_security_guard_custom_css .='opacity:0.9';
		$vw_security_guard_custom_css .='}';
		}

	/*---------------------- Slider Image Overlay ------------------------*/

	$vw_security_guard_slider_image_overlay = get_theme_mod('vw_security_guard_slider_image_overlay', true);
	if($vw_security_guard_slider_image_overlay == false){
		$vw_security_guard_custom_css .='#slider img{';
			$vw_security_guard_custom_css .='opacity:1;';
		$vw_security_guard_custom_css .='}';
	}

	/*------------------Slider Content Layout -------------------*/

	$vw_security_guard_theme_lay = get_theme_mod( 'vw_security_guard_slider_content_option','Left');
    if($vw_security_guard_theme_lay == 'Left'){
		$vw_security_guard_custom_css .='#slider .carousel-caption, #slider .inner_carousel, #slider .inner_carousel h1, #slider .inner_carousel p, .more-btn{';
			$vw_security_guard_custom_css .='text-align:left; left:17%; right:45%;';
		$vw_security_guard_custom_css .='}';
	}else if($vw_security_guard_theme_lay == 'Center'){
		$vw_security_guard_custom_css .='#slider .carousel-caption, #slider .inner_carousel, #slider .inner_carousel h1, #slider .inner_carousel p, .more-btn{';
			$vw_security_guard_custom_css .='text-align:center; left:20%; right:20%;';
		$vw_security_guard_custom_css .='}';
	}else if($vw_security_guard_theme_lay == 'Right'){
		$vw_security_guard_custom_css .='#slider .carousel-caption, #slider .inner_carousel, #slider .inner_carousel h1, #slider .inner_carousel p, .more-btn{';
			$vw_security_guard_custom_css .='text-align:right; left:45%; right:17%;';
		$vw_security_guard_custom_css .='}';
	}

	/*------------- Slider Content Padding Settings ------------------*/

	$vw_security_guard_slider_content_padding_top_bottom = get_theme_mod('vw_security_guard_slider_content_padding_top_bottom');
	$vw_security_guard_slider_content_padding_left_right = get_theme_mod('vw_security_guard_slider_content_padding_left_right');
	if($vw_security_guard_slider_content_padding_top_bottom != false || $vw_security_guard_slider_content_padding_left_right != false){
		$vw_security_guard_custom_css .='#slider .carousel-caption{';
			$vw_security_guard_custom_css .='top: '.esc_attr($vw_security_guard_slider_content_padding_top_bottom).'; bottom: '.esc_attr($vw_security_guard_slider_content_padding_top_bottom).';left: '.esc_attr($vw_security_guard_slider_content_padding_left_right).';right: '.esc_attr($vw_security_guard_slider_content_padding_left_right).';';
		$vw_security_guard_custom_css .='}';
	}

	/*----------------------Slider Height ------------*/

	$vw_security_guard_slider_height = get_theme_mod('vw_security_guard_slider_height');
	if($vw_security_guard_slider_height != false){
		$vw_security_guard_custom_css .='#slider img{';
			$vw_security_guard_custom_css .='height: '.esc_attr($vw_security_guard_slider_height).';';
		$vw_security_guard_custom_css .='}';
	}

	/*--------------------------- Slider -------------------*/

	$vw_security_guard_slider = get_theme_mod('vw_security_guard_slider_hide_show');
	if($vw_security_guard_slider == false){
		$vw_security_guard_custom_css .='.page-template-custom-home-page .home-page-header{';
			$vw_security_guard_custom_css .='margin-bottom: 20px;';
		$vw_security_guard_custom_css .='}';
	}

	/*---------------------------Blog Layout -------------------*/

	$vw_security_guard_theme_lay = get_theme_mod( 'vw_security_guard_blog_layout_option','Default');
    if($vw_security_guard_theme_lay == 'Default'){
		$vw_security_guard_custom_css .='.post-main-box{';
			$vw_security_guard_custom_css .='';
		$vw_security_guard_custom_css .='}';
	}else if($vw_security_guard_theme_lay == 'Center'){
		$vw_security_guard_custom_css .='.post-main-box, .post-main-box h2, .post-info, .new-text p, .content-bttn, #our-services .service-text p{';
			$vw_security_guard_custom_css .='text-align:center;';
		$vw_security_guard_custom_css .='}';
		$vw_security_guard_custom_css .='.post-info{';
			$vw_security_guard_custom_css .='margin-top:10px;';
		$vw_security_guard_custom_css .='}';
		$vw_security_guard_custom_css .='.post-info hr{';
			$vw_security_guard_custom_css .='margin:15px auto;';
		$vw_security_guard_custom_css .='}';
	}else if($vw_security_guard_theme_lay == 'Left'){
		$vw_security_guard_custom_css .='.post-main-box, .post-main-box h2, .post-info, .new-text p, .content-bttn, #our-services p{';
			$vw_security_guard_custom_css .='text-align:Left;';
		$vw_security_guard_custom_css .='}';
	}

	// featured image dimention
	$vw_security_guard_blog_post_featured_image_dimension = get_theme_mod('vw_security_guard_blog_post_featured_image_dimension', 'default');
	$vw_security_guard_blog_post_featured_image_custom_width = get_theme_mod('vw_security_guard_blog_post_featured_image_custom_width',250);
	$vw_security_guard_blog_post_featured_image_custom_height = get_theme_mod('vw_security_guard_blog_post_featured_image_custom_height',250);
	if($vw_security_guard_blog_post_featured_image_dimension == 'custom'){
		$vw_security_guard_custom_css .='.post-main-box img{';
			$vw_security_guard_custom_css .='width: '.esc_attr($vw_security_guard_blog_post_featured_image_custom_width).'; height: '.esc_attr($vw_security_guard_blog_post_featured_image_custom_height).';';
		$vw_security_guard_custom_css .='}';
	}

	/*--------------------- Blog Page Posts -------------------*/

	$vw_security_guard_blog_page_posts_settings = get_theme_mod( 'vw_security_guard_blog_page_posts_settings','Into Blocks');
    if($vw_security_guard_blog_page_posts_settings == 'Without Blocks'){
		$vw_security_guard_custom_css .='.post-main-box{';
			$vw_security_guard_custom_css .='box-shadow: none; border: none; margin:30px 0;';
		$vw_security_guard_custom_css .='}';
	}

	/*---------------Responsive Media -----------------------*/

	$vw_security_guard_resp_topbar = get_theme_mod( 'vw_security_guard_resp_topbar_hide_show',false);
	if($vw_security_guard_resp_topbar == true && get_theme_mod( 'vw_security_guard_topbar_hide_show', false) == false){
    	$vw_security_guard_custom_css .='#topbar{';
			$vw_security_guard_custom_css .='display:none;';
		$vw_security_guard_custom_css .='} ';
	}
    if($vw_security_guard_resp_topbar == true){
    	$vw_security_guard_custom_css .='@media screen and (max-width:575px) {';
		$vw_security_guard_custom_css .='#topbar{';
			$vw_security_guard_custom_css .='display:block;';
		$vw_security_guard_custom_css .='} }';
	}else if($vw_security_guard_resp_topbar == false){
		$vw_security_guard_custom_css .='@media screen and (max-width:575px) {';
		$vw_security_guard_custom_css .='#topbar{';
			$vw_security_guard_custom_css .='display:none;';
		$vw_security_guard_custom_css .='} }';
	}

	$vw_security_guard_resp_stickyheader = get_theme_mod( 'vw_security_guard_stickyheader_hide_show',false);
	if($vw_security_guard_resp_stickyheader == true && get_theme_mod( 'vw_security_guard_sticky_header',false) != true){
    	$vw_security_guard_custom_css .='.header-fixed{';
			$vw_security_guard_custom_css .='position:static;';
		$vw_security_guard_custom_css .='} ';
	}
    if($vw_security_guard_resp_stickyheader == true){
    	$vw_security_guard_custom_css .='@media screen and (max-width:575px) {';
		$vw_security_guard_custom_css .='.header-fixed{';
			$vw_security_guard_custom_css .='position:fixed;';
		$vw_security_guard_custom_css .='} }';
	}else if($vw_security_guard_resp_stickyheader == false){
		$vw_security_guard_custom_css .='@media screen and (max-width:575px){';
		$vw_security_guard_custom_css .='.header-fixed{';
			$vw_security_guard_custom_css .='position:static;';
		$vw_security_guard_custom_css .='} }';
	}

	$vw_security_guard_resp_slider = get_theme_mod( 'vw_security_guard_resp_slider_hide_show',true);
	if($vw_security_guard_resp_slider == true && get_theme_mod( 'vw_security_guard_slider_hide_show', false) == false){
    	$vw_security_guard_custom_css .='#slider{';
			$vw_security_guard_custom_css .='display:none;';
		$vw_security_guard_custom_css .='} ';
	}
    if($vw_security_guard_resp_slider == true){
    	$vw_security_guard_custom_css .='@media screen and (max-width:575px) {';
		$vw_security_guard_custom_css .='#slider{';
			$vw_security_guard_custom_css .='display:block;';
		$vw_security_guard_custom_css .='} }';
	}else if($vw_security_guard_resp_slider == false){
		$vw_security_guard_custom_css .='@media screen and (max-width:575px) {';
		$vw_security_guard_custom_css .='#slider{';
			$vw_security_guard_custom_css .='display:none;';
		$vw_security_guard_custom_css .='} }';
	}

	$vw_security_guard_resp_sidebar = get_theme_mod( 'vw_security_guard_sidebar_hide_show',true);
    if($vw_security_guard_resp_sidebar == true){
    	$vw_security_guard_custom_css .='@media screen and (max-width:575px) {';
		$vw_security_guard_custom_css .='#sidebar{';
			$vw_security_guard_custom_css .='display:block;';
		$vw_security_guard_custom_css .='} }';
	}else if($vw_security_guard_resp_sidebar == false){
		$vw_security_guard_custom_css .='@media screen and (max-width:575px) {';
		$vw_security_guard_custom_css .='#sidebar{';
			$vw_security_guard_custom_css .='display:none;';
		$vw_security_guard_custom_css .='} }';
	}

	$vw_security_guard_resp_scroll_top = get_theme_mod( 'vw_security_guard_resp_scroll_top_hide_show',true);
	if($vw_security_guard_resp_scroll_top == true && get_theme_mod( 'vw_security_guard_hide_show_scroll',true) != true){
    	$vw_security_guard_custom_css .='.scrollup i{';
			$vw_security_guard_custom_css .='visibility:hidden !important;';
		$vw_security_guard_custom_css .='} ';
	}
    if($vw_security_guard_resp_scroll_top == true){
    	$vw_security_guard_custom_css .='@media screen and (max-width:575px) {';
		$vw_security_guard_custom_css .='.scrollup i{';
			$vw_security_guard_custom_css .='visibility:visible !important;';
		$vw_security_guard_custom_css .='} }';
	}else if($vw_security_guard_resp_scroll_top == false){
		$vw_security_guard_custom_css .='@media screen and (max-width:575px){';
		$vw_security_guard_custom_css .='.scrollup i{';
			$vw_security_guard_custom_css .='visibility:hidden !important;';
		$vw_security_guard_custom_css .='} }';
	}

	$vw_security_guard_resp_menu_toggle_btn_bg_color = get_theme_mod('vw_security_guard_resp_menu_toggle_btn_bg_color');
	if($vw_security_guard_resp_menu_toggle_btn_bg_color != false){
		$vw_security_guard_custom_css .='.toggle-nav i{';
			$vw_security_guard_custom_css .='background-color: '.esc_attr($vw_security_guard_resp_menu_toggle_btn_bg_color).';';
		$vw_security_guard_custom_css .='}';
	}

	/*------------- Top Bar Settings ------------------*/

	$vw_security_guard_topbar_padding_top_bottom = get_theme_mod('vw_security_guard_topbar_padding_top_bottom');
	if($vw_security_guard_topbar_padding_top_bottom != false){
		$vw_security_guard_custom_css .='#topbar{';
			$vw_security_guard_custom_css .='padding-top: '.esc_attr($vw_security_guard_topbar_padding_top_bottom).'; padding-bottom: '.esc_attr($vw_security_guard_topbar_padding_top_bottom).';';
		$vw_security_guard_custom_css .='}';
	}

	$vw_security_guard_navigation_menu_font_size = get_theme_mod('vw_security_guard_navigation_menu_font_size');
	if($vw_security_guard_navigation_menu_font_size != false){
		$vw_security_guard_custom_css .='.main-navigation a{';
			$vw_security_guard_custom_css .='font-size: '.esc_attr($vw_security_guard_navigation_menu_font_size).';';
		$vw_security_guard_custom_css .='}';
	}

	$vw_security_guard_navigation_menu_font_weight = get_theme_mod('vw_security_guard_navigation_menu_font_weight','600');
	if($vw_security_guard_navigation_menu_font_weight != false){
		$vw_security_guard_custom_css .='.main-navigation a{';
			$vw_security_guard_custom_css .='font-weight: '.esc_attr($vw_security_guard_navigation_menu_font_weight).';';
		$vw_security_guard_custom_css .='}';
	}

	$vw_security_guard_theme_lay = get_theme_mod( 'vw_security_guard_menu_text_transform','Uppercase');
	if($vw_security_guard_theme_lay == 'Capitalize'){
		$vw_security_guard_custom_css .='.main-navigation a{';
			$vw_security_guard_custom_css .='text-transform:Capitalize;';
		$vw_security_guard_custom_css .='}';
	}
	if($vw_security_guard_theme_lay == 'Lowercase'){
		$vw_security_guard_custom_css .='.main-navigation a{';
			$vw_security_guard_custom_css .='text-transform:Lowercase;';
		$vw_security_guard_custom_css .='}';
	}
	if($vw_security_guard_theme_lay == 'Uppercase'){
		$vw_security_guard_custom_css .='.main-navigation a{';
			$vw_security_guard_custom_css .='text-transform:Uppercase;';
		$vw_security_guard_custom_css .='}';
	}

	$vw_security_guard_header_menus_color = get_theme_mod('vw_security_guard_header_menus_color');
	if($vw_security_guard_header_menus_color != false){
		$vw_security_guard_custom_css .='.main-navigation a{';
			$vw_security_guard_custom_css .='color: '.esc_attr($vw_security_guard_header_menus_color).';';
		$vw_security_guard_custom_css .='}';
	}

	$vw_security_guard_header_menus_hover_color = get_theme_mod('vw_security_guard_header_menus_hover_color');
	if($vw_security_guard_header_menus_hover_color != false){
		$vw_security_guard_custom_css .='.main-navigation a:hover{';
			$vw_security_guard_custom_css .='color: '.esc_attr($vw_security_guard_header_menus_hover_color).';';
		$vw_security_guard_custom_css .='}';
	}

	$vw_security_guard_header_submenus_color = get_theme_mod('vw_security_guard_header_submenus_color');
	if($vw_security_guard_header_submenus_color != false){
		$vw_security_guard_custom_css .='.main-navigation ul ul a{';
			$vw_security_guard_custom_css .='color: '.esc_attr($vw_security_guard_header_submenus_color).';';
		$vw_security_guard_custom_css .='}';
	}

	$vw_security_guard_header_submenus_hover_color = get_theme_mod('vw_security_guard_header_submenus_hover_color');
	if($vw_security_guard_header_submenus_hover_color != false){
		$vw_security_guard_custom_css .='.main-navigation ul.sub-menu a:hover{';
			$vw_security_guard_custom_css .='color: '.esc_attr($vw_security_guard_header_submenus_hover_color).';';
		$vw_security_guard_custom_css .='}';
	}

	$vw_security_guard_menus_item = get_theme_mod( 'vw_security_guard_menus_item_style','None');
    if($vw_security_guard_menus_item == 'None'){
		$vw_security_guard_custom_css .='.main-navigation a{';
			$vw_security_guard_custom_css .='';
		$vw_security_guard_custom_css .='}';
	}else if($vw_security_guard_menus_item == 'Zoom In'){
		$vw_security_guard_custom_css .='.main-navigation a:hover{';
			$vw_security_guard_custom_css .='transition: all 0.3s ease-in-out !important; transform: scale(1.2) !important; color:#fff;';
		$vw_security_guard_custom_css .='}';
	}

	/*-------------- Sticky Header Padding ----------------*/

	$vw_security_guard_sticky_header_padding = get_theme_mod('vw_security_guard_sticky_header_padding');
	if($vw_security_guard_sticky_header_padding != false){
		$vw_security_guard_custom_css .='.header-fixed{';
			$vw_security_guard_custom_css .='padding: '.esc_attr($vw_security_guard_sticky_header_padding).';';
		$vw_security_guard_custom_css .='}';
	}

	/*---------------- Button Settings ------------------*/

	$vw_security_guard_button_padding_top_bottom = get_theme_mod('vw_security_guard_button_padding_top_bottom');
	$vw_security_guard_button_padding_left_right = get_theme_mod('vw_security_guard_button_padding_left_right');
	if($vw_security_guard_button_padding_top_bottom != false || $vw_security_guard_button_padding_left_right != false){
		$vw_security_guard_custom_css .='.post-main-box .blogbutton-small{';
			$vw_security_guard_custom_css .='padding-top: '.esc_attr($vw_security_guard_button_padding_top_bottom).'; padding-bottom: '.esc_attr($vw_security_guard_button_padding_top_bottom).';padding-left: '.esc_attr($vw_security_guard_button_padding_left_right).';padding-right: '.esc_attr($vw_security_guard_button_padding_left_right).';';
		$vw_security_guard_custom_css .='}';
	}

	$vw_security_guard_button_border_radius = get_theme_mod('vw_security_guard_button_border_radius');
	if($vw_security_guard_button_border_radius != false){
		$vw_security_guard_custom_css .='.post-main-box .blogbutton-small{';
			$vw_security_guard_custom_css .='border-radius: '.esc_attr($vw_security_guard_button_border_radius).'px;';
		$vw_security_guard_custom_css .='}';
	}

	$vw_security_guard_button_font_size = get_theme_mod('vw_security_guard_button_font_size',14);
	$vw_security_guard_custom_css .='.post-main-box .blogbutton-small{';
		$vw_security_guard_custom_css .='font-size: '.esc_attr($vw_security_guard_button_font_size).';';
	$vw_security_guard_custom_css .='}';

	$vw_security_guard_theme_lay = get_theme_mod( 'vw_security_guard_button_text_transform','Uppercase');
	if($vw_security_guard_theme_lay == 'Capitalize'){
		$vw_security_guard_custom_css .='.post-main-box .blogbutton-small{';
			$vw_security_guard_custom_css .='text-transform:Capitalize;';
		$vw_security_guard_custom_css .='}';
	}
	if($vw_security_guard_theme_lay == 'Lowercase'){
		$vw_security_guard_custom_css .='.post-main-box .blogbutton-small{';
			$vw_security_guard_custom_css .='text-transform:Lowercase;';
		$vw_security_guard_custom_css .='}';
	}
	if($vw_security_guard_theme_lay == 'Uppercase'){
		$vw_security_guard_custom_css .='.post-main-box .blogbutton-small{';
			$vw_security_guard_custom_css .='text-transform:Uppercase;';
		$vw_security_guard_custom_css .='}';
	} 

	$vw_security_guard_button_letter_spacing = get_theme_mod('vw_security_guard_button_letter_spacing',14);
	$vw_security_guard_custom_css .='.blogbutton-small{';
		$vw_security_guard_custom_css .='letter-spacing: '.esc_attr($vw_security_guard_button_letter_spacing).';';
	$vw_security_guard_custom_css .='}';

	/*------------- Single Blog Page------------------*/

	$vw_security_guard_featured_image_border_radius = get_theme_mod('vw_security_guard_featured_image_border_radius', 0);
	if($vw_security_guard_featured_image_border_radius != false){
		$vw_security_guard_custom_css .='.box-image img, .feature-box img{';
			$vw_security_guard_custom_css .='border-radius: '.esc_attr($vw_security_guard_featured_image_border_radius).'px;';
		$vw_security_guard_custom_css .='}';
	}

	$vw_security_guard_featured_image_box_shadow = get_theme_mod('vw_security_guard_featured_image_box_shadow',0);
	if($vw_security_guard_featured_image_box_shadow != false){
		$vw_security_guard_custom_css .='.box-image img, .feature-box img, #content-vw img{';
			$vw_security_guard_custom_css .='box-shadow: '.esc_attr($vw_security_guard_featured_image_box_shadow).'px '.esc_attr($vw_security_guard_featured_image_box_shadow).'px '.esc_attr($vw_security_guard_featured_image_box_shadow).'px #cccccc;';
		$vw_security_guard_custom_css .='}';
	}

	$vw_security_guard_single_blog_post_navigation_show_hide = get_theme_mod('vw_security_guard_single_blog_post_navigation_show_hide',true);
	if($vw_security_guard_single_blog_post_navigation_show_hide != true){
		$vw_security_guard_custom_css .='.post-navigation{';
			$vw_security_guard_custom_css .='display: none;';
		$vw_security_guard_custom_css .='}';
	}

	$vw_security_guard_comment_width = get_theme_mod('vw_security_guard_single_blog_comment_width');
	if($vw_security_guard_comment_width != false){
		$vw_security_guard_custom_css .='#comments textarea{';
			$vw_security_guard_custom_css .='width: '.esc_attr($vw_security_guard_comment_width).';';
		$vw_security_guard_custom_css .='}';
	}

	/*-------------- Copyright Alignment ----------------*/

	$vw_security_guard_copyright_background_color = get_theme_mod('vw_security_guard_copyright_background_color');
	if($vw_security_guard_copyright_background_color != false){
		$vw_security_guard_custom_css .='#footer-2{';
			$vw_security_guard_custom_css .='background-color: '.esc_attr($vw_security_guard_copyright_background_color).';';
		$vw_security_guard_custom_css .='}';
	}
	
	$vw_security_guard_footer_background_color = get_theme_mod('vw_security_guard_footer_background_color');
	if($vw_security_guard_footer_background_color != false){
		$vw_security_guard_custom_css .='#footer{';
			$vw_security_guard_custom_css .='background-color: '.esc_attr($vw_security_guard_footer_background_color).';';
		$vw_security_guard_custom_css .='}';
	}

	$vw_security_guard_copyright_font_size = get_theme_mod('vw_security_guard_copyright_font_size');
	if($vw_security_guard_copyright_font_size != false){
		$vw_security_guard_custom_css .='.copyright p{';
			$vw_security_guard_custom_css .='font-size: '.esc_attr($vw_security_guard_copyright_font_size).';';
		$vw_security_guard_custom_css .='}';
	}

	$vw_security_guard_copyright_padding_top_bottom = get_theme_mod('vw_security_guard_copyright_padding_top_bottom');
	if($vw_security_guard_copyright_padding_top_bottom != false){
		$vw_security_guard_custom_css .='#footer-2{';
			$vw_security_guard_custom_css .='padding-top: '.esc_attr($vw_security_guard_copyright_padding_top_bottom).'; padding-bottom: '.esc_attr($vw_security_guard_copyright_padding_top_bottom).';';
		$vw_security_guard_custom_css .='}';
	}

	$vw_security_guard_copyright_alignment = get_theme_mod('vw_security_guard_copyright_alignment');
	if($vw_security_guard_copyright_alignment != false){
		$vw_security_guard_custom_css .='.copyright p,#footer-2 p{';
			$vw_security_guard_custom_css .='text-align: '.esc_attr($vw_security_guard_copyright_alignment).';';
		$vw_security_guard_custom_css .='}';
	}

	$vw_security_guard_footer_widgets_heading = get_theme_mod( 'vw_security_guard_footer_widgets_heading','Left');
    if($vw_security_guard_footer_widgets_heading == 'Left'){
		$vw_security_guard_custom_css .='#footer h3, #footer h3 .wp-block-search .wp-block-search__label{';
		$vw_security_guard_custom_css .='text-align: left;';
		$vw_security_guard_custom_css .='}';
	}else if($vw_security_guard_footer_widgets_heading == 'Center'){
		$vw_security_guard_custom_css .='#footer h3, #footer h3 .wp-block-search .wp-block-search__label{';
			$vw_security_guard_custom_css .='text-align: center;';
		$vw_security_guard_custom_css .='}';
	}else if($vw_security_guard_footer_widgets_heading == 'Right'){
		$vw_security_guard_custom_css .='#footer h3, #footer .wp-block-search .wp-block-search__label{';
			$vw_security_guard_custom_css .='text-align: right;';
		$vw_security_guard_custom_css .='}';
	}

	$vw_security_guard_footer_widgets_content = get_theme_mod( 'vw_security_guard_footer_widgets_content','Left');
    if($vw_security_guard_footer_widgets_content == 'Left'){
		$vw_security_guard_custom_css .='#footer li{';
		$vw_security_guard_custom_css .='text-align: left;';
		$vw_security_guard_custom_css .='}';
	}else if($vw_security_guard_footer_widgets_content == 'Center'){
		$vw_security_guard_custom_css .='#footer li{';
			$vw_security_guard_custom_css .='text-align: center;';
		$vw_security_guard_custom_css .='}';
	}else if($vw_security_guard_footer_widgets_content == 'Right'){
		$vw_security_guard_custom_css .='#footer li{';
			$vw_security_guard_custom_css .='text-align: right;';
		$vw_security_guard_custom_css .='}';
	}

	$vw_security_guard_footer_padding = get_theme_mod('vw_security_guard_footer_padding');
	if($vw_security_guard_footer_padding != false){
		$vw_security_guard_custom_css .='.footersec{';
			$vw_security_guard_custom_css .='padding: '.esc_attr($vw_security_guard_footer_padding).' 0;';
		$vw_security_guard_custom_css .='}';
	}

	$vw_security_guard_footer_icon = get_theme_mod('vw_security_guard_footer_icon');
	if($vw_security_guard_footer_icon == false){
		$vw_security_guard_custom_css .='.copyright p{';
			$vw_security_guard_custom_css .='width:100%; text-align:center; float:none;';
		$vw_security_guard_custom_css .='}';
	}

	$vw_security_guard_footer_background_image = get_theme_mod('vw_security_guard_footer_background_image');
	if($vw_security_guard_footer_background_image != false){
		$vw_security_guard_custom_css .='#footer{';
			$vw_security_guard_custom_css .='background: url('.esc_attr($vw_security_guard_footer_background_image).');background-size:cover;';
		$vw_security_guard_custom_css .='}';
	}

	$vw_security_guard_theme_lay = get_theme_mod( 'vw_security_guard_img_footer','scroll');
	if($vw_security_guard_theme_lay == 'fixed'){
		$vw_security_guard_custom_css .='#footer{';
			$vw_security_guard_custom_css .='background-attachment: fixed !important;';
		$vw_security_guard_custom_css .='}';
	}elseif ($vw_security_guard_theme_lay == 'scroll'){
		$vw_security_guard_custom_css .='#footer{';
			$vw_security_guard_custom_css .='background-attachment: scroll !important;';
		$vw_security_guard_custom_css .='}';
	}

	$vw_security_guard_footer_img_position = get_theme_mod('vw_security_guard_footer_img_position','center center');
	if($vw_security_guard_footer_img_position != false){
		$vw_security_guard_custom_css .='#footer{';
			$vw_security_guard_custom_css .='background-position: '.esc_attr($vw_security_guard_footer_img_position).'!important;';
		$vw_security_guard_custom_css .='}';
	}  


	/*----------------Sroll to top Settings ------------------*/

	$vw_security_guard_scroll_to_top_font_size = get_theme_mod('vw_security_guard_scroll_to_top_font_size');
	if($vw_security_guard_scroll_to_top_font_size != false){
		$vw_security_guard_custom_css .='.scrollup i{';
			$vw_security_guard_custom_css .='font-size: '.esc_attr($vw_security_guard_scroll_to_top_font_size).';';
		$vw_security_guard_custom_css .='}';
	}

	$vw_security_guard_scroll_to_top_padding = get_theme_mod('vw_security_guard_scroll_to_top_padding');
	$vw_security_guard_scroll_to_top_padding = get_theme_mod('vw_security_guard_scroll_to_top_padding');
	if($vw_security_guard_scroll_to_top_padding != false){
		$vw_security_guard_custom_css .='.scrollup i{';
			$vw_security_guard_custom_css .='padding-top: '.esc_attr($vw_security_guard_scroll_to_top_padding).';padding-bottom: '.esc_attr($vw_security_guard_scroll_to_top_padding).';';
		$vw_security_guard_custom_css .='}';
	}

	$vw_security_guard_scroll_to_top_width = get_theme_mod('vw_security_guard_scroll_to_top_width');
	if($vw_security_guard_scroll_to_top_width != false){
		$vw_security_guard_custom_css .='.scrollup i{';
			$vw_security_guard_custom_css .='width: '.esc_attr($vw_security_guard_scroll_to_top_width).';';
		$vw_security_guard_custom_css .='}';
	}

	$vw_security_guard_scroll_to_top_height = get_theme_mod('vw_security_guard_scroll_to_top_height');
	if($vw_security_guard_scroll_to_top_height != false){
		$vw_security_guard_custom_css .='.scrollup i{';
			$vw_security_guard_custom_css .='height: '.esc_attr($vw_security_guard_scroll_to_top_height).';';
		$vw_security_guard_custom_css .='}';
	}

	$vw_security_guard_scroll_to_top_border_radius = get_theme_mod('vw_security_guard_scroll_to_top_border_radius');
	if($vw_security_guard_scroll_to_top_border_radius != false){
		$vw_security_guard_custom_css .='.scrollup i{';
			$vw_security_guard_custom_css .='border-radius: '.esc_attr($vw_security_guard_scroll_to_top_border_radius).'px;';
		$vw_security_guard_custom_css .='}';
	}

	/*----------------Social Icons Settings ------------------*/

	$vw_security_guard_social_icon_font_size = get_theme_mod('vw_security_guard_social_icon_font_size');
	if($vw_security_guard_social_icon_font_size != false){
		$vw_security_guard_custom_css .='#sidebar .custom-social-icons i, #footer .custom-social-icons i{';
			$vw_security_guard_custom_css .='font-size: '.esc_attr($vw_security_guard_social_icon_font_size).';';
		$vw_security_guard_custom_css .='}';
	}

	$vw_security_guard_social_icon_padding = get_theme_mod('vw_security_guard_social_icon_padding');
	if($vw_security_guard_social_icon_padding != false){
		$vw_security_guard_custom_css .='#sidebar .custom-social-icons i, #footer .custom-social-icons i{';
			$vw_security_guard_custom_css .='padding: '.esc_attr($vw_security_guard_social_icon_padding).';';
		$vw_security_guard_custom_css .='}';
	}

	$vw_security_guard_social_icon_width = get_theme_mod('vw_security_guard_social_icon_width');
	if($vw_security_guard_social_icon_width != false){
		$vw_security_guard_custom_css .='#sidebar .custom-social-icons i, #footer .custom-social-icons i{';
			$vw_security_guard_custom_css .='width: '.esc_attr($vw_security_guard_social_icon_width).';';
		$vw_security_guard_custom_css .='}';
	}

	$vw_security_guard_social_icon_height = get_theme_mod('vw_security_guard_social_icon_height');
	if($vw_security_guard_social_icon_height != false){
		$vw_security_guard_custom_css .='#sidebar .custom-social-icons i, #footer .custom-social-icons i{';
			$vw_security_guard_custom_css .='height: '.esc_attr($vw_security_guard_social_icon_height).';';
		$vw_security_guard_custom_css .='}';
	}

	$vw_security_guard_social_icon_border_radius = get_theme_mod('vw_security_guard_social_icon_border_radius');
	if($vw_security_guard_social_icon_border_radius != false){
		$vw_security_guard_custom_css .='#sidebar .custom-social-icons i, #footer .custom-social-icons i{';
			$vw_security_guard_custom_css .='border-radius: '.esc_attr($vw_security_guard_social_icon_border_radius).'px;';
		$vw_security_guard_custom_css .='}';
	}

	/*----------------Woocommerce Products Settings ------------------*/
	$vw_security_guard_related_product_show_hide = get_theme_mod('vw_security_guard_related_product_show_hide',true);
	if($vw_security_guard_related_product_show_hide != true){
		$vw_security_guard_custom_css .='.related.products{';
			$vw_security_guard_custom_css .='display: none;';
		$vw_security_guard_custom_css .='}';
	}

	$vw_security_guard_products_padding_top_bottom = get_theme_mod('vw_security_guard_products_padding_top_bottom');
	if($vw_security_guard_products_padding_top_bottom != false){
		$vw_security_guard_custom_css .='.woocommerce ul.products li.product, .woocommerce-page ul.products li.product{';
			$vw_security_guard_custom_css .='padding-top: '.esc_attr($vw_security_guard_products_padding_top_bottom).'!important; padding-bottom: '.esc_attr($vw_security_guard_products_padding_top_bottom).'!important;';
		$vw_security_guard_custom_css .='}';
	}

	$vw_security_guard_products_padding_left_right = get_theme_mod('vw_security_guard_products_padding_left_right');
	if($vw_security_guard_products_padding_left_right != false){
		$vw_security_guard_custom_css .='.woocommerce ul.products li.product, .woocommerce-page ul.products li.product{';
			$vw_security_guard_custom_css .='padding-left: '.esc_attr($vw_security_guard_products_padding_left_right).'!important; padding-right: '.esc_attr($vw_security_guard_products_padding_left_right).'!important;';
		$vw_security_guard_custom_css .='}';
	}

	$vw_security_guard_products_box_shadow = get_theme_mod('vw_security_guard_products_box_shadow');
	if($vw_security_guard_products_box_shadow != false){
		$vw_security_guard_custom_css .='.woocommerce ul.products li.product, .woocommerce-page ul.products li.product{';
				$vw_security_guard_custom_css .='box-shadow: '.esc_attr($vw_security_guard_products_box_shadow).'px '.esc_attr($vw_security_guard_products_box_shadow).'px '.esc_attr($vw_security_guard_products_box_shadow).'px #ddd;';
		$vw_security_guard_custom_css .='}';
	}

	$vw_security_guard_products_border_radius = get_theme_mod('vw_security_guard_products_border_radius', 0);
	if($vw_security_guard_products_border_radius != false){
		$vw_security_guard_custom_css .='.woocommerce ul.products li.product, .woocommerce-page ul.products li.product{';
			$vw_security_guard_custom_css .='border-radius: '.esc_attr($vw_security_guard_products_border_radius).'px;';
		$vw_security_guard_custom_css .='}';
	}

	$vw_security_guard_products_btn_padding_top_bottom = get_theme_mod('vw_security_guard_products_btn_padding_top_bottom');
	if($vw_security_guard_products_btn_padding_top_bottom != false){
		$vw_security_guard_custom_css .='.woocommerce a.button{';
			$vw_security_guard_custom_css .='padding-top: '.esc_attr($vw_security_guard_products_btn_padding_top_bottom).' !important; padding-bottom: '.esc_attr($vw_security_guard_products_btn_padding_top_bottom).' !important;';
		$vw_security_guard_custom_css .='}';
	}

	$vw_security_guard_products_btn_padding_left_right = get_theme_mod('vw_security_guard_products_btn_padding_left_right');
	if($vw_security_guard_products_btn_padding_left_right != false){
		$vw_security_guard_custom_css .='.woocommerce a.button{';
			$vw_security_guard_custom_css .='padding-left: '.esc_attr($vw_security_guard_products_btn_padding_left_right).' !important; padding-right: '.esc_attr($vw_security_guard_products_btn_padding_left_right).' !important;';
		$vw_security_guard_custom_css .='}';
	}

	$vw_security_guard_products_button_border_radius = get_theme_mod('vw_security_guard_products_button_border_radius', 0);
	if($vw_security_guard_products_button_border_radius != false){
		$vw_security_guard_custom_css .='.woocommerce ul.products li.product .button, a.checkout-button.button.alt.wc-forward,.woocommerce #respond input#submit, .woocommerce a.button, .woocommerce button.button, .woocommerce input.button, .woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt{';
			$vw_security_guard_custom_css .='border-radius: '.esc_attr($vw_security_guard_products_button_border_radius).'px;';
		$vw_security_guard_custom_css .='}';
	}

	$vw_security_guard_woocommerce_sale_position = get_theme_mod( 'vw_security_guard_woocommerce_sale_position','right');
    if($vw_security_guard_woocommerce_sale_position == 'left'){
		$vw_security_guard_custom_css .='.woocommerce ul.products li.product .onsale{';
			$vw_security_guard_custom_css .='left: -10px; right: auto;';
		$vw_security_guard_custom_css .='}';
	}else if($vw_security_guard_woocommerce_sale_position == 'right'){
		$vw_security_guard_custom_css .='.woocommerce ul.products li.product .onsale{';
			$vw_security_guard_custom_css .='left: auto; right: 0;';
		$vw_security_guard_custom_css .='}';
	}

	$vw_security_guard_woocommerce_sale_font_size = get_theme_mod('vw_security_guard_woocommerce_sale_font_size');
	if($vw_security_guard_woocommerce_sale_font_size != false){
		$vw_security_guard_custom_css .='.woocommerce span.onsale{';
			$vw_security_guard_custom_css .='font-size: '.esc_attr($vw_security_guard_woocommerce_sale_font_size).';';
		$vw_security_guard_custom_css .='}';
	}

	$vw_security_guard_woocommerce_sale_border_radius = get_theme_mod('vw_security_guard_woocommerce_sale_border_radius', 100);
	if($vw_security_guard_woocommerce_sale_border_radius != false){
		$vw_security_guard_custom_css .='.woocommerce span.onsale{';
			$vw_security_guard_custom_css .='border-radius: '.esc_attr($vw_security_guard_woocommerce_sale_border_radius).'px;';
		$vw_security_guard_custom_css .='}';
	}

	/*------------------ Logo  -------------------*/

	// Site title Font Size
	$vw_security_guard_site_title_font_size = get_theme_mod('vw_security_guard_site_title_font_size');
	if($vw_security_guard_site_title_font_size != false){
		$vw_security_guard_custom_css .='.logo h1 a, .logo p.site-title a{';
			$vw_security_guard_custom_css .='font-size: '.esc_attr($vw_security_guard_site_title_font_size).';';
		$vw_security_guard_custom_css .='}';
	}

	// Site tagline Font Size
	$vw_security_guard_site_tagline_font_size = get_theme_mod('vw_security_guard_site_tagline_font_size');
	if($vw_security_guard_site_tagline_font_size != false){
		$vw_security_guard_custom_css .='.logo p.site-description{';
			$vw_security_guard_custom_css .='font-size: '.esc_attr($vw_security_guard_site_tagline_font_size).';';
		$vw_security_guard_custom_css .='}';
	}

	$vw_security_guard_logo_padding = get_theme_mod('vw_security_guard_logo_padding');
	if($vw_security_guard_logo_padding != false){
		$vw_security_guard_custom_css .='.logo{';
			$vw_security_guard_custom_css .='padding: '.esc_attr($vw_security_guard_logo_padding).';';
		$vw_security_guard_custom_css .='}';
	}

	$vw_security_guard_logo_margin = get_theme_mod('vw_security_guard_logo_margin');
	if($vw_security_guard_logo_margin != false){
		$vw_security_guard_custom_css .='.logo{';
			$vw_security_guard_custom_css .='margin: '.esc_attr($vw_security_guard_logo_margin).';';
		$vw_security_guard_custom_css .='}';
	}

	$vw_security_guard_site_title_color = get_theme_mod('vw_security_guard_site_title_color');
	if($vw_security_guard_site_title_color != false){
		$vw_security_guard_custom_css .='p.site-title a{';
			$vw_security_guard_custom_css .='color: '.esc_attr($vw_security_guard_site_title_color).'!important;';
		$vw_security_guard_custom_css .='}';
	}

	$vw_security_guard_site_tagline_color = get_theme_mod('vw_security_guard_site_tagline_color');
	if($vw_security_guard_site_tagline_color != false){
		$vw_security_guard_custom_css .='.logo p.site-description{';
			$vw_security_guard_custom_css .='color: '.esc_attr($vw_security_guard_site_tagline_color).';';
		$vw_security_guard_custom_css .='}';
	}

	$vw_security_guard_logo_width = get_theme_mod('vw_security_guard_logo_width');
	if($vw_security_guard_logo_width != false){
		$vw_security_guard_custom_css .='.logo img{';
			$vw_security_guard_custom_css .='width: '.esc_attr($vw_security_guard_logo_width).';';
		$vw_security_guard_custom_css .='}';
	}

	$vw_security_guard_logo_height = get_theme_mod('vw_security_guard_logo_height');
	if($vw_security_guard_logo_height != false){
		$vw_security_guard_custom_css .='.logo img{';
			$vw_security_guard_custom_css .='height: '.esc_attr($vw_security_guard_logo_height).';';
		$vw_security_guard_custom_css .='}';
	}

	// Woocommerce img

	$vw_security_guard_shop_featured_image_border_radius = get_theme_mod('vw_security_guard_shop_featured_image_border_radius', 0);
	if($vw_security_guard_shop_featured_image_border_radius != false){
		$vw_security_guard_custom_css .='.woocommerce ul.products li.product a img{';
			$vw_security_guard_custom_css .='border-radius: '.esc_attr($vw_security_guard_shop_featured_image_border_radius).'px;';
		$vw_security_guard_custom_css .='}';
	}

	$vw_security_guard_shop_featured_image_box_shadow = get_theme_mod('vw_security_guard_shop_featured_image_box_shadow');
	if($vw_security_guard_shop_featured_image_box_shadow != false){
		$vw_security_guard_custom_css .='.woocommerce ul.products li.product a img{';
				$vw_security_guard_custom_css .='box-shadow: '.esc_attr($vw_security_guard_shop_featured_image_box_shadow).'px '.esc_attr($vw_security_guard_shop_featured_image_box_shadow).'px '.esc_attr($vw_security_guard_shop_featured_image_box_shadow).'px #ddd;';
		$vw_security_guard_custom_css .='}';
	}

	/*------------------ Preloader Background Color  -------------------*/

	$vw_security_guard_preloader_bg_color = get_theme_mod('vw_security_guard_preloader_bg_color');
	if($vw_security_guard_preloader_bg_color != false){
		$vw_security_guard_custom_css .='#preloader{';
			$vw_security_guard_custom_css .='background-color: '.esc_attr($vw_security_guard_preloader_bg_color).';';
		$vw_security_guard_custom_css .='}';
	}

	$vw_security_guard_preloader_border_color = get_theme_mod('vw_security_guard_preloader_border_color');
	if($vw_security_guard_preloader_border_color != false){
		$vw_security_guard_custom_css .='.loader-line{';
			$vw_security_guard_custom_css .='border-color: '.esc_attr($vw_security_guard_preloader_border_color).'!important;';
		$vw_security_guard_custom_css .='}';
	}

	$vw_security_guard_preloader_bg_img = get_theme_mod('vw_security_guard_preloader_bg_img');
	if($vw_security_guard_preloader_bg_img != false){
		$vw_security_guard_custom_css .='#preloader{';
			$vw_security_guard_custom_css .='background: url('.esc_attr($vw_security_guard_preloader_bg_img).');-webkit-background-size: cover; -moz-background-size: cover; -o-background-size: cover; background-size: cover;';
		$vw_security_guard_custom_css .='}';
	}

	// Header Background Color
	$vw_security_guard_header_background_color = get_theme_mod('vw_security_guard_header_background_color');
	if($vw_security_guard_header_background_color != false){
		$vw_security_guard_custom_css .='.home-page-header{';
			$vw_security_guard_custom_css .='background-color: '.esc_attr($vw_security_guard_header_background_color).';';
		$vw_security_guard_custom_css .='}';
	}

	$vw_security_guard_header_img_position = get_theme_mod('vw_security_guard_header_img_position','center top');
	if($vw_security_guard_header_img_position != false){
		$vw_security_guard_custom_css .='.home-page-header{';
			$vw_security_guard_custom_css .='background-position: '.esc_attr($vw_security_guard_header_img_position).'!important;';
		$vw_security_guard_custom_css .='}';
	}

	/*--------------------- Grid Posts Posts -------------------*/

	$vw_security_guard_display_grid_posts_settings = get_theme_mod( 'vw_security_guard_display_grid_posts_settings','Into Blocks');
    if($vw_security_guard_display_grid_posts_settings == 'Without Blocks'){
		$vw_security_guard_custom_css .='.grid-post-main-box{';
			$vw_security_guard_custom_css .='box-shadow: none; border: none; margin:30px 0;';
		$vw_security_guard_custom_css .='}';
	}

	/*---------------- Footer Settings ------------------*/

	$vw_security_guard_button_footer_heading_letter_spacing = get_theme_mod('vw_security_guard_button_footer_heading_letter_spacing',1);
	$vw_security_guard_custom_css .='#footer h3, a.rsswidget.rss-widget-title{';
		$vw_security_guard_custom_css .='letter-spacing: '.esc_attr($vw_security_guard_button_footer_heading_letter_spacing).'px;';
	$vw_security_guard_custom_css .='}';

	$vw_security_guard_button_footer_font_size = get_theme_mod('vw_security_guard_button_footer_font_size','25');
	$vw_security_guard_custom_css .='#footer h3, a.rsswidget.rss-widget-title{';
		$vw_security_guard_custom_css .='font-size: '.esc_attr($vw_security_guard_button_footer_font_size).'px;';
	$vw_security_guard_custom_css .='}';

	$vw_security_guard_theme_lay = get_theme_mod( 'vw_security_guard_button_footer_text_transform','Capitalize');
	if($vw_security_guard_theme_lay == 'Capitalize'){
		$vw_security_guard_custom_css .='#footer h3{';
			$vw_security_guard_custom_css .='text-transform:Capitalize;';
		$vw_security_guard_custom_css .='}';
	}
	if($vw_security_guard_theme_lay == 'Lowercase'){
		$vw_security_guard_custom_css .='#footer h3, a.rsswidget.rss-widget-title{';
			$vw_security_guard_custom_css .='text-transform:Lowercase;';
		$vw_security_guard_custom_css .='}';
	}
	if($vw_security_guard_theme_lay == 'Uppercase'){
		$vw_security_guard_custom_css .='#footer h3, a.rsswidget.rss-widget-title{';
			$vw_security_guard_custom_css .='text-transform:Uppercase;';
		$vw_security_guard_custom_css .='}';
	}

	$vw_security_guard_footer_heading_weight = get_theme_mod('vw_security_guard_footer_heading_weight','');
	if($vw_security_guard_footer_heading_weight != false){
		$vw_security_guard_custom_css .='#footer h3, a.rsswidget.rss-widget-title{';
			$vw_security_guard_custom_css .='font-weight: '.esc_attr($vw_security_guard_footer_heading_weight).';';
		$vw_security_guard_custom_css .='}';
	}

	/*---------------------------Footer Style -------------------*/

	$vw_security_guard_theme_lay = get_theme_mod( 'vw_security_guard_footer_template','vw_security_guard-footer-one');
    if($vw_security_guard_theme_lay == 'vw_security_guard-footer-one'){
		$vw_security_guard_custom_css .='#footer{';
			$vw_security_guard_custom_css .='';
		$vw_security_guard_custom_css .='}';

	}else if($vw_security_guard_theme_lay == 'vw_security_guard-footer-two'){
		$vw_security_guard_custom_css .='#footer{';
			$vw_security_guard_custom_css .='background: linear-gradient(to right, #f9f8ff, #dedafa);';
		$vw_security_guard_custom_css .='}';
		$vw_security_guard_custom_css .='#footer p, #footer li a, #footer, #footer h3, #footer a.rsswidget, #footer #wp-calendar a, .copyright a, #footer .custom_details, #footer ins span, #footer .tagcloud a, .main-inner-box span.entry-date a, nav.woocommerce-MyAccount-navigation ul li:hover a, #footer ul li a, #footer table, #footer th, #footer td, #footer caption, #sidebar caption,#footer nav.wp-calendar-nav a,#footer .search-form .search-field{';
			$vw_security_guard_custom_css .='color:#000;';
		$vw_security_guard_custom_css .='}';
		$vw_security_guard_custom_css .='#footer ul li::before{';
			$vw_security_guard_custom_css .='background:#000;';
		$vw_security_guard_custom_css .='}';
		$vw_security_guard_custom_css .='#footer table, #footer th, #footer td,#footer .search-form .search-field,#footer .tagcloud a{';
			$vw_security_guard_custom_css .='border: 1px solid #000;';
		$vw_security_guard_custom_css .='}';

	}else if($vw_security_guard_theme_lay == 'vw_security_guard-footer-three'){
		$vw_security_guard_custom_css .='#footer{';
			$vw_security_guard_custom_css .='background: #232524;';
		$vw_security_guard_custom_css .='}';
	}
	else if($vw_security_guard_theme_lay == 'vw_security_guard-footer-four'){
		$vw_security_guard_custom_css .='#footer{';
			$vw_security_guard_custom_css .='background: #f7f7f7;';
		$vw_security_guard_custom_css .='}';
		$vw_security_guard_custom_css .='#footer p, #footer li a, #footer, #footer h3, #footer a.rsswidget, #footer #wp-calendar a, .copyright a, #footer .custom_details, #footer ins span, #footer .tagcloud a, .main-inner-box span.entry-date a, nav.woocommerce-MyAccount-navigation ul li:hover a, #footer ul li a, #footer table, #footer th, #footer td, #footer caption, #sidebar caption,#footer nav.wp-calendar-nav a,#footer .search-form .search-field{';
			$vw_security_guard_custom_css .='color:#000;';
		$vw_security_guard_custom_css .='}';
		$vw_security_guard_custom_css .='#footer ul li::before{';
			$vw_security_guard_custom_css .='background:#000;';
		$vw_security_guard_custom_css .='}';
		$vw_security_guard_custom_css .='#footer table, #footer th, #footer td,#footer .search-form .search-field,#footer .tagcloud a{';
			$vw_security_guard_custom_css .='border: 1px solid #000;';
		$vw_security_guard_custom_css .='}';
	}
	else if($vw_security_guard_theme_lay == 'vw_security_guard-footer-five'){
		$vw_security_guard_custom_css .='#footer{';
			$vw_security_guard_custom_css .='background: linear-gradient(to right, #01093a, #2d0b00);';
		$vw_security_guard_custom_css .='}';
	}

	$vw_security_guard_responsive_preloader_hide = get_theme_mod('vw_security_guard_responsive_preloader_hide',false);
	if($vw_security_guard_responsive_preloader_hide == true && get_theme_mod('vw_security_guard_loader_enable',false) == false){
		$vw_security_guard_custom_css .='@media screen and (min-width:575px){
			#preloader{';
			$vw_security_guard_custom_css .='display:none !important;';
		$vw_security_guard_custom_css .='} }';
	}

	if($vw_security_guard_responsive_preloader_hide == false){
		$vw_security_guard_custom_css .='@media screen and (max-width:575px){
			#preloader{';
			$vw_security_guard_custom_css .='display:none !important;';
		$vw_security_guard_custom_css .='} }';
	}