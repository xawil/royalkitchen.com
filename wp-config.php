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
define('DB_NAME', 'royalkitchen_com');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'zd2I&.4S=DYDU8HSg7<?!mx`%_D6m)bAw3#&4MX@~V{WRcR[xk).-I3jkf>9#W8v');
define('SECURE_AUTH_KEY',  '2|kx2*_%z){~AdO@QCz`ZrXXu^(&z|[z3 Vdau2iT:KWD_WZ5Yl.I[rr{+wkLd$I');
define('LOGGED_IN_KEY',    '1+SLn*(UA<E8/;gnphJ_%+YAl|T{uX|f5WO0TMd8Bw-91kc9tP +dbh.y!rR0/Y+');
define('NONCE_KEY',        ':AG}g+s?&OcLrAr;+MgyVE-|5:0 EJ:s+4snr>CJ~}9<7aMPx|$J6phP4~ p+^JB');
define('AUTH_SALT',        '?%K=&b$!|*W%UGC>(Rk+/nU!H0X]:ak+kVPi|!!t-ejG {I>.Rj%UVy,!vW5}J||');
define('SECURE_AUTH_SALT', 'jdQcg+uoO3xnq/Rz[I_-MvUjWEU]p+-2uX)FT|_hH`bno[F*F#xHR khZl-!(?Zy');
define('LOGGED_IN_SALT',   'eO2 <$^sCN0 2YAWYu@Yl>A8@-doI0+Kb(URC/J%4&Fpk_EXNj|2UHu-icQ~}@L~');
define('NONCE_SALT',       'w0FvJd+F~)zpjUQi.h~#&)7#,Yi@?lNB1a}5-m8oz|&CW0an;*eoNxq*B{B*n /e');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'rk_';

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
