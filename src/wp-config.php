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
define('DB_NAME', 'developer');

/** MySQL database username */
define('DB_USER', 'developer');

/** MySQL database password */
define('DB_PASSWORD', '123456');

/** MySQL hostname */
define('DB_HOST', 'mysql');

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
define('AUTH_KEY',         '4dodHOoYkBfr)TmY:lfwvY@Ni-T8e!;rshe-?T=<_q,iF,C?rS&!>rfoH_3S`g!O');
define('SECURE_AUTH_KEY',  'T[P,-tp_o{$OHkSLw/eQ<_wm1?[6#O_B1Pyh80|]U=~cl/>Qq3JZNB-%=&xn2*.o');
define('LOGGED_IN_KEY',    'L(lC%cV0y*^|Fe2l#BW`M00Xq~2e#Bc]xO}4D8(1P{9GJ^WN~#Kh@0XB78xB0Rv#');
define('NONCE_KEY',        '.DN%J@%8g~2_)zG&P7SqWA#xMu<ApG-oH[)Wm9{`o@mt_RG]P7E:`oC=HxysQ>uI');
define('AUTH_SALT',        'VyL-pCANBx%&e5(6e1jDq>AO{HSv)LQ(+v-uf/ uH1+(xg`p[d7[)KLO[-;`oB&<');
define('SECURE_AUTH_SALT', '4|KXD_ia9hw x3vGqVxM(~SJ`=Y(H.&M6DYfCR_^G5Y/R!ma%+%qPM0,BCWd->H6');
define('LOGGED_IN_SALT',   'nj?B^iHI)*>3Q/qC%>kvTRh{TjSjcq`JLKlpJf;kfA>Y4fMgq2>ZDE| ;>+q[!kI');
define('NONCE_SALT',       '2Bks|r#Xl8*ro!|7phZihR2xhwn)BwTfK|4P6YlP|)(noU< fum2*gdqQ(9ia_58');

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
