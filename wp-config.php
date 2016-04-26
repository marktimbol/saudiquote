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
define('DB_NAME', getenv('DB_NAME'));

define('DB_USER', getenv('DB_USER'));

define('DB_PASSWORD', getenv('DB_PASSWORD'));

/** MySQL hostname */
define('DB_HOST', getenv('DB_HOST'));

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         '!8r,c4mvGW?,pX${lEwU![;O,t&n~+[+J3SCGc7|`D:g5`yt`Wlb{8t-HZVWLgVV');
define('SECURE_AUTH_KEY',  '@_HqH0i9GI+nSkLs`^V6_V .r@C7VZf :q+FPqi(b2[UU<$|y=2T/F`@=B1#)h%[');
define('LOGGED_IN_KEY',    'E}%WeRA<JVF32>EVEV7fiylV@#}!f:Ka]1S%aj>yd)KU20s.XV.p9$.nO#D*H&<)');
define('NONCE_KEY',        '[1)|`0O>I-`Nz<=xRUsnIK~?B]l!&8{;y!o1Sv0~#eyB<w.+s{p<vNq3z:?>ziRV');
define('AUTH_SALT',        'ki&_=)Gev:R3Pr9F8u(X(=TI@IyzSkDCxXa-:k<v4#0+l_:|-bCaoV^Jr Fv.-<e');
define('SECURE_AUTH_SALT', 'lQ[|6V(nr=jv(n{7FAQ<>|Q%]l:&3csY^e]R5K->7+w;-A+?.X6k(0n;uWm<]d5L');
define('LOGGED_IN_SALT',   '-BN0GO$BRVr<Y/XJN}JSt&S>hoa&$0f}f&tL<SR=|k|778BoLX4.]|#j2rMR+Kvm');
define('NONCE_SALT',       '_o+M+%%`+(B;JI#Pl{RU @DZ8rzS_Z{ hok/tnfqQ6`]Jq| |=8y*)!9WbTj;zT!');

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
