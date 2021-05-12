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
define( 'DB_NAME', 'priyanka_db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost:3308' );

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
define( 'AUTH_KEY',         '~UjQ-2lY2M)#SLAv%l, Po/U]}6.w_>`d(c@rMzSpO:m7*C1U[uQ7Hkjtu=NGk9q' );
define( 'SECURE_AUTH_KEY',  '$_j=pud2,PJl9JFol<{}frB2y@ D$cEuMR~?!84tNUo6xn 3KLj.>Gof[7fv6X*.' );
define( 'LOGGED_IN_KEY',    '_Q{}1SV3H~6[/:tz(e^U yb*cM|3,ac5)ISg{-G->-h&=#OzRAQ$/K34O@gn5L K' );
define( 'NONCE_KEY',        'sH*?TVoC%${X+CCrUyRMQhNpH1[!(EbYB3gu39AtnBsJx&QyH)p;WirEg<@|e^z<' );
define( 'AUTH_SALT',        '9bf7U%jupOn<dY,!bSAA21ULo#S@B*)nUtV2;GVO}>Ua``0sPKcIOE^}zl{~O*7[' );
define( 'SECURE_AUTH_SALT', ';y.qg{yI&9)#cB6Xh@N7ZkN/-$]#$[.;BEEp.VCz@Xv:g;9-;s1?*UXpu2V(_:)h' );
define( 'LOGGED_IN_SALT',   '4:c6S@Q>!v<4p[QR:MFP}pqf~5| ?L`3ZQua5LDoy!Qf8nrq<<UX W,(&R ~f9V7' );
define( 'NONCE_SALT',       '<QA{T SZ:BQUt/)s4Z1zV86N;7~DkxkRSflS^vq&twa@,roLOgs zA+eBdE*EHS7' );

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
