<?php
/*
Widget Name: DS Twitter Widget
Widget URI: 
Description: This widget allows you to add a twitter feed to the sidebar of your site
Version: 1.0
Author: Mister Machine
Author URI: http://mistermachine.com
*/
class Widget_DS_Twitter extends WP_Widget {

	// widget actual processes
	function Widget_DS_Twitter() {
		$widget_ops = array( 'description' => __('Add a twitter feed to your sidebar') );
		parent::WP_Widget(false, $name = 'DS Twitter Feed', $widget_ops);
	}

	// outputs the content of the widget
	function widget($args, $instance) {

		extract( $args );
		$title = apply_filters('widget_title', $instance['title']);
		$handle = apply_filters('widget_title', $instance['handle']);
		$list_name = apply_filters('widget_title', $instance['list_name']);
		$type = apply_filters('widget_title', $instance['type']);
		$search_phrase = apply_filters('widget_title', $instance['search_phrase']);
		$width = apply_filters('widget_title', $instance['width']);

		if(!$search_phrase)
		{
			$search_phrase = '#deathstar';
		}

		if(empty($width))
		{
			$width = 215;
		}
		else
		{
			$width = (int)$width;
		}

		?>

		<li class="widget twitter_feed">
			<h3 class="h_widget"><?php echo esc_html($title); ?></h3>

			<script src="http://widgets.twimg.com/j/2/widget.js" type="text/javascript"></script>
			<script type="text/javascript">
			new TWTR.Widget({
				version: 2,
				type: '<?php echo esc_js($type); ?>',
				search: '<?php echo esc_js($search_phrase); ?>',
				rpp: 20,
				title: '',
				subject: '',
				interval: 6000,
				width: <?php echo esc_js($width); ?>,
				height: 250,
				theme: {
					shell: {
					background: '#ffffff',
					color: '#000000'
				},
				tweets: {
					background: '#ffffff',
					color: '#000000',
					links: '#1b55a8'
					}
				},
				features: {
					scrollbar: false,
					loop: true,
					live: true,
					hashtags: true,
					timestamp: true,
					avatars: false,
					behavior: 'default'
				}
				<?php if ( $type==='list' ) : ?>
				}).render().setList('<?php echo esc_js($handle); ?>', '<?php echo esc_js($list_name); ?>').start();
				<?php elseif ( $type==='profile' ) : ?>
				}).render().setUser('<?php echo esc_js($handle); ?>').start();
				<?php else : ?>
				}).render().start();
				<?php endif; ?>
			</script>
		</li>
		<?php
	}

	// outputs the options form on admin
	function form($instance) {

		isset($instance['title']) ? $title = esc_attr($instance['title']) : $title = null;
		isset($instance['handle']) ? $handle = esc_attr($instance['handle']) : $handle = null;
		isset($instance['list_name']) ? $list_name = esc_attr($instance['list_name']) : $list_name = null;
		isset($instance['type']) ? $type = esc_attr($instance['type']) : $type = null;
		isset($instance['search_phrase']) ? $search_phrase = esc_attr($instance['search_phrase']) : $search_phrase = null;
		isset($instance['width']) ? $width = esc_attr($instance['width']) : $width = null;

		?>
			<p>
				<label for="<?php echo $this->get_field_id('title'); ?>"><?php _e('Title:'); ?><br />
					<input class="" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo $title ?>" />
				</label>
			</p>
			<p>
				<label for="<?php echo $this->get_field_id('width'); ?>"><?php _e('Widget Width:'); ?>
					<input class="" id="<?php echo $this->get_field_id('width'); ?>" name="<?php echo $this->get_field_name('width'); ?>" type="text" value="<?php echo $width; ?>" />
				</label>
			</p>
			<p>
				<label for="<?php echo $this->get_field_id('handle'); ?>"><?php _e('Username:'); ?>
					<input class="" id="<?php echo $this->get_field_id('handle'); ?>" name="<?php echo $this->get_field_name('handle'); ?>" type="text" value="<?php echo $handle ?>" />
				</label>
			</p>
			<p>
				<label for="<?php echo $this->get_field_id('type'); ?>"><?php _e('Feed type:'); ?>
					<select class="" id="<?php echo $this->get_field_id('type'); ?>" name="<?php echo $this->get_field_name('type'); ?>" value="<?php echo $type ?>">
						<option value="profile" <?php if ( $type==='profile' ) : echo 'selected'; endif; ?>>profile</option>
						<option value="list" <?php if ( $type==='list' ) : echo 'selected'; endif; ?>>list</option>
						<option value="search" <?php if ( $type==='search' ) : echo 'selected'; endif; ?>>search</option>
					</select>
				</label>
			</p>
			<p>
				<label for="<?php echo $this->get_field_id('list_name'); ?>"><?php _e('List Name:'); ?>
					<input class="widefat" id="<?php echo $this->get_field_id('list_name'); ?>" name="<?php echo $this->get_field_name('list_name'); ?>" type="text" value="<?php echo $list_name; ?>" />
				</label>
			</p>
			<p>
				<label for="<?php echo $this->get_field_id('search_phrase'); ?>"><?php _e('Search Phrase:'); ?>
					<input class="widefat" id="<?php echo $this->get_field_id('search_phrase'); ?>" name="<?php echo $this->get_field_name('search_phrase'); ?>" type="text" value="<?php echo $search_phrase; ?>" />
				</label>
			</p>

		<?php 
	}

	// processes widget options to be saved
	function update($new_instance, $old_instance) {
		$instance = $old_instance;
		$instance['title'] = strip_tags($new_instance['title']);
		$instance['handle'] = strip_tags($new_instance['handle']);
		$instance['list_name'] = strip_tags($new_instance['list_name']);
		$instance['type'] = strip_tags($new_instance['type']);
		$instance['search_phrase'] = strip_tags($new_instance['search_phrase']);
		$instance['width'] = strip_tags($new_instance['width']);
		return $instance;
	}
	
}
add_action('widgets_init', create_function('', 'return register_widget("Widget_DS_Twitter");'));


/*
Widget Name: DS FB Like Box Widget
Widget URI: 
Description: This widget allows you to add a Facebook Like Box widget to the sidebar of your site.
Version: 1.0
Author: Mister Machine
Author URI: http://mistermachine.com
*/
class Widget_DS_FB_Likebox extends WP_Widget {

	// widget actual processes
	function Widget_DS_FB_Likebox() {
		$widget_ops = array( 'description' => __('A Facebook Likebox.') );
		parent::WP_Widget(false, $name = 'DS Facebook Likebox', $widget_ops);
	}

	// outputs the content of the widget
	function widget($args, $instance) {

		extract( $args );
		isset($instance['title']) ? $title = apply_filters('widget_title', $instance['title']) : $title = null;
		isset($instance['fb_page_url']) ? $fb_page_url = apply_filters('widget_title', $instance['fb_page_url']) : $fb_page_url = null;

		if(!empty($fb_page_url))
		{
		?>
		<li class="widget face_box">
			<h3 class="h_widget"><?php echo esc_html($title); ?></h3>
			<div class="fb-like-box" data-href="<?php echo esc_url($fb_page_url); ?>" data-width="198" data-show-faces="true" data-border-color="fff" data-stream="true" data-header="false"></div>
		</li>
		<?php
		}

	}

	// outputs the options form on admin
	function form($instance) {

		$title = esc_attr($instance['title']);
		$fb_page_url = esc_attr($instance['fb_page_url']);
		?>
		<p>
			<label for="<?php echo $this->get_field_id('title'); ?>"><?php _e('Title:'); ?><br />
				<input class="" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo $title ?>" />
			</label>
		</p>
		<p>
			<label for="<?php echo $this->get_field_id('fb_page_url'); ?>"><?php _e('Facebook Page URL:'); ?><br />
				<input class="" id="<?php echo $this->get_field_id('fb_page_url'); ?>" name="<?php echo $this->get_field_name('fb_page_url'); ?>" type="text" value="<?php echo $fb_page_url ?>" />
			</label>
		</p>
		<?php 
	}

	// processes widget options to be saved
	function update($new_instance, $old_instance) {
		$instance = $old_instance;
		$instance['title'] = strip_tags($new_instance['title']);
		$instance['fb_page_url'] = strip_tags($new_instance['fb_page_url']);
		return $instance;
	}
	
}

// register Widget_DS_FB_Likebox widget
add_action('widgets_init', create_function('', 'return register_widget("Widget_DS_FB_Likebox");'));


/*
Widget Name: DS Category Widget
Widget URI: 
Description: This widget allows you to add a Category widget to the sidebar of your site
Version: 1.0
Author: Mister Machine
Author URI: http://mistermachine.com
*/
class Widget_DS_Categories extends WP_Widget {

	// widget actual processes
	function Widget_DS_Categories() {
		$widget_ops = array( 'description' => __('A list of LiveWellNYU Categories') );
		parent::WP_Widget(false, $name = 'DS Categories', $widget_ops);
	}

	// outputs the content of the widget
	function widget($args, $instance) {

		extract( $args );
		isset($instance['title']) ? $title = apply_filters('widget_title', $instance['title']) : $title = null;

		$categories = get_categories( array('type' => 'all', 'exclude' => '1') );

		if(!empty($categories))
		{
		?>
		<li class="widget">
			<h3 class="h_widget"><?php echo esc_html($title); ?></h3>
			<ul class="links">
				<?php foreach($categories as $category) : ?>
				<li><a href="<?php echo get_category_link( $category->term_id ); ?>"><?php echo esc_html($category->name); ?></a></li>
				<?php endforeach; ?>
			</ul>
		</li>
		<?php
		}

	}

	// outputs the options form on admin
	function form($instance) {

		$title = esc_attr($instance['title']);
		?>
			<p>
				<label for="<?php echo $this->get_field_id('title'); ?>"><?php _e('Title:'); ?><br />
					<input class="" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo $title ?>" />
				</label>
			</p>
		<?php 
	}

	// processes widget options to be saved
	function update($new_instance, $old_instance) {
		$instance = $old_instance;
		$instance['title'] = strip_tags($new_instance['title']);
		return $instance;
	}
	
}

// register Widget_DS_Categories widget
add_action('widgets_init', create_function('', 'return register_widget("Widget_DS_Categories");'));

?>