<!-- $color = array(4 => 'white', 6 => 'green', 11=> 'red');
Write a PHP script to get the first element of the above array.
Expected result : white -->
<?php
$color = array(
    4 => 'white', 
    6 => 'green', 
    11=> 'red'
);
reset($color);
$first_element = current($color);
echo "<h1>The first element of the array is: $first_element</h1>";
?>