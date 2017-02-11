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
 * @version $Id: gv_faq.php $
 */

define('NAVBAR_TITLE', TEXT_GV_NAME . ' ЧЗВ');
define('HEADING_TITLE', TEXT_GV_NAME . ' ЧЗВ');

define('TEXT_INFORMATION', '<a name="Начало"></a>
  <a href="'.zen_href_link(FILENAME_GV_FAQ,'faq_item=1','NONSSL').'">Придобиване ' . TEXT_GV_NAMES . '</a><br />
  <a href="'.zen_href_link(FILENAME_GV_FAQ,'faq_item=2','NONSSL').'">Как да изпратя ' . TEXT_GV_NAMES . '</a><br />
  <a href="'.zen_href_link(FILENAME_GV_FAQ,'faq_item=3','NONSSL').'">Пазарене с ' . TEXT_GV_NAMES . '</a><br />
  <a href="'.zen_href_link(FILENAME_GV_FAQ,'faq_item=4','NONSSL').'">Осребряване ' . TEXT_GV_NAMES . '</a><br />
  <a href="'.zen_href_link(FILENAME_GV_FAQ,'faq_item=5','NONSSL').'">При проблеми</a><br />
');
switch ($_GET['faq_item']) {
  case '1':
define('SUB_HEADING_TITLE','Придобиване ' . TEXT_GV_NAMES);
define('SUB_HEADING_TEXT', TEXT_GV_NAMES . ' се придобиват, както всеки друг продукт в този сайт. Вие 
  можете да ги закупите чрез наличните начини на плащане.
  Веднъж закупени, стойността на ' . TEXT_GV_NAME . ' ще бъде добавена в личната Ви
   ' . TEXT_GV_NAME . ' сметка. Ако имате капитал във Вашата ' . TEXT_GV_NAME . ' сметка, ще забележите,
  че сумата се показва кутийката на вашата пазарна количка, а също Ви дава възможност да изпратите ' . TEXT_GV_NAME . ' до някой друг, посредством имейл.');
  break;
  case '2':
define('SUB_HEADING_TITLE','Как да изпратя ' . TEXT_GV_NAMES);
define('SUB_HEADING_TEXT','За да изпратите ' . TEXT_GV_NAME . ' трябва да влезете в страницата за изпращане на ' . TEXT_GV_NAME . ' . Линк може да намерите в кутийката с Пазарната количка в дясната колона на всяка страница.
  Когато изпратите ' . TEXT_GV_NAME . ' е необходимо да уточните следното:
  Името на човека, до когото изпращате този ' . TEXT_GV_NAME . ';
  Имейл адресът, на човека за когото е предназначен съответният ' . TEXT_GV_NAME . ';
  Стойността, която искате да бъде изпратена (Забележка: не е необходимо да изпращате цялата стойност от ' . TEXT_GV_NAME . ' баланса.);
  Може да добавите послание, което ще бъде част от имейла;
  Моля, уверете се, че сте въвели правилно цялята информация, въпреки че
  Ви даваме възможност да променяте всичко това, толкова, колкото е необходимо,
  преди имейлът да бъде окончателно изпратен.');
  break;
  case '3':
  define('SUB_HEADING_TITLE','Buying with ' . TEXT_GV_NAMES);
  define('SUB_HEADING_TEXT','If you have funds in your ' . TEXT_GV_NAME . ' Balance, you can use those funds to
  purchase other items in our store. At the checkout stage an extra box will
  appear showing your Balance. Enter the amount to apply from the funds in your ' . TEXT_GV_NAME . ' Balance.
  Please note: you will still have to select another payment method if there
  is not enough in your ' . TEXT_GV_NAME . ' Balance to cover the cost of your purchase.
  If you have more funds in your ' . TEXT_GV_NAME . ' Balance than the total cost of
  your purchase, the remaining balance will be left in your ' . TEXT_GV_NAME . ' Balance for 
  future use.');
  break;
  case '4':
  define('SUB_HEADING_TITLE','Redeeming ' . TEXT_GV_NAMES);
  define('SUB_HEADING_TEXT','If you receive a ' . TEXT_GV_NAME . ' by email, it will contain details of who sent
  you the ' . TEXT_GV_NAME . ', along with a short message from them. The email
  will also contain the ' . TEXT_GV_NAME . ' ' . TEXT_GV_REDEEM . '. It is probably a good idea to print
  out this email for future reference. You can now redeem the ' . TEXT_GV_NAME . ' in
  one of two ways:<br /><br />
  1. By clicking on the link contained within the email for this express purpose.
  This will take you to the store\'s Redeem ' . TEXT_GV_NAME . ' page. You will then be requested
  to create an account before the ' . TEXT_GV_NAME . ' is validated and placed in your
   ' . TEXT_GV_NAME . ' Balance. You can then use the amount to purchase any item from our store.<br /><br />
  2. During the checkout process on the same page that you select a payment method,
there will be a box to enter a ' . TEXT_GV_REDEEM . '. Enter the ' . TEXT_GV_REDEEM . ' here, and
click the Redeem button. The code will be
validated and the amount added to your ' . TEXT_GV_NAME . ' Balance. You can then use the amount to purchase any item from our store.');
  break;
  case '5':
  define('SUB_HEADING_TITLE','When problems occur.');
  define('SUB_HEADING_TEXT','For any queries regarding the ' . TEXT_GV_NAME . ' System, please contact the store
  by email at '. STORE_OWNER_EMAIL_ADDRESS . '. Please make sure you give
  as much information as possible regarding the issue so that we can fully address the problem.');
  break;
  default:
  define('SUB_HEADING_TITLE','');
  define('SUB_HEADING_TEXT','Please choose from one of the questions above.');

  }

  define('TEXT_GV_REDEEM_INFO', 'Please enter your ' . TEXT_GV_NAME . ' redemption code: ');
  define('TEXT_GV_REDEEM_ID', 'Redemption Code:');
