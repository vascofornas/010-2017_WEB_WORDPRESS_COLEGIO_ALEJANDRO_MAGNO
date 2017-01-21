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
define('DB_NAME', 'herasosj_cam');


/** MySQL database username */
define('DB_USER', 'herasosj_cam');


/** MySQL database password */
define('DB_PASSWORD', 'Papa020432');


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
define('AUTH_KEY',         '<R@)[Hcs#uYbh_Udv?PL0ZyjpFS:i(f`zf4`vL:M>M:BUUNUI9~RCjXeHtabVi>l');

define('SECURE_AUTH_KEY',  '_l.:AKEgR)e#[W}%wrUY^l$Zy%YBmE%7_w.kTz`%9#immdeI(RaHmF,D!,H/}.ls');

define('LOGGED_IN_KEY',    '[#gV_6JN]qx`^8m4ZRE*[i`#CW9Wq!K6Hl-Oap~=>9~Jk^W`7Kv3AQCJ4}L!m.2)');

define('NONCE_KEY',        'i+YMQK2d;N-@;FACJ_]oUDp2q=Y9VRXIE2k7fb,*X`7;7;</ ABPv4Z!R5*k;:ql');

define('AUTH_SALT',        'X((Z0G`*xYGs;]Da$JJpBLCVRbsCyo3-(FNmxR7o7@tFp6&[%=TUz6COtrkJz1E|');

define('SECURE_AUTH_SALT', 'iehwRJks(2S#eUvqas1}qLN3#~A/|%YA D:^L;Vdl;Z-~SAjk3Lv.6a/I4K4(_iD');

define('LOGGED_IN_SALT',   'uhPoh?Md*jp`r)Abg=C&!BkpJ|;9cwJx~QT5SI(E8[DAp1fp-HmFS^D&M*bCA{k9');

define('NONCE_SALT',       'xXTcwvl,~YsRHG%-mRvyOKJ.e3~HDVvj_kwmK@ zP[3feYKtov$T,K&!sNuuITCQ');


/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_colegio';


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


/* Multisite */
define( 'WP_ALLOW_MULTISITE', true );
/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
