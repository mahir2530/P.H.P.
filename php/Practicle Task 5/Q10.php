<?php
echo "Timestamp of the last day of the month: " . strtotime("last day of this month") . "<br>";

echo "Formatted date of the last day of the month: " . date('d-m-y', strtotime('last day of this month'));
?>
