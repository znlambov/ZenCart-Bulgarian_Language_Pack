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
//  $Id: ezpages.php 2827 2006-01-08 19:46:40Z ajeh $
//
define('HEADING_TITLE', 'EZ-Страници');
define('TABLE_HEADING_PAGES', 'Заглавие');
define('TABLE_HEADING_ACTION', 'Действие');
define('TABLE_HEADING_VSORT_ORDER', 'Сортиране на кутийките');
define('TABLE_HEADING_HSORT_ORDER', 'Сортиране на футъра');
define('TEXT_PAGES_TITLE', 'Заглавие на страницата:');
define('TEXT_PAGES_HTML_TEXT', 'HTML съдържание:');
define('TABLE_HEADING_DATE_ADDED', 'Добавена на:');
define('TEXT_PAGES_STATUS_CHANGE', 'Промяна в статуса: %s');
define('TEXT_INFO_DELETE_INTRO', 'Искате ли да изтриете тази страница?');
define('SUCCESS_PAGE_INSERTED', 'Страницата бе успешно въведена.');
define('SUCCESS_PAGE_UPDATED', 'Страницата бе успешно обновена.');
define('SUCCESS_PAGE_REMOVED', 'Страницата бе успешно премахната.');
define('SUCCESS_PAGE_STATUS_UPDATED', 'Статусът на страницата бе успешно обновен.');
define('ERROR_PAGE_TITLE_REQUIRED', 'Грешка: необходимо е заглавие за страницата.');
define('ERROR_UNKNOWN_STATUS_FLAG', 'Грешка: невалиден статус.');
define('ERROR_MULTIPLE_HTML_URL', 'Грешка: дефинирани са множество настройки, при възможна само една за всяка връзка...<br />Дефинирайте само: HTML съдържание -или- вътрешна URL връзка -или- външна URL връзка');

define('TABLE_HEADING_ID', 'ID');
define('TABLE_HEADING_STATUS_HEADER', 'Хедър:');
define('TABLE_HEADING_STATUS_SIDEBOX', 'Странични кутийки:');
define('TABLE_HEADING_STATUS_FOOTER', 'Футър:');
define('TABLE_HEADING_STATUS_TOC', 'Съдържание:');
define('TABLE_HEADING_CHAPTER', 'Глава:');

define('TABLE_HEADING_PAGE_OPEN_NEW_WINDOW', 'Отваря нов прозорец:');
define('TABLE_HEADING_PAGE_IS_SSL', 'Страницата е SSL:');

define('TEXT_DISPLAY_NUMBER_OF_PAGES', 'Показва <b>%d</b> до <b>%d</b> (от <b>%d</b> страници)');
define('IMAGE_NEW_PAGE', 'Нова страница');
define('TEXT_INFO_PAGE_IMAGE', 'Снимка');
define('TEXT_INFO_CURRENT_IMAGE', 'Текуща снимка:');
define('TEXT_INFO_PAGES_ID', 'ID: ');
define('TEXT_INFO_PAGES_ID_SELECT', 'Избери страница...');

define('TEXT_HEADER_SORT_ORDER', 'Подреди:');
define('TEXT_SIDEBOX_SORT_ORDER', 'Подреди:');
define('TEXT_FOOTER_SORT_ORDER', 'Подреди:');
define('TEXT_TOC_SORT_ORDER', 'Подреди:');
define('TEXT_CHAPTER', 'Пред./Следв. Глава:');
define('TABLE_HEADING_CHAPTER_PREV_NEXT', 'Глава:&nbsp;<br />');

define('TEXT_HEADER_SORT_ORDER_EXPLAIN', 'Header Sort Order used while generating pages in single row for the header; Sort order should be greater than zero to enable this page in the row type listing');
define('TEXT_SIDEBOX_ORDER_EXPLAIN', 'Sidebox Sort order is used when pages are listed in vertical links; Sort order should be greater than zero to enable it in vertical listing, else it will be considered as HTML text for special purposes');
define('TEXT_FOOTER_ORDER_EXPLAIN', 'Footer Sort Order used while generating pages in single row footer; Sort order should be greater than zero to enable this page in the row type listing');
define('TEXT_TOC_SORT_ORDER_EXPLAIN', 'TOC (Table of Contents) Sort Order used while generating pages that are customized as either a single row (header/footer, etc) or vertically, based on individual needs; Sort order should be greater than zero to enable this page in the listing');
define('TEXT_CHAPTER_EXPLAIN', 'Chapters are used with TOC (Table of Contents) Sort Order for the display on Previous/Next. Links in the TOC will consist of pages matching this chapter number, and will be displayed in the TOC Sort Order');

define('TEXT_ALT_URL', 'Internal Link URL:');
define('TEXT_ALT_URL_EXPLAIN', 'If specified, the page content will be ignored and this INTERNAL alternate URL will be used to make the link<br />Example to Reviews: index.php?main_page=reviews<br />Example to My Account: index.php?main_page=account and mark as SSL');

define('TEXT_ALT_URL_EXTERNAL', 'External Link URL:');
define('TEXT_ALT_URL_EXTERNAL_EXPLAIN', 'If specified, the page content will be ignored and this EXTERNAL alternate URL will be used to make the link<br />Example to external link: http://www.sashbox.net');

define('TEXT_SORT_CHAPTER_TOC_TITLE_INFO', 'Display Order: ');
define('TEXT_SORT_CHAPTER_TOC_TITLE', 'Chapter/TOC');
define('TEXT_SORT_HEADER_TITLE', 'Header');
define('TEXT_SORT_SIDEBOX_TITLE', 'Sidebox');
define('TEXT_SORT_FOOTER_TITLE', 'Footer');
define('TEXT_SORT_PAGE_TITLE', 'Page Title');
define('TEXT_SORT_PAGE_ID_TITLE', 'Page ID, Title');

define('TEXT_PAGE_TITLE', 'Title:');
define('TEXT_WARNING_MULTIPLE_SETTINGS', '<strong>WARNING: Multiple Link Definition</strong>');
?>
