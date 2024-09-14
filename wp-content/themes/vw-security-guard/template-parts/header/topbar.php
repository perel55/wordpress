<?php
/**
 * The template part for topbar
 *
 * @package VW Security Guard 
 * @subpackage vw_security_guard
 * @since VW Security Guard 1.0
 */
?>

<?php if( get_theme_mod( 'vw_security_guard_topbar_hide_show', false) == 1 || get_theme_mod( 'vw_security_guard_resp_topbar_hide_show', false) == 1) { ?>
	<div id="topbar">
		<div class="container">	
			<div class="row m-0">
				<div class="col-lg-4 col-md-4 location">
					<?php if ( get_theme_mod('vw_security_guard_location','') != "" ) {?>
		                <p><i class="<?php echo esc_attr(get_theme_mod('vw_security_guard_location_icon','fas fa-location-arrow')); ?>"></i><?php echo esc_html( get_theme_mod('vw_security_guard_location','')); ?></p>
		            <?php }?>
				</div>
				<div class="col-lg-8 col-md-6 bg-top">
					<div class="row">
						<div class="col-lg-8 col-md-6">
							<?php dynamic_sidebar('social-widget'); ?>
						</div>
						<div class="col-lg-4 col-md-6">
							<?php if ( get_theme_mod('vw_security_guard_button_link','') != "" ) {?>
								<div class="service-btn">
				                	<a href="<?php echo esc_url( get_theme_mod('vw_security_guard_button_link',__('#','vw-security-guard') )); ?>"><?php echo esc_html( get_theme_mod('vw_security_guard_button_text','' )); ?><span class="screen-reader-text"><?php esc_html_e( 'GET AN APPOINTMENT','vw-security-guard' );?></span></a><i class="<?php echo esc_attr(get_theme_mod('vw_security_guard_header_service_btn_icon','fas fa-angle-right')); ?>"></i>
				                </div>
				          	<?php }?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
<?php }?>