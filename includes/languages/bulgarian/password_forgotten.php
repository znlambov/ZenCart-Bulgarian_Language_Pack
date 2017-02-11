<?php
//
// Bulgarian Language Pack for Zen Cart 1.5.5d
// https://github.com/znlambov/ZenCart-Bulgarian_Language_Pack
/**
 * @package languageDefines
 * @copyright Copyright 2003-2016 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: Author: DrByte  Sun Oct 18 01:50:54 2015 -0400 Modified in v1.5.5 $
 */

define('NAVBAR_TITLE_1', 'Вход');
define('NAVBAR_TITLE_2', 'Забравена парола');

define('HEADING_TITLE', 'Забравена парола');

define('TEXT_MAIN', 'Въведете имейл адреса си по долу и ние ще Ви изпратим съобщение, съдържащо новата Ви парола.');

define('EMAIL_PASSWORD_REMINDER_SUBJECT', STORE_NAME . ' - Нова парола');
define('EMAIL_PASSWORD_REMINDER_BODY', 'Изискана е нова парола от ' . $_SERVER['REMOTE_ADDR']  . '.' . "\n\n" . 'Новата Ви парола за \'' . STORE_NAME . '\' е:' . "\n\n" . '   %s' . "\n\nСлед като влезете с новата си парола можете да я промените в меню Моят профил.");

define('SUCCESS_PASSWORD_SENT', 'Благодарим Ви. Ако този имейл е в нашата система, ще изпратим инструкции за възстановяване на паролата до него.');
