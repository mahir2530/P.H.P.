<html>
<head>
    <title>mutliple task</title>
</head>
<body>
    <form method="POST">
        <h3>
            1. Square<br>
            2. factorial<br>
            3. Square root<br>
        </h3>
        Enter your choice :- <input type="number" name="choice">
        <br><br>
        Enter your number for operation :- <input type="number" name="num">
        <input type="submit" value="submit" name="submit"> 
    </form>
    <?php
    if(isset($_POST['submit'])){
        $choice = $_POST['choice'];
        $num = $_POST['num'];
        // echo"<pre>"; print_r($num); die;
        if($choice < 4 && $choice > 0){
            switch ($choice) {
                case 1:
                    $ans = $num * $num;
                    echo " Square of " . $num . " is " . $ans;
                    break;
                case 2:
                    if($num < 0){
                        echo "Factorial of " . $num . " is not possible";
                    }
                    else{
                        $fac = 1;
                        for($i=1;$i<$num;$i++){
                            $fac *= $i;
                        }
                        echo "Factorial of " . $num . " is " . $fac;
                    }
                    break;
                case 3:
                    //pending
                    break;
            }
        }
        else{
            echo"Please enter from 1 2 3 only...<br>";
        }
    }
    ?>
</body>
</html>
