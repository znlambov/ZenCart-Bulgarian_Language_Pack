<?php
// Bulgarian Language Pack for Zen Cart - https://github.com/znlambov/ZenCart-Bulgarian_Language_Pack
/**
 * @package admin
 * @copyright Copyright 2003-2016 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: Author: DrByte  Mon Oct 19 01:39:59 2015 -0400 Modified in v1.5.5 $
 */
  define('HEADING_TITLE', 'Инструменти на разработчика');
  define('TABLE_CONFIGURATION_TABLE', 'Провери КОНСТАНТНИТЕ дефиниции');

  define('SUCCESS_PRODUCT_UPDATE_PRODUCTS_PRICE_SORTER', '<strong>Успешно</strong> обновени стойности за Сортиране цени на продукти');

  define('ERROR_CONFIGURATION_KEY_NOT_FOUND', '<strong>Грешка:</strong> Не са намерени съответствия в конфигурационните ключове...');
  define('ERROR_CONFIGURATION_KEY_NOT_ENTERED', '<strong>Грешка:</strong> Не е въведен конфигурационен ключ или текст за търсене... Търсенето бе преустановено');

  define('TEXT_INFO_PRODUCTS_PRICE_SORTER_UPDATE', '<strong>Обнови Сортирането на цени за всички продукти</strong><br />за да може да се подреди по показаната цена: ');

  define('TEXT_CONFIGURATION_CONSTANT', '<strong>Преглед на КОНСТАНТНИ или еикови файлове</strong>');
  define('TEXT_CONFIGURATION_KEY', 'Име на ключ:');
  define('TEXT_INFO_CONFIGURATION_UPDATE', '<strong>Забележка:</strong> КОНСТАНТИТЕ са написани главни букви.<br />Проверка в езиков файл, функции, класове и т.н. се извършва, когато не е открито нищо в таблиците на базата данни, ако е избрано в падащото меню');

  define('TABLE_TITLE_KEY', '<strong>Ключ:</strong>');
  define('TABLE_TITLE_TITLE', '<strong>Название:</strong>');
  define('TABLE_TITLE_DESCRIPTION', '<strong>Описание:</strong>');
  define('TABLE_TITLE_GROUP', '<strong>Група:</strong>');
  define('TABLE_TITLE_VALUE', '<strong>Стойност:</strong>');

  define('TEXT_LOOKUP_NONE', 'Нищо');
  define('TEXT_INFO_SEARCHING', 'Търсене ');
  define('TEXT_INFO_FILES_FOR', ' файлове ... за: ');
  define('TEXT_INFO_MATCHES_FOUND', 'Открити съвпадащи редове: ');
  define('TEXT_INFO_FILENAME', 'Файлово име: ');

  define('TEXT_LANGUAGE_LOOKUPS', 'Претърсване в езиков файл:');
  define('TEXT_LANGUAGE_LOOKUP_CURRENT_LANGUAGE', 'Всички езикови файлове за ' . strtoupper($_SESSION['language']) . ' - Catalog/Admin');
  define('TEXT_LANGUAGE_LOOKUP_CURRENT_CATALOG', 'Всички основни езикови файлове - Catalog (' . DIR_WS_CATALOG . DIR_WS_LANGUAGES . 'english.php /espanol.php etc.)');
  define('TEXT_LANGUAGE_LOOKUP_CURRENT_CATALOG_TEMPLATE', 'Всички избрани в момента езикови файлове - ' . DIR_WS_CATALOG . DIR_WS_LANGUAGES . $_SESSION['language'] . '/*.php');
  define('TEXT_LANGUAGE_LOOKUP_CURRENT_ADMIN', 'Всички основни езикови файлове - Admin (' . DIR_WS_ADMIN . DIR_WS_LANGUAGES . 'english.php /espanol.php etc.)');
  define('TEXT_LANGUAGE_LOOKUP_CURRENT_ADMIN_LANGUAGE', 'Всички избрани в момента езикови файлове - Admin (' . DIR_WS_ADMIN . DIR_WS_LANGUAGES . $_SESSION['language'] . '/*.php)');
  define('TEXT_LANGUAGE_LOOKUP_CURRENT_ALL', 'Всички избрани в момента езикови файлове - Catalog/Admin');

  define('TEXT_FUNCTION_CONSTANT', '<strong>Претърсване функции или неща от функционални файлове</strong>');
  define('TEXT_FUNCTION_LOOKUPS', 'Претърсване във функционален файл:');
  define('TEXT_FUNCTION_LOOKUP_CURRENT', 'Всички функционални файлове - Catalog/Admin');
  define('TEXT_FUNCTION_LOOKUP_CURRENT_CATALOG', 'Всички файлове за функции - Catalog');
  define('TEXT_FUNCTION_LOOKUP_CURRENT_ADMIN', 'Всички файлове за функции - Admin');

  define('TEXT_CLASS_CONSTANT', '<strong>Претърсване в касовете или неща във файловете за класовете</strong>');
  define('TEXT_CLASS_LOOKUPS', 'Претърсване във файла за класовете:');
  define('TEXT_CLASS_LOOKUP_CURRENT', 'Всички файлове за класове - Catalog/Admin');
  define('TEXT_CLASS_LOOKUP_CURRENT_CATALOG', 'Всички файлове за класове - Catalog');
  define('TEXT_CLASS_LOOKUP_CURRENT_ADMIN', 'Всички файлове за класове - Admin');

  define('TEXT_TEMPLATE_CONSTANT', '<strong>Претърсване в неща от шаблоните</strong>');
  define('TEXT_TEMPLATE_LOOKUPS', 'Претърсване в шаблонен файл:');
  define('TEXT_TEMPLATE_LOOKUP_CURRENT', 'Всички шаблонни файлове - /templates sideboxes /pages etc.');
  define('TEXT_TEMPLATE_LOOKUP_CURRENT_TEMPLATES', 'Всички файлове на шаблоните - /templates');
  define('TEXT_TEMPLATE_LOOKUP_CURRENT_SIDEBOXES', 'Всички файлове на шаблоните - /sideboxes');
  define('TEXT_TEMPLATE_LOOKUP_CURRENT_PAGES', 'Всички файлове на шаблоните - /pages');

  define('TEXT_ALL_FILES_CONSTANT', '<strong>Претърсване във всички файлове</strong>');
  define('TEXT_ALL_FILES_LOOKUPS', 'Претърсване във всички файлове:');
  define('TEXT_ALL_FILES_LOOKUP_CURRENT', 'Всички файлове - Catalog/Admin');
  define('TEXT_ALL_FILES_LOOKUP_CURRENT_CATALOG', 'Всички файлове - Catalog');
  define('TEXT_ALL_FILES_LOOKUP_CURRENT_ADMIN', 'Всички файлове - Admin');

  define('TEXT_INFO_NO_EDIT_AVAILABLE','Не е налична редакция');
  define('TEXT_INFO_CONFIGURATION_HIDDEN', ' или е СКРИТА');

  define('TEXT_SEARCH_ALL_FILES', 'Търсви във всички файлове за: ');
  define('TEXT_SEARCH_DATABASE_TABLES', 'Търси в конфигурационните таблици на базата данни за: ');

  define('TEXT_ALL_FILESTYPE_LOOKUPS', 'Тип файл');
  define('TEXT_ALL_FILES_LOOKUP_PHP', 'само .php');
  define('TEXT_ALL_FILES_LOOKUP_PHPCSS', '.php и .css');
  define('TEXT_ALL_FILES_LOOKUP_CSS', 'само .css');
  define('TEXT_ALL_FILES_LOOKUP_HTMLTXT', '.html и .txt');
  define('TEXT_ALL_FILES_LOOKUP_JS', 'само .js');
  define('TEXT_ALL_FILES_LOOKUP_ALL_TYPES', 'Всичко');

  define('TEXT_CASE_SENSITIVE', 'Да различава малки и главни букви?');
  define('TEXT_CONTEXT_LINES', 'Контекстни редове: ');
  define('TEXT_SEARCH_LOOKUP_PLACEHOLDER', 'Въведете търсена фраза или образец');
  define('TEXT_SEARCH_KEY_PLACEHOLDER', 'Въведете ключово име или образец за търсене');
  define('TEXT_SEARCH_PHRASE_PLACEHOLDER', 'Въведете търсена фраза');
  define('TEXT_BUTTON_SEARCH', 'Търси');
  define('TEXT_BUTTON_SEARCH_ALT', 'Извърши търсене');
  define('TEXT_BUTTON_REGEX_SEARCH', 'grep');
  define('TEXT_BUTTON_REGEX_SEARCH_ALT', 'Търси използвайки Regex образец');
  define('TEXT_ERROR_REGEX_FAIL', 'Внимание: възникна грешка при търсенето. Ако сте извършвали regex/grep търсене, моля, провеpете Вашите regex образци за синтактични грешки.');

  //Search Configuration Keys
  define('SEARCH_CFG_KEYS_HEADING_TITLE','<strong>Търси в конфигурационните настройки/ключове</strong>');
  define('SEARCH_CFG_KEYS_SEARCH_BOX_TEXT', '<strong>Фраза за търсене:</strong> (По този начин ще търсите в имената на конфигурационните настройки и описанията, а също така в конфигурационните ключове, ако има точно съвпадение)');
  define('SEARCH_CFG_KEYS_TABLE_SECTION', 'Секция');
  define('SEARCH_CFG_KEYS_TABLE_GROUP','Група');
  define('SEARCH_CFG_KEYS_TABLE_TITLE', 'Название');
  define('SEARCH_CFG_KEYS_TABLE_DESCRIPTION','Описание');
  define('SEARCH_CFG_KEYS_TABLE_VALUE','Стойност');
  define('SEARCH_CFG_KEYS_TABLE_KEY_NAME', 'Име на ключ');
  define('SEARCH_CFG_KEYS_TABLE_EDIT','Редакция');
  define('SEARCH_CFG_KEYS_NOT_FOUND_KEYS', 'Не е открит конфигурационен ключ/ключове.');
  define('SEARCH_CFG_KEYS_FOUND_KEYS', 'открит е конфигурационен ключ/ключове.');
  define('SEARCH_CFG_KEYS_FORM_PLACEHOLDER', 'Въведете думи, които да бъдат открити в конфигурационните настройки');
  define('SEARCH_CFG_KEYS_FORM_BUTTON_SEARCH_SORTED_BY_GROUP', 'Търси');
  define('SEARCH_CFG_KEYS_FORM_BUTTON_SEARCH_SORTED_BY_KEY', 'Търси (подрети по ключ)');
  define('SEARCH_CFG_KEYS_FORM_BUTTON_VIEW_ALL', 'Виж всички (всяка настройка)');
  define('SEARCH_CFG_KEYS_FORM_BUTTON_RESET', 'Промени');
  define('TEXT_RESET_BUTTON_ALT', 'Изчисти всички полета за търсене и започни отново.');
