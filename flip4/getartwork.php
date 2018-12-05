<?php
 $whichMus = $_POST["pickamuseum"]; //get selected museum value from the form
 $query = "SELECT * FROM workofart WHERE whichmus = " . $whichMus ; //fill in with correct query
 echo $whichMus

 $result = mysql_query($connection, $query);
 if (!$result) {
 die("databases query on art pieces failed. ");
 }
 
 echo "<ul>"; //put the artwork in an unordered bulleted list

 echo "</ul>"; //end the bulleted list
 mysqli_free_result($result);

?>
