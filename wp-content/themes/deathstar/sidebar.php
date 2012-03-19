<?php
/**
 * @package WordPress
 * @subpackage 
 */
 
global $page_id;
$page = get_page($page_id);

?>

	<ul>
		<?php /* if using widgets */
			if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('sidebar-right') ) : ?>
		<?php endif; ?>

		<?php wp_meta(); ?>
	</ul>