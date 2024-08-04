<html>
<head>
    <title>Vowel or Consonant</title>
</head>
<body>
    <form method="POST">
        Enter only one character :- <br>
        <input type="text" name="text"></br>
        <br><br>
        <input type="submit" value="submit" name="submit"> 
    </form>
    <?php
    if(isset($_POST['submit'])){
        $char = $_POST['text'];
        if($char == 'a' || $char == 'e' || $char == 'i' || $char == 'o' || $char == 'u'){
            echo $char . " is vowel";
        }
        else{
            echo $char . " is Consonant";
        }
    }
    ?>
</body>
</html>