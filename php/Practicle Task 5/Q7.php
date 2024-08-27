<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Date and Time Difference Calculator</title>
</head>
<body>
    <form method="POST">
        <fieldset>
            <legend>First Date and Time</legend>
            <label for="date1_date">Date:</label>
            <input type="date" id="date1_date" name="date1_date" required>
            <label for="date1_time">Time:</label>
            <input type="time" id="date1_time" name="date1_time" required>
        </fieldset>
        <fieldset>
            <legend>Second Date and Time</legend>
            <label for="date2_date">Date:</label>
            <input type="date" id="date2_date" name="date2_date" required>
            <label for="date2_time">Time:</label>
            <input type="time" id="date2_time" name="date2_time" required>
        </fieldset>
        <input type="submit" name="submit" value="Calculate">
    </form>

    <?php
    if (isset($_POST['submit'])) {
        $date1Date = $_POST['date1_date'];
        $date1Time = $_POST['date1_time'];
        $date2Date = $_POST['date2_date'];
        $date2Time = $_POST['date2_time'];

        $date1 = $date1Date . ' ' . $date1Time;
        $date2 = $date2Date . ' ' . $date2Time;

        $date1 = new DateTime($date1);
        $date2 = new DateTime($date2);

        $interval = $date1->diff($date2);

        $days = $interval->days;
        $hours = $interval->h;
        $minutes = $interval->i;
        $seconds = $interval->s;

        
        echo "<h2>Difference between the dates and times:</h2>";
        echo "Days: $days<br>";
        echo "Hours: $hours<br>";
        echo "Minutes: $minutes<br>";
        echo "Seconds: $seconds<br>";
    }
    ?>
</body>
</html>
