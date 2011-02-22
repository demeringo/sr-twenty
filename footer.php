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
			<div id="footer-content">
			<div id="footer1">
				<p>
				<strong>Samba Résille</strong><br/>
				38 rue Roquelaine, 31000 Toulouse (<a href="http://maps.google.fr/maps?f=q&source=embed&hl=fr&geocode=&q=38+rue+roquelaine+toulouse+samba+resille&sll=43.613149,1.446826&sspn=0.008187,0.01929&ie=UTF8&hq=samba+resille&hnear=38+Rue+Roquelaine,+31000+Toulouse,+Haute-Garonne,+Midi-Pyr%C3%A9n%C3%A9es&cid=3269167087290340956&ll=43.611595,1.446848&spn=0.012429,0.017252&z=14&iwloc=A">plan</a>)<br/>
				<br/>
				Assocation loi 1901<br/>
				Agréée Jeunesse et Education Populaire n° 31-580<br/>
				Agréée Entreprise Solidaire n°31-012<br/>
				Entrepreneur du Spectacle: Licence 1-1012395 / Licence 2-1012396 / Licence 3-1012397<br/>
				Siret n°: 403 391 857 00030 / Code APE: 9001Z<br/>
				
				</p>
			</div>
			<div id="footer2">
				<p>
				<strong>Contact:</strong><br/><br/>
				email: <a href="mailto:cicc@samba-resille.org">cicc@samba-resille.org</a><br/>
				Téléphone: +33(0) 534 416 216<br/>
				Télécopie : +33(0) 534 416 100
				</p>
				<p>
				<a href="<?php bloginfo('rss2_url'); ?>">Flux RSS des articles</a>
				</p>
				<p>
				<?php wp_loginout( get_permalink(), true ); ?>  
				</p>
			</div>
			<div id="footer3">
				<strong>Site web:</strong><br/>
				Consultation en direction artistique et en ergonomie : <a href="mailto:charles.briens@wanadoo.fr">Charles Briens</a><br/>
				Réalisation: <a href="mailto:olivier@le-moulin-de-verre.com">Olivier de Méringo</a> et Samba Résille.
				</p>
				<p>
				<br/>
				Contact: <a href="mailto:webmaster@samba-resille.org">webmaster@samba-resille.org</a><br/><br/>
				Toute reproduction interdite sans autorisation préalable.
				</p>
			</div>
			</div>
		
			
			
			
			
			

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
