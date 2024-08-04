<html>
<body>
    <form method = "POST">
        Enter The Number1 : <br>
        <input type = "number" name = "num1"></br>
        <br>
        Enter The Number2 : <br>
        <input type = "number" name = "num2"></br>
        <br>
        <input type = "Submit" name = "Submit" value = "Submit">

        <?php

        if (isset($_POST['Submit']))
        {
            $num1 = $_POST['num1'];
            $num2 = $_POST['num2'];

            if ($num1 != $num2)
            {
                echo "<br><br>";
                echo $num1 + $num2;
            }

            else
            {
                echo "<br><br>";
                $sum = $num1 + $num2;
                echo "Sum : " . $sum;
                echo "<br><br> Sum * 3 : " . $sum * 3;
            }
        }

        ?>
    </form>
</body>
</html>