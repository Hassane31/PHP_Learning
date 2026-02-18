<?php
//Array Functions part-2

$familly = ["osama", "ahmed", "mohamed", ["iness", "mona"]];

echo "<pre>";
print_r($familly);
print_r(array_reverse($familly, true));//true to preserve keys
echo "</pre>";

// Array
// (
//     [3] => Array
//         (
//             [0] => iness
//             [1] => mona
//         )

//     [2] => mohamed
//     [1] => ahmed
//     [0] => osama
// )


$countries = [
      "EG"=>"egypt",
      "US"=>"united states",
      "KSA"=>"saudi arabia",
      "USA"=>"united states",
      "SPAIN"=>"spain"];

echo "<pre>";
print_r($countries);
print_r(array_flip($countries));
echo "</pre>";

    // [egypt] => EG
    // [united states] => USA
    // [saudi arabia] => KSA
    // [spain] => SPAIN

$counting = ["A","B","C",["d","e"]];
echo "<br>";
echo count($counting,1);// 4   if we use 1 or true it will count the nested array as well ["d","e"]
echo "<br>";

//in array() function
//in_array(value,array,strict)  strict is optional and default is false 
 
$search = ["1",2,3,4];

if(in_array(1,$search,true)){//true to check type as well
    echo "found";
}else{
    echo "not found";   }


//array_key_exists(key,array)  check if the key exist in the array or not

$keys = ["PHP"=>100,
         "JS"=>200,
         "HTML"=>300];
       

if(array_key_exists("PHP",$keys)){
    echo "<br>key exist and the price is ".$keys["PHP"];
}else{
    echo "<br>key not exist";}

    //key exist and the price is 100
    