<?php
//Switch 


$day = "sat";

switch($day){
    case "sat" :
      echo "Hello to day is $day we are open From 10:20 am";
      break; 
    case "sun":
    case "mon":
    case "thus":
    case "wed":
      echo "Hello to day is $day we are open From 8:00 am";
      break;
    case "thar" :
      echo "Hello to day is $day we are open From 10:00 am";
    break;
default : echo "Unknown day !!! ";
}