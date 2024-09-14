<?php
//about theme info
add_action( 'admin_menu', 'vw_security_guard_gettingstarted' );
function vw_security_guard_gettingstarted() {    	
	add_theme_page( esc_html__('About VW Security Guard', 'vw-security-guard'), esc_html__('About VW Security Guard', 'vw-security-guard'), 'edit_theme_options', 'vw_security_guard_guide', 'vw_security_guard_mostrar_guide');   
}

// Add a Custom CSS file to WP Admin Area
function vw_security_guard_admin_theme_style() {
   wp_enqueue_style('vw-security-guard-custom-admin-style', esc_url(get_template_directory_uri()) . '/inc/getstart/getstart.css');
   wp_enqueue_script('vw-security-guard-tabs', esc_url(get_template_directory_uri()) . '/inc/getstart/js/tab.js');
}
add_action('admin_enqueue_scripts', 'vw_security_guard_admin_theme_style');

//guidline for about theme
function vw_security_guard_mostrar_guide() { 
	//custom function about theme customizer
	$return = add_query_arg( array()) ;
	$theme = wp_get_theme( 'vw-security-guard' );
?>

<div class="wrapper-info">
    <div class="col-left">
    	<h2><?php esc_html_e( 'Welcome to VW Security Guard Theme', 'vw-security-guard' ); ?> <span class="version">Version: <?php echo esc_html($theme['Version']);?></span></h2>
    	<p><?php esc_html_e('All our WordPress themes are modern, minimalist, 100% responsive, seo-friendly,feature-rich, and multipurpose that best suit designers, bloggers and other professionals who are working in the creative fields.','vw-security-guard'); ?></p>
    </div>
    <div class="col-right">
    	<div class="logo">
			<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getstart/images/final-logo.png" alt="" />
		</div>
		<div class="update-now">
			<h4><?php esc_html_e('Buy VW Security Guard at 20% Discount','vw-security-guard'); ?></h4>
			<h4><?php esc_html_e('Use Coupon','vw-security-guard'); ?> ( <span><?php esc_html_e('vwpro20','vw-security-guard'); ?></span> ) </h4> 
			<div class="info-link">
				<a href="<?php echo esc_url( VW_SECURITY_GUARD_BUY_NOW ); ?>" target="_blank"> <?php esc_html_e( 'Upgrade to Pro', 'vw-security-guard' ); ?></a>
			</div>
		</div>
    </div>

    <div class="tab-sec">
		<div class="tab">
			<button class="tablinks" onclick="vw_security_guard_open_tab(event, 'lite_theme')"><?php esc_html_e( 'Setup With Customizer', 'vw-security-guard' ); ?></button>	
			<button class="tablinks" onclick="vw_security_guard_open_tab(event, 'block_pattern')"><?php esc_html_e( 'Setup With Block Pattern', 'vw-security-guard' ); ?></button>
			<button class="tablinks" onclick="vw_security_guard_open_tab(event, 'gutenberg_editor')"><?php esc_html_e( 'Setup With Gutunberg Block', 'vw-security-guard' ); ?></button>
			<button class="tablinks" onclick="vw_security_guard_open_tab(event, 'product_addons_editor')"><?php esc_html_e( 'Woocommerce Product Addons', 'vw-security-guard' ); ?></button>
		  	<button class="tablinks" onclick="vw_security_guard_open_tab(event, 'security_pro')"><?php esc_html_e( 'Get Premium', 'vw-security-guard' ); ?></button>
		  	<button class="tablinks" onclick="vw_security_guard_open_tab(event, 'free_pro')"><?php esc_html_e( 'Support', 'vw-security-guard' ); ?></button>
		  	<button class="tablinks" onclick="vw_security_guard_open_tab(event, 'get_bundle')"><?php esc_html_e( 'Get 250+ Themes Bundle at $99', 'vw-security-guard' ); ?></button>
		</div>

		<?php 
			$vw_security_guard_plugin_custom_css = '';
			if(class_exists('Ibtana_Visual_Editor_Menu_Class')){
				$vw_security_guard_plugin_custom_css ='display: block';
			}
		?>
		<div id="lite_theme" class="tabcontent open">
			<?php if(!class_exists('Ibtana_Visual_Editor_Menu_Class')){ 
				$plugin_ins = VW_Security_Guard_Plugin_Activation_Settings::get_instance();
				$vw_security_guard_actions = $plugin_ins->recommended_actions;
				?>
				<div class="vw-security-guard-recommended-plugins">
				    <div class="vw-security-guard-action-list">
				        <?php if ($vw_security_guard_actions): foreach ($vw_security_guard_actions as $key => $vw_security_guard_actionValue): ?>
				                <div class="vw-security-guard-action" id="<?php echo esc_attr($vw_security_guard_actionValue['id']);?>">
			                        <div class="action-inner">
			                            <h3 class="action-title"><?php echo esc_html($vw_security_guard_actionValue['title']); ?></h3>
			                            <div class="action-desc"><?php echo esc_html($vw_security_guard_actionValue['desc']); ?></div>
			                            <?php echo wp_kses_post($vw_security_guard_actionValue['link']); ?>
			                            <a class="ibtana-skip-btn" get-start-tab-id="lite-theme-tab" href="javascript:void(0);"><?php esc_html_e('Skip','vw-security-guard'); ?></a>
			                        </div>
				                </div>
				            <?php endforeach;
				        endif; ?>
				    </div>
				</div>
			<?php } ?>
			<div class="lite-theme-tab" style="<?php echo esc_attr($vw_security_guard_plugin_custom_css); ?>">
				<h3><?php esc_html_e( 'Lite Theme Information', 'vw-security-guard' ); ?></h3>
				<hr class="h3hr">
			  	<p><?php esc_html_e('VW Security Guard is a sophisticated, clean, technically advanced, powerful and robust WordPress theme for security guards, security services providing companies and agencies, bodyguards, commando training institutes, self-defence training classes and other similar websites. It is stuffed with top notch features to never make you feel short of anything that a great website needs. It essentially has a fluid layout that responds to varying screen sizes. It is cross-browser compatible, multilingual with WPML compatibility, RTL supportive and SEO ready. Customization is its powerful feature that gives you freedom to design the website according to your specifications.  Everything from colour, background, menu, header, footer and layout can be changed through theme customizer which has a use-friendly interface to get your work done within minutes. It gives a stream of options like multiple blog and page layout, header and footer style, sidebar layout to change the look and feel of the website. It has smartly used banners and sliders to impress visitors. Social media icons are embedded in this security theme to make the content shareable on multiple networking sites. VW Security Guard is coded from scratch and is built on Bootstrap framework.','vw-security-guard'); ?></p>
			  	<div class="col-left-inner">
			  		<h4><?php esc_html_e( 'Theme Documentation', 'vw-security-guard' ); ?></h4>
					<p><?php esc_html_e( 'If you need any assistance regarding setting up and configuring the Theme, our documentation is there.', 'vw-security-guard' ); ?></p>
					<div class="info-link">
						<a href="<?php echo esc_url( VW_SECURITY_GUARD_FREE_THEME_DOC ); ?>" target="_blank"> <?php esc_html_e( 'Documentation', 'vw-security-guard' ); ?></a>
					</div>
					<hr>
					<h4><?php esc_html_e('Theme Customizer', 'vw-security-guard'); ?></h4>
					<p> <?php esc_html_e('To begin customizing your website, start by clicking "Customize".', 'vw-security-guard'); ?></p>
					<div class="info-link">
						<a target="_blank" href="<?php echo esc_url( admin_url('customize.php') ); ?>"><?php esc_html_e('Customizing', 'vw-security-guard'); ?></a>
					</div>
					<hr>				
					<h4><?php esc_html_e('Having Trouble, Need Support?', 'vw-security-guard'); ?></h4>
					<p> <?php esc_html_e('Our dedicated team is well prepared to help you out in case of queries and doubts regarding our theme.', 'vw-security-guard'); ?></p>
					<div class="info-link">
						<a href="<?php echo esc_url( VW_SECURITY_GUARD_SUPPORT ); ?>" target="_blank"><?php esc_html_e('Support Forum', 'vw-security-guard'); ?></a>
					</div>
					<hr>
					<h4><?php esc_html_e('Reviews & Testimonials', 'vw-security-guard'); ?></h4>
					<p> <?php esc_html_e('All the features and aspects of this WordPress Theme are phenomenal. I\'d recommend this theme to all.', 'vw-security-guard'); ?>  </p>
					<div class="info-link">
						<a href="<?php echo esc_url( VW_SECURITY_GUARD_REVIEW ); ?>" target="_blank"><?php esc_html_e('Reviews', 'vw-security-guard'); ?></a>
					</div>
			  		<div class="link-customizer">
						<h3><?php esc_html_e( 'Link to customizer', 'vw-security-guard' ); ?></h3>
						<hr class="h3hr">
						<div class="first-row">
							<div class="row-box">
								<div class="row-box1">
									<span class="dashicons dashicons-buddicons-buddypress-logo"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[control]=custom_logo') ); ?>" target="_blank"><?php esc_html_e('Upload your logo','vw-security-guard'); ?></a>
								</div>
								<div class="row-box2">
									<span class="dashicons dashicons-slides"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[section]=vw_security_guard_slidersettings') ); ?>" target="_blank"><?php esc_html_e('Slider Settings','vw-security-guard'); ?></a>
								</div>
							</div>
							<div class="row-box">
								<div class="row-box1">
									<span class="dashicons dashicons-welcome-write-blog"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[section]=vw_security_guard_topbar') ); ?>" target="_blank"><?php esc_html_e('Topbar Section','vw-security-guard'); ?></a>
								</div>
								<div class="row-box2">
									<span class="dashicons dashicons-editor-table"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[section]=vw_security_guard_articles_section') ); ?>" target="_blank"><?php esc_html_e('Security Services','vw-security-guard'); ?></a>
								</div>
							</div>
							<div class="row-box">
								<div class="row-box1">
									<span class="dashicons dashicons-menu"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[panel]=nav_menus') ); ?>" target="_blank"><?php esc_html_e('Menus','vw-security-guard'); ?></a>
								</div>
								<div class="row-box2">
									<span class="dashicons dashicons-screenoptions"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[panel]=widgets') ); ?>" target="_blank"><?php esc_html_e('Footer Widget','vw-security-guard'); ?></a>
								</div>
							</div>

							<div class="row-box">
								<div class="row-box1">
									<span class="dashicons dashicons-format-gallery"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[section]=vw_security_guard_post_settings') ); ?>" target="_blank"><?php esc_html_e('Post settings','vw-security-guard'); ?></a>
								</div>
								 <div class="row-box2">
									<span class="dashicons dashicons-align-center"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[section]=vw_security_guard_woocommerce_section') ); ?>" target="_blank"><?php esc_html_e('WooCommerce Layout','vw-security-guard'); ?></a>
								</div> 
							</div>
							
							<div class="row-box">
								<div class="row-box1">
									<span class="dashicons dashicons-admin-generic"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[section]=vw_security_guard_left_right') ); ?>" target="_blank"><?php esc_html_e('General Settings','vw-security-guard'); ?></a>
								</div>
								<div class="row-box2">
									<span class="dashicons dashicons-text-page"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[section]=vw_security_guard_footer') ); ?>" target="_blank"><?php esc_html_e('Footer Text','vw-security-guard'); ?></a>
								</div>
							</div>
						</div>
					</div>
			  	</div>
				<div class="col-right-inner">
					<h3 class="page-template"><?php esc_html_e('How to set up Home Page Template','vw-security-guard'); ?></h3>
				  	<hr class="h3hr">
					<p><?php esc_html_e('Follow these instructions to setup Home page.','vw-security-guard'); ?></p>
	                <ul>
	                  	<p><span class="strong"><?php esc_html_e('1. Create a new page :','vw-security-guard'); ?></span><?php esc_html_e(' Go to ','vw-security-guard'); ?>
					  	<b><?php esc_html_e(' Dashboard >> Pages >> Add New Page','vw-security-guard'); ?></b></p>

	                  	<p><?php esc_html_e('Name it as "Home" then select the template "Custom Home Page".','vw-security-guard'); ?></p>
	                  	<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getstart/images/home-page-template.png" alt="" />
	                  	<p><span class="strong"><?php esc_html_e('2. Set the front page:','vw-security-guard'); ?></span><?php esc_html_e(' Go to ','vw-security-guard'); ?>
					  	<b><?php esc_html_e(' Settings >> Reading ','vw-security-guard'); ?></b></p>
					  	<p><?php esc_html_e('Select the option of Static Page, now select the page you created to be the homepage, while another page to be your default page.','vw-security-guard'); ?></p>
	                  	<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getstart/images/set-front-page.png" alt="" />
	                  	<p><?php esc_html_e(' Once you are done with this, then follow the','vw-security-guard'); ?> <a class="doc-links" href="https://preview.vwthemesdemo.com/docs/free-vw-security-guard/" target="_blank"><?php esc_html_e('Documentation','vw-security-guard'); ?></a></p>
	                </ul>
			  	</div>
			</div>
		</div>

		<div id="block_pattern" class="tabcontent">
			<?php if(!class_exists('Ibtana_Visual_Editor_Menu_Class')){ 
				$plugin_ins = VW_Security_Guard_Plugin_Activation_Settings::get_instance();
				$vw_security_guard_actions = $plugin_ins->recommended_actions;
				?>
				<div class="vw-security-guard-recommended-plugins">
				    <div class="vw-security-guard-action-list">
				        <?php if ($vw_security_guard_actions): foreach ($vw_security_guard_actions as $key => $vw_security_guard_actionValue): ?>
				                <div class="vw-security-guard-action" id="<?php echo esc_attr($vw_security_guard_actionValue['id']);?>">
			                        <div class="action-inner">
			                            <h3 class="action-title"><?php echo esc_html($vw_security_guard_actionValue['title']); ?></h3>
			                            <div class="action-desc"><?php echo esc_html($vw_security_guard_actionValue['desc']); ?></div>
			                            <?php echo wp_kses_post($vw_security_guard_actionValue['link']); ?>
			                            <a class="ibtana-skip-btn" href="javascript:void(0);" get-start-tab-id="gutenberg-editor-tab"><?php esc_html_e('Skip','vw-security-guard'); ?></a>
			                        </div>
				                </div>
				            <?php endforeach;
				        endif; ?>
				    </div>
				</div>
			<?php } ?>
			<div class="gutenberg-editor-tab" style="<?php echo esc_attr($vw_security_guard_plugin_custom_css); ?>">
				<div class="block-pattern-img">
				  	<h3><?php esc_html_e( 'Block Patterns', 'vw-security-guard' ); ?></h3>
					<hr class="h3hr">
					<p><?php esc_html_e('Follow the below instructions to setup Home page with Block Patterns.','vw-security-guard'); ?></p>
	              	<p><b><?php esc_html_e('Click on Below Add new page button >> Click on "+" Icon.','vw-security-guard'); ?></span></b></p>
	              	<div class="vw-security-guard-pattern-page">
				    	<a href="javascript:void(0)" class="vw-pattern-page-btn button-primary button"><?php esc_html_e('Add New Page','vw-security-guard'); ?></a>
				    </div>
				    	<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getstart/images/block-pattern1.png" alt="" />
				    	<p><b><?php esc_html_e('Click on Patterns Tab >> Click on Theme Name >> Click on Sections >> Publish.','vw-security-guard'); ?></span></b></p>
	              	<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getstart/images/block-pattern.png" alt="" />	
	            </div>

	            <div class="block-pattern-link-customizer">
	              	<div class="link-customizer-with-block-pattern">
							<h3><?php esc_html_e( 'Link to customizer', 'vw-security-guard' ); ?></h3>
							<hr class="h3hr">
							<div class="first-row">
								<div class="row-box">
									<div class="row-box1">
										<span class="dashicons dashicons-buddicons-buddypress-logo"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[control]=custom_logo') ); ?>" target="_blank"><?php esc_html_e('Upload your logo','vw-security-guard'); ?></a>
									</div>
									<div class="row-box2">
										<span class="dashicons dashicons-networking"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[section]=vw_security_guard_social_icon_settings') ); ?>" target="_blank"><?php esc_html_e('Social Icons','vw-security-guard'); ?></a>
									</div>
								</div>
								<div class="row-box">
									<div class="row-box1">
										<span class="dashicons dashicons-menu"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[panel]=nav_menus') ); ?>" target="_blank"><?php esc_html_e('Menus','vw-security-guard'); ?></a>
									</div>
									
									<div class="row-box2">
										<span class="dashicons dashicons-text-page"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[section]=vw_security_guard_footer') ); ?>" target="_blank"><?php esc_html_e('Footer Text','vw-security-guard'); ?></a>
									</div>
								</div>

								<div class="row-box">
									<div class="row-box1">
										<span class="dashicons dashicons-format-gallery"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[section]=vw_security_guard_post_settings') ); ?>" target="_blank"><?php esc_html_e('Post settings','vw-security-guard'); ?></a>
									</div>
									 <div class="row-box2">
										<span class="dashicons dashicons-align-center"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[section]=vw_security_guard_woocommerce_section') ); ?>" target="_blank"><?php esc_html_e('WooCommerce Layout','vw-security-guard'); ?></a>
									</div> 
								</div>
								
								<div class="row-box">
									<div class="row-box1">
										<span class="dashicons dashicons-admin-generic"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[section]=vw_security_guard_left_right') ); ?>" target="_blank"><?php esc_html_e('General Settings','vw-security-guard'); ?></a>
									</div>
									 <div class="row-box2">
										<span class="dashicons dashicons-screenoptions"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[panel]=widgets') ); ?>" target="_blank"><?php esc_html_e('Footer Widget','vw-security-guard'); ?></a>
									</div> 
								</div>
							</div>
					</div>	
				</div>			
	        </div>
		</div>	

		<div id="gutenberg_editor" class="tabcontent">
			<?php if(!class_exists('Ibtana_Visual_Editor_Menu_Class')){ 
			$plugin_ins = VW_Security_Guard_Plugin_Activation_Settings::get_instance();
			$vw_security_guard_actions = $plugin_ins->recommended_actions;
			?>
				<div class="vw-security-guard-recommended-plugins">
				    <div class="vw-security-guard-action-list">
				        <?php if ($vw_security_guard_actions): foreach ($vw_security_guard_actions as $key => $vw_security_guard_actionValue): ?>
				                <div class="vw-security-guard-action" id="<?php echo esc_attr($vw_security_guard_actionValue['id']);?>">
			                        <div class="action-inner plugin-activation-redirect">
			                            <h3 class="action-title"><?php echo esc_html($vw_security_guard_actionValue['title']); ?></h3>
			                            <div class="action-desc"><?php echo esc_html($vw_security_guard_actionValue['desc']); ?></div>
			                            <?php echo wp_kses_post($vw_security_guard_actionValue['link']); ?>
			                        </div>
				                </div>
				            <?php endforeach;
				        endif; ?>
				    </div>
				</div>
			<?php }else{ ?>
				<h3><?php esc_html_e( 'Gutunberg Blocks', 'vw-security-guard' ); ?></h3>
				<hr class="h3hr">
				<div class="vw-security-guard-pattern-page">
			    	<a href="<?php echo esc_url( admin_url( 'admin.php?page=ibtana-visual-editor-templates' ) ); ?>" class="vw-pattern-page-btn ibtana-dashboard-page-btn button-primary button"><?php esc_html_e('Ibtana Settings','vw-security-guard'); ?></a>
			    </div>

			     <div class="link-customizer-with-guternberg-ibtana">
					<h3><?php esc_html_e( 'Link to customizer', 'vw-security-guard' ); ?></h3>
					<hr class="h3hr">
					<div class="first-row">
						<div class="row-box">
							<div class="row-box1">
								<span class="dashicons dashicons-buddicons-buddypress-logo"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[control]=custom_logo') ); ?>" target="_blank"><?php esc_html_e('Upload your logo','vw-security-guard'); ?></a>
							</div>
							<div class="row-box2">
								<span class="dashicons dashicons-networking"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[section]=vw_security_guard_social_icon_settings') ); ?>" target="_blank"><?php esc_html_e('Social Icons','vw-security-guard'); ?></a>
							</div>
						</div>
						<div class="row-box">
							<div class="row-box1">
								<span class="dashicons dashicons-menu"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[panel]=nav_menus') ); ?>" target="_blank"><?php esc_html_e('Menus','vw-security-guard'); ?></a>
							</div>
							
							<div class="row-box2">
								<span class="dashicons dashicons-text-page"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[section]=vw_security_guard_footer') ); ?>" target="_blank"><?php esc_html_e('Footer Text','vw-security-guard'); ?></a>
							</div>
						</div>

						<div class="row-box">
							<div class="row-box1">
								<span class="dashicons dashicons-format-gallery"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[section]=vw_security_guard_post_settings') ); ?>" target="_blank"><?php esc_html_e('Post settings','vw-security-guard'); ?></a>
							</div>
							 <div class="row-box2">
								<span class="dashicons dashicons-align-center"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[section]=vw_security_guard_woocommerce_section') ); ?>" target="_blank"><?php esc_html_e('WooCommerce Layout','vw-security-guard'); ?></a>
							</div> 
						</div>
						
						<div class="row-box">
							<div class="row-box1">
								<span class="dashicons dashicons-admin-generic"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[section]=vw_security_guard_left_right') ); ?>" target="_blank"><?php esc_html_e('General Settings','vw-security-guard'); ?></a>
							</div>
							 <div class="row-box2">
								<span class="dashicons dashicons-screenoptions"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[panel]=widgets') ); ?>" target="_blank"><?php esc_html_e('Footer Widget','vw-security-guard'); ?></a>
							</div> 
						</div>
					</div>
				</div>
			<?php } ?>
		</div>

		<div id="product_addons_editor" class="tabcontent">
			<?php if(!class_exists('IEPA_Loader')){
				$plugin_ins = VW_Security_Guard_Plugin_Activation_Woo_Products::get_instance();
				$vw_security_guard_actions = $plugin_ins->recommended_actions;
				?>
				<div class="vw-security-guard-recommended-plugins">
					    <div class="vw-security-guard-action-list">
					        <?php if ($vw_security_guard_actions): foreach ($vw_security_guard_actions as $key => $vw_security_guard_actionValue): ?>
					                <div class="vw-security-guard-action" id="<?php echo esc_attr($vw_security_guard_actionValue['id']);?>">
				                        <div class="action-inner plugin-activation-redirect">
				                            <h3 class="action-title"><?php echo esc_html($vw_security_guard_actionValue['title']); ?></h3>
				                            <div class="action-desc"><?php echo esc_html($vw_security_guard_actionValue['desc']); ?></div>
				                            <?php echo wp_kses_post($vw_security_guard_actionValue['link']); ?>
				                        </div>
					                </div>
					            <?php endforeach;
					        endif; ?>
					    </div>
				</div>
			<?php }else{ ?>
				<h3><?php esc_html_e( 'Woocommerce Products Blocks', 'vw-security-guard' ); ?></h3>
				<hr class="h3hr">
				<div class="vw-security-guard-pattern-page">
					<p><?php esc_html_e('Follow the below instructions to setup Products Templates.','vw-security-guard'); ?></p>
					<p><b><?php esc_html_e('1. First you need to activate these plugins','vw-security-guard'); ?></b></p>
						<p><?php esc_html_e('1. Ibtana - WordPress Website Builder ','vw-security-guard'); ?></p>
						<p><?php esc_html_e('2. Ibtana - Ecommerce Product Addons.','vw-security-guard'); ?></p>
						<p><?php esc_html_e('3. Woocommerce','vw-security-guard'); ?></p>

					<p><b><?php esc_html_e('2. Go To Dashboard >> Ibtana Settings >> Woocommerce Templates','vw-security-guard'); ?></span></b></p>
	              	<div class="vw-security-guard-pattern-page">
			    		<a href="<?php echo esc_url( admin_url( 'admin.php?page=ibtana-visual-editor-woocommerce-templates&ive_wizard_view=parent' ) ); ?>" class="vw-pattern-page-btn ibtana-dashboard-page-btn button-primary button"><?php esc_html_e('Woocommerce Templates','vw-security-guard'); ?></a>
			    	</div>
	              	<p><?php esc_html_e('You can create a template as you like.','vw-security-guard'); ?></span></p>
			    </div>
			<?php } ?>
		</div>

		<div id="security_pro" class="tabcontent">
		  	<h3><?php esc_html_e( 'Premium Theme Information', 'vw-security-guard' ); ?></h3>
			<hr class="h3hr">
		    <div class="col-left-pro">
		    	<p><?php esc_html_e('This security guard WordPress theme is robust, powerful, expressive and smart. It is useful to build a fully functional website for security guards, security services companies, commando and bodyguard training institutes, self-defence training classes, police training academy and other relevant sites. It is flooded with exemplary features and functionality which come handy with easily manageable interface. The theme is fun to use not just for webmasters but also for those who have zero coding knowledge. It will create absolutely no fuss with third party plugins as it is seamlessly compatible with them. You will never run out of ideas to design a beautiful and attractive website as it comes with so many layout options for header, footer and sidebars. With this premium security guard WordPress theme, you can also set up an online store due to its compatibility with WooCommerce plugin.','vw-security-guard'); ?></p>
		    	<div class="pro-links">
			    	<a href="<?php echo esc_url( VW_SECURITY_GUARD_LIVE_DEMO ); ?>" target="_blank"><?php esc_html_e('Live Demo', 'vw-security-guard'); ?></a>
					<a href="<?php echo esc_url( VW_SECURITY_GUARD_BUY_NOW ); ?>" target="_blank"><?php esc_html_e('Buy Pro', 'vw-security-guard'); ?></a>
					<a href="<?php echo esc_url( VW_SECURITY_GUARD_PRO_DOC ); ?>" target="_blank"><?php esc_html_e('Pro Documentation', 'vw-security-guard'); ?></a>
					<a href="<?php echo esc_url( VW_SECURITY_GUARD_THEME_BUNDLE_BUY_NOW ); ?>" target="_blank"><?php esc_html_e('Get 250+ Themes Bundle at $99', 'vw-security-guard'); ?></a>
				</div>
		    </div>
		    <div class="col-right-pro">
		    	<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getstart/images/responsive.png" alt="" />
		    </div>
		    <div class="featurebox">
			    <h3><?php esc_html_e( 'Theme Features', 'vw-security-guard' ); ?></h3>
				<hr class="h3hr">
				<div class="table-image">
					<table class="tablebox">
						<thead>
							<tr>
								<th></th>
								<th><?php esc_html_e('Free Themes', 'vw-security-guard'); ?></th>
								<th><?php esc_html_e('Premium Themes', 'vw-security-guard'); ?></th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td><?php esc_html_e('Theme Customization', 'vw-security-guard'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Responsive Design', 'vw-security-guard'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Logo Upload', 'vw-security-guard'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Social Media Links', 'vw-security-guard'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Slider Settings', 'vw-security-guard'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Number of Slides', 'vw-security-guard'); ?></td>
								<td class="table-img"><?php esc_html_e('4', 'vw-security-guard'); ?></td>
								<td class="table-img"><?php esc_html_e('Unlimited', 'vw-security-guard'); ?></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Template Pages', 'vw-security-guard'); ?></td>
								<td class="table-img"><?php esc_html_e('3', 'vw-security-guard'); ?></td>
								<td class="table-img"><?php esc_html_e('6', 'vw-security-guard'); ?></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Home Page Template', 'vw-security-guard'); ?></td>
								<td class="table-img"><?php esc_html_e('1', 'vw-security-guard'); ?></td>
								<td class="table-img"><?php esc_html_e('1', 'vw-security-guard'); ?></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Theme sections', 'vw-security-guard'); ?></td>
								<td class="table-img"><?php esc_html_e('2', 'vw-security-guard'); ?></td>
								<td class="table-img"><?php esc_html_e('15', 'vw-security-guard'); ?></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Contact us Page Template', 'vw-security-guard'); ?></td>
								<td class="table-img">0</td>
								<td class="table-img"><?php esc_html_e('1', 'vw-security-guard'); ?></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Blog Templates & Layout', 'vw-security-guard'); ?></td>
								<td class="table-img">0</td>
								<td class="table-img"><?php esc_html_e('3(Full width/Left/Right Sidebar)', 'vw-security-guard'); ?></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Page Templates & Layout', 'vw-security-guard'); ?></td>
								<td class="table-img">0</td>
								<td class="table-img"><?php esc_html_e('2(Left/Right Sidebar)', 'vw-security-guard'); ?></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Color Pallete For Particular Sections', 'vw-security-guard'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Global Color Option', 'vw-security-guard'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Section Reordering', 'vw-security-guard'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Demo Importer', 'vw-security-guard'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Allow To Set Site Title, Tagline, Logo', 'vw-security-guard'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Enable Disable Options On All Sections, Logo', 'vw-security-guard'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Full Documentation', 'vw-security-guard'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Latest WordPress Compatibility', 'vw-security-guard'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Woo-Commerce Compatibility', 'vw-security-guard'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Support 3rd Party Plugins', 'vw-security-guard'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Secure and Optimized Code', 'vw-security-guard'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Exclusive Functionalities', 'vw-security-guard'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Section Enable / Disable', 'vw-security-guard'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Section Google Font Choices', 'vw-security-guard'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Gallery', 'vw-security-guard'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Simple & Mega Menu Option', 'vw-security-guard'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Support to add custom CSS / JS ', 'vw-security-guard'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Shortcodes', 'vw-security-guard'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Custom Background, Colors, Header, Logo & Menu', 'vw-security-guard'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Premium Membership', 'vw-security-guard'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Budget Friendly Value', 'vw-security-guard'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Priority Error Fixing', 'vw-security-guard'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Custom Feature Addition', 'vw-security-guard'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('All Access Theme Pass', 'vw-security-guard'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Seamless Customer Support', 'vw-security-guard'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td></td>
								<td class="table-img"></td>
								<td class="update-link"><a href="<?php echo esc_url( VW_SECURITY_GUARD_BUY_NOW ); ?>" target="_blank"><?php esc_html_e('Upgrade to Pro', 'vw-security-guard'); ?></a></td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>

		<div id="free_pro" class="tabcontent">
		  	<div class="col-3">
		  		<h4><span class="dashicons dashicons-star-filled"></span><?php esc_html_e('Pro Version', 'vw-security-guard'); ?></h4>
				<p> <?php esc_html_e('To gain access to extra theme options and more interesting features, upgrade to pro version.', 'vw-security-guard'); ?></p>
				<div class="info-link">
					<a href="<?php echo esc_url( VW_SECURITY_GUARD_BUY_NOW ); ?>" target="_blank"><?php esc_html_e('Get Pro', 'vw-security-guard'); ?></a>
				</div>
		  	</div>
		  	<div class="col-3">
		  		<h4><span class="dashicons dashicons-cart"></span><?php esc_html_e('Pre-purchase Queries', 'vw-security-guard'); ?></h4>
				<p> <?php esc_html_e('If you have any pre-sale query, we are prepared to resolve it.', 'vw-security-guard'); ?></p>
				<div class="info-link">
					<a href="<?php echo esc_url( VW_SECURITY_GUARD_CONTACT ); ?>" target="_blank"><?php esc_html_e('Question', 'vw-security-guard'); ?></a>
				</div>
		  	</div>
		  	<div class="col-3">		  		
		  		<h4><span class="dashicons dashicons-admin-customizer"></span><?php esc_html_e('Child Theme', 'vw-security-guard'); ?></h4>
				<p> <?php esc_html_e('For theme file customizations, make modifications in the child theme and not in the main theme file.', 'vw-security-guard'); ?></p>
				<div class="info-link">
					<a href="<?php echo esc_url( VW_SECURITY_GUARD_CHILD_THEME ); ?>" target="_blank"><?php esc_html_e('About Child Theme', 'vw-security-guard'); ?></a>
				</div>
		  	</div>

		  	<div class="col-3">
		  		<h4><span class="dashicons dashicons-admin-comments"></span><?php esc_html_e('Frequently Asked Questions', 'vw-security-guard'); ?></h4>
				<p> <?php esc_html_e('We have gathered top most, frequently asked questions and answered them for your easy understanding. We will list down more as we get new challenging queries. Check back often.', 'vw-security-guard'); ?></p>
				<div class="info-link">
					<a href="<?php echo esc_url( VW_SECURITY_GUARD_FAQ ); ?>" target="_blank"><?php esc_html_e('View FAQ','vw-security-guard'); ?></a>
				</div>
		  	</div>

		  	<div class="col-3">
		  		<h4><span class="dashicons dashicons-sos"></span><?php esc_html_e('Support Queries', 'vw-security-guard'); ?></h4>
				<p> <?php esc_html_e('If you have any queries after purchase, you can contact us. We are eveready to help you out.', 'vw-security-guard'); ?></p>
				<div class="info-link">
					<a href="<?php echo esc_url( VW_SECURITY_GUARD_SUPPORT ); ?>" target="_blank"><?php esc_html_e('Contact Us', 'vw-security-guard'); ?></a>
				</div>
		  	</div>
		</div>

		<div id="get_bundle" class="tabcontent">		  	
		   <div class="col-left-pro">
		   	<h3><?php esc_html_e( 'WP Theme Bundle', 'vw-security-guard' ); ?></h3>
		    	<p><?php esc_html_e('Enhance your website effortlessly with our WP Theme Bundle. Get access to 250+ premium WordPress themes and 5+ powerful plugins, all designed to meet diverse business needs. Enjoy seamless integration with any plugins, ultimate customization flexibility, and regular updates to keep your site current and secure. Plus, benefit from our dedicated customer support, ensuring a smooth and professional web experience.','vw-security-guard'); ?></p>
		    	<div class="feature">
		    		<h4><?php esc_html_e( 'Features:', 'vw-security-guard' ); ?></h4>
		    		<p><?php esc_html_e('250+ Premium Themes & 5+ Plugins.', 'vw-security-guard'); ?></p>
		    		<p><?php esc_html_e('Seamless Integration.', 'vw-security-guard'); ?></p>
		    		<p><?php esc_html_e('Customization Flexibility.', 'vw-security-guard'); ?></p>
		    		<p><?php esc_html_e('Regular Updates.', 'vw-security-guard'); ?></p>
		    		<p><?php esc_html_e('Dedicated Support.', 'vw-security-guard'); ?></p>
		    	</div>
		    	<p>Upgrade now and give your website the professional edge it deserves, all at an unbeatable price of $99!</p>
		    	<div class="pro-links">
					<a href="<?php echo esc_url( VW_SECURITY_GUARD_THEME_BUNDLE_BUY_NOW ); ?>" target="_blank"><?php esc_html_e('Buy Now', 'vw-security-guard'); ?></a>
					<a href="<?php echo esc_url( VW_SECURITY_GUARD_THEME_BUNDLE_DOC ); ?>" target="_blank"><?php esc_html_e('Documentation', 'vw-security-guard'); ?></a>
				</div>
		   </div>
		   <div class="col-right-pro">
		    	<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getstart/images/bundle.png" alt="" />
		   </div>		    
		</div>

	</div>
</div>
<?php } ?>