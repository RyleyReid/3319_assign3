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
<h1>DELETION</h1>
<ol>
<?php

        $ID= $_POST["Delete_ID"];
        
	$queryDELETE= 'DELETE FROM customer WHERE CID = "'.$ID .'"';
        $queryCID= 'SELECT CID FROM customer WHERE CID = "'.$ID.'"';
        $resultC= mysqli_query($connection,$queryCID);
        $rowC= mysqli_fetch_assoc($resultC);
        $C=$rowC["CID"];

        if (!$resultC) {
                echo $query;
                die("database query2 failed.");
        }
        else if($C != $ID){
                die("This customer ID doesnt exists, please try again");
        }
        else{
                mysqli_query($connection,$queryDELETE);
                mysqli_free_result($resultC);
                echo 'Customer removed';
        }
?>
</ol>
<?php
   mysqli_close($connection);
?>
</body>
</html>












