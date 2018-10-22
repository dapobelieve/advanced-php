<?php

class Box 
{
    public $name = 'box';
}

$box = new Box();

$boxReference = $box;

$boxClone = clone $box;

$boxChanged = clone $box;
$boxChanged->name = 'Sphere';

$anotherBox = new Box();

echo $box == $boxReference ? 'true' : 'false'; //true
echo '<br>';
echo $box == $boxClone ? 'true' : 'false'; //true
echo '<br>';
echo $box == $boxChanged ? 'true' : 'false'; //false
echo '<br>';
echo $box == $anotherBox ? 'true' : 'false'; //true
echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';


echo $box === $boxReference ? 'true' : 'false'; //true
echo '<br>';
echo $box === $boxClone ? 'true' : 'false'; //true
echo '<br>';
echo $box === $boxChanged ? 'true' : 'false'; //false
echo '<br>';
echo $box === $anotherBox ? 'true' : 'false'; //true
echo '<br>';
echo '<br>';

?>