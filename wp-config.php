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
define('AUTH_KEY',         'EZm/m B&c^jC|B*`qY~xWH+`F<EL!ph(p!/-w&FNlxd6/Y`q<U8tK$,*|R;ax;Tz');
define('SECURE_AUTH_KEY',  ')^!^5sJv4^RSpAItZZ?uAb6WJQ0_cK][MrZ|RMe+fM5zfBE,FsdBkHkHYbyt$1{(');
define('LOGGED_IN_KEY',    '?jn$43D[Pk1kySq}4a)pt*YZS%MEV-N;@%]rnDj>zl[f8|_z2VaTeeJdcB1`&0]c');
define('NONCE_KEY',        'UxjanbW&!YBU;]#}cixI*U{Nn%cIFO.}aO)-Yf6~{+^-w}#WZ=%*AQm7NZ=Cccn|');
define('AUTH_SALT',        '5~+Wu>o0j+Of}Z5[{b.fNr}uFM~w:|UFzE/eF/XbL4}a*)T7GK]Uud]7{uv(&|o}');
define('SECURE_AUTH_SALT', 'APA^0hYDb~t(SEyOWR1NQeRxU-MrTc`DQSc1cCI4`72ET`u:&OY7,jBW#+)aH9lz');
define('LOGGED_IN_SALT',   'ZhUD:/VcvQzSK_448pKPC=BvR~-gs-|GCd}TV.*1_3Kq(oDPf:#26SsHy()3.0L!');
define('NONCE_SALT',       'hXJV+x12wx]RcT)oGiu[#+P.%_:yZ9J/qH;o,.q~qr90aL<[&P{V9Q.6WX,5uTzS');

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