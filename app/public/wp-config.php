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
define( 'AUTH_KEY',          '.G,^<X7~N~!^wc@j!4i2_(%[t[@JHYU(N.6E7]JvK=-LvVeC>#*2B3Ngx`#;+-;L' );
define( 'SECURE_AUTH_KEY',   '.&ZCJSzISc+tjr5d.<#o/ZXoeA}e$#7 K-6Jk*d$_VrMR=v W9xHO-nN:Vh(q:e+' );
define( 'LOGGED_IN_KEY',     'U8(n5c>wJ60[=l;+tSQ=vN<_u%BnO.K4*5h7.S~<``:m){](~pKPuqR}I4m@6O9C' );
define( 'NONCE_KEY',         'z@sj_&83}*E:w}M%_>Qx90A{M6o jU=f([X?.y-d8u31rzd|>|h6!3tx|=pcE^7K' );
define( 'AUTH_SALT',         'K&xHH.30vJcN> (SW(Fcpdy!y1)Iq_)($hZ~2a<Zi2ESf>Ty22&;&v)+2`za2uN?' );
define( 'SECURE_AUTH_SALT',  'ScjiXg*H]/[(NsVu>CLAZNycTMwxrpR:v6Esa7-$g6E944>UleAC<6Zz<WwQ*`*?' );
define( 'LOGGED_IN_SALT',    'vKMg=%)KRFtd-s^ArODS89y=->|!3h4`Se)vIMK8l=FN+O`Sm#{~+s|;L&kWxy^#' );
define( 'NONCE_SALT',        'A=MXCNB%2z^+;3+(+(`UvhSf$|au8X7}~8D1fyPcXeC;D?L{,tss;D_r~2;_TF&,' );
define( 'WP_CACHE_KEY_SALT', 'G!I5XV1=pnN)YHS?$KX a01V/S3ND{k8%<l2Ku;a_*0olz*d>l=)_Y`M?Ut=AX8%' );


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
