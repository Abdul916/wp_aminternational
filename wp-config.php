<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wp_aminternational' );

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
define( 'AUTH_KEY',         '##y_#}J3#&CyWbJkZPABCX5yI;0vyb13/}EP^,lcD ~;SOhHQboRGBcN~U6El&oa' );
define( 'SECURE_AUTH_KEY',  'PQgpkots4H}TQQ(+[hiR{oe~50,wX4K&eE)rjGz)ozomiR0X9<K)Oo5TkC7M56;5' );
define( 'LOGGED_IN_KEY',    'TXR}JK<O9{Akz(V2~Yh~SnrB/jNASiV$S9S>]km?mQ|OeE&eIPKts8QEwYM/Or+=' );
define( 'NONCE_KEY',        'm?k!hCf.#$-b{^:rJJe9sseO*@(GsWvZvlXJBIRqOFWh<,i+a(vm%?~+S=4BP:$U' );
define( 'AUTH_SALT',        '4T^<3=}nxCxhQ1li?EY{>-%gfzl~JF30r]Q!8d|r05+$DE7Y<c);BF_T#FHetu2X' );
define( 'SECURE_AUTH_SALT', 'sxx0eiH#,h@K(*QFjH)W]/dr<{15EW2SD<-iA%W:hpz4~aavSZ0/cBQBjP{=CVN=' );
define( 'LOGGED_IN_SALT',   '{4xqB/dn?I90ac{)?/iH@%-&dx1kB-Crs|9EmjDJ&HK}(GVz;J }sO<4c!6(BAbw' );
define( 'NONCE_SALT',       'nosreT =GA.M))X6cSO(@oZ8w>eeRJIMH=3b)G!yN=<.6hn1S-12nWDXalGsIJ+:' );

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
