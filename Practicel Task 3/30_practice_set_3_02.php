<html>
    <body>
        <form method = "POST">
            Enter Vehicle Brand : <br>
            <input type = "text" name = "brand"></br>
            <br><br>
            Enter Vehicle Model : <br>
            <input type = "text" name = "model"></br>
            <br><br>
            Enter Vehicle Year : <br>
            <input type = "text" name = "year"></br>
            <br><br>
            <input type = "Submit" name = "Submit" value = "Submit">

            <?php

            class Vehicle
            {
                private $brand;
                private $model;
                private $year;

                public function __construct($brand,$model,$year)
                {
                    $this->model = $model;
                    $this->brand = $brand;
                    $this->year = $year;
                }

                public function display()
                {
                    echo "<br><br>Brand Of Car IS : " . $this->brand;
                    echo "<br>Model Of Car IS : " . $this->model;
                    echo "<br>Year Of Car IS :" . $this->year;
                }
            }

            if (isset($_POST['Submit']))
            {
                $brand = $_POST['brand'];
                $model = $_POST['model'];
                $year = $_POST['year'];

                $vehicle = new Vehicle($brand,$model,$year);

                echo $vehicle->display();
            }

            ?>
    </body>
</html>