<!-- Write a PHP script to calculate a person's exact age (years, months, days)
based on their birthdate. -->
<?php
function calculateAge($birthdate) 
{
    $birthDate = new DateTime($birthdate);
    
    $currentDate = new DateTime();
    
    $age = $birthDate->diff($currentDate);
    
    echo "You are " . $age->y . " years, " . $age->m . " months, and " . $age->d . " days old.";
}

$birthdate = "2004-11-26";

calculateAge($birthdate);
?>