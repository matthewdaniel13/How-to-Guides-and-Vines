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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',          'V*}}KtMA%zs:_!]oD=tLYrIH{vX4/M=M<WS9,ksKfNpf5l[@jQVm/8FH2duy:J{k' );
define( 'SECURE_AUTH_KEY',   '6Qn9%R)JF>3;i5xX}dzGejs%|3?XTr>gkU*ujT]i|9t.<A$o~O@NIYkl}<,O(c2D' );
define( 'LOGGED_IN_KEY',     '#Iv3EUUm5{rM7g:;i#BT]2TzX@|d>94t8cn>8]2.lD{hl2rZp$_.P>^K?9:,5Qew' );
define( 'NONCE_KEY',         'F+p7 t~|8@~k=x6iGu.3>UTQxP#]p2oVxY1+/C,>>(h4%,zU4.Mc6k7sUj6J=RF_' );
define( 'AUTH_SALT',         ' EU{eg~s-?$Q>)rPzzv^Y5xk#z]CThr4x/${AQ&sI-@kMgpy>F;YJW,n:b<<lMHl' );
define( 'SECURE_AUTH_SALT',  'QA=WOs5SoX!jg>?2)ip3~p.FZS1KIDI^?x3x@JC,j5$h5W*7RTm8g+/smt8uz:P ' );
define( 'LOGGED_IN_SALT',    '`0JxhadCZPSEpZa}[2lbAZF**uQQR&>L,WL;BSsOfhe9}slmA]55m+8[]HkGpL.[' );
define( 'NONCE_SALT',        '8},pEB.e:X9]@{VKgN:=?/X@s]`9X ($Tu erA]88PD|3^oGtQ)rD:g-A[4S ERp' );
define( 'WP_CACHE_KEY_SALT', ';XQb)_|:}K}+1Yfeii`9-wh@K<yjR,`@{f!Q)VEg5gY}`<)Hk]:mGIAZ()Fi=UAX' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
