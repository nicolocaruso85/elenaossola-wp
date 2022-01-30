<?php

/**
 * Il file base di configurazione di WordPress.
 *
 * Questo file definisce le seguenti configurazioni: impostazioni MySQL,
 * Prefisso Tabella, Chiavi Segrete, Lingua di WordPress e ABSPATH.
 * E' possibile trovare ultetriori informazioni visitando la pagina: del
 * Codex {@link http://codex.wordpress.org/Editing_wp-config.php
 * Editing wp-config.php}. E' possibile ottenere le impostazioni per
 * MySQL dal proprio fornitore di hosting.
 *
 * Questo file viene utilizzato, durante l'installazione, dallo script
 * rimepire i valori corretti.
 *
 * @package WordPress
 */

// ** Impostazioni MySQL - E? possibile ottenere questoe informazioni
// ** dal proprio fornitore di hosting ** //
/** Il nome del database di WordPress */
define('DB_NAME', 'elenaossola');

/** Nome utente del database MySQL */
define('DB_USER', 'elenaossola');

/** Password del database MySQL */
define('DB_PASSWORD', 'hZc5x34hvc.APX{2');

/** Hostname MySQL  */
define('DB_HOST', 'localhost');

/** Charset del Database da utilizare nella creazione delle tabelle. */
define('DB_CHARSET', 'utf8');

/** Il tipo di Collazione del Database. Da non modificare se non si ha
idea di cosa sia. */
define('DB_COLLATE', '');

/**#@+
 * Chiavi Univoche di Autenticazione e di Salatura.
 *
 * Modificarle con frasi univoche differenti!
 * E' possibile generare tali chiavi utilizzando {@link https://api.wordpress.org/secret-key/1.1/salt/ servizio di chiavi-segrete di WordPress.org}
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '.;4N9mNL0o4c|b1CuBw`oqZW&-IE;1zE3@(5p w_eFG4KcrSe<G(WHZ/yDo<}sH:');
define('SECURE_AUTH_KEY',  'GOt=.)R>$[jh(} .tC?il;7AuY`|G M[/+vRhL;KA~{ca%LT4Typn47:f>$Sar*z');
define('LOGGED_IN_KEY',    'A98oycf[Yc<to+BCi]>bdH5</iwWx:lf_bbI|VbWB7H*#tH9ki!wRdP>vRNyC1iP');
define('NONCE_KEY',        'BWr{ >z-4s+Q+t^4mTOh?^k<+-Xn,aIaMOx o}It-=(J:rY]U@r#PyY9kh7O78|8');
define('AUTH_SALT',        'j>^+Zy9!;-)5#t0U|FI9% MdlXe#^De`%?f)bx13%bP!>?SoL+|M&[(?[_.UbQ9#');
define('SECURE_AUTH_SALT', 'w<t9cC|^QeN|#G2S3}V&fRU^~nI{mfVo2+6L*[:IL(/|$pna:N}[a)WUvC[b12<^');
define('LOGGED_IN_SALT',   ']aJS_e`j!?&#;VK>_d*cwDjlCSCHk|Ry96}*Fo>*gS!a9u--(5yM[~GN`o/-DO:I');
define('NONCE_SALT',       'o@8ofxe.WP2ljh+fhG$e1jIWW(:s:n%1&:232vZv/~6IP>J|>vU|-+i.,K~8+LcR');

/**#@-*/

/**
 * Prefisso Tabella del Database WordPress .
 *
 * E' possibile avere installazioni multiple su di un unico database if you give each a unique
 * fornendo a ciascuna installazione un prefisso univoco.
 * Solo numeri, lettere e sottolineatura!
 */
$table_prefix  = 'wp_';

/**
 * Lingua di Localizzazione di WordPress, di base Inglese.
 *
 * Modificare questa voce per localizzare WordPress. Occorre che nella cartella
 * wp-content/languages sia installato un file MO corrispondente alla lingua
 * selezionata. Ad esempio, installare de_DE.mo in to wp-content/languages ed
 * impostare WPLANG a 'de_DE' per abilitare il supporto alla lingua tedesca.
 *
 */
define('WPLANG', 'it_IT');

/**
 *
 * Modificare questa voce a TRUE per abilitare la visualizzazione degli avvisi
 * durante lo sviluppo.
 * E' fortemente raccomandato agli svilupaptori di temi e plugin di utilizare
 * WP_DEBUG all'interno dei loro ambienti di sviluppo.
 */
define('WP_DEBUG', false);

/* Finito, interrompere le modifiche! Buon blogging. */

/** Path assoluto alla directory di WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Imposta lle variabili di WordPress ed include i file. */
require_once(ABSPATH . 'wp-settings.php');
function wp_mail() {}
