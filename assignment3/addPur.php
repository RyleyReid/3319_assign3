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

        $CID= $_POST["Customer"];
        $PID= $_POST["Product"];
	$AM= $_POST["amount"];

	$NewP= $_POST["Phone_phone"];
        $queryCheck= 'SELECT * FROM purchases WHERE Customer= "'.$CID.'" AND Product= "'.$PID .'"';

        $Check=mysqli_query($connection,$queryCheck);
        $row=mysqli_fetch_assoc($Check);
        $C=$row["amount"];
	echo $C;

        if (!$Check) {
                echo $query;
                die("database query2 failed.");
        }

	else if($C == 0){
                $queryInsert= 'INSERT INTO purchases VALUES("'.$CID.'","'.$AM.'","'.$PID.'")';
		echo 'New Customer Purchase has been added';
        	mysqli_query($connection,$queryInsert);
	}
        else if ($C > 0){
		$AM = $AM + $C;
		$queryAdd= 'UPDATE purchases SET amount = "'.$AM.'" WHERE CID ="'.$CID.'" AND PID="'.$PID.'"';
                mysqli_query($connection,$queryAdd);
                echo 'New Customer Purchase has been added to their total';
        }
?>
</ol>
<?php
   mysqli_close($connection);
?>
</body>
</html>




