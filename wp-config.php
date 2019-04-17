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
define( 'DB_NAME', 'myc' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         '/5|6b;gDI:^JLLe?,w}eZZ4@K#wR)n;%]nDT:PZRcT8pP9nW.+DJ%r^]kISjY{-i' );
define( 'SECURE_AUTH_KEY',  '{E.6%vrT%f})Yy)SEh!#Xab*UmC[aX%F`S~kvSj2<GgO~}NCTFN:ePfSCRe71~(^' );
define( 'LOGGED_IN_KEY',    's=N:c_xwt9 lq5n5;9N~ek#(B4hymkUdhNj&#x]oCf*()8Nd8u<s$[LQ:C6U!hl4' );
define( 'NONCE_KEY',        ')bs{He8}vCZQc0eIWa!jFXek/[m-Ky;9rc?5QL9MsMZ;/J#>Awc/B.5fv&B;Dfye' );
define( 'AUTH_SALT',        'S~#W,Sg)XP7/qk{$)48.nB!?}&VRkl2a@,h>P?<2r`p6w~cDhgr;cN_bBKuowbY?' );
define( 'SECURE_AUTH_SALT', 'c6X--+{2J6LnP6>eHP^w}~m%# EE1]t#Ay5prdD)T1?lO6xvHP_[%KC/rj^OO] s' );
define( 'LOGGED_IN_SALT',   '12ZKOS+z`|GQ7KKJL=*%RGr.R5uW>=U,<jb}8T;(HlHt/3s7x1ofLDJQF*$-M2Ck' );
define( 'NONCE_SALT',       '2*~j=TAX4R&pfDKz[/A!S/asaJ2H47{VgotjQeX4f[)U0jg5)=L1x7VF.PE9EbS1' );

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
