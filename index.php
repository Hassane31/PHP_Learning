<?php 
//FOREACH LOOP 

$countries = ["EG","DZ","FR","USD","UK","USK"];
echo'<pre>';
print_r($countries);
echo'</pre>';

//foreach($array as $value){ }
foreach($countries as $country){
echo $country.'<br>';
}

//foreach($array as $key => $value){  }
$countries_with_discount = ["EG"=>50,"DZ"=>100,"FR"=>20,"USD"=>30,"UK"=>23,"USK"=>11];
echo '<pre>';
print_r($countries_with_discount);
echo '</pre>';

foreach($countries_with_discount as $country => $discount):
  echo $country ."-------->" .$discount ."<br>";
endforeach ;