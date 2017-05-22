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
define('DB_NAME', 'wordpress');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'wordpress');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', 'admin');

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
define('AUTH_KEY',         'gbuW&4u!pac4vxm:uECbpk[j8(EAhT]$)DA67fdN.XACl9ZqP7yCFQ:H*sZ;[uS+');
define('SECURE_AUTH_KEY',  '!VcU4|7Yb+;7al(=}y+QVW]chFSa?FNth~*vuy_e;&R?=?6]rX&fvdUVKevR0J~J');
define('LOGGED_IN_KEY',    'bLl-$3P_Ak|+LaN`jT~=yaFz)CK1O{Zf `V&1((moG(JA(e=s!e>]E*(O$q|d,LB');
define('NONCE_KEY',        'Y7%FIofbE.ScDeN~*.]gdhXz[M?Mse%G?m}<&|]u=Myy!2&rb#7$yh^wK!YvoUDv');
define('AUTH_SALT',        'pra`C0o:01W9sup(<L{p3~VZnfe7(%A(yFA]*4E)I$V>nf2/ sKyff%|_{&Gf{rB');
define('SECURE_AUTH_SALT', '`Ij}Hf.zR|u=rHp?=EP]=%scOIO7.{3wVC_6i~;z4&yOGhF16geWR`@9b1^J>>Xm');
define('LOGGED_IN_SALT',   '`an-g}E#>*i1!Yx3QL6!%pQO54GoC?-{f.=~,*o%bD(2Oh614(! icVUHUwZxi05');
define('NONCE_SALT',       '2gG+m6M:-ne8}a,L`7kGvP`/+kUC:5~qV~hf@-&$!q+oC^H&*9<m}f[Awrn&eZmJ');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix  = 'WizCat_';

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

define('STATICPATH' , get_template_directory_uri() . '/static' );