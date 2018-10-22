<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>DatesTime: unix</title>
</head>
<body>
<?php

echo time();

echo "<br> <br>";


echo mktime(10, 4, 5, 6, 27, 1993);

echo "<br>";

// checking date
echo checkdate(2, 31, 2018);

echo "<br>";

echo strtotime("next week");

?>

    
</body>
</html>