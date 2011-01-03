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
			<div id="event-sidebar">
			
				<h1>Programmation</h1>
				<?php $my_query = new WP_Query('category_name=evenements&posts_per_page=3'); ?>
					<?php while ($my_query->have_posts()) : $my_query->the_post(); ?>
					<div class="news-summary">
						<h2><?php the_title(); ?></h2>
						<p><?php the_content(); ?></p>
					</div>
				<?php endwhile; ?>
			</div>
		</div><!-- #primary .widget-area -->