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
define('DB_NAME', 'ride_wordpress');

/** MySQL database username */
define('DB_USER', 'ride_wpadmin');

/** MySQL database password */
define('DB_PASSWORD', 'HKQZ4OzH@Cl1');

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
define('AUTH_KEY',         'O]YZqC9Y/}VIA;}@wdV-u]5D<I{,;/&$TYi1|d&z`SE$ru/-U6X1vEEW.s6Q1<wN');
define('SECURE_AUTH_KEY',  ']*F]2wk5PS6dnY5Zx;ZFt)/+I`oA+o%ZYQ|r,EGlyph.+QhnBj],wA>uJO)h`{yM');
define('LOGGED_IN_KEY',    'a49v5>,Eq&|ycMx2v<CV}|fxZH(3V7nQXeNeIS5UM|jTOUUN T/!d6T~t:~4tX%)');
define('NONCE_KEY',        'NOZi#m}q[pl?zNVUP=4ap/&%AYd3DRf?P]a{z0q#u_jh|duO};}w3*2yg1qhJu>n');
define('AUTH_SALT',        '3^KUFY;CX$d;N401Rk^+GpBrs3kRRf{aRxRKuF%Si:]?h uBJYcLa+_d{ rW]]?Z');
define('SECURE_AUTH_SALT', '>#HdsU1zTu*X%4McM6S2/iv,1s)n}ntw{i,w|q2{e?N^)_bH=y;|o0$udlwuY,An');
define('LOGGED_IN_SALT',   'FsY`LDUe(}C|5Iv#&)deIMPV[*Y00NtD5GOBy{F>oqe&>LVe0Wtm{zjXoa8fUQl^');
define('NONCE_SALT',       'tB&c2~|fi4+[Dbzo|RB#t}6|c02QEJ0*))} xJ!]^&0KLQ7GJ|] lC^si;{Ni)|?');

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

define( 'WP_MEMORY_LIMIT', '96M' );

define( 'WP_ALLOW_MULTISITE', true );

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
