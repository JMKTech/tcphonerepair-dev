<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package tricitiesphonerepair
 */
?>

<footer class="mainfooter">
	<div class="container">
		<div id="copyright" class="row">
			<div class="col-xs-6 col-sm-6">
				<p class="copyright-text">&copy; <?php echo date( 'Y' ); echo '&nbsp;'; echo bloginfo( 'name' ); ?>
				<!-- Site by <a href="http://pnwnelson.com" target="_blank" rel="nofollow">Kelly Nelson</a> &amp;
				<a href="http://pnwnelson.com" target="_blank" rel="nofollow">PNW Nelson</a> --> </p>
			</div>
			<div class="col-xs-6 col-sm-6">
				<address>
				<h4>OUR ADDRESS:</h4>
				710 George Washington Way, Ste A-A <br>
				Richland, WA 99353<br>
				Tel: 509-392-1881<br>
				Email: info@tcphonerepair.com<br>
				<a href="./email-sign-up/">Subscribe to our mailing list</a>
				</address>	

			</div>
		</div>
	</div>
</footer><!-- #colophon -->

<div id="sticky-social-footer">
	<div class="container-fluid">
		<div class="row">
			<div class="col-xs-12">
				<ul class="social-media social-media-invisible">
			      <li class="icon-bar"><a href="https://www.facebook.com/Tricitiesphonerepair/" target="bobdole"><i class="fa fa-facebook-official" aria-hidden="true"></i></a></li>
		          <li class="icon-bar"><a href="http://www.yelp.com/biz/tri-cities-phone-repair-richland?utm_campaign=www_business_share_popup&utm_medium=copy_link&utm_source=(direct)" target="bobdole"><i class="fa fa-yelp" aria-hidden="true"></i></a></li>
		          <li class="icon-bar"><a href="https://plus.google.com/+Tricitiesphonerepair" target="bobdole"><i class="fa fa-google-plus-square" aria-hidden="true"></i></a></li>
			    </ul>
		    </div>
	    </div>
    </div>
</div>

<?php wp_footer(); ?>

</body>
</html>