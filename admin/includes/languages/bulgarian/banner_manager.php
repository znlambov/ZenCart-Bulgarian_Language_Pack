<?php
// Bulgarian Language Pack for Zen Cart - https://github.com/znlambov/ZenCart-Bulgarian_Language_Pack
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
//  $Id: banner_manager.php 3131 2006-03-07 22:53:04Z ajeh $
//

define('HEADING_TITLE', 'Мениджър на банерите');

define('TABLE_HEADING_BANNERS', 'Банери');
define('TABLE_HEADING_GROUPS', 'Групи');
define('TABLE_HEADING_STATISTICS', 'Показвания / Кликове');
define('TABLE_HEADING_STATUS', 'Състояние');
define('TABLE_HEADING_BANNER_OPEN_NEW_WINDOWS','Нов прозорец');
define('TABLE_HEADING_BANNER_ON_SSL', 'Покажи SSL');
define('TABLE_HEADING_ACTION', 'Действие');
define('TABLE_HEADING_BANNER_SORT_ORDER', 'Сортиране');

define('TEXT_BANNERS_TITLE', 'Название на банер:');
define('TEXT_BANNERS_URL', 'URL на банер:');
define('TEXT_BANNERS_GROUP', 'Банер група:');
define('TEXT_BANNERS_NEW_GROUP', ', или въведи нова банер група по-долу');
define('TEXT_BANNERS_IMAGE', 'Снимка:');
define('TEXT_BANNERS_IMAGE_LOCAL', ', или въведи локален файл по-долу');
define('TEXT_BANNERS_IMAGE_TARGET', 'Цел на снимката (Запази в):');
define('TEXT_BANNER_IMAGE_TARGET_INFO', '<strong>Предложено местоположение за целта на снимката в сървъра:</strong> ' . DIR_FS_CATALOG_IMAGES . 'banners/');
define('TEXT_BANNERS_HTML_TEXT_INFO', '<strong>Забележка: HTML банери не записват броя на кликовете</strong>');
define('TEXT_BANNERS_HTML_TEXT', 'HTML текст:');
define('TEXT_BANNERS_ALL_SORT_ORDER', 'Сортиране - banner_box_all');
define('TEXT_BANNERS_ALL_SORT_ORDER_INFO', '<strong>Забележка: Страничната кутийка banners_box_all ще покава банерите в техния установен ред на сортиране</strong>');
define('TEXT_BANNERS_EXPIRES_ON', 'Валидно до:');
define('TEXT_BANNERS_OR_AT', ', или до');
define('TEXT_BANNERS_IMPRESSIONS', 'показвания/преглеждания.');
define('TEXT_BANNERS_SCHEDULED_AT', 'Планиран за:');
define('TEXT_BANNERS_BANNER_NOTE', '<b>Забележки за банерите:</b><ul><li>Използвай снимка или HTML текст за банера, но не и двете.</li><li>HTML текстът има предимство пред снимката</li><li>HTML текстът няма да регистрира броя кликове, но ще регистрира брой показвания</li><li>Банери със снимка с абсолютни URLs не би трябвало да се показват на страници за сигурност</li></ul>');
define('TEXT_BANNERS_INSERT_NOTE', '<b>Забележки за снимките:</b><ul><li>Директориите за качване на снимки трябва да са със съответните права за достъп (write)!</li><li>Не попълвайте полето \'Запиши в\' ако не качвате снимка на сървъра (например, използвате снимка от локален сървър (serverside) ).</li><li>Полето \'Запиши в\' трябва да е съществуваща директория завършваща с наклонена черта (например, banners/).</li></ul>');
define('TEXT_BANNERS_EXPIRCY_NOTE', '<b>Бележки за годността:</b><ul><li>Само едно от двете полета трябва да бъде попълнено</li><li>Ако срокът за показване на банера не трябва да изтече автоматично, оставете полетата празни</li></ul>');
define('TEXT_BANNERS_SCHEDULE_NOTE', '<b>Бележки за планиране:</b><ul><li>Ако е зададено планирано пускане, банерът ще се активира на съответната дата.</li><li>Всички планирани банери са маркирани, като неактивни, докато не настъпи датата за активация.</li></ul>');
define('TEXT_BANNERS_STATUS', 'Банер статус:');
define('TEXT_BANNERS_ACTIVE', 'Активен');
define('TEXT_BANNERS_NOT_ACTIVE', 'Неактивен');
define('TEXT_INFO_BANNER_STATUS', '<strong>Забележка:</strong> Състоянието на банера ще бъде обновено на база планирана дата и брой показвания (импреси)');
define('TEXT_BANNERS_OPEN_NEW_WINDOWS', 'Банер в нов прозорец');
define('TEXT_INFO_BANNER_OPEN_NEW_WINDOWS', '<strong>Забележка:</strong> Банерът се отваря в нов прозорец');
define('TEXT_BANNERS_ON_SSL', 'Банер на SSL');
define('TEXT_INFO_BANNER_ON_SSL', '<strong>Забележка:</strong> Банерът може да се показва на Secure Pages (HTTPS) без грешки');

define('TEXT_BANNERS_DATE_ADDED', 'Добавен на:');
define('TEXT_BANNERS_SCHEDULED_AT_DATE', 'Планиран за: <b>%s</b>');
define('TEXT_BANNERS_EXPIRES_AT_DATE', 'Валиден до: <b>%s</b>');
define('TEXT_BANNERS_EXPIRES_AT_IMPRESSIONS', 'Валиден до: <b>%s</b> показвания');
define('TEXT_BANNERS_STATUS_CHANGE', 'Промяна на статус: %s');

define('TEXT_BANNERS_DATA', 'D<br>A<br>T<br>A');
define('TEXT_BANNERS_LAST_3_DAYS', 'Последните 3 дни');
define('TEXT_BANNERS_BANNER_VIEWS', 'Банер преглеждания');
define('TEXT_BANNERS_BANNER_CLICKS', 'Банер кликове');

define('TEXT_INFO_DELETE_INTRO', 'Наистина ли желаете да изтриете този банер?');
define('TEXT_INFO_DELETE_IMAGE', 'Изтрий снимката на банера');

define('SUCCESS_BANNER_INSERTED', 'Банерът бе добавен успешно.');
define('SUCCESS_BANNER_UPDATED', 'Банерът бе успешно обновен.');
define('SUCCESS_BANNER_REMOVED', 'Банерът бе успешно премахнат.');
define('SUCCESS_BANNER_STATUS_UPDATED', 'Статусът на банера бе успешно обновен.');

define('ERROR_BANNER_TITLE_REQUIRED', 'Грешка: Не е въведено название за банера.');
define('ERROR_BANNER_GROUP_REQUIRED', 'Грешка: Не е въведена е група за банера.');
define('ERROR_IMAGE_DIRECTORY_DOES_NOT_EXIST', 'Грешка: Директорията не съществува: %s');
define('ERROR_IMAGE_DIRECTORY_NOT_WRITEABLE', 'Грешка: В директорията не е разрешен запис: %s');
define('ERROR_IMAGE_DOES_NOT_EXIST', 'Грешка: Няма такава снимка.');
define('ERROR_IMAGE_IS_NOT_WRITEABLE', 'Грешка: Снимката не може да бъде премахната.');
define('ERROR_UNKNOWN_STATUS_FLAG', 'Грешка: Неизвестен статус флаг.');
define('ERROR_BANNER_IMAGE_REQUIRED', 'Грешка: Необходима е снимка за банера.');

define('ERROR_GRAPHS_DIRECTORY_DOES_NOT_EXIST', 'Грешка: Не съществува директория за графики. Моля, създайте такава. Пример: <strong>' . DIR_WS_ADMIN . 'images/graphs</strong>');
define('ERROR_GRAPHS_DIRECTORY_NOT_WRITEABLE', 'Грешка: В директорията за графики неможе да се записва. Намира се в: <strong>' . DIR_WS_ADMIN . 'images/graphs</strong>');

define('TEXT_LEGEND_BANNER_ON_SSL', 'Покажи при SSL');
define('TEXT_LEGEND_BANNER_OPEN_NEW_WINDOWS', 'Нов прозорец');

// Tooltip Text for images in Banner Manager
define('IMAGE_ICON_BANNER_OPEN_NEW_WINDOWS_ON','Отвори нов прозорец - Включено');
define('IMAGE_ICON_BANNER_OPEN_NEW_WINDOWS_OFF','Отвори нов прозорец - Изключено');
define('IMAGE_ICON_BANNER_ON_SSL_ON','Показвай на HTTPS страници - Включено');
define('IMAGE_ICON_BANNER_ON_SSL_OFF','Показвай на HTTPS страници - Изключено');

define('SUCCESS_BANNER_OPEN_NEW_WINDOW_UPDATED', 'Успешно бе обновен статуса на банера, да се отваря в нов прозорец.');
define('SUCCESS_BANNER_ON_SSL_UPDATED', 'Успешно бе обновен статуса на банера, да се показва при SSL връзка.');
?>