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
	

<h1>Here are all the products purchased </h1>
<ol>
<?php  
	      	$records= $_POST["Customer"];
        	$query='SELECT description, amount FROM purchases INNER JOIN product WHERE Product=PID AND Customer = "'.$records.'"'; 
        	$result=mysqli_query($connection,$query);
     
	   	if (!$result) {
                	die("database query2 failed.");

        	}
         	while ($row=mysqli_fetch_assoc($result)) {
                	echo $row["amount"] . " " . $row["description"];
                	echo "<br>";
        	}
        	mysqli_free_result($result);
?>		
</ol>

<?php
   mysqli_close($connection);
?>
</body>
</html>



