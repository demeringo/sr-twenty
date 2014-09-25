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
					<div class="evenement">
						<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
						<?php echo get_the_post_thumbnail($page->ID, 'thumbnail'); ?>
						<?php the_excerpt(); ?>
					</div>
				<?php endwhile; ?>
				<p><a href="/site/category/evenements/">Toute la programmation →</a></p>
				<h1>Newsletter</h1>
				<!-- start newsletter-->
				<!--START Scripts : this is the script part you can add to the header of your theme-->
<script type="text/javascript" src="http://samba-resille.org/site/wp-includes/js/jquery/jquery.js?ver=2.6.11"></script>
<script type="text/javascript" src="http://samba-resille.org/site/wp-content/plugins/wysija-newsletters/js/validate/languages/jquery.validationEngine-fr.js?ver=2.6.11"></script>
<script type="text/javascript" src="http://samba-resille.org/site/wp-content/plugins/wysija-newsletters/js/validate/jquery.validationEngine.js?ver=2.6.11"></script>
<script type="text/javascript" src="http://samba-resille.org/site/wp-content/plugins/wysija-newsletters/js/front-subscribers.js?ver=2.6.11"></script>
<script type="text/javascript">
                /* <![CDATA[ */
                var wysijaAJAX = {"action":"wysija_ajax","controller":"subscribers","ajaxurl":"http://samba-resille.org/site/wp-admin/admin-ajax.php","loadingTrans":"Chargement..."};
                /* ]]> */
                </script><script type="text/javascript" src="http://samba-resille.org/site/wp-content/plugins/wysija-newsletters/js/front-subscribers.js?ver=2.6.11"></script>
<!--END Scripts-->

<div class="widget_wysija_cont html_wysija"><div id="msg-form-wysija-html5424669ee7913-1" class="wysija-msg ajax"></div><form id="form-wysija-html5424669ee7913-1" method="post" action="#wysija" class="widget_wysija html_wysija">
<p class="wysija-paragraph">
    <label>E-mail <span class="wysija-required">*</span></label>
    
    	<input type="text" name="wysija[user][email]" class="wysija-input validate[required,custom[email]]" title="E-mail"  value="" />
    
    
    
    <span class="abs-req">
        <input type="text" name="wysija[user][abs][email]" class="wysija-input validated[abs][email]" value="" />
    </span>
    
</p>
<input class="wysija-submit wysija-submit-field" type="submit" value="Je m'abonne !" />

    <input type="hidden" name="form_id" value="1" />
    <input type="hidden" name="action" value="save" />
    <input type="hidden" name="controller" value="subscribers" />
    <input type="hidden" value="1" name="wysija-page" />

    
        <input type="hidden" name="wysija[user_list][list_ids]" value="1" />
    
 </form></div>

<!-- end newsletter-->
			</div>
		</div><!-- #primary .widget-area -->