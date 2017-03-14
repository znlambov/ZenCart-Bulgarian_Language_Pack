<?php  //Bulgarian Language Pack for Zen Cart 1.5.5d
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
// $Id: checkout_process.php 1969 2005-09-13 06:57:21Z drbyte $
//

define('EMAIL_TEXT_SUBJECT', 'Потвърди поръчката');
define('EMAIL_TEXT_HEADER', 'Потвърждаване на поръчката');
define('EMAIL_TEXT_FROM',' от ');  //added to the EMAIL_TEXT_HEADER, above on text-only emails
define('EMAIL_THANKS_FOR_SHOPPING','Благодарим Ви, че пазарувахте при нас!');
define('EMAIL_DETAILS_FOLLOW','Следват детайли за Вашата поръчка.');
define('EMAIL_TEXT_ORDER_NUMBER', 'Номер поръчка:');
define('EMAIL_TEXT_INVOICE_URL', 'Подробна разписка:');
define('EMAIL_TEXT_INVOICE_URL_CLICK', 'Натисни тук за подробна разписка');
define('EMAIL_TEXT_DATE_ORDERED', 'Дата:');
define('EMAIL_TEXT_PRODUCTS', 'Продукти');
define('EMAIL_TEXT_SUBTOTAL', 'Междинна сума:');
define('EMAIL_TEXT_TAX', 'Такса:        ');
define('EMAIL_TEXT_SHIPPING', 'Доставка: ');
define('EMAIL_TEXT_TOTAL', 'Общо:    ');
define('EMAIL_TEXT_DELIVERY_ADDRESS', 'Адрес за доставка');
define('EMAIL_TEXT_BILLING_ADDRESS', 'Адрес на платеца');
define('EMAIL_TEXT_PAYMENT_METHOD', 'Начин на плащане');

define('EMAIL_SEPARATOR', '------------------------------------------------------');
define('TEXT_EMAIL_VIA', 'чрез');

// suggest not using # vs No as some spamm protection block emails with these subjects
define('EMAIL_ORDER_NUMBER_SUBJECT', ' № ');
define('HEADING_ADDRESS_INFORMATION','Адресна информация');
define('HEADING_SHIPPING_METHOD','Начин на плащане');
?>