<?php 
//Comparison Operators - Part 2


var_dump(100 <= 100 );//true
echo '<br>';
var_dump(100 >= "100");//true
echo '<br>';




echo '################'; 
echo '<br>';
var_dump (100 > "100");//false
echo '<br>';
var_dump (100 < "100");//false  
echo '<br>';


echo '################';
echo '<br>';
var_dump(100<=>200); //-1
echo '<br>';
var_dump(200<=>200);//0
echo '<br>';
var_dump(100<=>50);//1

