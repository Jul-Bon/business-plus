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
define('DB_NAME', 'home-20');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '2018JulBon');

/** MySQL hostname */
define('DB_HOST', 'home-20');

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
define('AUTH_KEY',         '%y :A~c!sL|)e2:.?;p=;A]#;{HDLntHx-:(^cBY=<^&7(%S@&7CkJ}9Q/fhqwB#');
define('SECURE_AUTH_KEY',  '#z*87eRf4m5Fldfb>N)wjRO9|e788Yn`]dzdDA1Wmxssgp)d!7sIXB//ca{PVR47');
define('LOGGED_IN_KEY',    'D^hg|(7B@y3kD-`loc-I0P|$=EV2l},P^AtH%Fv:VAyFU#Iwgb>6Z?s4#]k>SyTO');
define('NONCE_KEY',        'w5W4r+2kfQ#vooK+ojg{F4+[z|HL:w@GPD9L{[bd[1IZt*1A@(i%{p4wHYbx6%NB');
define('AUTH_SALT',        '1{4`InYI6,eS0%|xUlOYr(HJKoi^G^M.eZSt6;jt@b6|mQ8W%<B49vP#{3-9W3?]');
define('SECURE_AUTH_SALT', 'kg64bG<h:W>GpW^`ql.rq|xj{GpCj,@)JL?~ $N02hjj+K%)y!D(M{gneoojD3uv');
define('LOGGED_IN_SALT',   '!:y8[Teb}.tl}34t]x?/4{!MDC5PBU68Iz(g~jxV%N#$coQ,JNWOkWEDg^e~W%20');
define('NONCE_SALT',       '?jDKoD;Aa_J(o7}%.Mn6,O:`uLg;wItEGLK(y#|L[Z+)NAzm9WoTAMwzGh5mp|el');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'h20b_';

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
