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
define('DB_NAME', 'mariekathline-website');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'root');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', 'root');

/** Adresse de l’hébergement MySQL. */
define('DB_HOST', 'localhost');

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         'djHRWQ^SuxT-=WZ3~G.U*|?w?uSHZLdFi@Pa@lt%l2u6 * Vc71*5e+6ja`B:w$>');
define('SECURE_AUTH_KEY',  'H(2aiiQ^jA##/cHr}[!<{O-+?Pk81%*m.6PuHh8fBW&z^Jq7+>aLcU3Z^+|;W<f>');
define('LOGGED_IN_KEY',    '7WfI&w>wn(IhVIAC*@lW?*9g>K3*cx7m 0li<o8D<d(U&G2*@10C~ms>c&$z3&<H');
define('NONCE_KEY',        'K`fG*[ Qk}#Z&0WD3!si@zF3znif(. XH-Or!<?~P$ d$5k(?tK0|+P.`izJ:*J!');
define('AUTH_SALT',        '8;``8$qXpuuzd{507M1t}W,gyu54>>`Y=IF2cnqifn/F)tp,y E3Wm7(2h(xTvoh');
define('SECURE_AUTH_SALT', 'TFr1l3TUAdKOe>r=>v>>[>mGAp};3<|^vV}`1^&4AaV:,nAA|V2{3#qYAM6[eg,@');
define('LOGGED_IN_SALT',   'F1{v/:>_9MQC)wV*l|X:E7I4,u-ynqr.wjA[t.0ZQVM(J@<$H%WS`AO7(GvX4.BF');
define('NONCE_SALT',       '^bwQ=%a~!enKC8<ryMB((/0Uay[+<TZ3/wefZ+_^-qlBJDf*d.Nr H#2N.ppLPSN');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix  = 'mks_';

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

/* C’est tout, ne touchez pas à ce qui suit ! */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');