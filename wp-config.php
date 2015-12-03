<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'luminaterealestate');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'k80-+hg63cv,Ot1l oHZuwE!D,o+NV0}:V,t|km9,d@r.*m2@Y%FSNy+ytT6-DH>');
define('SECURE_AUTH_KEY',  '/iuz (-QF7M[pE(Hm.tY2tT|f=t8h549^ rRv|;A1>R>D-<Y~[+Ba/=28^fz~8i7');
define('LOGGED_IN_KEY',    '3;Xt0a(k.~7@ 1:Rcs|lEZ-c,u<^u1SDPnz 0Q|#o/f$Pw.8%Ii*vulZH7Kn?<5K');
define('NONCE_KEY',        'hI9^hMuU@H)obGU}<;IV}9rkr ULclslx-jat(BnI9hU}-inS+/h6AGEgi`<|ex&');
define('AUTH_SALT',        'm=)Sy:?j[fg<RA,)dvy]E4V}FX0ZdJGo%EkzDu+*t]iWqBsyCvSr*@K3<wgS~--?');
define('SECURE_AUTH_SALT', 't:k[k P9fihAkPJDH-|#({ZVtu#3R><=K+kZ^y410D=>%6A/%)cP3}j(-,V#C(:0');
define('LOGGED_IN_SALT',   'HXgOcq$h5@U}=xp#q46!1cVMt+k;)sZ,C3/U_|0}*O0tFM|j{c24{_Q-uXqm862O');
define('NONCE_SALT',       '+X4i0U|6_J(X@#N,0(P, >rzN9ENp#T-6++h9_~i>qth+U6VnP=6FKzc(Z|3;,I>');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
