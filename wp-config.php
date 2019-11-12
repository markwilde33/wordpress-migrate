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

// ** MySQL settings ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'cI78wdEQN1G7cMZdyOvdQoxqIZ5uu6d1pTL0X4u8RQhJ5pIy11rYUQS0XJXab8iLntONwtJ2JroBeX/24H5PvQ==');
define('SECURE_AUTH_KEY',  'iyWhTFykmQmtKY1XwzAmCofPeDmeugXBYcGHlqDC5zSF1eIwUcCOnDMOE2CMsb/zRSVTeJP2jy0B7ows7TpyPQ==');
define('LOGGED_IN_KEY',    'DKbbiFinoyGbj8nzR45bZs09XyBnEFDnRIwCO/nGoTNaApUOPj7BkEXtC0qQhBV7srzVcux1A/CbQQGmG1wyqA==');
define('NONCE_KEY',        'j4Cu1Epa9CdoVLLrglOLbeUBnAVKlqgaHq8XUpAkdT53PZg4SFPmNE7lo33ObYIaI6T61kaqD4mIy2+3BRDo2w==');
define('AUTH_SALT',        'N+fEI0x151x5mRBVAPjTxuu3L68j5gcuj4GkqdX60Pw9Shr2GxYmXmhVTWPXd4BGEvU96amy+Td5HII3pTEnQA==');
define('SECURE_AUTH_SALT', 'jJfuTDi0PV9gXw2NqGEGsEbsc31BpdmAfEwMF1kC80rV5Odszn63H5NMHOLwoszHgD+6+hcOB/9wrSeeT7FyLA==');
define('LOGGED_IN_SALT',   'uq4cCYWs+C7DgnWrMisE30aVh/OI+l3mZB51vWVFFY2vwSJcivoTltkVoRmCVzB+sZi0NvB6E4gvdqnAkYYyrg==');
define('NONCE_SALT',       '4Y9ZUWY5TX57OEvXXXPqr67kv11C7zdjcK3uBEb9vIud9d/uKnv9ldxnwWa8x5+7u1SCTNIScljZ+YXEDkQmSA==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
