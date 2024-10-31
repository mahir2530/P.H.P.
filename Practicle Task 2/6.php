<!-- You need to write a PHP program to calculate electricity bill using if-else conditions.
Conditions:
• For first 50 units – Rs. 3.50/unit
• For next 100 units – Rs. 4.00/unit
• For next 100 units – Rs. 5.20/unit
• For units above 250 – Rs. 6.50/unit -->

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Document</title>
</head>

<body>
    <form method="POST">
        Enter Unit : <input type="text" name="unit">
        <input type="submit" name="submit" value="click">
    </form>

    <?php
    if (isset($_POST['submit'])) {
        $Unit = $_POST['unit'];
        
        
        if ($Unit>50 and $Unit<100)
        {
           echo"More then 50 , Bill  : ",$Unit*3.50;
        }
        elseif ($Unit>100 and $Unit<200)
        {
           echo"More then 100 , Bill  : ",$Unit*4.00;
        }
        elseif ($Unit>200 and $Unit<250)
        {
           echo"More then 200 , Bill  : ",$Unit*5.20;
        }
        elseif ($Unit>250)
        {
           echo"More then 250 , Bill  : ",$Unit*6.50;
        }
    }
    ?>
</body>

</html>
