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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'campaigns.interactiveone.com' );

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
define( 'AUTH_KEY',         '{H4Ki-]u6Qy~}/hfq(bSn<%K6ET}=Mnp3[}KFqc40CO6BarYm; |aDtS48VrU%,g' );
define( 'SECURE_AUTH_KEY',  '6UZ3I$F[GSo^UnLtVWfC`DFf7j*1^<So9D)_{xCOjBl<?,CByt^~#IZSNm00/PWS' );
define( 'LOGGED_IN_KEY',    'b)>7eGSX:c-3&5g]HS/&|H6KdGgpCM1]o+)/JEtiYM~||V>Z2]ygo~.D5l:7[]Ky' );
define( 'NONCE_KEY',        'NJ>]kaxkS&,J`nlVQmyfL)h*fQZB,HtOPe8Zr8}zo|:g Z]G9!I*xG:eh,G=|;3y' );
define( 'AUTH_SALT',        'z#kK@NzD|`n%%,`rr|T8ZhSq/2r>djEZE%.9V5+GP97lqs)/a0-j~wX43_Lvw)$F' );
define( 'SECURE_AUTH_SALT', '6:uXY.8UavPPQX7X?YPEO`M;TaP-OHVlI s$65HgnVmej;&,yqLBKbQb|SPzX<pz' );
define( 'LOGGED_IN_SALT',   'M~kUPQU]ZuH9YxSrV[%j`<vXvX0.>bW0!)=1hy>GMP]7N-v0;]t8V70F#&!ZbpW?' );
define( 'NONCE_SALT',       'a >iB.&wWBz]&?IL>_o-UBm;|,i)61CLYsiJHBd+aK2hp$E](NlpYD/GuLf~ej>E' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
