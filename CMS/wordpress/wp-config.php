<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link http://codex.wordpress.org/fr:Modifier_wp-config.php Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'dev3_wp_codefree' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', 'root' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Type de collation de la base de données.
  * N’y touchez que si vous savez ce que vous faites.
  */
define('DB_COLLATE', '');

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '|k=K<0I]z5#>{ajYYkZb7:>u~a^8tEoyh(gBr -r*2Z=],Q+BtC(1}zjwCW/M%h.' );
define( 'SECURE_AUTH_KEY',  '/34RS89}Gr/2U*Pu{y72!LF.Y^wF7&zN,;-*y=jmg+<Vp17iXJ2M+AF8Wy3FiB,m' );
define( 'LOGGED_IN_KEY',    '1>+S5>UF^E.s[ZP>D>=Gf! m[:(l7<;3JsPi}6N`g9QIRz8)]PHhg]Lp(g2@m_<O' );
define( 'NONCE_KEY',        '-VG<}iDrcd+Qu#|j}KCJDdT|;$><}]MEA.{_}1b_~6<%-wT*A7.uL)(5@g7WN}t<' );
define( 'AUTH_SALT',        '_So)/,SL,vgAWskuU?tm)+2+[!J~gkK0U?_ZOTHSys(,iznFH=@K!c +cRco|0%<' );
define( 'SECURE_AUTH_SALT', 'V?8R.PpdBf/T,CwI6!-ob}38r>Vy<{w#z-c<?)buQf?6om#4z~}#?Jv10M~GdYV$' );
define( 'LOGGED_IN_SALT',   'G6NnzOjs7~DWe$KQ%68G9!*a*,N|7/90#jmV>_#K[.iUVhD;SY6]7$-%XV`ok&Am' );
define( 'NONCE_SALT',       'nstPw!x?MEgwBE;{@.2bUyaIwmqV AoK[:EyCBi2c.Z{0h/-/f(TnTVt&^wO1+sf' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'wp_';

/**
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortemment recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
