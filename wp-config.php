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
define('DB_NAME', 'satyaserin');

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
define('AUTH_KEY',         'hNN#>n86vb3tt9,f,:!H; @GLUKpClNYNUyYh NTt?~~fyZus9KKA1ROjPNaiTFO');
define('SECURE_AUTH_KEY',  'QI1HTYy`E0!_hj<Z+0]q.nhj3NE2lU5 v^CRL2pr(_ szC/sB%4W1^3GhI,NA$vs');
define('LOGGED_IN_KEY',    'YL4gE1I{VEjBPCH.|Q)n$90Ja<5lYOjK=y10!!yZa%1X+2yG*A]l/jl|WnUh+}~]');
define('NONCE_KEY',        'UACRLOO.r8FX)%/PF_@Y@mP!l1,d)ksezdv)cgy&H,Icq[;7!f.+Z9gn73G/06k/');
define('AUTH_SALT',        'z-0Gb1LV|SpFZIEiJq)TRvMNrBp[.0[VtUQTnm<hJ~ ^d){= MpiRQ0Wv;Oe:q~o');
define('SECURE_AUTH_SALT', 'b/RR_5UlS=*;B_:e>T^C$[)r{Lxd7+n] :`3V-q!rEDKy:/|$~@$Zfo^j|y /Wn^');
define('LOGGED_IN_SALT',   '|DJR2nUH|1<6[?2R^fXmi{)/P^I9y{Wkm{cGl%=C;ZA1hE6to_]fy((T|>=d[h.#');
define('NONCE_SALT',       '&%g7B$m!2I }./~AS5@|*p+O!2#>EB;8?3-L6@<Zw^-x]dEQB%%^?<:c/?%vw}!U');

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
