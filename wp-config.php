<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе установки.
 * Необязательно использовать веб-интерфейс, можно скопировать файл в "wp-config.php"
 * и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки базы данных
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://ru.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Параметры базы данных: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'wp_site_web' );

/** Имя пользователя базы данных */
define( 'DB_USER', 'root' );

/** Пароль к базе данных */
define( 'DB_PASSWORD', '' );

/** Имя сервера базы данных */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу. Можно сгенерировать их с помощью
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}.
 *
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными.
 * Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'D<L.|cGgsczk&MZ%R1 ;Cet46va<z=WWC3rPnJsmAbhc[Ek=|AX0b$y+z%S{`tTB' );
define( 'SECURE_AUTH_KEY',  'B`MpVBXTWg+V${,LmTqGM$}dhG/^If.s<yATz*TO9?#k-D9M3gP^PjyO{bTDN6iF' );
define( 'LOGGED_IN_KEY',    'cfF/i`P[!TRr`+N!YoA99`@pO6%mw%M;=6R@n#i s+,]H!%:,fYr7^axh|*yhQ=>' );
define( 'NONCE_KEY',        'ZeQ%ponUswY^A;Q}of*tR(>?&$OAY4AJu]~RJEKklFF}lJCI)=+cTk*PK EyPd6K' );
define( 'AUTH_SALT',        '0l^#[M>EL#7tuxMh]oO:jN`>7}dNe1o XWKL-MVv4x9wC}r9OqElpz.BmK1J&w)A' );
define( 'SECURE_AUTH_SALT', 'ODJF53K.iJK9VaBn~gz>qdgRFiG9&LFOu/[*fOOLd/= F` B%BrZ.(TdO%<r9z3z' );
define( 'LOGGED_IN_SALT',   'pNSzQ2b.>Qv&f-&95])1OLOv2H%aH:IEI)ORUIs*`J3ER6PQ`pK0Ik}+.v+*1wky' );
define( 'NONCE_SALT',       '}3uEnn`?vea:;2+5@IwA6!qGq]F<-qGI9NUu4Z3LDDux_HzQ{ih}Ldd<*8^ix6q}' );

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
 * Информацию о других отладочных константах можно найти в документации.
 *
 * @link https://ru.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Произвольные значения добавляйте между этой строкой и надписью "дальше не редактируем". */



/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once ABSPATH . 'wp-settings.php';
