<?php

$arr = array(2, 5, 8, 6, 55);

for($i = 0; $i < count($arr); $i++)
{
    if($arr[$i]%2 == 0)
    {
        echo "<br>Even Number : " . $arr[$i];
    }

    else
    {
        echo "<br>Odd Number : " . $arr[$i];
    }
}

?>