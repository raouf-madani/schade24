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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */
 

@ini_set('upload_max_size' , '256M' );

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'raoufcvc_wp701' );

/** MySQL database username */
define( 'DB_USER', 'raoufcvc_wp701' );

/** MySQL database password */
define( 'DB_PASSWORD', '1).w)7e2-pi4RS(S' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'gystzjnvfh84usiwhvgycahgyasyan06axcwr58flvmv5ndaqdxd722shkpirxz1' );
define( 'SECURE_AUTH_KEY',  'k5zmuptnnh2ipiwzphg7oehyf7vhzaeu0m3rjyhuijmcluiuu2velgcctf1ydth4' );
define( 'LOGGED_IN_KEY',    'yx4wrtwsxrhcapdbs5oq06jjprq2i7kp6xufo1hfs7bxs6bkljnnzwansdjlffsl' );
define( 'NONCE_KEY',        'y0dk55ammxcb8ndftubf5gfoegdqim6yiuoqn9ba2kbvg5rqeifwt2jiihanfphr' );
define( 'AUTH_SALT',        'qptqga25rcu0ztsphosyocgyq795j8d6ptlkaww3inuwpwliy2bh1sb3oe1yrm3m' );
define( 'SECURE_AUTH_SALT', '51gk1kudoxrlk9jtblf4qsu1zkdish98os7eonw0zheobvpluvvhm7heielpis5t' );
define( 'LOGGED_IN_SALT',   'yfyzue1zqkzt7hdzpjhxqp9fa5bwlaekd2qzkiai3bszyi5r1jqy76ob8rw3bvku' );
define( 'NONCE_SALT',       'usg7dxbxliid2olmcg3l2xohaj3kjpf1jivipb0objnxoeldbrxihnzkcu40cwgk' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpdi_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define('WP_DEBUG', true);


/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
