<?php
//Error Control Operator

$a = 10 ;
$b = @$a or die("var not found !!") ;
echo $b ;

//File
echo '<br>';
$f = @file("file.txt") or die("File not found !!");
echo '<pre>';
print_r($f);
echo '</pre>';

//include 
(@include("hassane.php")) or die("file not Found");
