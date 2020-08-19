<?php get_header(); ?>
<div id="primary">
	<main id="main">
	<section id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<article>
		<div>
			<?php the_content();
				wp_link_pages( array( 
				'before'            => '<div style="clear: both;"></div><div class="pagination clearfix">'.__( 'Pages:', 'edge' ),
				'after'             => '</div>',
				'link_before'       => '<span>',
				'link_after'        => '</span>',
				'pagelink'          => '%',
				'echo'              => 1
				) ); ?>
		</div>
		</article>
	</section>
	</main> <!-- #main -->
<?php get_footer(); ?>