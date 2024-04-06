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
define( 'AUTH_KEY',          'z)n@$TjpwY:p)EQz+%h%hF^:{Lep{J.?wZg_;1)rWDxKEc%L|ORo#z7bMB`W u(!' );
define( 'SECURE_AUTH_KEY',   '6lqW:9)<>phzlsC5[ydpIrbL5l4Wf%1s.RY1X+!zJ*z7~pL(<S671MoX=yCEvB8$' );
define( 'LOGGED_IN_KEY',     'pu=;;A Nvinwvh#|,S^=Ij{R<~J!7i+RF$rj$3@`n[-$Ey:vY1q6%f?Q,[+ t^SC' );
define( 'NONCE_KEY',         '#6Mvp$dsl]E<*KpRG#eR2YpLroT[zQDSA1sq5b|^*xA]G4L71DK&flwX5aWPB;& ' );
define( 'AUTH_SALT',         'nrDAg4?EWPFrfCH.!p5BRKHHFUJ(FN4YJg+o^#/a?3><XpGA#30aR=Kl0bE!f1^n' );
define( 'SECURE_AUTH_SALT',  'g`5f6Fk@AyGs!*neMxJ-1eKZiPMVJ>y,XHsI?@)v`zp0&swc+T06`NZDZ7{vWGW]' );
define( 'LOGGED_IN_SALT',    'c<6[yGics~yOPmoj[26Gfhe;U*17{E,9$$:AjPFzn3|lN##p>hUK4)AD*5^rTAkq' );
define( 'NONCE_SALT',        'nYujh-^agVztZ$txLEBg};xPDKp6X67|B$;1xlygaqms9|d)I^$}86dt997cj &I' );
define( 'WP_CACHE_KEY_SALT', ';d`CRgF.}(H$(z= s#/HY3Or3Pr|4uic$=2 jrDYY!`K1=|?rx&5ppCNL{m)VYD1' );


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
