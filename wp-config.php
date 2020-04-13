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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'ecommerce-wp' );

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
define( 'AUTH_KEY',         '!n8p L!|QNS/fr<-03z-EWl-=oaP@^%7Xh1zvwP=BWHx^89j6iZT2-gRC.x(|wmp' );
define( 'SECURE_AUTH_KEY',  'Wyx2tp=qW>-:<A@k.Ej1h.d?;z0$uSUnlp aY`@AyN%$a0Bv,MT@q]Rt?P8e7E_.' );
define( 'LOGGED_IN_KEY',    'afgILae9dWnb:1g=|f0JZTt,M];l9= 1N*tld|UeHY`y#Y7.?L]02>mNL/iJRH!0' );
define( 'NONCE_KEY',        'VjJ/S?)wRKv+oL<AwFNsu,=XVedyw=]- tC.2/.g5{)h+BcH*:wxpVzZDBZ:;?fy' );
define( 'AUTH_SALT',        'R)?iU}7f}fGyK}ivVOJgF! +5XK&Ftq b}%y2`jfw4B ~)1FzjX2k`[~G8hEM7AI' );
define( 'SECURE_AUTH_SALT', 'pL](em41YZ`2[J<J$rPOZH|uF%9*IS)JIYzX]4#p0>j?Krv+_vq4gm$.GAIE2t;E' );
define( 'LOGGED_IN_SALT',   '6;zs2|,DlY7qMGI9mfAl-K[,T;GDh<##tkOAx%1ck(EG5 Pg!c=5Eu|*_EUA-st1' );
define( 'NONCE_SALT',       'r(T%_:P3V17[`9%%rN.#4RL;1 6a*h5s5VTA/=xzlI$DKKsP*h-^TWiiI}#*;,%Q' );

/**#@-*/



/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'ewp_';

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
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
