<?php
//Array Reduce 

$nums = [10,50,23,100];

function add($n1 ,$n2){
return $n1 + $n2;
}

echo array_reduce($nums, "add"); //183

echo array_reduce($nums, "add",100); //283 | 100 is the initial value of the accumulator


function add2($carry ,$item){
echo $carry . "<br>"; 
echo $item . "<br>";
echo $carry + $item . "<br>";
echo "------------------<br>";   
return $carry + $item;
}
echo "<br><br><br><br><br>";
echo array_reduce($nums, "add2",100); //283 | 100 is the initial value of the accumulator
// 100
// 10
// 110
// ------------------
// 110
// 50
// 160
// ------------------
// 160
// 23
// 183
// ------------------
// 183
// 100
// 283
// ------------------
// 283