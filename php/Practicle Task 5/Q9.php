<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">  
    <title>Add Days to Date</title>
</head>
<body>
    <form method="POST">
    <fieldset>
        <label for="startDate">Enter a date:</label>
        <input type="date" id="startDate" name="startDate" required>
        <br>
    </fieldset>
    <fieldset>
        <label for="daysToAdd">Enter number of days to add:</label>
        <input type="number" id="daysToAdd" name="daysToAdd" required>
        <br>
    </fieldset>
        <input type="submit" name="submit" value="Calculate">
    
    </form>

    <?php
    if (isset($_POST['submit'])) {
        $startDateStr = $_POST['startDate'];
        $daysToAdd = ($_POST['daysToAdd']);

        $startDate = new DateTime($startDateStr);

        $startDate->modify("+$daysToAdd days");

        $newDate = $startDate->format('d-m-Y');

        echo "<h2>The new date is: $newDate</h2>";
    }
    ?>
</body>
</html>
