<?php
//String access And update elements
$str = "HassaneLaabane";

echo $str[0];//H
echo $str[3];//s
echo $str[7];//3
echo '<br>';
echo "Nbr of letters is ".strlen($str);
echo '<br>';
echo "Last letter is $str[-1]";//e
echo '<br>';
echo "Last letter is {$str[strlen($str)-1]}";//e

$str[16]="I";//index dosnt exists 
echo $str;//" HassaneLaabane I "
