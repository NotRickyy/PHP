<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<title>Login</title>
		<link rel="shortcut icon" href="Crow.jpg" />
		<h1>Home page</h1>
	</head>

	<body>
		<p>Please Register Below</p>
		
		<label for="Username"> Username:  &ensp; </label>
		<input type="text" name="Username" id="Username"/>
		<br/>
		
		<label for="Password"> Password:  &ensp; </label>
		<input type="text" name="Password" id="Password"/>
		<br/>
		
		<label for="Username"> Confirm Password:  &ensp; </label>
		<input type="text" name="CPassword" id="CPassword"/>
		<br/>
		
		<br/>
		
		
		
		<form id="EmpLogin" action="UserLogin.php" method="post">
		<input type="submit" name = "Register" value="Register New User"/>
		// MAKE BUTTON CHECK IF PASSWORDS = PASSWORDS, ADD TO DATABASE
		</form>		

	</body>
</html>