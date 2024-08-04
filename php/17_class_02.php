<?php

class demo
{
    function __construct()
    {
        echo "in constructor\n";
        echo "<br>";
    }

    function __destruct()
    {
        echo "in destructor\n";
    }
}

$obj = new demo();
?>