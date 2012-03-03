<div id="primary">
<div id="access">
	<div class="skip-link"><a href="#content" title="<?php _e( 'Skip to content', 'wp_boilerplate' ) ?>"><?php _e( 'Skip to content', 'wp_boilerplate' ) ?></a></div>
	<a href="<?php bloginfo( 'url' ) ?>/"><img src="wp-content/themes/wp_boilerplate/images/wp_boilerplateLogo.png" border="0" /></a>
	<?php wp_nav_menu( array( 'wp_boilerplate' => 'menu-header' ) ); ?>
	<!-- <?php wp_page_menu( 'sort_column=menu_order' ); ?>	-->		
</div><!-- #access -->

<?php if ( is_sidebar_active('primary-widget-area') ) : ?>
			<ul class="xoxo">
				<?php dynamic_sidebar('primary-widget-area'); ?>
			</ul>
		</div><!-- #primary .widget-area -->
<?php endif; ?>		
		
<?php if ( is_sidebar_active('secondary-widget-area') ) : ?>
		<div id="secondary" class="widget-area">
			<ul class="xoxo">
				<?php dynamic_sidebar('secondary-widget-area'); ?>
			</ul>
		</div><!-- #secondary .widget-area -->
<?php endif; ?>		
