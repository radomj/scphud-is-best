<?php

/** Enable W3 Total Cache */

define('WP_CACHE', true); // Added by W3 Total Cache




/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'b17_33303565_wp669' );

/** Database username */
define( 'DB_USER', '33303565_2' );

/** Database password */
define( 'DB_PASSWORD', 'z,=njvokpitf,g0nv0yomiN' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'rakgmui1w9hboqvpfsluzb7pv8c5jrgm60argyldvbtcbcxxzxmyavakbij9zijw' );
define( 'SECURE_AUTH_KEY',  'alpokpmcql08podk2waghaiktyksjd3tw2cvukrurjrgmkbumvhwygwtu0wnkgp9' );
define( 'LOGGED_IN_KEY',    'esjmajui6rs1ulrzjrqszxyo3gsfia9ee02vgpwtdxqye1hphwb2p6voiqrgb2vf' );
define( 'NONCE_KEY',        'bz1pnf2yql5091csdatbzcsvbe1kuez0bp6s6osw2lzo9hztrp8vi3p8k3q2fqlb' );
define( 'AUTH_SALT',        'jpttwx8pwe2pjc10wam8pxxctq0uz2jt3jojhpopnyynvriswhnxzowagkrfxo0f' );
define( 'SECURE_AUTH_SALT', 'ha3wf4gj8qnpyui5k4vcbrfswbkzyggv2faowds98mkiitaduf6awxhjtietuhpr' );
define( 'LOGGED_IN_SALT',   '0r0vk2ufmlxaib8jowfwhwgm3cz1gkynoljdifpr3l7txfe2ww1i7dzuger84tvs' );
define( 'NONCE_SALT',       'ethyj3e0q3whx7dcbzo3q4cibjvee1inasskkhlgwyezdx8uah2x7rhqklvw5o0e' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpr4_';

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
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
