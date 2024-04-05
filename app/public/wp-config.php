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
define( 'AUTH_KEY',          '`ovF%ndkpWe)h#m?C4nw?}LJ(AR6*w$de%Tq@/y3gT:uQ$(cT?mRy&^S[$ueB>1F' );
define( 'SECURE_AUTH_KEY',   '$)3UC9]!<BF1^`i;Xr6)@2hn]i.ROgSBi$%zhxU:]P3le>8_Ek!>{2{1vd@#V2{?' );
define( 'LOGGED_IN_KEY',     '2>k%Z.plceji&6KjEjW}f$~0LB,I?-9d}wRXL:E>QJQNJDS+sAlU!eY@9CaFC7!$' );
define( 'NONCE_KEY',         '-3CbJldl3b#aX GBwKgIo`sEEH^{X=KNmb|,PfR:H22#q~oB)D&8Q`+JWZ2TCZ++' );
define( 'AUTH_SALT',         'JhgMc!A3,`1`i:.YizW:_0na mm-Ir>gx:jF@3Zi-{fIq@Wbbd]sf[onSfTjPIBb' );
define( 'SECURE_AUTH_SALT',  '+[6Kq o^T>qD=k$q:LMdR2t@Z7 FNUrmec-%QfB+G;Oq~V*(*vz0e%)?7aH3Fu>r' );
define( 'LOGGED_IN_SALT',    'ZYMbjud6VV-gOdX82^PiqEhZojSE{{8FMD&QesMSpL(/4k~@?G2?hb8%=(2dd0,l' );
define( 'NONCE_SALT',        'Si8T=-@*df(LoA1CxqF-PNoy]>2qcx$/50rILZ4,+WD/*s|`(3ShQcs5*OM>JCU.' );
define( 'WP_CACHE_KEY_SALT', 'tzj;|P:i&o=QFNw%(Lok|O> k$c~*P3>:Cf.E/5}a&FV}UW7iIFor<fLHQ{|eS.j' );


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
