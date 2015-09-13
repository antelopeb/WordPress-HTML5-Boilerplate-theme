<?php get_header(); ?>
	
		<section>	
			
<?php the_post(); ?>			
			
				<h1 class="page-title"><?php _e( 'Tag Archives:', 'wp_boilerplate' ) ?> <span><?php single_tag_title() ?></span></h1>

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

					<div class="entry-meta">
						<span class="meta-prep meta-prep-author"><?php _e('By ', 'wp_boilerplate'); ?></span>
						<span class="author vcard"><a class="url fn n" href="<?php echo get_author_link( false, $authordata->ID, $authordata->user_nicename ); ?>" title="<?php printf( __( 'View all posts by %s', 'wp_boilerplate' ), $authordata->display_name ); ?>"><?php the_author(); ?></a></span>
						<span class="meta-sep"> | </span>
						<span class="meta-prep meta-prep-entry-date"><?php _e('Published ', 'wp_boilerplate'); ?></span>
						<span class="entry-date"><abbr class="published" title="<?php the_time('Y-m-d\TH:i:sO') ?>"><?php the_time( get_option( 'date_format' ) ); ?></abbr></span>
						<?php edit_post_link( __( 'Edit', 'wp_boilerplate' ), "<span class=\"meta-sep\">|</span>\n\t\t\t\t\t\t<span class=\"edit-link\">", "</span>\n\t\t\t\t\t" ) ?>
					</div><!-- .entry-meta -->
					
					<div class="entry-summary">	
<?php the_excerpt( __( 'Continue reading <span class="meta-nav">&raquo;</span>', 'wp_boilerplate' )  ); ?>
					</div><!-- .entry-summary -->

					<div class="entry-utility">
						<span class="cat-links"><span class="entry-utility-prep entry-utility-prep-cat-links"><?php _e( 'Posted in ', 'wp_boilerplate' ); ?></span><?php echo get_the_category_list(', '); ?></span>
						<span class="meta-sep"> | </span>
<?php if ( $tag_ur_it = tag_ur_it(', ') ) : // Returns tags other than the one queried ?>						
						<span class="tag-links"><?php printf( __( 'Also tagged %s', 'wp_boilerplate' ), $tag_ur_it ) ?></span>
<?php endif; ?>						
						<span class="comments-link"><?php comments_popup_link( __( 'Leave a comment', 'wp_boilerplate' ), __( '1 Comment', 'wp_boilerplate' ), __( '% Comments', 'wp_boilerplate' ) ) ?></span>
						<?php edit_post_link( __( 'Edit', 'wp_boilerplate' ), "<span class=\"meta-sep\">|</span>\n\t\t\t\t\t\t<span class=\"edit-link\">", "</span>\n\t\t\t\t\t\n" ) ?>
					</div><!-- #entry-utility -->	
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