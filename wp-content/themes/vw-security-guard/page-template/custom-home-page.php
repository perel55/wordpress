<?php
/**
 * Template Name: Custom Home
 */

get_header(); ?>

<main id="maincontent" role="main">
  <?php do_action( 'vw_security_guard_before_slider' ); ?>

  <?php if( get_theme_mod( 'vw_security_guard_slider_hide_show', false) == 1 || get_theme_mod( 'vw_security_guard_resp_slider_hide_show', true) == 1) { ?>
    <section id="slider">
      <?php if(get_theme_mod('vw_security_guard_slider_type', 'Default slider') == 'Default slider' ){ ?>
        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel" data-bs-interval="<?php echo esc_attr(get_theme_mod( 'vw_security_guard_slider_speed',4000)) ?>"> 
          <?php $vw_security_guard_slider_pages = array();
            for ( $count = 1; $count <= 3; $count++ ) {
              $mod = intval( get_theme_mod( 'vw_security_guard_slider_page' . $count ));
              if ( 'page-none-selected' != $mod ) {
                $vw_security_guard_slider_pages[] = $mod;
              }
            }
            if( !empty($vw_security_guard_slider_pages) ) :
              $args = array(
                'post_type' => 'page',
                'post__in' => $vw_security_guard_slider_pages,
                'orderby' => 'post__in'
              );
              $query = new WP_Query( $args );
              if ( $query->have_posts() ) :
                $i = 1;
          ?>     
          <div class="carousel-inner" role="listbox">
            <?php  while ( $query->have_posts() ) : $query->the_post(); ?>
              <div <?php if($i == 1){echo 'class="carousel-item active"';} else{ echo 'class="carousel-item"';}?>>
                <?php if(has_post_thumbnail()){
                  the_post_thumbnail();
                } else{?>
                  <img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/block-patterns/images/banner.png" alt="" />
                <?php } ?>
                <div class="carousel-caption">
                  <div class="inner_carousel">
                    <h1 class=" wow bounceInDown delay-1000" data-wow-duration="2s"><a href="<?php echo esc_url( get_permalink() ); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1>
                    <p class=" wow bounceInDown delay-1000" data-wow-duration="2s"><?php $vw_security_guard_excerpt = get_the_excerpt(); echo esc_html( vw_security_guard_string_limit_words( $vw_security_guard_excerpt, esc_attr(get_theme_mod('vw_security_guard_slider_excerpt_number','30')))); ?></p>
                    <?php if( get_theme_mod('vw_security_guard_slider_button_text','GET SERVICE QUOTE') != ''){ ?>
                       <div class=" more-btn wow bounceInDown delay-1000" data-wow-duration="2s">
                        <a href="<?php echo esc_url(get_theme_mod('vw_security_guard_top_button_url',false));?>"><?php echo esc_html(get_theme_mod('vw_security_guard_slider_button_text',__('GET SERVICE QUOTE','vw-security-guard')));?><span class="screen-reader-text"><?php echo esc_html(get_theme_mod('vw_security_guard_slider_button_text',__('GET SERVICE QUOTE','vw-security-guard')));?></span></a><i class="<?php echo esc_attr(get_theme_mod('vw_security_guard_slider_button_icon','fas fa-angle-right')); ?>"></i>
                      </div>
                    <?php } ?>
                  </div>
                </div>
              </div>
            <?php $i++; endwhile; 
            wp_reset_postdata();?>
          </div>
          <?php else : ?>
              <div class="no-postfound"></div>
          <?php endif;
          endif;?>
          <a class="carousel-control-prev" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev" role="button">
            <span class="carousel-control-prev-icon w-auto h-auto" aria-hidden="true"><i class="fas fa-chevron-left"></i></span>
            <span class="screen-reader-text"><?php esc_html_e( 'Previous','vw-security-guard' );?></span>
          </a>
          <a class="carousel-control-next" data-bs-target="#carouselExampleCaptions" data-bs-slide="next" role="button">
            <span class="carousel-control-next-icon w-auto h-auto" aria-hidden="true"><i class="fas fa-chevron-right"></i></span>
            <span class="screen-reader-text"><?php esc_html_e( 'Next','vw-security-guard' );?></span>
          </a>
        </div>  
        <div class="clearfix"></div>
          <?php } else if(get_theme_mod('vw_security_guard_slider_type', 'Advance slider') == 'Advance slider'){?>
            <?php echo do_shortcode(get_theme_mod('vw_security_guard_advance_slider_shortcode')); ?>
          <?php } ?>
    </section>
  <?php } ?>

  <?php do_action( 'vw_security_guard_after_slider' ); ?>

  <?php if( get_theme_mod( 'vw_security_guard_section_title') != '' || get_theme_mod( 'vw_security_guard_security_services') != '') { ?>
    <section id="security-service" class=" wow lightSpeedIn delay-1000" data-wow-duration="2s">
      <div class="container">
        <?php if( get_theme_mod('vw_security_guard_section_title') != ''){ ?>
          <h2><?php echo esc_html(get_theme_mod('vw_security_guard_section_title','')); ?></h2>
        <?php }?>
        <div class="row">
          <?php
            $vw_security_guard_catData1=  get_theme_mod('vw_security_guard_security_services');
            if($vw_security_guard_catData1){
          $page_query = new WP_Query(array( 'category_name' => esc_html($vw_security_guard_catData1 ,'vw-security-guard'))); ?>         
            <?php while( $page_query->have_posts() ) : $page_query->the_post(); ?>
              <div class="col-lg-4 col-md-6">
                <div class="catgory-box">
                  <div class="row">
                    <div class="col-lg-4 col-md-4">
                      <?php the_post_thumbnail(); ?>
                    </div>
                    <div class="col-lg-8 col-md-8">
                      <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?><span class="screen-reader-text"><?php the_title(); ?></span></a></h3>
                      <hr>
                      <p><?php $vw_security_guard_excerpt = get_the_excerpt(); echo esc_html( vw_security_guard_string_limit_words( $vw_security_guard_excerpt, esc_attr(get_theme_mod('vw_security_guard_services_excerpt_number','30')))); ?></p>
                    </div>
                  </div>
                </div>
              </div>
            <?php endwhile;
            wp_reset_postdata();}
          ?>
        </div>
      </div>
    </section>
  <?php } ?>

  <?php do_action( 'vw_security_guard_after_security_service' ); ?>

  <div class="content-vw">
    <div class="container">
      <?php while ( have_posts() ) : the_post(); ?>
        <?php the_content(); ?>
      <?php endwhile; // end of the loop. ?>
    </div>
  </div>
</main>

<?php get_footer(); ?>