<?php
require_once (__DIR__.'/Payment/ABA.php');
require_once (__DIR__.'/Payment/PiPay.php');
require_once (__DIR__.'/Payment/Wing.php');

 $payments = [
    new ABA('pen',2,3),
    new ABA('book',3,6),
    new ABA('pencel',2,5),
    new ABA('letter',1,2),
    new ABA('Notebook',1,4),
    new ABA('Roller',5,1),

    new PiPay('ABC',2,5),
    new PiPay('Tiger',3,5),
    new PiPay('Angkor',1,5),
    new PiPay('Gansberg',3,3),


    new Wing('Coca',2,7),
    new Wing('Sting',4,8),
    new Wing('Sammerai',4,4),
    new Wing('Yoes',1,5),
    new Wing('Fanta',4,2),
    new Wing('Spri',2,4),
    
];

echo '<p>1.Number of sales by ABA method</p>';

$NumberOfSalesByABA = 0;
foreach( $payments as $pay)
{
    $NumberOfSalesByABA += $pay->paymentMethod() === 'ABA'? 1:0;
}

echo '<p>Number of sales by ABA method: '.$NumberOfSalesByABA.'</p>';

echo '<p>2.Number of sales by PiPay and Wing method</p>';

$NumberOfSalesByPiPay = 0;
$NumberOfSalesByWing = 0;

foreach( $payments as $pay)
{

    $NumberOfSalesByPiPay += $pay->paymentMethod() === 'PiPay'? 1:0;
    $NumberOfSalesByWing += $pay->paymentMethod() === 'Wing'? 1:0;

}

echo '<p>Number of sales by PiPay and Wing method: '.$NumberOfSalesByPiPay + $NumberOfSalesByWing.'</p>';


function displayTableResult($payments)
{
    
    $str = '<table border = "1" ><tr><th>Items</th><th>Price</th><th>Quantity</th><th>Method</th><th>Total</th></tr>';
   
    foreach($payments as $pay)
    {
        $str.= '<tr><td>'.$pay->getItemsName().'</td><td>'.$pay->getPrice().'</td><td>'.$pay->getQuantity().'</td><td>'.$pay->paymentMethod().'</td><td>'.$pay->getTotalPrice().'</td></tr>';
    }
    $str .= '</table>';

    return $str;
}
echo '<p>3.Display all sales ordering by biggest total amount</p>';

usort($payments, fn($s1, $s2) => $s1->getTotalPrice() <=> $s2->getTotalPrice());

echo displayTableResult($payments);
?>