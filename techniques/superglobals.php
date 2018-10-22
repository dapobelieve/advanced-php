<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Super Globals</title>
</head>
<body>
<?php
// $_GET
// $POST
// $_COOKIE
// $_SESSION
// $_SERVER 


// SERVER VARIABLES
echo "Page Details <br>";
echo "SERVER NAME: ". $_SERVER['SERVER_NAME'] ."<br>";
echo "SERVER ADDR: ". $_SERVER['SERVER_ADDR'] ."<br>";
echo "SERVER PORT: ". $_SERVER['SERVER_PORT'] ."<br>";
echo "DOCUMENT ROOT: ". $_SERVER['DOCUMENT_ROOT'] ."<br>";

echo "<hr>";

//PAGE DETAILS
echo "Page Details <br>";
echo "PHP SELF: ". $_SERVER['PHP_SELF'] ."<br>";
echo "SCRIPT FILENAME: ". $_SERVER['SCRIPT_FILENAME'] ."<br>";
echo "<hr>";

echo "Request Details <br>";
echo "REMOTE ADDR: ". $_SERVER['REMOTE_ADDR'] ."<br>";
echo "REMOTE PORT: ". $_SERVER['REMOTE_PORT'] ."<br>";
echo "REQUEST URI: ". $_SERVER['REQUEST_URI'] ."<br>";
echo "QUERY STRING: ". $_SERVER['QUERY_STRING'] ."<br>";
echo "REQUEST TIME: ". $_SERVER['REQUEST_TIME'] ."<br>";
echo "REQUEST METHOD: ". $_SERVER['REQUEST_METHOD'] ."<br>";
echo "HTTP REFERER: ". $_SERVER['HTTP_REFERER'] ."<br>";
echo "HTTP_USER_AGENT: ". $_SERVER['HTTP_USER_AGENT'] ."<br>";

echo "<hr>";


?>
    
</body>
</html>