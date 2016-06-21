<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package tricitiesphonerepair
 */
?>

<footer id="mainfooter" class="container-fluid">
	<div id="copyright" class="row">
		<div class="col-xs-6">
			<p class="copyright-text">&copy; <?php echo date( 'Y' ); echo '&nbsp;'; echo bloginfo( 'name' ); ?>
			<!-- Site by <a href="http://pnwnelson.com" target="_blank" rel="nofollow">Kelly Nelson</a> &amp;
			<a href="http://pnwnelson.com" target="_blank" rel="nofollow">PNW Nelson</a> --> </p>
		</div>
		<div class="col-xs-6">
			<p class="address-text">710 George Washington Way Ste A-A Richland, WA 99353</p>	
		</div>
	</div>
</footer><!-- #colophon -->

<div id="sticky-social-footer">
	<div class="container-fluid">
		<div class="row">
			<div class="col-xs-12">
				<ul class="social-media social-media-invisible">
			      <li class="icon-bar"><a href="https://www.facebook.com/jmktechhomeservices" target="bobdole"><i class="fa fa-facebook-official" aria-hidden="true"></i></a></li>
			      <li class="icon-bar"><a href="https://www.instagram.com/jmktech" target="bobdole"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
			      <li class="icon-bar"><a href="https://twitter.com/JMKTechHome" target="bobdole"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
			    </ul>
		    </div>
	    </div>
    </div>
</div>

<?php wp_footer(); ?>

</body>
</html>