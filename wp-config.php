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
define('DB_NAME', 'oschoolshop');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'root');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'j&L<^w?5o-NZwpPQ[o5?YV,k;;r8bgr:=}=gvV6tcac&a#qw+5[(@~(M{;p?XXJy');
define('SECURE_AUTH_KEY',  'sdG,+iUj+Z8*[1~:Wcks/W>>U`jBf2`jDVbs2D..|,3CYb!%EvOw;L9$r5iz-+:@');
define('LOGGED_IN_KEY',    '|,i*NpyDH9!8Ls@Tr%-^||cQ{^5Bxa99ErJA!c/~yBo(a.-3$b^rnH<qFpe=|Nn^');
define('NONCE_KEY',        'bD)|8&(qbZSvKi-aq,gE)8K0j!Zx7~VEILO,+O9Pq?:,%/O*5, D;3>xwsFg~,&-');
define('AUTH_SALT',        'irlV/MZ+O>9HGn4U eR=@#$ZX?AXWtfx3g<~)Ygjk(UzuB oeN#[kpCvwj~OB t~');
define('SECURE_AUTH_SALT', '3$B)egE>CBAVKZs~(z$HRV~]6tC_3E.Nf5b#wTfOr;TZaLH8ys(Q<^bJlUV,V4(E');
define('LOGGED_IN_SALT',   'LKwR,|Y:?ke$OQ:uo<Q>x6Gm$<)`ia^iUyCI--MnVRSq7#N?T&Z#* _w q;[1d_0');
define('NONCE_SALT',       'Jz. eYViZ&mvtI@I]m;~&}fiZj:A2xOk{Ow(noJ71JaLKjQto6bP/2kb<#|ARy#t');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix  = 'wp_';

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