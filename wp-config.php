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
define( 'DB_NAME', 'test' );

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
define( 'AUTH_KEY',         '}!Y-je6WZI*7C{2]LCBZq7=O%C&PGk1^?*#JsIk3eAqp_FXhk9SdwliXr[:}|3bn' );
define( 'SECURE_AUTH_KEY',  'bkt(-B83pk[d6KrI}2X%e4uhdEZ65O!V$,Mv?SI0Yk[G|~wo6j&%FE0N/FV-3UtW' );
define( 'LOGGED_IN_KEY',    'Qn4$HtMYfst#sd!+j[JKVKztGYl0+k(+w;5pG&hkFM}~IGzut@aJI >@q?yu=>,,' );
define( 'NONCE_KEY',        'a{H4IL(a}m76rryT!1 J-!5x<V)uTk1cebu;(Kp,zbSuQS>R`lg)bF@W?)KVj&3Y' );
define( 'AUTH_SALT',        'cwK]]cl5)wE )PW+,(*7#L6~(2(Ka%jB9x]A!m!3sHU VrL^Zt7Qr(Iv,+E;/4b0' );
define( 'SECURE_AUTH_SALT', 'EjA#eO{yZ|w.bM3@I56<,]nu9JE76-[4O*C<cFs0<T0%eh~a2va#Ydjn/>+|]<h ' );
define( 'LOGGED_IN_SALT',   '@Hd}[8W3t(+PR]=TtJCKJZZo/ VEqP,h)[Ca]l]0gKY%H}eF:r@s%eu4ep7g~=+w' );
define( 'NONCE_SALT',       'rB0>P=9%It4s[ Y{0#?`V!R/6$W<7UJko0.AV{Ew|^5mj0JRtAP/a>ql7Yr?81t5' );

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
