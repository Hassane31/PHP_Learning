<?php 
//array operators 

$arr1 =[1 => "A",2 => "b",3 => "C",];
$arr2 =[4 => "D",5 => "E",6 => "F",];

echo '<pre>';
print_r ($arr1 + $arr2) ;
echo '</pre>';

$arr4 = [1 => "10",2 => "20"];
$arr5 = [2 => 20,1 => 10];

var_dump($arr4 == $arr5 );//true 
echo '<br>';
var_dump($arr4 <> $arr5 );//false 


echo '<br>';
$arr6 = [1 => 10,2 => 20];
$arr7 = [1 => 10,2 => 20];

var_dump($arr6 === $arr7);//