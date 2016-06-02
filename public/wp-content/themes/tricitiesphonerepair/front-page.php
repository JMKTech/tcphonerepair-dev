<?php
/**
 * Home Page
 *
 * @package tricitiesphonerepair
 */

get_header(); ?>

<!-- slogan banner -->
  <div class="ribbon">
    <div class="row">
      <h3 class="slogan">VIP level support for individuals</h3>
    </div>
  </div>

  <!-- navbar -->
  <nav id="navbar-front-page" class="clear-fix">
    <div id="nav-logo">
      <a href="http://tricitiesphonerepair.com"><img src="wp-content/themes/tricitiesphonerepair/assets/images/tcppr.png"></a>
    </div>
    <!--
    <ul>
      <li><a href="#">SERVICES</a></li>
      <li><a href="#">RATES</a></li>
      <li><a href="#">HOURS & LOCATION</a></li>
      <li><a href="#">CAREERS</a></li>
      <li><a href="#">COMMUNITY</a></li>
    </ul>
    -->
    <?php wp_nav_menu( array( 'theme_location' => 'main-menu' ) ); ?>
  </nav>

<?php get_footer(); ?>