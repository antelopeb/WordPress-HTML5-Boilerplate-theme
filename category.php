
<?php get_header(); ?>
	
		<section>	
			
<?php the_post(); ?>			
			
				<h1 class="page-title"> <span><?php single_cat_title() ?></span></span></h1>
				<?php $categorydesc = category_description(); if ( !empty($categorydesc) ) echo apply_filters( 'archive_meta', '<div class="archive-meta">' . $categorydesc . '</div>' ); ?>

<?php rewind_posts(); ?>
			
<?php global $wp_query; $total_pages = $wp_query->max_num_pages; if ( $total_pages > 1 ) { ?>
				<div id="nav-above" class="navigation">
					<div class="nav-previous"><?php next_posts_link(__( '<span class="meta-nav">&laquo;</span> Older posts', 'wp_boilerplate' )) ?></div>
					<div class="nav-next"><?php previous_posts_link(__( 'Newer posts <span class="meta-nav">&raquo;</span>', 'wp_boilerplate' )) ?></div>
				</div><!-- #nav-above -->
<?php } ?>			

<?php while ( have_posts() ) : the_post(); ?>

				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<h2 class="entry-title"><a href="<?php the_permalink(); ?>" title="<?php printf( __('Permalink to %s', 'wp_boilerplate'), the_title_attribute('echo=0') ); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
					
					<div class="entry-summary">	
<?php the_excerpt( __( 'Continue reading <span class="meta-nav">&raquo;</span>', 'wp_boilerplate' )  ); ?>
					</div><!-- .entry-summary -->

					<div class="entry-utility">
<?php if ( $cats_meow = cats_meow(', ') ) : // Returns categories other than the one queried ?>
						<span class="cat-links"><?php printf( __( 'Also posted in %s', 'wp_boilerplate' ), $cats_meow ) ?></span>
						<span class="meta-sep"> | </span>
<?php endif ?>
					</div><!-- #entry-utility -->	
					<hr />
				</article><!-- #post-<?php the_ID(); ?> -->

<?php endwhile; ?>			

<?php global $wp_query; $total_pages = $wp_query->max_num_pages; if ( $total_pages > 1 ) { ?>
				<div id="nav-below" class="navigation">
					<div class="nav-previous"><?php next_posts_link(__( '<span class="meta-nav">&laquo;</span> Older posts', 'wp_boilerplate' )) ?></div>
					<div class="nav-next"><?php previous_posts_link(__( 'Newer posts <span class="meta-nav">&raquo;</span>', 'wp_boilerplate' )) ?></div>
				</div><!-- #nav-below -->
<?php } ?>			
			
		</section><!-- #container -->
		
<?php get_sidebar(); ?>	
<?php get_footer(); ?>