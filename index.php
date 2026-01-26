<?php

//opreratorr precedence
/**
 * Operator precedence
 * || has Greater precedence then OR 
 * && has Greater precedence then AND
 */

echo 2+2+2*3 ;//2+2+6....
echo '<br>';
echo 10 || false ; // 1
echo '<br>';
echo 10 || false || "" || '' || 0 ;// 1 
echo '<br>';
echo var_dump(10 || false );
echo '<br>';
$a = 10 || false ; //$a = (10 || false) => 1
echo $a ; // 1 
echo '<br>';
$b = 10 or false ; //($b = 10) or false => 1 
echo '<br>';
echo $b ; // 10 

