<?php
//Function Variable arguments list
function calculator($num1,$num2,$num3){
 echo "Number of argument is : ".func_num_args()."<br>";
 echo "Number inside the argument '3' is : ".func_get_arg(2);
 echo "<pre>";
 print_r(func_get_args());
 echo "</pre><br>";
 $result = 0;
 foreach(func_get_args() as $arg):
  $result += $arg;
 endforeach; 
 echo $result;
}
calculator(43,99,22);
echo"<br><br><br>###############################################<br><br><br>";


//Spread syntax In JS
function calculator2(...$nums){//make all arguments in $nums=[143,199,122]
 print_r($nums);
 $result2 = 0;
 foreach($nums as $num):
  $result2 += $num;
 endforeach;
 echo "<br><br>".$result2; 
 }
calculator2(143,199,122);

