<?php
/** Enable W3 Total Cache */
define('WP_CACHE', true); // Added by W3 Total Cache

 // Added by WP Rocket
 // Added by WP Rocket
/** Enable W3 Total Cache */
 //Added by WP-Cache Manager
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */
// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
 //Added by WP-Cache Manager
define( 'WPCACHEHOME', '/home/idreamag/public_html/contentrally.com/wp-content/plugins/wp-super-cache/' ); //Added by WP-Cache Manager
define('DB_NAME', 'manhafin_cr');
/** MySQL database username */
define('DB_USER', 'manhafin_cr');
/** MySQL database password */
define('DB_PASSWORD', 'N^F6B$h#clFM');
/** MySQL hostname */
define('DB_HOST', 'localhost');
/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');
/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');
define('DISALLOW_FILE_EDIT', true);
/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         're ,]PwapOHBWh~l3+|#+?E7NNHx.0-Pk8,QI#mYx>s7HOGq]zvnc1kCz2fd]y_T');
define('SECURE_AUTH_KEY',  'Gu Ys:+2`1R]Eil_?W}a@e1[KPGbwS<SSvog0cu,U%&p_g_+XvS&!hwnq+pV;/T-');
define('LOGGED_IN_KEY',    'y#d.2b[H0x)S8l*CPCUuvQ^Ep)~/f.=bd|Te-q@br>^7,X6S^>8l?yaxns-<t?4Y');
define('NONCE_KEY',        ',,mM67a?e|jS3y{^oh2Av[cF,&I/ZWAd+q7O<KXj4f/B JH&HA:4S1wI}1~2^^!H');
define('AUTH_SALT',        'Z&|_pliptaw0CQ1%5m>rIW^%vyV]evdxt>|#-$c}ZaI;5~?uQ-[i 6C6PRIAD^fH');
define('SECURE_AUTH_SALT', 'O^p%TR:m$+,27Kd|%+-nd2T(vL&%yZqcLfINxHhlj)EHzQAI5#GhAM~+~fa>Tp3.');
define('LOGGED_IN_SALT',   'DQXxw?by,m^gU{ak+FyuPhseWxkWxGzy|p30M0Qp$<S.0LbtT2P?=su}:gW.1&5O');
define('NONCE_SALT',       '~ij0Rez|}qD~P`F-=:S]z?Y#<BN47-t_ ;qO:yo}3&>361^A(xc-b[Ge0DC=!mWT');
/**
 * Other customizations.
 */
define('FS_METHOD','direct');define('FS_CHMOD_DIR',0755);define('FS_CHMOD_FILE',0644);
define('WP_TEMP_DIR',dirname(__FILE__).'/wp-content/uploads');
/**
 * Turn off automatic updates since these are managed upstream.
 */
/**#@-*/
/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';
/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);
/* That's all, stop editing! Happy blogging. */
/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');
/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
# Disables all core updates. Added by SiteGround Autoupdate:
define('WP_AUTO_UPDATE_CORE', 'minor');
define( 'UPLOADS', 'wp-content/uploads' );
define('WP_ALLOW_REPAIR', true);
@include_once('/var/lib/sec/wp-settings.php'); // Added by SiteGround WordPress management system