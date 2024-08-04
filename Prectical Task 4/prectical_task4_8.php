<!-- Write a PHP program to get the index of the highest value in an associative
array. -->
<?php
$numbers = array(
    "a" => 10,
    "b" => 20,
    "c" => 15,
    "d" => 25,
    "e" => 30
);
$maxValue = max($numbers);
$indexOfMaxValue = array_search($maxValue, $numbers);
echo "<h2> Index of the highest value ($maxValue): $indexOfMaxValue </h2>";
?>