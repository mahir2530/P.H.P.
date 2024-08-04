<html>
    <head>
        <title>Bank Detail</title>
    </head>

<body>
    <form method = "POST">
        Enter Bank Account Number : <br>
        <input type = "number" name = "acc_num"></br>
        <br>
        Enter Balance : <br>
        <input type = "number" name = "balance"></br>
        <br>
        Enter Deposite : <br>
        <input type = "number" name = "deposite"></br>
        <br>
        Enter Withdraw : <br>
        <input type = "number" name = "withdraw"></br>
        <br>
        <input type = "Submit" name = "Submit" value = "Submit">

    <?php

    if (isset($_POST['Submit']))
    {
        $acc_num = $_POST['acc_num'];
        $bal = $_POST['balance'];
        $depo = $_POST['deposite'];
        $withdraw = $_POST['withdraw'];

        $obj1 = new Details();
        $obj1 -> Deposite($bal,$depo);
        $obj1 -> Withdraw($bal,$withdraw);
    }

    class Details
    {
        function Deposite($bal,$depo)
        {
            echo "<br><br><p style = 'color : blue;'>Balance : " .$bal. "</p>";
            echo "<p style = 'color : green;'>Deposite : " .$depo. "</p>";
            $curr_balance  = $bal + $depo;
            echo "Current Balance : " .$curr_balance ;    
        }

        function Withdraw($bal,$withdraw)
        {
            echo "<br><p style = 'color : red;'>Withdraw Balance : " .$withdraw. "</p>";
            $curr_bal = $bal - $withdraw;
            echo "<p style = 'color : purple;'>Current Balance : " .$curr_bal. "</p>";
        }
    }

    ?>

</html>
</body>