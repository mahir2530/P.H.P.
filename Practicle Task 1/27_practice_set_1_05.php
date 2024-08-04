<html>
<head>
    <title>Registration Form</title>
    <style>
        #myform{
            width: 400px;
            border: 2px solid black;
            padding :15px;
            margin-left: auto;
            margin-right: auto;
            text-align: center;
        }
    </style>
</head>
<body>
    <form method="POST" id="myform">
        <p style="font-size:large;text-align:end;margin-bottom:0px;">Login</p>
        <h1>Registration</h1>
        Username :- <input type="text" name="name" required><br><br>
        Email :- <input type="email" name="email"><br><br>
        Password :- <input type="password" name="pass"><br><br>
        Confirm Password :- <input type="password" name="confirm"><br><br>
        <input type="submit" value="submit" name="submit"> 
    </form>
    <?php
    if(isset($_POST['submit'])){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $pass = $_POST['pass'];
        $confirm = $_POST['confirm'];
        
        if($pass == $confirm){
            echo "<br><h2>Your Entered Name is :-" . $name ." </h2>";
            echo "<br><h2>Your Entered Email is :- " . $email . "</h2>";
            echo "<br><h2>Your Entered Password is :- " . $pass . " </h2>";
        }
        else{
            echo " confirm password didn't match";
        }
        
    }
    ?>
</body>
</html>