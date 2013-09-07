<?php
/**
 * The template for displaying search forms in SelfImprovement
 *
 * @package SelfImprovement
 */
?>
<form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<label>
		<span class="screen-reader-text"><?php _ex( 'Suche nach:', 'label', 'selfimprovement' ); ?></span>
		<input type="search" class="search-field" placeholder="<?php echo esc_attr_x( 'Suche nach &hellip;', 'placeholder', 'selfimprovement' ); ?>" value="<?php echo esc_attr( get_search_query() ); ?>" name="s" title="<?php _ex( 'Suche nach...:', 'label', 'selfimprovement' ); ?>">
	</label>
	<input type="submit" class="search-submit" value="<?php echo esc_attr_x( 'Suche', 'submit button', 'selfimprovement' ); ?>">
</form>
