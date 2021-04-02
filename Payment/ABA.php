<?php
require_once (__DIR__.'/../Purchasement/Purchasement.php');
require_once (__DIR__.'/../Purchasement/PaymentMethod.php');
class ABA extends Purchasement implements paymentMethod{
  public function paymentMethod(){
    return 'ABA';
  }
}
?>