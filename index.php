<?php 
//ternary conditional operator 
$a = 2;
$feeling = $a ;
$result = $a ;

//echo $a == 3 ? "good" :"bed";

echo "<br>";

echo "I ".($a>10 ? "love":"hate")." Php because its a ".($a>10 ? "good":"bed")." languge";

echo "<br>";


$feeling = $a > 10 ? "love":"hate";
$result  = $a > 10 ? "good":"bed";

echo "I ".$feeling." Php because its a ".$result." languge";

