<?php 

class Task1 { 
public function Say() { 
	echo "Hello"; 
} 
} 


trait Task { 
public function For() { 
	echo " ITE"; 
} 
} 

class Sample extends Task1 { 
use Task; 
public function test() { 
	echo "\nWelcome to ITE"; 
} 
} 

$test = new Sample(); 
$test->Say(); 
$test->For(); 
$test->Test(); 
?> 
