<?php
/**
 * @package admin
 * @copyright Copyright 2003-2016 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: Author: DrByte  Sun Oct 18 23:54:03 2015 -0400 Modified in v1.5.5 $
 */

define('HEADING_TITLE', 'Customers');

define('TABLE_HEADING_ID', 'ID#');
define('TABLE_HEADING_FIRSTNAME', 'First Name');
define('TABLE_HEADING_LASTNAME', 'Last Name');
define('TABLE_HEADING_ACCOUNT_CREATED', 'Account Created');
define('TABLE_HEADING_LOGIN', 'Last Login');
define('TABLE_HEADING_ACTION', 'Action');
define('TABLE_HEADING_PRICING_GROUP', 'Pricing Group');
define('TABLE_HEADING_AUTHORIZATION_APPROVAL', 'Authorized');
define('TABLE_HEADING_GV_AMOUNT', 'GV Balance');

define('TEXT_DATE_ACCOUNT_CREATED', 'Account Created:');
define('TEXT_DATE_ACCOUNT_LAST_MODIFIED', 'Last Modified:');
define('TEXT_INFO_DATE_LAST_LOGON', 'Last Logon:');
define('TEXT_INFO_NUMBER_OF_LOGONS', 'Number of Logons:');
define('TEXT_INFO_COUNTRY', 'Country:');
define('TEXT_INFO_NUMBER_OF_REVIEWS', 'Number of Reviews:');
define('TEXT_DELETE_INTRO', 'Are you sure you want to delete this customer?');
define('TEXT_DELETE_REVIEWS', 'Delete %s review(s)');
define('TEXT_INFO_HEADING_DELETE_CUSTOMER', 'Delete Customer');
define('TYPE_BELOW', 'Type below');
define('PLEASE_SELECT', 'Select One');
define('TEXT_INFO_NUMBER_OF_ORDERS', 'Number of Orders:');
define('TEXT_INFO_LAST_ORDER','Last Order:');
define('TEXT_INFO_ORDERS_TOTAL', 'Total:');
define('CUSTOMERS_REFERRAL', 'Customer Referral<br />1st Discount Coupon');
define('TEXT_INFO_GV_AMOUNT', 'GV Balance');

define('ENTRY_NONE', 'None');

define('TABLE_HEADING_COMPANY','Company');

define('TEXT_INFO_HEADING_RESET_CUSTOMER_PASSWORD', 'Reset Customer Password');
define('TEXT_PWDRESET_INTRO', 'To reset the password for this customer, enter a new password, and confirm it, below. The new password must conform to the normal password rules imposed on customers.');
define('TEXT_CUST_NEW_PASSWORD', 'New Password:');
define('TEXT_CUST_CONFIRM_PASSWORD', 'Confirm Password:');
define('ERROR_PWD_TOO_SHORT', 'Error: password is shorter than the number of characters configured for this store.');
define('SUCCESS_PASSWORD_UPDATED', 'Password updated.');

define('EMAIL_CUSTOMER_PWD_CHANGE_MESSAGE', 'Your password has been changed by the store administrator. Your new password is: ');
define('EMAIL_CUSTOMER_PWD_CHANGE_SUBJECT', 'Account password reset');
define('EMAIL_CUSTOMER_PWD_CHANGE_MESSAGE_FOR_ADMIN', 'You have reset the password for a customer: ' . "\n" . '%s' . "\n\n" . 'Administrator ID: %s');

define('CUSTOMERS_AUTHORIZATION', 'Customers Authorization Status');
define('CUSTOMERS_AUTHORIZATION_0', 'Approved');
define('CUSTOMERS_AUTHORIZATION_1', 'Pending Approval - Must be Authorized to Browse');
define('CUSTOMERS_AUTHORIZATION_2', 'Pending Approval - May Browse No Prices');
define('CUSTOMERS_AUTHORIZATION_3', 'Pending Approval - May browse with prices but may not buy');
define('CUSTOMERS_AUTHORIZATION_4', 'Banned - Not allowed to login or shop');
define('ERROR_CUSTOMER_APPROVAL_CORRECTION1', 'Warning: Your shop is set up for Approval with No Browse. The customer has been set to Pending Approval - No Browse');
define('ERROR_CUSTOMER_APPROVAL_CORRECTION2', 'Warning: Your shop is set up for Approval with Browse no prices. The customer has been set to Pending Approval - Browse No Prices');

define('EMAIL_CUSTOMER_STATUS_CHANGE_MESSAGE', 'Your customer status has been updated. Thank you for shopping with us. We look forward to your business.');
define('EMAIL_CUSTOMER_STATUS_CHANGE_SUBJECT', 'Customer Status Updated');

define('ADDRESS_BOOK_TITLE', 'Address Book Entries');
define('PRIMARY_ADDRESS', '(primary address)');
define('TEXT_MAXIMUM_ENTRIES', '<span class="coming"><strong>NOTE:</strong></span> A maximum of %s address book entries allowed.');
define('TEXT_INFO_ADDRESS_BOOK_COUNT', ' | 1 of  ');
