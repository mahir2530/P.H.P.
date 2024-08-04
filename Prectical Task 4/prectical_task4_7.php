<!-- Write a PHP script to sort the following associative array :
array("Sophia"=>"31","Jacob"=>"41","William"=>"39","Ramesh"=>"40") in
a) ascending order sort by value
b) ascending order sort by Key
c) descending order sorting by Value
d) descending order sorting by Key  -->
<?php
    $people=array(
        "Sophia"=>"31",
        "Jacob"=>"41",
        "William"=>"39",
        "Ramesh"=>"40"
    );
    echo "<h2>ascending order sort by value : <br>";
    asort($people);
    foreach($people as $key=>$value)
    {
        echo "Key : ".$key." , "." Value : ".$value." ";
        echo "<br>";
    }
    echo "<br>";
    echo "ascending order sort by Key : <br>";
    ksort($people);
    foreach($people as $key=>$value)
    {
        echo "Key : ".$key." , "." Value : ".$value." ";
        echo "<br>";
    }
    echo "<br>";
    echo "descending order sorting by Value : <br>";
    arsort($people);
    foreach($people as $key=>$value)
    {
        echo "Key : ".$key." , "." Value : ".$value." ";
        echo "<br>";
    }
    echo "<br>";
    echo "descending order sorting by Key  : <br>";
    krsort($people);
    foreach($people as $key=>$value)
    {
        echo "Key : ".$key." , "." Value : ".$value." ";
        echo "<br>";
    }
    echo "<br>";
    echo "</h2>";
?>