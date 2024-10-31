<?php
if (isset($_POST['submit'])) {
	if ($_SERVER['REQUEST_METHOD'] == "POST") {
		$name = input_data($_POST['name']);
		$e_mail = input_data($_POST["e-mail"]);
		$website = input_data($_POST["web"]);
		$comment = input_data($_POST["comm"]);
		$gender = $_POST["gender"];
	}
	
	$patname = "/[a-zA-Z]+/";
	if (!empty($name)) {
		if (preg_match($patname,$name)) {
			echo "<b> Name is </b> " . $name . "<br>";
		}
		else{
			echo " Name should contain only alphabets <br>";
		}
	}

	$patemail = "/[\w_-]+@[\w]+\.[a-zA-Z]{2,3}/";
	if (!empty($e_mail)) {
		if (preg_match($patemail, $e_mail)) {
			echo "<b> Email is </b>" . $e_mail . "<br>";
		}
		else{
			echo "Email should contian @ and . <br> ";
		}
	}

	$patweb = "/http\:\/\/www\.[a-zA-Z0-9]+\.[a-zA-Z]{2,3}/";
	if(!empty($website)){
		if (preg_match($patweb,$website)) {
			echo "<b> Website is </b> " . $website . "<br>";
		}
		else{
			echo " Website validation should match ";
		}
	}

	echo "<b> Comment is </b>" . $comment . "<br>";

	echo "<b> Gender is </b>" . $gender . "<br>";

}
function input_data($data){
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
}
?>