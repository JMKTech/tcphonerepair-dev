<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 *
 * @package tricitiesphonerepair
 */

get_header(); ?>

<nav class="navbar navbar-default">
	<div class="container-fluid">
<div id="navbar-all">
	<?php wp_nav_menu( array( 'theme_location' => 'main-menu' ) ); ?>
</div>

<div class="container"
	<section id="primary" role="main" class="col pull-left span_8">

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'content', 'page' ); ?>

				<?php comments_template( '', true ); ?>

			<?php endwhile; // end of the loop. ?>

	</section><!-- #primary -->
</div>
</div>
</nav>

<?php get_footer(); ?>