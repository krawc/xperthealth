
<?php
/**
 * Template for displaying search forms in XpertHealth
 *
 * @package WordPress
 */
?>
	<form method="get" id="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">
		<input type="text" class="field" name="s" id="s" placeholder="<?php esc_attr_e( 'Search', 'twentyeleven' ); ?>" />
		<input type="submit" class="submit" name="submit" id="searchsubmit" value="<?php esc_attr_e( '', 'twentyeleven' ); ?>" />
	</form>
