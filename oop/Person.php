<?php


class Person 
{
    public $legs = 4;
    function hey()
    {
        echo 'Hey Dear, xup';
    }

}
$a = new Person();
$c = clone $a;

$c->legs = 8;

echo $a->legs."<br>";
echo $c->legs."<br>";



// $classes = get_declared_classes();

// // class_exists(class_name)

// foreach($classes as $class) {
//     echo $class."<br>";
// }