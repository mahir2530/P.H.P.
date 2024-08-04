<!DOCTYPE html>
<html>
<head>
    <title>Form Table</title>
</head

<body>
    <form method = "POST">
        num : <input type = "number" name ="num" required = "number">
        <br><br>
        <input type = "Submit" name = "Submit">
        <br><br>

        <?php
        if(isset($_POST['Submit']))
        {
            $a = $_POST['num'];
            $fact = 1;

            for($i = $a;$i >= 1;$i --)
            {
                $fact = $fact * $i;
            }

            echo "Factorial : $fact";
        }
        ?>
    </form>
</body>
</html>
