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
define( 'DB_NAME', 'khan' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         '^L/C;>Ro+8|oz>QxdN{%tFXJL4wbEUxHa?2-3[dn^d09a1QMV[XE3&QFBO-aNOgS' );
define( 'SECURE_AUTH_KEY',  'mAIL?S$*U ({Wu{?b-^ETW3-#?EKEZbg76`Dpnu?$IOI|Mra l?y3F>8>`JH;J75' );
define( 'LOGGED_IN_KEY',    'QAU&y*+>~`pqCwJkO+Pou+H_7y~,Ia/*41rCL.8(se1dIE3>*DULRZ3W:+:~]d4F' );
define( 'NONCE_KEY',        'JSsCJZl9KB=`S{.,fr0#[TW2l*{/a!us-Zdr%ip877B-ZZE^s5kT yFUhZ+B/1>v' );
define( 'AUTH_SALT',        'tA||}kp`~l5V;V1%uW{ ~B`_P4o(NKFa^5Xn!c;fA`rF~B9nv#,*0lfgVPDK)cP/' );
define( 'SECURE_AUTH_SALT', 'zVQzccJ:4#qP.v1eRI0x4kUR-Dz^>m0;%<#@]j*5Z6`5gpO=:]7Q=W9|r5*jiEHd' );
define( 'LOGGED_IN_SALT',   '}(]A,Ritu@zedSbwz:*IF}H;+nhB($B3jv}ib=`78=Ds|x}ovLf`U:VmXHOn/K5g' );
define( 'NONCE_SALT',       'Z{!Q**&f[N!>5@*36i8YgCd5NoVrz4TpPa(,!2,[mI&y;~DrF,J~Vz)}Xjel=*)E' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
