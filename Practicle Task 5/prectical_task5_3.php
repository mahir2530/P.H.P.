<!-- Write a PHP script to check whether a date is a weekend or not. -->
<?php
function isWeekend($date) 
{
    $timestamp = strtotime($date);
    
    $dayOfWeek = date('w', $timestamp);
    
    if ($dayOfWeek == 0 || $dayOfWeek == 6) 
    {
        return true;
    }
    return false;
}

$date = "2024-09-21";

if (isWeekend($date)) 
{
    echo "$date is a weekend.";
} 
else 
{
    echo "$date is a weekday.";
}
?>