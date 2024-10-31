<!-- Write a PHP script to add a specified number of days to a given date and
display the new date. -->
<?php
function addDaysToDate($date, $days) 
{
    $dateObject = new DateTime($date);
    
    $dateObject->modify("+$days days");
    
    return $dateObject->format('Y-m-d');
}

$originalDate = "2024-09-19";
$daysToAdd = 30;

$newDate = addDaysToDate($originalDate, $daysToAdd);
echo "The new date after adding $daysToAdd days is: " . $newDate;
?>