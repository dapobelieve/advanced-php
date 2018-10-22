<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>References as aragument</title>
</head>
<body>

<?php
function refTest(&$var)
{
    $var = $var * 2;
}
$a = 50;
refTest($a);
echo $a;

?>
    
</body>
</html>