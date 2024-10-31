<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<div style="width: 650px; height: auto; background-color: white;border: 2px solid black;">
		<h1> Tutorials Point Absolute classes registration </h1>
		<form style="text-align: left;" method="POST">
			<table>
				<tr>
					<th> Name : </th>
					<td> <input type="text" name="name"> </td>
				</tr>
				<tr>
					<th> E-mail : </th>
					<td>
						<input type="email" name="e-mail">
					</td>
				</tr>
				<tr>
					<th> Specific Time : </th>
					<td>
						<input type="time" name="stime">
					</td>
				</tr>
				<tr>
					<th> Class details : </th>
					<td> <textarea name="ta">
					</textarea></td>
				</tr>
				<tr>
					<th> Gender : </th>
					<td> <input type="radio" name="gender" value=""> Female <input type="radio" name="gender" value="Male"> Male </td>
				</tr>
				<tr>
					<th> <input type="submit" name="submit" value="submit"> </th>
				</tr>
			</table>
		</form>
		<h1> Your Given details are as : </h1>
		<?php
		if (isset($_POST['submit'])) {
			echo "Name : " . $_POST['name'] . "<br>";
			echo "E-Mail : " . $_POST["e-mail"] . "<br>";
			echo "Time : " . $_POST["stime"] . "<br>";
			echo "Class Details : " . $_POST["ta"] . "<br>";
			echo "Gender : " . $_POST["gender"] . "<br>" ;
		}
		?>
	</div>
</body>
</html>