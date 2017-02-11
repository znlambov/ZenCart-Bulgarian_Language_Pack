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
  <a href="'.zen_href_link(FILENAME_GV_FAQ,'faq_item=3','NONSSL').'">Пазаруване с ' . TEXT_GV_NAMES . '</a><br />
  <a href="'.zen_href_link(FILENAME_GV_FAQ,'faq_item=4','NONSSL').'">Осребряване ' . TEXT_GV_NAMES . '</a><br />
  <a href="'.zen_href_link(FILENAME_GV_FAQ,'faq_item=5','NONSSL').'">При проблеми</a><br />
');
switch ($_GET['faq_item']) {
  case '1':
define('SUB_HEADING_TITLE','Придобиване ' . TEXT_GV_NAMES);
define('SUB_HEADING_TEXT', TEXT_GV_NAMES . ' се придобиват, както всеки друг продукт в този сайт. Вие 
  можете да ги закупите чрез наличните начини на плащане.
  Веднъж закупени, стойността на ' . TEXT_GV_NAME . ' ще бъде добавена в личния Ви
   ' . TEXT_GV_NAME . ' баланс. Ако имате капитал във Вашия ' . TEXT_GV_NAME . ' баланс, ще забележите,
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
  define('SUB_HEADING_TITLE','Пазаруване с ' . TEXT_GV_NAMES);
  define('SUB_HEADING_TEXT','Ако разполагате със средства във Вашия ' . TEXT_GV_NAME . ' баланс, можете да ги използвате за
  закупуване на продукти в нашия магазин. Преди да приключите поръчка, има допълнително поле
  показващо Вашия баланс. Можете да въведете стойност, която да приложите от Вашия ' . TEXT_GV_NAME . ' баланс.
  Обърнете внимание: необходимо е да изберете и друг метод на плащане, ако няма доставъчно средствата във Вашия ' . TEXT_GV_NAME . ' баланс, които да покрият поръчката Ви.
  Ако имате повече средства във Вашия ' . TEXT_GV_NAME . ' баланс, отколкото са необходими за поръчката
  остатъкът ще бъде наличен във Вашия ' . TEXT_GV_NAME . ' баланс, за следващи покупки.');
  break;
  case '4':
  define('SUB_HEADING_TITLE','Осребряване ' . TEXT_GV_NAMES);
  define('SUB_HEADING_TEXT','Ако получите ' . TEXT_GV_NAME . ' по имейл, ще намерите информация от кого е изпратен
   ' . TEXT_GV_NAME . ', заедно с кратко съобщение от изпращача. Имейлът ще съдържа също и
   ' . TEXT_GV_NAME . ' ' . TEXT_GV_REDEEM . '. Добре е да принтирате този имейл
  за бъдещи справки. Можете да осребрите ' . TEXT_GV_NAME . ' по тези два начина:<br /><br />
  1. Като натиснете връзката съдържаща се в имейл съобщението.
  Това ще Ви отведе до страницата за осребряване на ' . TEXT_GV_NAME . ' . След това, ще бъдете помолен
  да ъздадете потребителски профил, преди ' . TEXT_GV_NAME . ' да бъде потвърден и добавен към Вашия
   ' . TEXT_GV_NAME . ' баланс. В последствие можете да използвате средствата за покупка на стоки.<br /><br />
  2. В процеса на приключване на поръчка, там където избирате начин на плащане,
има поле в което да въведете ' . TEXT_GV_REDEEM . '. Напишете ' . TEXT_GV_REDEEM . ' там, и
натиснете бутона Осребри. Кодът ще бъде
потвърден и стойността ще бъде добавена към вашия ' . TEXT_GV_NAME . ' баланс. След това можете да използвате сумата за покупка на стоки в този сайт.');
  break;
  case '5':
  define('SUB_HEADING_TITLE','Ако настъпят проблеми.');
  define('SUB_HEADING_TEXT','Отностно въпроси свързани с ' . TEXT_GV_NAME . ' системата, моля свържете се с нас
  чрез имейл на '. STORE_OWNER_EMAIL_ADDRESS . '. Уверете се, че ни давате
  колкото се може, по точна и ясна информация относно настъпилия проблем, за да можем да го отстраним възможно най-бързо.');
  break;
  default:
  define('SUB_HEADING_TITLE','');
  define('SUB_HEADING_TEXT','Моля, изберете един от въпросите горе.');

  }

  define('TEXT_GV_REDEEM_INFO', 'Моля, въведете Вашия ' . TEXT_GV_NAME . ' код за осребряване: ');
  define('TEXT_GV_REDEEM_ID', 'Код за осребряване:');
