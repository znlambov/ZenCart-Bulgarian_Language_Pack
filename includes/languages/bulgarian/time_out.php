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
 * @version $Id: time_out.php 3027 2006-02-13 17:15:51Z drbyte $
 */

define('NAVBAR_TITLE', 'Време на сесията');
define('HEADING_TITLE', 'Сесията Ви е изтекла.');
define('HEADING_TITLE_LOGGED_IN', 'Извинявайте за неудобството, но не можете да извършите заявеното действие. ');
define('TEXT_INFORMATION', '<p>Ако сте извършвали покупка, моля влезте отново в профила си и продължете от там, до където сте стигнали. Всички направени от Вас стъпки и маркирани продукти се съхраняват в профила Ви.</p><p>Ако сте приключили поръчка и желаете да я разгледате' . (DOWNLOAD_ENABLED == 'true' ? ', или имате дигитален продукт, който искате да свалите' : '') . ', моля натиснете странцицата <a href="' . zen_href_link(FILENAME_ACCOUNT, '', 'SSL') . '">Моят профил</a> за да видите поръчките си.</p>');

define('TEXT_INFORMATION_LOGGED_IN', 'Вие все още сте влезли с профила си и можете да продължите да пазарувате. Изберете дестинация от менюто.');

define('HEADING_RETURNING_CUSTOMER', 'Вход');
define('TEXT_PASSWORD_FORGOTTEN', 'Забравена парола?')
?>