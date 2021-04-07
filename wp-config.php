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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress_zoom_test' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'D#gtpYg<lqD97]b/c=&v8<mb4g0`qf9p^:+~*rTH`W)bJzcAx2vgj;:Z84V<Qwd<' );
define( 'SECURE_AUTH_KEY',  '}kX-2a1WRmH@<dV@#PCi/.i}]n~w[fE;bjs}ks!r&V3$S2_5MVr#7n~h++]5Wfl3' );
define( 'LOGGED_IN_KEY',    '~d.H=:?`<I7.o0G5yq=kgYHj*/K|#yV^z%k8l-2RG4k|?2394w12(W/64n&|r{TT' );
define( 'NONCE_KEY',        'EvS:qh5Wf3knVy:8.F]9WzB8R]ww`m[z&| p>Kl?PGPaAz@BjhY>cu-?v<8tY5_X' );
define( 'AUTH_SALT',        'qP;_{Oz &Y*NG3R}P6{dhWVj`.b]d>5AY9rLSB$ kK$Yjh4^VaitJ:V#)._0+m^U' );
define( 'SECURE_AUTH_SALT', 'SkW&ZRnZj%~s.f`IH%[TI%)xHuVhM@e?q+i64KC0V9X:S.7@#8Vijo3.-Cv2oR[Y' );
define( 'LOGGED_IN_SALT',   '?UM.a?R|G;Py<D!% 0Y%s)1Uv4CZW<@G?4Z.^IgF*lu-t5~c@%^a=&@X(D|ga<v)' );
define( 'NONCE_SALT',       'GgehEfT/4)jh/dU,MdmQ(y1BiU=&C]q:L9~4!8hV9s4nVj)7#L{exW<Ls,<<d<qc' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
