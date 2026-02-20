<?php
// Sample numbers
$a = -15;
$b = 4;
$c = 3.7;
$d = 10.5;
$e = 25;

// abs() → absolute value (remove negative sign)
echo "abs($a) = " . abs($a) . "<br>"; // Result: 15

// mt_rand() → random number (example result will change each run)
echo "mt_rand(1, 100) = " . mt_rand(1, 100) . "<br>"; // Result: random number between 1 and 100

// intdiv() → integer division (no decimal)
echo "intdiv($e, $b) = " . intdiv($e, $b) . "<br>"; // Result: 6 (because 25 / 4 = 6.25 → 6)

// fmod() → remainder of division (with decimals)
echo "fmod($d, $c) = " . fmod($d, $c) . "<br>"; // Result: 3.1 (10.5 % 3.7)

// ceil() → round UP to nearest integer
echo "ceil($c) = " . ceil($c) . "<br>"; // Result: 4

// floor() → round DOWN to nearest integer
echo "floor($c) = " . floor($c) . "<br>"; // Result: 3

// round() → normal rounding
echo "round($c) = " . round($c) . "<br>"; // Result: 4

// sqrt() → square root
echo "sqrt($e) = " . sqrt($e) . "<br>"; // Result: 5

// min() → smallest value
echo "min(5, 2, 9, 1) = " . min(5, 2, 9, 1) . "<br>"; // Result: 1

// max() → largest value
echo "max(5, 2, 9, 1) = " . max(5, 2, 9, 1) . "<br>"; // Result: 9
?>