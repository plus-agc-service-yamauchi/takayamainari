<?php
/**
 * WordPress の基本設定
 *
 * このファイルは、インストール時に wp-config.php 作成ウィザードが利用します。
 * ウィザードを介さずにこのファイルを "wp-config.php" という名前でコピーして
 * 直接編集して値を入力してもかまいません。
 *
 * このファイルは、以下の設定を含みます。
 *
 * * MySQL 設定
 * * 秘密鍵
 * * データベーステーブル接頭辞
 * * ABSPATH
 *
 * @link https://wpdocs.osdn.jp/wp-config.php_%E3%81%AE%E7%B7%A8%E9%9B%86
 *
 * @package WordPress
 */

// 注意:
// Windows の "メモ帳" でこのファイルを編集しないでください !
// 問題なく使えるテキストエディタ
// (https://wpdocs.osdn.jp/%E7%94%A8%E8%AA%9E%E9%9B%86#.E3.83.86.E3.82.AD.E3.82.B9.E3.83.88.E3.82.A8.E3.83.87.E3.82.A3.E3.82.BF 参照)
// を使用し、必ず UTF-8 の BOM なし (UTF-8N) で保存してください。

// ** MySQL 設定 - この情報はホスティング先から入手してください。 ** //
/** WordPress のためのデータベース名 */
define( 'DB_NAME', 'LAA1076933-wordpress' );

/** MySQL データベースのユーザー名 */
define( 'DB_USER', 'LAA1076933' );

/** MySQL データベースのパスワード */
define( 'DB_PASSWORD', 'hk96MiWZUzWz' );

/** MySQL のホスト名 */
define( 'DB_HOST', 'mysql137.phy.lolipop.lan' );

/** データベースのテーブルを作成する際のデータベースの文字セット */
define( 'DB_CHARSET', 'utf8mb4' );

/** データベースの照合順序 (ほとんどの場合変更する必要はありません) */
define('DB_COLLATE', '');

/**#@+
 * 認証用ユニークキー
 *
 * それぞれを異なるユニーク (一意) な文字列に変更してください。
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org の秘密鍵サービス} で自動生成することもできます。
 * 後でいつでも変更して、既存のすべての cookie を無効にできます。これにより、すべてのユーザーを強制的に再ログインさせることになります。
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'Kzi>PBiD{JVgBkwe6VkQ`f#7Y0^eC2~A|hE@cyt)5?1yJ]Gqp;j%@<C3:*Q4#Y!0' );
define( 'SECURE_AUTH_KEY',  '*j{Tevj`Z9K)8um/-oWEuEPuc{lT1n<h>]~&}p3U%ek;kCR]&ZMf~nl1]M `sZp5' );
define( 'LOGGED_IN_KEY',    'rT:$2?:VR/QuFUy!zf~(90Y@WHq,xw6OPol:l@z%Lx%WxY)yK0ZU[<q):k$VfzPr' );
define( 'NONCE_KEY',        'kY?sN+OIx8.a vVZnOuT/)]JqzOq8}i%X{12#7N0wdN>Bv!}gSS7NGZk?`M,0aRw' );
define( 'AUTH_SALT',        'V3jr.?)f*nWgte>o|2HES;J<{W^c(&&{sy~0f2#8^(CMf.dX<[+O!<{9&} ?NUyz' );
define( 'SECURE_AUTH_SALT', ':hvLeb22o$J6QTV+pPenN}TV*Q+z=dF?_ek.u19,Vbrw : xm/.4rnW+[Ni1#5R]' );
define( 'LOGGED_IN_SALT',   '6hCVP@]t5J!SyK_5RrCqjOg}Aq<na)@VA=}I[*0&[Rt@=nNd~-Yv>d 0-2lrBD.(' );
define( 'NONCE_SALT',       '-J51PWa[uE/lbm6{F)|0{=j@i$: !zw`j)&Y,$+0^F80u=xrz~X+;/f3ex:T-}b2' );

/**#@-*/

/**
 * WordPress データベーステーブルの接頭辞
 *
 * それぞれにユニーク (一意) な接頭辞を与えることで一つのデータベースに複数の WordPress を
 * インストールすることができます。半角英数字と下線のみを使用してください。
 */
$table_prefix = 'wp_';

/**
 * 開発者へ: WordPress デバッグモード
 *
 * この値を true にすると、開発中に注意 (notice) を表示します。
 * テーマおよびプラグインの開発者には、その開発環境においてこの WP_DEBUG を使用することを強く推奨します。
 *
 * その他のデバッグに利用できる定数については Codex をご覧ください。
 *
 * @link https://wpdocs.osdn.jp/WordPress%E3%81%A7%E3%81%AE%E3%83%87%E3%83%90%E3%83%83%E3%82%B0
 */
define('WP_DEBUG', false);

/* 編集が必要なのはここまでです ! WordPress でのパブリッシングをお楽しみください。 */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
