<?php
class Purchasement
{

    protected $Name;
    protected $Price;
    protected $Quantity;

    function __construct($Name, $Price,$Quantity)
    {
      $this->Name = $Name;
      $this->Price =$Price;
      $this->Quantity =$Quantity;
    }

    public function getItemsName(){

      return $this->Name;

    }

    public function getPrice(){

      return $this->Price;

    }

    public function getQuantity(){

      return $this->Quantity;

    }
    public function getTotalPrice(){

      return $this->Quantity* $this->Price;

    }

    
}


?>