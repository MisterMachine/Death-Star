<?php
/**
 * @package WordPress
 * @subpackage
*/

if(WP_ENV==='local') {
	require_once('classes/FirePHP.class.php');
	ob_start();
}
require_once('classes/deathstar.php'); // Class for setting up environment: custom post types, featured images, etc
require_once('classes/widgets.php'); // Custom theme widgets
require_once('classes/wpalchemy/MetaBox.php'); // Class for creating and managing custom meta boxes
require_once('classes/MCAPI.class.php'); // MailChimp API
DeathStar::init();

/**
* ds_add_site_styles function.
* Add site styles to the head of the theme
* @access public
* @return void
*/	
function ds_add_site_styles()
{
	if ( ! is_admin() && ! ds_is_login_page()) {
		// Responsive:
		//wp_enqueue_style('1200', get_bloginfo('template_directory') . '/assets/css/1200.css', array(), '1.00', 'all and (min-width: 1200px)');
		//wp_enqueue_style('960', get_bloginfo('template_directory') . '/assets/css/960.css', array(), '1.00', 'all and (min-width: 620px) and (max-width: 1200px)');
		//wp_enqueue_style('mobile', get_bloginfo('template_directory') . '/assets/css/mobile.css', array(), '1.00', 'all and (min-width: 0px) and (max-width: 620px)');
		wp_enqueue_style('base', get_bloginfo('template_directory') . '/assets/css/base.css', array(), '1.00', 'all');
		wp_enqueue_style('grid', get_bloginfo('template_directory') . '/assets/css/grid.css', array(), '1.00', 'all');
	}
}


/**
 * ds_add_site_scripts function.
 * Add site scripts to the theme. Most will go in Footer for fastest loading.
 * @access public
 * @return void
 */
function ds_add_site_scripts() {
?>
<script type="text/javascript">
	var AJAX_URL = '<?php echo admin_url('admin-ajax.php'); ?>';
	var disqus_developer = <?php echo DISQUS_DEVELOPER; ?>;
</script>
<?php
	if ( ! is_admin() && ! ds_is_login_page()) {
		wp_enqueue_script( 'modernizr', get_bloginfo('template_directory') . '/assets/js/modernizr-2.5.3.min.js', array() ); // Load modernizer in header
		if(TYPEKIT_ID) {
			wp_enqueue_script( 'typekit', 'http://use.typekit.com/'.TYPEKIT_ID.'.js', array(), FALSE, TRUE ); // Load in footer
		}
		// Re-register jquery in order to load jquery from CDN
		wp_deregister_script( 'jquery' );
		wp_register_script( 'jquery', 'http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js');
		wp_enqueue_script( 'jquery', FALSE, array(), FALSE, TRUE ); // Load in footer from Google CDN

		if(WP_ENV==='local') {
			/* 
			 * Un-minified app.js + separate plugin file for easier development
			 * Plugins included:
			 *     - jQuery UI: Core, Widget, Position, Dialog, Tabs, Datepicker
			 *     - jQuery Form
			 *     - jQuery Validation
			 *     - Typekit Load
			 */
			wp_enqueue_script( 'plugins', get_bloginfo('template_directory') . '/assets/js/plugins.js', array('jquery'), '1.00', TRUE ); // Load in footer
			wp_enqueue_script( 'app', get_bloginfo('template_directory') . '/assets/js/app.js', array('jquery'), '1.00', TRUE ); // Load in footer
		} else {
			// minified app.js with plugins combined in one file.
			wp_enqueue_script( 'app-min', get_bloginfo('template_directory') . '/assets/js/app-min.js', array('jquery'), '1.00', TRUE ); // Load in footer
		}
	}
}


/* ajax functions */

function ds_submit_newsletter_signup() {

	$response = array();
	
	// verify nonce
	$nonce = $_POST['newsletter_signup_nonce'];
	if ( ! wp_verify_nonce( $nonce, 'newsletter_signup_nonce'  ) )
	{
		die();
	} 

	$email = $_POST['newsletter_email'];

	if($email)
	{
		if(!preg_match('/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*$/i', $email)) {
			$response = array( 'success' => false, 'message' => 'Email address is invalid');
		}
		else
		{

			// grab an API Key from http://admin.mailchimp.com/account/api/
			$api = new MCAPI(MC_API);

			// grab your List's Unique Id by going to http://admin.mailchimp.com/lists/
			// Click the "settings" link for the list - the Unique Id is at the bottom of that page. 
			$list_id = MC_LIST_ID;

			if($api->listSubscribe($list_id, $email, '') === true) 
			{
				// It worked!	
				$response = array( 'success' => true, 'message' => 'Thanks for Signing up! Check your email to confirm sign up.');
			}
			else
			{
				// An error ocurred, return error message	
				if(strpos($api->errorMessage, 'is already subscribed to list'))
				{
					$response = array( 'success' => false, 'message' => 'This email is already subscribed.' );
				}
				else
				{
					$response = array( 'success' => false, 'message' => 'Sorry, an error has occurred. ' );
				}
			}

		}
	}
	else
	{
		$response = array( 'success' => false, 'message' => 'No email provided');
	}

	// json encode response
	$response = json_encode( $response );
	
	// response output
	header( "Content-Type: application/json" );
	echo $response;

	exit;
	
}

/* end ajax functions */



/* helper functions */

/**
 * ds_show_admin_bar function.
 * Control where admin bar is displayed.
 * @access public
 * @return void
 */
function ds_show_admin_bar() {
	$show_admin_bar = false;
	$the_roles = array( 'administrator', 'editor', 'author' );
	foreach ( $the_roles as $the_role ) {
		if ( current_user_can( $the_role ) ) {
			$show_admin_bar = true;
		}
	}
	return $show_admin_bar;
}

/**
 * ds_excerpt_more function.
 * Over write the default WordPres [...] with anything you like.
 * @access public
 * @return void
 */
function ds_excerpt_more($more) {
	return '...';
}

/**
 * ds_is_login_page function.
 * Quick function to detect if we're on the login or register page.
 * @access public
 * @return void
 */
function ds_is_login_page() {
	return in_array($GLOBALS['pagenow'], array('wp-login.php', 'wp-register.php'));
}


/* helper functions */


// Add Theme style sheets
add_action('wp_print_styles', 'ds_add_site_styles');

// Add Theme Scripts
add_action('wp_print_scripts', 'ds_add_site_scripts');

// Hide admin bar
add_filter( 'show_admin_bar', 'ds_show_admin_bar' );

// Modify the default expert more symbol
add_filter('excerpt_more', 'ds_excerpt_more');
?>