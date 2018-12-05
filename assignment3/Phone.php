<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Purchases</title>
</head>
<body>
<?php
        include 'connectdb.php';
?>
<h1>Phone update</h1>
<ol>
<?php

        $ID= $_POST["Phone_ID"];
        $NewP= $_POST["Phone_phone"];
        $queryInsert= 'UPDATE customer SET phoneNUM = "' . $NewP . '" WHERE CID ="' . $ID . '"';
        
	$queryCID= 'SELECT CID FROM customer WHERE CID = "'.$ID.'"';
        $resultC=mysqli_query($connection,$queryCID);
	$rowC=mysqli_fetch_assoc($resultC);
        $C=$rowC["CID"];

	if (!$resultC) {
                echo $query;
                die("database query2 failed.");
        }
        else if($C != $ID){
                die("This customer ID doesnt exists");
        }
        else{
                mysqli_query($connection,$queryInsert);
                mysqli_free_result($resultC);
                echo 'New Customer Phone has been added';
        }
?>
</ol>
<?php
   mysqli_close($connection);
?>
</body>
</html>

