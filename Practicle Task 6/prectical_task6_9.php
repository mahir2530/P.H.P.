<html>
<head>
	<title></title>
	<style type="text/css">
		span{
			color: red;
		}
	</style>
</head>
<body>
	<font size="5" style="font-weight: bold;"> PHP Form Validation Example </font> <br>
	<span> * required field </span>
	<form action="#" method="POST">
		FullName: <input type="text" name="fname" required>
		<span> *Only letters and white space allowed </span> <br> <br>
		E-mail address: <input type="email" name="e-mail" required>
		<span>* The email address is incorrect </span> <br> <br>
		Website: <input type="text" name="web" required>
		<span> Enter a valid Website URL </span> <br> <br>
		Comment: <textarea name="comm" required></textarea> <br> <br>
		Gender: <input type="radio" name="gender" value="Female" checked> Female <input type="radio" name="gender" value="Male"> Male
		<span> * Please select a gender </span> <br><br>
		<input type="submit" name="submit" value="Submit">
	</form>
	<font size="5" style="font-weight: bold;">Final Output: </font>
</body>
</html>
<?php
#<?php echo $_SERVER['PHP_SELF']
if (isset($_POST['submit'])) {
	if ($_SERVER["REQUEST_METHOD"]=="POST") {
		$fname = input_data($_POST['fname']);
		$email = input_data($_POST["e-mail"]);
		$websi = $_POST["web"];
		$comment = input_data($_POST["comm"]);
		$gender = $_POST["gender"]; 
	}
	echo "<br>";
	$patfname = "/[a-zA-Z]+/";
	if (!empty($fname)) {
		if (preg_match($patfname, $fname)) {
			echo $fname;
		}
		else{
			echo "Name should contain only alphabets and space ";
		}
	}

	echo "<br>";
	$patemail = "/^[a-zA-Z0-9]+@[a-zA-Z]+\.[a-zA-Z]{2,3}$/";
	if (!empty($email)) {
		if (preg_match($patemail,$email)){
			echo $email;
		}
		else{
			echo "Email should contain @ and . ";
		}
	}

	echo "<br>";
	$patweb = "/^http:\/\/w{3}\.[a-zA-Z0-9]+\.[a-zA-Z]{2,3}$/";
	if (!empty($websi)) {
		if (preg_match($patweb,$websi)) {
			echo $websi;
		}
		else{
			echo "Invalid URL";
		}
	}

	echo "<br>";
	if (!empty($comment)) {
		echo $comment;
	}
	else{
		echo "No comment pass";
	}

	echo "<br>";
	echo $gender;

}
function input_data($data){
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
}
?>