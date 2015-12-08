<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
		<title> Login </title>
		<link rel="shortcut icon" href="Crow.jpg" />	
        <h1> LOGIN</h1>
    </head>
    
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