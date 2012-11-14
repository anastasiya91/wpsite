<?php
/**
 * Основные параметры WordPress.
 *
 * Этот файл содержит следующие параметры: настройки MySQL, префикс таблиц,
 * секретные ключи, язык WordPress и ABSPATH. Дополнительную информацию можно найти
 * на странице {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Кодекса. Настройки MySQL можно узнать у хостинг-провайдера.
 *
 * Этот файл используется сценарием создания wp-config.php в процессе установки.
 * Необязательно использовать веб-интерфейс, можно скопировать этот файл
 * с именем "wp-config.php" и заполнить значения.
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define('DB_NAME', 'dbwpsite');

/** Имя пользователя MySQL */
define('DB_USER', 'root');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', 'k308o2p');

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
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется снова авторизоваться.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'gj@#uxGw>^z6*[1!Y$9z_Q:@G-V;u(S$+tADs|gQ%|=4)Kw1%/Q?HOIy[!Dg&RRl');
define('SECURE_AUTH_KEY',  'tP_+qr)~=aqwe|c.@=t-dMb!ntNQrsB7fuWF4_wVb#$x#~}AJX%WFD,s n1y9I}D');
define('LOGGED_IN_KEY',    '6m,/e3;Ddsww0eO}.mTfq%V]T,98-$W~Hyxn{1JML%vG|I.-,~/?deVhKDgR!P.9');
define('NONCE_KEY',        'e}NSu{a<Xr$xfr~GxY/Shbo2Akg-|,n`{~w^Dq.W+7RcWZeB0U#k!E&M$NpD|L/^');
define('AUTH_SALT',        '~),I7L`FHQ4QD[:]1r4{(#/GHw7MsRSbS)X`Bo4D25oLM!@*n{b~+Ph}=+- 18V@');
define('SECURE_AUTH_SALT', 'rXpPE-tfBTfF;]zm#<hrADaSY|mb>m>W0shyDGD}($9`V8!?P/4:jHVR%^%+Zv#v');
define('LOGGED_IN_SALT',   '*A,J;yx|%K6e$KRE3Jf_=|$(|a<Gw^9e;/Op4PlR!z>479DSi.(`}*I9d,Qx)?`N');
define('NONCE_SALT',       '!`R|Jtx=SPA&yw@$t~sTX_C`2c[v]8uM*ayiosmB}GI`.])O+IFf</~{XH 3)M+j');

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько блогов в одну базу данных, если вы будете использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix  = 'wps_';

/**
 * Язык локализации WordPress, по умолчанию английский.
 *
 * Измените этот параметр, чтобы настроить локализацию. Соответствующий MO-файл
 * для выбранного языка должен быть установлен в wp-content/languages. Например,
 * чтобы включить поддержку русского языка, скопируйте ru_RU.mo в wp-content/languages
 * и присвойте WPLANG значение 'ru_RU'.
 */
define('WPLANG', 'ru_RU');

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Настоятельно рекомендуется, чтобы разработчики плагинов и тем использовали WP_DEBUG
 * в своём рабочем окружении.
 */
define('WP_DEBUG', false);

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Инициализирует переменные WordPress и подключает файлы. */
require_once(ABSPATH . 'wp-settings.php');

