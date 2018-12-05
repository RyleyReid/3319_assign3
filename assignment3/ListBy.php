
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
<h1> List sorted </h1>
<ol>
<?php
        $updown= $_POST["updown"];
	$sortOption= $_POST["sortOption"];
	
        $query;
	if($updown == 'up'){
		$query = 'SELECT * FROM product ORDER BY '.$sortOption.' ASC'; 	
	}
	else if ($updown == 'down'){
		$query = 'SELECT * FROM product ORDER BY '.$sortOption.' DESC';
	}
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

