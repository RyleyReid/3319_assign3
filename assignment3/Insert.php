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
<h1>Here are the Profits:</h1>
<ol>
<?php

	$ID= $_POST["ID"];
	$FN= $_POST["first"];
	$LN= $_POST["last"];
	$city= $_POST["city"];
	$phone= $_POST["phone"];
	$AID= $_POST["agent"];

	
	$queryInsert = 'INSERT INTO customer VALUES("' . $ID . '","' . $FN . '","' . $LN . '","' . $city . '","' . $phone . '","' . $AID . '")';
	$queryAID='SELECT AID FROM agent WHERE AID = "'.$AID.'"';
	$queryCID='SELECT CID FROM customer WHERE CID = "'.$ID.'"';

        $resultA=mysqli_query($connection,$queryAID);
        $resultC=mysqli_query($connection,$queryCID);
	
	$rowA=mysqli_fetch_assoc($resultA);
	$rowC=mysqli_fetch_assoc($resultC);
	$A=$rowA["AID"];
	$C=$rowC["CID"];

	if (!$resultA || !$resultC) {
                echo $query;
                die("database query2 failed.");
        }
	else if($A != $AID){
		die("This agent doesn't exist");
	}
	else if($C == $ID){
                die("This customer ID eis already in use");
        }
	else{
		mysqli_query($connection,$queryInsert);
        	mysqli_free_result($resultA);
		mysqli_free_result($resultC);
		echo 'New Customer has been added';
	}
?>
</ol>
<?php
   mysqli_close($connection);
?>
</body>
</html>



