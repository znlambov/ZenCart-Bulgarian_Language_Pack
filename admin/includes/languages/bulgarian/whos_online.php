<?php
// Bulgarian Language Pack for Zen Cart - https://github.com/znlambov/ZenCart-Bulgarian_Language_Pack
/**
 * @package admin
 * @copyright Copyright 2003-2016 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: Author: DrByte  Mon Oct 19 01:43:02 2015 -0400 Modified in v1.5.5 $
 */

define('HEADING_TITLE', 'Кой е на линия');
define('TABLE_HEADING_ONLINE', 'На линия');
define('TABLE_HEADING_CUSTOMER_ID', 'ID');
define('TABLE_HEADING_FULL_NAME', 'Пълно име');
define('TABLE_HEADING_IP_ADDRESS', 'IP адрес');
define('TABLE_HEADING_SESSION_ID', 'Сесия');
define('TABLE_HEADING_ENTRY_TIME', 'Време на влизане');
define('TABLE_HEADING_LAST_CLICK', 'Време на последен клик');
define('TIME_PASSED_LAST_CLICKED', '<strong>Време от клика:</strong> ');
define('TABLE_HEADING_LAST_PAGE_URL', 'Последно видян URL');
define('TABLE_HEADING_ACTION', 'Действие');
define('TABLE_HEADING_SHOPPING_CART', 'Количка на потребителя');
define('TEXT_SHOPPING_CART_SUBTOTAL', 'Междинна сума');
define('TEXT_NUMBER_OF_CUSTOMERS', 'В момента има %s потребителя на линия');

define('WHOS_ONLINE_REFRESH_LIST_TEXT', 'ОБНОВИ СПИСЪКА');
define('WHOS_ONLINE_LEGEND_TEXT', 'Легенда:');
define('WHOS_ONLINE_ACTIVE_TEXT', 'Активни - количка');
define('WHOS_ONLINE_INACTIVE_TEXT', 'Неактивни - количка');
define('WHOS_ONLINE_ACTIVE_NO_CART_TEXT', 'Активни без количка');
define('WHOS_ONLINE_INACTIVE_NO_CART_TEXT', 'Неактивни без количка');
define('WHOS_ONLINE_INACTIVE_LAST_CLICK_TEXT', 'Неактивен - последен клик >=');
define('WHOS_ONLINE_INACTIVE_ARRIVAL_TEXT', 'Неактивен от началото >');
define('WHOS_ONLINE_REMOVED_TEXT', 'ще бъде премахнат');

define('TEXT_SESSION_ID', '<strong>Сесия ID:</strong> ');
define('TEXT_HOST', '<strong>Хост:</strong> ');
define('TEXT_USER_AGENT', '<strong>Потребителски агент:</strong> ');
define('TEXT_EMPTY_CART', '<strong>Празна количка</strong>');
define('TEXT_WHOS_ONLINE_FILTER_SPIDERS', 'Да изключа ли паяците?');
define('TEXT_WHOS_ONLINE_FILTER_ADMINS', 'Да изключа ли админ IP адреса?');

define('WHOIS_TIMER_REMOVE', 1200); // seconds when removed from whos_online table - 1200 default = 20 minutes
define('WHOIS_TIMER_INACTIVE', 180); // seconds when considered inactive - 180 default = 3 minutes
define('WHOIS_TIMER_DEAD', 540); // seconds when considered dead - 540 default = 9 minutes
define('WHOIS_SHOW_HOST', '1'); // show Last Clicked time and host name - 1 default
define('WHOIS_REPEAT_LEGEND_BOTTOM', '12'); // show legend on bottom when more than how many entries - 12 default

define('TEXT_DUPLICATE_IPS', 'Дуплициран IP адрес: ');
define('TEXT_TOTAL_UNIQUE_USERS', 'Общо уникални потребители: ');

define('TEXT_WHOS_ONLINE_TIMER_UPDATING', 'Обновява ');
define('TEXT_WHOS_ONLINE_TIMER_EVERY', 'на всеки %s секунди.&nbsp;&nbsp;');
define('TEXT_WHOS_ONLINE_TIMER_DISABLED', 'Ръчно');
define('TEXT_WHOS_ONLINE_TIMER_FREQ0', 'Изкл.');
define('TEXT_WHOS_ONLINE_TIMER_FREQ1', '5 сек');
define('TEXT_WHOS_ONLINE_TIMER_FREQ2', '15 сек');
define('TEXT_WHOS_ONLINE_TIMER_FREQ3', '30 сек');
define('TEXT_WHOS_ONLINE_TIMER_FREQ4', '1 мин');
define('TEXT_WHOS_ONLINE_TIMER_FREQ5', '5 мин');
define('TEXT_WHOS_ONLINE_TIMER_FREQ6', '10 мин');
define('TEXT_WHOS_ONLINE_TIMER_FREQ7', '14 мин');
