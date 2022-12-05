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
define( 'DB_NAME', 'plant_store' );

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
define( 'AUTH_KEY',         'N|YMFW|s}k?~4T%b: pj60hY&1<m}vys%t,Kd67CaGl`PQ!|F^yWv!]u5.;RCO)B' );
define( 'SECURE_AUTH_KEY',  '.OxyrEZU1.0RqW~;.(w;&gqLL|Ksz2mb~E7(!mA`2 U#8a}kt{gnPlO9{mrR,d8^' );
define( 'LOGGED_IN_KEY',    '@ 0P_r/GAmOG|s3P.nOX#s2InB3Nypy^#!>RRL.DeM/m>,M;:_H$qD|d`AnHAU#2' );
define( 'NONCE_KEY',        'd8T,[9,4nByr*/-!QU)Nuo$0Fn5?.fGOO<J*U9Ruspt05s8z%#~~[1Y.m/ARpnV@' );
define( 'AUTH_SALT',        'B*6)i2b1sHl6`xf26f7<cfj,@eFVPdELAtICLhN*]WrcmC(Tsq!<O<i6VHt1jKI8' );
define( 'SECURE_AUTH_SALT', 'x7+ULN+&#OV~jHm]a5|n%sOHEdcQ:*m8n$y8<C5K+jEY#n)`K4eJ7J]+3?4k ae7' );
define( 'LOGGED_IN_SALT',   'f6UG@7%4V=/Bih-#7|Gh$#PZSy?f2RD|cKDo$>cXW M) B1Zb^4=1`}gir$,Z!s3' );
define( 'NONCE_SALT',       ';S^<PE[&Oe8ijl{I-T}KBTh&&6x/#nK_uvZsD,ZUD/uVF1-|).@0{sNC9[|PpFc]' );

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
