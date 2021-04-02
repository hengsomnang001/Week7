<?php 
function sum($num) { 
    $sum = 0; 
    for ($i = 0; $i < strlen($num); $i++){ 
        $sum += $num[$i]; 
    } 
    return $sum; 
} 

$num = "23"; 
echo sum($num),","; 
$num = "234"; 
echo sum($num),",";
$num = "2345"; 
echo sum($num);  
?> 