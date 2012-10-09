<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query. 
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */

get_header(); ?>

		<div id="container">
			<div id="content" role="main">
			<?php $my_query = new WP_Query('posts_per_page=4'); ?>
				<?php while ($my_query->have_posts()) : $my_query->the_post(); $loopcounter++;?>
					<?php if ($loopcounter <= 1) { ?>
					<!-- Display first post in big -->
					<div id="focus-container">
						<h1><?php the_title(); ?></h1>
						<div class="focus" id="focus-1">
							<?php the_excerpt(); ?>
							<a href="<?php the_permalink(); ?>">
							Continuer la lecture →
							</a>
						</div>
					</div>
					<div id="news-container">
					<h1>Récent</h1>
					<?php }else{ ?>
						<!-- Display other smaller posts -->
						<div class="news-summary">
							<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
							<?php echo get_the_post_thumbnail($page->ID, 'thumbnail'); ?>
							<p><?php the_excerpt(); ?></p>
							<a href="<?php the_permalink(); ?>">
							Continuer la lecture →
							</a>
						</div>
					<?php } ?>
				<?php endwhile; ?>
				</div>
			</div><!-- #content -->
		</div><!-- #container -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
