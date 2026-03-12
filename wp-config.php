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
define( 'DB_NAME', 'ggrevamp-bewp' );

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
define( 'AUTH_KEY',         'T|^XFoUMGzGdD[BI8)2i2LSNq!%7hY%ZGT]<L ;(d@BrDuYxp{V;x5fdnhA;5l$*' );
define( 'SECURE_AUTH_KEY',  'Ja #O@.qE;voUaT7l$5YwA.@c#tHIy+e^BTPFzqKupu%R[.->n|90}H%J@$Js,2R' );
define( 'LOGGED_IN_KEY',    '.Lw5`bKKKsCD{6O,Kq[2B(BI[:H}z:!a~$r@J(!O!6TZ(Ug ,h/g.>n#[V%XI#I^' );
define( 'NONCE_KEY',        'F}!2qe)(tXZKU+UW;xs-WnAR3_a8Gb#<(eWu4N2v!E*3E)1{ubR/s`22{jCIi<RK' );
define( 'AUTH_SALT',        '5Y&KTCm}aQi5}<Ydb21gK-i#t)lwKQ3T.:t}Ku?27q]2A/MFVG~2FC/X:. >D&xP' );
define( 'SECURE_AUTH_SALT', 'nKU2K+#(w g`Sx,I~/*rhr)C!)s eK@`u+@wnA/(;<b.3h|Thu0AD=u*7j.2l<vu' );
define( 'LOGGED_IN_SALT',   'Eu3E^^)0}9PY0sTR`<K<sWCM4iTGn7|_@{::+W(h/FyVa^Wl?_]_WG,}(=T[Bmp0' );
define( 'NONCE_SALT',       '*}4v)mUg$0DsA!of_Z}E3mvPcXrY;`/U9j=+QMEl&q~hi7 !(@1MJbQP+3,]73~O' );

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
