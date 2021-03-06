<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en « wp-config.php » et remplir les
 * valeurs.
 *
 * Ce fichier contient les réglages de configuration suivants :
 *
 * Réglages MySQL
 * Préfixe de table
 * Clés secrètes
 * Langue utilisée
 * ABSPATH
 *
 * @link https://fr.wordpress.org/support/article/editing-wp-config-php/.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'wordpress' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/**
 * Type de collation de la base de données.
 * N’y touchez que si vous savez ce que vous faites.
 */
define( 'DB_COLLATE', '' );

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clés secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'd(jPwGxn[:aLjxOwt2z&+,:+O!hE#zpn9eRq14>Qp/<LkAS1q }Hr1T/VMv*5zXr' );
define( 'SECURE_AUTH_KEY',  '8a9IKmz;9&ZR73yxn,97..~4?TOs<zFzR9~~6qPdEra%3(-!l^ZS.A:0@6T!LiQQ' );
define( 'LOGGED_IN_KEY',    'moIdVn.jWPm)3rCZ+C7/f~gW{9U#7b]XaY:h><9a6G%$F]AA,,y6|/m[ljhu}/4K' );
define( 'NONCE_KEY',        '00H&i^Ivx37SVu{}l)LFDzHrx:Zl=;k7E;Qhe|D/99V7qis.a~5TYdvNHYR>t(IZ' );
define( 'AUTH_SALT',        'V+RR~fGPyO4Q|X[Lz8*T}~Lst(>O=B~VwH{3H1Zlg**[})fP}EP9J;Fo]In]+1aB' );
define( 'SECURE_AUTH_SALT', 'JD8+))ufkg}k3UlU2aXV=e /AJ[Yt`{ *_KbEW}e7W3pgC9%hz>d4FK;Uu2Av3-d' );
define( 'LOGGED_IN_SALT',   '<46.(fOvEqhaqidhs}AnT-c[rRD4n4_8`K7WYHB$C*OWrPUuov#Y(&_cV{$6NPV8' );
define( 'NONCE_SALT',       ';$gk(mZX2 ]o)JmC`fs|6dp;tpL1Un#?tr(9$?a}vW!p~1Fuz=YA q+iz qNjZ]h' );
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
 * Il est fortement recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );


define( 'WP_ALLOW_MULTISITE', true );

define( 'MULTISITE', true );
define( 'SUBDOMAIN_INSTALL', false );
define( 'DOMAIN_CURRENT_SITE', 'localhost' );
define( 'PATH_CURRENT_SITE', '/wordpress/' );
define( 'SITE_ID_CURRENT_SITE', 1 );
define( 'BLOG_ID_CURRENT_SITE', 1 );

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( ! defined( 'ABSPATH' ) )
  define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once( ABSPATH . 'wp-settings.php' );


