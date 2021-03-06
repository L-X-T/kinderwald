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

/** Local vs Production */
if (strpos($_SERVER['HTTP_HOST'], 'kinderwald.local:8888') !== false) {
    define('WP_HOME', 'http://kinderwald.local:8888'); //local, e.g. 'http://PROJECT_NAME.local:8888'
    define('WP_SITEURL', WP_HOME . '/cms'); //subdir example: '/cms'

    define('WP_ALTERNATE_UPLOAD_URL', 'https://www.derkinderwald.at/cms/wp-content/uploads'); //local, e.g. 'http://PROJECT_NAME.dev.engarde-agency.com/cms/wp-content/uploads'

    define('WP_DEBUG', true);

    // ** MySQL settings - You can get this info from your web host ** //
    define('DB_NAME', 'kinderwald');
    define('DB_USER', 'root');
    define('DB_PASSWORD', 'root');
    define('DB_HOST', 'localhost');
    define('DB_CHARSET', 'utf8mb4');
    define('DB_COLLATE', '');
} else if (strpos($_SERVER['HTTP_HOST'], 'kinderwald.local') !== false) {
    define('WP_HOME', 'http://kinderwald.local'); //local, e.g. 'http://PROJECT_NAME.local:8888'
    define('WP_SITEURL', WP_HOME . '/cms'); //subdir example: '/cms'

    //define('WP_ALTERNATE_UPLOAD_URL', 'https://ortnerelectric.com/wp-content/uploads'); //local, e.g. 'http://PROJECT_NAME.dev.engarde-agency.com/cms/wp-content/uploads'

    define('WP_DEBUG', true);

    // ** MySQL settings - You can get this info from your web host ** //
    define('DB_NAME', 'kinderwald');
    define('DB_USER', 'root');
    define('DB_PASSWORD', '');
    define('DB_HOST', 'localhost');
    define('DB_CHARSET', 'utf8mb4');
    define('DB_COLLATE', '');
} else {
    define('FORCE_SSL_ADMIN', true);
	define('WP_CACHE', true);

    define('WP_HOME', 'https://www.derkinderwald.at'); //local, e.g. 'http://PROJECT_NAME.local:8888'
    define('WP_SITEURL', WP_HOME . '/cms'); //subdir example: '/cms'

    define('WP_DEBUG', false);

    // ** MySQL settings - You can get this info from your web host ** //
    define('DB_NAME', 'd0294ce4');
    define('DB_USER', 'd0294ce4');
    define('DB_PASSWORD', 'tmrVXxpQztwhC6mv');
    define('DB_HOST', 'localhost');
    define('DB_CHARSET', 'utf8mb4');
    define('DB_COLLATE', '');
}

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '[eIA}zn=!:l9Z8X&Iwgj!K;Lm+v9/+IUD/6-&6D*Czh]>MHBm?hVrB1CX&uNkx/H');
define('SECURE_AUTH_KEY',  'KsoTJDkx8)}RNghAGVN|c(9oViDtD9FA<E.~eY.8%,2Np(4ZYa342Nu[S[CoXO)8');
define('LOGGED_IN_KEY',    'BS]LgQqfWEUdJzsC_yIC@O/WMg|H4lg?v:1wIN: ^H$HIA8>W@v>@=T22+[(1Ui;');
define('NONCE_KEY',        'li;7Ua!l(}.`h$*Zl_XGK.6rNA]:V8WucR@WJ~KO#pm!]6,k#d,,|PjAYJ~X^]4$');
define('AUTH_SALT',        'm:Eik-YVal#vF%NI(f&mc2JfYe{k;P*<)3]<&y`}NQ7CF/Bd/_f_uc;_hcC2l7^t');
define('SECURE_AUTH_SALT', 'T{Z|vZSKrshXIB{lz[M:|MCz4_w|OAk@,&)#tMiVRy w:pb1M #UKUM{hE*~u1KV');
define('LOGGED_IN_SALT',   '].WqDVw%rHYm.Pn9*Kse!|bC#8Fs=2f}fp4$tmw+3K_WfZnVua*;%/:Wr_pUsNLe');
define('NONCE_SALT',       'qafQz@IKq=Z#3S2<bwzMwXTr1(( a><EF;086]}|-7LaZRm^KPD0xFOH=O^;e{B1');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_kiwa_';

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
