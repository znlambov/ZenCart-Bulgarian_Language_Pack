<?php  
// Bulgarian Language Pack for Zen Cart 1.5.5 at https://github.com/znlambov/ZenCart-Bulgarian_Language_Pack
/**
 * @package languageDefines
 * @copyright Copyright 2003-2016 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: Author: DrByte  Tue Jan 5 15:06:15 2016 -0500 Modified in v1.5.5 $
 */

// FOLLOWING WERE moved to meta_tags.php
//define('TITLE', 'Zen Cart!');
//define('SITE_TAGLINE', 'The Art of E-commerce');
//define('CUSTOM_KEYWORDS', 'ecommerce, open source, shop, online shopping');
// END: moved to meta_tags.php

  define('FOOTER_TEXT_BODY', 'Авторски права &copy; ' . date('Y') . ' <a href="' . zen_href_link(FILENAME_DEFAULT) . '" target="_blank">' . STORE_NAME . '</a>. Задвижвано от <a href="http://www.zen-cart.com" target="_blank">Zen Cart</a>');

// look in your $PATH_LOCALE/locale directory for available locales..
  $locales = array('bg_BG', 'bg_BG.utf8', 'bg', 'Bulgarian_Bulgaria.1251');
  @setlocale(LC_TIME, $locales);
  define('DATE_FORMAT_SHORT', '%d/%m/%Y');  // this is used for strftime()
  define('DATE_FORMAT_LONG', '%A %d %B, %Y'); // this is used for strftime()
  define('DATE_FORMAT', 'd/m/Y'); // this is used for date()
  define('DATE_TIME_FORMAT', DATE_FORMAT_SHORT . ' %H:%M:%S');

////
// Return date in raw format
// $date should be in format dd/mm/yyyy
// raw date is in format YYYYMMDD, or DDMMYYYY
  if (!function_exists('zen_date_raw')) {
    function zen_date_raw($date, $reverse = false) {
      if ($reverse) {
        return substr($date, 0, 2) . substr($date, 3, 2) . substr($date, 6, 4);
      } else {
        return substr($date, 6, 4) . substr($date, 3, 2) . substr($date, 0, 2);
      }
    }
  }

// if USE_DEFAULT_LANGUAGE_CURRENCY is true, use the following currency, instead of the applications default currency (used when changing language)
  define('LANGUAGE_CURRENCY', 'BGN');

// Global entries for the <html> tag
  define('HTML_PARAMS','dir="ltr" lang="bg"');

// charset for web pages and emails
  define('CHARSET', 'utf-8');

// footer text in includes/footer.php
  define('FOOTER_TEXT_REQUESTS_SINCE', 'заявка от');

// Define the name of your Gift Certificate as Gift Voucher, Gift Certificate, Zen Cart Dollars, etc. here for use through out the shop
  define('TEXT_GV_NAME','Подаръчен сертификат');
  define('TEXT_GV_NAMES','Подаръчен сертификат');

// used for redeem code, redemption code, or redemption id
  define('TEXT_GV_REDEEM','Код за осребряване');

// used for redeem code sidebox
  define('BOX_HEADING_GV_REDEEM', TEXT_GV_NAME);
  define('BOX_GV_REDEEM_INFO', 'Код за осребряване: ');

// text for gender
  define('MALE', 'Г-н');
  define('FEMALE', 'Г-жа');
  define('MALE_ADDRESS', 'Г-н');
  define('FEMALE_ADDRESS', 'Г-жа');

// text for date of birth example
  define('DOB_FORMAT_STRING', 'dd/mm/yyyy');

//text for sidebox heading links
  define('BOX_HEADING_LINKS', '&nbsp;&nbsp;[още]');

// categories box text in sideboxes/categories.php
  define('BOX_HEADING_CATEGORIES', 'Категории');

// manufacturers box text in sideboxes/manufacturers.php
  define('BOX_HEADING_MANUFACTURERS', 'Производители');

// whats_new box text in sideboxes/whats_new.php
  define('BOX_HEADING_WHATS_NEW', 'Нови продукти');
  define('CATEGORIES_BOX_HEADING_WHATS_NEW', 'Нови продукти...');

  define('BOX_HEADING_FEATURED_PRODUCTS', 'На фокус');
  define('CATEGORIES_BOX_HEADING_FEATURED_PRODUCTS', 'Продукти на фокус...');
  define('TEXT_NO_FEATURED_PRODUCTS', 'Още продукти на фокус ще бъдат добавени скоро. Моля, проверете отново.');

  define('TEXT_NO_ALL_PRODUCTS', 'Още продукти ще бъдат добавени скоро. Моля, проверете отново.');
  define('CATEGORIES_BOX_HEADING_PRODUCTS_ALL', 'Всички продукти...');

// quick_find box text in sideboxes/quick_find.php
  define('BOX_HEADING_SEARCH', 'Търси');
  define('BOX_SEARCH_ADVANCED_SEARCH', 'Разширено търсене');

// specials box text in sideboxes/specials.php
  define('BOX_HEADING_SPECIALS', 'Промоции');
  define('CATEGORIES_BOX_HEADING_SPECIALS','Промоции...');

// reviews box text in sideboxes/reviews.php
  define('BOX_HEADING_REVIEWS', 'Отзиви');
  define('BOX_REVIEWS_WRITE_REVIEW', 'Напишете отзив за продукта.');
  define('BOX_REVIEWS_NO_REVIEWS', 'Няма отзиви за продукта.');
  define('BOX_REVIEWS_TEXT_OF_5_STARS', '%s от 5 звезди!');

// shopping_cart box text in sideboxes/shopping_cart.php
  define('BOX_HEADING_SHOPPING_CART', 'Пазарна количка');
  define('BOX_SHOPPING_CART_EMPTY', 'Количката Ви е празна.');
  define('BOX_SHOPPING_CART_DIVIDER', 'ea.-&nbsp;');

// order_history box text in sideboxes/order_history.php
  define('BOX_HEADING_CUSTOMER_ORDERS', 'Бързо повтаряне на поръчка');

// best_sellers box text in sideboxes/best_sellers.php
  define('BOX_HEADING_BESTSELLERS', 'Най-продавани');
  define('BOX_HEADING_BESTSELLERS_IN', 'Най-продавани в<br />&nbsp;&nbsp;');

// notifications box text in sideboxes/products_notifications.php
  define('BOX_HEADING_NOTIFICATIONS', 'Известие');
  define('BOX_NOTIFICATIONS_NOTIFY', 'Извести ме при промени отнсно <strong>%s</strong>');
  define('BOX_NOTIFICATIONS_NOTIFY_REMOVE', 'Не ме известявай при промени отнсно <strong>%s</strong>');

// manufacturer box text
  define('BOX_HEADING_MANUFACTURER_INFO', 'За производителя');
  define('BOX_MANUFACTURER_INFO_HOMEPAGE', '%s страница');
  define('BOX_MANUFACTURER_INFO_OTHER_PRODUCTS', 'Други продукти');

// languages box text in sideboxes/languages.php
  define('BOX_HEADING_LANGUAGES', 'Езици');

// currencies box text in sideboxes/currencies.php
  define('BOX_HEADING_CURRENCIES', 'Валути');

// information box text in sideboxes/information.php
  define('BOX_HEADING_INFORMATION', 'Информация');
  define('BOX_INFORMATION_PRIVACY', 'Защита на личните данни');
  define('BOX_INFORMATION_CONDITIONS', 'Условия за ползване');
  define('BOX_INFORMATION_SHIPPING', 'Доставка и рекламации');
  define('BOX_INFORMATION_CONTACT', 'Контакти');
  define('BOX_INFORMATION_UNSUBSCRIBE', 'Отписване от новини');

  define('BOX_INFORMATION_SITE_MAP', 'Карта на сайта');

// information box text in sideboxes/more_information.php - were TUTORIAL_
  define('BOX_HEADING_MORE_INFORMATION', 'Още информация');
  define('BOX_INFORMATION_PAGE_2', 'Страница 2');
  define('BOX_INFORMATION_PAGE_3', 'Страница 3');
  define('BOX_INFORMATION_PAGE_4', 'Страница 4');

//New billing address text
  define('SET_AS_PRIMARY' , 'Задай, като основен адрес');
  define('NEW_ADDRESS_TITLE', 'Адрес на платеца');

// javascript messages
  define('JS_ERROR', 'Настъпи грешка, дкато обработвахме формата.\n\nМоля, направете следните промени:\n\n');

  define('JS_REVIEW_TEXT', '* Моля, напишете още няколко думи към коментара си. Отзивът трябва да е минимум ' . REVIEW_TEXT_MIN_LENGTH . ' символа.');
  define('JS_REVIEW_RATING', '* Моля, изберете оценка за този продукт.');

  define('JS_ERROR_NO_PAYMENT_MODULE_SELECTED', '* Моля, изберете начин на плащане за поръчката си.');

  define('JS_ERROR_SUBMITTED', 'Тази форма, вече беше подадена. Моля, натиснете OK и изчакайте да приключи процесът.');

  define('ERROR_NO_PAYMENT_MODULE_SELECTED', 'Моля, изберете начин на плащане за поръчката си.');
  define('ERROR_CONDITIONS_NOT_ACCEPTED', 'Моля, потвърдете, че сте съгласни с условията свързани с тази поръчка, като маркирате кутийката долу.');
  define('ERROR_PRIVACY_STATEMENT_NOT_ACCEPTED', 'Моля, потвърдете, че сте съгласни с декларацията за поверителност, като маркирате кутийката долу.');

  define('CATEGORY_COMPANY', 'Данни за фирмата');
  define('CATEGORY_PERSONAL', 'Лични данни');
  define('CATEGORY_ADDRESS', 'Вашият адрес');
  define('CATEGORY_CONTACT', 'Информация за контакти');
  define('CATEGORY_OPTIONS', 'Опции');
  define('CATEGORY_PASSWORD', 'Вашата парола');
  define('CATEGORY_LOGIN', 'Вход');
  define('PULL_DOWN_DEFAULT', 'Изберете държава');
  define('PLEASE_SELECT', 'Моля, изберете...');
  define('TYPE_BELOW', 'Напишете изборът си долу...');

  define('ENTRY_COMPANY', 'Име на фирмата:');
  define('ENTRY_COMPANY_ERROR', 'Моля, въведете име на фирма.');
  define('ENTRY_COMPANY_TEXT', '');
  define('ENTRY_GENDER', 'Обръщение:');
  define('ENTRY_GENDER_ERROR', 'Моля, изберете обръщение.');
  define('ENTRY_GENDER_TEXT', '*');
  define('ENTRY_FIRST_NAME', 'Малко име:');
  define('ENTRY_FIRST_NAME_ERROR', 'Вярно ли е написано малкото Ви име? Системата изисква минимум ' . ENTRY_FIRST_NAME_MIN_LENGTH . ' символа. Моля, опитайте отново.');
  define('ENTRY_FIRST_NAME_TEXT', '*');
  define('ENTRY_LAST_NAME', 'Фамилно име:');
  define('ENTRY_LAST_NAME_ERROR', 'Вярно ли е написано фамилното Ви име? Системата изисква минимум ' . ENTRY_LAST_NAME_MIN_LENGTH . ' символа. Моля, опитайте отново.');
  define('ENTRY_LAST_NAME_TEXT', '*');
  define('ENTRY_DATE_OF_BIRTH', 'Дата на раждане:');
  define('ENTRY_DATE_OF_BIRTH_ERROR', 'Варно ли е въведена датата Ви на раждане? Системата изисква дата във формат: DD/MM/YYYY (пример 21/05/1970)');
  define('ENTRY_DATE_OF_BIRTH_TEXT', '* (пример 21/05/1970)');
  define('ENTRY_EMAIL_ADDRESS', 'Електронна поща:');
  define('ENTRY_EMAIL_ADDRESS_ERROR', 'Вярно ли сте въвели е-пощата си? Би трябвало да съдържа поне ' . ENTRY_EMAIL_ADDRESS_MIN_LENGTH . ' символа. Моля, опитайте отново.');
  define('ENTRY_EMAIL_ADDRESS_CHECK_ERROR', 'Системата не може да разчете тази мейл. Моля, опитайте отново.');
  define('ENTRY_EMAIL_ADDRESS_ERROR_EXISTS', 'Вече има потребител с такъв мейл адрес - опитайте да влезете с този мейл. Ако вече не използвате този мейл, можете да го редактирате в меню Моят профил.');
  define('ENTRY_EMAIL_ADDRESS_TEXT', '*');
  define('ENTRY_NICK', 'Форум псевдоним:');
  define('ENTRY_NICK_TEXT', '*'); // note to display beside nickname input field
  define('ENTRY_NICK_DUPLICATE_ERROR', 'Този псевдоним вече е зает. Моля, опитайте с друг.');
  define('ENTRY_NICK_LENGTH_ERROR', 'Моля, опитайте отново. Псевдонимът трябва да съдържа поне ' . ENTRY_NICK_MIN_LENGTH . ' символа.');
  define('ENTRY_STREET_ADDRESS', 'Адрес:');
  define('ENTRY_STREET_ADDRESS_ERROR', 'Адресът Ви трябва да съдържа поне ' . ENTRY_STREET_ADDRESS_MIN_LENGTH . ' символа.');
  define('ENTRY_STREET_ADDRESS_TEXT', '*');
  define('ENTRY_SUBURB', 'Допълнение:');
  define('ENTRY_SUBURB_ERROR', '');
  define('ENTRY_SUBURB_TEXT', '');
  define('ENTRY_POST_CODE', 'Пощенски код:');
  define('ENTRY_POST_CODE_ERROR', 'Пощенския код трябва да е от поне ' . ENTRY_POSTCODE_MIN_LENGTH . ' символа.');
  define('ENTRY_POST_CODE_TEXT', '*');
  define('ENTRY_CITY', 'Град:');
  define('ENTRY_CUSTOMERS_REFERRAL', 'Справка клиент:');

  define('ENTRY_CITY_ERROR', 'Градът трябва да съдържа поне ' . ENTRY_CITY_MIN_LENGTH . ' символа.');
  define('ENTRY_CITY_TEXT', '*');
  define('ENTRY_STATE', 'Област:');
  define('ENTRY_STATE_ERROR', 'Областта трябва да съдържа поне ' . ENTRY_STATE_MIN_LENGTH . ' символа.');
  define('ENTRY_STATE_ERROR_SELECT', 'Моля, изберете област от падащото меню.');
  define('ENTRY_STATE_TEXT', '*');
  define('JS_STATE_SELECT', '-- Моля, изберете --');
  define('ENTRY_COUNTRY', 'Държава:');
  define('ENTRY_COUNTRY_ERROR', 'Трябва да изберете държава от падащото меню.');
  define('ENTRY_COUNTRY_TEXT', '*');
  define('ENTRY_TELEPHONE_NUMBER', 'Телефон:');
  define('ENTRY_TELEPHONE_NUMBER_ERROR', 'Телефонният номер трябва да е поне ' . ENTRY_TELEPHONE_MIN_LENGTH . ' символа.');
  define('ENTRY_TELEPHONE_NUMBER_TEXT', '*');
  define('ENTRY_FAX_NUMBER', 'Факс:');
  define('ENTRY_FAX_NUMBER_ERROR', '');
  define('ENTRY_FAX_NUMBER_TEXT', '');
  define('ENTRY_NEWSLETTER', 'Запишете се за новини.');
  define('ENTRY_NEWSLETTER_TEXT', '');
  define('ENTRY_NEWSLETTER_YES', 'Записан');
  define('ENTRY_NEWSLETTER_NO', 'Отписан');
  define('ENTRY_NEWSLETTER_ERROR', '');
  define('ENTRY_PASSWORD', 'Парола:');
  define('ENTRY_PASSWORD_ERROR', 'Паролата Ви трябва да е дълга поне ' . ENTRY_PASSWORD_MIN_LENGTH . ' символа.');
  define('ENTRY_PASSWORD_ERROR_NOT_MATCHING', 'Потвържението трябва да съвпада с паролата.');
  define('ENTRY_PASSWORD_TEXT', '* (поне ' . ENTRY_PASSWORD_MIN_LENGTH . ' символа)');
  define('ENTRY_PASSWORD_CONFIRMATION', 'Потвърди паролата:');
  define('ENTRY_PASSWORD_CONFIRMATION_TEXT', '*');
  define('ENTRY_PASSWORD_CURRENT', 'Текуща парола:');
  define('ENTRY_PASSWORD_CURRENT_TEXT', '*');
  define('ENTRY_PASSWORD_CURRENT_ERROR', 'Паролата Ви трябва да съдържа поне ' . ENTRY_PASSWORD_MIN_LENGTH . ' символа.');
  define('ENTRY_PASSWORD_NEW', 'Нова парола:');
  define('ENTRY_PASSWORD_NEW_TEXT', '*');
  define('ENTRY_PASSWORD_NEW_ERROR', 'Новата Ви парола трябва да съдържа поне ' . ENTRY_PASSWORD_MIN_LENGTH . ' символа.');
  define('ENTRY_PASSWORD_NEW_ERROR_NOT_MATCHING', 'Потвърждението на паролата трябва да съвпада с новата Ви парола.');
  define('PASSWORD_HIDDEN', '--СКРИТО--');

  define('FORM_REQUIRED_INFORMATION', '* Необходима информация');
  define('ENTRY_REQUIRED_SYMBOL', '*');

  // constants for use in zen_prev_next_display function
  define('TEXT_RESULT_PAGE', '');
  define('TEXT_DISPLAY_NUMBER_OF_PRODUCTS', 'Показва <strong>%d</strong> от <strong>%d</strong> (от <strong>%d</strong> продукта)');
  define('TEXT_DISPLAY_NUMBER_OF_ORDERS', 'Показва <strong>%d</strong> от <strong>%d</strong> (от <strong>%d</strong> поръчки)');
  define('TEXT_DISPLAY_NUMBER_OF_REVIEWS', 'Показва <strong>%d</strong> от <strong>%d</strong> (от <strong>%d</strong> отзиви)');
  define('TEXT_DISPLAY_NUMBER_OF_PRODUCTS_NEW', 'Показва <strong>%d</strong> от <strong>%d</strong> (от <strong>%d</strong> нови продукта)');
  define('TEXT_DISPLAY_NUMBER_OF_SPECIALS', 'Показва <strong>%d</strong> от <strong>%d</strong> (от <strong>%d</strong> промоции)');
  define('TEXT_DISPLAY_NUMBER_OF_PRODUCTS_FEATURED_PRODUCTS', 'Показва <strong>%d</strong> от <strong>%d</strong> (от <strong>%d</strong> продукти на фокус)');
  define('TEXT_DISPLAY_NUMBER_OF_PRODUCTS_ALL', 'Показва <strong>%d</strong> от <strong>%d</strong> (от <strong>%d</strong> продукта)');

  define('PREVNEXT_TITLE_FIRST_PAGE', 'Първа страница');
  define('PREVNEXT_TITLE_PREVIOUS_PAGE', 'Предна страница');
  define('PREVNEXT_TITLE_NEXT_PAGE', 'Следваща страница');
  define('PREVNEXT_TITLE_LAST_PAGE', 'Последна страница');
  define('PREVNEXT_TITLE_PAGE_NO', 'Страница %d');
  define('PREVNEXT_TITLE_PREV_SET_OF_NO_PAGE', 'Предните %d страници');
  define('PREVNEXT_TITLE_NEXT_SET_OF_NO_PAGE', 'Следващите %d страници');
  define('PREVNEXT_BUTTON_FIRST', '&laquo;Първа');
  define('PREVNEXT_BUTTON_PREV', '[&laquo;&nbsp;Пред]');
  define('PREVNEXT_BUTTON_NEXT', '[След&nbsp;&raquo;]');
  define('PREVNEXT_BUTTON_LAST', 'Посл&raquo;');

  define('TEXT_BASE_PRICE','Започва от: ');

  define('TEXT_CLICK_TO_ENLARGE', 'голяма снимка');

  define('TEXT_SORT_PRODUCTS', 'Подреди продукти ');
  define('TEXT_DESCENDINGLY', 'низходящо');
  define('TEXT_ASCENDINGLY', 'възходящо');
  define('TEXT_BY', ' по ');

  define('TEXT_REVIEW_BY', 'от %s');
  define('TEXT_REVIEW_WORD_COUNT', '%s думи');
  define('TEXT_REVIEW_RATING', 'Оценка: %s [%s]');
  define('TEXT_REVIEW_DATE_ADDED', 'От дата: %s');
  define('TEXT_NO_REVIEWS', 'Няма отзиви за този продукт.');

  define('TEXT_NO_NEW_PRODUCTS', 'Още нови продукти ще бъдат добавени скоро. Моля, наминете пак.');

  define('TEXT_UNKNOWN_TAX_RATE', 'Такса');

  define('TEXT_REQUIRED', '<span class="errorText">Необходим</span>');

  define('WARNING_INSTALL_DIRECTORY_EXISTS', 'ВНИМАНИЕ: Инсталационната директория съществува на: %s. Моля, премахнете директорията от съображения за сигурност.');
  define('WARNING_CONFIG_FILE_WRITEABLE', 'Внимание: Конфигурационният файл може да бъде редактиран: %s. Това носи потенциален риск за сигурността. Моля, променете потребителските привилегии (user permissions) за този файл (read-only, CHMOD 644 или 444 са типични). Вероятно трябва да използвате контролния панел на хостинга си, файлов мениджър или FTP клиент. Свържете се с хостинга си за помощ. <a href="http://tutorials.zen-cart.com/index.php?article=90" target="_blank">Вижте и тук</a>');
  define('ERROR_FILE_NOT_REMOVEABLE', 'Грешка: файлът не може да бъде премахнат. Вероятно трябва да използвате FTP, за да премахнете файла, заради настройките за четене-запис-изпълнение в сървъра.');
  define('WARNING_SESSION_AUTO_START', 'Внимание: session.auto_start е включен - моля, изключете това PHP свойство в php.ini и рестартирайте уеб сървъра.');
  define('WARNING_DOWNLOAD_DIRECTORY_NON_EXISTENT', 'Внимание: Не съществува директорията за продукти за даунлоуд: ' . DIR_FS_DOWNLOAD . '. Продуктите за даунлоуд няма да работят, докато тази директория не бъде възстановена.');
  define('WARNING_SQL_CACHE_DIRECTORY_NON_EXISTENT', 'Внимание: SQL кеш директорията не съществува: ' . DIR_FS_SQL_CACHE . '. SQL кеширането няма да работи, докато не създадете директорията.');
  define('WARNING_SQL_CACHE_DIRECTORY_NOT_WRITEABLE', 'Внимание: Не може да се записва върху директорията за SQL кеш: ' . DIR_FS_SQL_CACHE . '. SQL кеширането няма да работи, докато не бъдат променени настройте за четене-запис-изпълнение.');
  define('WARNING_DATABASE_VERSION_OUT_OF_DATE', 'Базата данни трябва да бъде пачната до по-високо ниво. Прегледайте информацията в Админ->Инструменти->Сървър относно patch levels.');
  define('WARNING_COULD_NOT_LOCATE_LANG_FILE', 'ВНИМАНИЕ: Не намира езиков файл: ');

  define('TEXT_CCVAL_ERROR_INVALID_DATE', 'Датата на валидност въведена за тази карта е неверна. Моля, проверете и опитайте отново.');
  define('TEXT_CCVAL_ERROR_INVALID_NUMBER', 'Въведения номер на карта е невалиден. Моля, проверете и опитайте отново.');
  define('TEXT_CCVAL_ERROR_UNKNOWN_CARD', 'Номер на карта започващ с %s е въведен неправилно или не приемаме този тип карти. Опитайте отново или използвайте друга карта.');

  define('BOX_INFORMATION_DISCOUNT_COUPONS', 'Купон за отстъпки');
  define('BOX_INFORMATION_GV', TEXT_GV_NAME . ' ЧЗВ');
  define('VOUCHER_BALANCE', TEXT_GV_NAME . ' Баланс ');
  define('BOX_HEADING_GIFT_VOUCHER', TEXT_GV_NAME . ' Профил');
  define('GV_FAQ', TEXT_GV_NAME . ' ЧЗВ');
  define('ERROR_REDEEMED_AMOUNT', 'Поздравления, успешно осребрихте ');
  define('ERROR_NO_REDEEM_CODE', 'Не сте въвели ' . TEXT_GV_REDEEM . '.');
  define('ERROR_NO_INVALID_REDEEM_GV', 'Невалиден ' . TEXT_GV_NAME . ' ' . TEXT_GV_REDEEM);
  define('TABLE_HEADING_CREDIT', 'Наличен кредит');
  define('GV_HAS_VOUCHERA', 'Имате средства във Вашия ' . TEXT_GV_NAME . ' Профил. Ако желаете <br />
                           можете да изпратите средствата чрез <a class="pageResults" href="');

  define('GV_HAS_VOUCHERB', '"><strong>мейл</strong></a> до някого');
  define('ENTRY_AMOUNT_CHECK_ERROR', 'Нямате достатъчно средства, за да изпратите тази стойност.');
  define('BOX_SEND_TO_FRIEND', 'Изпрати ' . TEXT_GV_NAME . ' ');

  define('VOUCHER_REDEEMED',  TEXT_GV_NAME . ' Осребри');
  define('CART_COUPON', 'Купон :');
  define('CART_COUPON_INFO', 'още информация');
  define('TEXT_SEND_OR_SPEND','Има средства във Вашия ' . TEXT_GV_NAME . ' профил. Можете да ги изпратите на някого. За да го направите, натиснете бутона долу.');
  define('TEXT_BALANCE_IS', 'Вашият ' . TEXT_GV_NAME . ' баланс е: ');
  define('TEXT_AVAILABLE_BALANCE', 'Вашият ' . TEXT_GV_NAME . ' Профил');

// payment method is GV/Discount
  define('PAYMENT_METHOD_GV', 'Подаръчен сертификат/Купон');
  define('PAYMENT_MODULE_GV', 'ПВ/КО');

  define('TABLE_HEADING_CREDIT_PAYMENT', 'Кредит на разположение');

  define('TEXT_INVALID_REDEEM_COUPON', 'Невалиден код');
  define('TEXT_INVALID_REDEEM_COUPON_MINIMUM', 'Трябва да похарчите поне %s за да осребрите този купон');
  define('TEXT_INVALID_STARTDATE_COUPON', 'Този купон все още не е валиден');
  define('TEXT_INVALID_FINISHDATE_COUPON', 'Този купон вече е изтекъл');
  define('TEXT_INVALID_USES_COUPON', 'Този купон може да се използва само ');
  define('TIMES', ' пъти.');
  define('TIME', ' път.');
  define('TEXT_INVALID_USES_USER_COUPON', 'Използвали сте код за купон: %s максималният възможен брой пъти за клиент. ');
  define('REDEEMED_COUPON', 'стойност на купона ');
  define('REDEEMED_MIN_ORDER', 'за поръчки над ');
  define('REDEEMED_RESTRICTIONS', ' [Налични са ограничения на Продукти-Категории]');
  define('TEXT_ERROR', 'Възникнала е грешка');
  define('TEXT_INVALID_COUPON_PRODUCT', 'Този код не е валиден за продуктите, които в момента са в количката Ви.');
  define('TEXT_VALID_COUPON', 'Поздравления, вие осребрихте код за отстъпка');
  define('TEXT_REMOVE_REDEEM_COUPON_ZONE', 'Кодът, който въведохте е невалиден за избрания от Вас адрес.');

// more info in place of buy now
  define('MORE_INFO_TEXT','... повече информация');

// IP Address
  define('TEXT_YOUR_IP_ADDRESS','Вашият IP адрес е: ');

//Generic Address Heading
  define('HEADING_ADDRESS_INFORMATION','Адресна информация');

// cart contents
  define('PRODUCTS_ORDER_QTY_TEXT_IN_CART','Бройки в количката: ');
  define('PRODUCTS_ORDER_QTY_TEXT','Добави в количката: ');

// success messages for added to cart when display cart is off
// set to blank for no messages
// for all pages except where multiple add to cart is used:
  define('SUCCESS_ADDED_TO_CART_PRODUCT', 'Успешно добавихте продук в количката ...');
// only for where multiple add to cart is used:
  define('SUCCESS_ADDED_TO_CART_PRODUCTS', 'Успешно добавихте продукта(продуктите) в количката...');

  define('TEXT_PRODUCT_WEIGHT_UNIT','кг');

// Shipping
  define('TEXT_SHIPPING_WEIGHT','кг');
  define('TEXT_SHIPPING_BOXES', 'Кутии');

// Discount Savings
  define('PRODUCT_PRICE_DISCOUNT_PREFIX','Спести:&nbsp;');
  define('PRODUCT_PRICE_DISCOUNT_PERCENTAGE','% намаление');
  define('PRODUCT_PRICE_DISCOUNT_AMOUNT','&nbsp;намаление');

// Sale Maker Sale Price
  define('PRODUCT_PRICE_SALE','Сега:&nbsp;');

//universal symbols
  define('TEXT_NUMBER_SYMBOL', '№ ');

// banner_box
  define('BOX_HEADING_BANNER_BOX','Спонсори');
  define('TEXT_BANNER_BOX','Моля, посетете нашите спонсори...');

// banner box 2
  define('BOX_HEADING_BANNER_BOX2','Видяхте ли...');
  define('TEXT_BANNER_BOX2','Вижте сега!');

// banner_box - all
  define('BOX_HEADING_BANNER_BOX_ALL','Спонсори');
  define('TEXT_BANNER_BOX_ALL','Моля, посетете нашите спонсори...');

// boxes defines
  define('PULL_DOWN_ALL','Моля, изберете');
  define('PULL_DOWN_MANUFACTURERS','- Нулиране -');
// shipping estimator
  define('PULL_DOWN_SHIPPING_ESTIMATOR_SELECT', 'Моля, изберете');

// general Sort By
  define('TEXT_INFO_SORT_BY','Подреди по: ');

// close window image popups
  define('TEXT_CLOSE_WINDOW',' - Кликни върху снимката за затваряне');
// close popups
  define('TEXT_CURRENT_CLOSE_WINDOW','[ Затвори прозореца ]');

// iii 031104 added:  File upload error strings
  define('ERROR_FILETYPE_NOT_ALLOWED', 'Грешка: Този файлов формат е забранен.');
  define('WARNING_NO_FILE_UPLOADED', 'Внимание: Файлът не е записан.');
  define('SUCCESS_FILE_SAVED_SUCCESSFULLY', 'Успешно записан файл.');
  define('ERROR_FILE_NOT_SAVED', 'Грешка:  Файлът не е записан.');
  define('ERROR_DESTINATION_NOT_WRITEABLE', 'Грешка:  невъзможен записът в дестинацията.');
  define('ERROR_DESTINATION_DOES_NOT_EXIST', 'Грешка: дестинацията на съществува.');
  define('ERROR_FILE_TOO_BIG', 'Внимание: Файлът е твърде голям за да бъде записан!<br />Поръчката може да бъде направена, но се свържете със сахта за помощ при ъплоуда');
// End iii added

  define('TEXT_BEFORE_DOWN_FOR_MAINTENANCE', 'СЪОБЩЕНИЕ: Този сайт подлежи на планирана профилактика на: ');
  define('TEXT_ADMIN_DOWN_FOR_MAINTENANCE', 'СЪОБЩЕНИЕ: В момента сайта подлежи на профилактика');

  define('PRODUCTS_PRICE_IS_FREE_TEXT','Безплатно!');
  define('PRODUCTS_PRICE_IS_CALL_FOR_PRICE_TEXT','Обади се за цена');
  define('TEXT_CALL_FOR_PRICE','Обади се за цена');

  define('TEXT_INVALID_SELECTION',' Направили сте невъзможна селекция: ');
  define('TEXT_ERROR_OPTION_FOR',' На опциите за: ');
  define('TEXT_INVALID_USER_INPUT', 'Тряба да се въведе от потребител<br />');

// product_listing
  define('PRODUCTS_QUANTITY_MIN_TEXT_LISTING','Мин: ');
  define('PRODUCTS_QUANTITY_UNIT_TEXT_LISTING','Мярка: ');
  define('PRODUCTS_QUANTITY_IN_CART_LISTING','В количката:');
  define('PRODUCTS_QUANTITY_ADD_ADDITIONAL_LISTING','Добави допълнително:');

  define('PRODUCTS_QUANTITY_MAX_TEXT_LISTING','Макс:');

  define('TEXT_PRODUCTS_MIX_OFF','*Смесени Изкл.');
  define('TEXT_PRODUCTS_MIX_ON','*Смесени Вкл.');

  define('TEXT_PRODUCTS_MIX_OFF_SHOPPING_CART','<br />*Вие не можете да смесвате опциите на този елемент, за да се срещне минималното изискване за количество.*<br />');
  define('TEXT_PRODUCTS_MIX_ON_SHOPPING_CART','*Смесването стойностите на опциите е Вкл.<br />');

  define('ERROR_MAXIMUM_QTY','Количествата в количката Ви бяха коригирани, поради ограничение на максимално допустимите. Вижте това:<br />');
  define('ERROR_CORRECTIONS_HEADING','Моля, коригирайте следното: <br />');
  define('ERROR_QUANTITY_ADJUSTED', 'Количествата в количката Ви бяха коригирани. Продуктът, който искахте не е наличен в дробни количества. Количесто на продукта:<br />');
  define('ERROR_QUANTITY_CHANGED_FROM', ', е променено от: ');
  define('ERROR_QUANTITY_CHANGED_TO', ' на ');

// Downloads Controller
  define('DOWNLOADS_CONTROLLER_ON_HOLD_MSG','Съобщение: Свалянето (Downloads) не е разрешено, преди да бъде потвърдено плащане');
  define('TEXT_FILESIZE_BYTES', ' байта');
  define('TEXT_FILESIZE_MEGS', ' MB');

// shopping cart errors
  define('ERROR_PRODUCT','<br />Продукт: ');
  define('ERROR_PRODUCT_STATUS_SHOPPING_CART','<br />Извинете, но този продукт бе премахнат.<br />Продъктът е премахнат и от пазарната Ви количка.');
  define('ERROR_PRODUCT_ATTRIBUTES','<br />Продукт: ');
  define('ERROR_PRODUCT_STATUS_SHOPPING_CART_ATTRIBUTES','<br /> Извинете ни, но избраните опции за продукта са променени и са премахнати за момента.<br />Продуктът бе премахнат от количката Ви.');
  define('ERROR_PRODUCT_QUANTITY_MIN',',  ... Грешка с минималните количества - ');
  define('ERROR_PRODUCT_QUANTITY_UNITS',' ... Грешка с количествените единици - ');
  define('ERROR_PRODUCT_OPTION_SELECTION','<br /> ... Избрана невалидна стойност на опциите ');
  define('ERROR_PRODUCT_QUANTITY_ORDERED','<br /> Поръчали сте общо: ');
  define('ERROR_PRODUCT_QUANTITY_MAX',' ... Грешка с минималните количества - ');
  define('ERROR_PRODUCT_QUANTITY_MIN_SHOPPING_CART',', има ограничения за минимално количество. ');
  define('ERROR_PRODUCT_QUANTITY_UNITS_SHOPPING_CART',' ... Грешка с количествените единици - ');
  define('ERROR_PRODUCT_QUANTITY_MAX_SHOPPING_CART',' ... Грешка с максималните количества - ');

  define('WARNING_SHOPPING_CART_COMBINED', 'Съобщение: За Ваше удобство комбинирахме пазарната Ви количка с тази от последното Ви влизане. Моля, проверете количката си, преди да приключите поръчката.');
  define('WARNING_PRODUCT_QUANTITY_ADJUSTED', 'Количествата бяха коригирани, според това, което е налично. ');

// error on checkout when $_SESSION['customers_id' does not exist in customers table
  define('ERROR_CUSTOMERS_ID_INVALID', 'Информацията за потребителя не може да бъде валидирана!<br />Моля, влезте отново или създайте нов профил...');

  define('TABLE_HEADING_FEATURED_PRODUCTS','Продукти на фокус');

  define('TABLE_HEADING_NEW_PRODUCTS', 'Нови продукти за %s');
  define('TABLE_HEADING_UPCOMING_PRODUCTS', 'Предстоящи продукти');
  define('TABLE_HEADING_DATE_EXPECTED', 'Очаквани на');
  define('TABLE_HEADING_SPECIALS_INDEX', 'Месечни промоции за %s');

  define('CAPTION_UPCOMING_PRODUCTS','Тези продукти скоро ще са налични');
  define('SUMMARY_TABLE_UPCOMING_PRODUCTS','списъкът съдържа продукти, кото се очаква скоро да бъдат налични, както и датите, на които се очаква да са налични');

// meta tags special defines
  define('META_TAG_PRODUCTS_PRICE_IS_FREE_TEXT','Безплатно!');

// customer login
  define('TEXT_SHOWCASE_ONLY','Контакти');
// set for login for prices
  define('TEXT_LOGIN_FOR_PRICE_PRICE','Цената не е на разположение');
  define('TEXT_LOGIN_FOR_PRICE_BUTTON_REPLACE','Влез, за да видиш цените');
// set for show room only
  define('TEXT_LOGIN_FOR_PRICE_PRICE_SHOWROOM', ''); // blank for prices or enter your own text
  define('TEXT_LOGIN_FOR_PRICE_BUTTON_REPLACE_SHOWROOM','Стоките са само изложени');

// authorization pending
  define('TEXT_AUTHORIZATION_PENDING_PRICE', 'Цената не е на разположение');
  define('TEXT_AUTHORIZATION_PENDING_BUTTON_REPLACE', 'Очаква одобрение');
  define('TEXT_LOGIN_TO_SHOP_BUTTON_REPLACE','Влез, за да пазаруваш');
  define('TEXT_AUTHORIZATION_PENDING_CHECKOUT', 'Не може да се приключи поръчка - Очаква одобрение');

// text pricing
  define('TEXT_CHARGES_WORD','Изчисли такса:');
  define('TEXT_PER_WORD','<br />Цена за дума: ');
  define('TEXT_WORDS_FREE',' Безплатна(и) дума(и) ');
  define('TEXT_CHARGES_LETTERS','Изчисли такса:');
  define('TEXT_PER_LETTER','<br />Цена за буква: ');
  define('TEXT_LETTERS_FREE',' Безплтна(и) буква(и) ');
  define('TEXT_ONETIME_CHARGES','*еднократни такси = ');
  define('TEXT_ONETIME_CHARGES_EMAIL',"\t" . '*еднократни такси = ');
  define('TEXT_ATTRIBUTES_QTY_PRICES_HELP', 'Възможност за количествени отстъпки');
  define('TABLE_ATTRIBUTES_QTY_PRICE_QTY','Количество');
  define('TABLE_ATTRIBUTES_QTY_PRICE_PRICE','Цена');
  define('TEXT_ATTRIBUTES_QTY_PRICES_ONETIME_HELP', 'Еднократна такса Възможност за количествени отстъпки');

// textarea attribute input fields
  define('TEXT_MAXIMUM_CHARACTERS_ALLOWED',' Максимален брой разрешени знаци');
  define('TEXT_REMAINING','оставащи');

// Shipping Estimator
  define('CART_SHIPPING_OPTIONS', 'Изчисли разходи за доставка');
  define('CART_SHIPPING_OPTIONS_LOGIN', 'Моля, <a href="' . zen_href_link(FILENAME_LOGIN, '', 'SSL') . '"><span class="pseudolink">Влезте</span></a>, за да видите разходите за доставка.');
  define('CART_SHIPPING_METHOD_TEXT', 'Налични начини за доставка');
  define('CART_SHIPPING_METHOD_RATES', 'Цени');
  define('CART_SHIPPING_METHOD_TO','Доставка до: ');
  define('CART_SHIPPING_METHOD_TO_NOLOGIN', 'Доставка до: <a href="' . zen_href_link(FILENAME_LOGIN, '', 'SSL') . '"><span class="pseudolink">Вход</span></a>');
  define('CART_SHIPPING_METHOD_FREE_TEXT','Безплатна доставка');
  define('CART_SHIPPING_METHOD_ALL_DOWNLOADS','- Даунлоъдс');
  define('CART_SHIPPING_METHOD_RECALCULATE','Преизчисли');
  define('CART_SHIPPING_METHOD_ZIP_REQUIRED','вярно');
  define('CART_SHIPPING_METHOD_ADDRESS','Адрес:');
  define('CART_OT','Общо възлиза на:');
  define('CART_OT_SHOW','вярно'); // set to false if you don't want order totals
  define('CART_ITEMS','Продукти в количката: ');
  define('CART_SELECT','Избери');
  define('ERROR_CART_UPDATE', '<strong>Обнови поръчката си.</strong> ');
  define('IMAGE_BUTTON_UPDATE_CART', 'Обнови');
  define('EMPTY_CART_TEXT_NO_QUOTE', 'Сесията Ви е изтекла... Моля, обновете пазарната си количка за да видите цена за доставка...');
  define('CART_SHIPPING_QUOTE_CRITERIA', 'Цената за доставка се базира на адресната информация, която сте избрали:');

// multiple product add to cart
  define('TEXT_PRODUCT_LISTING_MULTIPLE_ADD_TO_CART', 'Добави: ');
  define('TEXT_PRODUCT_ALL_LISTING_MULTIPLE_ADD_TO_CART', 'Добави: ');
  define('TEXT_PRODUCT_FEATURED_LISTING_MULTIPLE_ADD_TO_CART', 'Добави: ');
  define('TEXT_PRODUCT_NEW_LISTING_MULTIPLE_ADD_TO_CART', 'Добави: ');
  //moved SUBMIT_BUTTON_ADD_PRODUCTS_TO_CART to button_names.php as BUTTON_ADD_PRODUCTS_TO_CART_ALT

// discount qty table
  define('TEXT_HEADER_DISCOUNT_PRICES_PERCENTAGE', 'Количествени отстъпки от цената');
  define('TEXT_HEADER_DISCOUNT_PRICES_ACTUAL_PRICE', 'Количествени отстъпки Нова цената');
  define('TEXT_HEADER_DISCOUNT_PRICES_AMOUNT_OFF', 'Количествени отстъпки от цената');
  define('TEXT_FOOTER_DISCOUNT_QUANTITIES', '* Отстъпките могат да варират, според опциите по-горе');
  define('TEXT_HEADER_DISCOUNTS_OFF', 'Количествени отстъпки не са налични...');

// sort order titles for dropdowns
  define('PULL_DOWN_ALL_RESET','- НУЛИРАЙ - ');
  define('TEXT_INFO_SORT_BY_PRODUCTS_NAME', 'Име на продукт');
  define('TEXT_INFO_SORT_BY_PRODUCTS_NAME_DESC', 'Име на продукт - низходящо');
  define('TEXT_INFO_SORT_BY_PRODUCTS_PRICE', 'Цена - ниска към висока');
  define('TEXT_INFO_SORT_BY_PRODUCTS_PRICE_DESC', 'Цена - висока към ниска');
  define('TEXT_INFO_SORT_BY_PRODUCTS_MODEL', 'Модел');
  define('TEXT_INFO_SORT_BY_PRODUCTS_DATE_DESC', 'Добавено на - нови към стари');
  define('TEXT_INFO_SORT_BY_PRODUCTS_DATE', 'Добавено на - стари към нови');
  define('TEXT_INFO_SORT_BY_PRODUCTS_SORT_ORDER', 'По подразбиране');

// downloads module defines
  define('TABLE_HEADING_DOWNLOAD_DATE', 'Връзката изтича');
  define('TABLE_HEADING_DOWNLOAD_COUNT', 'Оставащи');
  define('HEADING_DOWNLOAD', 'За да свалите файловете си, натиснете бутона за Даунлоъд и изберете "Запази на диска" от появилото се меню.');
  define('TABLE_HEADING_DOWNLOAD_FILENAME','Име на файл');
  define('TABLE_HEADING_PRODUCT_NAME','Име на продукт');
  define('TABLE_HEADING_BYTE_SIZE','Размер на файла');
  define('TEXT_DOWNLOADS_UNLIMITED', 'Неограничен');
  define('TEXT_DOWNLOADS_UNLIMITED_COUNT', '--- *** ---');

// misc
  define('COLON_SPACER', ':&nbsp;&nbsp;');
  define('PAYMENT_JAVASCRIPT_DISABLED', 'Не може да продължите към приключване на поръчката, защото Javascript е изключен. Трябва да го разрешите, за да продължите');

// table headings for cart display and upcoming products
  define('TABLE_HEADING_QUANTITY', 'Бройки');
  define('TABLE_HEADING_PRODUCTS', 'Име');
  define('TABLE_HEADING_TOTAL', 'Общо');

// create account - login shared
  define('TABLE_HEADING_PRIVACY_CONDITIONS', 'Декларазия за поверителност');
  define('TEXT_PRIVACY_CONDITIONS_DESCRIPTION', 'Моля, потвърдете, че сте съгласни с декларацията за поверителност, като маркирате кутийката долу. Можете да прочетете Декларацията за поверителност <a href="' . zen_href_link(FILENAME_PRIVACY, '', 'SSL') . '"><span class="pseudolink">тук</span></a>.');
  define('TEXT_PRIVACY_CONDITIONS_CONFIRM', 'Прочетох и съм съгласен с Декларацията за поверителност.');
  define('TABLE_HEADING_ADDRESS_DETAILS', 'Детайли за адреса');
  define('TABLE_HEADING_PHONE_FAX_DETAILS', 'Допълнителни контакти');
  define('TABLE_HEADING_DATE_OF_BIRTH', 'Потвърди възрастта си');
  define('TABLE_HEADING_LOGIN_DETAILS', 'Детайли за вход');
  define('TABLE_HEADING_REFERRAL_DETAILS', 'Кой Ви насочи към нас?');

  define('ERROR_TEXT_COUNTRY_DISABLED_PLEASE_CHANGE', 'Извинете, но вече не приемаме адрес за доставка или адрес на платеца в "%s".  Моля, редактирайте адреса за да продължите.');

  define('ENTRY_EMAIL_PREFERENCE','Детайли за новини и мейл');
  define('ENTRY_EMAIL_HTML_DISPLAY','HTML');
  define('ENTRY_EMAIL_TEXT_DISPLAY','Само текст');
  define('EMAIL_SEND_FAILED','Грешка: неуспешно изпращане на електронна поща до: "%s" <%s> относно: "%s"');

  define('DB_ERROR_NOT_CONNECTED', 'Грешка - неуспешно свързване с базата данни');
  define('ERROR_DATABASE_MAINTENANCE_NEEDED', '<a href="http://www.zen-cart.com/content.php?334-ERROR-0071-There-appears-to-be-a-problem-with-the-database-Maintenance-is-required" target="_blank">Грешка 0071: Изглежда има проблем с базата данни. Необходима е поддръжка.</a>');

  // EZ-PAGES Alerts
  define('TEXT_EZPAGES_STATUS_HEADER_ADMIN', 'Внимание: EZ-PAGES HEADER - Включено само за Admin IP');
  define('TEXT_EZPAGES_STATUS_FOOTER_ADMIN', 'Внимание: EZ-PAGES FOOTER - Включено само за Admin IP');
  define('TEXT_EZPAGES_STATUS_SIDEBOX_ADMIN', 'Внимание: EZ-PAGES SIDEBOX - Включено само за Admin IP');

// extra product listing sorter
  define('TEXT_PRODUCTS_LISTING_ALPHA_SORTER', '');
  define('TEXT_PRODUCTS_LISTING_ALPHA_SORTER_NAMES', 'Продукти започващи с...');
  define('TEXT_PRODUCTS_LISTING_ALPHA_SORTER_NAMES_RESET', '-- Нулиране --');

///////////////////////////////////////////////////////////
// include email extras
  if (file_exists(DIR_WS_LANGUAGES . $_SESSION['language'] . '/' . $template_dir . '/' . FILENAME_EMAIL_EXTRAS)) {
    $template_dir_select = $template_dir . '/';
  } else {
    $template_dir_select = '';
  }
  require_once(DIR_WS_LANGUAGES . $_SESSION['language'] . '/' . $template_dir_select . FILENAME_EMAIL_EXTRAS);

// include template specific header defines
  if (file_exists(DIR_WS_LANGUAGES . $_SESSION['language'] . '/' . $template_dir . '/' . FILENAME_HEADER)) {
    $template_dir_select = $template_dir . '/';
  } else {
    $template_dir_select = '';
  }
  require_once(DIR_WS_LANGUAGES . $_SESSION['language'] . '/' . $template_dir_select . FILENAME_HEADER);

// include template specific button name defines
  if (file_exists(DIR_WS_LANGUAGES . $_SESSION['language'] . '/' . $template_dir . '/' . FILENAME_BUTTON_NAMES)) {
    $template_dir_select = $template_dir . '/';
  } else {
    $template_dir_select = '';
  }
  require_once(DIR_WS_LANGUAGES . $_SESSION['language'] . '/' . $template_dir_select . FILENAME_BUTTON_NAMES);

// include template specific icon name defines
  if (file_exists(DIR_WS_LANGUAGES . $_SESSION['language'] . '/' . $template_dir . '/' . FILENAME_ICON_NAMES)) {
    $template_dir_select = $template_dir . '/';
  } else {
    $template_dir_select = '';
  }
  require_once(DIR_WS_LANGUAGES . $_SESSION['language'] . '/' . $template_dir_select . FILENAME_ICON_NAMES);

// include template specific other image name defines
  if (file_exists(DIR_WS_LANGUAGES . $_SESSION['language'] . '/' . $template_dir . '/' . FILENAME_OTHER_IMAGES_NAMES)) {
    $template_dir_select = $template_dir . '/';
  } else {
    $template_dir_select = '';
  }
  require_once(DIR_WS_LANGUAGES . $_SESSION['language'] . '/' . $template_dir_select . FILENAME_OTHER_IMAGES_NAMES);

// credit cards
  if (file_exists(DIR_WS_LANGUAGES . $_SESSION['language'] . '/' . $template_dir . '/' . FILENAME_CREDIT_CARDS)) {
    $template_dir_select = $template_dir . '/';
  } else {
    $template_dir_select = '';
  }
  require_once(DIR_WS_LANGUAGES . $_SESSION['language'] . '/' . $template_dir_select. FILENAME_CREDIT_CARDS);

// include template specific whos_online sidebox defines
  if (file_exists(DIR_WS_LANGUAGES . $_SESSION['language'] . '/' . $template_dir . '/' . FILENAME_WHOS_ONLINE . '.php')) {
    $template_dir_select = $template_dir . '/';
  } else {
    $template_dir_select = '';
  }
  require_once(DIR_WS_LANGUAGES . $_SESSION['language'] . '/' . $template_dir_select . FILENAME_WHOS_ONLINE . '.php');

// include template specific meta tags defines
  if (file_exists(DIR_WS_LANGUAGES . $_SESSION['language'] . '/' . $template_dir . '/meta_tags.php')) {
    $template_dir_select = $template_dir . '/';
  } else {
    $template_dir_select = '';
  }
  require_once(DIR_WS_LANGUAGES . $_SESSION['language'] . '/' . $template_dir_select . 'meta_tags.php');

// END OF EXTERNAL LANGUAGE LINKS
