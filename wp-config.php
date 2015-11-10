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
define('DB_NAME', 'csricha1_wordpress2b0');

/** MySQL database username */
define('DB_USER', 'csricha1_word2b0');

/** MySQL database password */
define('DB_PASSWORD', 'GFiYWU7gqILr');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY', 'D)JHezk?bOR{+RKj|^LEvPeZq%y*fPmOeXk>slPtjG?CrD@=a*]Jk<WgFOY&(hNE_WrBu(tqRXiNAy&H@c*w-gJ^GtwEOGl&a)EvQo^Etg=AeZ(=NAky|L=eAmHgqjKU');
define('SECURE_AUTH_KEY', 'ViJ-DITIBAj[FR=<C_L*VRc;AkzjRDO@c)[g*{Xrl=E<&EDMw&&buDz*K]><cDdv_-]BDVcLdyj<{ANqA$}^Z?PC}-%&])H@pSbUybHX=^kIKk/]KnutofooZwX{oM[h');
define('LOGGED_IN_KEY', 'DVIo*IuO/nb){@LRaLz;RJAMP*&-tLGUO?SGr/)fqlVX[hBCUKVDM*@ubYw|_[r%M^MDP<pYd_VV_ebWw)TeYqkLHl_f}t|rswM=/PLMcUQy;^&PaXk^+--=T;AR!nmX');
define('NONCE_KEY', 'dn-fIi?wP|?)&gn</-!;/mE&QjJ-;]C%yTK^Qj<[H%*laU%C_;yA$frM$AW%Mgg}ZoP|kWV=JSNdsdN&xMMNUr^m!keQz<{RlzQ!=Z]S[nx%fc(z}[JD=qpV!Tx/nxHK');
define('AUTH_SALT', 'U>Y$WvlXqmPNo<f+vhZmSYUmEnHl|>[hSz}>sk&Rbz/)[u?lgsAIUZu|X>?^X-UyuReJtFkMl?]!hvq![rYdgI;Ja)+fP|{mPqmam+&CUbp}RMji]}[rzf-FuaaZg>?^');
define('SECURE_AUTH_SALT', '-F%t/}Ndd)/TzOFUOQcDftI_}^QH>eW[<UBAHMzmuC}^mbix]zWU_F$Imr%U$xRH&&w)Z@Dh[zJ]/JCu__ifVxZ*_X?zns>zqJgulm?Mozw]}V|(_KZxtDwt;m]p<;gV');
define('LOGGED_IN_SALT', 'lIZYIG]<aH%I-)@_)ZSgjXZcpXt{=AF+O=(!-lU]}rd@sFi})EKg^|txrv[kDxwJ>)tKs{laq)nEWK_AOPHShPy|@WVcs_E[kd!Pi_s[sXIU}zRt@tVqqn?Ed&wXPc(X');
define('NONCE_SALT', 'K%!^gRH$lztMihwI@N*gmS_F>;@_(&mPn>plGm%kQ<&HWqpci-m>bTGKwAbyBW@O-qHDOmSx[*;@ua<hHDD^RYdJrehoFIo+h[e?UXYYZ@+in-}?mKOn+dwtK_Da!@;P');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_yztm_';

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
