<?php  //Bulgarian Language Pack for Zen Cart 1.5.5d
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
define('HEADER_ALT_TEXT', 'Админ задвижван от Zen Cart :: The Art of E-Commerce');
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
define('ICON_METATAGS_ON', 'Meta Tags Defined');
define('ICON_METATAGS_OFF', 'Meta Tags Undefined');
define('TEXT_LEGEND_META_TAGS', 'Meta Tags Defined:');
define('TEXT_INFO_META_TAGS_USAGE', '<strong>NOTE:</strong> The Site/Tagline is your defined definition for your site in the meta_tags.php file.');

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
define('JS_ERROR', 'Errors have occurred during the processing of your form!\nPlease make the following corrections:\n\n');

define('JS_OPTIONS_VALUE_PRICE', '* The new product attribute needs a price value\n');
define('JS_OPTIONS_VALUE_PRICE_PREFIX', '* The new product attribute needs a price prefix\n');

define('JS_PRODUCTS_NAME', '* The new product needs a name\n');
define('JS_PRODUCTS_DESCRIPTION', '* The new product needs a description\n');
define('JS_PRODUCTS_PRICE', '* The new product needs a price value\n');
define('JS_PRODUCTS_WEIGHT', '* The new product needs a weight value\n');
define('JS_PRODUCTS_QUANTITY', '* The new product needs a quantity value\n');
define('JS_PRODUCTS_MODEL', '* The new product needs a model value\n');
define('JS_PRODUCTS_IMAGE', '* The new product needs an image value\n');

define('JS_SPECIALS_PRODUCTS_PRICE', '* A new price for this product needs to be set\n');

define('JS_GENDER', '* The \'Gender\' value must be chosen.\n');
define('JS_FIRST_NAME', '* The \'First Name\' entry must have at least ' . ENTRY_FIRST_NAME_MIN_LENGTH . ' characters.\n');
define('JS_LAST_NAME', '* The \'Last Name\' entry must have at least ' . ENTRY_LAST_NAME_MIN_LENGTH . ' characters.\n');
define('JS_DOB', '* The \'Date of Birth\' entry must be in the format: xx/xx/xxxx (date/month/year).\n');
define('JS_EMAIL_ADDRESS', '* The \'E-Mail Address\' entry must have at least ' . ENTRY_EMAIL_ADDRESS_MIN_LENGTH . ' characters.\n');
define('JS_ADDRESS', '* The \'Street Address\' entry must have at least ' . ENTRY_STREET_ADDRESS_MIN_LENGTH . ' characters.\n');
define('JS_POST_CODE', '* The \'Post Code\' entry must have at least ' . ENTRY_POSTCODE_MIN_LENGTH . ' characters.\n');
define('JS_CITY', '* The \'City\' entry must have at least ' . ENTRY_CITY_MIN_LENGTH . ' characters.\n');
define('JS_STATE', '* The \'State\' entry must be selected.\n');
define('JS_STATE_SELECT', '-- Select Above --');
define('JS_ZONE', '* The \'State\' entry must be selected from the list for this country.');
define('JS_COUNTRY', '* The \'Country\' value must be chosen.\n');
define('JS_TELEPHONE', '* The \'Telephone Number\' entry must have at least ' . ENTRY_TELEPHONE_MIN_LENGTH . ' characters.\n');

define('JS_ORDER_DOES_NOT_EXIST', 'Order Number %s does not exist!');
define('TEXT_NO_ORDER_HISTORY', 'No Order History Available');

define('CATEGORY_PERSONAL', 'Personal');
define('CATEGORY_ADDRESS', 'Address');
define('CATEGORY_CONTACT', 'Contact');
define('CATEGORY_COMPANY', 'Company');
define('CATEGORY_OPTIONS', 'Options');

define('ENTRY_GENDER', 'Gender:');
define('ENTRY_GENDER_ERROR', '&nbsp;<span class="errorText">required</span>');
define('ENTRY_FIRST_NAME', 'First Name:');
define('ENTRY_FIRST_NAME_ERROR', '&nbsp;<span class="errorText">min ' . ENTRY_FIRST_NAME_MIN_LENGTH . ' chars</span>');
define('ENTRY_LAST_NAME', 'Last Name:');
define('ENTRY_LAST_NAME_ERROR', '&nbsp;<span class="errorText">min ' . ENTRY_LAST_NAME_MIN_LENGTH . ' chars</span>');
define('ENTRY_DATE_OF_BIRTH', 'Date of Birth:');
define('ENTRY_DATE_OF_BIRTH_ERROR', '&nbsp;<span class="errorText">(eg. 21/05/1970)</span>');
define('ENTRY_EMAIL_ADDRESS', 'E-Mail Address:');
define('ENTRY_EMAIL_ADDRESS_ERROR', '&nbsp;<span class="errorText">min ' . ENTRY_EMAIL_ADDRESS_MIN_LENGTH . ' chars</span>');
define('ENTRY_EMAIL_ADDRESS_CHECK_ERROR', '&nbsp;<span class="errorText">The email address doesn\'t appear to be valid!</span>');
define('ENTRY_EMAIL_ADDRESS_ERROR_EXISTS', '&nbsp;<span class="errorText">This email address already exists!</span>');
define('ENTRY_COMPANY', 'Company name:');
define('ENTRY_COMPANY_ERROR', '');
define('ENTRY_PRICING_GROUP', 'Discount Pricing Group');
define('ENTRY_STREET_ADDRESS', 'Street Address:');
define('ENTRY_STREET_ADDRESS_ERROR', '&nbsp;<span class="errorText">min ' . ENTRY_STREET_ADDRESS_MIN_LENGTH . ' chars</span>');
define('ENTRY_SUBURB', 'Suburb:');
define('ENTRY_SUBURB_ERROR', '');
define('ENTRY_POST_CODE', 'Post Code:');
define('ENTRY_POST_CODE_ERROR', '&nbsp;<span class="errorText">min ' . ENTRY_POSTCODE_MIN_LENGTH . ' chars</span>');
define('ENTRY_CITY', 'City:');
define('ENTRY_CITY_ERROR', '&nbsp;<span class="errorText">min ' . ENTRY_CITY_MIN_LENGTH . ' chars</span>');
define('ENTRY_STATE', 'State:');
define('ENTRY_STATE_ERROR', '&nbsp;<span class="errorText">required</span>');
define('ENTRY_COUNTRY', 'Country:');
define('ENTRY_COUNTRY_ERROR', '');
define('ENTRY_TELEPHONE_NUMBER', 'Telephone Number:');
define('ENTRY_TELEPHONE_NUMBER_ERROR', '&nbsp;<span class="errorText">min ' . ENTRY_TELEPHONE_MIN_LENGTH . ' chars</span>');
define('ENTRY_FAX_NUMBER', 'Fax Number:');
define('ENTRY_FAX_NUMBER_ERROR', '');
define('ENTRY_NEWSLETTER', 'Newsletter:');
define('ENTRY_NEWSLETTER_YES', 'Subscribed');
define('ENTRY_NEWSLETTER_NO', 'Unsubscribed');
define('ENTRY_NEWSLETTER_ERROR', '');

define('ERROR_PASSWORDS_NOT_MATCHING', 'Password and confirmation must match');
define('ENTRY_PASSWORD_CHANGE_ERROR', '<strong>Sorry, your new password was rejected.</strong><br />');
define('ERROR_PASSWORD_RULES', 'Passwords must contain both letters and numbers, must be at least %s characters long, and must not be the same as the last 4 passwords used. Passwords expire every 90 days, after which you will be prompted to choose a new password.');
define('ERROR_TOKEN_EXPIRED_PLEASE_RESUBMIT', 'ERROR: Sorry, there was an error processing your data. Please re-submit the information again.');

// images
//define('IMAGE_ANI_SEND_EMAIL', 'Sending E-Mail');
define('IMAGE_BACK', 'Back');
define('IMAGE_BACKUP', 'Backup');
define('IMAGE_CANCEL', 'Cancel');
define('IMAGE_CONFIRM', 'Confirm');
define('IMAGE_COPY', 'Copy');
define('IMAGE_COPY_TO', 'Copy To');
define('IMAGE_DETAILS', 'Details');
define('IMAGE_DELETE', 'Delete');
define('IMAGE_EDIT', 'Edit');
define('IMAGE_EMAIL', 'Email');
define('IMAGE_GO', 'Go');
define('IMAGE_FILE_MANAGER', 'File Manager');
define('IMAGE_ICON_STATUS_GREEN', 'Active');
define('IMAGE_ICON_STATUS_GREEN_LIGHT', 'Set Active');
define('IMAGE_ICON_STATUS_RED', 'Inactive');
define('IMAGE_ICON_STATUS_RED_LIGHT', 'Set Inactive');
define('IMAGE_ICON_STATUS_RED_EZPAGES', 'Error -- too many URL/content types entered');
define('IMAGE_ICON_STATUS_RED_ERROR', 'Error');
define('IMAGE_ICON_INFO', 'Info');
define('IMAGE_INSERT', 'Insert');
define('IMAGE_LOCK', 'Lock');
define('IMAGE_MODULE_INSTALL', 'Install Module');
define('IMAGE_MODULE_REMOVE', 'Remove Module');
define('IMAGE_MOVE', 'Move');
define('IMAGE_NEW_BANNER', 'New Banner');
define('IMAGE_NEW_CATEGORY', 'New Category');
define('IMAGE_NEW_COUNTRY', 'New Country');
define('IMAGE_NEW_CURRENCY', 'New Currency');
define('IMAGE_NEW_FILE', 'New File');
define('IMAGE_NEW_FOLDER', 'New Folder');
define('IMAGE_NEW_LANGUAGE', 'New Language');
define('IMAGE_NEW_NEWSLETTER', 'New Newsletter');
define('IMAGE_NEW_PRODUCT', 'New Product');
define('IMAGE_NEW_SALE', 'New Sale');
define('IMAGE_NEW_TAX_CLASS', 'New Tax Class');
define('IMAGE_NEW_TAX_RATE', 'New Tax Rate');
define('IMAGE_NEW_TAX_ZONE', 'New Tax Zone');
define('IMAGE_NEW_ZONE', 'New Zone');
define('IMAGE_OPTION_NAMES', 'Option Names Manager');
define('IMAGE_OPTION_VALUES', 'Option Values Manager');
define('IMAGE_ORDERS', 'Orders');
define('IMAGE_ORDERS_INVOICE', 'Invoice');
define('IMAGE_ORDERS_PACKINGSLIP', 'Packing Slip');
define('IMAGE_PERMISSIONS', 'Edit Permissions');
define('IMAGE_PREVIEW', 'Preview');
define('IMAGE_RESTORE', 'Restore');
define('IMAGE_RESET', 'Reset');
define('IMAGE_RESET_PWD', 'Reset Password');
define('IMAGE_SAVE', 'Save');
define('IMAGE_SEARCH', 'Search');
define('IMAGE_SELECT', 'Select');
define('IMAGE_SEND', 'Send');
define('IMAGE_SEND_EMAIL', 'Send Email');
define('IMAGE_SUBMIT', 'Submit');
define('IMAGE_UNLOCK', 'Unlock');
define('IMAGE_UPDATE', 'Update');
define('IMAGE_UPDATE_CURRENCIES', 'Update Exchange Rate');
define('IMAGE_UPLOAD', 'Upload');
define('IMAGE_TAX_RATES','Tax Rate');
define('IMAGE_DEFINE_ZONES','Define Zones');
define('IMAGE_PRODUCTS_PRICE_MANAGER', 'Products Price Manager');
define('IMAGE_UPDATE_PRICE_CHANGES', 'Update Price Changes');
define('IMAGE_ADD_BLANK_DISCOUNTS','Add ' . DISCOUNT_QTY_ADD . ' Blank Discount Qty');
define('IMAGE_CHECK_VERSION', 'Check for Updates to Zen Cart');
define('IMAGE_PRODUCTS_TO_CATEGORIES', 'Multiple Categories Link Manager');

define('IMAGE_ICON_STATUS_ON', 'Status - Enabled');
define('IMAGE_ICON_STATUS_OFF', 'Status - Disabled');
define('IMAGE_ICON_LINKED', 'Product is Linked');

define('IMAGE_REMOVE_SPECIAL','Remove Special Price Info');
define('IMAGE_REMOVE_FEATURED','Remove Featured Product Info');
define('IMAGE_INSTALL_SPECIAL', 'Add Special Price Info');
define('IMAGE_INSTALL_FEATURED', 'Add Featured Product Info');

define('TEXT_VERSION_CHECK_BUTTON', 'Check for New Version');
define('TEXT_BUTTON_RESET_ACTIVITY_LOG', 'View Activity Log');

define('ICON_PRODUCTS_PRICE_MANAGER','Products Price Manager');
define('ICON_COPY_TO', 'Copy to');
define('ICON_CROSS', 'False');
define('ICON_CURRENT_FOLDER', 'Current Folder');
define('ICON_DELETE', 'Delete');
define('ICON_EDIT', 'Edit');
define('ICON_ERROR', 'Error');
define('ICON_FILE', 'File');
define('ICON_FILE_DOWNLOAD', 'Download');
define('ICON_FOLDER', 'Folder');
//define('ICON_LOCKED', 'Locked');
define('ICON_MOVE', 'Move');
define('ICON_PERMISSIONS', 'Permissions');
define('ICON_PREVIOUS_LEVEL', 'Previous Level');
define('ICON_PREVIEW', 'Preview');
define('ICON_RESET', 'Reset');
define('ICON_STATISTICS', 'Statistics');
define('ICON_SUCCESS', 'Success');
define('ICON_TICK', 'True');
//define('ICON_UNLOCKED', 'Unlocked');
define('ICON_WARNING', 'Warning');

// constants for use in zen_prev_next_display function
define('TEXT_RESULT_PAGE', 'Page %s of %d');
define('TEXT_DISPLAY_NUMBER_OF_ADMINS', 'Displaying <b>%d</b> to <b>%d</b> (of <b>%d</b> admins)');
define('TEXT_DISPLAY_NUMBER_OF_BANNERS', 'Displaying <b>%d</b> to <b>%d</b> (of <b>%d</b> banners)');
define('TEXT_DISPLAY_NUMBER_OF_CATEGORIES', 'Displaying <b>%d</b> to <b>%d</b> (of <b>%d</b> categories)');
define('TEXT_DISPLAY_NUMBER_OF_COUNTRIES', 'Displaying <b>%d</b> to <b>%d</b> (of <b>%d</b> countries)');
define('TEXT_DISPLAY_NUMBER_OF_CUSTOMERS', 'Displaying <b>%d</b> to <b>%d</b> (of <b>%d</b> customers)');
define('TEXT_DISPLAY_NUMBER_OF_CURRENCIES', 'Displaying <b>%d</b> to <b>%d</b> (of <b>%d</b> currencies)');
define('TEXT_DISPLAY_NUMBER_OF_FEATURED', 'Displaying <b>%d</b> to <b>%d</b> (of <b>%d</b> products on featured)');
define('TEXT_DISPLAY_NUMBER_OF_LANGUAGES', 'Displaying <b>%d</b> to <b>%d</b> (of <b>%d</b> languages)');
define('TEXT_DISPLAY_NUMBER_OF_MANUFACTURERS', 'Displaying <b>%d</b> to <b>%d</b> (of <b>%d</b> manufacturers)');
define('TEXT_DISPLAY_NUMBER_OF_NEWSLETTERS', 'Displaying <b>%d</b> to <b>%d</b> (of <b>%d</b> newsletters)');
define('TEXT_DISPLAY_NUMBER_OF_ORDERS', 'Displaying <b>%d</b> to <b>%d</b> (of <b>%d</b> orders)');
define('TEXT_DISPLAY_NUMBER_OF_ORDERS_STATUS', 'Displaying <b>%d</b> to <b>%d</b> (of <b>%d</b> orders status)');
define('TEXT_DISPLAY_NUMBER_OF_PRICING_GROUPS', 'Displaying <b>%d</b> to <b>%d</b> (of <b>%d</b> pricing groups)');
define('TEXT_DISPLAY_NUMBER_OF_PRODUCTS', 'Displaying <b>%d</b> to <b>%d</b> (of <b>%d</b> products)');
define('TEXT_DISPLAY_NUMBER_OF_PRODUCT_TYPES', 'Displaying <b>%d</b> to <b>%d</b> (of <b>%d</b> product types)');
define('TEXT_DISPLAY_NUMBER_OF_PRODUCTS_EXPECTED', 'Displaying <b>%d</b> to <b>%d</b> (of <b>%d</b> products expected)');
define('TEXT_DISPLAY_NUMBER_OF_REVIEWS', 'Displaying <b>%d</b> to <b>%d</b> (of <b>%d</b> product reviews)');
define('TEXT_DISPLAY_NUMBER_OF_SALES', 'Displaying <b>%d</b> to <b>%d</b> (of <b>%d</b> sales)');
define('TEXT_DISPLAY_NUMBER_OF_SPECIALS', 'Displaying <b>%d</b> to <b>%d</b> (of <b>%d</b> products on special)');
define('TEXT_DISPLAY_NUMBER_OF_TAX_CLASSES', 'Displaying <b>%d</b> to <b>%d</b> (of <b>%d</b> tax classes)');
define('TEXT_DISPLAY_NUMBER_OF_TEMPLATES', 'Displaying <b>%d</b> to <b>%d</b> (of <b>%d</b> template associations)');
define('TEXT_DISPLAY_NUMBER_OF_TAX_ZONES', 'Displaying <b>%d</b> to <b>%d</b> (of <b>%d</b> tax zones)');
define('TEXT_DISPLAY_NUMBER_OF_TAX_RATES', 'Displaying <b>%d</b> to <b>%d</b> (of <b>%d</b> tax rates)');
define('TEXT_DISPLAY_NUMBER_OF_ZONES', 'Displaying <b>%d</b> to <b>%d</b> (of <b>%d</b> zones)');

define('PREVNEXT_BUTTON_PREV', '&lt;&lt;');
define('PREVNEXT_BUTTON_NEXT', '&gt;&gt;');


define('TEXT_DEFAULT', 'default');
define('TEXT_SET_DEFAULT', 'Set as default');
define('TEXT_FIELD_REQUIRED', '&nbsp;<span class="fieldRequired">* Required</span>');

define('ERROR_NO_DEFAULT_CURRENCY_DEFINED', 'Error: There is currently no default currency set. Please set one at: Administration Tools->Localization->Currencies');

define('TEXT_NONE', '--none--');
define('TEXT_TOP', 'Top');
define('PLEASE_SELECT', 'Please select ...');

define('ERROR_DESTINATION_DOES_NOT_EXIST', 'Error: Destination does not exist %s');
define('ERROR_DESTINATION_NOT_WRITEABLE', 'Error: Destination not writeable %s');
define('ERROR_FILE_NOT_SAVED', 'Error: File upload not saved.');
define('ERROR_FILETYPE_NOT_ALLOWED', 'Error: File upload type not allowed  %s');
define('SUCCESS_FILE_SAVED_SUCCESSFULLY', 'Success: File upload saved successfully %s');
define('WARNING_NO_FILE_UPLOADED', 'Warning: No file uploaded.');
define('WARNING_FILE_UPLOADS_DISABLED', 'Warning: File uploads are disabled in the php.ini configuration file.');
define('ERROR_ADMIN_SECURITY_WARNING', 'Warning: Your Admin login is not secure ... either you still have default login settings for: Admin admin or have not removed or changed: demo demoonly<br />The login(s) should be changed as soon as possible for the Security of your shop.');
define('WARNING_DATABASE_VERSION_OUT_OF_DATE','Your database appears to need patching to a higher level. See Tools->Server Information to review patch levels.');
define('WARN_DATABASE_VERSION_PROBLEM','true'); //set to false to turn off warnings about database version mismatches
define('WARNING_ADMIN_DOWN_FOR_MAINTENANCE', '<strong>WARNING:</strong> Site is currently set to Down for Maintenance ...<br />NOTE: You cannot test most Payment and Shipping Modules in Maintenance mode');
define('WARNING_BACKUP_CFG_FILES_TO_DELETE', 'WARNING: These files should be deleted to prevent security vulnerability: ');
define('WARNING_INSTALL_DIRECTORY_EXISTS', 'SECURITY WARNING: Installation directory exists at: %s. Please remove this directory for security reasons.');
define('WARNING_CONFIG_FILE_WRITEABLE', 'Warning: Your configuration file: %s is writeable. This is a potential security risk - please set the right user permissions on this file (read-only, CHMOD 644 or 444 are typical). You may need to use your webhost control panel/file-manager to change the permissions effectively. Contact your webhost for assistance. <a href="http://tutorials.zen-cart.com/index.php?article=90" target="_blank">See this FAQ</a>');
define('WARNING_COULD_NOT_LOCATE_LANG_FILE', 'WARNING: Could not locate language file: ');
define('ERROR_MODULE_REMOVAL_PROHIBITED', 'ERROR: Module removal prohibited: ');
define('WARNING_REVIEW_ROGUE_ACTIVITY', 'ALERT: Please review for possible XSS activity:');

define('ERROR_FILE_NOT_REMOVEABLE', 'Error: Could not remove the file specified. You may have to use FTP to remove the file, due to a server-permissions configuration limitation.');
define('WARNING_SESSION_AUTO_START', 'Warning: session.auto_start is enabled - please disable this PHP feature in php.ini (restarting your webserver may be necessary to activate the change).');
define('WARNING_DOWNLOAD_DIRECTORY_NON_EXISTENT', 'Warning: The downloadable products directory does not exist: ' . DIR_FS_DOWNLOAD . '. Downloadable products will not work until this directory is valid.');
define('WARNING_SQL_CACHE_DIRECTORY_NON_EXISTENT', 'Warning: The SQL cache directory does not exist: ' . DIR_FS_SQL_CACHE . '. SQL caching will not work until this directory is created.');
define('WARNING_SQL_CACHE_DIRECTORY_NOT_WRITEABLE', 'Warning: I am not able to write to the SQL cache directory: ' . DIR_FS_SQL_CACHE . '. SQL caching will not work until the right user permissions are set.');

define('_JANUARY', 'January');
define('_FEBRUARY', 'February');
define('_MARCH', 'March');
define('_APRIL', 'April');
define('_MAY', 'May');
define('_JUNE', 'June');
define('_JULY', 'July');
define('_AUGUST', 'August');
define('_SEPTEMBER', 'September');
define('_OCTOBER', 'October');
define('_NOVEMBER', 'November');
define('_DECEMBER', 'December');

define('TEXT_DISPLAY_NUMBER_OF_GIFT_VOUCHERS', 'Displaying <b>%d</b> to <b>%d</b> (of <b>%d</b> gift vouchers)');
define('TEXT_DISPLAY_NUMBER_OF_COUPONS', 'Displaying <b>%d</b> to <b>%d</b> (of <b>%d</b> coupons)');

define('TEXT_VALID_PRODUCTS_LIST', 'Products List');
define('TEXT_VALID_PRODUCTS_ID', 'Products ID');
define('TEXT_VALID_PRODUCTS_NAME', 'Products Name');
define('TEXT_VALID_PRODUCTS_MODEL', 'Products Model');

define('TEXT_VALID_CATEGORIES_LIST', 'Categories List');
define('TEXT_VALID_CATEGORIES_ID', 'Category ID');
define('TEXT_VALID_CATEGORIES_NAME', 'Category Name');

define('DEFINE_LANGUAGE','Choose Language:');

define('BOX_ENTRY_COUNTER_DATE','Hit Counter Started:');
define('BOX_ENTRY_COUNTER','Hit Counter:');

// not installed
define('NOT_INSTALLED_TEXT','Not Installed');

// Product Options Values Sort Order - option_values.php
  define('BOX_CATALOG_PRODUCT_OPTIONS_VALUES','Option Value Sorter ');

  define('TEXT_UPDATE_SORT_ORDERS_OPTIONS','<strong>Update Attribute Sort Order from Option Value Defaults</strong> ');
  define('TEXT_INFO_ATTRIBUTES_FEATURES_UPDATES','<strong>Update All Products\' Attribute Sort Orders</strong><br />to match Option Value Default Sort Orders:<br />');

// Product Options Name Sort Order - option_values.php
  define('BOX_CATALOG_PRODUCT_OPTIONS_NAME','Option Name Sorter');

// Attributes only
  define('BOX_CATALOG_CATEGORIES_ATTRIBUTES_CONTROLLER','Attributes Controller');

// generic model
  define('TEXT_MODEL','Model:');

// column controller
  define('BOX_TOOLS_LAYOUT_CONTROLLER','Layout Boxes Controller');

// check GV release queue and alert store owner
  define('SHOW_GV_QUEUE',true);
  define('TEXT_SHOW_GV_QUEUE','%s waiting approval ');
  define('IMAGE_GIFT_QUEUE', TEXT_GV_NAME . ' Queue');
  define('IMAGE_ORDER','Order');

  define('IMAGE_DISPLAY','Display');
  define('IMAGE_UPDATE_SORT','Update Sort Order');
  define('IMAGE_EDIT_PRODUCT','Edit Product');
  define('IMAGE_EDIT_ATTRIBUTES','Edit Attributes');
  define('TEXT_NEW_PRODUCT', 'Product in Category: %s');
  define('IMAGE_OPTIONS_VALUES','Option Names and Option Values');
  define('TEXT_PRODUCTS_PRICE_MANAGER','PRODUCTS PRICE MANAGER');
  define('TEXT_PRODUCT_EDIT','EDIT PRODUCT');
  define('TEXT_ATTRIBUTE_EDIT','EDIT ATTRIBUTES');
  define('TEXT_PRODUCT_DETAILS','VIEW DETAILS');

// sale maker
  define('DEDUCTION_TYPE_DROPDOWN_0', 'Deduct amount');
  define('DEDUCTION_TYPE_DROPDOWN_1', 'Percent');
  define('DEDUCTION_TYPE_DROPDOWN_2', 'New Price');

// Min and Units
  define('PRODUCTS_QUANTITY_MIN_TEXT_LISTING','Min:');
  define('PRODUCTS_QUANTITY_UNIT_TEXT_LISTING','Units:');
  define('PRODUCTS_QUANTITY_IN_CART_LISTING','In cart:');
  define('PRODUCTS_QUANTITY_ADD_ADDITIONAL_LISTING','Add Additional:');

  define('TEXT_PRODUCTS_MIX_OFF','*No Mixed Options');
  define('TEXT_PRODUCTS_MIX_ON','*Yes Mixed Options');

// search filters
  define('TEXT_INFO_SEARCH_DETAIL_FILTER','Search Filter: ');
  define('HEADING_TITLE_SEARCH_DETAIL','Search: ');
  define('HEADING_TITLE_SEARCH_DETAIL_REPORTS', 'Search for Product IDs (Delimited by commas)');
  define('HEADING_TITLE_SEARCH_DETAIL_REPORTS_NAME_MODEL', 'Search for Product Name/Model');

  define('PREV_NEXT_PRODUCT', 'Products: ');
  define('TEXT_CATEGORIES_STATUS_INFO_OFF', '<span class="alert">*Category is Disabled</span>');
  define('TEXT_PRODUCTS_STATUS_INFO_OFF', '<span class="alert">*Product is Disabled</span>');

// admin demo
  define('ADMIN_DEMO_ACTIVE','Admin Demo is currently Active. Some settings are will be disabled');
  define('ADMIN_DEMO_ACTIVE_EXCLUSION','Admin Demo is currently Active. Some settings are will be disabled - <strong>NOTE: Admin Override Enabled</strong>');
  define('ERROR_ADMIN_DEMO','Admin Demo is Active ... the feature(s) you are trying to perform have been disabled');

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


