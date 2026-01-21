<?php
//Heredoc And Nowdoc



$name = "hassane"; 
echo <<<"Here"
hello PHP
Special characters $$$ ''' """" \\\
hello my name is $name
Here;
echo '<br>';
echo '<br>';


//Nowdoc
echo <<< 'now'
hello PHP
speacial characters $$$ ''' """" \\\\
Hello my name is $name
now;

echo '<br>';

echo '<ul>';
echo '<li>'.$name . '</li>';
echo '<li>'.$name . '</li>';
echo '<li>'.$name . '</li>';
echo '<li>'.$name . '</li>';
echo '</ul>';
echo '<br>';
echo <<< "navlinks"
<ul>
<li>$name </li>
<li>$name </li>
<li>$name </li>
<li>$name </li>
</ul>
navlinks;
echo '<br>';

echo '<br>';

