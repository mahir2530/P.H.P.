<?php
session_start();

$name = "";
$email = "";

if (!isset($_SESSION['name']) || !isset($_SESSION['email'])) {
    echo "You are not logged in";
  
}
else
{
    $name = $_SESSION['name'];
    $email = $_SESSION['email'];
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Secure Page</title>
</head>
<body>
<?php if (!empty($name) && !empty($email)) : ?>
        Welcome <?php echo $name; ?><br>
        Your email address is: <?php echo $email; ?>
    <?php endif; ?>
</body>
</html>
