<?php
include And require 

//include 
include("aas,ld,asda.php");//$a = 10;  still work 
echo "$a<br>";

//require 
require("a.php");
echo "$a<br>";
echo "continue";


include_once("a.php");
echo "$a<br>";
$a=20;

include_once("a.php");
echo "$a<br>";
