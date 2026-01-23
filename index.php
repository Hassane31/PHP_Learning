<?php
//Predefined And Magic Constants And Reserved Keywords

echo php_uname();  //show OS information

echo '<br>';
echo PHP_VERSION;//show version php
echo '<br>';
echo PHP_OS_FAMILY; //os
echo '<br>';
echo PHP_INT_MAX; // max integer
echo '<br>';
echo DEFAULT_INCLUDE_PATH;//show pTH of file php {/opt/lampp}
echo '<br>';
echo __FILE__;//project file 
echo '<br>';
echo __LINE__;
echo '<br>';
//list of reserved words (exemple :BREAK)
echo '<br>';

//no problem here 
function hello(){
    return 'hello';
}
echo hello ();

//reserved word 
function clone(){
    return 'clone';
}
echo clone();