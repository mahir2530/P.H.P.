<!-- Write a PHP script to get yesterday's date. -->
<?php
echo"Timestamp of yesterday's date", strtotime("yesterday")."<br>";

echo date('d-m-y',strtotime('yesterday'));