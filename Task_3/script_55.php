<?php
$myArray = array(
    'first_name' => 'John',
    'last_name' => 'Doe',
    'age' => 30,
    'email' => 'johndoe@example.com'
);
$firstKey = array_key_first($myArray);
$lastKey = array_key_last($myArray);
echo "First Key: $firstKey\n";
echo "<br>";
echo "Last Key: $lastKey\n";
?>
