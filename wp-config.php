<?php
/**
 * Baskonfiguration för WordPress.
 *
 * Denna fil används av wp-config.php-genereringsskript under installationen.
 * Du behöver inte använda webbplatsen, du kan kopiera denna fil direkt till
 * "wp-config.php" och fylla i värdena.
 *
 * Denna fil innehåller följande konfigurationer:
 *
 * * Inställningar för MySQL
 * * Säkerhetsnycklar
 * * Tabellprefix för databas
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL-inställningar - MySQL-uppgifter får du från ditt webbhotell ** //
/** Namnet på databasen du vill använda för WordPress */
define('DB_NAME', 'pfdb');

/** MySQL-databasens användarnamn */
define('DB_USER', 'root');

/** MySQL-databasens lösenord */
define('DB_PASSWORD', 'root');

/** MySQL-server */
define('DB_HOST', 'localhost');

/** Teckenkodning för tabellerna i databasen. */
define('DB_CHARSET', 'utf8mb4');

/** Kollationeringstyp för databasen. Ändra inte om du är osäker. */
define('DB_COLLATE', '');

/**#@+
 * Unika autentiseringsnycklar och salter.
 *
 * Ändra dessa till unika fraser!
 * Du kan generera nycklar med {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * Du kan när som helst ändra dessa nycklar för att göra aktiva cookies obrukbara, vilket tvingar alla användare att logga in på nytt.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '{e4e9ols|usE.1pWw}$pFek`b2K1F2;UV`6qhlvl|e5|8z(XkAGqumYha:Ey1.AJ');
define('SECURE_AUTH_KEY',  't.`A&L+{HGyn{$b{X0`NtJsls*Ycq-B^Van|RR_w,C!%B|Uj4,cOK#LpFF5|# Xs');
define('LOGGED_IN_KEY',    'ibPEN+@|Ge<6ITn}8gu2Kfq[5.5[}QTwdMI6(RnF}_J,,n%Rxv#?/Tg}P;OS<|-7');
define('NONCE_KEY',        'yK22ny[V/S14RoXeC:|uM5dkKi*)s^8&@lFjGeb!9^n_p.ywRYVD^ f4>/RC$NKw');
define('AUTH_SALT',        '{#,s$H[rW8T$AUY+w!WiyTZ,| ~g(igiPMQ`UWuHfH87Sn_HaKeZ;WMYh.CeTQ/4');
define('SECURE_AUTH_SALT', '_35`hbxcAuEdTcNIliOB1i9M,Wym;uqCgP4W(]TUi}Ci#GX67*b+?-J/Y[:fT[T1');
define('LOGGED_IN_SALT',   '3C2Uf:E!yx0}z]gIm+Y^=mciEhs88X>FM?EOc28$trf1*:}v3h4u{pV:&bxjW6Zp');
define('NONCE_SALT',       '4Nip{aTb2In5I!=g/|*M>o9E&sM4kzH_nQ5ad|YHmJ2cmO9!BqQsc>QY]U0C5KV.');

/**#@-*/

/**
 * Tabellprefix för WordPress Databasen.
 *
 * Du kan ha flera installationer i samma databas om du ger varje installation ett unikt
 * prefix. Endast siffror, bokstäver och understreck!
 */
$table_prefix  = 'wp_';

/** 
 * För utvecklare: WordPress felsökningsläge. 
 * 
 * Ändra detta till true för att aktivera meddelanden under utveckling. 
 * Det är rekommderat att man som tilläggsskapare och temaskapare använder WP_DEBUG 
 * i sin utvecklingsmiljö. 
 *
 * För information om andra konstanter som kan användas för felsökning, 
 * se dokumentationen. 
 * 
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */ 
define('WP_DEBUG', false);

/* Det var allt, sluta redigera här! Blogga på. */

/** Absoluta sökväg till WordPress-katalogen. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Anger WordPress-värden och inkluderade filer. */
require_once(ABSPATH . 'wp-settings.php');