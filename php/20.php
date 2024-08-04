<html>
    <head>
        <title>Class Program</title>
    </head>

<body>
    <form method = "POST">
        Enter Length : <br>
        <input type = "number" name = "length"></br>
        <br>
        Enter Width : <br>
        <input type = "number" name = "width"></br>
        <br>
        <input type = "Submit" name ="Submit" value = "Submit">

        <?php

        if(isset($_POST['Submit']))
        {
            $len = $_POST['length'];
            $width = $_POST['width'];
            $obj1 = new Rectangle();
            $obj1 -> area($len,$width);
            $obj1 -> per($len,$width);
        }

        class Rectangle
        {
            function area($len,$width)
            {
                echo "<br><br><p style = 'color : green;'> Area of Rectangle : " . $len * $width . "</p>";
            }

            function per($len,$width)
            {
                echo "<p style = 'color : purple;'> Per of Rectangle : " . 2 * ($len + $width) . "</p>";
            }
        }
        
        ?>
</html>
</body>