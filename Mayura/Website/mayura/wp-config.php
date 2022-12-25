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
define( 'DB_NAME', 'u429676791_DQpz6' );

/** Database username */
define( 'DB_USER', 'u429676791_xpqBN' );

/** Database password */
define( 'DB_PASSWORD', 'Mayura@123' );

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
define( 'AUTH_KEY',          'Igxb&$u!-x;[9YQJ1{#|d!9~p9qZ{9K^Hl=8#_n|8FQ_GBP_ECp,gS^u,4~:F.s[' );
define( 'SECURE_AUTH_KEY',   'RR_}K1/@GUqL7@c*y.MbPHxiy/`KI9VX2/Fye$<=:JdNQq[oyv@lsPachUlPhn!4' );
define( 'LOGGED_IN_KEY',     '.1By/b+|a`PLE6bOM)I%;ca>LQ&1Po^2i7;B{f.!|F.S=*Q3w,I=~9r0G5c[7J7I' );
define( 'NONCE_KEY',         '5_0EwdBLa_~?NH/N~^J2YZaIS|;G>Op!yNM}Nr?8,_08R5F=>i7 4@oIy$ZY+}1(' );
define( 'AUTH_SALT',         '/:Jjb<e/:z6o]||43crtNtXfPhCTW<h:@,~3yB/x?c4O)YJ+#i8P<]EcP-q.!voK' );
define( 'SECURE_AUTH_SALT',  '*^B@oH<uXC&8:SdpX=`HJK0X*DFucw*aZJ T_nTsWiBifD0RO@_V)HlI3CQG8~*a' );
define( 'LOGGED_IN_SALT',    'Y9(9%kFva@u|iW}X+!VW2d##PHp,H%oTkSNlC 4ny5-a);Lz;Xk]3xZ[RTV<8]KE' );
define( 'NONCE_SALT',        '`Q*WhQ 9j2h8[xihV}RPWzOUx-}4f=+Qe.5GG|rpf(R*TbYaT7bNgCPmz.#lXms4' );
define( 'WP_CACHE_KEY_SALT', 'uvUFBXw.5Y6YwE[!4H.lF^zMjCEf4g6P;d^R59[BZn)4t+8:f{8TDa9&hU|O/ho&' );


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
