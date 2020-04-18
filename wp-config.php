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
define( 'DB_NAME', "c1_sylvia" );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', "c1e2w" );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', "Kestufe12" );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', "localhost" );

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
define( 'AUTH_KEY',         'u #N>yoMvgKSD~9R.~,E5^JjC^KRy[][dD;Us,)|qUL{Wd;o8^_[@QU<6+H^=HbC' );
define( 'SECURE_AUTH_KEY',  'TyrWu<G}GR}y;h vv!aIE~Ec-W8D1Z0$>Ng=@84_A-E&>NLERz&,~kf-Bz41(uoG' );
define( 'LOGGED_IN_KEY',    '&9{GcJEwLD3:MRByBi;{-rV!!}tc^Hg}Df2*gXth]KYHM#V4m^?K:rB2/BL5AYK+' );
define( 'NONCE_KEY',        '*-GUW(Z?2tR[LFybrrL_}zCoN?93* GaQ1^K$hDF~WE#q57Vr E}At>v#}<F/Dj|' );
define( 'AUTH_SALT',        '5~Mh75}s_1t-~+~kG?{O$tY.kGkT6`HVj54ki~p/0RZ%pjxv^FIJaERVqkLEEz0@' );
define( 'SECURE_AUTH_SALT', '@SUE$[8f#@9_9mIe7h,%vXq+g]IJBVdV!*?,H>TFjgYaS}-)6I?;]PO>cFp /7PL' );
define( 'LOGGED_IN_SALT',   'yfU`gG/8G,GIZ{8|b.$l$i-yIq@j.u.m=/x>;YY#Db36D!tt=_]rR+An7?b}kG}g' );
define( 'NONCE_SALT',       'OzB::MRqQj29^w&wkT?aC9^BAGfF<o}(Lt-Jm4B |XBHks~V~!c/~{F{Ij3U*%`p' );
// Disable the Plugin and Theme Editor
  define( 'DISALLOW_FILE_EDIT', true );
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
define('WP_DEBUG', true);

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
