<html>
    <body>
        <form method = "POST">
            Enter The Length : <br>
            <input type = "number" name = "len"></br>
            <br><br>
            Enter The Width : <br>
            <input type = "number" name = "wid"></br>
            <br><br>
            <input type = "Submit" name = "Submit">

            <?php

            
            class Rectangle
            {
                private $len;
                private $wid;

                public function __construct($len,$wid)
                {
                    $this->len = $len;
                    $this->wid = $wid;
                }

                public function area()
                {
                    return $this->len * $this->wid;
                }

                public function periemeter()
                {
                    return 2 * ($this->len + $this->wid);
                }
            }

            if (isset($_POST['Submit']))
            {

                $len = $_POST['len'];
                $wid = $_POST['wid'];

                $rectangle = new Rectangle($len,$wid);
                
                echo "<br><br> <p style = 'color:purple;'>Area of Rectangle : " . $rectangle->area() . "</p>";
                echo "<br><p style = 'color:skyblue;'>Perimeter of Rectangle : " . $rectangle->periemeter() . "</p>";

            }

            ?>

    </body>
</html>
