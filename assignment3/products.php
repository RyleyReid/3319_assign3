<?php
$query = "SELECT * FROM product";
$result = mysqli_query($connection,$query);
if (!$result) {
    die("databases query failed.");
}
echo "<ol>";
while ($row = mysqli_fetch_assoc($result)) {
    	echo '<input type="radio" name="PID" value="';
        echo $row["PID"];
	echo '">' . $row["PID"] . " " . $row["description"] . "<br>";
}
mysqli_free_result($result);
echo "</ol>";
?>
