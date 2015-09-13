<?php get_header(); ?>
	
		<section>			
<?php the_post(); ?>
				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<h1 class="entry-title"><?php the_title(); ?></h1>
					<div class="entry-content">
<?php the_content(); ?>
<?php wp_link_pages('before=<div class="page-link">' . __( 'Pages:', 'wp_boilerplate' ) . '&after=</div>') ?>					
<?php edit_post_link( __( 'Edit', 'wp_boilerplate' ), '<span class="edit-link">', '</span>' ) ?>
					</div><!-- .entry-content -->
				</article><!-- #post-<?php the_ID(); ?> -->			
			
<?php if ( get_post_custom_values('comments') ) comments_template() // Add a custom field with Name and Value of "comments" to enable comments on this page ?>			
			
		</section>
		
<?php get_sidebar(); ?>	
<?php get_footer(); ?>