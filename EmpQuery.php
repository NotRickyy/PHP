<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta charset="utf-8">
		<link rel="shortcut icon" href="icon.png" />
		<title>Employee Page </title>
		<h1> Employee Query </h1>
	</head>

<?php

                if (isset($_POST['submit']))
                {
                    if ($_POST['submit'] == "Print all"){
                    
                    $db = "(DESCRIPTION=(ADDRESS_LIST = (ADDRESS = (PROTOCOL = TCP)(HOST = dilbert.humber.ca)(PORT = 1521)))(CONNECT_DATA=(SID=grok)))" ;

                    $conn = oci_connect('N00839957', 'oracle', $db);
                    if (!$conn) {
                        $e = oci_error();
                        trigger_error(htmlentities($e['message'], ENT_QUOTES), E_USER_ERROR);
                    }
                    

                    // Prepare the statement
                    $stid = oci_parse($conn, 'SELECT * FROM books');
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
					
					?>

	<body>
		<table width="200" border="1">
			<tr>
				<th scope="col">Picture</th>			
				<th scope="col">Make</th>
				<th scope="col">Model</th>
				<th scope="col">Year</th>
				<th scope="col">Colour</th>				
				<th scope="col">KM</th>
				<th scope="col">Location</th>				
				<th scope="col">Accidents?</th>
				<th scope="col">Owners</th>
				<th scope="col">VIN</th>
				<th scope="col">Price</th>
			</tr>
			
			<tr>
				<td>test</td>
				<td>test</td> 
				<td>test</td> 
				<td>test</td> 
				<td>test</td>
				<td>test</td>
				<td>test</td>
				<td>test</td> 
				<td>test</td> 
				<td>test</td> 
				<td>test</td> 
			</tr>
			
			<tr>
				<td>test</td>
				<td>test</td> 
				<td>test</td> 
				<td>test</td> 
				<td>test</td>
				<td>test</td>
				<td>test</td>
				<td>test</td> 
				<td>test</td> 
				<td>test</td> 
				<td>test</td> 
			</tr>
			
		</table>
	</body>
</html>

