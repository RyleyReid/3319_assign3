<?php
$query = "SELECT customer.firstname, customer.lastname, product.description, purchases.amount  FROM (purchases INNER JOIN customer ON customer.CID=purchases.Customer) INNER JOIN product ON purchases.Product = product.PID ORDER BY purchases.amount";
$result = mysqli_query($connection,$query);
if (!$result) {
    die("databases query failed.");
}
echo "<br>" ;
while ($row = mysqli_fetch_assoc($result)) {
    
        echo  $row["firstname"] . "---- " . $row["lastname"] . ",  " . $row["description"] . "---- " . $row["amount"] . "---- " . "<br>";

}
        mysqli_free_result($result);
?>





