<?php  //Bulgarian Language Pack for Zen Cart 1.5.5d
/**
 * @package languageDefines
 * @copyright Copyright 2003-2012 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version GIT: $Id: Author: DrByte  Sat Jul 21 16:05:31 2012 -0400 Modified in v1.5.1 $
 */

define('NAVBAR_TITLE', 'Създай профил');

define('HEADING_TITLE', 'Информация за моя профил');

define('TEXT_ORIGIN_LOGIN', '<strong class="note">Забележка:</strong> Ако вече имате профил при нас, моля влезте от <a href="%s">тук</a>.');

define('ERROR_CREATE_ACCOUNT_SPAM_DETECTED', 'Благодарим Ви! Вашата заявка бе приета и чака одобрение.');


// greeting salutation
define('EMAIL_SUBJECT', 'Добре дошли в ' . STORE_NAME);
define('EMAIL_GREET_MR', 'Уважаеми г-н %s,' . "\n\n");
define('EMAIL_GREET_MS', 'Уважаема г-жа %s,' . "\n\n");
define('EMAIL_GREET_NONE', 'Уважаеми %s' . "\n\n");

// First line of the greeting
define('EMAIL_WELCOME', 'Бихме искали да Ви приветстваме в <strong>' . STORE_NAME . '</strong>.');
define('EMAIL_SEPARATOR', '--------------------');
define('EMAIL_COUPON_INCENTIVE_HEADER', 'Поздравления! За да направим Вашето следващо посещение още по-приятно, по-долу са детайлите на Купон за отстъпка, който създадохме специално за Вас!' . "\n\n");
// your Discount Coupon Description will be inserted before this next define
define('EMAIL_COUPON_REDEEM', 'За да се възползвате от Купона за отстъпка, въведете ' . TEXT_GV_REDEEM . ' кода при приключване на поръчка:  <strong>%s</strong>' . "\n\n");
define('TEXT_COUPON_HELP_DATE', '<p>Купонът е валиден между %s и %s</p>');

define('EMAIL_GV_INCENTIVE_HEADER', 'Само заради това, че се отбихте днес при нас, ние Ви изпращаме ' . TEXT_GV_NAME . ' за %s!' . "\n");
define('EMAIL_GV_REDEEM', '  ' . TEXT_GV_NAME . ' ' . TEXT_GV_REDEEM . ' е: %s ' . "\n\n" . 'Можете да въведете ' . TEXT_GV_REDEEM . ' по време на приключване на поръчка, след като изберете желаните от Вас продукти. ');
define('EMAIL_GV_LINK', ' Или можете да го осребрите, като следвате връзката по-долу: ' . "\n");
// GV link will automatically be included before this line

define('EMAIL_GV_LINK_OTHER','След като въведете ' . TEXT_GV_NAME . ' във Вашия профил, може да използвате ' . TEXT_GV_NAME . ' за себе си, или да го изпратите на приятел!' . "\n\n");

define('EMAIL_TEXT', 'Вие се регистрирахте успешно в нашия магазин и можете да се възползвате от <strong>различни привилегии</strong> , някои от които са:' . "\n\n<ul>" . '<li><strong>История на поръчките</strong> - Където виждате детайли за вече направени Ваши поръчки.' . "\n\n" . '<li><strong>Пазарна количка</strong> - Всички продукти, които добавите онлайн, остават там, докато не ги премахнете изришно или не ги закупите.' . "\n\n" . '<li><strong>Адресна книга</strong> - Поръчките Ви могат да бъдат доставени до адрес, различен от Вашия! Това е удобно, в случай, че искате да изненадата някого с неочакван подарък например.' . "\n\n" . '<li><strong>Отзиви за продукти</strong> - Споделете мнението относно продуктите с другите потребители.' . "\n\n</ul>");
define('EMAIL_CONTACT', 'Ако имате нужда от помощ, за която и да е от услугите ни, моля пишете ни на: <a href="mailto:' . STORE_OWNER_EMAIL_ADDRESS . '">'. STORE_OWNER_EMAIL_ADDRESS ." </a>\n\n");
define('EMAIL_GV_CLOSURE', "\n" . 'С уважение,' . "\n\n" . STORE_OWNER . "\nЕкипът на магазина\n\n". '<a href="' . HTTP_SERVER . DIR_WS_CATALOG . '">'.HTTP_SERVER . DIR_WS_CATALOG ."</a>\n\n");

// email disclaimer - this disclaimer is separate from all other email disclaimers
define('EMAIL_DISCLAIMER_NEW_CUSTOMER', 'Този имейл адрес ни бе предоставен от Вас или от някой от нашите клиенти. Ако не сте се регистрирали при нас или считате, че сме изпратили това писмо по погрешка, моля изпратете ни имейл на %s ');
