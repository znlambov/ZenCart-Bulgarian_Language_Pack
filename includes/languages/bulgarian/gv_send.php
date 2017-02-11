<?php
//
// Bulgarian Language Pack for Zen Cart 1.5.5d
// https://github.com/znlambov/ZenCart-Bulgarian_Language_Pack
//
/**
 * @package languageDefines
 * @copyright Copyright 2003-2006 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: gv_send.php 3421 2006-04-12 04:16:14Z drbyte $
 */

define('HEADING_TITLE', 'Изпрати ' . TEXT_GV_NAME);
define('HEADING_TITLE_CONFIRM_SEND', 'Изпрати ' . TEXT_GV_NAME . ' Потвърждение');
define('HEADING_TITLE_COMPLETED', TEXT_GV_NAME . ' Изпратено');
define('NAVBAR_TITLE', 'Изпрати ' . TEXT_GV_NAME);
define('EMAIL_SUBJECT', 'Съобщение от ' . STORE_NAME);
define('HEADING_TEXT','Въведете име, имейл и стойност на ' . TEXT_GV_NAME . ' който желаете да изпратите. За повече информация вижте <a href="' . zen_href_link(FILENAME_GV_FAQ, '', 'NONSSL').'">' . GV_FAQ . '.</a>');
define('ENTRY_NAME', 'Име на получател:');
define('ENTRY_EMAIL', 'Имейл на получател:');
define('ENTRY_MESSAGE', 'Вашето съобщение:');
define('ENTRY_AMOUNT', 'Стойност, което изпращате:');
define('ERROR_ENTRY_TO_NAME_CHECK', 'Няма въведено име на получател. Моля, попълнете го по-долу. ');
define('ERROR_ENTRY_AMOUNT_CHECK', 'Стойността на ' . TEXT_GV_NAME . ' не е вярна. Моля, попълнете отново.');
define('ERROR_ENTRY_EMAIL_ADDRESS_CHECK', 'Вярно ли е въведен имейлът? Моля, опитайте отново.');
define('MAIN_MESSAGE', 'Вие изпращате ' . TEXT_GV_NAME . ' на стойност %s до %s,  чийто имейл адрес е %s. Ако тези детайли не са верни, можете да редактирате съобщението си, като натиснете бутон <strong>редактирай</strong>.<br /><br />Съобщението, което изпращате гласи:<br /><br />');
define('SECONDARY_MESSAGE', 'Уважаеми %s,<br /><br />' . 'Изпратен Ви е ' . TEXT_GV_NAME . ' на стойност %s от %s');
define('PERSONAL_MESSAGE', '%s гласи:');
define('TEXT_SUCCESS', 'Поздравления, Вашият ' . TEXT_GV_NAME . ' е изпратен.');
define('TEXT_SEND_ANOTHER', 'Желаете ли да изпратите друг ' . TEXT_GV_NAME . '?');
define('TEXT_AVAILABLE_BALANCE',  'Сметка Подаръчен ваучер');

define('EMAIL_GV_TEXT_SUBJECT', 'Подаръ от %s');
define('EMAIL_SEPARATOR', '----------------------------------------------------------------------------------------');
define('EMAIL_GV_TEXT_HEADER', 'Поздравления, Вие получихте ' . TEXT_GV_NAME . ' на стойност %s');
define('EMAIL_GV_FROM', 'Този ' . TEXT_GV_NAME . ' бе изпратен до вас от %s');
define('EMAIL_GV_MESSAGE', 'със съобщение, гласящо: ');
define('EMAIL_GV_SEND_TO', 'Привет, %s');
define('EMAIL_GV_REDEEM', 'За да осребриш този ' . TEXT_GV_NAME . ', натисни връзката по-долу. Също така попълни ' . TEXT_GV_REDEEM . ': %s  за всеки случай.');
define('EMAIL_GV_LINK', 'За да осребриш, натисни тук');
define('EMAIL_GV_VISIT', ' или посети ');
define('EMAIL_GV_ENTER', ' и въведи ' . TEXT_GV_REDEEM . ' ');
define('EMAIL_GV_FIXED_FOOTER', 'Ако имате затруднения при осребряването на ' . TEXT_GV_NAME . ' с използването на връзката по-горе, ' . "\n" .
                                'можете също да въведете ' . TEXT_GV_NAME . ' ' . TEXT_GV_REDEEM . ' докато приключвате поръчка в нашия магазин.');
define('EMAIL_GV_SHOP_FOOTER', '');
?>