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
		&copy; <?php echo date( 'Y' ); echo '&nbsp;'; echo bloginfo( 'name' ); ?><br>
		<!-- Site by <a href="http://pnwnelson.com" target="_blank" rel="nofollow">Kelly Nelson</a> &amp;
		<a href="http://pnwnelson.com" target="_blank" rel="nofollow">PNW Nelson</a> -->
	</div>
</footer><!-- #colophon -->

<div id="sticky-social-footer">
	<div class="container-fluid">
		<div class="row">
			<div class="col-xs-12">
				<ul class="social-media">
			      <li class="icon-bar"><i class="fa fa-facebook-official" aria-hidden="true"></i></li>
			      <li class="icon-bar"><i class="fa fa-instagram" aria-hidden="true"></i></li>
			      <li class="icon-bar"><i class="fa fa-twitter" aria-hidden="true"></i></li>
			    </ul>
		    </div>
	    </div>
    </div>
</div>

<?php wp_footer(); ?>
</body>
</html>