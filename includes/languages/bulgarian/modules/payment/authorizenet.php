<?php
//
// Bulgarian Language Pack for Zen Cart 1.5.5d
// https://github.com/znlambov/ZenCart-Bulgarian_Language_Pack
//
/**
 * Authorize.net SIM Payment Module
 *
 * @package languageDefines
 * @copyright Copyright 2003-2016 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: Author: DrByte  Wed Dec 30 22:16:19 2015 -0500 Modified in v1.5.5 $
 */

  define('MODULE_PAYMENT_AUTHORIZENET_TEXT_ADMIN_TITLE', 'Authorize.net (SIM)');
  define('MODULE_PAYMENT_AUTHORIZENET_TEXT_CATALOG_TITLE', 'Банкова карта');  // Payment option title as displayed to the customer


  if (MODULE_PAYMENT_AUTHORIZENET_STATUS == 'True') {
    define('MODULE_PAYMENT_AUTHORIZENET_TEXT_DESCRIPTION', '<a target="_blank" href="https://account.authorize.net/">Authorize.net вход за търговци</a>' . (MODULE_PAYMENT_AUTHORIZENET_TESTMODE != 'Production' ? '<br /><br />Тестова информация:<br /><b>Автоматично одобрявани номера на кредитни карти:</b><br />Visa#: 4007000000027<br />MC#: 5424000000000015<br />Discover#: 6011000000000012<br />AMEX#: 370000000000002<br /><br /><b>Забележка:</b> Тези номера на карти ще дадат отказ, ако са използвани в реални условия, но в тестов режим, ще бъдат одобрени.  Като дата за валидност може да се използва всяка следваща, а като CVV код може да се използват произволни 3 (4 за AmEx) цифри.<br /><br /><b>Автоматично отхвърляни кодове на кредитни карти:</b><br /><br />Карта № 4222222222222<br /><br />Този картов номер може да се използва за получаване на тестово съобщение за отхвърлена карта.' : '') . '<br /><br /><strong>НАСТРОЙКИ</strong><br />Настройките за "response" , "receipt" и "relay" връзки във Вашия Authorize.net търговски профил, могат да бъдат оставени празни или при необходимост настройте "relay URL" да сочи Вашия домейн https://your_domain.com/foldername/index.php?main_page=checkout_process<br><br>Ако срещате проблеми вижте това <a href="http://www.zen-cart.com/content.php?303-how-to-set-up-the-authorizenet-sim-payment-module" target="_blank">the SIM Setup FAQ article</a> за детайлни настройки.');
  } else {
    define('MODULE_PAYMENT_AUTHORIZENET_TEXT_DESCRIPTION', '<a target="_blank" href="http://reseller.authorize.net/application.asp?id=131345">Натиснете тук, за да създадете профил</a><br /><br /><a target="_blank" href="https://account.authorize.net/">Натиснете Login в зоната за търговци на Authorize.net</a><br /><br /><strong>Изисквания:</strong><br /><hr />*<strong>Authorize.net профил</strong> (вижте връзката по-горе за създаване на профил)<br />*<strong>Authorize.net потребителско име и транзакционен ключ</strong> намират се в зоната за търговци<br><br>Вижте <a href="http://www.zen-cart.com/content.php?303-how-to-set-up-the-authorizenet-sim-payment-module" target="_blank">the SIM Setup FAQ article</a> за детайлни настройки.');
  }

  define('MODULE_PAYMENT_AUTHORIZENET_TEXT_TYPE', 'Попълни:');
  define('MODULE_PAYMENT_AUTHORIZENET_TEXT_CREDIT_CARD_OWNER', 'Картодържател:');
  define('MODULE_PAYMENT_AUTHORIZENET_TEXT_CREDIT_CARD_NUMBER', 'Номер на карта:');
  define('MODULE_PAYMENT_AUTHORIZENET_TEXT_CREDIT_CARD_EXPIRES', 'Валидност:');
  define('MODULE_PAYMENT_AUTHORIZENET_TEXT_CVV', 'CVV номер:');
  define('MODULE_PAYMENT_AUTHORIZENET_TEXT_POPUP_CVV_LINK', 'Какво е това?');
  define('MODULE_PAYMENT_AUTHORIZENET_TEXT_JS_CC_OWNER', '* Името на картодържателя, трябва да е поне ' . CC_OWNER_MIN_LENGTH . ' символа.\n');
  define('MODULE_PAYMENT_AUTHORIZENET_TEXT_JS_CC_NUMBER', '* Номера на банковата карта, трябва да е поне ' . CC_NUMBER_MIN_LENGTH . ' символа.\n');
  define('MODULE_PAYMENT_AUTHORIZENET_TEXT_JS_CC_CVV', '* Трябва да въведете 3 или 4-цифрен CVV номер, който можете да намерите на гърба на картата.\n');
  define('MODULE_PAYMENT_AUTHORIZENET_TEXT_ERROR_MESSAGE', 'Възникна грешка при обработката на Вашата карта. Моля, опитайте отново.');
  define('MODULE_PAYMENT_AUTHORIZENET_TEXT_DECLINED_MESSAGE', 'Картата Ви беше отхвърлена. Моля, опитайте с друга карта или се свържете с банката си за повече информация.');
  define('MODULE_PAYMENT_AUTHORIZENET_TEXT_ERROR', 'Грешка с банковата карта!');
