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
define('AUTH_KEY',         '/CeaEs]nnRL_-1~pTMXef%{].38fZpV,Td6zkgI/;#nV8q!Jz!t uiGHo@F$%}V9');
define('SECURE_AUTH_KEY',  'X]WOn {iZ^;iZ(pci<0kF_{^!u 0g6F {W5$d1YbZ<W5;#|WjWK!WAS~`u7v_$4h');
define('LOGGED_IN_KEY',    '4js{{Q$Le$n1Y4=!mtQut-_*<|R_6m~rCbOGQ@Sq^ai^8rNF!NHaS~j)zSOY53#}');
define('NONCE_KEY',        'C$ik|NaGI@Furn|Fih.LjQzKiN_#z H=FSMC_OeCAQ+[Iq=H0.TL$%6%7tz0*+Hr');
define('AUTH_SALT',        '*ST,s1K^*x&n?`&ld@<5pz[qJayRaKqxHoZ}gc3{KsA[F@V>G3b+{An&y+;BEM]W');
define('SECURE_AUTH_SALT', 'kD>16QcbqZ-/PDpp[EJISf5j:z6gQ)6a3r7p`^^1k4W34i6ql<c4p*6_3r?LPRFQ');
define('LOGGED_IN_SALT',   'HP4Z,9 soPQcSk,35$sD=V[Ab].jA,p8z&D|Q6k;:,BrD@/gu<<z8+ ~j<ov)&v ');
define('NONCE_SALT',       'cC$ZxFp8ZZCsj#20vZJ(^NTZu.}Z5F]]1q89TQC^0iIK,npg@Is.4xbMIP8^4qJ9');

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
