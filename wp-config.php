<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link https://fr.wordpress.org/support/article/editing-wp-config-php/ Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @link https://fr.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'planty' );

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
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clés secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'D,50amGxm[v$}.=i)y@x3757_t,258<Vxp_ja}^P#Jn}Zsl29I3EQkR/:{65$U}L' );
define( 'SECURE_AUTH_KEY',  'ZatO_Hq.vMz!avDLMp&t-:5>&BLANh6~=0 u$>BQZLj)2vTL}I$x0?9g25B^(Htm' );
define( 'LOGGED_IN_KEY',    'C.s`!-|oXl=7Zq3!b<67J|rY7sAV]_Rl!886mf9d<=s1 _[!V?n!aH|V&A#?[jc ' );
define( 'NONCE_KEY',        'G^W@YWCU{B0xvUsooWz8V`?u;+6S8xkdMkly>AAT0xZM+G ,4qoSlS*?aLe6OW$i' );
define( 'AUTH_SALT',        'RXtW|LXI%DFp`!olF_@gB[ZP0?rYZVxH^~:O:c$Gc31FBP&goP6%-aA_hb`H^4)8' );
define( 'SECURE_AUTH_SALT', '$rc>[,$CL6va3K}m:n7]/$(Qe.2|KzBIJ*@{gca|TW]Ac Z]Kbxs7J/5`7FXcgM=' );
define( 'LOGGED_IN_SALT',   '`g;e{Z3tZa9ZORX:?#XN$~@{8F>s(8fYV7R:G>QE2a*rkGL,Sv`cd,`7~:KgIXcX' );
define( 'NONCE_SALT',       '&2pG142cBL^;{xElr%vLd+-5Za=W;&wQupbd<m:d|@6;kW[UM,Wlagk$?SPuh]o8' );
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
 * Pour les développeurs et développeuses : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortement recommandé que les développeurs et développeuses d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur la documentation.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
