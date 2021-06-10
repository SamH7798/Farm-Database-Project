<?php

// Grab User submitted information




// Create connection #servername, username, password, db 
$conn = mysqli_connect("localhost", "root", "","farm");
// Check connection
if (!$conn) {
   die("Connection failed: " . mysqli_connect_error());
}

//---------Calculate Sum--------------- 
$stmt = $conn->prepare("SELECT sum_finances()");

$stmt->execute();

$result = $stmt->get_result();

$check = mysqli_fetch_array($result);


if ($conn) {
  echo "Total Value of all farm assets is $ $check[0]";

	}




mysqli_close($conn);

?>