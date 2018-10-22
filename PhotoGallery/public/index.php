<?php
require_once ('../includes/Database.php');
require_once ('../includes/User.php');

$user = User::findById(2);

echo json_encode($user->first_name);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Photo Gallery</title>
</head>
<body>

<?php

    $bodytag = str_replace("%body%", "black", "<body text='%body%'>");

    // Provides: Hll Wrld f PHP
    $vowels = array("a", "e", "i", "o", "u", "A", "E", "I", "O", "U");
    $onlyconsonants = str_replace($vowels, "", "Hello World of PHP");

    // Provides: You should eat pizza, beer, and ice cream every day
    $phrase  = "You should eat fruits, vegetables, and fiber every day.";
    $healthy = array("fruits", "vegetables", "fiber");
    $yummy   = array("pizza", "beer", "ice cream");

    $newphrase = str_replace($healthy, $yummy, $phrase);

    // Provides: 2
    $str = str_replace("ll", "", "good golly miss molly!", $count);
    echo $bodytag;

?>
    
</body>
</html>