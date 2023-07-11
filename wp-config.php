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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'koukaki' );

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
define( 'AUTH_KEY',         '+zK>v& .gR6|}wR5!sGpP3_kC!fs-#{0mP|yuDI^oZ<w{N3|dfv$NRiI$mAYBuO ' );
define( 'SECURE_AUTH_KEY',  '@cyK@/c(uDZ+u`pwV|W@fn_i3_$6K{1I`UtbQx5{q,QTfl.g@{O0^yXFi2Qi|24;' );
define( 'LOGGED_IN_KEY',    'eC9a^(&=]!y$ZMt#11M;moQEvzOk3l)Z,8ND)=z9?7q0o(Mu8*&g|DoEhh8?quS,' );
define( 'NONCE_KEY',        'O8{Qtf<#GDi]Z7vPo/Hg5DBcG19[xt-lM0jZp/&1p4/Mb%ES4gs8lbL|po#I~~e5' );
define( 'AUTH_SALT',        'EN8eZ}WsB^9,31BvI)|u_j$+8|H~aO,sdGjs?2}r$Wk{CR)S6Xyki@{ f5pd:B&,' );
define( 'SECURE_AUTH_SALT', 'O`YI|bJ{_K+%HW=O056SOJ2JPp=sZEdYFEhw(B5hFOjHByhfMgxPw0@3]vrq8Naf' );
define( 'LOGGED_IN_SALT',   '3/yNQ{ARz}:~I9IDrz3Q45.)^&QzV#wwEI RXP;)Qjf=MK&{G!~i8kuG{pey=tBb' );
define( 'NONCE_SALT',       'B(l&nwMTH<~iX-QW/m@leEuMW#~_[@|EP/SnJ59#fz$I0D+QTnW2l^&c3@OR#gQ#' );
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
 * Il est fortemment recommandé que les développeurs d’extensions et
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
