<?php
//Do while and for Loop

//Do while
$a = 0;
  do {
    echo"$a<br>";
    $a++;
    }
    while($a<= 3);


//For loop
  echo"<br>";
echo 'for loop ';
  echo"<br>";

for($i=0;$i<10;$i++){
  echo"$i<br>";
}
 echo"$i<br>";
echo 'another syntax ';
 
$index=0 ;
for(;;){
if($index ==4){
  break ;
}
echo "$index <br>";
$index++;

}
//alternate syntax
 echo"<br>alternate syntax<br>";
for($i=0;$i<10;$i++):
  echo"$i<br>";
endfor;
 echo"<br>";
