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
        <li><a href="#"> Admin</a></li>
      </ul>
    </nav>
  </header>
    
    <body>
        <p>You are not logged in.</p>
        
         <label for="Username"> Username:  &ensp; </label>
             <input type="text" name="Username" id="Username"/>    
                <br/>
        
             <label for="Password"> Password:  &ensp;  </label>
             <input type="text" name="Password" id="Password"/>  
                <br/>

        <input type="submit" name = "Login" value="Login"/> 
		<br/>
		<br/>
		
		<form id="Register" action="Register.php" method="post">		
			<input type="submit" name = "Register" value="Register New User"/>     
		</form>
	</body>

	
	
					<form id="EmpQuery" action="EmpQuery.php" method="post">				
						<input type="submit" name="Emp" value="Emp" title="Test button"/> //REMOVE THIS BUTTON ON FINISHED COPY
					</form>		

</html>