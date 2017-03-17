<?php
// Bulgarian Language Pack for Zen Cart - https://github.com/znlambov/ZenCart-Bulgarian_Language_Pack
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
//  $Id: specials.php 4533 2006-09-17 17:21:10Z ajeh $
//

define('HEADING_TITLE', 'Промоции');

define('TABLE_HEADING_PRODUCTS', 'Продукти');
define('TABLE_HEADING_PRODUCTS_MODEL','Модел');
define('TABLE_HEADING_PRODUCTS_PRICE', 'Продуктова цена/промоция/разпродажба');
define('TABLE_HEADING_PRODUCTS_PERCENTAGE','Процент');
define('TABLE_HEADING_AVAILABLE_DATE', 'Стартира от');
define('TABLE_HEADING_EXPIRES_DATE','Изтича на');
define('TABLE_HEADING_STATUS', 'Статус');
define('TABLE_HEADING_ACTION', 'Действие');

define('TEXT_SPECIALS_PRODUCT', 'Продукт:');
define('TEXT_SPECIALS_SPECIAL_PRICE', 'Промо цена:');
define('TEXT_SPECIALS_EXPIRES_DATE', 'Изтича на:');
define('TEXT_SPECIALS_AVAILABLE_DATE', 'Стартира от:');
define('TEXT_SPECIALS_PRICE_TIP', '<b>Забележка:</b><ul><li>Можете да въведете процентна отстъпка в полето така: <b>20%</b></li><li>Ако въведете нова цена, вместо процентна отстъпка, то десетичният знак трябва да е \'.\' (десетична точка), като например: <b>49.99</b></li><li>Оставете полето за дата празно, ако искате да не важат срокове за промоцията</li></ul>');

define('TEXT_INFO_DATE_ADDED', 'Добавен на:');
define('TEXT_INFO_LAST_MODIFIED', 'Последна редакция:');
define('TEXT_INFO_NEW_PRICE', 'Нова цена:');
define('TEXT_INFO_ORIGINAL_PRICE', 'Оригинална цена:');
define('TEXT_INFO_DISPLAY_PRICE', 'Показва се цена:<br />');
define('TEXT_INFO_AVAILABLE_DATE', 'Стартира от:');
define('TEXT_INFO_EXPIRES_DATE', 'Изтича на:');
define('TEXT_INFO_STATUS_CHANGE', 'Променен статус:');
define('TEXT_IMAGE_NONEXISTENT', 'Няма налична снимка');

define('TEXT_INFO_HEADING_DELETE_SPECIALS', 'Изтрий промоция');
define('TEXT_INFO_DELETE_INTRO', 'Искате ли да изтриете промоционалната цена на продукта?');

define('SUCCESS_SPECIALS_PRE_ADD', 'Успешно добавена промоция... моля, обновете цената и датите...');
define('WARNING_SPECIALS_PRE_ADD_EMPTY', 'Warning: No Product ID specified ... nothing was added ...');
define('WARNING_SPECIALS_PRE_ADD_DUPLICATE', 'Warning: Product ID already on Special ... nothing was added ...');
define('WARNING_SPECIALS_PRE_ADD_BAD_PRODUCTS_ID', 'Warning: Product ID is invalid ... nothing was added ...');
define('TEXT_INFO_HEADING_PRE_ADD_SPECIALS', 'Manually add new Special by Product ID');
define('TEXT_INFO_PRE_ADD_INTRO', 'On large databases, you may Manually Add a Special by the Product ID<br /><br />This is best used when the page takes too long to render and trying to select a Product from the dropdown becomes difficult due to too many Products from which to choose.');
define('TEXT_PRE_ADD_PRODUCTS_ID', 'Please enter the Product ID to be Pre-Added: ');
define('TEXT_INFO_MANUAL', 'Product ID to be Manually Added as a Special');
?>