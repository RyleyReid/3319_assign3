<?php
$query = "SELECT * FROM customer ORDER BY customer.lastname";
$result = mysqli_query($connection,$query);
if (!$result) {
    die("databases query failed.");
}
echo 'CID ----[      Name    ]----[phone #]----[agent]' . "<br>" ;
while ($row = mysqli_fetch_assoc($result)) {
	echo '<input type="radio" name="Customer" value="';
    	echo $row["CID"];
	echo '">' . $row["CID"] . "---- " . $row["lastname"] . ",  " . $row["firstname"] . "---- " . $row["phoneNUM"] . "---- " . $row["agentID"] . "<br>";

}
	mysqli_free_result($result);
?>
