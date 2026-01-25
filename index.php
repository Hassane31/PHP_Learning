<?php
//String Operators

define('ELZERO', '1');


$a = 'hassane';
$b = 'mhmd';
$c = 'yns';

echo "$a $b $c "; //hassane mhmd yns
echo '<br>';
echo "{$a} {$b} {$c} ";//hassane mhmd yns
echo '<br>';
echo $a ." ". $b. " ". $c ;//hassane mhmd yns
echo '<br>';
echo "{$a} {$b} {$c} ".ELZERO .testing() ;//11 

function testing (){
    return 1 ;
}

echo '<br>';

//concatinat 

$x = 'hassane ';
echo $x ;

$x .= ' mhmd';
echo '<br>';
echo $x ;

$x .= ' yns';
echo '<br>';
echo $x ;

//display hassane
//hassane
//hassane mhmd
//hassane mhmd yns

echo '<br>';