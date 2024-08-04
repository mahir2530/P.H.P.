<html>
    <head></head>
    <body>
        <form method="POST" style="width:300px;margin-left:auto;margin-right:auto;text-align:center;">
            Enter Name  :- <input type="text" name="name"><br><br>
            Enter Salary :- <input type="number" name="salary"><br><br>
            Enter Position :- <input type="text" name="pos"><br><br>
            Enter HRA of net salary :- <input type="number" name="hra"><br><br>
            Enter DA of net salary :- <input type="number" name="da"><br><br>
            <input type="submit" value="submit" name="submit"><br><br>
        </form>
        <?php
            class Employee{
                private $name;
                private $sal;                
                private $pos;                
                public function __construct($name,$sal,$pos)
                {
                    $this->name = $name;
                    $this->sal = $sal;
                    $this->pos = $pos;
                }
                public function NetSalary($hra,$da){
                    return $this->sal + $hra + $da;
                }
                public function display(){
                    echo "Name of employee is <b>" . $this->name . "</b><br>";
                    echo "Salary of employee is <b>" . $this->sal . "</b><br>";
                    echo "Position of employee is <b>" . $this->pos . "</b><br>";
                }
            }

            if(isset($_POST['submit'])){
                $name = $_POST['name'];
                $sal = $_POST['salary'];
                $pos = $_POST['pos'];
                $hra = $_POST['hra'];
                $da = $_POST['da'];

                $employee = new Employee($name,$sal,$pos);
                $employee->display();
                echo "Net Salary of " . $name . " is <b>" . $employee->NetSalary($hra,$da) ."</b>";
            }
        ?>
    </body>
</html>