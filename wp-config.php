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
define('DB_NAME', 'futurify');

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
define('AUTH_KEY',         'N{/4qaP>{IWt_+B(xN;mL9l9{P[S3JM}fYxi.q*~B#%m4MS |P=!$PdQAO 0& (Y');
define('SECURE_AUTH_KEY',  'o0>t[8;)JvG]t*^{qH/0-C&*M Sum8RK7tbul^g7i3?<U]hQz qm`#q:0I~=@L~g');
define('LOGGED_IN_KEY',    'pr5tKiUWZm4/]$1Y]9=!lc7S4d1R,yL054&A9<^F.WjXg*,Z;zxbn)>(fZI7A=^#');
define('NONCE_KEY',        'd?-9FD/YrGXEy89[Fg:Ss&6PK`%U|CR!**)o7)Rx26}8{1-0!eiS}F_V9q{=>/il');
define('AUTH_SALT',        'Q@% ptjneNe4t}5ZJTGA$7-mO~ULk4E2q?Dp;gwZGjsz??m&jh)rFk0-n;vIiha ');
define('SECURE_AUTH_SALT', 'Ms0uUJfSJf49E;oUW@q5m@$[(YO|*@e]dwp5pI&XQ0^(!#/o*BT ,lO9eT`.pw`#');
define('LOGGED_IN_SALT',   'ktlsW-,]1^vfSF]%Rz2rSQh%0`&]<:/H.zJ6rd7O|jIX)[`lA|jC%y]2PeQF^g4V');
define('NONCE_SALT',       '2D#%{ms2{=JJ;E+]1M3;Wxe(E/F?h^9b/7:^+dV@6wVu}|b4VMT^3q4Lc.[bFi{2');

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
