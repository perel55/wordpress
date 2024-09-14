<?php
/**
 * The template part for header
 *
 * @package VW Security Guard 
 * @subpackage vw_security_guard
 * @since VW Security Guard 1.0
 */
?>

<?php
  $vw_security_guard_search_hide_show = get_theme_mod( 'vw_security_guard_search_hide_show' );
  if ( 'Disable' == $vw_security_guard_search_hide_show ) {
   $colmd = 'col-lg-12 col-md-12';
  } else { 
   $colmd = 'col-lg-8 col-md-6 col-2';
  }
?>
<div id="header" class="menubar">
	<div class="header-menu <?php if( get_theme_mod( 'vw_security_guard_sticky_header', false) == 1 || get_theme_mod( 'vw_security_guard_stickyheader_hide_show', false) == 1) { ?> header-sticky"<?php } else { ?>close-sticky <?php } ?>">
		<div class="container">
			<div class="row">
				<div class="<?php echo esc_html( $colmd ); ?> bg-menu align-self-center">
						<div class="toggle-nav mobile-menu">
						    <button onclick="vw_security_guard_menu_open_nav()" class="responsivetoggle"><i class="<?php echo esc_attr(get_theme_mod('vw_security_guard_res_menus_open_icon','fas fa-bars')); ?>"></i><span class="screen-reader-text"><?php esc_html_e('Open Button','vw-security-guard'); ?></span></button>
						</div>
					<div id="mySidenav" class="nav sidenav">
          	<nav id="site-navigation" class="main-navigation" role="navigation" aria-label="<?php esc_attr_e( 'Top Menu', 'vw-security-guard' ); ?>">
	            <?php 
								wp_nav_menu( array( 
									'theme_location' => 'primary',
									'container_class' => 'main-menu clearfix' ,
									'menu_class' => 'clearfix',
									'items_wrap' => '<ul id="%1$s" class="%2$s mobile_nav">%3$s</ul>',
									'fallback_cb' => 'wp_page_menu',
								) ); 
							?>
	            <a href="javascript:void(0)" class="closebtn mobile-menu" onclick="vw_security_guard_menu_close_nav()"><i class="<?php echo esc_attr(get_theme_mod('vw_security_guard_res_close_menus_icon','fas fa-times')); ?>"></i><span class="screen-reader-text"><?php esc_html_e('Close Button','vw-security-guard'); ?></span></a>
          	</nav>
	        </div>
				</div>
				<?php if ( 'Disable' != $vw_security_guard_search_hide_show ) {?>
					<div class="col-lg-4 col-md-6 col-10 align-self-center">
						<div class="search-box">
	            <?php get_search_form(); ?>
          	</div>
					</div>
				<?php } ?>
			</div>
		</div>
	</div>
</div>