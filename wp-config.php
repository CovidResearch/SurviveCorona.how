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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'survivecorona' );

/** MySQL database username */
define( 'DB_USER', 'survivor' );

/** MySQL database password */
define( 'DB_PASSWORD', '123456' );

/** MySQL hostname */
define( 'DB_HOST', 'db' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define('AUTH_KEY',         '(?iU~]x=D=S]a$3}Uk>Og;X ,3O^@uhkymj>vALB-YW|p|jX[FkE<Q@nlFmni4}Z');
define('SECURE_AUTH_KEY',  '^uj`-YsG|?W}6Uk(h,v]as3&)n-P6t&HKHRkQ/+1Jzu?$9fp&Fi4N+X<H?H$ *ts');
define('LOGGED_IN_KEY',    'mSsgI]&M*L:#y-mZ|I72ihCVpccYGY<F8y~j:|-AJBcTxJ6-@=T+{2+<11dAEh;&');
define('NONCE_KEY',        '|WePRFEX_<8vwy1f<-p(|v%=uA;>ecjE7vqhZ=62yXkeEvRgxh5B,r_D:j5GZiSF');
define('AUTH_SALT',        'ox?6wW}Fq;$XdUJ;B{@a0 J&UH%=7Yh|r]0JC`n[IXqx*^JJ+z>A?m+I..$E|ygS');
define('SECURE_AUTH_SALT', 'W-i.tE-4m.#B!/2~SQ<;}Vr{N1/uZ%;iTj`L@:y|-gno*P?Hccx)u&tBRh2jS~WW');
define('LOGGED_IN_SALT',   '[W`cYj+<yQbvWG ;:e(2^KT-&b-iwHO.BPVkfJq[>+q0x*ONPaM.7cztY{ ]M-2*');
define('NONCE_SALT',       '</C33w[a]V>1]^:ab.v6Ht-1P|TR+THCMkdVapw!1tL_/858N.1h|s6u~/hQm 1n');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'cv_5221_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', true );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/../wordpress/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
