<?php
/**
 * The template part for header
 *
 * @package VW Security Guard 
 * @subpackage vw_security_guard
 * @since VW Security Guard 1.0
 */
?>

<div id="top-header">
  <div class="container">
    <div class="row">
      <div class="col-lg-4 col-md-12 align-self-center">
        <div class="logo">
        <?php if ( has_custom_logo() ) : ?>
          <div class="site-logo"><?php the_custom_logo(); ?></div>
        <?php endif; ?>
        <?php $blog_info = get_bloginfo( 'name' ); ?>
          <?php if ( ! empty( $blog_info ) ) : ?>
            <?php if ( is_front_page() && is_home() ) : ?>
              <?php if( get_theme_mod('vw_security_guard_logo_title_hide_show',true) == 1){ ?>
                <p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
              <?php } ?>
            <?php else : ?>
              <?php if( get_theme_mod('vw_security_guard_logo_title_hide_show',true) == 1){ ?>
                <p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
              <?php } ?>
            <?php endif; ?>
          <?php endif; ?>
          <?php
            $description = get_bloginfo( 'description', 'display' );
            if ( $description || is_customize_preview() ) :
          ?>
          <?php if( get_theme_mod('vw_security_guard_tagline_hide_show',false) == 1){ ?>
            <p class="site-description">
              <?php echo esc_html($description); ?>
            </p>
          <?php } ?>
        <?php endif; ?>
      </div>
    </div>
      <div class="mid-header col-lg-8 col-md-12 align-self-center">
        <div class="row m-0">
          <div class="col-lg-4 col-md-4">
            <div class="row">
              <?php if ( get_theme_mod('vw_security_guard_email_text','') != "" ) {?>
                <div class="col-lg-2 col-md-2 col-2 p-0 icon">
                  <i class="<?php echo esc_attr(get_theme_mod('vw_security_guard_email_addres_icon','fas fa-envelope')); ?>"></i>
                </div>
                <div class="col-lg-10 col-md-10 col-10">
                  <?php if ( get_theme_mod('vw_security_guard_email_text','') != "" ) {?>
                    <p class="bold-font"><?php echo esc_html( get_theme_mod('vw_security_guard_email_text','') ); ?></p>
                  <?php }?>
                  <?php if ( get_theme_mod('vw_security_guard_email_address','') != "" ) {?>
                    <p><a href="mailto:<?php echo esc_attr(get_theme_mod('vw_security_guard_email_address',''));?>"><?php echo esc_html(get_theme_mod('vw_security_guard_email_address',''));?></a></p>
                  <?php }?>
                </div>
              <?php }?>
            </div>
          </div>
          <div class="col-lg-4 col-md-4">
            <div class="row">
              <?php if ( get_theme_mod('vw_security_guard_call_text','') != "" ) {?>
                <div class="col-lg-2 col-md-2 col-2 p-0 icon">
                  <i class="<?php echo esc_attr(get_theme_mod('vw_security_guard_contact_icon','fas fa-phone')); ?>"></i>
                </div>
                <div class="col-lg-10 col-md-10 col-10">
                  <?php if ( get_theme_mod('vw_security_guard_call_text','') != "" ) {?>
                    <p class="bold-font"><?php echo esc_html( get_theme_mod('vw_security_guard_call_text','') ); ?></p>
                  <?php }?>
                  <?php if ( get_theme_mod('vw_security_guard_call_number','') != "" ) {?>
                    <p><a href="tel:<?php echo esc_attr( get_theme_mod('vw_security_guard_call_number','') ); ?>"><?php echo esc_html(get_theme_mod('vw_security_guard_call_number',''));?></a></p>
                  <?php }?>
                </div>
              <?php }?>
            </div>
          </div>
          <div class="col-lg-4 col-md-4">
            <div class="row">
              <?php if ( get_theme_mod('vw_security_guard_time_text','') != "" ) {?>
                <div class="col-lg-2 col-md-2 col-2 p-0 icon">
                  <i class="<?php echo esc_attr(get_theme_mod('vw_security_guard_timing_icon','far fa-clock')); ?>"></i>
                </div>
                <div class="col-lg-10 col-md-10 col-10">
                  <?php if ( get_theme_mod('vw_security_guard_time_text','') != "" ) {?>
                    <p class="bold-font"><?php echo esc_html( get_theme_mod('vw_security_guard_time_text','') ); ?></p>
                  <?php }?>
                  <?php if ( get_theme_mod('vw_security_guard_timming','') != "" ) {?>
                    <p><?php echo esc_html( get_theme_mod('vw_security_guard_timming','') ); ?></p>
                  <?php }?>
                </div>
              <?php }?>
            </div>
          </div>
        </div>        
      </div>
    </div>
  </div>
</div>