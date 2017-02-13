<?php
//
// Bulgarian Language Pack for Zen Cart 1.5.5d
// https://github.com/znlambov/ZenCart-Bulgarian_Language_Pack
//
/**
 * @package languageDefines
 * @copyright Copyright 2003-2006 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @copyright Originally Programmed By: Christopher Bradley (www.wizardsandwars.com) for OsCommerce
 * @copyright Modified by Jim Keebaugh for OsCommerce
 * @copyright Adapted for Zen Cart
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: unsubscribe.php 3159 2006-03-11 01:35:04Z drbyte $
 */

define('NAVBAR_TITLE', 'Отпосване');
define('HEADING_TITLE', 'Отписване от нашите новини');

define('UNSUBSCRIBE_TEXT_INFORMATION', '<br />Съжаляваме, че Ви виждаме да се отписвате от нашите новини. Ако сте обезпокоен са Вашата сигурност, моля запознайте се с нашата <a href="' . zen_href_link(FILENAME_PRIVACY,'','NONSSL') . '"><span class="pseudolink">Декларация за поверителност</span></a>.<br /><br />Записаните за нашите новини получават известия за нови продукти, промоции, промени и др.<br /><br />Ако все още желаете да получавате новини, моля, натиснете бутона по-долу. ');
define('UNSUBSCRIBE_TEXT_NO_ADDRESS_GIVEN', '<br />Съжаляваме, че Ви виждаме да се отписвате от нашите новини. Ако сте обезпокоен са Вашата сигурност, моля запознайте се с нашата <a href="' . zen_href_link(FILENAME_PRIVACY,'','NONSSL') . '"><span class="pseudolink">Декларация за поверителност</span></a>.<br /><br />Записаните за нашите новини получават известия за нови продукти, промоции, промени и др.<br /><br />Ако все още желаете да получавате новини, моля, натиснете бутона по-долу. Ще бъдете пренасочен към страницата с настройк на профила Ви, където можете да редактирате записваният за новини. Възможно е да бъдете поканен да влезете в профила си отново.');
define('UNSUBSCRIBE_DONE_TEXT_INFORMATION', '<br />Така, както изискахте, имейлът изписан по-долу бе успешно отписан от нашите новини. <br /><br />');
define('UNSUBSCRIBE_ERROR_INFORMATION', '<br />Този имейл не бе открит в базата данни за новини или е бил вече отписан от нашите новини. <br /><br />');
?>