<!-- Create a simple 'birthday countdown' script, the script will count the number
of days between current day and birthday. -->
<?php
$birthday = "11-26";

$currentYear = date('Y');

$today = date('Y-m-d');

$birthdayThisYear = DateTime::createFromFormat('Y-m-d', $currentYear . '-' . $birthday);

$todayDate = new DateTime($today);

if ($todayDate > $birthdayThisYear) 
{
    $birthdayThisYear->modify('+1 year');
}

$interval = $todayDate->diff($birthdayThisYear);

echo "Your next birthday is in " . $interval->days . " days!";
?>