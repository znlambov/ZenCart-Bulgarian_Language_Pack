<?php
// Bulgarian Language Pack for Zen Cart 1.5.5 at https://github.com/znlambov/ZenCart-Bulgarian_Language_Pack
/**
 * @package admin
 * @copyright Copyright 2003-2012 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version GIT: $Id: Author: ajeh  Mon Dec 3 19:32:36 2012 -0500 Modified in v1.5.2 $
 */

define('TOP_BAR_TITLE', 'Статистика');
define('HEADING_TITLE', 'Купони за отстъпка');
define('HEADING_TITLE_STATUS', 'Статус: ');
define('TEXT_CUSTOMER', 'Клиент:');
define('TEXT_COUPON', 'Име на купон:');
define('TEXT_COUPON_ALL', 'Всички купони');
define('TEXT_COUPON_ACTIVE', 'Активни купони');
define('TEXT_COUPON_INACTIVE', 'Неактивни купони');
define('TEXT_SUBJECT', 'Тема:');
define('TEXT_UNLIMITED', 'Неограничен');
define('TEXT_FROM', 'От:');
define('TEXT_FREE_SHIPPING', 'Безплатна доставка');
define('TEXT_MESSAGE', 'Съобщение:');
define('TEXT_RICH_TEXT_MESSAGE','Съобщение в Rich-Text:');
define('TEXT_SELECT_CUSTOMER', 'Избери потребител');
define('TEXT_ALL_CUSTOMERS', 'Всички потребители');
define('TEXT_NEWSLETTER_CUSTOMERS', 'До всички записани за новини');
define('TEXT_CONFIRM_DELETE', 'Искате да изтриете този купон?');
define('TEXT_SEE_RESTRICT', 'Важат ограничения');

define('TEXT_COUPON_ANNOUNCE','С удоволствие Ви предлагаме купон за нашия магазин');

define('TEXT_TO_REDEEM', 'Можете да осребрите този купон при приключване на поръчка. За целта въведете кода в съответното поле и натиснете бутона Осребри.');
define('TEXT_IN_CASE', ' в случй, че изпитвате затруднения. ');
define('TEXT_VOUCHER_IS', 'Кодът на купоне е ');
define('TEXT_REMEMBER', 'Не губете кода, за да можете да се възползвате от това специално предложение.');
define('TEXT_VISIT', 'Посетете ни на %s');
define('TEXT_ENTER_CODE', ' и въведете кода ');
define('TEXT_COUPON_HELP_DATE', '<p>Купонът е валиден между %s и %s</p>');
define('HTML_COUPON_HELP_DATE', '<p>Купонът е валиден между %s и %s</p>');

define('TABLE_HEADING_ACTION', 'Действие');

define('CUSTOMER_ID', 'Клиентско ID');
define('CUSTOMER_NAME', 'Име на клиент');
define('REDEEM_DATE', 'Осребрен на');
define('IP_ADDRESS', 'IP адрес');

define('TEXT_REDEMPTIONS', 'Осребрявания');
define('TEXT_REDEMPTIONS_TOTAL', 'Общо');
define('TEXT_REDEMPTIONS_CUSTOMER', 'За този клиент');
define('TEXT_NO_FREE_SHIPPING', 'Без безплатна доставка');

define('NOTICE_EMAIL_SENT_TO', 'Забележка: изпратен имейл до: %s');
define('ERROR_NO_CUSTOMER_SELECTED', 'Грешка: не е избран потребител.');
define('ERROR_NO_SUBJECT', 'Грешка: не е въведена тема.');

define('COUPON_NAME', 'Име на купон');
//define('COUPON_VALUE', 'Coupon Value');
define('COUPON_AMOUNT', 'Стойност на купона');
define('COUPON_CODE', 'Код на купона');
define('COUPON_STARTDATE', 'Начална дата');
define('COUPON_FINISHDATE', 'Крайна дата');
define('COUPON_FREE_SHIP', 'Безплатна доставка');
define('COUPON_DESC', 'Описание на купона <br />(това, което вижда клиентът)');
define('COUPON_MIN_ORDER', 'Минимална стойност на поръчка');
define('COUPON_USES_COUPON', 'Клиенти за купон');
define('COUPON_USES_USER', 'Ползвания на клиент');
define('COUPON_PRODUCTS', 'Лист валидни продукти');
define('COUPON_CATEGORIES', 'Лист валидни категории');
define('VOUCHER_NUMBER_USED', 'Брой използвания');
define('DATE_CREATED', 'Създаден на');
define('DATE_MODIFIED', 'Редактиран на');
define('TEXT_HEADING_NEW_COUPON', 'Създай нов купон');
define('TEXT_NEW_INTRO', 'Попълнете информация за ноия купон.<br />');
define('COUPON_ZONE_RESTRICTION', 'Ограничения по райони: ');
define('TEXT_COUPON_ZONE_RESTRICTION', 'Ограниченията по райони не са задължителни.');

define('ERROR_NO_COUPON_AMOUNT', 'Не е въведена стойност за купона');
define('ERROR_NO_COUPON_NAME', 'Не е въведено име на купона ');
define('ERROR_COUPON_EXISTS', 'Вече съществува купон с такъв код');


define('COUPON_NAME_HELP', 'Кратко име на купона');
define('COUPON_AMOUNT_HELP', 'Стойност на отстъпката за купона - фиксирана стойност или въведете % в края за процентна отстъпка.');
define('COUPON_CODE_HELP', 'Може да въведете свой собствен код тук, или да оставите празно за автоматично генериран код.');
define('COUPON_STARTDATE_HELP', 'Дата, от която купонът ще е валиден');
define('COUPON_FINISHDATE_HELP', 'Дата, след която купонът е невалиден');
define('COUPON_FREE_SHIP_HELP', 'Купонът дава безплатна доставка за направена поръчка. Забележка: това прескача сумата за стойност на купона, но взима под внимание минималната стойност на поръчката, за която е валиден купона');
define('COUPON_DESC_HELP', 'Описание на купона, предназначено за потребителя');
define('COUPON_MIN_ORDER_HELP', 'Минимална стойност на поръчка, преди купона да е валиден');
define('COUPON_USES_COUPON_HELP', 'Максималният брой пъти, които купонът може да бъде използван. Оставете празно за неограничен.');
define('COUPON_USES_USER_HELP', 'Брой пъти, които потребител може да използва купона. Оставете празно за неограничен.');
define('COUPON_PRODUCTS_HELP', 'Списък с продукти, разделени от запетая от product_ids, за които е валиден купона. Оставете празно за да няма ограничения.');
define('COUPON_CATEGORIES_HELP', 'Списък с cpaths, разделени от запетая, за които е валиден купона. Оставете празно за да няма ограничения.');
define('COUPON_BUTTON_PREVIEW', 'Преглед');
define('COUPON_BUTTON_CONFIRM', 'Потвърди');
define('COUPON_BUTTON_BACK', 'Назад');

define('COUPON_ACTIVE', 'Статус');
define('COUPON_START_DATE', 'Валиден от');
define('COUPON_EXPIRE_DATE', 'Валиден до');

define('ERROR_DISCOUNT_COUPON_WELCOME', 'Купон за отстъпка НЕМОЖЕ да бъде деактивиран. Това е Купон за отстъпка за Добре дошли<br /><br />Променете Купонът за отстъпка за Добре дошли, преди да се опитвате да го изтриете. Погледнете Админ->Конфигуриране->GV купони');
define('SUCCESS_COUPON_DISABLED', 'Успешно деактивирахте купон за отстъпка...');
define('TEXT_COUPON_NEW', 'Използвайте НОВ код за купон за отстъпка:');
define('ERROR_DISCOUNT_COUPON_DUPLICATE', 'Внимание! Дублираши се купони... Копирането е отхвърлено за Купон с код: ');
define('TEXT_CONFIRM_COPY', 'Сигурни ли сте, че искате да копирате този Купон за отстъпка върху друг Купон за отстъпка?');
define('SUCCESS_COUPON_DUPLICATE', 'Успешно направихте дупликат на Купон за отстъпка...<br /><br />Проверете името и датите на купона...');
?>