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
define( 'DB_NAME', 'nodetutorial_db' );

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
define( 'AUTH_KEY',         '7ksYf788#7Xp&$J3fKhS>7Q|yO(RWuW;wN6;1_ `)EjjEqY_O)Z5L;kJFl99jMsE' );
define( 'SECURE_AUTH_KEY',  'z?n3(<h=k4U^d5=%fI|yZs ~xDr)y{0tA3Nip}hAJ2i_nD864XeIl+/a//8D_BXl' );
define( 'LOGGED_IN_KEY',    '+})C6gCfWP fHyx4^1b/v,UQz*(_yL`Q[xWheS7wj 0mHaS=ZB4D8DMpT5UsrM, ' );
define( 'NONCE_KEY',        'k)<nxAAa)2qP^l-K!f^qR:LS?Jrf+g8r+%1;0jv,xTeOx_u!g1|($3,)_WRrhhqs' );
define( 'AUTH_SALT',        '5AG=m_]*.kM 9rCI%2!%Z^I|f6LQBp=|PKK]i-Pz$2#P6Q]PL@a<`qX`B6CFTIc.' );
define( 'SECURE_AUTH_SALT', 'x9f@%5d./QpH78U1DBf=e:@<n9{{<l.BiS[L{6N.;!5n06@|5 SYe+pv[ZbA0#kT' );
define( 'LOGGED_IN_SALT',   'dm+MmZAEgc}x.YFIp;@lowo(g$f/xjJPb6_=cROG-h6zaAD3BI$>Mo~v>79=W-pF' );
define( 'NONCE_SALT',       'keytMK8{SiK!OH[`(*NpIuA5r=JYSckqfj3bb(nqE;8(@pdt`IHx:~>Y1hi8Z4qf' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_node';

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
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
