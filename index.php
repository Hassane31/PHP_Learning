<?php
//Function Training And Unpacking Arguments

$group_of_skills = ["html","CSS","JS","bash"];

function get_data($name,$country = "Private",...$skills){
  echo "hello $name ur country $country ur skills are :";
  foreach($skills as $skill):
  echo " $skill ";
  endforeach;
}

get_data("hassane","Algeria",...$group_of_skills);
//display
//hello hassane ur country Algeria ur skills are : html CSS JS bash 
