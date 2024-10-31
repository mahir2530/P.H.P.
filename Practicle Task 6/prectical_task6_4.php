<?php
if (isset($_REQUEST['register'])) {
	echo "<b> <font size='5'> Your Details are </font> </b> <br>";
	echo "<b> Name : </b>" . $_REQUEST['name'];
	echo "<br>";
	echo "<b> Email : </b>" . $_REQUEST["e-mail"];
	echo "<br>";
	echo "<b> Password : </b>" . $_REQUEST["pass"];
	echo "<br>";
	echo "<b> Address : </b>" . $_REQUEST["add"];
	echo "<br>";
	echo "<b> Mobile : </b>" . $_REQUEST["num"];
	echo "<br>";
	echo "<b> Gender : </b>" . $_REQUEST["gender"];
	echo "<br>";
	echo "<b> Hobbies : </b>";
	foreach ($_REQUEST["hobbies"] as $value) {
		echo $value . ", ";
	}
	echo "<br>";
	echo "<b> Files : </b>" . $_FILES['file1']["type"];
	echo "<br>";
	echo "<b> Date of Birth : </b>" . $_REQUEST["da"]."/".$_REQUEST["mon"]."/".$_REQUEST["ye"];
	echo "<br>";
}
?>