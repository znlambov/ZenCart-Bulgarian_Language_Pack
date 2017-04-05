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
// $Id: define_pages_editor.php 1969 2005-09-13 06:57:21Z drbyte $
//

define('HEADING_TITLE', 'Редактор на дефинирани страници за: ');
define('NAVBAR_TITLE', 'Редактор на дефинирани страници');

define('TEXT_INFO_EDIT_PAGE', 'Изберете страница за редакция:');

define('TEXT_INFO_MAIN_PAGE', 'Заглавна страница');

define('TEXT_INFO_SHIPPINGINFO', 'Доставка и рекламации');
define('TEXT_INFO_PRIVACY', 'Декларация за поверителност');
define('TEXT_INFO_CONDITIONS', 'Общи условия');
define('TEXT_INFO_CONTACT_US', 'Контакти');
define('TEXT_INFO_CHECKOUT_SUCCESS', 'Приключена поръчка');

define('TEXT_INFO_PAGE_2', 'Страница 2');
define('TEXT_INFO_PAGE_3', 'Страница 3');
define('TEXT_INFO_PAGE_4', 'Страница 4');

define('TEXT_FILE_DOES_NOT_EXIST', 'Файлът не съществува: %s');

define('ERROR_FILE_NOT_WRITEABLE', 'Грешка: върху файла неможе да се записва. Моля, променете правата за четене и запис: %s');

define('TEXT_INFO_SELECT_FILE', 'Изберете файл за редактиране...');
define('TEXT_INFO_EDITING', 'Редактирате файл:');

define('TEXT_INFO_CAUTION','Забележка: би трябвало да редактирате файловете, които се намират в директорията на шаблона, който използвате в момента. Пример: /languages/' . $_SESSION['language'] . '/html_includes/' . $template_dir . '<br />Правите резервни копия, когато променяте файлове.');
?>