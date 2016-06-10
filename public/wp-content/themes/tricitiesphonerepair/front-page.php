<?php
/**
 * Home Page
 *
 * @package tricitiesphonerepair
 */

get_header(); ?>

<div class="container-fluid">
  <div class="row">
    <!-- hero - _all.scss -->
    <div id="hero">
      <!-- slogan banner - _all.scss -->
      <div class="ribbon">
          <h3 class="slogan">Tri-Cities premier cell phone repair shop</h3>
      </div>
      <!-- navbar - _nav.scss
      <nav id="navbar-front-page">
        <div id="nav-logo">
          <a href="http://tricitiesphonerepair.com"><img src="wp-content/themes/tricitiesphonerepair/assets/images/tcppr.png"></a>
        </div>
          <?php wp_nav_menu( array( 'theme_location' => 'main-menu' ) ); ?>
      </nav> -->
<div id="nav-logo">
    <a href="http://tricitiesphonerepair.com"><img src="wp-content/themes/tricitiesphonerepair/assets/images/tcppr.png"></a>
</div>

<div id="custom-bootstrap-menu" class="navbar navbar-default front-page-nav" role="navigation">
  <div class="container-fluid">
      <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-menubuilder">
        <span class="sr-only">Toggle Navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      </div>
    <div class="collapse navbar-collapse navbar-menubuilder">
      <ul class="nav navbar-nav">
        <?php wp_nav_menu(array(
            //'menu' => 'main_menu'
            'theme_location' => 'main_menu',
            'container' => false,
            'container_class' => 'collapse navbar-collapse',
            'container_id' => 'main-navbar-collapse',
            'menu_class' => 'nav navbar-nav',
            //'menu_id' => '',
            //'echo' => true,
            'fallback_cb' => 'wp_page_menu',
            //'before' => '',
            //'after' => '',
            //'link_before' => '',
            //'link_after' => '',
            //'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
            'depth' => 2,
            'walker' => new wp_bootstrap_navwalker()
        )); ?>
      </ul>
    </div>
    </div>
 </div> 

    </div>
  </div>
</div>


<?php get_footer(); ?>