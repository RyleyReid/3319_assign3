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
<h1>Here areall the products purchased in a quantity equal to or larger than the number specified </h1>
<ol>
<?php
        $records= $_POST["input"];
        $query='SELECT customer.firstname, customer.lastname, temp.amount, product.description FROM customer, product ,(SELECT * FROM purchases WHERE amount> "'.$records.'") AS temp WHERE CID=Customer AND temp.Product=product.PID ORDER BY customer.firstname';
        $result=mysqli_query($connection,$query);
        if (!$result) {
                die("database query2 failed.");

        }
	 while ($row=mysqli_fetch_assoc($result)) {
                echo $row["firstname"] . " " . $row["lastname"] . " " . $row["amount"] . " " . $row["description"];
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
