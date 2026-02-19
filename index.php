<?php
//Current, Next, Prev, Reset, End

$friends = ["Alice", "Bob", "Charlie", "David", "Eve"];

echo "Current: " . current($friends) . "<br>"; // Alice
echo "Next: " . next($friends) . "<br>"; // Bob
echo "Current: " . current($friends) . "<br>"; // bob
echo "Next: " . next($friends) . "<br>"; // Charlie
echo "Prev: " . prev($friends) . "<br>"; // Bob
echo "Reset: " . reset($friends) . "<br>"; // Alice
echo "End: " . end($friends) . "<br>"; // Eve
echo "Current: " . current($friends) . "<br>"; // Eve



// Current: Alice
// Next: Bob
// Current: Bob
// Next: Charlie
// Prev: Bob
// Reset: Alice
// End: Eve
// Current: Eve