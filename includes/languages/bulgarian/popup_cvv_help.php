<?php
//
// Bulgarian Language Pack for Zen Cart 1.5.5d
// https://github.com/znlambov/ZenCart-Bulgarian_Language_Pack
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
// $Id: popup_cvv_help.php 1969 2005-09-13 06:57:21Z drbyte $
//

define('HEADING_CVV', 'Какво е CVV?');
define('TEXT_CVV_HELP1', 'Visa, Mastercard, Discover имат 3-цифрен номер за потвърждение на картата<br /><br />
                    За Ваша сигурност и защита, е необходимо да въведете номера за потвърждение от вашата карта.<br /><br />
                    Той представлява 3-цифрен номер напечатан на гърба ѝ.
                    Намира се непосредствено след и отдясно на Вашия картов номер.<br />' .
                    zen_image(DIR_WS_TEMPLATE_ICONS . 'cvv2visa.gif'));

define('TEXT_CVV_HELP2', 'American Express 4-цифрен номер за потвърждение на карта<br /><br />
                    За Ваша сигурност и защита, е необходимо да въведете номера за потвърждение от вашата карта.<br /><br />
                    Номера за потвърждение на American Express е 4-цифрен и е напечатан на лицето на картата.
                    Намира се непосредствено след и отдясно на Вашия картов номер.<br />' .
                    zen_image(DIR_WS_TEMPLATE_ICONS . 'cvv2amex.gif'));

define('TEXT_CLOSE_CVV_WINDOW', 'Затвори прозореца [x]');
?>