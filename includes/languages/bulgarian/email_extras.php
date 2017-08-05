<?php
//
// Bulgarian Language Pack for Zen Cart 1.5.5d
// https://github.com/znlambov/ZenCart-Bulgarian_Language_Pack
//
/**
 * @package languageDefines
 * @copyright Copyright 2003-2016 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: Author: DrByte  Wed Oct 28 13:08:12 2015 -0400 Modified in v1.5.5 $
 */

  define ('EMAIL_LOGO_FILENAME', 'header.jpg');  //-File is present in /email folder
  define ('EMAIL_LOGO_WIDTH', '550');
  define ('EMAIL_LOGO_HEIGHT', '110');
  define ('EMAIL_LOGO_ALT_TITLE_TEXT', 'Zen Cart! Изкуството на е-търговията!');
  
  // -----
  // If you want to include some extra information in each email's header information (like perhaps the store address and/or phone number),
  // set this value to contain the full HTML content to be copied, e.g. '<div id="extra-stuff">Extra stuff for header</div>'.
  //
  define ('EMAIL_EXTRA_HEADER_INFO', '');

// office use only
  define('OFFICE_FROM','<strong>От:</strong>');
  define('OFFICE_EMAIL','<strong>Имейл:</strong>');

  define('OFFICE_SENT_TO','<strong>Изпрати на:</strong>');
  define('OFFICE_EMAIL_TO','<strong>Имейл до:</strong>');

  define('OFFICE_USE','<strong>Само за офис употреба:</strong>');
  define('OFFICE_LOGIN_NAME','<strong>Потребителско име:</strong>');
  define('OFFICE_LOGIN_EMAIL','<strong>Потребителски мейл:</strong>');
  define('OFFICE_LOGIN_PHONE','<strong>Телефон:</strong>');
  define('OFFICE_LOGIN_FAX','<strong>Факс:</strong>');
  define('OFFICE_IP_ADDRESS','<strong>IP адрес:</strong>');
  define('OFFICE_HOST_ADDRESS','<strong>Хост адрес:</strong>');
  define('OFFICE_DATE_TIME','<strong>Дата и час:</strong>');
  if (!defined('OFFICE_IP_TO_HOST_ADDRESS')) define('OFFICE_IP_TO_HOST_ADDRESS', 'OFF');

// email disclaimer
  define('EMAIL_DISCLAIMER', 'Този имейл ни бе предоставен от Вас или някой от нашите клиенти. Ако считате, че сте получили това съобщение по погрешка, моля изпратете имейл на %s ');
  define('EMAIL_SPAM_DISCLAIMER','Това съобщение е изпратено в съответствие със закона US CAN-SPAM от 01/01/2004. Можете да изпратите искане за премахване от базата ни данни. Всички искания ще бъдат уважени.');
  define('EMAIL_FOOTER_COPYRIGHT','Авторски права (c) ' . date('Y') . ' <a href="' . zen_href_link(FILENAME_DEFAULT) . '" target="_blank">' . STORE_NAME . '</a>. Задвижван от <a href="http://www.zen-cart.com" target="_blank">Zen Cart</a>');
  define('TEXT_UNSUBSCRIBE', "\n\nЗа да се отпишете от следващи новини и промоции, просто натиснете следната връзка: \n");

// email advisory for all emails customer generate - tell-a-friend and GV send
  define('EMAIL_ADVISORY', '-----' . "\n" . '<strong>ВАЖНО:</strong> За Ваша сигурност и за да се предотвратят злоупотреби, всички съобщения изпратени през този сайт се съхраняват и са на разположение на собствениците на сайта. Ако прецените, че сте получили това съобщение по погрешка, моля изпратете имейл на ' . STORE_OWNER_EMAIL_ADDRESS . "\n\n");

// email advisory included warning for all emails customer generate - tell-a-friend and GV send
  define('EMAIL_ADVISORY_INCLUDED_WARNING', '<strong>Това съобщение е прикрепено към всички имейли от този сайт:</strong>');


// Admin additional email subjects
  define('SEND_EXTRA_CREATE_ACCOUNT_EMAILS_TO_SUBJECT','[Създаден профил]');
  define('SEND_EXTRA_GV_CUSTOMER_EMAILS_TO_SUBJECT','[Изпратен подаръчен ваучер]');
  define('SEND_EXTRA_NEW_ORDERS_EMAILS_TO_SUBJECT','[Нова поръчка]');
  define('SEND_EXTRA_CC_EMAILS_TO_SUBJECT','[EXTRA CC ORDER info] #');

// Low Stock Emails
  define('EMAIL_TEXT_SUBJECT_LOWSTOCK','Внимание: ограничени количества');
  define('SEND_EXTRA_LOW_STOCK_EMAIL_TITLE','Доклад ограничени количества: ');
