<?php
session_start(); 

if (isset($_POST['submit'])) {
 
    $name = $_POST['name'];
    $email = $_POST['email'];


    $_SESSION['name'] = $name;
    $_SESSION['email'] = $email;
 
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body>
    <form method="POST" action="prectical_task7_3(1).php">
        Name: <input type="text" name="name" required/><br>
        Email: <input type="email" name="email" required/><br>
        <input type="submit" name="submit" value="Login">
    </form>
</body>
</html>
