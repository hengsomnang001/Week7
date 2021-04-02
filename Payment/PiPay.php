<?php
require_once (__DIR__.'/../Purchasement/Purchasement.php');
require_once (__DIR__.'/../Purchasement/PaymentMethod.php');
class PiPay extends Purchasement implements PaymentMethod{
    public function paymentMethod(){
        return 'PiPay';
    }
}

?>