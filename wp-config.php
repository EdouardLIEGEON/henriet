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
define( 'DB_NAME', 'wp_henriet' );

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
define( 'AUTH_KEY',         '5ISTJGvE/Z.>M;}AGCCrNdF4W_bXp736>~/+z%hI/Y{%d$7c_t[[..%7)V(::CBB' );
define( 'SECURE_AUTH_KEY',  '5}g2mai%VSL{8.?It:#.#t=Gvx#7@%DrlT!%5_]YdbC]0$+arZiEB^2=vh?x+p8J' );
define( 'LOGGED_IN_KEY',    '&N#EZIKcUE<`3PzABmI>V(D(^zk})RtDl>m3|_3!0Y5*m0LJYJsPG!IL RwE8-Oa' );
define( 'NONCE_KEY',        'Fnd8WsvJ!s2mjD>9+Pe` GJB3Yy60<Y?R*^j6L~+^+wz|{ZMlMay|1ns$6*]pPwY' );
define( 'AUTH_SALT',        'D/&E<8%p:@d!<t]XYr)5#@(D9)Q>_t0ZX#! W,BvXJ)8M.kqDe4[2ph{6xGUuoL&' );
define( 'SECURE_AUTH_SALT', '/~o&wnZTo*hg%2o:,^9;P*^AM;4e#gKXam?f]T3N;rB1E+S%$F6E214ie[u_|`!g' );
define( 'LOGGED_IN_SALT',   'BYKEC(XnV~W$ai8Qv3j+W9[e.$d14T5^~ZaeK?2?PDk&A9|:+.O&0_wCdL,JS$Xs' );
define( 'NONCE_SALT',       'zTHi_o.>2HYLEL<~t.7Xw*BmKf)Vxw%+Av[GeC4L:e`DPF&Hs&1j,UQZzFqVSN>!' );
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

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( ! defined( 'ABSPATH' ) )
  define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once( ABSPATH . 'wp-settings.php' );
