<?php
// Bulgarian Language Pack for Zen Cart 1.5.5 at https://github.com/znlambov/ZenCart-Bulgarian_Language_Pack
/**
 * @package admin
 * @copyright Copyright 2003-2010 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: attributes_controller.php 15883 2010-04-11 16:41:26Z wilt $
 */

define('HEADING_TITLE', 'КАТЕГОРИИ: ');

define('HEADING_TITLE_OPT', 'Опции на продуктите');
define('HEADING_TITLE_VAL', 'Стойности на опциите');
define('HEADING_TITLE_ATRIB', 'Контрол на атрибутите');
define('HEADING_TITLE_ATRIB_SELECT','Изберете категория, за да бъдат показани Продуктови атрибуи на...');

define('TEXT_PRICES_AND_WEIGHTS', 'Цени и Тегло');
define('TABLE_HEADING_ATTRIBUTES_PRICE_FACTOR', 'Ценообразуващ фактор: ');
define('TABLE_HEADING_ATTRIBUTES_PRICE_FACTOR_OFFSET', 'Компенсация: ');
define('TABLE_HEADING_ATTRIBUTES_PRICE_ONETIME', 'Еднократно:');

define('TABLE_HEADING_ATTRIBUTES_PRICE_FACTOR_ONETIME', 'Еднократен фактор: ');
define('TABLE_HEADING_ATTRIBUTES_PRICE_FACTOR_OFFSET_ONETIME', 'Компенсация: ');

define('TABLE_HEADING_ATTRIBUTES_QTY_PRICES', 'Количествена отстъпка на атрибутите:');
define('TABLE_HEADING_ATTRIBUTES_QTY_PRICES_ONETIME', 'Еднократна количествена отстъпка на атрибутите:');

define('TABLE_HEADING_ATTRIBUTES_PRICE_WORDS', 'Цена за дума:');
define('TABLE_HEADING_ATTRIBUTES_PRICE_WORDS_FREE', '- безплатни думи:');
define('TABLE_HEADING_ATTRIBUTES_PRICE_LETTERS', 'Цена за буква:');
define('TABLE_HEADING_ATTRIBUTES_PRICE_LETTERS_FREE', '- безплатни букви:');

define('TABLE_HEADING_ID', 'ID');
define('TABLE_HEADING_PRODUCT', 'Име на продукт');
define('TABLE_HEADING_OPT_NAME', 'Име на опция');
define('TABLE_HEADING_OPT_VALUE', 'Стойност на опция');
define('TABLE_HEADING_OPT_PRICE', 'Цена');
define('TABLE_HEADING_OPT_PRICE_PREFIX', 'Представка');
define('TABLE_HEADING_ACTION', 'Действие');
define('TABLE_HEADING_DOWNLOAD', 'Продукти за сваляне:');
define('TABLE_TEXT_FILENAME', 'Файлово име:');
define('TABLE_TEXT_MAX_DAYS', 'Валидно до: (0 = неограничено)');
define('TABLE_TEXT_MAX_COUNT', 'Максиален брой сваляния:');
define('TABLE_HEADING_OPT_DISCOUNTED','Отстъпка');
define('TABLE_HEADING_PRICE_BASE_INCLUDED','База');
define('TABLE_HEADING_PRICE_TOTAL','Тотал|Отстъпка: Еднократно:');
define('TEXT_WARNING_OF_DELETE', 'Тази опция е свързана с продукти и стойност - не е желателно да я изтривате.');
define('TEXT_OK_TO_DELETE', 'Тази опция не е свързана с продукти и стойности - можете да я изтриете.');
define('TEXT_OPTION_ID', 'ID на опцията');
define('TEXT_OPTION_NAME', 'Име на опцията');

define('ATTRIBUTE_WARNING_DUPLICATE','Дублиращ се атрибут - не бе добавен Атрибут'); // attributes duplicate warning
define('ATTRIBUTE_WARNING_DUPLICATE_UPDATE','Съществува дублиращ се атрибут - Атрибутът не бе променен'); // attributes duplicate warning
define('ATTRIBUTE_WARNING_INVALID_MATCH','Опцията на атрибута и Стойностите на опцията не съвпадат - Атрибутът не бе добавен'); // miss matched option and options value
define('ATTRIBUTE_WARNING_INVALID_MATCH_UPDATE','Опцията на атрибута и Стойностите на опцията не съвпадат - Атрибутът не бе променен'); // miss matched option and options value
define('ATTRIBUTE_POSSIBLE_OPTIONS_NAME_WARNING_DUPLICATE','Вероятно е въведено дублиращо се Име на опция'); // Options Name Duplicate warning
define('ATTRIBUTE_POSSIBLE_OPTIONS_VALUE_WARNING_DUPLICATE','Вероятно е въведено дублираща се Стойност на опция'); // Options Value Duplicate warning

define('PRODUCTS_ATTRIBUTES_EDITING','РЕДАКТИРАНЕ'); // title
define('PRODUCTS_ATTRIBUTES_DELETE','ИЗТРИВАНЕ'); // title
define('PRODUCTS_ATTRIBUTES_ADDING','ДОБАВЯНЕ НА НОВИ АТРИБУТИ'); // title
define('TEXT_DOWNLOADS_DISABLED','Забележка: Свалянията са изключени');

define('TABLE_TEXT_MAX_DAYS_SHORT', 'Дни:');
define('TABLE_TEXT_MAX_COUNT_SHORT', 'Максимум:');

  define('TABLE_HEADING_OPTION_SORT_ORDER','Сортиране');
  define('TABLE_HEADING_OPTION_VALUE_SORT_ORDER','Нулиране на сортирането');
  define('TEXT_SORT',' Поръчка: ');

  define('TABLE_HEADING_OPT_WEIGHT_PREFIX','Представка');
  define('TABLE_HEADING_OPT_WEIGHT','Тегло');
  define('TABLE_HEADING_OPT_SORT_ORDER','Поръчка');
  define('TABLE_HEADING_OPT_DEFAULT','Нулиране');

  define('TABLE_HEADING_OPT_TYPE', 'Вид опция'); //CLR 031203 add option type column
  define('TABLE_HEADING_OPTION_VALUE_SIZE','Размер');
  define('TABLE_HEADING_OPTION_VALUE_MAX','Максимум');
  define('TABLE_HEADING_OPTION_VALUE_ROWS','Редове');
  define('TABLE_HEADING_OPTION_VALUE_COMMENTS','Коментари');

  define('TEXT_OPTION_VALUE_COMMENTS','Коментари: ');
  define('TEXT_OPTION_VALUE_SIZE','Размер: ');
  define('TEXT_OPTION_VALUE_MAX','Допустима дължина: ');

  define('TEXT_ATTRIBUTES_IMAGE','Мострена снимка на атрибутите:');
  define('TEXT_ATTRIBUTES_IMAGE_DIR','Директория за снимки на атрибутите:');

  define('TEXT_ATTRIBUTES_FLAGS','Атрибут<br />Флагове:');
  define('TEXT_ATTRIBUTES_DISPLAY_ONLY', 'Използва се<br />амо като показно:');
  define('TEXT_ATTRIBUTES_IS_FREE', 'Атрибутът е безплатен,<br />когато продуктът е безплатен:');
  define('TEXT_ATTRIBUTES_DEFAULT', 'Изберете Атрибут<br />по подразбиране:');
  define('TEXT_ATTRIBUTE_IS_DISCOUNTED', 'Приложи отстъпка използвана от<br />продукти на промоция и в разпродажба:');
  define('TEXT_ATTRIBUTE_PRICE_BASE_INCLUDED','Включи в базовата цена,<br />когато цената е по атрибути');
  define('TEXT_ATTRIBUTES_REQUIRED','Изисква атрибут<br />за текст:');

  define('LEGEND_BOX','Легенда:');
  define('LEGEND_KEYS','Изкл./Вкл.');
  define('LEGEND_ATTRIBUTES_DISPLAY_ONLY', 'Само се показва');
  define('LEGEND_ATTRIBUTES_IS_FREE', 'Безплатно');
  define('LEGEND_ATTRIBUTES_DEFAULT', 'По подразбиране');
  define('LEGEND_ATTRIBUTE_IS_DISCOUNTED', 'Намалено');
  define('LEGEND_ATTRIBUTE_PRICE_BASE_INCLUDED','Базова цена');
  define('LEGEND_ATTRIBUTES_REQUIRED','Задължително');
  define('LEGEND_ATTRIBUTES_IMAGES','Снимки');
  define('LEGEND_ATTRIBUTES_DOWNLOAD','Валидно/Невалидно<br />Файлово име');

  define('TEXT_ATTRIBUTES_UPDATE_SORT_ORDER','Сортиране по подразбиране');
  define('TEXT_PRODUCTS_LISTING','Изброени продукти за: ');
  define('TEXT_NO_PRODUCTS_SELECTED','Не са избрани продукти');
  define('TEXT_NO_ATTRIBUTES_DEFINED','Няма дефинирани атрибути за продукт с ID#');

  define('TEXT_PRODUCTS_ID','Продукт ID#');
  define('TEXT_ATTRIBUTES_DELETE','ИЗТРИЙ ВСИЧКИ');
  define('TEXT_ATTRIBUTES_COPY_PRODUCTS','Копирав в продукт');
  define('TEXT_ATTRIBUTES_COPY_CATEGORY','Копирай в категория');

  define('TEXT_INFO_HEADING_ATTRIBUTE_FEATURES','Промени на атрибутите за продукти с ID# ');
  define('TEXT_INFO_ATTRIBUTES_FEATURES_DELETE','Изтрий <strong>ВСИЧКИ</strong> продуктови атрибути на:<br />');
  define('TEXT_INFO_ATTRIBUTES_FEATURES_COPY_TO','Копирай атрибутите в друг продукт или категория от:<br />');

  define('TEXT_ATTRIBUTES_COPY_TO_PRODUCTS','ПРОДУКТ');
  define('TEXT_INFO_ATTRIBUTES_FEATURES_COPY_TO_PRODUCT','Копирай атрибутите в друг <strong>Продукт</strong> с ID#');
  define('TEXT_INFO_ATTRIBUTES_FEATURE_COPY_TO','Избери продукт, върху който да копираш атрибутите:');

  define('TEXT_ATTRIBUTES_COPY_TO_CATEGORY','КАТЕГОРИЯ');
  define('TEXT_INFO_ATTRIBUTES_FEATURE_CATEGORIES_COPY_TO','Избери категория, в която да копираш атрибутите:');
  define('TEXT_INFO_ATTRIBUTES_FEATURES_COPY_TO_CATEGORY','Копирай атрибутите върху всички продукти в <strong>Категорията</strong> от продуктов ID#');

  define('TEXT_COPY_ATTRIBUTES_CONDITIONS','<strong>Какво да се случи с наличните продуктови атрибути?</strong>');
  define('TEXT_COPY_ATTRIBUTES_DELETE','<strong>Изтрий</strong>, а след това копирай новите атрибути');
  define('TEXT_COPY_ATTRIBUTES_UPDATE','<strong>Обнови</strong> с новите настройки/цени, а след това добави новите атрибути');
  define('TEXT_COPY_ATTRIBUTES_IGNORE','<strong>Игнорирай</strong> и добави само нови атрибути');

  define('SUCCESS_PRODUCT_UPDATE_SORT','Успешно сортиране на атрибут за ID# ');
  define('SUCCESS_PRODUCT_UPDATE_SORT_NONE','Няма атрибути с необходимост от обновяване на сортирането за ID# ');
  define('SUCCESS_ATTRIBUTES_DELETED','Атрибутите бяха успешно изтрити');
  define('SUCCESS_ATTRIBUTES_UPDATE','Атрибутите бяха успешно обновени');

  define('WARNING_PRODUCT_COPY_TO_CATEGORY_NONE','Не е избрана категория за копирането');
  define('TEXT_PRODUCT_IN_CATEGORY_NAME',' - в категория: ');

  define('TEXT_DELETE_ALL_ATTRIBUTES','Сигурни ли сте, че желаете да изтриете всички атрибути за ID# ');

  define('TEXT_ATTRIBUTE_COPY_SKIPPING','<strong>Пропусни нов атрибут </strong>');
  define('TEXT_ATTRIBUTE_COPY_INSERTING','<strong>Добави нов атрибут от </strong>');
  define('TEXT_ATTRIBUTE_COPY_UPDATING','<strong>Обнови от атрибут </strong>');

// preview
  define('TEXT_ATTRIBUTES_PREVIEW','ПРЕГЛЕДАЙ АТРИБУТИТЕ');
  define('TEXT_ATTRIBUTES_PREVIEW_DISPLAY','ПРЕГЛЕДАЙ АТРИБУТИТЕ ЗА ID#');
  define('TEXT_PRODUCT_OPTIONS', '<strong>Моля, изберете:</strong>');

  define('TEXT_ATTRIBUTES_INSERT_INFO', '<strong>Определи настройките на атрибута, след което натисни Добави, за да ги приложиш</strong>');
  define('TEXT_PRICED_BY_ATTRIBUTES', 'Цена по атрибути');
  define('TEXT_PRODUCTS_PRICE', 'Цена на продукта: ');
  define('TEXT_SPECIAL_PRICE', 'Промоционална цена: ');
  define('TEXT_SALE_PRICE', 'Цена за разпродажба: ');
  define('TEXT_FREE', 'БЕЗПЛАТНО');
  define('TEXT_CALL_FOR_PRICE', 'Обади се за цена');
  define('TEXT_SAVE_CHANGES','ОБНОВИ И СЪХРАНИ ПРОМЕНИТЕ:');

  define('TEXT_INFO_ID', 'ID#');
  define('TEXT_INFO_ALLOW_ADD_TO_CART_NO', 'Да не добавя се в количката');

  define('TEXT_DELETE_ATTRIBUTES_OPTION_NAME_VALUES', 'Потвърдете изтриването на ВСИЧКИ Стойности на опциите на продукта за Опция с име...');
  define('TEXT_INFO_PRODUCT_NAME', '<strong>Продуктово име: </strong>');
  define('TEXT_INFO_PRODUCTS_OPTION_NAME', '<strong>Име на опция: </strong>');
  define('TEXT_INFO_PRODUCTS_OPTION_ID', '<strong>ID#</strong>');
  define('SUCCESS_ATTRIBUTES_DELETED_OPTION_NAME_VALUES', 'Успешно бяха изтрити всички Стойности на опциите за Опция с име: ');
  