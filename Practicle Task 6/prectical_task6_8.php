<?php
if (isset($_POST['register'])) {
	if ($_SERVER['REQUEST_METHOD'] == "POST") {
		$fname = input_data($_POST['fname']);
		$lname = input_data($_POST["lname"]);
		$email = input_data($_POST["e-mail"]);
		$phone = input_data($_POST["phone"]);
		$pass = input_data($_POST["pass"]);
	}

	$patname = "/[a-zA-Z0-9_]+/";
	if (!empty($fname)) {
		echo "<b> First Name is </b>";
		if (preg_match($patname, $fname)) {
			echo $fname . "<br>";
		}
		else{
			echo spanv("First Name should be alphanumeric and underscore");
		}
	}

	if (!empty($lname)) {
		echo "<b> Last Name is </b>";
		if (preg_match($patname,$lname)) {
			echo $lname . "<br>";
		}
		else{
			echo spanv("Last Name should be alphanumeric and underscore ");
		}
	}

	$patema = "/[a-zA-Z0-9]+@[a-zA-Z]+\.[a-zA-Z]{2,3}/";
	if (!empty($email)) {
		echo "<b> Email is </b>";
		if (preg_match($patema,$email)) {
			echo $email . "<br>";
		}
		else{
			echo spanv("Email should contain @ and . ");
		}
	}

	$patphone = "/[0-9]{10}/";
	if (!empty($phone)) {
		echo "<b> Phone number is </b> ";
		if (preg_match($patphone, $phone)) {
			echo $phone . "<br>";
		}
		else{
			echo spanv("Phone number should be 10 digits ");
		}
	}

	$patpass = "/^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])[a-zA-Z\d]{6,12}$/";
	if (!empty($pass)) {
		echo "<b> Password is </b>";
		if (preg_match($patpass, $pass)) {
			echo $pass . "<br>";
		}
		else{
			echo spanv("Password should contain atleast 1 Uppercase letter, 1 Lowercase letter and 1 digits ");
		}
	}
}

function input_data($data){
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
}
function spanv($data){
	return "<span style='color:red;>" . $data . "</span>";
}
?>