<?php
/**
 * DeathStar - core of Mister Machine Base Theme
 *
 * @package WordPress
 * @subpackage deathstar
 */

/**
 * class DeathStar
 * 
 */
class DeathStar {
	
	/**
	 * init() Initialisation method which calls all other methods in turn.
	 *
	 */
	function init() {		
		$theme = new DeathStar;
		$theme->environment();
		do_action( 'framework_init' );
	}
	
	/**
	 * enviroment() defines DeathStar directory constants
	 *
	 */
	function environment() {	
		define( 'CSS', get_bloginfo('template_directory') . '/assets/css', true );
		define( 'IMAGES', get_bloginfo('template_directory') . '/assets/img', true );
		define( 'JS', get_bloginfo('template_directory') . '/assets/js', true );
		
		// URI shortcuts
		define( 'THEME', get_bloginfo( 'template_url' ), true );
		
		do_action( 'environment' ); // Available action: load_environment
		
		// Register our custom menus
		if ( function_exists('register_nav_menus') )
		{
			register_nav_menus( array(
				'main_menu' => __('Main Menu'),
				'local_menu' => __('Local Menu'),
				'footer_menu' => __('Footer Menu'),
				'social_widgets_menu' => __('Social Widgets Menu')
			));
		}

		// Register sidebar widgets
		if ( function_exists('register_sidebar') )
		{
			register_sidebar(array(
				'name' => 'Header Sidebar',
				'id' => 'smw-header-sidebar'
			));
			register_sidebar(array(
				'name' => 'Footer Social',
				'id' => 'smw-footer-social'
			));
			register_sidebar(array(
				'name' => 'Sidebar Left',
				'id' => 'smw-sidebar-left'
			));
			register_sidebar(array(
				'name' => 'Sidebar Right',
				'id' => 'smw-sidebar-right'
			));
		}

	}

}
?>