<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Formating Unix timestamp</title>
</head>
<body>

<?php

// strftime(format) better than date(format)

$mybday = mktime(10, 4, 5, 6, 27, 1993);

echo strftime("i was born on a %m / %d / %y", $mybday);
echo "<br>";

// mysql date time


echo strftime("%Y-%m-%d %H:%M:%S", $mybday);


?>
    
</body>
</html>