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
define( 'AUTH_KEY',          'k6wc-fO+8{5~ntdpuU83w!j+$5V$^f522#rP%zBM.#~*_=t $-X+YwzGsWleoBmT' );
define( 'SECURE_AUTH_KEY',   '- L~ycW&kIr.}YQ^{]BiZ2a8ySsb}@1e%m_)PAg8{Dbj/^zG+Xb)})@&&a~gtYnU' );
define( 'LOGGED_IN_KEY',     '*L2uP37vz9)D,m:]H1b+at2d]hyWre].6gEV|o<fy^jmDuv^%2pz)+6xW;0Jy^rW' );
define( 'NONCE_KEY',         '#Fn%G7)CLd1[RrD$O==b~hn-D@2-LE?#bavuRXWQih*3UYS&73 se$8bPs)3@z*m' );
define( 'AUTH_SALT',         '- q*t0M]ACQx$<fw*yER_dz]to4I,14U4i25Rlx3R&)0]0`b2k,T=a#;yoR)mst{' );
define( 'SECURE_AUTH_SALT',  'MZ6b<q;JV/U>z|JD`puD5DTW&Vy5B)AG0(-R})MSX$|#R[o8CwhbyVLivG;WYP3W' );
define( 'LOGGED_IN_SALT',    '`gJi I]/}DgWLJ:YxpOZLd##Y)3&XS1lRwN|#4KY6;K3!YKV1C(=^%%J~*>R[4nR' );
define( 'NONCE_SALT',        'BJavR2C2eN^WJ[DN=nZkw;6,EVlPL+W+$MYb !:[TN*)9pan~JUK>R9-AejFC67~' );
define( 'WP_CACHE_KEY_SALT', '>nQgPtJ&T|PJ|n!RNfw:_l[&+tN5~nh2ZH=?B`e}*L2dIJUq*.vl 78MxKSK{)WY' );


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
