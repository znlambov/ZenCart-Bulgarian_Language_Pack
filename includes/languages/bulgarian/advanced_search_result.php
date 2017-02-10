<?php  //Bulgarian Language Pack for Zen Cart 1.5.5d
//
// +----------------------------------------------------------------------+
// |zen-cart Open Source E-commerce                                       |
// +----------------------------------------------------------------------+
// | Copyright (c) 2003 The zen-cart developers                           |
// |                                                                      |   
// | http://www.zen-cart.com/index.php                                    |   
// |                                                                      |   
// | Portions Copyright (c) 2003 osCommerce                               |
// +----------------------------------------------------------------------+
// | This source file is subject to version 2.0 of the GPL license,       |
// | that is bundled with this package in the file LICENSE, and is        |
// | available through the world-wide-web at the following url:           |
// | http://www.zen-cart.com/license/2_0.txt.                             |
// | If you did not receive a copy of the zen-cart license and are unable |
// | to obtain it through the world-wide-web, please send a note to       |
// | license@zen-cart.com so we can mail you a copy immediately.          |
// +----------------------------------------------------------------------+
// $Id: advanced_search_result.php 1969 2005-09-13 06:57:21Z drbyte $
//

define('NAVBAR_TITLE_1', 'Разширено търсене');
define('NAVBAR_TITLE_2', 'Резултати от търсенето');

//define('HEADING_TITLE_1', 'Advanced Search');
define('HEADING_TITLE', 'Разширено търсене');

define('HEADING_SEARCH_CRITERIA', 'Критерии за търсене');

define('TEXT_SEARCH_IN_DESCRIPTION', 'Търси в описанието на продуктите');
define('ENTRY_CATEGORIES', 'Категории:');
define('ENTRY_INCLUDE_SUBCATEGORIES', 'Включи подкатегории');
define('ENTRY_MANUFACTURERS', 'Производители:');
define('ENTRY_PRICE_FROM', 'Цена от:');
define('ENTRY_PRICE_TO', 'Цена до:');
define('ENTRY_DATE_FROM', 'От дата:');
define('ENTRY_DATE_TO', 'До дата:');

define('TEXT_SEARCH_HELP_LINK', 'Помощ [?]');

define('TEXT_ALL_CATEGORIES', 'Всички категории');
define('TEXT_ALL_MANUFACTURERS', 'Всички производители');

define('HEADING_SEARCH_HELP', 'Помощ за търснето');
define('TEXT_SEARCH_HELP', 'Ключовите думи могат да бъдат разделени с AND и/или OR, за по-голям контрол при търсенето.<br /><br />Примерно: Microsoft AND mouse, ще генерира резултати, съдържащи и двете думи. Докато търсене от типа mouse OR keyboard, ще генерира резултати, съдържащи и двете или една от думите.<br /><br />Точни съвпадения могат да бъдат търсени, като се затворят ключовите думи в двойни кавички.<br /><br />Примерно, "notebook computer" ще генерира резултат, в който съвпада точната поредица от думи или символи.<br /><br />Заа по-голям контрол на търсенето могат да се използват и скоби.<br /><br />Примерно, Microsoft and (keyboard or mouse or "visual basic").');
define('TEXT_CLOSE_WINDOW', 'Затвори прозореца [x]');

define('TABLE_HEADING_IMAGE', '');
define('TABLE_HEADING_MODEL', 'Модел');
define('TABLE_HEADING_PRODUCTS', 'Име на продукта');
define('TABLE_HEADING_MANUFACTURER', 'Производител');
define('TABLE_HEADING_QUANTITY', 'Количество');
define('TABLE_HEADING_PRICE', 'Цена');
define('TABLE_HEADING_WEIGHT', 'Тегло');
define('TABLE_HEADING_BUY_NOW', 'Купи сега');

define('TEXT_NO_PRODUCTS', 'Няма продукти, които да отговарят на критериите за търсене.');

define('ERROR_AT_LEAST_ONE_INPUT', 'Поне едно от полетата във формата за търсене трябва да бъде попълнено.');
define('ERROR_INVALID_FROM_DATE', 'Невалидна начална дата.');
define('ERROR_INVALID_TO_DATE', 'Невалидна крайна дата.');
define('ERROR_TO_DATE_LESS_THAN_FROM_DATE', 'Крайната дата трябва да бъде по-голяма или равна на началната дата.');
define('ERROR_PRICE_FROM_MUST_BE_NUM', 'ЦЦената трябва да е число.');
define('ERROR_PRICE_TO_MUST_BE_NUM', 'Цената трябва да е число.');
define('ERROR_PRICE_TO_LESS_THAN_PRICE_FROM', 'Крайната цена трябва да бъде по-висока или равна на началната цена.');
define('ERROR_INVALID_KEYWORDS', 'Невалидни ключови думи.');
?>
