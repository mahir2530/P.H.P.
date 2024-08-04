<html>
<head>
    <title>Registration Form</title>
    <style>
        #myform{
            width: 335px;
            border: 2px solid black;
            padding :2px;
            margin-left: auto;
            margin-right: auto;
            text-align: center;
        }
        tr{
            border: 2px soild red;
            padding: 5px;
        }
         td{
            border: 2px solid black;
            padding: 5px; 
         }
    </style>
</head>
<body>
    <form method="POST" id="myform">
    <table>
            <tr>
                <td>Full Name :- </td>
                <td><input type="text" name="fname"></td>
             </tr> 
            <tr>
                <td>Email ✉️:- </td>
                <td><input type="email" name="email"></td>
            </tr>
            <tr>
                <td>Username :- </td>
                <td><input type="text" name="name"></td>
            </tr>
            <tr>
                <td>Password 🔑:- </td>
                <td><input type="password" name="pass"></td>
            </tr>
            <tr>
                <td>Confirm Password :- </td>
                <td><input type="password" name="confirm"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="submit" name="submit">  <input type="reset" value="cancel" name="cancel"> </td>
            </tr>
        </table>
    </form>
    <?php
    if(isset($_POST['submit'])){
        $fname = $_POST['fname'];
        $name = $_POST['name'];
        $email = $_POST['email'];
        $pass = $_POST['pass'];
        $confirm = $_POST['confirm'];
        
        if($pass == $confirm){
            echo "  <table>
                        <tr>
                            <td>Full Name :- </td>
                            <td> " . $fname . " </td>
                        </tr>
                        <tr>
                            <td>Email :- </td>
                            <td> " . $email . " </td>
                        </tr>
                        <tr>
                            <td>Username :- </td>
                            <td> " . $name . " </td>
                        </tr>
                        <tr>
                            <td>Password :- </td>
                            <td> " . $pass . " </td>
                        </tr>
                    </table>
            ";
        }
        else{
            echo " confirm password didn't match";
        }
        
    }
    ?>
</body>
</html>