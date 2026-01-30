<?php 
//function return and echo 

$prizes=["PC","playstation","XBOX","Appel","TV","laptop","ipad","iphone"];

function get_num($num1,$num2){
    return $num1 + $num2 ;
    echo 'will not echo anything';
    }
// get_num(1,2);//3
// $prizes[3];
 echo '<br>';
$prize_number = get_num(1,2);
echo $prizes[$prize_number];