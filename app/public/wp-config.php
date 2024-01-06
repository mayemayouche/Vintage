<?php
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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define('AUTH_KEY',         'b/jC8DQRU6VBK2THogl2hHQIhh9Copd9aCWQiE+M8gZtIHksLsHCYeUkwGvPZsHFM6JDuvwfDwkSvV6GM0ttIg==');
define('SECURE_AUTH_KEY',  'd0lXZKCLVbaTuUDmhhRMgeMSe2EBu3SV7f1bHLO5di0UyAz2fkoo45jFgDUx5CE024DmYWtK1S7t4cb8neuHbQ==');
define('LOGGED_IN_KEY',    'SZvvDu+haiLSs7pgBI7b/vAhTSRxC9LsSzCHBtnyba5VDWn348lqmX4Z6XUMPBnD6tHJltJ8rXJ5utCUDMOlog==');
define('NONCE_KEY',        'C8zJotGaALdUXdbq/iDhnzATAVFBITy2IAxEocBvvSxT4xwD7dCH75Um09FDba2mPJCteU1Jl1IpOK5jlOmIGg==');
define('AUTH_SALT',        'AMAWwgwn5K+a2vygyKpM3zXUG9IM9SkmKcN5HCeiRx/Q3mLppn1BRdPexGpk1eKUK+GNV1PZjzadFbS+0lncuA==');
define('SECURE_AUTH_SALT', '2ptKs47uIL+5EbpGhAyCI6ivjCrGWWohjRfVSauIL87qCzMJGW1xf1mDp2bQbnHb+2QbwhlNvCRsd9u2Yw3ivA==');
define('LOGGED_IN_SALT',   'DcbNzHmnxqZ1K8FjOzmrJ3Sid8Nk8/Y/BJSVlKBcNq21U+M7Jz5dIXtMKjyJM5nJazRmLhmJHrFhM+u6FUU5oA==');
define('NONCE_SALT',       'ROMTPKRokGeSKtPwuIsPkVl8IoQrjOhCXSi2Plv1sUehvpVyxo/6ef/7G1Q1u9yLqGRmUn4hvgdk9RfLqC95CA==');


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
