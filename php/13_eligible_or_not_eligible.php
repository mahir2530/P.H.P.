<!DOCTYPE html>
<html>
<head>
    <title>Form Table</title>
</head

<body>
    <form method = "POST">
        age : <input type = "number" name ="age">
        <br><br>
        <input type = "Submit" name = "Submit">
        <br><br>

        <?php
        if(isset($_POST['Submit']))
        {
            $a = $_POST['age'];
            if($a >= 18)
            {
                echo "<p style = 'color:green;'> You are Eligible... </p>";
            }

            else
            {
                echo "<p style = 'color:red;'> You are Not Eligible... </p>";
            }
        }
        ?>
    </form>
</body>
</html>
