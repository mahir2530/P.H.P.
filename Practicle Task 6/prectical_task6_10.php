<?php
if ($_POST['submit']) {
	if ($_SERVER['REQUEST_METHOD'] == "POST") {
		$name = input_data($_POST["nam"]);
		$email = input_data($_POST["e-mail"]);
		$ccode = input_data($_POST["ccode"]);
		$phone = input_data($_POST["phone"]);
		$regarding = $_POST['regarding'];
		$message = input_data($_POST["mess"]); 
	}
	echo "<font size='5'>";

	echo "<b> Your details are </b> <br>";

	$patname = "/[a-zA-Z]+/";
	if (!empty($name)) {
		echo "<b> Name is </b>";
		if (preg_match($patname, $name)) {
			echo $name;
		}
		else{
			echo "Name should contain only alphabets ";
		}
	}

	echo "<br>";
	$patemail = "/[a-zA-Z0-9_]+@[a-zA-Z]+\.[a-zA-Z]{2,3}/";
	if (!empty($email)) {
		echo "<b> Email is </b>";
		if (preg_match($patemail,$email)) {
			echo $email;
		}
		else{
			echo "Email should contain @ and . ";
		}
	}

	echo "<br>";
	$patphone = "/[0-9]{10}/";
	if (!empty($phone) && !empty($ccode)) {
		echo "<b> Phone number is </b>";
		if(preg_match($patphone,$phone)){
			echo $ccode . " " . $phone;
		}
		else{
			echo "Phone should contain only digits";
		}
	}

	echo "<br>";
	echo "<b> Regarding is </b>" . $regarding . "<br>";
	echo "<b> Message is </b>" . $message . "<br>" ;

	echo "</font>";
}
function input_data($data){
	$data = trim($data);
	$data = stripcslashes($data);
	$data = htmlspecialchars($data);
	return $data;
}
?>