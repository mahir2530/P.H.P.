<!DOCTYPE html>
<html>
    <head>
        <title>Form Table</title>
    </head

<body>
    <form method = "POST">
        Name : <input type = "text" name ="name">
        <br><br>
        Password : <input type = "text" name = "password">
        <br><br>
        email : <input type = "text" name = "email">
        <br><br>
        <input type = "Submit" name = "Submit">
        <br><br>
    

    <table border ="1">
        <tr>
            <td>name</td>
            <br>
            <td>password</td>
            <br>
            <td>email</td>
            <br>
        </tr>

        <?php

        if(isset($_POST['Submit']))
        {
            $a = $_POST['name'];
            $b =$_POST['password'];
            $c = $_POST['email'];
            echo "<td> $a </td>";
            echo "<td> $b </td>";
            echo "<td> $c </td>";
        }

        ?>
    </form>
    </table>  
</body>
</html>
