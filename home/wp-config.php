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
define('DB_NAME', 'yannulic_ss_dbnamed2e');

/** MySQL database username */
define('DB_USER', 'yannulic_ss_dd2e');

/** MySQL database password */
define('DB_PASSWORD', 'i2XT5fVplcbc');

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
define('AUTH_KEY', 'C<_tyan;=Xj|GrVO@nw&L^>K*G|kxl&n=&ck{xf%-g]$+Ur><SGgGG|QN%dbHG</%Rv/FSykNAERmBfrOoeZ??DTVuxnQN?}i!/as]yimrqusUuGbJBaF_vlbSAInT+^');
define('SECURE_AUTH_KEY', 'VSCG+kjsOfCqzvjunySq+H}o(fVI?iLZw-Hvq=_wEU{mXwlu?[HfvlqUwd>iabtOZG+<vb/p)j<|yKAYt*qEe{{j)aQC>{F^S*aLw!edjhIqz$YX?[LKR>cm<Y]GKH(D');
define('LOGGED_IN_KEY', '!%!piSS$|)[BECYNzeKa/UiBstgXuZ?YeWw}p|ghU&;&!gM|wF@tDS>YW&SH)/C*Gesz@T/k|vvZOM@vQrlrjyO+f]u{mX)>/gOHAunF_(t-YotAwhpX@W%(-r%p/_Z@');
define('NONCE_KEY', 'sO!|tJTe%JYjDoy(^>@nH^kfP]CCD=U?n@EqwfaSk?&R@[{eoR(E?W!peDwVud?P(gRAG_jLC%<Dflcgz;wRv&[$vLgI&{-ngT_Gz*aR^;|tzl&K&op*XbcM{v>fElcT');
define('AUTH_SALT', '%mQdeN=[GC)ljM<pAKy=<mTp{W+SqCZWMPYMz}gMqa/)/|?yRTJcJNKF-An]V%M?MJ<MKWPJ}wkP@Vxa*ni+>T[eFA;tOT<|WpAwOk$vLT^&ppMaAroR}xm+IEE-+UgI');
define('SECURE_AUTH_SALT', 'pcI|Ac;c]Exl=YZ+EmGF!oN}{jmP^tXKmXq[e%a&PZd>fm+d?Mrw{di%py%kQJ[YDHh;$fMSaEKp-GmXBKGkf]=Qdo]V-)PglJgPZy)ynLqhC!sKd;xwxB/HcHjRnRTi');
define('LOGGED_IN_SALT', 'Vhz|i)-AmicXp}UK%h>%nVtwG<s;o=GJkDoaPDn>bdmkMc!ztO%qbKpyRI(b/TwXy-JvetiJ>}%ZHnBz)&xagwEZVz&hKn[_bkYjkhX|P}pDsE@|tpPrdUoZhQeiNSAF');
define('NONCE_SALT', '?YZgzINVR{qcG[|BTfqECL@c^EUQ[bHIJ}]QfGbq)mL%kK_Rt$>D_xZ|Un?|<{X_jwNpp?jV<moEu?VyPM=c[t+;vi&yXdj?ERj-LGM^F<Lm[J+orN{+FHQQT}q$/Wu|');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_cftl_';

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
