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
        <li><a href="UserLogin.php"> Admin</a></li>
      </ul>
    </nav>
  </header>

	<body>
		<p>Please Register Below</p>
		
		<form id="Register" action="Register.php" method="post">		
		
		<label for="Username"> Username:  &ensp; </label>
		<br/>
		<input type="text" name="Username" id="Username"/>
		<br/>
		
		<label for="Password"> Password:  &ensp; </label>
		<br/>
		<input type="text" name="Password" id="Password"/>
		<br/>
		
<!--		<label for="CPassword"> Confirm Password:  &ensp; </label>
		<br/>
		<input type="text" name="CPassword" id="CPassword"/>
		<br/>
-->
		
		<br/>	
		<input type="submit" name = "Register" value="Register"/>
		</form>		
          <?php

    $db = "(DESCRIPTION=(ADDRESS_LIST = (ADDRESS = (PROTOCOL = TCP)(HOST = dilbert.humber.ca)(PORT = 1521)))(CONNECT_DATA=(SID=grok)))" ;

    if($c = OCI_connect("n00839957", "oracle", $db))
    {
        //echo "Successfully connected to Oracle.\n";
        //OCI_close($c);
    }
    else
    {
        $err = OCIError();
        echo "Connection failed." . $err[text];
    }


if ((isset($_POST['Register']) ? $_POST['Register'] : null)=="Register") {

    if (((isset($_POST['Username']) ? $_POST['Username'] : null)!=null)
       && ((isset($_POST['Password']) ? $_POST['Password'] : null)!=null))
	   {

        $user = $_POST['Username']; 
        $pass = $_POST['Password']; 

        $cmd = "INSERT INTO account values 
        (:user_bv, :pass_bv)";
        $stid = oci_parse($c, $cmd);
        oci_bind_by_name($stid, ":user_bv", $user);
        oci_bind_by_name($stid, ":pass_bv", $pass);
		
				if (oci_execute($stid))
    echo "Successfully added to the db";
else
    echo oci_error();
    }
    else{
        echo "You haven't entered the right data";

    }
}
?>	 

            <?php
                    $db = "(DESCRIPTION=(ADDRESS_LIST = (ADDRESS = (PROTOCOL = TCP)(HOST = dilbert.humber.ca)(PORT = 1521)))(CONNECT_DATA=(SID=grok)))" ;

                    $conn = oci_connect('N00839957', 'oracle', $db);
                    if (!$conn) {
                        $e = oci_error();
                        trigger_error(htmlentities($e['message'], ENT_QUOTES), E_USER_ERROR);
                    }
                    
                    // Prepare the statement
                    $stid = oci_parse($conn, 'SELECT username, password FROM account');
                    if (!$stid) {
                        $e = oci_error($conn);
                        trigger_error(htmlentities($e['message'], ENT_QUOTES), E_USER_ERROR);
                        echo "Hello";
                    }

                    // Perform the logic of the query
                    $r = oci_execute($stid);
                    if (!$r) {
                        $e = oci_error($stid);
                        trigger_error(htmlentities($e['message'], ENT_QUOTES), E_USER_ERROR);
                    }

                    // Fetch the results of the query
                    print "<table border='1'>\n";
					print "<th>Username</th>";
					print "<th>Password</th>";

		
                    while ($row = oci_fetch_array($stid, OCI_ASSOC+OCI_RETURN_NULLS)) {
						
                        print "<tr>\n";
                        foreach ($row as $item) {
                            print "    <td>" . ($item !== null ? htmlentities($item, ENT_QUOTES) : "&nbsp;") . "</td>\n";
                        }
                        print "</tr>\n";
                    }
                    print "</table>\n";

                    oci_free_statement($stid);
                    oci_close($conn);
            ?>    



        <footer>
    <p>© Copyright 2015 C.C Used Car Lot</p>
  </footer>
  <div id="date_time" class="clock"> 
    <script type="text/javascript">window.onload = date_time('date_time');</script> 
  </div>
  <p> </a> </p>
</div>
	  
	</body>
</html>