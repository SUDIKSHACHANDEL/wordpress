<?php
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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'earthlink' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'jxfDv{);G%oDE$FI9R[-~ mk]_d uC~x!d7jp2J#I3 z^k1W<aV-g+8vi(bUCW,D' );
define( 'SECURE_AUTH_KEY',  '=!A[3{C{#(6wClE ^SJLvUlt%*[q4&tr+1=DVLvG/a:K{0+Q_XK[9z5W7/q,69jj' );
define( 'LOGGED_IN_KEY',    '[UF=&ruH6Nl7rDau*r_C#7~_(s^J GZvf$yz63>h]K$`127Pe_wMg<^u[SlIOs_L' );
define( 'NONCE_KEY',        '9plbS~P>vsX)%/h2[igfMOcrF!NHfC:Ff2~2,d@uGv,]:C1<iRsNM69/c{8$YI0{' );
define( 'AUTH_SALT',        '[&y;FX}E2=H!{&&%MH|tuC%gcVvK7J?fZ31+UUmg%g<fPv?uTt03;+%TBhMt?Z6F' );
define( 'SECURE_AUTH_SALT', '%3wgAn$oG0GWVI)b#_/bvJO>U5$*Y9gXP]K/%}Eodh_uiBQStTSuRB$[U!m+%FdP' );
define( 'LOGGED_IN_SALT',   'J)nJ)d9SGTKZlFo)JXq{xG#YejZ+E;7nlP9<Kv%P,wK|N.{ZcDl.WBXE]A Tmwfh' );
define( 'NONCE_SALT',       'dN]Z7p0>fOa5hja?({:PSFbJ~IQVN$FqL^h]hDQ2;~(CjJG,b}zjJm0gm*Nzv)|J' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
