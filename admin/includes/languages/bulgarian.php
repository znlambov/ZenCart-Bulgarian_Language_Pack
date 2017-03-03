<?php  
// Bulgarian Language Pack for Zen Cart 1.5.5d
// https://github.com/znlambov/ZenCart-Bulgarian_Language_Pack
//

/**
 * @package admin
 * @copyright Copyright 2003-2016 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: Author: DrByte  Wed Mar 23 14:21:26 2016 -0500 Modified in v1.5.5 $
 */
if (!defined('IS_ADMIN_FLAG'))
{
  die('Illegal Access');
}

// added defines for header alt and text
define('HEADER_ALT_TEXT', 'Админ панел задвижван от Zen Cart :: The Art of E-Commerce');
define('HEADER_LOGO_WIDTH', '200px');
define('HEADER_LOGO_HEIGHT', '70px');
define('HEADER_LOGO_IMAGE', 'logo.gif');

// look in your $PATH_LOCALE/locale directory for available locales..
$locales = array('bg_BG', 'bg_BG.utf8', 'bg', 'Bulgarian_Bulgaria.1251');
@setlocale(LC_TIME, $locales);
define('DATE_FORMAT_SHORT', '%d/%m/%Y');  // this is used for strftime()
define('DATE_FORMAT_LONG', '%A %d %B, %Y'); // this is used for strftime()
define('DATE_FORMAT', 'd/m/Y'); // this is used for date()
define('PHP_DATE_TIME_FORMAT', 'd/m/Y H:i:s'); // this is used for date()
define('DATE_TIME_FORMAT', DATE_FORMAT_SHORT . ' %H:%M:%S');
define('DATE_FORMAT_SPIFFYCAL', 'dd/MM/yyyy');  //Use only 'dd', 'MM' and 'yyyy' here in any order
define('ADMIN_NAV_DATE_TIME_FORMAT', '%A %d %b %Y %X'); // this is used for strftime()
////
// Return date in raw format
// $date should be in format dd/mm/yyyy
// raw date is in format YYYYMMDD, or DDMMYYYY
function zen_date_raw($date, $reverse = false) {
  if ($reverse) {
    return substr($date, 0, 2) . substr($date, 3, 2) . substr($date, 6, 4);
  } else {
    return substr($date, 6, 4) . substr($date, 3, 2) . substr($date, 0, 2);
  }
}

// removed for meta tags
// page title
//define('TITLE', 'Zen Cart');

// include template specific meta tags defines
  if (file_exists(DIR_FS_CATALOG_LANGUAGES . $_SESSION['language'] . '/' . $template_dir . '/meta_tags.php')) {
    $template_dir_select = $template_dir . '/';
  } else {
    $template_dir_select = '';
  }
  require(DIR_FS_CATALOG_LANGUAGES . $_SESSION['language'] . '/' . $template_dir_select . 'meta_tags.php');

// meta tags
define('ICON_METATAGS_ON', 'Мета тагове са зададени');
define('ICON_METATAGS_OFF', 'Мета тагове незададени');
define('TEXT_LEGEND_META_TAGS', 'Зададени мета тагове:');
define('TEXT_INFO_META_TAGS_USAGE', '<strong>Забележка:</strong> The Site/Tagline is your defined definition for your site in the meta_tags.php file.');

// Global entries for the <html> tag
define('HTML_PARAMS','dir="ltr" lang="bg"');

// charset for web pages and emails
define('CHARSET', 'utf-8');

// header text in includes/header.php
define('HEADER_TITLE_TOP', 'Админ начало');
define('HEADER_TITLE_SUPPORT_SITE', 'Подкрепи');
define('HEADER_TITLE_ONLINE_CATALOG', 'Магазин');
define('HEADER_TITLE_VERSION', 'Версия');
define('HEADER_TITLE_ACCOUNT', 'Профил');
define('HEADER_TITLE_LOGOFF', 'Изход');
//define('HEADER_TITLE_ADMINISTRATION', 'Administration');

// Define the name of your Gift Certificate as Gift Voucher, Gift Certificate, Zen Cart Dollars, etc. here for use through out the shop
  define('TEXT_GV_NAME','Подаръчен ваучер');
  define('TEXT_GV_NAMES','Подаръчни ваучери');
  define('TEXT_DISCOUNT_COUPON', 'Купон за отстъпка');

// used for redeem code, redemption code, or redemption id
  define('TEXT_GV_REDEEM','Код за осребряване');

// text for gender
define('MALE', 'Мъж');
define('FEMALE', 'Жена');

define('TEXT_CHECK_ALL', 'Маркирай всички');
define('TEXT_UNCHECK_ALL', 'Размаркирай всички');
define('NONE', 'Нищо');

define('TEXT_UNKNOWN', 'Неизвестен');

// configuration box text
define('BOX_HEADING_CONFIGURATION', 'Конфигурация');
define('BOX_CONFIGURATION_MY_STORE', 'Моят магазин');
define('BOX_CONFIGURATION_MINIMUM_VALUES', 'Минимални стойности');
define('BOX_CONFIGURATION_MAXIMUM_VALUES', 'Максимални стойности');
define('BOX_CONFIGURATION_IMAGES', 'Снимки');
define('BOX_CONFIGURATION_CUSTOMER_DETAILS', 'Подробности за потребителя');
define('BOX_CONFIGURATION_SHIPPING_PACKAGING', 'Доставка/Пакетиране');
define('BOX_CONFIGURATION_PRODUCT_LISTING', 'Списък продукти');
define('BOX_CONFIGURATION_STOCK', 'Наличности');
define('BOX_CONFIGURATION_LOGGING', 'Логове');
define('BOX_CONFIGURATION_EMAIL_OPTIONS', 'Имейл настройки');
define('BOX_CONFIGURATION_ATTRIBUTE_OPTIONS', 'Настройки на атрибути');
define('BOX_CONFIGURATION_GZIP_COMPRESSION', 'GZip компресия');
define('BOX_CONFIGURATION_SESSIONS', 'Сесии');
define('BOX_CONFIGURATION_REGULATIONS', 'Регулации');
define('BOX_CONFIGURATION_GV_COUPONS', 'ПВ купони');
define('BOX_CONFIGURATION_CREDIT_CARDS', 'Банкови карти');
define('BOX_CONFIGURATION_PRODUCT_INFO', 'Инфо за продуктите');
define('BOX_CONFIGURATION_LAYOUT_SETTINGS', 'Настройки на оформлението');
define('BOX_CONFIGURATION_WEBSITE_MAINTENANCE', 'Поддръжка на сайта');
define('BOX_CONFIGURATION_NEW_LISTING', 'Списък нови');
define('BOX_CONFIGURATION_FEATURED_LISTING', 'Списък на фокус');
define('BOX_CONFIGURATION_ALL_LISTING', 'Списък всички');
define('BOX_CONFIGURATION_INDEX_LISTING', 'Начален списък');
define('BOX_CONFIGURATION_DEFINE_PAGE_STATUS', 'Статус на дефинирани страници');
define('BOX_CONFIGURATION_EZPAGES_SETTINGS', 'Настройки EZ-страници');

// modules box text
define('BOX_HEADING_MODULES', 'Модули');
define('BOX_MODULES_PAYMENT', 'Плащане');
define('BOX_MODULES_SHIPPING', 'Доставка');
define('BOX_MODULES_ORDER_TOTAL', 'Стойност поръчка');
define('BOX_MODULES_PRODUCT_TYPES', 'Типове продукти');

// categories box text
define('BOX_HEADING_CATALOG', 'Каталог');
define('BOX_CATALOG_CATEGORIES_PRODUCTS', 'Категории/Продукти');
define('BOX_CATALOG_PRODUCT_TYPES', 'Типове продукти');
define('BOX_CATALOG_CATEGORIES_OPTIONS_NAME_MANAGER', 'Мениджър имената на опциите');
define('BOX_CATALOG_CATEGORIES_OPTIONS_VALUES_MANAGER', 'Мениджър стойности на опциите');
define('BOX_CATALOG_MANUFACTURERS', 'Производители');
define('BOX_CATALOG_REVIEWS', 'Отзиви');
define('BOX_CATALOG_SPECIALS', 'Промоции');
define('BOX_CATALOG_PRODUCTS_EXPECTED', 'Очаквани продукти');
define('BOX_CATALOG_SALEMAKER', 'Разпродажби');
define('BOX_CATALOG_PRODUCTS_PRICE_MANAGER', 'Мениджър цени на продуктите');
define('BOX_CATALOG_PRODUCT', 'Продукт');
define('BOX_CATALOG_PRODUCTS_TO_CATEGORIES', 'Продукти за Категория');

// customers box text
define('BOX_HEADING_CUSTOMERS', 'Клиенти');
define('BOX_CUSTOMERS_CUSTOMERS', 'Клиенти');
define('BOX_CUSTOMERS_ORDERS', 'Поръчки');
define('BOX_CUSTOMERS_GROUP_PRICING', 'Групово ценообразуване');
define('BOX_CUSTOMERS_PAYPAL', 'PayPal IPN');
define('BOX_CUSTOMERS_INVOICE', 'Фактура');
define('BOX_CUSTOMERS_PACKING_SLIP', 'Стокова разписка');

// taxes box text
define('BOX_HEADING_LOCATION_AND_TAXES', 'Локации / Такси');
define('BOX_TAXES_COUNTRIES', 'Държави');
define('BOX_TAXES_ZONES', 'Зони');
define('BOX_TAXES_GEO_ZONES', 'Дефиниции Зони');
define('BOX_TAXES_TAX_CLASSES', 'Класове такси');
define('BOX_TAXES_TAX_RATES', 'Размери на таксите');

// reports box text
define('BOX_HEADING_REPORTS', 'Доклади');
define('BOX_REPORTS_PRODUCTS_VIEWED', 'Разгледани продукти');
define('BOX_REPORTS_PRODUCTS_PURCHASED', 'Закупени продукти');
define('BOX_REPORTS_ORDERS_TOTAL', 'Общо поръчки');
define('BOX_REPORTS_PRODUCTS_LOWSTOCK', 'Продукти на изчерпване');
define('BOX_REPORTS_CUSTOMERS_REFERRALS', 'Справка клиенти');

// tools text
define('BOX_HEADING_TOOLS', 'Инструменти');
define('BOX_TOOLS_TEMPLATE_SELECT', 'Избор шаблон');
define('BOX_TOOLS_BACKUP', 'Резервно копие на Базата данни');
define('BOX_TOOLS_BANNER_MANAGER', 'Мениджър банери');
define('BOX_TOOLS_CACHE', 'Кеш контрол');
define('BOX_TOOLS_DEFINE_LANGUAGE', 'Определяне на езици');
define('BOX_TOOLS_FILE_MANAGER', 'Файлов мениджър');
define('BOX_TOOLS_MAIL', 'Изпрати имейл');
define('BOX_TOOLS_NEWSLETTER_MANAGER', 'Мениджър Новини и Съобщения за продукти');
define('BOX_TOOLS_SERVER_INFO', 'Сървър/Версия');
define('BOX_TOOLS_WHOS_ONLINE', 'Кой е онлайн');
define('BOX_TOOLS_STORE_MANAGER', 'Управление склад');
define('BOX_TOOLS_DEVELOPERS_TOOL_KIT', 'Инструменти за разработчици');
define('BOX_TOOLS_SQLPATCH','Инсталиране SQL пачове');
define('BOX_TOOLS_EZPAGES','EZ-страници');

define('BOX_HEADING_EXTRAS', 'Допълнителни');

// define pages editor files
define('BOX_TOOLS_DEFINE_PAGES_EDITOR','Редактор дефинирани страници');
define('BOX_TOOLS_DEFINE_MAIN_PAGE', 'Главна страница');
define('BOX_TOOLS_DEFINE_CONTACT_US','Контакти');
define('BOX_TOOLS_DEFINE_PRIVACY','Поверителност');
define('BOX_TOOLS_DEFINE_SHIPPINGINFO','Доставка и Рекламации');
define('BOX_TOOLS_DEFINE_CONDITIONS','Общи условия');
define('BOX_TOOLS_DEFINE_CHECKOUT_SUCCESS','Извършена покупка');
define('BOX_TOOLS_DEFINE_PAGE_2','Страница 2');
define('BOX_TOOLS_DEFINE_PAGE_3','Страница 3');
define('BOX_TOOLS_DEFINE_PAGE_4','Страница 4');

// localization box text
define('BOX_HEADING_LOCALIZATION', 'Локализация');
define('BOX_LOCALIZATION_CURRENCIES', 'Валути');
define('BOX_LOCALIZATION_LANGUAGES', 'Езици');
define('BOX_LOCALIZATION_ORDERS_STATUS', 'Статус поръчки');

// gift vouchers box text
define('BOX_HEADING_GV_ADMIN', 'Отстъпки');
define('BOX_GV_ADMIN_QUEUE',  TEXT_GV_NAMES . ' опашка');
define('BOX_GV_ADMIN_MAIL', 'Мейл ' . TEXT_GV_NAME);
define('BOX_GV_ADMIN_SENT', TEXT_GV_NAMES . ' изпратени');
define('BOX_COUPON_ADMIN','Админ купони');
define('BOX_COUPON_RESTRICT','Ограничения за купони');

// admin access box text
define('BOX_HEADING_ADMIN_ACCESS', 'Администратори');
define('BOX_ADMIN_ACCESS_USERS',  'Админ потребители');
define('BOX_ADMIN_ACCESS_PROFILES', 'Админ профили');
define('BOX_ADMIN_ACCESS_PAGE_REGISTRATION', 'Регистрация на Админ страница');
define('BOX_ADMIN_ACCESS_LOGS', 'Админ записи на дейностите');

define('IMAGE_RELEASE', 'Осребряване ' . TEXT_GV_NAME);

// javascript messages
define('JS_ERROR', 'Възникна грешка, докато обработвахме формата!\nМоля, направете следните промени:\n\n');

define('JS_OPTIONS_VALUE_PRICE', '* Новият атрибут на продукт трябва да има стойност за цена\n');
define('JS_OPTIONS_VALUE_PRICE_PREFIX', '* Новият атрибут на продукт трябва да има префикс (представка)\n');

define('JS_PRODUCTS_NAME', '* Новият продукт трябва да има име\n');
define('JS_PRODUCTS_DESCRIPTION', '* Новият продукт трябва да има описание\n');
define('JS_PRODUCTS_PRICE', '* Новият продукт трябва да има величина за цена\n');
define('JS_PRODUCTS_WEIGHT', '* Новият продукт трябва да има величина за тегло\n');
define('JS_PRODUCTS_QUANTITY', '* Новият продукт трябва да има величина за количество\n');
define('JS_PRODUCTS_MODEL', '* Новият продукт трябва да има величина за модел\n');
define('JS_PRODUCTS_IMAGE', '* Новият продукт трябва да има величина за снимка\n');

define('JS_SPECIALS_PRODUCTS_PRICE', '* Трябва да се зададе нова цена за този продукт\n');

define('JS_GENDER', '* Трябва да изберете величина за \'Пол\' .\n');
define('JS_FIRST_NAME', '* \'Първо име\' трябва да съдържа поне ' . ENTRY_FIRST_NAME_MIN_LENGTH . ' символа.\n');
define('JS_LAST_NAME', '* \'Фамилно име\' трябва да съдържа поне ' . ENTRY_LAST_NAME_MIN_LENGTH . ' символа.\n');
define('JS_DOB', '* \'Дата на раждане\' трябва да е във формат: xx/xx/xxxx (date/month/year).\n');
define('JS_EMAIL_ADDRESS', '* \'И-мейл адрес\' трябва да съдържа поне ' . ENTRY_EMAIL_ADDRESS_MIN_LENGTH . ' символа.\n');
define('JS_ADDRESS', '* \'Адрес\' трябва да съдържа поне ' . ENTRY_STREET_ADDRESS_MIN_LENGTH . ' символа.\n');
define('JS_POST_CODE', '* \'Пощенски код\' трябва да съдържа поне ' . ENTRY_POSTCODE_MIN_LENGTH . ' символа.\n');
define('JS_CITY', '* \'Град\' трябва да съдържа поне ' . ENTRY_CITY_MIN_LENGTH . ' символа.\n');
define('JS_STATE', '* Трябва да изберете \'Област\' .\n');
define('JS_STATE_SELECT', '-- Избери по-горе --');
define('JS_ZONE', '* Трябва да изберете \'Област\' от списъка за тази държава.');
define('JS_COUNTRY', '* Трябва да изберете \'Държава\'.\n');
define('JS_TELEPHONE', '* \'Телефонен номер\' трябва да съдържа поне ' . ENTRY_TELEPHONE_MIN_LENGTH . ' символа.\n');

define('JS_ORDER_DOES_NOT_EXIST', 'Поръчка номер %s не съществува!');
define('TEXT_NO_ORDER_HISTORY', 'Няма налична История на поръчките');

define('CATEGORY_PERSONAL', 'Лични');
define('CATEGORY_ADDRESS', 'Адрес');
define('CATEGORY_CONTACT', 'Контакти');
define('CATEGORY_COMPANY', 'Фирма');
define('CATEGORY_OPTIONS', 'Допълнителни');

define('ENTRY_GENDER', 'Пол:');
define('ENTRY_GENDER_ERROR', '&nbsp;<span class="errorText">required</span>');
define('ENTRY_FIRST_NAME', 'Първо име:');
define('ENTRY_FIRST_NAME_ERROR', '&nbsp;<span class="errorText">min ' . ENTRY_FIRST_NAME_MIN_LENGTH . ' chars</span>');
define('ENTRY_LAST_NAME', 'Фамилно име:');
define('ENTRY_LAST_NAME_ERROR', '&nbsp;<span class="errorText">min ' . ENTRY_LAST_NAME_MIN_LENGTH . ' chars</span>');
define('ENTRY_DATE_OF_BIRTH', 'Дата на раждане:');
define('ENTRY_DATE_OF_BIRTH_ERROR', '&nbsp;<span class="errorText">(eg. 21/05/1970)</span>');
define('ENTRY_EMAIL_ADDRESS', 'И-мейл адрес:');
define('ENTRY_EMAIL_ADDRESS_ERROR', '&nbsp;<span class="errorText">min ' . ENTRY_EMAIL_ADDRESS_MIN_LENGTH . ' chars</span>');
define('ENTRY_EMAIL_ADDRESS_CHECK_ERROR', '&nbsp;<span class="errorText">Изглежда, че и-мейл адресът е невалиден!</span>');
define('ENTRY_EMAIL_ADDRESS_ERROR_EXISTS', '&nbsp;<span class="errorText">Такъв и-мейл вече съществува!</span>');
define('ENTRY_COMPANY', 'Име на фирма:');
define('ENTRY_COMPANY_ERROR', '');
define('ENTRY_PRICING_GROUP', 'Група за отстъпки');
define('ENTRY_STREET_ADDRESS', 'Адрес:');
define('ENTRY_STREET_ADDRESS_ERROR', '&nbsp;<span class="errorText">min ' . ENTRY_STREET_ADDRESS_MIN_LENGTH . ' chars</span>');
define('ENTRY_SUBURB', 'Допълнение:');
define('ENTRY_SUBURB_ERROR', '');
define('ENTRY_POST_CODE', 'Пощенски код:');
define('ENTRY_POST_CODE_ERROR', '&nbsp;<span class="errorText">min ' . ENTRY_POSTCODE_MIN_LENGTH . ' chars</span>');
define('ENTRY_CITY', 'Град:');
define('ENTRY_CITY_ERROR', '&nbsp;<span class="errorText">min ' . ENTRY_CITY_MIN_LENGTH . ' chars</span>');
define('ENTRY_STATE', 'Област:');
define('ENTRY_STATE_ERROR', '&nbsp;<span class="errorText">required</span>');
define('ENTRY_COUNTRY', 'Държава:');
define('ENTRY_COUNTRY_ERROR', '');
define('ENTRY_TELEPHONE_NUMBER', 'Телефонен номер:');
define('ENTRY_TELEPHONE_NUMBER_ERROR', '&nbsp;<span class="errorText">min ' . ENTRY_TELEPHONE_MIN_LENGTH . ' chars</span>');
define('ENTRY_FAX_NUMBER', 'Факс:');
define('ENTRY_FAX_NUMBER_ERROR', '');
define('ENTRY_NEWSLETTER', 'Новини:');
define('ENTRY_NEWSLETTER_YES', 'Записан');
define('ENTRY_NEWSLETTER_NO', 'Отписан');
define('ENTRY_NEWSLETTER_ERROR', '');

define('ERROR_PASSWORDS_NOT_MATCHING', 'Паролата и потвърждението трябва да съвпадат');
define('ENTRY_PASSWORD_CHANGE_ERROR', '<strong>Извинете, но паролата Ви бе отхвърлена.</strong><br />');
define('ERROR_PASSWORD_RULES', 'Паролата трябва да съдържа букви и цифри, да е дълга поне %s символа и не трябва да е като някоя от последно използваните 4 пароли. Паролата изтича на всеки 90 дни, след което ще бъдете помолени да въведете нова парола.');
define('ERROR_TOKEN_EXPIRED_PLEASE_RESUBMIT', 'Грешка: Извинете, възникна проблем, докато обработвахме Вашите данни. Моля, въведете информацията отново.');

// images
//define('IMAGE_ANI_SEND_EMAIL', 'Sending E-Mail');
define('IMAGE_BACK', 'Назад');
define('IMAGE_BACKUP', 'Резервно копие');
define('IMAGE_CANCEL', 'Отмени');
define('IMAGE_CONFIRM', 'Птвърди');
define('IMAGE_COPY', 'Копирай');
define('IMAGE_COPY_TO', 'Копирай в');
define('IMAGE_DETAILS', 'Детайли');
define('IMAGE_DELETE', 'Изтрий');
define('IMAGE_EDIT', 'Редактирай');
define('IMAGE_EMAIL', 'И-мейл');
define('IMAGE_GO', 'Давай');
define('IMAGE_FILE_MANAGER', 'Файлов мениджър');
define('IMAGE_ICON_STATUS_GREEN', 'Активен');
define('IMAGE_ICON_STATUS_GREEN_LIGHT', 'Активирай');
define('IMAGE_ICON_STATUS_RED', 'Неактивен');
define('IMAGE_ICON_STATUS_RED_LIGHT', 'Деактивирай');
define('IMAGE_ICON_STATUS_RED_EZPAGES', 'Грешка -- въведено епрекалено много URL/типове съдържание');
define('IMAGE_ICON_STATUS_RED_ERROR', 'Грешка');
define('IMAGE_ICON_INFO', 'Инфо');
define('IMAGE_INSERT', 'Добави');
define('IMAGE_LOCK', 'Заключи');
define('IMAGE_MODULE_INSTALL', 'Инсталирай модула');
define('IMAGE_MODULE_REMOVE', 'Премахни модула');
define('IMAGE_MOVE', 'Премести');
define('IMAGE_NEW_BANNER', 'Нов банер');
define('IMAGE_NEW_CATEGORY', 'Нова категория');
define('IMAGE_NEW_COUNTRY', 'Нова държава');
define('IMAGE_NEW_CURRENCY', 'Нова валута');
define('IMAGE_NEW_FILE', 'Нов файл');
define('IMAGE_NEW_FOLDER', 'Нова директория');
define('IMAGE_NEW_LANGUAGE', 'Нов език');
define('IMAGE_NEW_NEWSLETTER', 'Нова новина');
define('IMAGE_NEW_PRODUCT', 'Нов продукт');
define('IMAGE_NEW_SALE', 'Нова разпродажба');
define('IMAGE_NEW_TAX_CLASS', 'Нов клас такси');
define('IMAGE_NEW_TAX_RATE', 'Нова тарифа за такси');
define('IMAGE_NEW_TAX_ZONE', 'Нова зона за такси');
define('IMAGE_NEW_ZONE', 'Нова зона');
define('IMAGE_OPTION_NAMES', 'Мениджър имената на опциите');
define('IMAGE_OPTION_VALUES', 'Мениджър стойностите на опциите');
define('IMAGE_ORDERS', 'Поръчки');
define('IMAGE_ORDERS_INVOICE', 'Фактури');
define('IMAGE_ORDERS_PACKINGSLIP', 'Стокова разписка');
define('IMAGE_PERMISSIONS', 'Промени достъпа');
define('IMAGE_PREVIEW', 'Преглед');
define('IMAGE_RESTORE', 'Възстанови');
define('IMAGE_RESET', 'Промени');
define('IMAGE_RESET_PWD', 'Промени парола');
define('IMAGE_SAVE', 'Запази');
define('IMAGE_SEARCH', 'Търси');
define('IMAGE_SELECT', 'Избери');
define('IMAGE_SEND', 'Изпрати');
define('IMAGE_SEND_EMAIL', 'Изпрати и-майл');
define('IMAGE_SUBMIT', 'Предай');
define('IMAGE_UNLOCK', 'Отключи');
define('IMAGE_UPDATE', 'Обнови');
define('IMAGE_UPDATE_CURRENCIES', 'Обнови валутните курсове');
define('IMAGE_UPLOAD', 'Качи');
define('IMAGE_TAX_RATES','Тарифи такси');
define('IMAGE_DEFINE_ZONES','Дефинирани зони');
define('IMAGE_PRODUCTS_PRICE_MANAGER', 'Мениджър цени на продуктите');
define('IMAGE_UPDATE_PRICE_CHANGES', 'Обнови промените в цените');
define('IMAGE_ADD_BLANK_DISCOUNTS','Добави ' . DISCOUNT_QTY_ADD . ' Blank Discount Qty');
define('IMAGE_CHECK_VERSION', 'Провери за нови версии на Zen Cart');
define('IMAGE_PRODUCTS_TO_CATEGORIES', 'Мениджър на свързаните категории');

define('IMAGE_ICON_STATUS_ON', 'Състояние - Включено');
define('IMAGE_ICON_STATUS_OFF', 'Състояние - Изключено');
define('IMAGE_ICON_LINKED', 'Продуктът е свързан');

define('IMAGE_REMOVE_SPECIAL','Премахване инфо за цена на промоциите');
define('IMAGE_REMOVE_FEATURED','Премахни инфо за продукти на фокус');
define('IMAGE_INSTALL_SPECIAL', 'Добави инфо за цена на промоциониите');
define('IMAGE_INSTALL_FEATURED', 'Добави инфо за продукти на фокус');

define('TEXT_VERSION_CHECK_BUTTON', 'Провери за нова версия');
define('TEXT_BUTTON_RESET_ACTIVITY_LOG', 'Виж записи на активността');

define('ICON_PRODUCTS_PRICE_MANAGER','Мениджър цени на продуктите');
define('ICON_COPY_TO', 'Копирай в');
define('ICON_CROSS', 'Неактивно');
define('ICON_CURRENT_FOLDER', 'Текуща директория');
define('ICON_DELETE', 'Изтрий');
define('ICON_EDIT', 'Редактирай');
define('ICON_ERROR', 'Грешка');
define('ICON_FILE', 'Файл');
define('ICON_FILE_DOWNLOAD', 'Даунлоуд');
define('ICON_FOLDER', 'Директория');
//define('ICON_LOCKED', 'Locked');
define('ICON_MOVE', 'Премести');
define('ICON_PERMISSIONS', 'Разрешения');
define('ICON_PREVIOUS_LEVEL', 'Предишно ниво');
define('ICON_PREVIEW', 'Преглед');
define('ICON_RESET', 'Промени');
define('ICON_STATISTICS', 'Статистики');
define('ICON_SUCCESS', 'Успешно');
define('ICON_TICK', 'Активно');
//define('ICON_UNLOCKED', 'Unlocked');
define('ICON_WARNING', 'Внимание');

// constants for use in zen_prev_next_display function
define('TEXT_RESULT_PAGE', 'Страница %s от %d');
define('TEXT_DISPLAY_NUMBER_OF_ADMINS', 'Показва <b>%d</b> до <b>%d</b> (от <b>%d</b> админи)');
define('TEXT_DISPLAY_NUMBER_OF_BANNERS', 'Показва <b>%d</b> до <b>%d</b> (от <b>%d</b> банера)');
define('TEXT_DISPLAY_NUMBER_OF_CATEGORIES', 'Показва <b>%d</b> до <b>%d</b> (от <b>%d</b> категории)');
define('TEXT_DISPLAY_NUMBER_OF_COUNTRIES', 'Показва <b>%d</b> до <b>%d</b> (от <b>%d</b> държави)');
define('TEXT_DISPLAY_NUMBER_OF_CUSTOMERS', 'Показва <b>%d</b> до <b>%d</b> (от <b>%d</b> потребителя)');
define('TEXT_DISPLAY_NUMBER_OF_CURRENCIES', 'Показва <b>%d</b> до <b>%d</b> (от <b>%d</b> валути)');
define('TEXT_DISPLAY_NUMBER_OF_FEATURED', 'Показва <b>%d</b> до <b>%d</b> (от <b>%d</b> продукта на фокус)');
define('TEXT_DISPLAY_NUMBER_OF_LANGUAGES', 'Показва <b>%d</b> до <b>%d</b> (от <b>%d</b> езика)');
define('TEXT_DISPLAY_NUMBER_OF_MANUFACTURERS', 'Показва <b>%d</b> до <b>%d</b> (от <b>%d</b> производителя)');
define('TEXT_DISPLAY_NUMBER_OF_NEWSLETTERS', 'Показва <b>%d</b> до <b>%d</b> (от <b>%d</b> новини)');
define('TEXT_DISPLAY_NUMBER_OF_ORDERS', 'Показва <b>%d</b> до <b>%d</b> (от <b>%d</b> поръчки)');
define('TEXT_DISPLAY_NUMBER_OF_ORDERS_STATUS', 'Показва <b>%d</b> до <b>%d</b> (от <b>%d</b> статуси на поръчки)');
define('TEXT_DISPLAY_NUMBER_OF_PRICING_GROUPS', 'Показва <b>%d</b> до <b>%d</b> (от <b>%d</b> ценови групи)');
define('TEXT_DISPLAY_NUMBER_OF_PRODUCTS', 'Показва <b>%d</b> до <b>%d</b> (от <b>%d</b> продукта)');
define('TEXT_DISPLAY_NUMBER_OF_PRODUCT_TYPES', 'Показва <b>%d</b> до <b>%d</b> (от <b>%d</b> типа продукти)');
define('TEXT_DISPLAY_NUMBER_OF_PRODUCTS_EXPECTED', 'Показва <b>%d</b> до <b>%d</b> (от <b>%d</b> очаквани продукта)');
define('TEXT_DISPLAY_NUMBER_OF_REVIEWS', 'Показва <b>%d</b> до <b>%d</b> (от <b>%d</b> отзиви за продукти)');
define('TEXT_DISPLAY_NUMBER_OF_SALES', 'Показва <b>%d</b> до <b>%d</b> (от <b>%d</b> разпродажби)');
define('TEXT_DISPLAY_NUMBER_OF_SPECIALS', 'Показва <b>%d</b> до <b>%d</b> (от <b>%d</b> промоционални продукта)');
define('TEXT_DISPLAY_NUMBER_OF_TAX_CLASSES', 'Показва <b>%d</b> до <b>%d</b> (от <b>%d</b> класове такси)');
define('TEXT_DISPLAY_NUMBER_OF_TEMPLATES', 'Показва <b>%d</b> до <b>%d</b> (от <b>%d</b> асоциации на шаблони)');
define('TEXT_DISPLAY_NUMBER_OF_TAX_ZONES', 'Показва <b>%d</b> до <b>%d</b> (от <b>%d</b> зони за такси)');
define('TEXT_DISPLAY_NUMBER_OF_TAX_RATES', 'Показва <b>%d</b> до <b>%d</b> (от <b>%d</b> тарифи такси)');
define('TEXT_DISPLAY_NUMBER_OF_ZONES', 'Показва <b>%d</b> до <b>%d</b> (от <b>%d</b> зони)');

define('PREVNEXT_BUTTON_PREV', '&lt;&lt;');
define('PREVNEXT_BUTTON_NEXT', '&gt;&gt;');


define('TEXT_DEFAULT', 'По подразбиране');
define('TEXT_SET_DEFAULT', 'Задай по подразбиране');
define('TEXT_FIELD_REQUIRED', '&nbsp;<span class="fieldRequired">* Изисква</span>');

define('ERROR_NO_DEFAULT_CURRENCY_DEFINED', 'Грешка: Няма зададена валута по подразбиране. Моля, задайте една от: Адмнистративни Инструменти->Локализации->Валути');

define('TEXT_NONE', '--нищо--');
define('TEXT_TOP', 'Начало');
define('PLEASE_SELECT', 'Моля, изберете ...');

define('ERROR_DESTINATION_DOES_NOT_EXIST', 'Грешка: Дестинацията не съществува %s');
define('ERROR_DESTINATION_NOT_WRITEABLE', 'Грешка: В дестинацията не може да се записва %s');
define('ERROR_FILE_NOT_SAVED', 'Грешка: Файлът не е записан.');
define('ERROR_FILETYPE_NOT_ALLOWED', 'Грешка: Не е разрешен записът на такъв вид файл  %s');
define('SUCCESS_FILE_SAVED_SUCCESSFULLY', 'Успешно: Файлът е качен и записан успешно %s');
define('WARNING_NO_FILE_UPLOADED', 'Внимание: Не е качен файл.');
define('WARNING_FILE_UPLOADS_DISABLED', 'Внимание: Забранено е качването на файлове в php.ini конфигурационния файл.');
define('ERROR_ADMIN_SECURITY_WARNING', 'Внимание: Вашият администраторси вход е незащитен... възможно е все още да използвате настройките по подразбиране за: Admin admin или не сте премахнали или променили: demo demoonly<br />Входът трябва да бъде сменен възможно най-скоро, за да бъде по защитен Вашият магазин.');
define('WARNING_DATABASE_VERSION_OUT_OF_DATE','Изглежда, че базата данни има нужда от пачване до по-високо ниво. Вижте Инструменти->Сървърна информация за да видите нивото за пачване.');
define('WARN_DATABASE_VERSION_PROBLEM','true'); //set to false to turn off warnings about database version mismatches
define('WARNING_ADMIN_DOWN_FOR_MAINTENANCE', '<strong>Внимание:</strong> Сайтът е в Режим на профилактика...<br />Забележка: Не може да тествате модулите за Плащане и Доставка, докато сайтът е в Режим на профилактика');
define('WARNING_BACKUP_CFG_FILES_TO_DELETE', 'Внимание: Следните файлове трябва да бъдат изтрити, от съображения за сигурност: ');
define('WARNING_INSTALL_DIRECTORY_EXISTS', 'Съобщение за сигурност: Инсталационната директория се намира в: %s. Моля, премахнете тази директория, от съображения за сигурност.');
define('WARNING_CONFIG_FILE_WRITEABLE', 'Внимание: Конфигурационният Ви файл: %s може да бъде редактиран. Това крие потенциална опасност за сигурността на сайта. Моля, променете правата за достъп за този файл (read-only, CHMOD 644 или 444 са типичен пример). Може да се наложи да използвате файловият мениджър в уебхостинг панела Ви, за да направите необходимите промени ефикасно. Cвържете се с хостинг администраторите си. <a href="http://tutorials.zen-cart.com/index.php?article=90" target="_blank">Вижте и тези съвети</a>');
define('WARNING_COULD_NOT_LOCATE_LANG_FILE', 'Внимание: Не са намерени еикови файлове: ');
define('ERROR_MODULE_REMOVAL_PROHIBITED', 'Грешка: Премахването на модулът е възпрепятствано: ');
define('WARNING_REVIEW_ROGUE_ACTIVITY', 'ВНИМАНИЕ: Моля проверете за вероятни XSS хакове:');

define('ERROR_FILE_NOT_REMOVEABLE', 'Грешка: Не може да премахнете определения файл. Може да се наложи да използвате FTP за да премахнете този файл, защото са налични сървърни ограничения в правата за достъп.');
define('WARNING_SESSION_AUTO_START', 'Предупреждение: session.auto_start е активиран - моля, изключете това PHP свойство в php.ini (може да е належащо рестартиране на уебсървъра, за да влязат в сила промените).');
define('WARNING_DOWNLOAD_DIRECTORY_NON_EXISTENT', 'Предупреждение: Не съществува директория за съдържание за Даунлоуд: ' . DIR_FS_DOWNLOAD . '. Продукти за Даунлоуд няма да функционират, докат тази директория не бъде налична.');
define('WARNING_SQL_CACHE_DIRECTORY_NON_EXISTENT', 'Предупреждение: SQL кеш директорията не съществува: ' . DIR_FS_SQL_CACHE . '. SQL кеширането няма да работи, докато директорията на бъде създадена.');
define('WARNING_SQL_CACHE_DIRECTORY_NOT_WRITEABLE', 'Предупреждение: Не може да се записва в SQL кеш директорията: ' . DIR_FS_SQL_CACHE . '. SQL кеширането няма да е възможно, докато не бъдат подходящо променени правата за достъп.');

define('_JANUARY', 'Януари');
define('_FEBRUARY', 'Февруари');
define('_MARCH', 'Март');
define('_APRIL', 'Април');
define('_MAY', 'Май');
define('_JUNE', 'Юни');
define('_JULY', 'Юли');
define('_AUGUST', 'Август');
define('_SEPTEMBER', 'Септември');
define('_OCTOBER', 'Октомври');
define('_NOVEMBER', 'Ноември');
define('_DECEMBER', 'Декември');

define('TEXT_DISPLAY_NUMBER_OF_GIFT_VOUCHERS', 'Показва <b>%d</b> до <b>%d</b> (от <b>%d</b> подаръчни ваучера)');
define('TEXT_DISPLAY_NUMBER_OF_COUPONS', 'Показва <b>%d</b> до <b>%d</b> (от <b>%d</b> купони)');

define('TEXT_VALID_PRODUCTS_LIST', 'Списък продукти');
define('TEXT_VALID_PRODUCTS_ID', 'Продуктово ID');
define('TEXT_VALID_PRODUCTS_NAME', 'Име на продукт');
define('TEXT_VALID_PRODUCTS_MODEL', 'Модел на продукт');

define('TEXT_VALID_CATEGORIES_LIST', 'Списък категории');
define('TEXT_VALID_CATEGORIES_ID', 'Категорийно ID');
define('TEXT_VALID_CATEGORIES_NAME', 'Име категория');

define('DEFINE_LANGUAGE','Избери език:');

define('BOX_ENTRY_COUNTER_DATE','Брояч на псещения започна на:');
define('BOX_ENTRY_COUNTER','Брояч на посещения:');

// not installed
define('NOT_INSTALLED_TEXT','Не е инсталиран');

// Product Options Values Sort Order - option_values.php
  define('BOX_CATALOG_PRODUCT_OPTIONS_VALUES','Сортиране Стойности на опциите');

  define('TEXT_UPDATE_SORT_ORDERS_OPTIONS','<strong>Обновете соритрането на атрибутите от Стойности на опциите по подразбиране</strong> ');
  define('TEXT_INFO_ATTRIBUTES_FEATURES_UPDATES','<strong>Обновете Сортирането на Атрибутите за всички продукти</strong><br />за да съответства на Сортирането по подразбиране за Стойности на опциите:<br />');

// Product Options Name Sort Order - option_values.php
  define('BOX_CATALOG_PRODUCT_OPTIONS_NAME','Сортиране Имената на опциите');

// Attributes only
  define('BOX_CATALOG_CATEGORIES_ATTRIBUTES_CONTROLLER','Контролер на атрибутите');

// generic model
  define('TEXT_MODEL','Модел:');

// column controller
  define('BOX_TOOLS_LAYOUT_CONTROLLER','Контролер за Изгледа на кутиите');

// check GV release queue and alert store owner
  define('SHOW_GV_QUEUE',true);
  define('TEXT_SHOW_GV_QUEUE','%s чака одобрение ');
  define('IMAGE_GIFT_QUEUE', TEXT_GV_NAME . ' Опашка');
  define('IMAGE_ORDER','Поръчка');

  define('IMAGE_DISPLAY','Покажи');
  define('IMAGE_UPDATE_SORT','Обнови сортирането');
  define('IMAGE_EDIT_PRODUCT','Редактирай продукта');
  define('IMAGE_EDIT_ATTRIBUTES','Редактирай атрибутите');
  define('TEXT_NEW_PRODUCT', 'Продукти в категорията: %s');
  define('IMAGE_OPTIONS_VALUES','Имена и Стойности на опциите');
  define('TEXT_PRODUCTS_PRICE_MANAGER','МЕНИДЖЪР ЦЕНИ НА ПРОДУКТИТЕ');
  define('TEXT_PRODUCT_EDIT','РЕДАКТИРАЙ ПРОДУКТА');
  define('TEXT_ATTRIBUTE_EDIT','РЕДАКТИРАЙ АТРИБУТИТЕ');
  define('TEXT_PRODUCT_DETAILS','ВИЖ ДЕТАЙЛИ');

// sale maker
  define('DEDUCTION_TYPE_DROPDOWN_0', 'Приспадни стойност');
  define('DEDUCTION_TYPE_DROPDOWN_1', 'Проценти');
  define('DEDUCTION_TYPE_DROPDOWN_2', 'Нова цена');

// Min and Units
  define('PRODUCTS_QUANTITY_MIN_TEXT_LISTING','Мин:');
  define('PRODUCTS_QUANTITY_UNIT_TEXT_LISTING','Единици:');
  define('PRODUCTS_QUANTITY_IN_CART_LISTING','В количката:');
  define('PRODUCTS_QUANTITY_ADD_ADDITIONAL_LISTING','Добави Допълнителен:');

  define('TEXT_PRODUCTS_MIX_OFF','*Не Смесени Опции');
  define('TEXT_PRODUCTS_MIX_ON','*Да Смесени Опции');

// search filters
  define('TEXT_INFO_SEARCH_DETAIL_FILTER','Филтър за търсене: ');
  define('HEADING_TITLE_SEARCH_DETAIL','Търси: ');
  define('HEADING_TITLE_SEARCH_DETAIL_REPORTS', 'Търси по Продуктови ID-та (разграничени със запетая)');
  define('HEADING_TITLE_SEARCH_DETAIL_REPORTS_NAME_MODEL', 'Търси по продуктово Име/Модел');

  define('PREV_NEXT_PRODUCT', 'Продукти: ');
  define('TEXT_CATEGORIES_STATUS_INFO_OFF', '<span class="alert">*Категорията е изключена</span>');
  define('TEXT_PRODUCTS_STATUS_INFO_OFF', '<span class="alert">*Продуктът е изключен</span>');

// admin demo
  define('ADMIN_DEMO_ACTIVE','В момента е активно Админ Демо. Някои настройки ще бъдат изключени');
  define('ADMIN_DEMO_ACTIVE_EXCLUSION','В момента е активно Админ Демо. Някои настройки ще бъдат изключени - <strong>Забележка: Презаписването на Админ е включено</strong>');
  define('ERROR_ADMIN_DEMO','Активирано е Админ Демо ... свойствата, които се опитвате да използвате са неактивирани');

// Version Check notices
  define('TEXT_VERSION_CHECK_NEW_VER','<span class="alertVersionNew">New Version Available:</span> v');
  define('TEXT_VERSION_CHECK_NEW_PATCH','<span class="alertVersionNew">New PATCH Available:</span> v');
  define('TEXT_VERSION_CHECK_PATCH','patch');
  define('TEXT_VERSION_CHECK_DOWNLOAD','Download Here');
  define('TEXT_VERSION_CHECK_CURRENT','Your version of Zen Cart&reg; appears to be current.');

// downloads manager
define('TEXT_DISPLAY_NUMBER_OF_PRODUCTS_DOWNLOADS_MANAGER', 'Displaying <b>%d</b> to <b>%d</b> (of <b>%d</b> downloads)');
define('BOX_CATALOG_CATEGORIES_ATTRIBUTES_DOWNLOADS_MANAGER', 'Downloads Manager');

define('BOX_CATALOG_FEATURED','Featured Products');

define('ERROR_NOTHING_SELECTED', 'Nothing was selected ... No changes have been made');
define('TEXT_STATUS_WARNING','<strong>NOTE:</strong> status is auto enabled/disabled when dates are set');

define('TEXT_LEGEND_LINKED', 'Linked Product');
define('TEXT_MASTER_CATEGORIES_ID','Product Master Category:');
define('TEXT_LEGEND', 'LEGEND: ');
define('TEXT_LEGEND_STATUS_OFF', 'Status OFF ');
define('TEXT_LEGEND_STATUS_ON', 'Status ON ');

define('TEXT_INFO_MASTER_CATEGORIES_ID', '<strong>NOTE: Master Category is used for pricing purposes where the<br />product category affects the pricing on linked products, example: Sales</strong>');
define('TEXT_YES', 'Yes');
define('TEXT_NO', 'No');
define('TEXT_CANCEL', 'Cancel');

// shipping error messages
define('ERROR_SHIPPING_CONFIGURATION', '<strong>Shipping Configuration errors!</strong>');
define('ERROR_SHIPPING_ORIGIN_ZIP', '<strong>Warning:</strong> Store Zip Code is not defined. See Configuration | Shipping/Packaging to set it.');
define('ERROR_ORDER_WEIGHT_ZERO_STATUS', '<strong>Warning:</strong> 0 weight is configured for Free Shipping and Free Shipping Module is not enabled');
define('ERROR_USPS_STATUS', '<strong>Warning:</strong> USPS shipping module is either missing the username, or it is set to TEST rather than PRODUCTION and will not work.<br />If you cannot retrieve USPS Shipping Quotes, contact USPS to activate your Web Tools account on their production server. 1-800-344-7779 or icustomercare@usps.com');

define('ERROR_SHIPPING_MODULES_NOT_DEFINED', 'NOTE: You have no shipping modules activated. Please go to Modules->Shipping to configure.');
define('ERROR_PAYMENT_MODULES_NOT_DEFINED', 'NOTE: You have no payment modules activated. Please go to Modules->Payment to configure.');

// text pricing
define('TEXT_CHARGES_WORD','Calculated Charge:');
define('TEXT_PER_WORD','<br />Price per word: ');
define('TEXT_WORDS_FREE',' Word(s) free ');
define('TEXT_CHARGES_LETTERS','Calculated Charge:');
define('TEXT_PER_LETTER','<br />Price per letter: ');
define('TEXT_LETTERS_FREE',' Letter(s) free ');
define('TEXT_ONETIME_CHARGES','*onetime charges = ');
define('TEXT_ONETIME_CHARGES_EMAIL',"\t" . '*onetime charges = ');
define('TEXT_ATTRIBUTES_QTY_PRICES_HELP', 'Option Quantity Discounts');
define('TABLE_ATTRIBUTES_QTY_PRICE_QTY','QTY');
define('TABLE_ATTRIBUTES_QTY_PRICE_PRICE','PRICE');
define('TEXT_ATTRIBUTES_QTY_PRICES_ONETIME_HELP', 'Option Quantity Discounts Onetime Charges');
define('TEXT_CATEGORIES_PRODUCTS', 'Select a Category with Products ... Or move between the Products');
define('TEXT_PRODUCT_TO_VIEW', 'Select a Product to View and Press Display ...');

define('TEXT_INFO_SET_MASTER_CATEGORIES_ID', 'Invalid Master Category ID');
define('TEXT_INFO_ID', ' ID# ');
define('TEXT_INFO_SET_MASTER_CATEGORIES_ID_WARNING', '<strong>WARNING:</strong> This product is linked to multiple categories but no master category has been set!');

define('PRODUCTS_PRICE_IS_CALL_FOR_PRICE_TEXT', 'Product is Call for Price');
define('PRODUCTS_PRICE_IS_FREE_TEXT','Product is Free');

define('TEXT_PRODUCT_WEIGHT_UNIT','lbs');

// min, max, units
define('PRODUCTS_QUANTITY_MAX_TEXT_LISTING', 'Max:');

// Discount Savings
  define('PRODUCT_PRICE_DISCOUNT_PREFIX','Save:&nbsp;');
  define('PRODUCT_PRICE_DISCOUNT_PERCENTAGE','% off');
  define('PRODUCT_PRICE_DISCOUNT_AMOUNT','&nbsp;off');
// Sale Maker Sale Price
  define('PRODUCT_PRICE_SALE','Sale:&nbsp;');

define('TEXT_PRICED_BY_ATTRIBUTES', 'Priced by Attributes');

// Rich Text / HTML resources
define('TEXT_HTML_EDITOR_NOT_DEFINED','If you have no HTML editor defined or JavaScript disabled, you may enter raw HTML text here manually.');
define('TEXT_WARNING_HTML_DISABLED','<span class = "main">Note: You are using TEXT only email. If you would like to send HTML you need to enable "Enable HTML Emails" under Email Options</span>');
define('TEXT_WARNING_CANT_DISPLAY_HTML','<span class = "main">Note: You are using TEXT only email. If you would like to send HTML you need to enable "Enable HTML Emails" under Email Options</span>');
define('TEXT_EMAIL_CLIENT_CANT_DISPLAY_HTML',"You're seeing this text because we sent you an email in HTML format but your email client cannot display HTML messages.");
define('ENTRY_EMAIL_PREFERENCE','Email Format Pref:');
define('ENTRY_EMAIL_FORMAT_COMMENTS','Choosing "none" or "optout" disables ALL mail, including order details');
define('ENTRY_EMAIL_HTML_DISPLAY','HTML');
define('ENTRY_EMAIL_TEXT_DISPLAY','TEXT-Only');
define('ENTRY_EMAIL_NONE_DISPLAY','Never');
define('ENTRY_EMAIL_OPTOUT_DISPLAY','Opted Out of Newsletters');
define('ENTRY_NOTHING_TO_SEND','You haven\'t entered any content for your message');
 define('EMAIL_SEND_FAILED','ERROR: Failed sending email to: "%s" <%s> with subject: "%s"');

  define('EDITOR_NONE', 'Plain Text');
  define('TEXT_EDITOR_INFO', 'Text Editor');
  define('ERROR_EDITORS_FOLDER_NOT_FOUND', 'You have an HTML editor selected in \'My Store\' but the \'/editors/\' folder cannot be located. Please disable your selection or move your editor files into the \''.DIR_WS_CATALOG.'editors/\' folder');
  define('TEXT_CATEGORIES_PRODUCTS_SORT_ORDER_INFO', 'Categories/Product Display Order: ');
  define('TEXT_SORT_PRODUCTS_SORT_ORDER_PRODUCTS_NAME', 'Products Sort Order, Products Name');
  define('TEXT_SORT_PRODUCTS_NAME', 'Products Name');
  define('TEXT_SORT_PRODUCTS_MODEL', 'Products Model');
  define('TEXT_SORT_PRODUCTS_QUANTITY', 'Products Qty+, Products Name');
  define('TEXT_SORT_PRODUCTS_QUANTITY_DESC', 'Products Qty-, Products Name');
  define('TEXT_SORT_PRODUCTS_PRICE', 'Products Price+, Products Name');
  define('TEXT_SORT_PRODUCTS_PRICE_DESC', 'Products Price-, Products Name');
  define('TEXT_SORT_CATEGORIES_SORT_ORDER_PRODUCTS_NAME', 'Categories Sort Order, Categories Name');
  define('TEXT_SORT_CATEGORIES_NAME', 'Categories Name');

  define('TEXT_SELECT_MAIN_DIRECTORY', 'Main Image Directory');

  define('TABLE_HEADING_YES','Yes');
  define('TABLE_HEADING_NO','No');
  define('TEXT_PRODUCTS_IMAGE_MANUAL', '<br /><strong>Or, select an existing image file from server, filename:</strong>');
  define('TEXT_IMAGES_OVERWRITE', '<br /><strong>Overwrite Existing Image on Server?</strong>');
  define('TEXT_IMAGE_OVERWRITE_WARNING','WARNING: FILENAME was updated but not overwritten ');
  define('TEXT_IMAGES_DELETE', '<strong>Delete Image?</strong> NOTE: Removes Image from Product, Image is NOT removed from server:');
  define('TEXT_IMAGE_CURRENT', 'Image Name: ');

  define('ERROR_DEFINE_OPTION_NAMES', 'Warning: No Option Names have been defined');
  define('ERROR_DEFINE_OPTION_VALUES', 'Warning: No Option Values have been defined');
  define('ERROR_DEFINE_PRODUCTS', 'Warning: No Products have been defined');
  define('ERROR_DEFINE_PRODUCTS_MASTER_CATEGORIES_ID', 'Warning: No Master Categories ID has been set for this Product');

  define('BUTTON_ADD_PRODUCT_TYPES_SUBCATEGORIES_ON','Add include SubCategories');
  define('BUTTON_ADD_PRODUCT_TYPES_SUBCATEGORIES_OFF','Add without SubCategories');

  define('BUTTON_PREVIOUS_ALT','Previous Product');
  define('BUTTON_NEXT_ALT','Next Product');

  define('BUTTON_PRODUCTS_TO_CATEGORIES', 'Multiple Categories Link Manager');
  define('BUTTON_PRODUCTS_TO_CATEGORIES_ALT', 'Copy Product to Multiple Categories');

  define('TEXT_INFO_OPTION_NAMES_VALUES_COPIER_STATUS', 'All Global Copy, Add and Delete Features Status is currently OFF');
  define('TEXT_SHOW_OPTION_NAMES_VALUES_COPIER_ON', 'Display Global Features - ON');
  define('TEXT_SHOW_OPTION_NAMES_VALUES_COPIER_OFF', 'Display Global Features - OFF');

// moved from categories and all product type language files
  define('ERROR_CANNOT_LINK_TO_SAME_CATEGORY', 'Error: Can not link products in the same category.');
  define('ERROR_CATALOG_IMAGE_DIRECTORY_NOT_WRITEABLE', 'Error: Catalog images directory is not writeable: ' . DIR_FS_CATALOG_IMAGES);
  define('ERROR_CATALOG_IMAGE_DIRECTORY_DOES_NOT_EXIST', 'Error: Catalog images directory does not exist: ' . DIR_FS_CATALOG_IMAGES);
  define('ERROR_CANNOT_MOVE_CATEGORY_TO_PARENT', 'Error: Category cannot be moved into child category.');
  define('ERROR_CANNOT_MOVE_PRODUCT_TO_CATEGORY_SELF', 'Error: Cannot move product to the same category or into a category where it already exists.');
  define('ERROR_CATEGORY_HAS_PRODUCTS', 'Error: Category has Products!<br /><br />While this can be done temporarily to build your Categories ... Categories hold either Products or Categories but never both!');
  define('SUCCESS_CATEGORY_MOVED', 'Success! Category has successfully been moved ...');
  define('ERROR_CANNOT_MOVE_CATEGORY_TO_CATEGORY_SELF', 'Error: Cannot move Category to the same Category! ID#');

// EZ-PAGES Alerts
  define('TEXT_EZPAGES_STATUS_HEADER_ADMIN', 'WARNING: EZ-PAGES HEADER - On for Admin IP Only');
  define('TEXT_EZPAGES_STATUS_FOOTER_ADMIN', 'WARNING: EZ-PAGES FOOTER - On for Admin IP Only');
  define('TEXT_EZPAGES_STATUS_SIDEBOX_ADMIN', 'WARNING: EZ-PAGES SIDEBOX - On for Admin IP Only');

// moved from product types
// warnings on Virtual and Always Free Shipping
  define('TEXT_VIRTUAL_PREVIEW','Warning: This product is marked - Free Shipping and Skips Shipping Address<br />No shipping will be requested when all products in the order are Virtual Products');
  define('TEXT_VIRTUAL_EDIT','Warning: This product is marked - Free Shipping and Skips Shipping Address<br />No shipping will be requested when all products in the order are Virtual Products');
  define('TEXT_FREE_SHIPPING_PREVIEW','Warning: This product is marked - Free Shipping, Shipping Address Required<br />Free Shipping Module is required when all products in the order are Always Free Shipping Products');
  define('TEXT_FREE_SHIPPING_EDIT','Warning: Yes makes the product - Free Shipping, Shipping Address Required<br />Free Shipping Module is required when all products in the order are Always Free Shipping Products');

// admin activity log warnings
  define('WARNING_ADMIN_ACTIVITY_LOG_DATE', 'WARNING: The Admin Activity Log table has records over 2 months old and should be archived to conserve space ... ');
  define('WARNING_ADMIN_ACTIVITY_LOG_RECORDS', 'WARNING: The Admin Activity Log table has over 50,000 records and should be archived to conserve space ... ');
  define('RESET_ADMIN_ACTIVITY_LOG', 'You can view and archive Admin Activity details via the Admin Access Management menu, if you have appropriate permissions.');
  define('TEXT_ACTIVITY_LOG_ACCESSED', 'Admin Activity Log accessed. Output format: %s. Filter: %s. %s');
  define('TEXT_ERROR_FAILED_ADMIN_LOGIN_FOR_USER', 'Failed admin login attempt: ');
  define('TEXT_ERROR_ATTEMPTED_TO_LOG_IN_TO_LOCKED_ACCOUNT', 'Attempted to log into locked account:');
  define('TEXT_ERROR_ATTEMPTED_ADMIN_LOGIN_WITHOUT_CSRF_TOKEN', 'Attempted login without CSRF token.');
  define('TEXT_ERROR_ATTEMPTED_ADMIN_LOGIN_WITHOUT_USERNAME', 'Attempted login without username.');
  define('TEXT_ERROR_INCORRECT_PASSWORD_DURING_RESET_FOR_USER', 'Incorrect password while attempting a password reset for: ');


  define('CATEGORY_HAS_SUBCATEGORIES', 'NOTE: Category has SubCategories<br />Products cannot be added');

  define('WARNING_WELCOME_DISCOUNT_COUPON_EXPIRES_IN', 'WARNING! Welcome Email Discount Coupon expires in %s days');

define('WARNING_ADMIN_FOLDERNAME_VULNERABLE', 'CAUTION: <a href="http://tutorials.zen-cart.com/index.php?article=33" target="_blank">Your /admin/ foldername should be renamed to something less common</a>, to prevent unauthorized access.');
define('WARNING_EMAIL_SYSTEM_DISABLED', 'WARNING: The email subsystem is turned off. No emails will be sent until it is re-enabled in Admin->Configuration->Email Options.');
define('TEXT_CURRENT_VER_IS', 'You are presently using: ');
define('ERROR_NO_DATA_TO_SAVE', 'ERROR: The data you submitted was found to be empty. YOUR CHANGES HAVE *NOT* BEEN SAVED. You may have a problem with your browser or your internet connection.');
define('TEXT_HIDDEN', 'Hidden');
define('TEXT_VISIBLE', 'Visible');
define('TEXT_HIDE', 'Hide');
define('TEXT_EMAIL', 'Email');
define('TEXT_NOEMAIL', 'No Email');

define('BOX_HEADING_PRODUCT_TYPES', 'Product Types');

define('ERROR_DATABASE_MAINTENANCE_NEEDED', '<a href="http://www.zen-cart.com/content.php?334-ERROR-0071-There-appears-to-be-a-problem-with-the-database-Maintenance-is-required" target="_blank">ERROR 0071: There appears to be a problem with the database. Maintenance is required.</a>');

// moved from currencies file:
define('TEXT_INFO_CURRENCY_UPDATED', 'The exchange rate for %s (%s) was updated successfully to %s via %s.');
define('ERROR_CURRENCY_INVALID', 'Error: The exchange rate for %s (%s) was not updated via %s. Is it a valid currency code?');
define('WARNING_PRIMARY_SERVER_FAILED', 'Warning: The primary exchange rate server (%s) failed for %s (%s) - trying the secondary exchange rate server.');


///////////////////////////////////////////////////////////
// include additional files:
  require(DIR_WS_LANGUAGES . $_SESSION['language'] . '/' . FILENAME_EMAIL_EXTRAS);
  include(zen_get_file_directory(DIR_FS_CATALOG_LANGUAGES . $_SESSION['language'] . '/', FILENAME_OTHER_IMAGES_NAMES, 'false'));


