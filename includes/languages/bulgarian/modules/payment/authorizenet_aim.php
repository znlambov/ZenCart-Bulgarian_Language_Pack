<?php
//
// Bulgarian Language Pack for Zen Cart 1.5.5d
// https://github.com/znlambov/ZenCart-Bulgarian_Language_Pack
//
/**
 * Authorize.net AIM Payment Module Language definitions
 *
 * @package languageDefines
 * @copyright Copyright 2003-2016 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: Author: DrByte  Sun Oct 18 01:50:54 2015 -0400 Modified in v1.5.5 $
 */


// Admin Configuration Items
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_ADMIN_TITLE', 'Authorize.net (AIM)'); // Payment option title as displayed in the admin

  if (MODULE_PAYMENT_AUTHORIZENET_AIM_STATUS == 'True') {
    define('MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_DESCRIPTION', '<a target="_blank" href="https://account.authorize.net/">Authorize.net вход за търговци</a>' . (MODULE_PAYMENT_AUTHORIZENET_AIM_TESTMODE != 'Production' ? '<br /><br />Тестова информация:<br /><b>Номера за автоматично одобрение на кредитни карти:</b><br />Visa#: 4007000000027<br />MC#: 5424000000000015<br />Discover#: 6011000000000012<br />AMEX#: 370000000000002<br /><br /><b>Забележка:</b> Тези номера на карти ще дадат отказ, ако са използвани в реални условия, но в тестов режим, ще бъдат одобрени.  Като дата за валидност може да се използва всяка следваща, а като CVV код може да се използват произволни 3 (4 за AmEx) цифри.<br /><br /><b>Автоматично отхвърляни кодове на кредитни карти:</b><br /><br />Карта № 4222222222222<br /><br />Този картов номер може да се използва за получаване на тестово съобщение за отхвърлена карта.<br /><br />' : '') . '<br><br>Виж <a href="http://www.zen-cart.com/content.php?291-how-to-set-up-the-authorizenet-aim-payment-module" target="_blank">the AIM Setup FAQ article</a> за детайлни настройки.');
  } else {
    define('MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_DESCRIPTION', '<a target="_blank" href="http://reseller.authorize.net/application.asp?id=131345">Натиснете тук, за да създадете профил</a><br /><br /><a target="_blank" href="https://account.authorize.net/">Authorize.net зона за търговци</a><br /><br /><strong>Изисквания:</strong><br /><hr />*<strong>Authorize.net профил</strong> (виж връзката по-горе за вход)<br />*<strong>изисква CURL </strong>и ТРЯБВА да се компилира със SSL поддръжка в PHP от хостинг компанията Ви<br />*<strong>Authorize.net потребителско име и ключ за транзакции</strong> са налични от Вашата Merchant Area<br><br>Виж <a href="http://www.zen-cart.com/content.php?291-how-to-set-up-the-authorizenet-aim-payment-module" target="_blank">the AIM Setup FAQ article</a> за детайлни настройки.');
  }
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_ERROR_CURL_NOT_FOUND', 'CURL функци не са намерени - изисква се за Authorize.net AIM модул за плащане');

// Catalog Items
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_CATALOG_TITLE', 'Банкова карта');  // Payment option title as displayed to the customer
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_CREDIT_CARD_TYPE', 'Вид карта:');
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_CREDIT_CARD_OWNER', 'Картодържател:');
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_CREDIT_CARD_NUMBER', 'Номер на картата:');
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_CREDIT_CARD_EXPIRES', 'Валидност:');
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_CVV', 'CVV Number:');
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_POPUP_CVV_LINK', 'Какво е това?');
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_JS_CC_OWNER', '* Името на картодържателя трябва да е поне ' . CC_OWNER_MIN_LENGTH . ' символа.\n');
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_JS_CC_NUMBER', '* Номерът на картата трябва да е поне ' . CC_NUMBER_MIN_LENGTH . ' символа.\n');
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_JS_CC_CVV', '* Трябва да въведете 3 или 4-цифрен CVV номер, който можете да намерите на гърба на картата.\n');
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_DECLINED_MESSAGE', 'Картата Ви не бе одобрена поради тази причина. Моля, коригирайте информацията и опитайте отново или се свържете с нас за помощ.');
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_ERROR', 'Грешка с картата!');
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_AUTHENTICITY_WARNING', 'ВНИМАНИЕ: Хеш проблем със сигурността. Моля, свържете се с нас незабавно. Поръчката Ви не бе напълно одобрена.');
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_COMM_ERROR', 'Плащането не може да се обработи, заради комуникативна грешка. Можете да опитате отново или да се свържете с нас за помощ.');

// admin tools:
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_ENTRY_REFUND_BUTTON_TEXT', 'Връщане на пари');
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_REFUND_CONFIRM_ERROR', 'Грешка: Искахте да си възстановите парите, но не маркирахте полето Потвърди.');
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_INVALID_REFUND_AMOUNT', 'Грешка: Искахте да си възстановите парите, но не попълнихте валидна сума.');
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_CC_NUM_REQUIRED_ERROR', 'Грешка: Искахте да си възстановите парите, но не сте въвели последните 4 цифри от номера на картата си.');
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_REFUND_INITIATED', 'Инициирано връщане на парите. Транзакция ID: %s - Код за одобрение: %s');
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_CAPTURE_CONFIRM_ERROR', 'Грешка: Изискахте да се направи прихващане, но не маркирахте полето Потвърди.');
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_ENTRY_CAPTURE_BUTTON_TEXT', 'Прихващане');
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_INVALID_CAPTURE_AMOUNT', 'Грешка: Изискахте да се направи прихващане, но трябва да въведете сума.');
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_TRANS_ID_REQUIRED_ERROR', 'Грешка: Трябва да зададете ID на транзакцията.');
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_CAPT_INITIATED', 'Стартирано прихващане на капиталите. Стойност: %s.  Транзакция ID: %s - Код за одобрение: %s');
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_ENTRY_VOID_BUTTON_TEXT', 'Анулация');
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_VOID_CONFIRM_ERROR', 'Грешка: Изискахте анулация, но не маркирахте полето Потвърди.');
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_VOID_INITIATED', 'Анулацията стартирана. Транзакция ID: %s - Код за одобрение: %s ');


  define('MODULE_PAYMENT_AUTHORIZENET_AIM_ENTRY_REFUND_TITLE', '<strong>Възстановяване на транзакции</strong>');
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_ENTRY_REFUND', 'Можете да възстановите пари до клиентска банкова карта от тук:');
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_REFUND_CONFIRM_CHECK', 'Маркирайте това поле, за да потвърдите намеренията си: ');
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_ENTRY_REFUND_AMOUNT_TEXT', 'Въведете сумата, която искате да възстановите');
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_ENTRY_REFUND_CC_NUM_TEXT', 'Въведете последните 4 цифри на банковата карта, на която искате да възстановите пари.');
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_ENTRY_REFUND_TRANS_ID', 'Въведете оригиналният ID на транзакцията:');
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_ENTRY_REFUND_TEXT_COMMENTS', 'Забележка (ще се покаже в История на поръчките):');
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_ENTRY_REFUND_DEFAULT_MESSAGE', 'Издадено възстановяване на пари');
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_ENTRY_REFUND_SUFFIX', 'Можете да възстановите парите на поръчка до сумата, която е прихваната. Трябва да предоставите последните 4 цифри от банковата карта, с която е направена поръчката.<br /> Възстановяване на парите може да се осъществи до 120 дни, след датата на транзакцията.');

  define('MODULE_PAYMENT_AUTHORIZENET_AIM_ENTRY_CAPTURE_TITLE', '<strong>Прихвани транзакциите</strong>');
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_ENTRY_CAPTURE', 'Можете да прихванете по-отдавна одобрени суми тук:');
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_ENTRY_CAPTURE_AMOUNT_TEXT', 'Въведете сума за прихващане: ');
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_CAPTURE_CONFIRM_CHECK', 'Маркирайте полето за да потвърдите намеренията си: ');
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_ENTRY_CAPTURE_TRANS_ID', 'Въведете оригинално ID на транзакцията: ');
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_ENTRY_CAPTURE_TEXT_COMMENTS', 'Забележка (ще се покаже в История на поръчките):');
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_ENTRY_CAPTURE_DEFAULT_MESSAGE', 'По-рано одобрени средства.');
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_ENTRY_CAPTURE_SUFFIX', 'Прихващания трябва да бъдат направени до 30 дни след одобрение. Можете да прихванете една поръчка само веднъж. <br /> Моля, уверете се, че сумата е вярна.<br />Ако оставите полето за сума празно, ще се използва оригиналната стойност.');

  define('MODULE_PAYMENT_AUTHORIZENET_AIM_ENTRY_VOID_TITLE', '<strong>Анулирани транзакции</strong>');
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_ENTRY_VOID', 'Можете да анулирате транзакция, която все още не е установена или одобрение, което не е било прихванато.<br />Въведете неустановеният ID на транзакцията или неприхванатия Auth ID:');
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_VOID_CONFIRM_CHECK', 'Маркирайте полето, за да потвърдите намеренията си:');
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_ENTRY_VOID_TEXT_COMMENTS', 'Забележка (ще се покаже в История на поръчките):');
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_ENTRY_VOID_DEFAULT_MESSAGE', 'Транзакцията анулирана');
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_ENTRY_VOID_SUFFIX', 'Анулацията трябва да бъде завършена преди оригиналната транзакция да бъде установена в дневната партида.');

