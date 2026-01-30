<?php
//Function Default parameter value

// function get_data($name,$country,$age,$adress){
//     if($adress == ""){
//       $adress = "Private adress ";
//     }
//     $line1 = "hello im $name from $country <br>";
//     $line2 = "im $age i live in $adress";
//      return $line1.$line2;
// }
// echo get_data("iness","algeria","22","");

function get_data($name,$country,$age=20,$adress="Private Adress"){
    if($adress == ""){
      $adress = "Private adress ";
    }
    $line1 = "hello im $name from $country <br>";
    $line2 = "im $age i live in $adress";
     return $line1.$line2;
}
echo get_data("iness","algeria",adress:"oran");//if u want to fill jast last argemant