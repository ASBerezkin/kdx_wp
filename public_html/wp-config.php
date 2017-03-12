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
define('DB_NAME', 'rrkodioq_test');

/** Имя пользователя MySQL */
define('DB_USER', 'rrkodioq_test');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', '*M!0f}{g');

/** Имя сервера MySQL */
define('DB_HOST', 'localhost');

/** Кодировка базы данных для создания таблиц. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         'zX}q3<+NEdHq|_2d*NDsSx@>g4t-o=*|kI~o44_U{88(dGy=X8/MBU#_eg3NBmmk');
define('SECURE_AUTH_KEY',  '[^)ZX7?3UksFEy G{I-4s[*!L:+9:]R ueJXacD%FvikE4{B4l|tb4+b,HgOYU!Y');
define('LOGGED_IN_KEY',    'H8?:H>?1Qv0(mD`^b??![E3;Pjn=m8:TVGd1va9q,gVcmm=B1eyWv*JBOEBJC_US');
define('NONCE_KEY',        'vLj mjja},-]HEw@XP-A CO!>^R[f^h6^ilvdGS 5kFbA*#u9w>z}m`zYL->D&N#');
define('AUTH_SALT',        'm:x}(FEmI`B?5vK~hj/=EChq16azK;[TIToFInqI 8C5kt{~.,2)[T0y_+trC?+&');
define('SECURE_AUTH_SALT', 'c}p`aZCxwHY;Q3@jH5>$1wZVLJo=_VB_hCNsDhw21Qq^C~J7)j|9e+4P%FZy:{A;');
define('LOGGED_IN_SALT',   'cy:bHP,cb=+UOBA*wdQ+u$1qdP.=utS4U{,C@ z`st)6M7{~FP.=zjGaE`f~NR44');
define('NONCE_SALT',       'LKXjVM]Tz//lQw%4[Ess{Hj8!;X+=Vc##NsHSr)D*,eGgjmgaqK]}mwoWE,iDTL ');

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix  = 'ert_';

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
