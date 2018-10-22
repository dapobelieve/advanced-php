<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>References Assignment</title>
</head>
<body>

<?php

$a = 1;
$b = $a;
$b = 2;
// returns a = 1; b = 2;
$a = 1;
$b =& $a; //b is now pointing to (referencing the same memory address as a)
$b = 2;
// returns a =2 ; b =2


?>
    
</body>
</html>