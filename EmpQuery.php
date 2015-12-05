<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title></title>
</head>

<body>
<table width="200" border="1">
  <tr>
    <th scope="col">Location</th>
    <th scope="col">Colour</th>
    <th scope="col">Make</th>
    <th scope="col">Model</th>
    <th scope="col">Year</th>
    <th scope="col">Km</th>
    <th scope="col">Accident</th>
    <th scope="col">Owners</th>
    <th scope="col">Vin</th>
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
  </tr>
</table>


<input type="submit" name="search" value="Search da Lot" title="User login button"/> 

</body>
</html>



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
					
                    <!-- Albert Stopped coding here (1:57am 12/05/2015 ) -->