<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 *
 * @package tricitiesphonerepair
 */

get_header(); ?>

<div id="pages-logo">
	<a href="../index.php"><img src="../wp-content/themes/tricitiesphonerepair/assets/images/tcppr-logo-white.png"></a>
</div>

<div id="custom-bootstrap-menu" class="navbar navbar-default all-page-nav-fixed-top front-page-nav-fixed-top" role="navigation">
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


<div class="container-fluid main">
	<section id="primary" role="main" class="col pull-left">

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'content', 'page' ); ?>

				<?php comments_template( '', true ); ?>

			<?php endwhile; // end of the loop. ?>

	</section><!-- #primary -->
</div>

<?php get_footer(); ?>