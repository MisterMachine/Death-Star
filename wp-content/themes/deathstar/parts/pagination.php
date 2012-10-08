<?php if(function_exists('wp_pagenavi')) : ?>
<section class="grid_12 clearfix">
	<?php wp_pagenavi(); ?>
</section>
<?php else : ?>
	<?php previous_posts_link(); ?>&nbsp;<?php next_posts_link(); ?>
<?php endif; ?>