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
define( 'DB_NAME', 'SoulSecretsBD' );

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
define( 'AUTH_KEY',         '*Am_mT2Jmc4.~L?}%pGZ,,3O`F >n@}=F)/KCchLFt*9?joDtut9c:]__:;?[+oC' );
define( 'SECURE_AUTH_KEY',  '!muPe0NxR%T_ ojt-*O#e;+d|X9k86/85KYui@;o[y5GlF=`1i`V_Y(^7Q<Z>zOs' );
define( 'LOGGED_IN_KEY',    'H>!3&l%3-9fxt6|aVDm{jufj.S=_J)dt,T@G=qWJ]vY4j#7o#qL E Sd%yVYbOx?' );
define( 'NONCE_KEY',        'kg}3JN(,MaBkPMMe~k~` bE7QG?&t`Fxc]F#4s-knL.e{@A^t~V!f yKO2[BO4_K' );
define( 'AUTH_SALT',        ' FV3MuxlvbW$a] ^p9iA7wsI~oU`uv~&WYh?SARmc}Kb4ygj9Fdxs@pyD{ l)G|J' );
define( 'SECURE_AUTH_SALT', '`@Xyzt=zE%y$^I{%jO$6p_`QJ{P{Ke}6d6&MkY5^3e-ig8P=f?G-s-M`?7S^?giW' );
define( 'LOGGED_IN_SALT',   'G3X!`|}zGK)XPA!ng-4N^a$<MbPX}VEY/EhHrv4+[30GOgMIe]59HWUKdu`9/s(+' );
define( 'NONCE_SALT',       'L/m+fevc9/HK%LHYjvi.$*5u/}WNM7xR(Pm}rS,CeZ-ku.&1|)]V-3gt21W%d14D' );

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
