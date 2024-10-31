<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		.cen{
			text-align: center;
			background-color: royalblue;
	</style>
</head>
<body>
	<div style="width: 320px; height: auto; background-color: lightblue; border: 2px solid lightblue;">
	<form method="POST">
		<table style="border-color: white;" border="1">
			<tr>
				<td colspan="3" class="cen" style="color: white;"> Registration Form </td>
			</tr>
			<tr>
				<td style="color: white;"> Username </td>
				<td colspan="2"> <input type="text" name="uname"> </td>
			</tr>
			<tr>
				<td style="color: white;"> Password </td>
				<td colspan="2"> <input type="password" name="pass"> </td>
			</tr>
			<tr>
				<td style="color: white;" > User Type </td>
				<td colspan="2">
					<select name="user">
						<option value="--Select--">--Select-- </option>
						<option value="Public">Public</option>
						<option value="Private"> Private </option>
						<option value="Super"> Super </option>
						<option value="Guest"> Guest </option>
					</select>
				</td>
			</tr>
			<tr>
				<td style="color: white;"> Display Name </td>
				<td colspan="2"> <input type="text" name="dname"> </td>
			</tr>
			<tr>
				<td style="color: white;"> Address </td>
				<td> <textarea name="add"></textarea> </td>
			</tr>
			<tr>
				<td style="color: white;"> Email </td>
				<td> <input type="email" name="e-mail"> </td>
			</tr>
			<tr>
				<td style="color: white;"> Gender </td>
				<td style="color: white;"> 
					<input type="radio" name="gender" value="Male"> Male
					<input type="radio" name="gender" value="Female"> Female
				</td>
			</tr>
			<tr>
				<td></td>
				<td style="color: white;"> <input type="checkbox" name="iatac" value="I accept Terms and Conditions"> I accept Terms and Conditions </td>
			</tr>
			<tr>
				<td colspan="3" class="cen"> <input type="submit" name="submit" value="Submit">  </td>
			</tr>
		</table>
	</form>
</div>
</body>
</html>
<?php
function value(){
	echo "<br>";
}
if (isset($_POST['submit'])) {
	echo "<b> <font size='5' > Given Details are </font> </b>"; value();
	echo "<b> Username : </b>" . $_POST["uname"];value();
	echo "<b> Password : </b>" . $_POST["user"]; value();
	echo "<b> Email : </b>" . $_POST['e-mail']; value();
	echo "<b> Display Name : </b>: " . $_POST['dname']; value() ;
	echo "<b> Address : </b>" . $_POST["add"]; value();
	echo "<b> E-mail : </b>" . $_POST["e-mail"]; value();
	echo "<b> Gender : </b>" . $_POST["gender"]; value();
}
?>