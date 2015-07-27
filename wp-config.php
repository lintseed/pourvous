<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'pourvous_2015');

/** MySQL database username */
define('DB_USER', 'pourvous_2015');

/** MySQL database password */
define('DB_PASSWORD', 'Gwey6~14Gwey6~14');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '1ad95e605ad698a3fc6c62eb9ef36202248b52f465760020e639af91aa9ee4fa');
define('SECURE_AUTH_KEY',  '163beae47d70cca72038cbbffb9326cf10e91c294e4239a0a8e1f9bde8952ee1');
define('LOGGED_IN_KEY',    'fda3ddfd7de038d5303684bed9984abb70e9dddd156d63f8327b5c0aa4899431');
define('NONCE_KEY',        'aabb0480d3f5cd1b0806c6fa200541d95fb4c5a437e4cb56f578136ecf1e9b62');
define('AUTH_SALT',        'bad31488324a08b4de59c99a5f88e542e762ae4397a87f01ff5b59c749916218');
define('SECURE_AUTH_SALT', '8eb82ba0f2402bba491eed0051e91fd0e89d69da622cc22d58fbf191c889e310');
define('LOGGED_IN_SALT',   'a735d77c51a5e50eb8772ab4bf61b7ce417364e8e5c641f06fcca292b73788a7');
define('NONCE_SALT',       'a91f6a60f4533764b0866983671b42d64b0827512024e03dc3cb41b5c16073a3');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */
/**
 * The WP_SITEURL and WP_HOME options are configured to access from any hostname or IP address.
 * If you want to access only from an specific domain, you can modify them. For example:
 *  define('WP_HOME','http://example.com');
 *  define('WP_SITEURL','http://example.com');
 *
*/

define('WP_SITEURL', 'http://' . $_SERVER['HTTP_HOST'] . '/dev');
define('WP_HOME', 'http://' . $_SERVER['HTTP_HOST'] . '/dev');


/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

define('WP_TEMP_DIR', '/Applications/XAMPP/xamppfiles/apps/wordpress/tmp');

