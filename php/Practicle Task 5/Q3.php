<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>
    <form method="POST">
        <input type="date" name="date">
        <input type="submit" name="submit">
    </form>


<?php
if (isset($_POST['submit'])) {
    $date = $_POST['date']; 
    $day_of_week = date('w', strtotime($date));
    
    if ($day_of_week == 0 || $day_of_week == 6) {
        echo "$date is a weekend.";
    } else {
        echo "$date is not a weekend.";
    }   }


?>
</body>
</html>