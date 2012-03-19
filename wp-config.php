<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

/*
 * Environment specific configuration:
 *
 */
if ( file_exists( dirname( __FILE__ ) . '/../env_local' ) )
{
	// Local Environment
	define('WP_ENV', 'local');
	define('WP_DEBUG', true);
	define('DB_NAME', '');
	define('DB_USER', '');
	define('DB_PASSWORD', '');
	define('DB_HOST', '');
	define('DB_CHARSET', 'utf8');
	define('DB_COLLATE', '');
	define('DISQUS_DEVELOPER', 1); // Disqus (commenting) developer settings - set to 1 for dev and test environments
	define('GOOGLE_ID', 'UA-XXXXXXXX-X'); // Google Analytics ID
	define('FB_APP_ID', ''); // Facebook App ID
	define('MC_API', ''); // MailChimp API Key
	define('MC_LIST_ID', ''); // MailChimp List ID
	define('EMAIL_CONTACT', ''); 
	define('TYPEKIT_ID', ''); // Typekit ID for JavaScript 
}
elseif ( file_exists( dirname( __FILE__ ) . '/../env_design' ) ) 
{
	// Local for designer
	define('WP_ENV', 'design');
	define('WP_DEBUG', false);
	define('DB_NAME', '');
	define('DB_USER', '');
	define('DB_PASSWORD', '');
	define('DB_HOST', '');
	define('DB_CHARSET', 'utf8');
	define('DB_COLLATE', '');
	define('DISQUS_DEVELOPER', 1);
	define('GOOGLE_ID', 'UA-XXXXXXXX-X'); // Google Analytics ID
	define('FB_APP_ID', ''); // Facebook App ID
	define('MC_API', ''); // MailChimp API Key
	define('MC_LIST_ID', ''); // MailChimp List ID
	define('EMAIL_CONTACT', ''); 
	define('TYPEKIT_ID', ''); // Typekit ID for JavaScript 
} 
elseif ( file_exists( dirname( __FILE__ ) . '/../env_test' ) ) 
{

	// Test Environment
	define('WP_ENV', 'test');
	define('WP_DEBUG', false);
	define('DB_NAME', '');
	define('DB_USER', '');
	define('DB_PASSWORD', '');
	define('DB_HOST', '');
	define('DB_CHARSET', 'utf8');
	define('DB_COLLATE', '');
	define('DISQUS_DEVELOPER', 1);
	define('GOOGLE_ID', 'UA-XXXXXXXX-X'); // Google Analytics ID
	define('FB_APP_ID', ''); // Facebook App ID
	define('MC_API', ''); // MailChimp API Key
	define('MC_LIST_ID', ''); // MailChimp List ID
	define('EMAIL_CONTACT', ''); 
	define('TYPEKIT_ID', ''); // Typekit ID for JavaScript 
} 
else 
{
	define('WP_ENV', 'production');
	define('WP_DEBUG', false);
	define('DB_NAME', '');
	define('DB_USER', '');
	define('DB_PASSWORD', '');
	define('DB_HOST', '');
	define('DB_CHARSET', 'utf8');
	define('DB_COLLATE', '');
	define('DISQUS_DEVELOPER', 0);
	define('GOOGLE_ID', 'UA-XXXXXXXX-X'); // Google Analytics ID
	define('FB_APP_ID', ''); // Facebook App ID
	define('MC_API', ''); // MailChimp API Key
	define('MC_LIST_ID', ''); // MailChimp List ID
	define('EMAIL_CONTACT', ''); 
	define('TYPEKIT_ID', ''); // Typekit ID for JavaScript 
}



/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '');
define('SECURE_AUTH_KEY',  '');
define('LOGGED_IN_KEY',    '');
define('NONCE_KEY',        '');
define('AUTH_SALT',        '');
define('SECURE_AUTH_SALT', '');
define('LOGGED_IN_SALT',   '');
define('NONCE_SALT',       '');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
