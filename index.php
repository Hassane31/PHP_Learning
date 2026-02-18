<?php
//Array functions part-1 

$friends = array("Rafi", "Shuvo", "Sabbir", "Shakil", "Sabbir", "Shakil");

echo '<pre>';
print_r(array_chunk($friends,2));  
echo '</pre>';

// Array
// (
//     [0] => Array
//         (
//             [0] => Rafi
//             [1] => Shuvo
//         )

//     [1] => Array
//         (
//             [0] => Sabbir
//             [1] => Shakil
//         )

//     [2] => Array
//         (
//             [0] => Sabbir
//             [1] => Shakil
//         )

// )

$coutries = [
    "Bangladesh" => "Dhaka",
    "India" => "Delhi",
    "Pakistan" => "Islamabad",
    "Nepal" => "Kathmandu",
    "Bhutan" => "Thimphu"
];

echo '<pre>';
print_r(array_chunk($coutries,2,True));  
echo '</pre>';

// Array
// (
//     [0] => Array
//         (
//             [Bangladesh] => Dhaka
//             [India] => Delhi
//         )

//     [1] => Array
//         (
//             [Pakistan] => Islamabad
//             [Nepal] => Kathmandu
//         )

//     [2] => Array
//         (
//             [Bhutan] => Thimphu
//         )

// )

echo '<pre>';
print_r(array_change_key_case($coutries));  
echo '</pre>';

//     [bangladesh] => Dhaka
//     [india] => Delhi
//     [pakistan] => Islamabad
//     [nepal] => Kathmandu
//     [bhutan] => Thimphu

echo '<pre>';
print_r(array_change_key_case($coutries,CASE_UPPER));  
echo '</pre>';

//     [BANGLADESH] => Dhaka
//     [INDIA] => Delhi
//     [PAKISTAN] => Islamabad
//     [NEPAL] => Kathmandu
//     [BHUTAN] => Thimphu

$keys = array("a", "b", "c", "d", "e");
$values = array("Rafi", "Shuvo", "Sabbir", "Shakil", "Sabbir");

echo "<pre>";
print_r(array_combine($keys,$values));  
echo "</pre>";

//     [a] => Rafi
//     [b] => Shuvo
//     [c] => Sabbir
//     [d] => Shakil
//     [e] => Sabbir


$counting = array("Rafi", "Shuvo", "Sabbir", "Shakil", "Sabbir");

echo "<pre>";   
print_r(array_count_values($counting));
echo "</pre>";

    // [Rafi] => 1
    // [Shuvo] => 1
    // [Sabbir] => 2
    // [Shakil] => 1


    