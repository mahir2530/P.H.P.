<!-- Write a PHP script to display how long ago a given date was from the current
date (e.g., "2 days ago", "3 months ago"). -->
<?php
function timeAgo($givenDate) 
{
    $date = new DateTime($givenDate);
    
    $currentDate = new DateTime();
    
    $interval = $date->diff($currentDate);
    
    if ($interval->y > 0) 
    {
        echo $interval->y . " year" . ($interval->y > 1 ? "s" : "") . " ago";
    } 
    elseif ($interval->m > 0) 
    {
        echo $interval->m . " month" . ($interval->m > 1 ? "s" : "") . " ago";
    } 
    elseif ($interval->d > 0) 
    {
        echo $interval->d . " day" . ($interval->d > 1 ? "s" : "") . " ago";
    } 
    elseif ($interval->h > 0) 
    {
        echo $interval->h . " hour" . ($interval->h > 1 ? "s" : "") . " ago";
    } 
    elseif ($interval->i > 0) 
    {
        echo $interval->i . " minute" . ($interval->i > 1 ? "s" : "") . " ago";
    } 
    else 
    {
        echo $interval->s . " second" . ($interval->s > 1 ? "s" : "") . " ago";
    }
}

$givenDate = "2023-09-15 05:30:00";

timeAgo($givenDate);
?>