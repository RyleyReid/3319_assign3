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
	$records= $_POST["PID"];
	$query='SELECT SUM(amount) AS amount, description, price*SUM(amount) AS total_profit FROM purchases INNER JOIN product ON purchases.Product = product.PID GROUP BY Product HAVING Product ="'.$records.'"';
	$result=mysqli_query($connection,$query);
	if (!$result) {
		echo $query;
        	die("database query2 failed.");

     	}
    	$row=mysqli_fetch_assoc($result); 
       	echo $row["amount"] . " " . $row["description"] . " " . $row["total_profit"];

     	mysqli_free_result($result);
?>
</ol>
<?php
   mysqli_close($connection);
?>
</body>
</html>
