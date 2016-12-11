<?php get_header(); ?>

<div id="pages-logo">
	<a href="../index.php"><img src="../wp-content/themes/tricitiesphonerepair/assets/images/tcppr-new-v1-white.png"></a>
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


<div id="blog-entry" class="container">

	<div class="hentry">

		<?php if ( have_posts() ) : ?>
		  <?php while ( have_posts() ) : the_post(); ?> 
		  	<article class="entry-content">
			  	<h1 class="entry-title"><a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( 'Permalink to %s', 'tricitiesphonerepair' ), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark"><?php the_title(); ?></a>
				</h1>
				<?php the_content(); ?>
			</article>
			<div class="navigation"><p><?php posts_nav_link(); ?></p></div>
		  <?php endwhile; ?>
		<?php endif; ?>

	 </div>

 </div>
 `
<?php get_footer(); ?>