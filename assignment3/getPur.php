<?php



$queryC = "SELECT * FROM customer";
$queryP = "SELECT *  FROM product";

$resultC = mysqli_query($connection,$queryC);
$resultP = mysqli_query($connection,$queryP);
echo "<br><br>";

echo " Select a customer and a product to create a purchase";
echo "<br> Customers <br>";
if (!$resultC || !$resultP) {
    die("databases query failed.");
}

while ($row = mysqli_fetch_assoc($resultC)) {
        echo '<input type="radio" name="Customer" value="';
        echo $row["CID"];
        echo '">' .  $row["firstname"] . ",  " . $row["firstname"] . "<br>";
}

echo "<br><br> Products<br>";
while ($row = mysqli_fetch_assoc($resultP)) {
        echo '<input type="radio" name="Product" value="';
        echo $row["PID"];
        echo '">' . $row["description"] . "<br>";

}
        mysqli_free_result($resultC);
	mysqli_free_result($resultP);
?>



