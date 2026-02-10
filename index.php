<?php
//built in String Functions - Part 5

parse_str("name=Hassane&Email=hassane@gmail&OS=linux",$query);
                                        
echo '<pre>';
print_r($query);
echo '</pre>';

//     [name] => Hassane
//     [Email] => hassane@gmail
//     [OS] => linux

echo "hello () [] * + . <br>";
echo quotemeta("hello () [] * + . <br>"); //skipping any cc has problem 
echo "<br>";
echo $query["name"]."<br>";
echo $query["Email"]."<br>";
echo $query["OS"]."<br>";
echo "<br>";
echo "<br>";

echo str_pad("123",8,0)."<br>";
echo str_pad("1234",8,0)."<br>";
echo str_pad("12345",8,0)."<br>";
echo str_pad("123456",8,0)."<br>";
echo str_pad("1234567",8,0)."<br>";

// 12300000
// 12340000
// 12345000
// 12345600
// 12345670
echo "<br>";echo "<br>";

echo str_pad("123",8,0,STR_PAD_BOTH)."<br>";
echo str_pad("1234",8,0,STR_PAD_BOTH)."<br>";
echo str_pad("12345",8,0,STR_PAD_LEFT)."<br>";
echo str_pad("123456",8,0,STR_PAD_LEFT)."<br>";
echo str_pad("1234567",8,0,STR_PAD_LEFT)."<br>";

// 00123000
// 00123400
// 00012345
// 00123456
// 01234567

echo "<br>";echo "<br>";

echo strtr("La@bane H@ss@ne","@","a");// Laabane Hassane
echo "<br>";echo "<br>";
echo strtr("La@bane H@ss@ne","@","a");// Laabane Hassane
echo "<br>";echo "<br>";

$translation = ["@"=>"a","#"=>"s"];
echo strtr("L@@b@ne H@##@ne",$translation);//Laabane Hassane

