<?php
/**
 * Single post template
 *
 * @package tricitiesphonerepair
 */

get_header(); ?>

<div id="pages-logo">
	<a href="http://tcphonerepair.com"><img src="http://tcphonerepair.com/wp-content/themes/tricitiesphonerepair/assets/images/tcppr-new-v1-white.png"></a>
</div>

<div id="custom-bootstrap-menu" class="hide-on-home navbar navbar-default all-page-nav-fixed-top front-page-nav-fixed-top" role="navigation">
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

<section id="blog-entry" class="container">


	<?php while ( have_posts() ) : the_post(); ?>

		<?php get_template_part( 'content', 'single' ); ?>

		<?php comments_template( '', true ); ?>

	<?php endwhile; // end of the loop. ?>

</section><!-- #primary -->
<?php get_footer(); ?>