<!-- Write a PHP script to get the last day of the current month. -->
<?php
function getLastDayOfCurrentMonth() 
{
    $currentDate = new DateTime();
    
    $currentDate->modify('last day of this month');
    
    return $currentDate->format('Y-m-d');
}

$lastDay = getLastDayOfCurrentMonth();
echo "The last day of the current month is: " . $lastDay;
?>