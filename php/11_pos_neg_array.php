<?php

$arr = array(10, -5, 6, 7, -4, 33, -9);

for($i = 0; $i < count($arr); $i++)
{
    if ($arr[$i] > 0)
    {
        echo "<br>Possitive Number : " . $arr[$i];
    }

    else
    {
        echo "<br>Negative Number : " . $arr[$i];
    }
}

?>