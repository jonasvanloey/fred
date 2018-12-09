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
define('DB_NAME', 'fred');

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
define('AUTH_KEY',         ';f=9|on]oV,xJn!c>/Vbcn^-@btr8!lDfIT<v$uqPA4^PW#(Onoyv/NQQFMsML}:');
define('SECURE_AUTH_KEY',  'ZpEpDFjamcZVWljKh<INVgE!R&TH.u8i.z%YLZ?iY]S7Hd|QW u 7JzSJk5`B@cZ');
define('LOGGED_IN_KEY',    '8:la%[30`9PNPA]Ij:dZy}T~q)3qbq.ctOqA2_MY&Kd27_Zk!BonkYxRY^GZ#7|}');
define('NONCE_KEY',        'e|rMPd&0Gl<tbVX(G6~}?i;2x.{G@`HGNz?),S.g7_%=P]kCsk@;Cb1-p<&yYJ>/');
define('AUTH_SALT',        'bkd$jhfj);ETM~6<}S#7Y*x)>XfBf<hbX6d8tEpy:RgNe9slDnwr^ymbFlM/KdsT');
define('SECURE_AUTH_SALT', '`bl[|.X/@MTl8<e<+jcOj-,w.T@G[9*K%qqLXHH&hT-vr{~[W;|9nUgFa9ml>1eA');
define('LOGGED_IN_SALT',   '3kwYcl2IO3]%qg^,.dszHLggl(DRTOk`3A+j _-%uBoDiiTHP&=CQaO6$I$X[f{l');
define('NONCE_SALT',       'yHr?|_LM)gf3kDbnbZ4p%0o}|SVzKbeB3j4XHEy[`:Pin!jU>DR^<9?du{K$~+kr');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'ff_';

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
