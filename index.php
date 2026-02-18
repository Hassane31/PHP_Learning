<?php
//Array Functions

$friends = array("Kevin", "Karen", "Oscar","Kevin", "Angela", "Andy","1",1);

echo "<pre>";
print_r(array_keys($friends));
echo "</pre>";

    // [0] => 0
    // [1] => 1
    // [2] => 2
    // [3] => 3
    // [4] => 4
    // [5] => 5
    // [6] => 6
    // [7] => 7

echo "<pre>";
print_r(array_keys($friends,"Kevin"));
echo "</pre>";

    // [0] => 0
    // [1] => 3

echo "<pre>";
print_r(array_keys($friends,1));
echo "</pre>";

    // [0] => 6
    // [1] => 7

echo "<pre>";
print_r(array_keys($friends,1,true)); //true for strict type checking
echo "</pre>";

    // [0] => 7

$countries = array("Italy"=>"Rome", "Luxembourg"=>"Luxembourg", "Belgium"=> "Brussels", "Denmark"=>"Copenhagen", "Finland"=>"Helsinki");
echo "<pre>";
print_r(array_values($countries));
echo "</pre>";

    // [0] => Rome
    // [1] => Luxembourg
    // [2] => Brussels
    // [3] => Copenhagen
    // [4] => Helsinki

$pad = array(12,10,9);
echo "<pre>";
print_r(array_pad($pad,7,"Pad"));
echo "</pre>";  

    // [0] => 12
    // [1] => 10
    // [2] => 9
    // [3] => Pad
    // [4] => Pad
    // [5] => Pad
    // [6] => Pad


echo "<pre>";
print_r(array_pad($pad,-7,"Pad"));
echo "</pre>";  

    // [0] => Pad
    // [1] => Pad
    // [2] => Pad
    // [3] => Pad
    // [4] => 12
    // [5] => 10
    // [6] => 9

$proudct = [15, 30, 20];

echo array_product($proudct); //9000

echo "<br>" ;

echo array_sum($proudct); //65
