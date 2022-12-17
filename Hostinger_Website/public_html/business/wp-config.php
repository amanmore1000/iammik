<?php
define( 'WP_CACHE', true );
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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'u429676791_zu32i' );

/** Database username */
define( 'DB_USER', 'u429676791_rL5zC' );

/** Database password */
define( 'DB_PASSWORD', '8d72KOkTAe' );

/** Database hostname */
define( 'DB_HOST', 'mysql' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          'CYB$y%>L*rreBYBlGpS!:mUoUx>7t|WS-81*#TXHhixQKu96W|MM@>$&f59_E;Hr' );
define( 'SECURE_AUTH_KEY',   'gTH.BtBd,I((]gs=mi$;|E!|c_f?|JhGS5{MR#;V(ORj/K8WjB*(A6l,7JV`_vr~' );
define( 'LOGGED_IN_KEY',     'E88aVX{vr#D]d<*<0Em|THe6,9KUZ,fro {C6>NKZ-W>k?fAU>9#_o.iE3${27h&' );
define( 'NONCE_KEY',         'xk7]q6Sxt5QtQ6JM2.m*@@W,k`I$t>i~G~fUbcV7MKPv/Wg~e>GA5_(G?u%Kx_~M' );
define( 'AUTH_SALT',         '%i8rwDD0bxyDE1-ivEh5Jn0-ESM.!#>K*1t5h&!~8$^).t}So?>3q9d5Hbk)0JPt' );
define( 'SECURE_AUTH_SALT',  'YzxDlXh+.~qe!ArnCNq7mgN9N^  [[6#Gr7]eqOP9^{=t>glS1CUJ6k4~i4,>b)i' );
define( 'LOGGED_IN_SALT',    '3+ov9bR=<:h_f}p8 ?[|] P/xm9xMWRnZ4yOQvi.YK^`fHvRKdr6]H8s>G|w?#ak' );
define( 'NONCE_SALT',        'b#Zuvy1!A[%cCpQJs#chE;P`fL]!g`_Ix><eBjPToc+`ppkO6p=ke{R$3El$CZWy' );
define( 'WP_CACHE_KEY_SALT', '.%2UgegGrkR=3C8(VRL^y9Ti+9Ap|b1?f/D4NmEshl|9bZQ$I[_n)Q4h(!4^FGvy' );


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



define( 'WP_AUTO_UPDATE_CORE', 'minor' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
