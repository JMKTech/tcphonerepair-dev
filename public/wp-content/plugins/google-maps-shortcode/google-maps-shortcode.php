<?php
/**
 * Plugin Name: Google Maps Shortcode
 * Plugin URI: http://pnwnelson.com
 * Description: Ability to add Google Maps to pages
 * Version: 1.0.0
 * Author: Kelly Nelson
 * Author URI: http://pnwnelson.com
 * License: GPL2
 */


add_shortcode( 'map', 'mgms_map' );
function mgms_map( $args ) {
	$id = substr( sha1( "Google Map" . time() ), rand( 2, 10 ), rand( 5, 8 ) );
	ob_start();
	?>
	<div class='map' style='height:300px; margin-bottom: 1.6842em' id='map-<?php echo $id ?>'></div> 

	<script type='text/javascript'>
	var map;
	function initMap() {
	  map = new google.maps.Map(document.getElementById('map-<?php echo $id ?>'), {
	    center: {lat: 44.6000, lng: -110.5000},
	    zoom: 8
	  });
	}
	</script>

	<?php
	$output = ob_get_clean();
	return $output;
}

add_action( 'admin_enqueue_scripts', 'mgms_enqueue_assets' );
function mgms_enqueue_assets() {
	wp_enqueue_script( 
	  'google-maps', 
	  '//maps.googleapis.com/maps/api/js?key=AIzaSyA06g2ZH3Hte-ABi-8oLiFaqlnS89Y0ccQ	
8&callback=initMap', 
	  array(), 
	  '1.0', 
	  true 
	);
}
