<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'i9701646_hadz1' );

/** Database username */
define( 'DB_USER', 'i9701646_hadz1' );

/** Database password */
define( 'DB_PASSWORD', 'P.N471KHeMlghktdq0C58' );

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
define('AUTH_KEY',         'ewzphAe4eQnubexeIlC7DXfWbrDGwG1qCDGftcQIE1P1uutkibrkx2CwdLuU137f');
define('SECURE_AUTH_KEY',  'v9eCXf0rqJceG3xMFitPVnBQqxVZ4pH7xy4ZR91PwcNLV5OK20hNhGUKMgbjnGC2');
define('LOGGED_IN_KEY',    'wb9Vb0u5fBjlAU3wCVDZhi3u6jl02Ux16OfxUJMDzS7i2miVVtY6RIao66p1jYBp');
define('NONCE_KEY',        '1mFNsX1p71VU9iQGkkftynJf27PUR9mMh5aDOv9WkDEWNK7xKIuU7WOICC74A8CT');
define('AUTH_SALT',        'Of09JFuyaoPGkhKnwJRqYEbAlUHehdLb5DFMu5wrONS97CqQzSDM1rc0zYhik4g0');
define('SECURE_AUTH_SALT', '3Zjt2UQehy7GrGPIel1rBsUjOddit9EUOeEFOhc4wP501XqQRBLwpRbMxOB2cqJo');
define('LOGGED_IN_SALT',   'HXQjUID2pGSHM3s0nLyqy3Ui8siWPiXYWdOQcEZ690W3mIBb0yrtRxY15tU0haKD');
define('NONCE_SALT',       'GSR4URbCokhZjdpCIWUc6NKCtyJJZp1T5TUC6pbwrjsmkQ0IPo8OfB7mwTKKonqj');

/**
 * Other customizations.
 */
define('WP_TEMP_DIR',dirname(__FILE__).'/wp-content/uploads');


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
 */
$table_prefix = 'rr4d_';

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
