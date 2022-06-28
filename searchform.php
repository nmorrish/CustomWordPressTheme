<?php
/**
 * Template for displaying search forms in Custom Theme
 *
 * @package WordPress
 * @subpackage Cusotm Theme
 * @since 1.0
 * @version 1.0
 */

?>


<form role="search" method="get" class="custom-search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<input type="search"  class="search-field" placeholder="<?php echo esc_attr_x( 'Search &hellip;', 'placeholder', 'unica-wp' ); ?>" value="<?php echo get_search_query(); ?>" name="s" />
	<button type="submit" class="search-submit"><i class="ti-search"></i></button>
</form>
