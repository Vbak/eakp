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
define('DB_NAME', 'eakpgr67_DEVeakp');

/** MySQL database username */
define('DB_USER', 'eakpgr67_DEVeakp');

/** MySQL database password */
define('DB_PASSWORD', 'rNZ&983Qe*i285@S');

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
define('AUTH_KEY',         '.64,%7k*0a%AC;5@$Ul5o]<eDxK_T_Bsl?E.F*Nmu={uEo?at!b]fZk[b-tH5r[l');
define('SECURE_AUTH_KEY',  'C:5[B3H;#E:2si*fqkw1fa<#!5xh%eggiZU_T`.HHV.DYy{*c%A#KeeNqNvY#Se/');
define('LOGGED_IN_KEY',    'sx;) ? plMV0+HhaO#m~.Ix`:evVp5/LQ!vuuLT@?8%;,;(q)8`K,la~LN{@{KnW');
define('NONCE_KEY',        '31mmQrNIVpsw!vr4 &ck[%D{{%4X>A(IC%zoKtB4JHC4~#cs6MI2try8 3E2+>]Y');
define('AUTH_SALT',        ':9>wI&N;9Q)[Jg[Ci]}h|QSRyUElj1Tmty|Y#9bNx!P%@3Ca3wQL=Ze9qw99Be,N');
define('SECURE_AUTH_SALT', ']B}2:x9s-/@93;gdysO.!ctpBU&NgosqNtI:Kol:B4J#`_*0x}FQC7vXk5rsEj/z');
define('LOGGED_IN_SALT',   'wg8r5]*eojcG6^TP2/q@z*R_j#!q*d-|kSJ>FBu^CbkMh=g5TPtYa1/&=#T;|v.}');
define('NONCE_SALT',       '+LIKB@:/&ow=11T^dIgdpG(Y.]B!$/CAe*YR$prLk+6(,4yXz}Vvkb6(Ejqq@V&L');

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
