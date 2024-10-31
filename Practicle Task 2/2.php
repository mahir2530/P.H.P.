#Write a PHP Program to test whether a number is greater than 30, 20 or 10 using ternary operator.

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Document</title>
</head>

<body>
    <form method="POST">
        Enter a : <input type="text" name="a">
        Enter b : <input type="text" name="b">
        Enter c : <input type="text" name="c">
        <input type="submit" name="submit" value="click">
    </form>

    <?php
    if (isset($_POST['submit'])) {
        $A = $_POST['a'];
        $B = $_POST['b'];
        $C = $_POST['c'];

        $d=($A>$B)?"A is Greater ":"B is Greater";
        echo"$d";
        echo"<br>";

        $d=($B>$C)?"B is Greater ":"C is Greater";
        echo"$d";
        echo"<br>";

    }
    ?>
</body>

</html>
