<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form method="POST">
		FirstName: <input type="text" name="fname"> <br>
		LastName: <input type="text" name="lname"> <br>
		Address:<input type="text" name="addre"> <br>
		Email Address: <input type="email" name="e-mail"> <br>
		Password:<input type="password" name="pass"> <br>
		<input type="submit" name="submit" value="Submit">
	</form>
</body>
</html>
<?php
if (isset($_POST['submit'])) {
	echo "<font size='4'> <b> User Details are </font> </b> <br>";
	echo "<b> First Name : </b>" . $_POST['fname'] . "<br>";
	echo "<b> Last Name : </b>" . $_POST["lname"] . "<br>";
	echo "<b> Address : </b>" . $_POST["addre"] . "<br>";
	echo "<b> Email Address : </b>" . $_POST["e-mail"] . "<br>";
	echo "<b> Password : </b>" . $_POST["pass"] . "<br>";
}
?>