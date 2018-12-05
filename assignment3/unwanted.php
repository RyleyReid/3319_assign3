<?php
$query = "SELECT product.description FROM product WHERE product.PID NOT IN (SELECT product FROM purchases)";
$result = mysqli_query($connection,$query);
if (!$result) {
    die("databases query failed.");
}
echo "<br>";
while ($row = mysqli_fetch_assoc($result)) {    
	echo $row["description"] . "<br>";
}
echo "<br>";
mysqli_free_result($result);
?>
