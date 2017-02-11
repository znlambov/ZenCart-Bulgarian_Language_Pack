<?php
//
// Bulgarian Language Pack for Zen Cart 1.5.5d
// https://github.com/znlambov/ZenCart-Bulgarian_Language_Pack
//
/**
 * @package languageDefines
 * @copyright Copyright 2003-2013 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * $Id: discount_coupon.php 14712 2009-10-28 22:05:08Z ajeh $
 */

define('NAVBAR_TITLE', 'Купон за отстъпка');
define('HEADING_TITLE', 'Купон за отстъпка');

define('TEXT_INFORMATION', '');
define('TEXT_COUPON_FAILED', '<span class="alert important">%s</span> изглежда не е валиден код за осребряване на купон. Моля, опитайте се да го наберете отново.');

define('HEADING_COUPON_HELP', 'Помощ относно купон за отстъпка');
define('TEXT_CLOSE_WINDOW', 'Затвори прозореца [x]');
define('TEXT_COUPON_HELP_HEADER', '<p class="bold">Кодът за осребряване на купон, който сте въвели е за ');
define('TEXT_COUPON_HELP_NAME', '\'%s\'. </p>');
define('TEXT_COUPON_HELP_FIXED', '');
define('TEXT_COUPON_HELP_MINORDER', '<p>Необходимо е да похарчите %s за да използвате този купон, за достъпните с него продукти.</p>');
define('TEXT_COUPON_HELP_FREESHIP', '');
define('TEXT_COUPON_HELP_DESC', '<p><span class="bold">Оферта за отстъпка:</span> %s</p><p class="smallText">Могат да съществуват ограничения. За повече информация, моля обърнете внимание по-долу.</p>');
define('TEXT_COUPON_HELP_DATE', '<p>Купонът е валиден между %s и %s</p>');
define('TEXT_COUPON_HELP_RESTRICT', '<p class="biggerText bold">Ограничения в купона за отстъпка</p>');
define('TEXT_COUPON_HELP_CATEGORIES', '<p class="bold">Ограничения по категории:</p>');
define('TEXT_COUPON_HELP_PRODUCTS', '<p class="bold">Ограничения по продукти:</p>');
define('TEXT_ALLOW', 'Разрешено');
define('TEXT_DENY', 'Забранено');

define('TEXT_NO_CAT_TOP_ONLY_DENY', '<p>Този купон има определени ограничения по продукти.');
define('TEXT_NO_CAT_RESTRICTIONS', '<p>Купонът е валиден за всички категории.</p>');
define('TEXT_NO_PROD_RESTRICTIONS', '<p>Купонът е валиден за всички продукти.</p>');
define('TEXT_CAT_ALLOWED', ' (Валиден за тази категория)');
define('TEXT_CAT_DENIED', ' (Вевалиден за тази категория)');
define('TEXT_PROD_ALLOWED', ' (Валиден за този продукт)');
define('TEXT_PROD_DENIED', ' (Невалиден за този продукт)');

// gift certificates cannot be purchased with Discount Coupons

define('TEXT_COUPON_GV_RESTRICTION','<p class="smallText">Купоните за отстъпка не могат да бъдат използвани при покупката на ' . TEXT_GV_NAMES . '. Ограмичение - 1 купон на поръчка.</p>');

define('TEXT_DISCOUNT_COUPON_ID_INFO', 'Преглед на купон за отстъпка... ');
define('TEXT_DISCOUNT_COUPON_ID', 'Вашият код: ');

define('TEXT_COUPON_GV_RESTRICTION_ZONES', 'Има ограничения относно Адрес на платеца.');
?>