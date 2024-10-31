<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		.d{
			display: flex;
		}
		.d1{
			margin-left: 100px;
			margin-top:80px;
		}
		.d2{
			margin-left: 100px;
			margin-top: 50px;
		}
	</style>
</head>
<body>
	<div style="width: 1400px; height: 380px; background-color: forestgreen;border: 1px solid white;" class="d">
		<div style="width: 250px; height: 270px; background-color: white; border: 1px solid black;" class="d1">
			<center>
				<form method="POST">
					<h1> Login </h1>
					<input type="text" name="email" placeholder="enter your email"> <br> <br>
					<input type="password" name="pass" placeholder="enter your password"> <br> <br>
					<a href="3.php"> forgot password </a> <br> <br>
					<input type="submit" name="sign" value="sign" style="width:165px; height: 20px;background-color: forestgreen;"> <br> <br>
					Don't have an account? <a href="3.php"> SignUp </a>
				</form>
			</center>
		</div>
		<div style="width: 250px; height: 300px; background-color:white;
		border: 1px solid black;" class="d2">
		<center>
			<form method="POST">
				<h1> Signup </h1>
				<input type="text" name="email1" placeholder="enter your email"> <br> <br>
				<input type="password" name="pass1" placeholder="enter your password"> <br> <br>
				<input type="password" name="compass" placeholder="enter your confirm password"> <br> <br>
				<input type="submit" name="signup" value="signup" style="width:165px; height: 20px; background-color: forestgreen;"> <br> <br>
				Don't have an account? <a href="3.php"> SignUp </a>
			</form>
		</center>
		</div>
</div>
</body>
</html>
<?php
if (isset($_POST['sign']) || isset($_POST["signup"])) {
	if (isset($_POST["sign"])) {
		echo "<h1>" . "You have signed in " . "</h1>" ;
	}
	else if(isset($_POST["signup"])){
		if($_POST["pass1"] == $_POST['compass']){
			echo  "<h1>" . "You have been Signup" . "<h1>";
		}
		else{
			echo "<h1>". "You have not signup" . "</h1>";
		}
	}
}
?>