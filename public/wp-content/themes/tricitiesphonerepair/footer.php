<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package tricitiesphonerepair
 */
?>

	</div><!-- #main -->

</div><!-- #page -->
<footer id="footer" role="contentinfo" class="row">
	<div id="copyright" class="container">
		&copy; <?php echo date( 'Y' ); echo '&nbsp;'; echo bloginfo( 'name' ); ?><br>
		Site by <a href="http://pnwnelson.com" target="_blank" rel="nofollow">Kelly Nelson</a> &amp;
		<a href="http://pnwnelson.com" target="_blank" rel="nofollow">PNW Nelson</a>
	</div>
</footer><!-- #colophon -->

<?php wp_footer(); ?>
</body>
</html>