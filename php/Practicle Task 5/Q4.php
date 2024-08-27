<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Birthday Countdown</title>
</head>
<body>
    <form method="POST">
        <label for="bday">Enter your birthday date:</label>
        <input type="date" id="bday" name="bday" required>
        <br>
        <label for="cutday">Enter current date:</label>
        <input type="date" id="cutday" name="cutday" required>
        <br>
        <input type="submit" name="submit" value="Calculate">
    </form>

    <?php
    if (isset($_POST['submit'])) {

        $birthdayStr = $_POST['bday'];
        $todayStr = $_POST['cutday'];

        $birthday = new DateTime($birthdayStr);
        $today = new DateTime($todayStr);

        $birthday->setDate($today->format('Y'), $birthday->format('m'), $birthday->format('d'));

        if ($birthday < $today) {
            $birthday->modify('+1 year');
        }

        $interval = $today->diff($birthday);
        $daysLeft = $interval->days;
        echo"<br>";
        echo "<b>There are $daysLeft days left until your birthday!</b>";
    }
    ?>
</body>
</html>
