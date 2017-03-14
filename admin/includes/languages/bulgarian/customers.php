<?php
// Bulgarian Language Pack for Zen Cart 1.5.5 at https://github.com/znlambov/ZenCart-Bulgarian_Language_Pack
/**
 * @package admin
 * @copyright Copyright 2003-2016 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: Author: DrByte  Sun Oct 18 23:54:03 2015 -0400 Modified in v1.5.5 $
 */

define('HEADING_TITLE', 'Потребители');

define('TABLE_HEADING_ID', 'ID#');
define('TABLE_HEADING_FIRSTNAME', 'Име');
define('TABLE_HEADING_LASTNAME', 'Фамилия');
define('TABLE_HEADING_ACCOUNT_CREATED', 'Създаден на');
define('TABLE_HEADING_LOGIN', 'Последно влизане');
define('TABLE_HEADING_ACTION', 'Действие');
define('TABLE_HEADING_PRICING_GROUP', 'Ценова група');
define('TABLE_HEADING_AUTHORIZATION_APPROVAL', 'Одобрен');
define('TABLE_HEADING_GV_AMOUNT', 'ПВ баланс');

define('TEXT_DATE_ACCOUNT_CREATED', 'Създаден на:');
define('TEXT_DATE_ACCOUNT_LAST_MODIFIED', 'Последно редактиран:');
define('TEXT_INFO_DATE_LAST_LOGON', 'Последно влизал:');
define('TEXT_INFO_NUMBER_OF_LOGONS', 'Брой влизания:');
define('TEXT_INFO_COUNTRY', 'Държава:');
define('TEXT_INFO_NUMBER_OF_REVIEWS', 'Брой отзиви:');
define('TEXT_DELETE_INTRO', 'Действително ли искате да изтриете този потребител?');
define('TEXT_DELETE_REVIEWS', 'Изтрий %s отзив(и)');
define('TEXT_INFO_HEADING_DELETE_CUSTOMER', 'Изтрий потребителя');
define('TYPE_BELOW', 'Попъли по-долу');
define('PLEASE_SELECT', 'Избери');
define('TEXT_INFO_NUMBER_OF_ORDERS', 'Брой поръчки:');
define('TEXT_INFO_LAST_ORDER','Последна поръчка:');
define('TEXT_INFO_ORDERS_TOTAL', 'Общо:');
define('CUSTOMERS_REFERRAL', 'Справка клиент<br />1-ви Купон за отстъпка');
define('TEXT_INFO_GV_AMOUNT', 'ПВ баланс');

define('ENTRY_NONE', 'Нищо');

define('TABLE_HEADING_COMPANY','Фирма');

define('TEXT_INFO_HEADING_RESET_CUSTOMER_PASSWORD', 'Смени паролата на потребителя');
define('TEXT_PWDRESET_INTRO', 'За да смените паролата на потребителя, въведете нова парола и я потвърдете по-долу. Новата парола трябва да отговаря на нормалните правила за потребителска парола.');
define('TEXT_CUST_NEW_PASSWORD', 'Нова парола:');
define('TEXT_CUST_CONFIRM_PASSWORD', 'Потвърди парола:');
define('ERROR_PWD_TOO_SHORT', 'Грешка: паролата е твърде къса.');
define('SUCCESS_PASSWORD_UPDATED', 'Паролата бе обновена.');

define('EMAIL_CUSTOMER_PWD_CHANGE_MESSAGE', 'Паролата Ви бе сменена от администратор. Новата Ви парола е: ');
define('EMAIL_CUSTOMER_PWD_CHANGE_SUBJECT', 'Нова профилна парола');
define('EMAIL_CUSTOMER_PWD_CHANGE_MESSAGE_FOR_ADMIN', 'Вие сменихте паролата на потребител: ' . "\n" . '%s' . "\n\n" . 'Администратор ID: %s');

define('CUSTOMERS_AUTHORIZATION', 'Статус за одобрение на потребителите');
define('CUSTOMERS_AUTHORIZATION_0', 'Одобрен');
define('CUSTOMERS_AUTHORIZATION_1', 'Чака одобрение - трябва да бъде одобрен за да разглежда');
define('CUSTOMERS_AUTHORIZATION_2', 'Чака одобрение - може да разглежда но не вижда цени');
define('CUSTOMERS_AUTHORIZATION_3', 'Чака одобрение - може да разглежда и вижда цени, но не може да поръчва');
define('CUSTOMERS_AUTHORIZATION_4', 'Забранен - не може да влиза или пазари');
define('ERROR_CUSTOMER_APPROVAL_CORRECTION1', 'Внимание: магазинът Ви е с настройка - Трябва одобрение за разглеждане. Потребителят е с чакащо одобрение и неможе да разглежда.');
define('ERROR_CUSTOMER_APPROVAL_CORRECTION2', 'Внимание: магазинът Ви е с настройка - Трябва одобрение за цени. Потребителят е с чакащо одобрение и може да разглежда, но не вижда цени.');

define('EMAIL_CUSTOMER_STATUS_CHANGE_MESSAGE', 'Потребителският Ви статус бе обновен. Благодарим Ви, че избрахте нас! Очакваме с нетърпение Вашите поръчки.');
define('EMAIL_CUSTOMER_STATUS_CHANGE_SUBJECT', 'Обновен потребителски статус');

define('ADDRESS_BOOK_TITLE', 'Адресна книга');
define('PRIMARY_ADDRESS', '(основен адрес)');
define('TEXT_MAXIMUM_ENTRIES', '<span class="coming"><strong>Забележка:</strong></span> Допускат се не повече от %s адреса в книгата.');
define('TEXT_INFO_ADDRESS_BOOK_COUNT', ' | 1 от  ');
