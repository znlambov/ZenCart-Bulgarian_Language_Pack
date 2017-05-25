<?php
//
// Bulgarian Language Pack for Zen Cart 1.5.5d
// https://github.com/znlambov/ZenCart-Bulgarian_Language_Pack
//
/**
 * @package languageDefines
 * @copyright Copyright 2003-2016 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: picaflor-azul Sun Dec 13 16:46:52 2015 -0500 New in v1.5.5 $
 */

define('TEXT_MAIN','Това е основният define statement за страницата на български, когато не съществува template defined файл. Намира се в: <strong>/includes/languages/bulgarian/index.php</strong>');

// Showcase vs Store
if (STORE_STATUS == '0') {
  define('TEXT_GREETING_GUEST', 'Добре дошли <span class="greetUser">Уважаеми!</span> Бихте ли желали <a href="%s">да влезете</a>?');
} else {
  define('TEXT_GREETING_GUEST', 'Добре дошли, моля насладете се на нашия онлайн каталог.');
}

define('TEXT_GREETING_PERSONAL', 'Привет <span class="greetUser">%s</span>! Желаете ли да видите нашите <a href="%s">най-нови попълнения</a>?');

define('TEXT_INFORMATION', 'Определете Вашата основна индекс страница тук.');

//moved to english
//define('TABLE_HEADING_FEATURED_PRODUCTS','Featured Products');

//define('TABLE_HEADING_NEW_PRODUCTS', 'New Products For %s');
//define('TABLE_HEADING_UPCOMING_PRODUCTS', 'Upcoming Products');
//define('TABLE_HEADING_DATE_EXPECTED', 'Date Expected');

if ( ($category_depth == 'products') || (zen_check_url_get_terms()) ) {
  // This section deals with product-listing page contents
  define('HEADING_TITLE', 'Налични продукти');
  define('TABLE_HEADING_IMAGE', '');
  define('TABLE_HEADING_MODEL', 'Модел');
  define('TABLE_HEADING_PRODUCTS', 'Име на продукт');
  define('TABLE_HEADING_MANUFACTURER', 'Производител');
  define('TABLE_HEADING_QUANTITY', 'Количество');
  define('TABLE_HEADING_PRICE', 'Цена');
  define('TABLE_HEADING_WEIGHT', 'Тегло');
  define('TABLE_HEADING_BUY_NOW', 'Купи сега');
  define('TEXT_NO_PRODUCTS', 'Няма продукти в тази категория.');
  define('TEXT_NO_PRODUCTS2', 'Няма продукти от този производител.');
  define('TEXT_NUMBER_OF_PRODUCTS', 'Брой продукти: ');
  define('TEXT_SHOW', 'Филтрирай резултатите по:');
  define('TEXT_BUY', 'Купи 1 \'');
  define('TEXT_NOW', '\' сега');
  define('TEXT_ALL_CATEGORIES', 'Всички категории');
  define('TEXT_ALL_MANUFACTURERS', 'Всички производители');
} elseif ($category_depth == 'top') {
  // This section deals with the "home" page at the top level with no options/products selected
  /*Replace this text with the headline you would like for your shop. For example: 'Welcome to My SHOP!'*/
  define('HEADING_TITLE', 'Поздравления! Вие успешно инсталирахте Zen Cart&reg; решение за е-търговия.');
} elseif ($category_depth == 'nested') {
  // This section deals with displaying a subcategory
  /*Replace this line with the headline you would like for your shop. For example: 'Welcome to My SHOP!'*/
  define('HEADING_TITLE', 'Поздравления! Вие успешно инсталирахте Zen Cart&reg; решение за е-търговия.'); 
}
?>