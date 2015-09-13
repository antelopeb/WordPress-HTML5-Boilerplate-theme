<?php get_header(); ?>
	
		<section>			
<?php the_post(); ?>

				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<h1 class="entry-title"><?php the_title(); ?></h1>
										
					<div class="entry-content">
<?php the_content(); ?>
<?php wp_link_pages('before=<div class="page-link">' . __( 'Pages:', 'wp_boilerplate' ) . '&after=</div>') ?>
					</div><!-- .entry-content -->
                    
                    <?php 
                        // If comments are open or we have at least one comment, load up the comment template.
                        if ( comments_open() || get_comments_number() ) :
                            comments_template();
                        endif;
                    ?>
				</article><!-- #post-<?php the_ID(); ?> -->			
							
		</section>
		
<?php get_sidebar(); ?>	
<?php get_footer(); ?>