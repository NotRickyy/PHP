<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>CRAZY CROW'S</title>
<link rel="shortcut icon" href="Crow.jpg" />
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
     
    <form>
    <legend>You are not logged in.</legend>
    <fieldset>
       
       
         <label for="Username"> Username:  </label><br/>
             <input type="text" name="Username" id="Username"/>    
                <br/>
        
<label for="Password"> Password:  </label>
             <p>If you experience any login issues, please contact your administrator.
             </p>
             <br/>
             <input type="text" name="Password" id="Password"/>  
                <br/>
                <br/>

        <input type="submit" name = "Login" value="Login"/> 
		<br/>
		<br/>
        <input type="submit" name = "Register" value="Register New User"/>  
        <br/>
        <br/>
		
		<form id="Register" action="Register.php" method="post">		
			   
		</form>
        
        <footer>
    <p>© Copyright 2015 C.C Used Car Lot</p>
  </footer>
  <div id="date_time" class="clock"> 
    <script type="text/javascript">window.onload = date_time('date_time');</script> 
  </div>
  <p> </a> </p>
</div>
        
</body>

	
	
					<form id="EmpQuery" action="EmpQuery.php" method="post">				
		<!--				<input type="submit" name="Emp" value="Emp" title="Test button"/> //REMOVE THIS BUTTON ON FINISHED COPY		-->
					</form>		
                    
                    </fieldset>
                    </form>

</html>