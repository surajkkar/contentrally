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
define( 'DB_NAME', 'live_contentrally' );

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
define( 'AUTH_KEY',         'o90*mD6;#m32{[.G}cis~A_?@{ZDuy-A2~2G=y+(C>G<sf#Sc$<N?|f^CCACPQ{6' );
define( 'SECURE_AUTH_KEY',  'lt8*ESC5m&4ZGO(^NopVIiZu4hilJgB>mp.{U.Q^}H~>~^oLX2q|I)FbunO~.N60' );
define( 'LOGGED_IN_KEY',    '({HX-udnF]EEbH$|$G,fAF9T1cY4$IJl0.dd&PEXQfy4k3{5fPt>`I(nX~3Nbck%' );
define( 'NONCE_KEY',        'YfIGnLHU1 [&[2`2GX[r<z4btW(f =Gf(_v}[og.+zTOCp:6+/Hea_CL1NLf>3Dz' );
define( 'AUTH_SALT',        'uA@<V#Ij4?Y^ZE+T=v/EJ6B5+A29p9!/4:Yv22)%8c1uk~4(0FTM-{6bu]BAF7E:' );
define( 'SECURE_AUTH_SALT', 'HU!UO/v.B-B!j<QgO~{!{X9HO2E|R73TLe)C)MV>Rg4=XMRI^T]foI#N@T/_v:j^' );
define( 'LOGGED_IN_SALT',   '8A(}tN}Zf0WAIrcPJh r6$U[|@c-%)TJU07ZDlG@?~QT`.B0EPRoK^6v=uk:Z,a4' );
define( 'NONCE_SALT',       'ltEI%9p^o|B!(x;dCw1k,We[%/8ZPp&k4pH;/y.C:i;ARAej]d;hc&ewwjS+%{uw' );

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
