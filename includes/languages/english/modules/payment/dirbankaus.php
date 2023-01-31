<?php
// DIRBANKAUS based on  $Id: DIRBANKAUS.php 1970 2009-11-24 06:57:21Z CRYSTAL JONES $
// BMH (OldNGrey) 2023-01-30 lang.dirbankaus.php for zc158 PHP8.2
//

@$id=$_SESSION['customer_id'];

@$ln=$_SESSION['customer_last_name'];
define ('MODULE_PAYMENT_DIRBANKAUS_PAYABLE', '');
define ('MODULE_PAYMENT_DIRBANKAUS_ADDRESS', '');

  define('EMAIL_TEXT_NO_DELIVERY',
  '<p>No Delivery, see below:');
  define('MODULE_PAYMENT_DIRBANKAUS_TEXT_EMAIL_FOOTER', 
  "Please use the following details to transfer your total order value:\n\n" .
  "\nAccount No.:  " . MODULE_PAYMENT_DIRBANKAUS_ACCNUM .
  "\nBSB Number:   " . MODULE_PAYMENT_DIRBANKAUS_BSB . 
  "\nAccount Name: " . MODULE_PAYMENT_DIRBANKAUS_ACCNAM . 
  "\nBank Name:    " . MODULE_PAYMENT_DIRBANKAUS_BANKNAM .
  "\nSwift Code:   " . MODULE_PAYMENT_DIRBANKAUS_SWIFT . 
  "\nReference:    "  . $ln ."-" . $id . "-%s" .
  "\n\nSend Cheques/Money Orders To:    " . MODULE_PAYMENT_DIRBANKAUS_ADDRESS . 
  "\nCheques/Money Orders Payable To:   " . MODULE_PAYMENT_DIRBANKAUS_PAYABLE .
  "\n\nThanks for your order which will ship immediately once we receive payment in the above account.\n");

  define('MODULE_PAYMENT_DIRBANKAUS_HTML_EMAIL_FOOTER', 
  '<BR>Please use the following details to transfer your total order value:<br><pre>' .
  "\nAccount No.:  " . MODULE_PAYMENT_DIRBANKAUS_ACCNUM .
  "\nBSB Number:   " . MODULE_PAYMENT_DIRBANKAUS_BSB . 
  "\nAccount Name: " . MODULE_PAYMENT_DIRBANKAUS_ACCNAM . 
  "\nBank Name:    " . MODULE_PAYMENT_DIRBANKAUS_BANKNAM .
  "\nSwift Code:   " . MODULE_PAYMENT_DIRBANKAUS_SWIFT . 
  "\nReference:    "  . $ln ."-" . $id . "-%s" .
  "\n\nSend Cheques/Money Orders To:    " . MODULE_PAYMENT_DIRBANKAUS_ADDRESS . 
  "\nCheques/Money Orders Payable To:   " . MODULE_PAYMENT_DIRBANKAUS_PAYABLE .
  '</pre><p>Thanks for your order which will ship immediately once we receive payment in the above account.');

  
   define('MODULE_PAYMENT_DIRBANKAUS_TEXT_TITLE', 'Direct-Bank-Deposit - Australian');
   define('MODULE_PAYMENT_DIRBANKAUS_TEXT_DESCRIPTION', 
  '<BR>Banking and Address details will be sent to your email once the order is confirmed.<br><pre>' . 
  '</pre><p>Thanks for your order which will ship immediately once we receive payment.');
?>