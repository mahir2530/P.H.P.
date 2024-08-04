<!DOCTYPE html>
<html>
    <head>
        <style type = "text/css">
        th
        {
            background-color : purple;
            padding : 1px;
        }
        </style>
    </head>
<body>
    <form method = "POST">
        Enter RNumber : <br>
        <input type = "number" name = "rno"></br>
        <br>
        Enter Name : <br>
        <input type = "text" name = "name"></br>
        <br>
        Enter Email : <br>
        <input type = "text" name = "email"></br>
        <br>
        <input type = "Submit" name = "Submit" value = "Submit"></br>

        <?php

        if (isset($_POST['Submit']))
        {
            $rno = $_POST['rno'];
            $name = $_POST['name'];
            $email = $_POST['email'];

            echo "<table border = '1px'><tr><th> rolno </th><th> name </th><th> email </th></tr>";
            echo "<br>";
            echo "<tr><td> $rno </td> <td> $name </td> <td> $email </td> </table>";
        }

        ?>
    </form>
    </body>
    </html>