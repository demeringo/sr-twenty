<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content
 * after.  Calls sidebar-footer.php for bottom widgets.
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */
?>
	</div><!-- #main -->

	<div id="footer" role="contentinfo">

		<div id="colophon">
			<p>
			<a href="<?php bloginfo('rss2_url'); ?>">Flux RSS des articles</a>
			</p>
			<p>
			<?php wp_loginout( get_permalink(), true ); ?>  
			</p>
			
			<p>
			<strong>Samba Résille est une association de loi 1901.</strong>
			<br/>
			Agréée Jeunesse et Education Populaire n° 31-580 / Agréée Entreprise Solidaire n°31-012<br/>
			Siret n° : 403 391 857 00030 / Code APE: 9001Z<br/>
			Entrepreneur du Spectacle: Licence 1-1012395 / Licence 2-1012396 / Licence 3-1012397
			<p>
			<strong>Le site:</strong><br/>
			Contact: <a href="mailto:webmaster@samba-resille.org">webmaster@samba-resille.org</a><br/>
			Consultation en direction artistique et en ergonomie : <a href="mailto:charles.briens@wanadoo.fr">Charles Briens</a><br/>
			Réalisation: <a href="mailto:olivier@le-moulin-de-verre.com">Olivier de Méringo</a> et Samba Résille.
			</p>
			<p>
			Toute reproduction interdite sans autorisation préalable.
			</p>
			

			<!-- #site-generator -->

		</div><!-- #colophon -->
	</div><!-- #footer -->

</div><!-- #wrapper -->

<?php
	/* Always have wp_footer() just before the closing </body>
	 * tag of your theme, or you will break many plugins, which
	 * generally use this hook to reference JavaScript files.
	 */

	wp_footer();
?>
</body>
</html>
