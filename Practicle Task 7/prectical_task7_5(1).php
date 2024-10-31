<html>
<body>
<form action="prectical_task7_5.php" method="post">
		Username: <input name="username" type="text" value="<?php if(isset($_COOKIE["username"])) { echo $_COOKIE["username"]; } ?>"/>
        <br><br>
		 Password: <input name="password" type="password" value="<?php if(isset($_COOKIE["password"])) { echo $_COOKIE["password"]; } ?>"/>
	    <br><br>
		<input type="checkbox" name="remember" /> Remember me
	    <br><br>
		<input type="submit" value="Login">
</form>
</body>
</html>