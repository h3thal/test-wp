<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе
 * установки. Необязательно использовать веб-интерфейс, можно
 * скопировать файл в "wp-config.php" и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки MySQL
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'test-wp' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'root' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', 'root' );

/** Имя сервера MySQL */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'GQ4`1a7B a!{$M4%0In}23RFkr-V*,m0U%{Rl$H+U0oX6ss=nwc*[I|(qU06K|dV' );
define( 'SECURE_AUTH_KEY',  '7#;zxbF,$3u=p^Hi6@,O*grRq2Rco*_N{?$.!>^ xN@m+d+b!vW.KSvVu<N//WJQ' );
define( 'LOGGED_IN_KEY',    '|CelT,EFr?oFQw]/z9gX2%:JqMEd-~q9{{.eGM]T!x(5wtlcM/@24^tm~#]uq4NI' );
define( 'NONCE_KEY',        'ljXX]H5a>a4!Y^0+?,IT+ylLJzA2>5SV{#Ol+`?^_#Hmt &Bl}Zd`l?r~0kga}^U' );
define( 'AUTH_SALT',        '^mw>kxB!P.B58;!>CL97rkRxM);7YuUw0^cgf~(sM@5.CHk!^Xh0O4l_dx2$g{8F' );
define( 'SECURE_AUTH_SALT', 'X|qC0vXUae4b}vMcb^j{WWvg~Jg-rCbcg_X`det@1d TWu~d%p[Dv2em>y~E0]=D' );
define( 'LOGGED_IN_SALT',   '1w*xyob9.WGnZ3ciGzmV?Anj v`bVU/t$vt_iIBIGefY|%K?|_1bn?&U{_YMNJvs' );
define( 'NONCE_SALT',       'I| h+I;uc$BJg)MvkDl26=Ml=BI]A3&_M1<Z:@<E:}(}>2d<e}I`} 0Bt0C:KScj' );

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix = 'wp_';

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
 * в своём рабочем окружении.
 *
 * Информацию о других отладочных константах можно найти в Кодексе.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once( ABSPATH . 'wp-settings.php' );
