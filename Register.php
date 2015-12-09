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
		<input type="submit" name = "Register" value="Register"/>
		// MAKE BUTTON CHECK IF PASSWORDS = PASSWORDS, ADD TO DATABASE
		</form>		
        
        <footer>
    <p>© Copyright 2015 C.C Used Car Lot</p>
  </footer>
  <div id="date_time" class="clock"> 
    <script type="text/javascript">window.onload = date_time('date_time');</script> 
  </div>
  <p> </a> </p>
</div>
<?php
if ((isset($_POST['Register']) ? $_POST['Register'] : null)=="Register") {

    if (((isset($_POST['ISBN']) ? $_POST['ISBN'] : null)!=null)
       && ((isset($_POST['Author']) ? $_POST['Author'] : null)!=null)
       && ((isset($_POST['Title']) ? $_POST['Title'] : null)!=null)
       && ((isset($_POST['Price']) ? $_POST['Price'] : null)!=null))
    {
        $isbn = $_POST['ISBN']; 
        $author = $_POST['Author']; 
        $title = $_POST['Title']; 
        $price = floatval($_POST['Price']);
        $cmd = "INSERT INTO books values 
        (:isbn_bv, :author_bv, :title_bv, :price_bv)";
        $stid = oci_parse($c, $cmd);
        oci_bind_by_name($stid, ":isbn_bv", $isbn);
        oci_bind_by_name($stid, ":author_bv", $author);
        oci_bind_by_name($stid, ":title_bv", $title);
        oci_bind_by_name($stid, ":price_bv", $price);
        oci_execute($stid) or die (oci_error());
    }
}
?>
	</body>
</html>