#If the numbers are the same, it will multiply their sum by 3; otherwise, it will simply add the two numbers.

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Document</title>
</head>

<body>
    <form method="POST">
        Enter a : <input type="text" name="a">
        Enter b : <input type="text" name="b">
        <input type="submit" name="submit" value="click">
    </form>

    <?php
    if (isset($_POST['submit'])) {
        $a = $_POST['a'];
        $b = $_POST['b'];
        
        if ($a == $b) {
           $sum=($a+$b)*3;
           echo"Sum : ",$sum;
        }
        else{
            $sum=$a+$b;
            echo"Sum : ",$sum;

        }
    }
    ?>
</body>

</html>
