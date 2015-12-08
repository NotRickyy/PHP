<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<link href="CSS/mainPage.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="JavaScript/Clock.js"></script>
	<head>
		<title>Add Car</title>
		<link rel="shortcut icon" href="Crow.jpg" />
		<h1>Add Car</h1>
	</head>

	<body>
		<p>Please Add Car</p>
		
		<label for="Make"> Make:  &ensp; </label>
		<input type="text" name="Make" id="Make"/>
		<br/>
		
		<label for="Model"> Model:  &ensp; </label>
		<input type="text" name="Model" id="Model"/>
		<br/>
		
		<label for="Year"> Year:  &ensp; </label>
		<input type="text" name="Year" id="Year"/>
		<br/>
		
		<label for="Colour"> Colour:  &ensp; </label>
		<input type="text" name="Colour" id="Colour"/>
		<br/>
		
		<label for="KM"> KM:  &ensp; </label>
		<input type="text" name="KM" id="KM"/>
		<br/>
		
		<label for="Location"> Location:  &ensp; </label>
		<input type="text" name="Location" id="Location"/>
		<br/>		
		
		<label for="Accidents"> Accidents:  &ensp; </label>
		<input type="text" name="Accidents" id="Accidents"/>
		<br/>
		
		<label for="Owners"> Owners:  &ensp; </label>
		<input type="text" name="Owners" id="Owners"/>
		<br/>
		
		<label for="VIN"> VIN:  &ensp; </label>
		<input type="text" name="VIN" id="VIN"/>
		<br/>
		
		<label for="Price"> Price:  &ensp; </label>
		<input type="text" name="Price" id="Price"/>
		<br/>		
		

		
		
		
		
		
		<form id="EmpLogin" action="UserLogin.php" method="post">
		<input type="submit" name = "Register" value="Register New User"/>
		// MAKE BUTTON CHECK IF PASSWORDS = PASSWORDS, ADD TO DATABASE
		</form>		

	</body>
</html>