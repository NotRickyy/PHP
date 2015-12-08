<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>CRAZY CROW'S</title>
<link href="CSS/mainPage.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="JavaScript/Clock.js"></script>
</head>

<body>
<div id="wrapper">
  <header id="top">
    <h1>CRAZY CROW'S USED CAR LOT</h1>
    <nav id="mainnav">
      <ul>
        <li><a href="MainPage.php" class="thispage">Home</a></li>
        <li><a href="CustQuery.php"> Customer</a></li>
        <li><a href="UserLogin.php"> Admin</a></li>
      </ul>
    </nav>
  </header>

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