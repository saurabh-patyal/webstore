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
define('DB_NAME', 'webstore');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'k5M6C<fiE]bN?{vh3|kfDv}K.3H]_Sf]7E(gpHhEX+nBr1/+J3wXgH+`Hm8o1=N4');
define('SECURE_AUTH_KEY',  'duxA@F_r-9Z[=SGpaPR6>KHJZ<#x6/05z+*0G5wi|Hs!q:6P_9`mYD}@G&Nv?X6[');
define('LOGGED_IN_KEY',    'Z@a/*@PYTv^6& uDNg;eu_3lZU%{o*as%v3d@-+a<fjq>qCJr<TsLI}4J27S 1TH');
define('NONCE_KEY',        '*_[kR]!;y;TWflJYb}0>Y*7;p}VrBCw-M)!M)eLF!jUv$hXbhPP!}z6AdxD{n3=v');
define('AUTH_SALT',        'zrc590l%&;SHa3Dscx1/%mWgl}ZON^1TEVB&|KlaA_0x4_)~$^FlG^4=2z)~?>BL');
define('SECURE_AUTH_SALT', ',Fd%JuEiLF+xgrs`EM-@.?#/.`Fp<I#9<i-drV83#6MLzFpRwtX}V-E=WX*cc0|4');
define('LOGGED_IN_SALT',   'eE5EQ-qZq|`i1UloAwY#{#[/k?!aa&qXL%n!M)Uq#Gj~/e[;E}k#:,o)9o_S5Ptq');
define('NONCE_SALT',       '04UVhXV]%D(c<~)n]]EVg7&oSCSPgvp|y)TXqevSe0>(:r=0~P>$6ECzr&;j-hs>');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
