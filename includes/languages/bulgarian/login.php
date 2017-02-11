<?php
//
// Bulgarian Language Pack for Zen Cart 1.5.5d
// https://github.com/znlambov/ZenCart-Bulgarian_Language_Pack
//
/**
 * @package languageDefines
 * @copyright Copyright 2003-2009 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: login.php 14280 2009-08-29 01:33:18Z drbyte $
 */

define('NAVBAR_TITLE', 'Вход');
define('HEADING_TITLE', 'Привет! Моля, регистрирайте се');

define('HEADING_NEW_CUSTOMER', 'Нови ли сте тук? Моля, въведете необходимата информация');
define('HEADING_NEW_CUSTOMER_SPLIT', 'Нов потребител');

define('TEXT_NEW_CUSTOMER_INTRODUCTION', 'Създай потребителски профил в <strong>' . STORE_NAME . '</strong> , който ти дава възможност да пазаруваш бързо, да проследяваш статуса на поръчките си, да разглеждаш стари поръчки.');
define('TEXT_NEW_CUSTOMER_INTRODUCTION_SPLIT', 'Имате PayPal профил? Желаете ли да плащате бързо с банкова карта? Използвайте бутона PayPal по-долу, за да използвате възможността за Експресна покупка.');
define('TEXT_NEW_CUSTOMER_POST_INTRODUCTION_DIVIDER', '<span class="larger">Или</span><br />');
define('TEXT_NEW_CUSTOMER_POST_INTRODUCTION_SPLIT', 'Създайте потребителски продил в <strong>' . STORE_NAME . '</strong> , който ти дава възможност да пазаруваш бързо, да проследяваш статуса на поръчките си, да разглеждаш стари поръчки и да се възползваш от всички предимства, които имет останалите потребители.');

define('HEADING_RETURNING_CUSTOMER', 'Редовен клиент: Моля, влезте');
define('HEADING_RETURNING_CUSTOMER_SPLIT', 'Редовен клиент');

define('TEXT_RETURNING_CUSTOMER_SPLIT', 'За да продължите, трябва да влезете във Вашия <strong>' . STORE_NAME . '</strong> профил.');

define('TEXT_PASSWORD_FORGOTTEN', 'Забравена парола?');

define('TEXT_LOGIN_ERROR', 'Грешка: няма съвпадение на имейлът и/или паролата.');
define('TEXT_VISITORS_CART', '<strong>Забележка:</strong> Ако сте били наш клиент преди и сте оставили нещо в Потребителската количка, за Ваше удобство съдържанието ще бъде обединено, след като влезете с профила си. <a href="javascript:session_win();">[Още информация]</a>');

define('TABLE_HEADING_PRIVACY_CONDITIONS', '<span class="privacyconditions">Декларазия за поверителност</span>');
define('TEXT_PRIVACY_CONDITIONS_DESCRIPTION', '<span class="privacydescription">След като маркирате кутийката, Вие приемате условията в Декларацията за поверителност. Можете да прочетете Декларацията за поверителност</span> <a href="' . zen_href_link(FILENAME_PRIVACY, '', 'SSL') . '"><span class="pseudolink">тук</span></a>.');
define('TEXT_PRIVACY_CONDITIONS_CONFIRM', '<span class="privacyagree">Прочетох и съм съгласен с условията за защита на личните данни.</span>');

define('ERROR_SECURITY_ERROR', 'Възникна грешка, докато опитвахте да влезете в профила.');

define('TEXT_LOGIN_BANNED', 'Грешка: Достъпът отказан.');
