<?php
// Bulgarian Language Pack for Zen Cart - https://github.com/znlambov/ZenCart-Bulgarian_Language_Pack
/**
 * @package admin
 * @copyright Copyright 2003-2016 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: Author: DrByte  Wed Oct 28 13:08:12 2015 -0400 Modified in v1.5.5 $
 */

  define ('EMAIL_LOGO_FILENAME', 'header.jpg');  //-File is present in /email folder
  define ('EMAIL_LOGO_WIDTH', '550');
  define ('EMAIL_LOGO_HEIGHT', '110');
  define ('EMAIL_LOGO_ALT_TITLE_TEXT', 'Zen Cart! The Art of E-commerce');
  
  // -----
  // If you want to include some extra information in each email's header information (like perhaps the store address and/or phone number),
  // set this value to contain the full HTML content to be copied, e.g. '<div id="extra-stuff">Extra stuff for header</div>'.
  //
  define ('EMAIL_EXTRA_HEADER_INFO', '');

// office use only
  define('OFFICE_FROM','От:');
  define('OFFICE_EMAIL','е-поща:');

  define('OFFICE_SENT_TO','Изпрати до:');
  define('OFFICE_EMAIL_TO','е-поща:');
  define('OFFICE_USE','Само за офис употреба:');
  define('OFFICE_LOGIN_NAME','Потребителско име:');
  define('OFFICE_LOGIN_EMAIL','Потребителска е-поща:');
  define('OFFICE_LOGIN_PHONE','<strong>Телефон:</strong>');
  define('OFFICE_IP_ADDRESS','IP адрес:');
  define('OFFICE_HOST_ADDRESS','Охст адрес:');
  define('OFFICE_DATE_TIME','Дата и час:');

// email disclaimer
  define('EMAIL_DISCLAIMER', "\n" . 'Този имейл адрес ни бе предоставен от Вас или някой от нашите клиенти. Ако смятате, че сте получили този имейл по погрешка, моля пишете на %s');
  define('EMAIL_SPAM_DISCLAIMER','Този имейл е изпратен според Закона US CAN-SPAM в сила от 01/01/2004. Запитвания за отписване могат да бъдат изпращани и ще бъдат уважени.');
  define('EMAIL_FOOTER_COPYRIGHT','Авторски права (c) ' . date('Y') . ' <a href="http://www.zen-cart.com" target="_blank">Zen Cart</a>. Задвижван от <a href="http://www.zen-cart.com" target="_blank">Zen Cart</a>');
  define('SEND_EXTRA_GV_ADMIN_EMAILS_TO_SUBJECT','[ПВ АДМИН ИЗПРАТЕН]');
  define('SEND_EXTRA_DISCOUNT_COUPON_ADMIN_EMAILS_TO_SUBJECT','[КУПОН ЗА ОТСТЪПКА]');
  define('SEND_EXTRA_ORDERS_STATUS_ADMIN_EMAILS_TO_SUBJECT','[СТАТУС ПОРЪЧКА]');
  define('TEXT_UNSUBSCRIBE', "\n\nЗа да се отпишете от новини, натиснете тази връзка: \n");

// for whos_online when gethost is off
  define('OFFICE_IP_TO_HOST_ADDRESS', 'Изключено');

define('TEXT_EMAIL_SUBJECT_ADMIN_USER_ADDED', 'Админ сигнал: Добавен е нов админ потребител.');
define('TEXT_EMAIL_MESSAGE_ADMIN_USER_ADDED', 'Административен сигнал: Бе добавен административен потребител (%s) в магазина от %s.' . "\n\n" . 'Ако сте оторизиран администратор, но не сте извършили тези промени е препоръчително да проверите сигурността на сайта незабавно.');
define('TEXT_EMAIL_SUBJECT_ADMIN_USER_DELETED', 'Админ сигнал: Беше изтрит админ потребител.');
define('TEXT_EMAIL_MESSAGE_ADMIN_USER_DELETED', 'Административен сигнал: Бе изтрит административен потребител (%s) в магазина от %s.' . "\n\n" . 'Ако сте оторизиран администратор, но не сте извършили тези промени е препоръчително да проверите сигурността на сайта незабавно.');
define('TEXT_EMAIL_SUBJECT_ADMIN_USER_CHANGED', 'Админ сигнал: Беше променен админ потребител.');
define('TEXT_EMAIL_ALERT_ADM_EMAIL_CHANGED', 'Админ сигнал: Имайл адресът на админ потребител (%s) беше променен от (%s) на (%s) от потребителя (%s)');
define('TEXT_EMAIL_ALERT_ADM_NAME_CHANGED', 'Админ сигнал: Потребителското име на админ потребител (%s) беше променено от (%s) на (%s) от потребитля (%s)');
define('TEXT_EMAIL_ALERT_ADM_PROFILE_CHANGED', 'Админ сигнал: Профилът на дмин потребител (%s) бе променен от (%s) на (%s) от потребителя (%s)');
