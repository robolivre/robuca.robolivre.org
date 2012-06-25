<?php
/** 
 * As configurações básicas do WordPress.
 *
 * Esse arquivo contém as seguintes configurações: configurações de MySQL, Prefixo de Tabelas,
 * Chaves secretas, Idioma do WordPress, e ABSPATH. Você pode encontrar mais informações
 * visitando {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. Você pode obter as configurações de MySQL de seu servidor de hospedagem.
 *
 * Esse arquivo é usado pelo script ed criação wp-config.php durante a
 * instalação. Você não precisa usar o site, você pode apenas salvar esse arquivo
 * como "wp-config.php" e preencher os valores.
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar essas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define('DB_NAME', 'wp_robuca');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'root');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', 'root');

/** nome do host do MySQL */
define('DB_HOST', 'localhost');

/** Conjunto de caracteres do banco de dados a ser usado na criação das tabelas. */
define('DB_CHARSET', 'utf8');

/** O tipo de collate do banco de dados. Não altere isso se tiver dúvidas. */
define('DB_COLLATE', '');

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * Você pode alterá-las a qualquer momento para desvalidar quaisquer cookies existentes. Isto irá forçar todos os usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'OlA0B7za-/kFD,f?.PH|o-U9{f:J+G0h6{w6G3h]f)!YO+;?8+DJ9M&!4V m6;yZ');
define('SECURE_AUTH_KEY',  '7pK;QgsbGs-V,2AZo#=+<fS:~ABQYV|bZo|@i)R!x9{?6E`KW8f15Q|(.,B<|n: ');
define('LOGGED_IN_KEY',    'sA+vU#:_s<u|>]t|iOUMyww4 fD;$~]{U#-;jmz0Y_!CAIAw5!O2LdC7].Xz~?=h');
define('NONCE_KEY',        '&1xIQ=S:FYQ2V|y|e;,0Gqv)*q RX:iqI/fz0w}c]s+ 8UE%8F]!2jgz!@`LA+)~');
define('AUTH_SALT',        'W-+q -,p]M8&EJyWue=uXm1WMu<P%,.6x]a&xQX!Ag1,=-a-Ew<=S=C~w#]=Agj2');
define('SECURE_AUTH_SALT', 'm+Ad,kc`AypDUp|nG_4A@?$JQ[/.spgP As=S_KCw-O!DY[`|&0fT<z2x[f1TG37');
define('LOGGED_IN_SALT',   'f5q;|Rbm,Ok+/3MQoTZE++*+0F5dCGvsO6r+h-jYQ.E9fNwu`h>@@rRs9#4!7[@G');
define('NONCE_SALT',       '>A25qjwl:J[oP| vzJ|5[=<cL<T=p[~b4]|%SF3I}npvBmmu-v;=Y#fx]:|)&oaa');

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der para cada um um único
 * prefixo. Somente números, letras e sublinhados!
 */
$table_prefix  = 'wp_robuca_';

/**
 * O idioma localizado do WordPress é o inglês por padrão.
 *
 * Altere esta definição para localizar o WordPress. Um arquivo MO correspondente ao
 * idioma escolhido deve ser instalado em wp-content/languages. Por exemplo, instale
 * pt_BR.mo em wp-content/languages e altere WPLANG para 'pt_BR' para habilitar o suporte
 * ao português do Brasil.
 */
define('WPLANG', 'pt_BR');

/**
 * Para desenvolvedores: Modo debugging WordPress.
 *
 * altere isto para true para ativar a exibição de avisos durante o desenvolvimento.
 * é altamente recomendável que os desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 */
define('WP_DEBUG', false);

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');
	
/** Configura as variáveis do WordPress e arquivos inclusos. */
require_once(ABSPATH . 'wp-settings.php');
