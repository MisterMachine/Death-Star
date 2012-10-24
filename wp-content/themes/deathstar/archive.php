<?php
/**
 * @package WordPress
 * @subpackage 
 */

get_header();
?>

<div class="content">

	<div class="container_12">
		<div class="sidebar aside grid_3">
			<?php get_sidebar(); ?>
		</div>

		<div class="main grid_9">
		<?php if (have_posts()) : ?>

			<?php /* If this is a category archive */ if (is_category()) : ?>
				<h1><?php single_cat_title(); ?></h1>
				<?php echo category_description(); ?>
			<?php /* If this is a tag archive */ elseif( is_tag() ) : ?>
				<h1><?php _e('Posts Tagged'); ?> &#8216;<?php single_tag_title(); ?>&#8217;</h1>
			<?php /* If this is a daily archive */ elseif (is_day()) : ?>
				<h1><?php _e('Archive for'); ?> <?php the_time('F jS, Y'); ?></h1>
			<?php /* If this is a monthly archive */ elseif (is_month()) : ?>
				<h1><?php _e('Archive for'); ?> <?php the_time('F, Y'); ?></h1>
			<?php /* If this is a yearly archive */ elseif (is_year()) : ?>
				<h1><?php _e('Archive for'); ?> <?php the_time('Y'); ?></h1>
			<?php /* If this is an author archive */ elseif (is_author()) : ?>
				<h1><?php _e('Author Archive'); ?></h1>
			<?php /* If this is a paged archive */ elseif (isset($_GET['paged']) && !empty($_GET['paged'])) : ?>
				<h1><?php _e('Archives'); ?></h1>
			<?php endif; ?>

			<?php while (have_posts()) : the_post(); ?>
				<div <?php post_class() ?>>
					<h3 id="post-<?php the_ID(); ?>"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>
					<small><?php the_time('l, F jS, Y') ?></small>
					<div class="entry">
						<?php the_content() ?>
					</div>
					<p class="postmetadata"><?php the_tags('Tags: ', ', ', '<br />'); ?> Posted in <?php the_category(', ') ?> | <?php edit_post_link('Edit', '', ' | '); ?>  <?php comments_popup_link('No Comments &#187;', '1 Comment &#187;', '% Comments &#187;'); ?></p>
				</div>
			<?php endwhile; ?>
			<?php get_template_part('parts/pagination'); ?>

		<?php else : // No Posts ?>

			<?php if ( is_category() ) : // If this is a category archive ?>
				<h2><?php _e('Sorry, but there aren\'t any posts in this category yet.'); ?></h2>
			<?php elseif ( is_date() ) : // If this is a date archive ?>
				<h2><?php _e('Sorry, but there aren\'t any posts with this date.'); ?></h2>
			<?php elseif ( is_author() ) : // If this is a category archive ?>
				<h2><?php _e('Sorry, but there aren\'t any posts by this author yet.'); ?></h2>
			<?php else : ?>
				<h2><?php _e('No posts found.'); ?></h2>
			<?php endif; ?>

		<?php endif; ?>
		</div>
	</div>
</div>
<?php get_footer(); ?>