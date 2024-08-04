<html>
    <body>
        <form  method = "POST">
            Enter Number 1 : <br>
            <input type = "number" name = "num1"></br>
            <br><br>
            Enter Nmber 2 : <br>
            <input type = "number" name = "num2"></br>
            <br><br>
            <input type = "Submit" name = "Submit">
            <br>

            <?php

            class Math
            {
                private $n1;
                private $n2;

                public function __construct($n1,$n2)
                {
                    $this->n1 = $n1;
                    $this->n2 = $n2;
                }

                public function add()
                {
                    return $this->n1 + $this->n2;
                }

                public function sub()
                {
                    return $this->n1 - $this->n2;
                }

                public function mul()
                {
                    return $this->n1 * $this->n2;
                }

                public function div()
                {
                    return $this->n1 / $this->n2;
                }
            }

            if (isset($_POST['Submit']))
            {
                $n1 = $_POST['num1'];
                $n2 = $_POST['num2'];

                $math = new Math($n1,$n2);

                echo "<br><br><br>Addition of " . $n1 . " and " . $n2 . " : " . $math->add();
                echo "<br>Subtraction of " . $n1 . " and " . $n2 . " : " . $math->sub();
                echo "<br>Multiplication of " . $n1 . " and " . $n2 . " : " . $math-> mul();
                echo "<br>Division of " . $n1 . " and " . $n2 . " : " . $math->div();
            }

            ?>

    </body>
</html>