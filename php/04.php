<!DOCTYPE html>
<html>
<head>
    <title>Swap Values Using Three Variables Example</title>
</head>
<body>
    <?php

        $a = 5;
        $b = 10;

        echo "Before swapping:<br> a = $a, b = $b</br>";

        $temp = $a;
        $a = $b;
        $b = $temp;

        echo "After swapping: <br>a = $a, b = $b</br>";
    ?>
</body>
</html>
