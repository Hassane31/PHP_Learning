<?php
//Assign By Value And By Reference

$a = 'hassane';
$b = &$a ;
$b = "younes";

echo $a;
echo '<br>';
echo $b ;
echo '<br>';

/*display 

younes
younes

*/
$a = 'howari ';

echo $a;
echo '<br>';
echo $b ;
echo '<br>';

/*display 

howari
howari

*/
