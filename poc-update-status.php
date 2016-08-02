<?php
require 'app/Mage.php';
Mage::app();

$_increment_id = 2400287252;
$_order = Mage::getModel('sales/order')->loadByIncrementId($_increment_id);

$_status = "paid";

// Set new status && state
$_order->setStatus($_status);
$_order->setState($_state);

$_message = 'New order status defined by internal customers (Verify the email chain).';
$_order->addStatusHistoryComment($_message);

$_order->save();
?>
