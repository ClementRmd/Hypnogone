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
require_once(__DIR__ . '/builder/vendor/autoload.php');
(new \Dotenv\Dotenv(__DIR__.'/'))->load();
// $dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
// $dotenv->load();

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', $_ENV['DB_NAME'] );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', $_ENV['DB_USER'] );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', $_ENV['DB_PASSWORD'] );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', $_ENV['DB_HOST'] );

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
define( 'AUTH_KEY',         'Nv:_] 8<zk?AlikL|^B~3a0I1%T|Sjv&-(P_L{AaFM=t`bRNA PhpvP?)&7teXSZ' );
define( 'SECURE_AUTH_KEY',  '#jZzl!TrZ?[5wYG_2.S Mt52HF#r{hX_Mo:#J<;jSX-d^uz[j =Xz!rHICO3qr~#' );
define( 'LOGGED_IN_KEY',    '(qP<=RTxp]}a5O,,(^$]:!?F%Z>In(8A%by/>TTRM]IW?.f7-m]GPz>!6M[zP-m/' );
define( 'NONCE_KEY',        '1xXrK@Bk@{ebs{|FVNK}cFUBWnzzp/cVsU7Y=FQubgEN?(@k={^1hdL(76O[$|qq' );
define( 'AUTH_SALT',        'VCAzwH>=7D9op;1o$n50SWc+usAy^sVk#x:!Zx>x(POkb7^Qhi5LWi5?F.2AP|@]' );
define( 'SECURE_AUTH_SALT', 'k3)K0Yozg0H,#9s?M|g)BUHrGp2aoz%(@1][(r2AgdepOw{W)l6`sn6+>?c_jd]F' );
define( 'LOGGED_IN_SALT',   '?E6Yr^f%&R(@d/vU)5!KH83/}C?[597{$XDmm{fAkr<Iu|@97nMv>Tqb0R5{iie}' );
define( 'NONCE_SALT',       'erCh{0)]EcYLmF<(UJ==R6<Tv+< f^19w_=Q8WGcA1D[6^]*]kzJq}-QOaIIg$Qe' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = '12bb487v5wp_';

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
define('WP_CACHE', true);
// to force chmod file
define('FS_CHMOD_DIR', (0755 & ~ umask()));
define('FS_CHMOD_FILE', (0644 & ~ umask()));

// Désactiver l’Éditeur d'Extension et de Thème
define('DISALLOW_FILE_EDIT',true);

/**
 * server folder (change when you're going live)
 */
// $folder_serveur = PRODUCTION ? '' : '/' . basename(__DIR__);
$folder_serveur = $_ENV['ENVIRONMENT_PROD'] !== "true"
  ? 'localhost:8888/' . $_ENV['SERVER_PRE_PROD'] . '/'
  : '/' . $_ENV['SERVER_PROD'] . '/';

/**
 * wp-content folder
 */

$folder_content = 'resources';

$url = $_ENV['ENVIRONMENT_PROD'] !== "true"
  ? "http"
  : "https";

define( 'WP_CONTENT_DIR',   dirname(__FILE__) . '/' . $folder_content ); // Do not remove. Removing this line could break your site. Added by Security > Settings > Change Content Directory.
define( 'WP_CONTENT_URL',   $url . '://'.$folder_serveur . $folder_content ); // Do not remove. Removing this line could break your site. Added by Security > Settings > Change Content Directory.
define( 'WP_PLUGIN_DIR',    WP_CONTENT_DIR . '/' . 'p' );
define( 'WP_PLUGIN_URL',    WP_CONTENT_URL . '/' . 'p');
define( 'PLUGINDIR',        WP_CONTENT_DIR . '/' . 'p' );
define( 'WPMU_PLUGIN_DIR',  WP_CONTENT_DIR . '/' . 'mu-p' );
define( 'WPMU_PLUGIN_URL',  WP_CONTENT_URL . '/' . 'mu-p');

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');