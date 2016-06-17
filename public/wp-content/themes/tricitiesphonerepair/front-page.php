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
          <h4>...and computer repair too!</h4>
      </div>
      <!-- logo -->
      <div id="nav-logo">
          <a href="../index.php"><img src="wp-content/themes/tricitiesphonerepair/assets/images/tcppr.png"></a>
      </div>
      <!-- navbar -->
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
  </div> <!-- row -->
</div>
<!-- Content Row 1 -->
<div id="front-page-content" class="container">
  <div class="row">
    <div class="col-md-6 category">
      <div class="category-icon"><i class="fa fa-mobile" aria-hidden="true"></i></div>
      <div class="row category-title">
        <h2>Phone & Tablet Repair</h2>
      </div>
      <div class="row category-desc">
        <p>Cracked screen to water damage. We save you money by saving your smart phone or tablet. We stock new screens for select iPhones, iPads and Android devices for a quick turn around. Our professionals are standing by to rescue your device! Come in today!</p>
      </div>
    </div>
    <div class="col-md-6 category">
      <div class="category-icon"><i class="fa fa-laptop" aria-hidden="true"></i></div>
      <div class="row category-title">
        <h2>Computer Repair</h2>
      </div>
      <div class="row category-desc">
        <p>We provide expert hardware and software repair services for laptops and desktops. We also provide routine maintenance to help prevent unexpected downtime. Don't need a repair, just a little help with an upgrade or data transfer to a new computer? We do that too! Call us, or come in today!</p>
      </div>
    </div>
  </div>
</div>
<!-- Manufacturer Row -->
<div id="device-list-wrapper" class="container-fluid">
  <div class="row">
    <ul class="device-list">
      <li><img src="wp-content/themes/tricitiesphonerepair/assets/images/apple.png"></li>
      <li><img src="wp-content/themes/tricitiesphonerepair/assets/images/samsung.png"></li>
      <li><img src="wp-content/themes/tricitiesphonerepair/assets/images/android.png"></li>
      <li><img src="wp-content/themes/tricitiesphonerepair/assets/images/lg.png"></li>
    </ul>
  </div>
</div>


<?php get_footer(); ?>