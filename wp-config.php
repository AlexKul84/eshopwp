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
define('DB_NAME', 'eshopwp');

/** Имя пользователя MySQL */
define('DB_USER', 'root');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', '');

/** Имя сервера MySQL */
define('DB_HOST', 'localhost');

/** Кодировка базы данных для создания таблиц. */
define('DB_CHARSET', 'utf8');

/** Схема сопоставления. Не меняйте, если не уверены. */
define('DB_COLLATE', '');

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '6|52aN2}biS@2p4]{R/<0Ss2Q3~!|a?-<auzP!(0_m,Y/GRRyU98.&%X!c|El)X*');
define('SECURE_AUTH_KEY',  'lriHM!.l[`;Z{. !w{o7HeNbe?+6y%{1z0tg5hwn6GK1JV+ivxaxXR3ExhlJpc/b');
define('LOGGED_IN_KEY',    '*a0h<+?;FL2#s6h]Aw<ptyqUg`pb:HlJNt]y0!Z%G[)ShW4t/vk:.lAE7d3ckXGO');
define('NONCE_KEY',        'SvO+HD$UxK^/@=+$KZG8n${B1d&1C`fe75ODarYp)5o44v4T<{yLQz4q>or^Z31!');
define('AUTH_SALT',        '.F=).4rwlXy$r&^JAXDl2Bs 0f8^WJg{8!Q~,It3Lic,RnV,mWw@FPc!8qs~;(2E');
define('SECURE_AUTH_SALT', 'y{O k}wXm9h=#>#O;8~PkaNQ[8(]8X.N$lMLYTJ[u}N~(}w31N,Os+j$;2p=gnN?');
define('LOGGED_IN_SALT',   '-xOSU)_|G2QAwyhsz,+y7%heC|7n4h=7z,OS-qg&wE_g|L$zFY}p)<`O`BzMvmkJ');
define('NONCE_SALT',       'i3AzAMf6Z_2]4r947024&6dm3-GavNf~Z`6W3<0B}rn*K)]H8NBX.AtAf?VL`z.-');

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Инициализирует переменные WordPress и подключает файлы. */
require_once(ABSPATH . 'wp-settings.php');
