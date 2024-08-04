<html>
    <head>
        <title>Display Vehicle Brand</title>
    </head>

<body>
    <form method = "POST">
        Enter Brand Name : <br>
        <input type = "name" name = "brand"></br>
        <br>
        Enter Model Nmae : <br>
        <input type = "name" name = "model"></br>
        <br>
        Enter Model Year : <br>
        <input type = "number" name = "year"></br>
        <br>
        <input type = "Submit" name = "Submit" value = "Submit">

    <?php

    if (isset($_POST['Submit']))
    {
        $brand = $_POST['brand'];
        $model = $_POST['model'];
        $year = $_POST['year'];

        $obj1 = new Vehicle();
        $obj1 -> display($brand,$model,$year);
    }

    class Vehicle
    {
        function display($brand,$model,$year)
        {
            echo "<br><br>Brand : " .$brand;
            echo "<br>Model Name : " .$model;
            echo "<br>Year : " .$year;
        }
    }
    ?>

</html>
</body>