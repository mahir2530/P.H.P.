<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>
    <form method="POST">
        <input type="date" name="date1" placeholder="(DD/MM/YYYY)">
        <input type="date" name="date2" placeholder="(DD/MM/YYYY)">
        <input type="submit" name="submit">
    </form>

    <?php
if (isset($_POST['submit'])) {
    $date1 = $_POST['date1'];
    $date2 = $_POST['date2'];

    echo $date1;
    echo "<br>";
    echo $date2;

    $date1 = new DateTime($date1);
    $date2 = new DateTime($date2);

    $interval = $date1->diff($date2);

    echo"<br>";
    echo "Years: " . $years = $interval->y."<br>";
    echo "Month: " . $years = $interval->m."<br>";
    echo "Day: " . $years = $interval->d."<br>";

}
?>
</body>
</html>