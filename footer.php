<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package XpertHealth
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="row site-footer">
		<div class="col-xs-12 col-md-8 offset-md-2">
			<hr>
			<div class="row">
				<div class="col-xs-12 col-md-3">
					<img class="img-responsive" src="<?php echo get_stylesheet_directory_uri();?>/assets/logo_footer.png">
				</div>
				<div class="col-xs-12 col-md-3 offset-md-6">
					<img class="img-responsive" src="<?php echo get_stylesheet_directory_uri();?>/assets/social icons.png">
				</div>
			</div>
			<p class="copyright">
				<?php _e('© 2017 XpertHealth. All rights reserved 2016 © XpertHealth', 'xperthealth'); ?>
			</p>
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
