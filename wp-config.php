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
define( 'DB_NAME', 'hotel_elementor' );

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
define( 'AUTH_KEY',         'u:VPjsGd.f*vN#oOD6~z[3a@}[6A!MM=YnF:niQG{6k-Yr<<2G4cJZ>/G4&adls:' );
define( 'SECURE_AUTH_KEY',  '8Y9JY@cq4gfi7vT2a1:8~!N@_$5y96ECV,[I*Mv-%U/@MYf,[>Q#G)w0_w#Q~mcP' );
define( 'LOGGED_IN_KEY',    '0c*Fi]1|?{>2Q$F,.Og([NzeYmM*+SYqLR+Ou8O]$5o<k~lVY@+89=a6isHR; xk' );
define( 'NONCE_KEY',        't|T[INcbKR(m!s~r~O kA4ran*mX%F]/&PB%Bijm1+g1N[VuG`y2TjQWG=IEE.P=' );
define( 'AUTH_SALT',        'P`z{diJ0xL]:]QoWCk`ocBEm>>}x`>`am!X9]QUhq,Fmr5}NXH3G_QqyjtBdEJ.I' );
define( 'SECURE_AUTH_SALT', 'bsAT;uGZ#&,5:A55!~)w#c.n)Z,Ehp6/Zl#R`?cD,!`L|,nx,[Iv?JVjR%ViZ/9O' );
define( 'LOGGED_IN_SALT',   'vLkzR|r7@giYL| 0rPN(LBP 5Og%r0k#:=`oK%@*a,Gv}FQ(y7 RO&^rR#LD=_#I' );
define( 'NONCE_SALT',       '^trA4!.X@Pi&z@~6 Nuz<mXUsi~3lr5LO8YZreEQ*J%.|-5%:XIGVgwV{o:S:O$O' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'elem_wp_';

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
