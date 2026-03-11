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
define( 'DB_NAME', 'ggrevamp' );

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
define( 'AUTH_KEY',         'OYB=raaN?WYm5)ChOI[QTQCKbx,YRMBL|#FJw;0C=r:sO6nQ86k|6n9-&J/zP)p3' );
define( 'SECURE_AUTH_KEY',  'e9C$$Q*MO?hjFB/E^eYH$JJS$3TP!xku[WWQ*&~g,NRlHoy#$r{I8($lGGO>aLrX' );
define( 'LOGGED_IN_KEY',    '_kA_Hi r -)N+$yhm`upcv.lZO@wA@w /5Fr&cf!eF#O-v8/;)_DhYdnT7f*sT!^' );
define( 'NONCE_KEY',        'A#:GF`5t:N$;<S~D@qr!@c#ObYHtnq#?Ru=Pc*mrv1Wl(bk/<$8C6Bp7akOi8s.Z' );
define( 'AUTH_SALT',        'N k@34* 4kvXUw%V39}Cm^!S<or7,8:X7/9zegVb:3/:0f6h$02zZ-y_]Nx%:Nn;' );
define( 'SECURE_AUTH_SALT', '}szvYRrVxs:RFov2`Q`lEd%R:lmwq?cuqL*%dKJH(j:RUY1/jNeMt{,IqJXFq&ME' );
define( 'LOGGED_IN_SALT',   '}}w_rMQ4>n]lIY RER|oxtr8>`9okPa~wyu10%vp>l|L`nj(:8fFR-<zUlL90opc' );
define( 'NONCE_SALT',       '6$siEoq e_D~<.pqyyN~&Q[qNlCMJjkCdjZK[EuWwxULMdhxCB~J`!&4N||oU%Rr' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
 */
$table_prefix = 'wp_ggrevamp';

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
