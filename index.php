<?php
//Filter List , Filter ID , Filter Var 

echo "<pre>";
print_r(filter_list());
echo "</pre>";

echo filter_id("boolean"); // 258 
echo"<br>"; 
$val = "on1" ;

// if (filter_var($val,258))
if (filter_var($val,FILTER_VALIDATE_BOOL)){//use FILTER_VALIDATE_BOOL or use id = 258  
echo "this is true ";
}
else {
echo "this is false ";
}