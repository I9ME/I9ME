<?php
/**
 * As configurações básicas do WordPress
 *
 * O script de criação wp-config.php usa esse arquivo durante a instalação.
 * Você não precisa user o site, você pode copiar este arquivo
 * para "wp-config.php" e preencher os valores.
 *
 * Este arquivo contém as seguintes configurações:
 *
 * * Configurações do MySQL
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/pt-br:Editando_wp-config.php
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar estas informações
// com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define('DB_NAME', 'i9me');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'root');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', 'root');

/** Nome do host do MySQL */
define('DB_HOST', 'localhost');

/** Charset do banco de dados a ser usado na criação das tabelas. */
define('DB_CHARSET', 'utf8mb4');

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define('DB_COLLATE', '');

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las
 * usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org
 * secret-key service}
 * Você pode alterá-las a qualquer momento para desvalidar quaisquer
 * cookies existentes. Isto irá forçar todos os
 * usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'UqDKY.SkUfCrn`XVQ1{+ XMP2)>J_9v6C3^d`|ArH}}CD/M/HSCvMP-@gwe@)UP`');
define('SECURE_AUTH_KEY',  'ak-|7nKn`$1*yM.G05(r7/vCjY;Qz8EEq9cdyEBfjk;hg5<S~)+P$:amUf3~j5Zb');
define('LOGGED_IN_KEY',    'Ch9P$15sk/VDK.9|Ey@r=a[.CqI@e&&{l!hk,~l{#PJ]`Sty`!TeVXZC&OO,vgwi');
define('NONCE_KEY',        '~#RX]:wpkLBba}0 [GugzgEBTe[?3Dk>3NV{}&xv/D(v4#A?&/{>Oiyhev `+)=K');
define('AUTH_SALT',        'rRWt/6vIb05yja%tryr+.K)*xhB%J]!uy4&y*we_$IG~{bPsK kyyBi(teprR<oe');
define('SECURE_AUTH_SALT', '[o UyQ8d@(`n|sb{eB f;j]@14XLhg-gf}|qcB@V%#oRvo2*?%&:X(^q)v~wg%r1');
define('LOGGED_IN_SALT',   '5u)-}KpvTD s!,zj$:e*uIZdhaGF3m,#(P5}L1gT =),vx|R=<21QUukq&&,GJ^2');
define('NONCE_SALT',       'F+88vg_68`!hRRnMUbX]UO@EiXBM78K/oKt7i`#ndy7P`IiXh%fj%qfJO4d5dU`]');

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * para cada um um único prefixo. Somente números, letras e sublinhados!
 */
$table_prefix  = 'i9me_wp_';

/**
 * Para desenvolvedores: Modo debugging WordPress.
 *
 * Altere isto para true para ativar a exibição de avisos
 * durante o desenvolvimento. É altamente recomendável que os
 * desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 *
 * Para informações sobre outras constantes que podem ser utilizadas
 * para depuração, visite o Codex.
 *
 * @link https://codex.wordpress.org/pt-br:Depura%C3%A7%C3%A3o_no_WordPress
 */
define('WP_DEBUG', false);

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Configura as variáveis e arquivos do WordPress. */
require_once(ABSPATH . 'wp-settings.php');
