<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta charset="utf-8">
		<link rel="shortcut icon" href="icon.png" />
		<title>Employee Page </title>

	</head>

	<body>
				<center>
						<h1> Employee Query </h1> 
		<form id="RegQuery" action="RegQuery.php" method="post">
			<input type="submit" name="submit" value="Register">
		</form>

            <?php                 
                    $db = "(DESCRIPTION=(ADDRESS_LIST = (ADDRESS = (PROTOCOL = TCP)(HOST = dilbert.humber.ca)(PORT = 1521)))(CONNECT_DATA=(SID=grok)))" ;

                    $conn = oci_connect('N00839957', 'oracle', $db);
                    if (!$conn) {
                        $e = oci_error();
                        trigger_error(htmlentities($e['message'], ENT_QUOTES), E_USER_ERROR);
                    }
                    

                    // Prepare the statement
                    $stid = oci_parse($conn, 'SELECT * FROM insanecrow');
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
					print "<th>Make</th>";
					print "<th>Model</th>";
					print "<th>Year</th>";
					print "<th>Colour</th>";
					print "<th>KM</th>";
					print "<th>Location</th>";
					print "<th>Accidents</th>";
					print "<th>Owners</th>";
					print "<th>VIN</th>";
					print "<th>Price</th>";
					
					
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
                               
                if (isset($_POST['submit']))
                {					
					
                    if ($_POST['submit'] == "Register"){
                        
                        $db = "(DESCRIPTION=(ADDRESS_LIST = (ADDRESS = (PROTOCOL = TCP)(HOST = dilbert.humber.ca)(PORT = 1521)))(CONNECT_DATA=(SID=grok)))" ;

                        $conn = oci_connect('N00839957', 'oracle', $db);
                        if (!$conn) {
                            $e = oci_error();
                            trigger_error(htmlentities($e['message'], ENT_QUOTES), E_USER_ERROR);
                        }

                        $stid = oci_parse($conn, "INSERT INTO books ('".$_POST["ISBN"]."', '".$_POST["Author"]."', '".$_POST["Title"]."', '".$_POST["Price"]."')");
                        if (!$stid) {
                            $e = oci_error($conn);
                            trigger_error(htmlentities($e['message'], ENT_QUOTES), E_USER_ERROR);
                        }
                    }
                        
                }

            ?>   	  
			</center>
	</body>
</html>