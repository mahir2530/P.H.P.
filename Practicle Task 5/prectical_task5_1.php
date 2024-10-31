<!-- Write a PHP script to get yesterday's date.  -->
<?php
$yesterday = date('Y-m-d', strtotime('-1 day'));

echo " Yesterday's date was : " . $yesterday;
?>