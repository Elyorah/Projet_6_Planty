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
define('WP_CACHE', true);
define( 'WPCACHEHOME', 'C:\MAMP\htdocs\planty\wp-content\plugins\wp-super-cache/' );
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
define( 'AUTH_KEY',         'N6;gpMcbzP=IQZW]^_van}Sxl%]Sc=6_EJG0@P#DP>ZSA&<Wy)1pd plWmd3t`W-' );
define( 'SECURE_AUTH_KEY',  '*R1ghS1zo>,xn{JV2vT7ydFl5[po_1M(e`bNUhE|D;Y-he-jh-LNKe!#(R#oq2_F' );
define( 'LOGGED_IN_KEY',    'U.Ihn[&4/,I6y7T3{+Dr`c7jCeB2^h}^i+605c1FyGCB4nU(/P&[$}tU4GNdfd~t' );
define( 'NONCE_KEY',        'jR`-IZ,.qBv^!vV=;*E6E-5+h{jEOT(nEaJ@djmoUOLEv-,I#Fe* |WRVj!$QKXj' );
define( 'AUTH_SALT',        '`qiQ5gxqOr@Y%L8ewj|*z+{nmbR|3Qx*A5jFBY3`DKEUIH)Jt)&b}vrK*FHef+x#' );
define( 'SECURE_AUTH_SALT', '3|p|$<8Ei8|xjhpdWP$<oG}L#d;O<3<H1m7Uin~Gx [Q]p,uN,UB]}*MNFBm]#;j' );
define( 'LOGGED_IN_SALT',   'Bkyh+{~B]q$2}X. goiO*bYr.*yt7K<LVKD#%UHk; /O|h|(b?%X5qqgYnB4@b1n' );
define( 'NONCE_SALT',       'Ck%TCGL`kO1(Bq| ]y[)=)+QYsU n@]tuenBVU_*)N`ePIUkiR-o6KhL&?$T$(l[' );
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
