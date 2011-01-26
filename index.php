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
				<div id="focus-container">
					<h1>Samba Résille c'est:</h1>
					<div class="focus" id="focus-1">
						<a href="/site/spectacle/">
						<h2>La companie</h2>
						<img class="focus" src="/site/wp-content/themes/sr-twenty/img/saragosse1.jpg" alt="photo de la companie">
						<p>
						Description de la companie, spectacles etc.
						</p>
						</a>
					</div>
					<div class="focus" id="focus-2">
						<a href="/site/le-lieu/">
						<h2>Le lieu</h2>
						<img class="focus" src="/site/wp-content/themes/sr-twenty/img/ciccDevanture.jpg" alt="photo de la companie">
						<p>
						Le CICC est un lieu où se croisent …
						</p>
						</a>
					</div>
					<div class="focus" id="focus-3">
						<a href="/site/les-actions/">
						<h2>Nos actions</h2>
						<img class="focus" src="/site/wp-content/themes/sr-twenty/img/PPN1_2.jpg" alt="photo de la companie">
						<p>
						Nos actions décrites ici.
						</p>
						</a>
					</div>
				</div>
				<div id="news-container">
					<h1>Actualités</h1>
					
					<?php $my_query = new WP_Query('category_name=news&posts_per_page=3'); ?>
					<?php while ($my_query->have_posts()) : $my_query->the_post(); ?>
					<div class="news-summary">
						
						<?php echo get_the_post_thumbnail($page->ID, 'thumbnail'); ?><h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
						<?php the_excerpt(); ?>
					</div>
					<?php endwhile; ?>
					<p><a href="/site/category/news/">Toute l'actu</a></p>
				</div>
			
			</div><!-- #content -->
		</div><!-- #container -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
