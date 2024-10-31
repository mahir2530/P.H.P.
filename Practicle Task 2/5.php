#5. Write a PHP program to check if a person is eligible to vote or not.

<!DOCTYPE html>
<html>
<head>
    <title>AGE VALIDATION</title>
</head>
<body>
    <form method="POST">
        Enter Age: <input type="text" name="Age">
        <input type="submit" name="submit" value="Submit">
    </form>
    <?php
    if (isset($_POST['submit'])) {
        $Age = $_POST['Age'];
        if (is_numeric($Age)) {
            if ($Age > 18) {
                echo "<h4>VALID</h4>";
            } else {
                echo "<font color='red'>NOT VALID</font>";
            }
        } else {
            echo "<font color='red'>Please enter a valid number</font>";
        }
    }
    ?>
</body>
</html>
