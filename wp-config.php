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
define('WP_CACHE', true);
define( 'WPCACHEHOME', 'C:\MAMP\htdocs\Simpl_Vintage\wp-content\plugins\wp-super-cache/' );
define('DB_NAME', 'simpl_vintage');

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
define('AUTH_KEY',         '-=(7!*C{9#`8.TN9B14cNH902@LZ455/bE:EUe(Ko+H5b+Iej>KZ.{N4kC8H?Oro');
define('SECURE_AUTH_KEY',  'P dZ}E=fZ>DvjDA+Z7I!CM/~[Rz7^atmb-L>aMGN<Jb4t=<(~r@|Q`#dU&>gA9d6');
define('LOGGED_IN_KEY',    '$E?(AIw+>rZ&iMXT h)NgE|F bL)32M1]9ZmvQS{6j^)(>w%$~H+B,6GKC8;=l.!');
define('NONCE_KEY',        '%X/d9cYwz%YNz=ML;$TZx1l0hvPXAiFHSa/+l)s5!H>Q6^j$.=ImZ%DZloFEi T^');
define('AUTH_SALT',        '%pz!Ls>Y^+teGDqy`$[MD*e>*=2;/Boj.:%>fvz1X{_yI/!}Jgu)u>$:WkSzwTs#');
define('SECURE_AUTH_SALT', 'RSX%u8 TZe@MMq?)KIM6[GLa(Q4*e!X5%rZTKoA,_z.|roz+mB<LO#:/FdiR1b_J');
define('LOGGED_IN_SALT',   'w=3@:>J!B3q$e16!+j%lC)9pJju 7 ?>E%aAaeX2I>[y+W7.K$6 u8Nr(d}7%#S0');
define('NONCE_SALT',       'S^[ _9W$eHZ@|yJrF8cX17P&|d[2k+j.*TdawqfaQ<<GAd9kwV`vdpHRS_&g|Rhp');
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
if (!defined('ABSPATH'))
  define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');

@ini_set('upload_max_filesize', '350M');
@ini_set('post_max_size', '350M');
@ini_set('memory_limit', '350M');
@ini_set('max_execution_time', '0');
@ini_set('max_input_time', '300');
