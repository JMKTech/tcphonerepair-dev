<?php
/**
 * The header template
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package tricitiesphonerepair
 */
?>

<!DOCTYPE html>
 
<!--[if lt IE 9]>
<html id="ie" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 6) | !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- title -->
    <title><?php wp_title( '|', true, 'right' ); ?></title>
    <!-- favicon & links -->
    <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico" type="image/x-icon">
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
    <!-- javascript -->

    <!-- stylesheets are enqueued via functions.php -->

    <!-- all other scripts are enqueued via functions.php -->
    <!--[if lt IE 9]>
        <script src="<?php echo get_template_directory_uri(); ?>/assets/vendor/html5shiv.js" type="text/javascript"></script>
    <![endif]-->

    <?php // Lets other plugins and files tie into our theme's <head>:
    wp_head(); ?>
</head>
 
<body <?php body_class(); ?>>

<div id="header">
  <!-- top fixed header -->
  <div  id="top-header" class="container-fluid">
    <div class="row">
      <div class="col-xs-6 small-white-logo">
        <a href="../index.php"><img src="../wp-content/themes/tricitiesphonerepair/assets/images/tcppr-logo-white.png"></a>
        <ul class="social-media">
          <li class="icon-bar"><a href="https://www.facebook.com/Tricitiesphonerepair/" target="bobdole"><i class="fa fa-facebook-official" aria-hidden="true"></i></a></li>
          <li class="icon-bar"><a href="http://www.yelp.com/biz/tri-cities-phone-repair-richland?utm_campaign=www_business_share_popup&utm_medium=copy_link&utm_source=(direct)" target="bobdole"><i class="fa fa-yelp" aria-hidden="true"></i></a></li>
          <li class="icon-bar"><a href="https://plus.google.com/+Tricitiesphonerepair" target="bobdole"><i class="fa fa-google-plus-square" aria-hidden="true"></i></a></li>
        </ul>
      </div>  

      <div class="col-xs-6">
        <ul class="contact-info">
         <li class="icon-bar phone"><button class="btn btn-default btn-header" href="tel:509-392-1881"><i class="fa fa-phone-square" aria-hidden="true"></i>509-392-1881</a></li>
          <li class="icon-bar email"><i class="fa fa-envelope-o" aria-hidden="true"></i>info@tcphonerepair.com</li>
        </ul>
      </div>
    </div>
  </div>
</div>

  


	