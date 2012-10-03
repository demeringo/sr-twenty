<?php
/**
 * The Sidebar containing the primary and secondary widget areas.
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */
?>

        <div id="primary" class="widget-area" role="complementary">
            <ul class="xoxo">
<?php
    /* When we call the dynamic_sidebar() function, it'll spit out
     * the widgets for that widget area. If it instead returns false,
      * then the sidebar simply doesn't exist, so we'll hard-code in
     * some default sidebar stuff just in case.
      */
      if ( ! dynamic_sidebar( 'primary-widget-area' ) ) : ?> <div id="primary" class="widget-area" role="complementary">
			<div id="event-sidebar">
				<h1>Programmation</h1>
				<?php $my_query = new WP_Query('category_name=evenements&posts_per_page=3'); ?>
					<?php while ($my_query->have_posts()) : $my_query->the_post(); ?>
					<div class="evenement">
						<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
						<?php echo get_the_post_thumbnail($page->ID, 'thumbnail'); ?>
						<?php the_excerpt(); ?>
					</div>
				<?php endwhile; ?>
				<p><a href="/site/category/evenements/">Toute la programmation →</a></p>
			</div>
		</div>
<?php endif; // end primary widget area ?>
            </ul>
        </div><!-- #primary .widget-area -->
