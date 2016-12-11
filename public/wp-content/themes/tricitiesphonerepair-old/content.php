<?php
/**
 * The default template for displaying content
 *
 * @package tricitiesphonerepair
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<h1 class="entry-title"><?php the_title(); ?></h1>
		<span class="entry-date"><?php echo get_the_date(); ?></span>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php the_content(); ?>
		<?php wp_link_pages( array( 'before' => '<div class="page-link"><span>' . __( 'Pages:', 'tricitiesphonerepair' ) . '</span>', 'after' => '</div>' ) ); ?>
	</div><!-- .entry-content -->

	<footer class="entry-meta">
		
		<?php the_tags( '<div class="post-tags">' . __( 'Tagged: ', 'tricitiesphonerepair' ) , ', ', '</div>' ); ?>
		
		<div class="comments-link">
			<?php comments_popup_link( 
				 __( 'Leave a comment', 'tricitiesphonerepair' ), 
				 __( '1 comment', 'tricitiesphonerepair' ), 
				 __( '% comments', 'tricitiesphonerepair' ) ); 
			?>
		</div>
	</footer><!-- #entry-meta -->
</article><!-- #post-<?php the_ID(); ?> -->