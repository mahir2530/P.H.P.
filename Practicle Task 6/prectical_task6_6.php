<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		th{
			text-align: left;
		}
		#red{
			border-color: red;
		}
	</style>
</head>
<body>
	<b> Please Contact Us </b>
	<hr width="350" align="left">
	<div style="padding: 5px;">
	<form method="POST">
		<table cellpadding="5px" >
			<tr>
				<th> Name<font color="red">*</font> </th>
				<td> <input type="text" name="name1" style="border-color: skyblue;"> </td>
			</tr>
			<tr>
				<th> Email<font color="red">*</font> </th>
				<td>  <input type="email" name="e-mail" id="red"> </td>
			</tr>
			<tr>
				<th> Phone <font color="red">*</font> </th>
				<td> <input type="text" name="num1" id="red" placeholder="+91" style="width:25px">-<input type="text" name="num2" id="red" style="width: 125px;"> <br> </td>
			</tr>
			<tr>
				<th> Regarding &nbsp; </th>
				<td> <select name="regarding">
					<option value="General Question">General Question</option>
					<option value="Personal Question">Personal Question</option>
				</select> </td>
			</tr>
			<tr>
				<th> Message<font color="red">*</font> </th>
				<td> <textarea name="mess" id="red" rows="4" ></textarea> </td>
			</tr>
			<tr>
				<th></th>
				<td> <input type="submit" name="submit" value="submit" style="background-color: blue;color: white;" > </td>
			</tr>
		</table>
	</form>
</div>
</body>
</html>
<?php
if (isset($_POST['submit'])) {
	echo "<b> Your Details are </b> <br> ";
	echo "<b> Name : </b>" . $_POST['name1'] . "<br>";
	echo "<b> Email : </b>" . $_POST['e-mail'] . "<br>";
	echo "<b> Phone : </b>" . $_POST["num1"].$_POST["num2"] . "<br>";
	echo "<b> Regarding : </b>" . $_POST['regarding'] . "<br>";
	echo "<b> Message : </b>" . $_POST["mess"] . "<br>";
}
?>