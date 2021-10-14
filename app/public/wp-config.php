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

// ** MySQL settings - You can get this info from your web host ** //
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
define('AUTH_KEY',         'evEiV39z3roPbc0V32Y8aO5Z04Sm/UNqL+tH8A2FL1OlVppBCxlkq08/pF6uSUKfuMr4kId7SVQQfocXYpgFBQ==');
define('SECURE_AUTH_KEY',  'oCI6gBK+ZxuvfKWsMBKAtBfczxVkn5WU9h18Y3jByhsxmvyhUu2UJMZvjpWVc9qBQv9bI/Wt+SraM1ynIyV8MA==');
define('LOGGED_IN_KEY',    'jXGXY7A18vTEUqJBoHusS6o60fE/s4n3GLBX2vpTz+NfdqO9/v27uhPM1CG6H8yMcSrpF5FrbnUk7udCOeChKQ==');
define('NONCE_KEY',        'kllJ6XKMq4up6ssk6cSuB6ABBEWdDPEVewcd+i7uYEF/RL+/77AZpPYHEzwlyPRTbqKNXgP1n1wOQt15VdMI5w==');
define('AUTH_SALT',        'BLNptkiWG1Ltme6lPmEq2EVkDbtxTjZevPlHirQAKb3II/sdSf9rqHcUFRCdsRPuPH2psUZDYI6+kpq+U/fubw==');
define('SECURE_AUTH_SALT', 'qT7EBToUnenec/9PIVWMg5N9l2vclyldtffBQb1jFus3Ig1JGevL+2ojXQH0mpOWrcRQOpDsX/BFW7g6gInm3g==');
define('LOGGED_IN_SALT',   'S6g8bPTkrOn1n89Sy1Dkjll8CSfxgzXZI3tSHHJ8rgIWrfiApZIKcFNV97nwnMuSFer9Mf2jedC95CL/fGG6yA==');
define('NONCE_SALT',       '8k6FtbRjsLY+tstFendTfUiN7KfO+VdiA3Vr4hXtlNH9D53s1HPDN1eu1PxSZoJrwaz8LHGEd2Rvm886ZYsmag==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
