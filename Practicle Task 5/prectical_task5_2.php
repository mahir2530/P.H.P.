<!-- Write a PHP script to get time difference in days and years, months, days,
hours, minutes, seconds between two dates.  -->
<?php
$date1 = new DateTime("2020-05-15 10:45:00");
$date2 = new DateTime("2024-09-19 19:04:00");

$interval = $date1->diff($date2);

$daysDiff = $interval->days;

echo "Difference in Years, Months, Days, Hours, Minutes, Seconds : <br>";
echo $interval->y . " years, ";
echo $interval->m . " months, ";
echo $interval->d . " days, ";
echo $interval->h . " hours, ";
echo $interval->i . " minutes, ";
echo $interval->s . " seconds <br>";

echo "<br> Total difference in days: $daysDiff days";
?>