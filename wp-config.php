<?php
define('WP_AUTO_UPDATE_CORE', 'minor');// This setting is required to make sure that WordPress updates can be properly managed in WordPress Toolkit. Remove this line if this WordPress website is not managed by WordPress Toolkit anymore.
define('CONCATENATE_SCRIPTS', false);
define('DISALLOW_FILE_EDIT', true);
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
define( 'DB_NAME', 'sis86607_na' );

/** MySQL database username */
define( 'DB_USER', 'sis86607_nana' );

/** MySQL database password */
define( 'DB_PASSWORD', 'z50Dh5f&' );

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
define( 'AUTH_KEY',          'M{v{n=eXRZW}&l~~,B~I_lMv<Rvh<*58#5}a8INFeJk1L;)YJ&6W4cSe%+Xcui-S' );
define( 'SECURE_AUTH_KEY',   'MT,/X_MaVqMS4p%Ag2z9n!1>Hb+Weaj+>8x!QQb4q|lh hQ<ER1bnH)tfd|eQ3m{' );
define( 'LOGGED_IN_KEY',     '8_5EN<|kBWto(x0`_8Q &XE<$(=Uid?g5u$Ty4_0QYifu3)S>LJ=|ayaT3`%^OOK' );
define( 'NONCE_KEY',         'e_3CFZh8@,e lg+uME]ZWMTPAY,b2s53KI[l^D!,AfB[|/Mk ogcqAfecPPN5h6X' );
define( 'AUTH_SALT',         '&,kW6s^^CkG#2UOybz/&)Lrq,5kFaOw|%+eigxoa5Oi1g9D $Mc+f!PVdX*!nUZJ' );
define( 'SECURE_AUTH_SALT',  '5*Vwp&EP}IFj_V[]*:;RvUDEG)}41`t25lj2DTwQ0jkP0-*v<NCppUai^uxjtQ0:' );
define( 'LOGGED_IN_SALT',    '%k@>aUGG_bFN je>+eXM@] LlJJ<cys[+<|+D<Z` I0v>2.D{uNdcv=-IVQV?T_3' );
define( 'NONCE_SALT',        'Pa7x3I)+Nx=)EW(}Q2|A>,OQE! &@HLO1tf(@QO(o]?<.Q#J?u]~a^-$t0VT:&dt' );
define( 'WP_CACHE_KEY_SALT', 'OhTiZ[kN~>tt<.g7xd[+2i:q X:qkJ]pN?+hoc,!*21}OO0iebQNZk|B19gzVQ;e' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'MZo8eMEj3_';




/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
