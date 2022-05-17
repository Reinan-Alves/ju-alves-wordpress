<?php
/**
 * As configurações básicas do WordPress
 *
 * O script de criação wp-config.php usa esse arquivo durante a instalação.
 * Você não precisa usar o site, você pode copiar este arquivo
 * para "wp-config.php" e preencher os valores.
 *
 * Este arquivo contém as seguintes configurações:
 *
 * * Configurações do MySQL
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'wordpress01' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'root' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', '' );

/** Nome do host do MySQL */
define( 'DB_HOST', 'localhost' );

/** Charset do banco de dados a ser usado na criação das tabelas. */
define( 'DB_CHARSET', 'utf8mb4' );

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define( 'DB_COLLATE', '' );

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las
 * usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org
 * secret-key service}
 * Você pode alterá-las a qualquer momento para invalidar quaisquer
 * cookies existentes. Isto irá forçar todos os
 * usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         's/6?$.JxO;uI`*`7(KWsocau7t lS4Z#xN_SNCC 1a!2K8}yGk<8GV;`j9$8n.:{' );
define( 'SECURE_AUTH_KEY',  'hzWSRvA=/X3zzD5PpO<zm.Ogwv=xHz=)-S;;Ab $xUG_qePk0iT>T8cOzXmqgzDr' );
define( 'LOGGED_IN_KEY',    '&kvZcSc[N--1&zEJ/,&Q9}v4 (D+5!s(P^WT<u:YDbzMn<iS8z`NDuK5@2%%Ij 6' );
define( 'NONCE_KEY',        'eb!MzxLS:<j-]{q}(R>me#<D09XnYL4._p -EED+Kn<F~M{#Etyb]eOugnh4CO6.' );
define( 'AUTH_SALT',        '?[87^6%FoUQf}A.t,T`.vK$P@+)~eci#]C0]kUio,*YV8?L`_VD|?8M5U8o0n(7J' );
define( 'SECURE_AUTH_SALT', '9c[mp>FX{x2u?Wi]4.KxS9H9DG.VjMNJHp)CR4M4JE2G6ikPy@?3uqI|B:HQ/H/h' );
define( 'LOGGED_IN_SALT',   'k_yQ}4LUUL378L;XU96)@B1a`7elk @e]J)mt%i`d|C|Q[;MQ?O1Y?=qu[]JcDfz' );
define( 'NONCE_SALT',       '?+DM@2oCuEy<O 3X]dq^MXv8WHD#aJW!)=)g|xzkE!O>S Gzv_h/og~D9b->lzjj' );

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix = 'wp_';

/**
 * Para desenvolvedores: Modo de debug do WordPress.
 *
 * Altere isto para true para ativar a exibição de avisos
 * durante o desenvolvimento. É altamente recomendável que os
 * desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 *
 * Para informações sobre outras constantes que podem ser utilizadas
 * para depuração, visite o Codex.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Adicione valores personalizados entre esta linha até "Isto é tudo". */



/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Configura as variáveis e arquivos do WordPress. */
require_once ABSPATH . 'wp-settings.php';
