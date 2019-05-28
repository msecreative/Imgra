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
define( 'DB_NAME', 'imgra' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'HuBJBUl6%iDm%LTEv_(K*+_;^EAEw5y$T&Ye<14lOpn<7@$]gU]k [#c34<hceI,' );
define( 'SECURE_AUTH_KEY',  'YGFNtfwiK#}@E]1.YQa};KS^^>yfI5jx}- )z<@bEk!J-d[Yv#b7b3Hu-Uo$X}5D' );
define( 'LOGGED_IN_KEY',    '$NwvoIcg[7Oo{&lH}9Xy_Wmtv=thu7ESjxh3ED@8Nq!|V_-$P`lW]IRv*mpgy$i+' );
define( 'NONCE_KEY',        ',^`+TjK5cS0MCspv@`CMDqw6Ab&-Ep?6-4be[+72gEySY3?IE|OI{/Wu/UGI7v}Y' );
define( 'AUTH_SALT',        'UCgxGa0{F$4A7u~%_sT-8!DIbk~<H;Ebp J0lDGj]y4SX0&W*sh)8P,oX`gLAI 2' );
define( 'SECURE_AUTH_SALT', '&|tL~PFbMgn||(0{OeywRTQn.sk/*ayF<SB|*TsCfW=eH&tPsKS:h(l1m?>aXz_L' );
define( 'LOGGED_IN_SALT',   ']+mwm3D7.*b<9g>. wliA$s{GwugE>73YYp,})!<zpyQuUd~^VHeERgksz>&-7|j' );
define( 'NONCE_SALT',       'it0_g|!%C@U|#ED#_h@K>,?`iU06XDr0x2M&_qZL|J@bND4_t.3/!L05UBEpnE1_' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_im';

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
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
