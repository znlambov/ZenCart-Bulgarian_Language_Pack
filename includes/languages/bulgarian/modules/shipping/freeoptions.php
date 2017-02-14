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
 * @version $Id: freeoptions.php 3830 2006-06-21 23:47:16Z ajeh $
 */

define('MODULE_SHIPPING_FREEOPTIONS_TEXT_TITLE', 'Опции за безплатна доставка');
define('MODULE_SHIPPING_FREEOPTIONS_TEXT_DESCRIPTION', '
Безплатни опции се използва за да покаже опции за Безплатна доставка, когато са налични и други Начини на плащане.
Може да е на база: Показвай винаги, Обща цена, Общо тегло или Прой продукти в поръчката.
Модулът за Безплатни опции се показва, когато се покаже Безплатна доставка.<br /><br />
Ако настроите Цена Общо >= 0.00 и <= нищо (оставено празно), това ще активира този модул да се показва с всички модули на доставка, с изключение на Безплатна доставка - freeshipper.<br /><br />
Забележка: Оставете всички настройки за Цена Общо, Тегло и Брой продукти празни, ще деактивирате този модул.<br /><br />
Забележка: Опцията за безплатна доставка не се показва, ако Безплатна доставка е включено на база 0 тегло е Безплатна доставка.
See: freeshipper
');
define('MODULE_SHIPPING_FREEOPTIONS_TEXT_WAY', 'Безплатна доставка');

?>