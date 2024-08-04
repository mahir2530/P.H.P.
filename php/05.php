<!DOCTYPE html>
<html>
<head>
    <title>Swap Values Using Two Variables</title>
</head>
<body>
    <?php

        $a = 25;
        $b = 35;

        echo "<p>Before Swapping:<br> a:$a, b:$b</br</p>";

        $a = $a + $b;
        $b = $a - $b;
        $a = $a - $b;

        echo "<p>After Swapping:<br> a:$a, b:$b</br></p>";
    
    ?>
</body>
</html>