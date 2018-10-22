<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Array Functions</title>
</head>
<body>

<?php

$numbers = array(1,2,3,4,5,6);

echo "<br><br>";

// gets the first item in the array
$a = array_shift($numbers);


// put an item in the first position of an array
$b = array_unshift($numbers, 'first');

//adds and returns to the last element of an array7
array_push(array, var)

// removes n returns the last element of an array
array_pop(array)

echo $b;
echo "<br><br>";

print_r($numbers);

?>
    
</body>
</html>