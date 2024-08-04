<html>
<head>
    <title>vote cheker</title>
</head>
<body>
    <form method="POST">
        Enter Age :- <br><br>
        <input type="number" name="age"></br></br>
        <br><br>
        <input type="submit" value="submit" name="submit"> 
    </form>
    <?php
    if(isset($_POST['submit'])){
        $age = $_POST['age'];
        if($age >= 18){
            echo "<p style = 'color:green;'>Eligible for vote</p>";
        }
        else{
            echo "<p style = 'color:red;'>Not Eligible for vote</p>";
        }
    }
    ?>
</body>
</html>