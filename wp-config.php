<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'contentrally' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         ':FUvbRxX%o0odr,=C&-0GD1N-h`+?/0#40o0oo.X`W2?&HN_n-fnwVLK`*7gGoHL' );
define( 'SECURE_AUTH_KEY',  '8m5yo~NNf2yA&6p,:9@n6=2bl`>p%[;[H25c>6fk:)T{|Ik24b3r^>W{>g]Fc}5a' );
define( 'LOGGED_IN_KEY',    'Dm_2OtBv$`DP@5X{ z9K]$V-7zmYDL;`AsCLuDz]ca6Led.FcNA0Tbz59 );&b&g' );
define( 'NONCE_KEY',        'h%E@fW5]~42U3J%.e+[RsZ/(8[7-s@G1GZFVLY)hDlpqG;1XN41>e5nYHlPzP4|b' );
define( 'AUTH_SALT',        'M~v@5;)qS?7/M__aE@@+1j62#I)16#?mY sk|=Fk0:^&w-UceYVvl>juq59jSw2v' );
define( 'SECURE_AUTH_SALT', '1IBBIe{Elhe|i;=pCBJ(ss~]{K=z%tD)t2j(`|+*sm)?t$%^2*Lb3Q9^C;26#F%p' );
define( 'LOGGED_IN_SALT',   '>NAWI:se-i7KZ?qe!A<I?UX2*u&a:7P#xcNhMcekoAK4Y89sN,ZHu%jbsP%p1k7:' );
define( 'NONCE_SALT',       '0DHenxt{Z>00jv3!xvkofVh!n?{puFHbN/4*7d5WUNv.3nS;B$Sq?AULANYD0V96' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
