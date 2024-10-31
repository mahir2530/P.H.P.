<?php      

if(isset($_POST['submit']))
{
    $name = $_POST['name'];
    setcookie("name",$name,time()+3600);
}  

?>

<html>
<body>
    <form method = "POST">
        Name:<input type="text" name="name"/>
        <input type="submit" name="submit">
    </form>

</body>
</html>

<?php
if(isset($_COOKIE['name']))
    {
        echo "Welcome ".$_COOKIE['name'];
    }
    else
    {
        echo "Login Again";
    }
?>
