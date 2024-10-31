<!-- Write a PHP script to increment date by one month. -->
<?php
function incrementDateByOneMonth($date) 
{
    $dateObject = new DateTime($date);
    
    $dateObject->modify('+1 month');
    
    return $dateObject->format('Y-m-d');
}

$date = "2024-09-19";

$newDate = incrementDateByOneMonth($date);
echo "The date after one month is: " . $newDate;
?>