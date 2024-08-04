<html>
<head>
    <title>Number length</title>
</head>
<body>
    <form method="POST">
        Enter Number :- <br><br>
        <input type="number" name="num"></br></br>
        <br><br>
        <input type="submit" value="submit" name="submit"> 
    </form>
    <?php
    if(isset($_POST['submit'])){
        $num = $_POST['num'];
        
        if($num < 0){
            $num = -$num;
        }
        $string = strval($num);
        $ans = strlen($string);

        echo "Length of Number : " . $num . " is " . $ans;
    }
    ?>
</body>
</html>