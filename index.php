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
					<div id="focus-1">
						La companie
					</div>
					<div id="focus-2">
						Le lieu
					</div>
					<div id="focus-3">
						Nos actions
					</div>
				</div>
				<div id="news-container">
					<h1>Actualités</h1>
					<div class="news-summary">
						<h2>Le premier titre</h2>
						Un extrait de news.
					</div>
					<div class="news-summary">
						<h2>Un autre titre</h2>
							Une autre news
					</div>
				</div>
			
			</div><!-- #content -->
		</div><!-- #container -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
