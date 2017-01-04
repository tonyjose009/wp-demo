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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'qburst');

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
define('AUTH_KEY',         '-NJp~G>OR M]1s~{,J(HuT~_{jsXKc<}ZDVy;.Df~fVj@~c ^=</%AClT[ySO1mk');
define('SECURE_AUTH_KEY',  '3-P,5yB>qv&vi1&KLo.*qZDx-V;Ks?4L^{+HU$AH;g44]4k0`z5L3Pbky} .lbBi');
define('LOGGED_IN_KEY',    '-}azO`$eipeHDR>@kSjKCL7RS:V<s4,fNV9W8na{fRJB|`EEMq~G=ud=w*q)^-8D');
define('NONCE_KEY',        '_YxS<s84zqyWq&g*xUBLS(6Q?#dgM%rde7Qpr<j_(rqq`-AcOV!KWLP)YMMMqY|<');
define('AUTH_SALT',        'UK@_W*1`Cy>._htiqHEOXB~s12dD5J}:D}hJ.jfs+r0^BT|pujmsz)t!#JQ2qD>0');
define('SECURE_AUTH_SALT', 'z^y1bG+Fx>&XU4~&,#*;nKo!j@cGTj4:,fdZhaXYR?!<D5p3,JXjWDV:{MIfkE0C');
define('LOGGED_IN_SALT',   'tnBxFCIXRoa%pq-Q.bFz>qE,+Lh4[]HsrK_b9p!`qwh39uo|.~H=NY 9;rI:]hct');
define('NONCE_SALT',       'KYy:fD&iCq.@*! ZzLTd&oKE+D&iBu;H*?raM%]gVdx|U?pPcl-m;o4@.Nw LT_%');

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
