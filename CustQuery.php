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
        <li><a href="#"> Customer</a></li>
        <li><a href="UserLogin.php"> Admin</a></li>
      </ul>
    </nav>
  </header>

	<body>
		<center>
		<h1> Customer Query </h1>
            <?php
                    $db = "(DESCRIPTION=(ADDRESS_LIST = (ADDRESS = (PROTOCOL = TCP)(HOST = dilbert.humber.ca)(PORT = 1521)))(CONNECT_DATA=(SID=grok)))" ;

                    $conn = oci_connect('N00839957', 'oracle', $db);
                    if (!$conn) {
                        $e = oci_error();
                        trigger_error(htmlentities($e['message'], ENT_QUOTES), E_USER_ERROR);
                    }
                    
                    // Prepare the statement
                    $stid = oci_parse($conn, 'SELECT Make, Model, Year, Colour, KM FROM insanecrow');
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
			</center>
 </body>
</html>