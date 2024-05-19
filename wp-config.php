<?php
define( 'WP_CACHE', true ); 
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
define('DB_NAME', "u726706882_sky");
/** MySQL database username */
define('DB_USER', "u726706882_sky");
/** MySQL database password */
define('DB_PASSWORD', "Ardata2023");
/** MySQL hostname */
define('DB_HOST', "localhost");
/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');
/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');
/**#@+
 * Authentication Unique Keys and Salts.
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 */
/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';
/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('FS_METHOD','direct');
define('WPLANG', '');
define('FS_CHMOD_DIR', (0775 & ~ umask()));
define('FS_CHMOD_FILE', (0664 & ~ umask()));
/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define( 'WP_DEBUG', false );

define( 'WP_SITEURL', 'https://skynetcomputer.id/' );
define( 'AUTH_KEY', '2FCEDt70jofdu43b2uTVKcWwy85SYunuTHadCKYS2c4a4K4IJfE7fejw6PBuDPuo' );
define( 'SECURE_AUTH_KEY', '2J4syRxa9oEzG5bMhImVKSveKjKjYybdsRgxSM1S6LpLoIefqgT9o5eIsVzoHxy7' );
define( 'LOGGED_IN_KEY', '6pG13bgHmmAneBKxUnonv4UyEJfcgFjoHJMufjDdg69GhXyzoRMouE8jEImX1Wzb' );
define( 'NONCE_KEY', 'LyyWfbqRdP2fVAPaGb06UUCsUTon4ATHfRzTe5f1XgJLEJJPHFGUFxeUL21YoRVf' );
define( 'AUTH_SALT', 'bmdb9NpMNCQEMQtyN47MvNsXyBBqjDgwnExvA8PqBuhxKRFwmRdaqzywdGQXVLwc' );
define( 'SECURE_AUTH_SALT', 'JbVeo2S64P3WcE6Dui812EVmX5JwXr6yLGcB09mhD8709JKC81pm2UnuJS2vIjHD' );
define( 'LOGGED_IN_SALT', 'DsocpFdjhTR7eXqc2tLIGjyyeqy40FxBwauLqbf7vN7t80eL4vGMu0hN1JGU7n1K' );
define( 'NONCE_SALT', 'EudNHws0vwrxLJHGpPzXhUQXPaFyuY1Vdv4At6U3uKevxuREwJXLBpx7aX3p4ADN' );
/* That's all, stop editing! Happy blogging. */
/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
        define('ABSPATH', dirname(__FILE__) . '/');
/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');