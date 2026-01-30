<?php
//Function introduction and DRY concept 


echo 'hello hassane<br>';
echo 'hello hayza<br>';
echo 'hello iness<br>';
echo 'hello yns<br>';

echo '<br>#############<br>';

function say_hello($someone){
    echo "hello sir $someone<br>";

}


say_hello("Iness"); 
say_hello("hassane"); 
say_hello("hyza"); 
say_hello("Iness"); 