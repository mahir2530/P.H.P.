<!-- Create a PHP program which will print addition of two matrices. -->
<?php
$emp=array(
    array(20,55,60),
    array(30,60,70),
    array(15,45,80)
);
$emp1=array(
    array(20,55,60),
    array(30,60,70),
    array(15,45,80)
);
$row=3;
$column=3;
for($i = 0; $i < $row; $i++)
{
    for($j = 0; $j < $column; $j++)
    {
        $sum[$i][$j] = 0;
    }
}
for($i = 0; $i < $row; $i++)
{
    for($j = 0; $j < $column; $j++)
    {
        $sum[$i][$j]=$emp[$i][$j]+$emp1[$i][$j];
    }
}
echo "<h2> Sum Of The Two Matrices : <br><br>";
for($i = 0; $i < $row; $i++)
{
    for($j = 0; $j < $column; $j++)
    {
        echo $sum[$i][$j] . " ";
    }
      echo "<br>";
}
echo "</h2>";
?>