<?php
/**
 * @package WordPress
 * @subpackage 
 */
?>
<ul>
	<?php /* if using widgets */
		if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('sidebar-right') ) : ?>
	<?php endif; ?>
</ul>