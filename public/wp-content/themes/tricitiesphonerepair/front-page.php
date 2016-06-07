<?php
/**
 * Home Page
 *
 * @package tricitiesphonerepair
 */

get_header(); ?>

<div class="container-fluid">
  <div class="row">
    <div id="hero">
    
      <!-- slogan banner -->
      <div class="ribbon">
          <h3 class="slogan">VIP level support for individuals</h3>
      </div>

      <!-- navbar -->
      <nav id="navbar-front-page" class="clear-fix">
        <div id="nav-logo">
          <a href="http://tricitiesphonerepair.com"><img src="wp-content/themes/tricitiesphonerepair/assets/images/tcppr.png"></a>
        </div>
          <?php wp_nav_menu( array( 'theme_location' => 'main-menu' ) ); ?>
      </nav>
    </div>
  </div>
</div>


<?php get_footer(); ?>