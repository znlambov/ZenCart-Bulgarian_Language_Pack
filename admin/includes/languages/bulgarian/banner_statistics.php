<?php
// Bulgarian Language Pack for Zen Cart 1.5.5 at https://github.com/znlambov/ZenCart-Bulgarian_Language_Pack
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
//  $Id: banner_statistics.php 1105 2005-04-04 22:05:35Z birdbrain $
//

define('HEADING_TITLE', 'Статистика за банера');

define('TABLE_HEADING_SOURCE', 'Източник');
define('TABLE_HEADING_VIEWS', 'Преглеждания');
define('TABLE_HEADING_CLICKS', 'Кликове');

define('TEXT_BANNERS_DATA', 'D<br>a<br>t<br>a');
define('TEXT_BANNERS_DAILY_STATISTICS', '%s Дневна статистика за %s %s');
define('TEXT_BANNERS_MONTHLY_STATISTICS', '%s Месечна статистика за %s');
define('TEXT_BANNERS_YEARLY_STATISTICS', '%s Годишна статистика');

define('STATISTICS_TYPE_DAILY', 'Дневно');
define('STATISTICS_TYPE_MONTHLY', 'Месечно');
define('STATISTICS_TYPE_YEARLY', 'Годишно');

define('TITLE_TYPE', 'Тип:');
define('TITLE_YEAR', 'Година:');
define('TITLE_MONTH', 'Месец:');

define('ERROR_GRAPHS_DIRECTORY_DOES_NOT_EXIST', 'Грешка: Не съществува директория за графики. Създайте такава. Пример: <strong>' . DIR_WS_ADMIN . 'images/graphs</strong>');
define('ERROR_GRAPHS_DIRECTORY_NOT_WRITEABLE', 'Грешка: В директорията за графики неможе да се записва. Намира се в: <strong>' . DIR_WS_ADMIN . 'images/graphs</strong>');
?>