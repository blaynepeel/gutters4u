<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'gutters4u_wp');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

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
define('AUTH_KEY',         '7E<>}]e)C?A{i+vS6l]>&9yt9uZHB%7.^E]-G6,jYzwJ|+V_j?e_4BWo1+&tLt5N');
define('SECURE_AUTH_KEY',  'J,|_Xo(d/uUyhAc%1T`+L1Ywpi+I^~_~`K(z.Q)5vtWpQ5|N 1-DBF;P0Au15(k}');
define('LOGGED_IN_KEY',    'eKK..p|@S y#Lpv;_7O*ctH-iR{-%2^a5xQi33Dl;bgN1NM,?nFcxglsle|DwXnV');
define('NONCE_KEY',        '{+2H::9Ux&A5e[7a_5-RoFFz>npDJM[0N+b<hB7ymD6/$:P}kvy*hY8y S!ccuh/');
define('AUTH_SALT',        '7snq.>K`]0jHy=?,&3tQpSvvp[48L:J-!V(C:_b+HjGs&Rg!%LtxR3Z(UlT+C-IO');
define('SECURE_AUTH_SALT', '3=@V <MDBKk&>X-m URl[u]D5.]7Z]9BO)M@e/|09XD&+A)f-}Oo^-8*:arD<;uh');
define('LOGGED_IN_SALT',   'iM5@.oKNFAC?M:g$6k8Tu/bZmNv2Qac.0ZwDG*->S.)!o%|P<YkOrR%o6bdoruRc');
define('NONCE_SALT',       ')POXB+p{QSSq6v-e ULf{?WnK|u%_,y!mMrV|%_6XJpBI:dAU]v|[}s`>1Hcp|Vl');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
