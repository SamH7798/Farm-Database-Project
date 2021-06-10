<?php

// Grab User submitted information

$plot = $_POST["plot"];

$printAnything = False;

// Create connection #servername, username, password, db 
$conn = mysqli_connect("localhost", "root", "","farm");
// Check connection
if (!$conn) {
   die("Connection failed: " . mysqli_connect_error());
}
if($conn){
echo "connectd";
}
//---------Get Crops-------------

$stmt = $conn->prepare("SELECT crop_name from crops where plot_num = $plot");

$stmt->bind_param($plot_number);

$stmt->execute();

$result = $stmt->get_result();
$check = mysqli_fetch_array($result);

if(isset($check)){
  echo 'This field contains: ' + $check[0] + '\n';
  $printAnything = True;
}

//---------Get Livestock----------

$stmt2 = $conn->prepare("SELECT livestock_name from livestock where plot_num = $plot");

$stmt2->bind_param($plot_number);

$stmt2->execute();

$resultLS = $stmt2->get_result();
$checkLS = mysqli_fetch_array($resultLS);

if(isset($checkLS)){
  echo 'The animal(s) that live here are ' + $checkLS[0] + '\n';
  $printAnything = True;
}

//---------Get Employee---------

$stmt3 = $conn->prepare("SELECT employee_name from employee where plot_num = $plot");

$stmt3->bind_param($plot_number);

$stmt3->execute();

$resultEM = $stmt3->get_result();
$checkEM = mysqli_fetch_array($resultEM);

if(isset($checkEM)){
  echo 'The employee who works here is ' + $checkEM[0] + '\n';
  $printAnything = True;
}

if(!$printAnything){
  echo 'Nothing is currently assigned to this field';
}


mysqli_close($conn);

?>