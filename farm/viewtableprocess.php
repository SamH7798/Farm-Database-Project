<?php

// Grab User submitted information




// Create connection #servername, username, password, db 
$conn = mysqli_connect("localhost", "root", "","farm");
// Check connection
if (!$conn) {
   die("Connection failed: " . mysqli_connect_error());
}

//---------View crops--------------- 

$sql = "SELECT * FROM crops";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  echo "<table><tr><th>crop_name</th><th>crop_ID</th><th>plot_num</th><th>PPC</th><th>crop_count</th><th>total_value</th></tr>";
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "<tr><td>".$row["crop_name"]."</td><td>".$row["crop_ID"]."</td><td>".$row["plot_num"]."</td><td>".$row["PPC"]."</td><td>".$row["crop_count"]."</td><td>".$row["total_value"]."</td></tr>";
  }
  echo "</table>";
	} else {
  echo "0 results";
	}


//--------View Livestock------------------------
	
	$sql2 = "SELECT * FROM livestock";
	$result2 = $conn->query($sql2);

	if ($result2->num_rows > 0) {
  echo "<table><tr><th>livestock_name</th><th>livestock_ID</th><th>plot_num</th><th>PPA</th><th>animal_count</th><th>total_value</th></tr>";
  // output data of each row
  while($row = $result2->fetch_assoc()) {
    echo "<tr><td>".$row["livestock_name"]."</td><td>".$row["livestock_ID"]."</td><td>".$row["plot_num"]."</td><td>".$row["PPA"]."</td><td>".$row["animal_count"]."</td><td>".$row["total_value"]."</td></tr>";
  }
  echo "</table>";
	} else {
  echo "0 results";
	}

//-----------------View Employees--------------
$sql3 = "SELECT * FROM employee";
	$result3 = $conn->query($sql3);

	if ($result3->num_rows > 0) {
  echo "<table><tr><th>employee_ID</th><th>employee_name</th><th>dept_name</th><th>plot_num</th><th>weekly_wage</th></tr>";
  // output data of each row
  while($row = $result3->fetch_assoc()) {
    echo "<tr><td>".$row["employee_ID"]."</td><td>".$row["employee_name"]."</td><td>".$row["dept_name"]."</td><td>".$row["plot_num"]."</td><td>".$row["weekly_wage"]."</td></tr>";
  }
  echo "</table>";
	} else {
  echo "0 results";
	}


mysqli_close($conn);

?>