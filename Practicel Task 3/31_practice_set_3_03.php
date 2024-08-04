<html>
    <body>
        <form method = "POST">
            Enter Account Number : <br>
            <input type = "number" name = "acc_num"></br>
            <br><br>
            Enter Your Balance : <br>
            <input type = "number" name = "balance"></br>
            <br><br>
            <input type = "Submit" name = "Submit" value = "Submit">

            <?php

            class BankAccount
            {
                private $acc_n;
                private $balance;

                public function __construct($acc_n,$balance)
                {
                    $this->acc_n = $acc_n;
                    $this->balance = $balance;
                }

                public function deposite($amount)
                {
                    $this->balance += $amount;
                }

                public function withdraw($amount)
                {
                    if($this->balance >= $amount)
                    {
                        $this->balance -= $amount;
                    }
                    else
                    {
                        Echo "insufficent balance <br>";
                    }
                }

                public function getBalance() 
                {
                    return $this->balance;
                }

            }

            if (isset($_POST['Submit']))
            {
                $acc_n = $_POST['acc_num'];
                $balance = $_POST['balance'];

                $bankaccount = new BankAccount($acc_n,$balance);
                $bankaccount->deposite(1000);
                $bankaccount->withdraw(100);

                echo "<br><br>Balance: " . $bankaccount->getBalance() . "\n";
            }

            ?>
    </body>
</html>