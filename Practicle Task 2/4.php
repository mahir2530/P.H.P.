#4. Write a program to calculate factorial of a number using for loop in php.

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Factorial</title>
</head>
<body>
    <form method="POST">
        Enter a number : <input type="text" name="num">
        <input type="submit" name="submit" value="cheak">
    </form>
    <?php
    if (isset($_POST['submit']))
     {
        $fact=1;
        $num=$_POST['num'];
        for ($i=$num; $i > 0 ; $i--) { 
            $fact=$fact*$i;
        }
        echo "Factorial of $num is  : $fact";
    }
    ?>
</body>
</html>
