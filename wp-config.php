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
define( 'AUTH_KEY',         'ctanERyCvs3u](^C[VT0IQ8MAi*7@oex>e47uEoJ5XXQ#f=`Ev&+t6:kX;NL~P9p' );
define( 'SECURE_AUTH_KEY',  'd/=8M*mbG_2@Y t1R>>N4Kba*aIMEC*=2AIjv@h}9))8q5KYWr*_n`kY T:)#H@t' );
define( 'LOGGED_IN_KEY',    'wb7>-AUBC`1,8r`+1i~&>1fd&5GN6-l|bBW/vfl%3-!CX0?]3bVy07P,,1GHU:/e' );
define( 'NONCE_KEY',        'Y| &X *;f[G=unxuV63^8-CZ;yE#AYkTDEC!0@ Be0K6y!cA,iYq_RfbdOdU%h*T' );
define( 'AUTH_SALT',        'CO,PEQ/e{8BXLA$4Z# xxETIcdVg{ - XCITmUc>1-9C)DkUchU/]Y|2WGd|5CKn' );
define( 'SECURE_AUTH_SALT', 'xj!eqdz^:JB+F*%v;!=_PsOoJbLU(OQYn2>alc2wGh#h? ,Dtvo{,6(iJ1turzs ' );
define( 'LOGGED_IN_SALT',   'B)OL,~c)0I_7G^S$#Oy-~<7n<7|LwqYV4)q@B88)LeWiGgYh,oeUc+/GA2^j~t.`' );
define( 'NONCE_SALT',       ':IvP{`s~^n](AAeff%Uw3owO [QLu<(iEi,~6ONG:{(C72O}}ops!@$P>)8;tlUu' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'Az_';

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
