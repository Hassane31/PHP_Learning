<?php
//Filtre var validate filters Part-2 

$email = "Iness@gmail.com";

var_dump(filter_var($email,FILTER_VALIDATE_EMAIL,FILTER_NULL_ON_FAILURE));
// string(15) "Iness@gmail.com"
echo "<br>";

$int = "100";
var_dump(filter_var($int,FILTER_VALIDATE_INT,FILTER_NULL_ON_FAILURE));
// int(100)
echo "<br>";

$int = "51";
var_dump(filter_var(
$int,FILTER_VALIDATE_INT,
["flags" => FILTER_NULL_ON_FAILURE ,"options" => ["min_range" => 50,"max_range" => 100 ]]
));//int(51)
echo "<br>";
    
$int = 90.00;
var_dump(filter_var(
$int,FILTER_VALIDATE_INT,
["flags" => FILTER_NULL_ON_FAILURE ,"options" => ["min_range" => 50,"max_range" => 100 ]]
));//int(90)

$int = "90.00";
var_dump(filter_var(
$int,FILTER_VALIDATE_INT,
["flags" => FILTER_NULL_ON_FAILURE ,"options" => ["min_range" => 50,"max_range" => 100 ]]
));//NULL



//same same with float 
$float = "90.01";
var_dump(filter_var(
$float,FILTER_VALIDATE_FLOAT,
["flags" => FILTER_NULL_ON_FAILURE ,"options" => ["min_range" => 50,"max_range" => 100 ]]
));//float(90.0100000000000051159076974727213382720947265625)
