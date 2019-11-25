<?php
define('WP_MEMORY_LIMIT', '64M');
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
define('DB_NAME', 'wordpress');

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
define('AUTH_KEY',         'c(o{1*Obq$_hiA;_*P[bg0$!,^SyQTtQ>{r a<$6L<jyIfSwZ#Vi1+7jh oj:Hm2');
define('SECURE_AUTH_KEY',  '` 38;k6,1z_o*z+$8jUi@XI*&fXw+v~)RSb_<6~Ml_s[NHP1CY%Zq$zM5[y E5hS');
define('LOGGED_IN_KEY',    'ce[kuQxL_;|,vf(ZFg%G,xd7v74!v&re)fzQE$2ij!4f~{&PpF,g5n++9P$1z}Ss');
define('NONCE_KEY',        'xCyd@8[Cj_H9{[tfp8$z6p1TK@{!3oKC}tPi()p u;6K,~In)b#lJ)]QuQ%$V!^Z');
define('AUTH_SALT',        'Xa<NAO9b>M~$xg5p_Ze,d:{j)}tws`b&^loW,k,4qq_QZgZe$,:h~V&x&E+<jD:H');
define('SECURE_AUTH_SALT', 'p=G~TxE ):*sZU$%NjJor_A0)bvp|3S}iPEe;830{?@^@@{(,O/]iJ?3K78pQvRX');
define('LOGGED_IN_SALT',   'f7o^~LT{5j 4zP;NVnWTK*$Wm~i|`o<`G,/t/J2P.#a`<4uXa[+!AV:+bzs(GK|Z');
define('NONCE_SALT',       'QUk-1D1qt)d.J?Q]AOP*!qXL%YToK~XB(U+*|cBu?`&WM~.F7Lx0f:<jQ@F#c~rn');

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

/* Multisite */
define( 'WP_ALLOW_MULTISITE', true );
define('MULTISITE', true);
define('SUBDOMAIN_INSTALL', false);
define('DOMAIN_CURRENT_SITE', 'localhost:1080');
define('PATH_CURRENT_SITE', '/wordpress/');
define('SITE_ID_CURRENT_SITE', 1);
define('BLOG_ID_CURRENT_SITE', 1);


/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
//update automatic
define( 'WP_AUTO_UPDATE_CORE', true );