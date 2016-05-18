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
define('AUTH_KEY',         'y,;jvV4&yf6#XuMfB=vwnJ^d+@vg*_S>2IilTN/DBoI/4?Y9i}W#zJG *6(T^n$M');
define('SECURE_AUTH_KEY',  'S^eSLEsm]~{ifN73:wDC~pOin8W8qFmSo;dgq;G?3!3dY=$!}}:$+vjHj`:a(Sc!');
define('LOGGED_IN_KEY',    ';L}` iZBH7fDK*Ra@o3Z`Z|[3#7CC,U`2|oJKT)kgsgK[?&sr|(-A/&vz?f]&3D{');
define('NONCE_KEY',        'hl.`-dF)2Q+-]/Mra_l/Go~xEK|Yce06ndPu6eV_uhC^%)? }e,$)V0Ir!$PG%ba');
define('AUTH_SALT',        'v,pLWe%A+ wlsyoo&liqeF1{pEGS.<cQ/x+,Qx~2sv>H&={.TI<7L|OXwUm>_p)F');
define('SECURE_AUTH_SALT', ' `81W[3t GA&7dD.B(M=wylVkHGW[qhqnjyJyR#3<gjV.}/Va9^b_S39$zhPN?U[');
define('LOGGED_IN_SALT',   'V445zAp7@ HU*4D~B0a4CdK+19Yq/}%tr>zV?.#+lsGVC[WNd2zR):1EmaggBzU8');
define('NONCE_SALT',       '7>mpUqtx*r2r@9@EneYz}Qg7?3k +S_{`i;+!KOg:%s&<ny<~=A`rP9L.-]0_Fo+');

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
