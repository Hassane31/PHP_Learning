<?php
////string functions part 2 
$friends = ["hassane","mhmd","iness","yns"]; 
echo implode(" ",$friends)."<br>";
echo implode("< ",$friends)."<br>";
echo implode("@@",$friends)."<br>";
echo implode($friends)."<br>";

$str = "I hate laabane hassane";
echo "<pre>";
print_r(explode(" ", $str));
echo "</pre><br>";
//display 
//     [0] => I
//     [1] => hate
//     [2] => laabane
//     [3] => hassane

echo "<pre>";
print_r(explode("l", $str));
echo "</pre>";

//dislay 
//     [0] => I hate 
//     [1] => aabane hassane

echo "<pre>";
print_r(explode(" ", $str,3));
echo "</pre>";

// display 
//     [0] => I
//     [1] => hate
//     [2] => laabane hassane

echo "<pre>";
print_r(explode(" ", $str,-2));
echo "</pre><br>";

// display 
//     [0] => I
//     [1] => hate

echo str_shuffle("Hassane")."<br>";
echo strrev("Hassane")."<br>";

echo strlen("    hassane    ");// 15
echo "<br>";
echo strlen(trim("    hassane    "));// 7 
echo "<br>";
echo trim("###hassane##","#");//hassane
echo "<br>";
echo trim("###hassane##","#@");//same with 
echo "<br>";
echo trim("#@@@##hassane#@#","@");//no changes  
echo "<br>";
echo rtrim("###hassane##","#");//###hassane
echo "<br>";
echo ltrim("###hassane##","#");//hassane##