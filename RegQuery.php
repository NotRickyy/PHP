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
  
    
   	  <fieldset>
    <legend>Please Add Car</legend>
			<form action="EmpQuery.php" method="post">
		  <label for="Make"> Make:    </label>
		  <br/>
		  <input type="text" name="Make" id="Make"/>
		  <br/>		  
		  <label for="Model">Model:  </label>
		  <br/>
		  <input type="text" name="Model" id="Model"/>
		  <br/>		  
		  <label for="Year"> Year:  </label>
		  <br/>
		  <input type="text" name="Year" id="Year"/>
		  <br/>		  
		  <label for="Colour"> Colour:  </label>
		  <br/>
		  <input type="text" name="Colour" id="Colour"/>
		  <br/>		  
		  <label for="KM"> KM: </label>
		  <br/>
		  <input type="text" name="KM" id="KM"/>
		  <br/>	  
		  <label for="Location"> Location:   </label>
		  <br/>
		  <input type="text" name="Location" id="Location"/>
		  <br/>	  
		  <label for="Accidents"> Accidents:   </label>
		  <br/>
		  <input type="text" name="Accidents" id="Accidents"/>
		  <br/>		  
		  <label for="Owners"> Owners:   </label>
		  <br/>
		  <input type="text" name="Owners" id="Owners"/>
		  <br/>		  
		  <label for="VIN"> VIN:  </label>
		  <br/>
		  <input type="text" name="VIN" id="VIN"/>
		  <br/>		  
		  <label for="Price"> Price:  </label>
		  <br/>
		  <input type="text" name="Price" id="Price"/>
		  <br/>
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

    if (((isset($_POST['Make']) ? $_POST['Make'] : null)!=null)
       && ((isset($_POST['Model']) ? $_POST['Model'] : null)!=null)
       && ((isset($_POST['Year']) ? $_POST['Year'] : null)!=null)
       && ((isset($_POST['Colour']) ? $_POST['Colour'] : null)!=null)
       && ((isset($_POST['KM']) ? $_POST['KM'] : null)!=null)
       && ((isset($_POST['Location']) ? $_POST['Location'] : null)!=null)
       && ((isset($_POST['Accidents']) ? $_POST['Accidents'] : null)!=null)
       && ((isset($_POST['Owners']) ? $_POST['Owners'] : null)!=null)	   
       && ((isset($_POST['VIN']) ? $_POST['VIN'] : null)!=null)
       && ((isset($_POST['Price']) ? $_POST['Price'] : null)!=null))
    {
        $make = $_POST['Make']; 
        $model = $_POST['Model']; 
        $year = $_POST['Year']; 
		$colour = $_POST['Colour'];
		$km = $_POST['KM'];
		$location = $_POST['Location'];
		$accidents = $_POST['Accidents'];
		$owners = $_POST['Owners'];
		$vin = $_POST['VIN'];
        $price =$_POST['Price'];
		
        $cmd = "INSERT INTO insanecrow values 
        (:make_bv, :model_bv, :year_bv, :colour_bv, :km_bv, :location_bv, :accidents_bv, :owners_bv, :vin_bv, :price_bv)";
        $stid = oci_parse($c, $cmd);
        oci_bind_by_name($stid, ":make_bv", $make);
        oci_bind_by_name($stid, ":model_bv", $model);
        oci_bind_by_name($stid, ":year_bv", $year);
		oci_bind_by_name($stid, ":colour_bv", $colour);
        oci_bind_by_name($stid, ":km_bv", $km);
		oci_bind_by_name($stid, ":location_bv", $location);
		oci_bind_by_name($stid, ":accidents_bv", $accidents);
		oci_bind_by_name($stid, ":owners_bv", $owners);
		oci_bind_by_name($stid, ":vin_bv", $vin);
		oci_bind_by_name($stid, ":price_bv", $price);
				if (oci_execute($stid))
    echo "Successfully added to the db";
else
    echo oci_error();
    }
    else{
        echo "You haven't entered the right data";
		echo var_dump($_POST);

    }
    
}

?>		
        
        </fieldset>	

	</body>
		

       
        <footer>
    <p>© Copyright 2015 C.C Used Car Lot</p>
  </footer>
  <div id="date_time" class="clock"> 
    <script type="text/javascript">window.onload = date_time('date_time');</script> 
  </div>
  <p> </a> </p>
</div>
		<p>&nbsp;</p>		

</html>