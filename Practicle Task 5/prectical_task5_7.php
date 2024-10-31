<!-- Write a PHP script to create a countdown timer for a future event (e.g., New
Year’s Eve) showing days, hours, minutes, and seconds left -->
<?php
function countdownToEvent($eventDate) 
{
    $eventDateTime = new DateTime($eventDate);
    
    $currentDateTime = new DateTime();
    
    $interval = $currentDateTime->diff($eventDateTime);
    
    if ($currentDateTime > $eventDateTime) 
    {
        echo "The event has already passed!";
    } 
    else 
    {
        echo "Time left until the event: " . $interval->days . " days, ";
        echo $interval->h . " hours, ";
        echo $interval->i . " minutes, ";
        echo $interval->s . " seconds.";
    }
}

$eventDate = "2024-12-31 23:59:59";

countdownToEvent($eventDate);
?>