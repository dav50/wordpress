<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clefs secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur 
 * {@link http://codex.wordpress.org/fr:Modifier_wp-config.php Modifier
 * wp-config.php}. C'est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d'installation. Vous n'avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define('DB_NAME', 'wordpress_4ECITV');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'root');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', 'root');

/** Adresse de l'hébergement MySQL. */
define('DB_HOST', 'localhost');

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define('DB_CHARSET', 'utf8');

/** Type de collation de la base de données. 
  * N'y touchez que si vous savez ce que vous faites. 
  */
define('DB_COLLATE', '');

/**#@+
 * Clefs uniques d'authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant 
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n'importe quel moment, afin d'invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'KjHAmX2e2&N~)d2bs;bOJ+L3.L1q|rh;.zRmvFa9gtJXD_E=DhECUM&U9z@x_xJs');
define('SECURE_AUTH_KEY',  '[lR0t&zpuFtl|UK;txO9;z[`rbB71rI4)!%2/HSaB)sNdXqL`o-ArLr~|h&6C|D=');
define('LOGGED_IN_KEY',    '8_>%In8,q )iu*@`RO*Vg!Ve<`h+oP2:z(i})NRtY#tI?GZlNy^FN^i~* ]73`>d');
define('NONCE_KEY',        'UUN2z7LX4?:kLf/:q??r/[-&yt[,xSr:l$wdK`9NKyGZx $D}l0(cXG%EsMdSE]p');
define('AUTH_SALT',        '+XF^i@<o B9+hC^OEM]r[u&^mA9RXX2;kxb7+;`oE=bL({K77en=^Qf!$D[,KiwL');
define('SECURE_AUTH_SALT', '<SGC]r_^lT4dNP88T6ftb;HPcT{R1f1mB9BK%c08Itjrji-By#o&$?hZ4R|xDM3h');
define('LOGGED_IN_SALT',   ' {2mV+KI-~pY!rp-{O;:PvmH;-ElUPPDc5Q$`]Tg`Tk>2cP5`qkRq&=&t<w%r+,4');
define('NONCE_SALT',       'F(aanR95]B9#Ni21Xv!;3FDSt:)|*lK:fFi{Uj38F~)NzSO~U.<kQ>%+q2{ 6) U');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique. 
 * N'utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés!
 */
$table_prefix  = 'wp_';

/** 
 * Pour les développeurs : le mode deboguage de WordPress.
 * 
 * En passant la valeur suivante à "true", vous activez l'affichage des
 * notifications d'erreurs pendant votre essais.
 * Il est fortemment recommandé que les développeurs d'extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de 
 * développement.
 */ 
define('WP_DEBUG', false); 

/* C'est tout, ne touchez pas à ce qui suit ! Bon blogging ! */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');