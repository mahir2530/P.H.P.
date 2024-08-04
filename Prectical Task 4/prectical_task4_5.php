<!-- Write a PHP program to identify the email addresses which are not unique. -->
<?php
$emailAddresses = array(
    "john.doe@example.com",
    "jane.doe@example.com",
    "alice@example.com",
    "bob@example.com",
    "john.doe@example.com",
    "alice@example.com",
    "charlie@example.com"
);
echo "Email addresses: <br>";
foreach ($emailAddresses as $email) {
    echo $email . "<br>";
}
$emailCount = array();
foreach ($emailAddresses as $email) 
{
    if (isset($emailCount[$email])) 
    {
        $emailCount[$email]++;
    } 
    else 
    {
        $emailCount[$email] = 1;
    }
}
$nonUniqueEmails = array();
foreach ($emailCount as $email => $count) 
{
    if ($count > 1) 
    {
        $nonUniqueEmails[] = $email;
    }
}
echo "<br>Non-unique email addresses:<br>";
foreach ($nonUniqueEmails as $email) 
{
    echo $email . "<br>";
}
?>