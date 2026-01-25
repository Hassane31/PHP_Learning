<?php 
//logical Operators 

/*
&&  =>  and 
||  =>  or 
xor =>  Xor 
!   =>  Not
*/

var_dump(100 > 50 and 20 =='20');//true
echo '<br>';
var_dump(100 > 50 && 20 =='220');//false
echo '<br>';
var_dump(100 > 50 or 20 =='20');//true
echo '<br>';
var_dump(100 > 50 || 20 =='210');//true
echo '<br>';
var_dump(100 > 50 xor 20 =='210');//true
echo '<br>';
var_dump(100 > 50 xor 20 =='20');//false
echo '<br>';
  