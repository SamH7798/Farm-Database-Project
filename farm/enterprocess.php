<?php

// Grab Crop Info
$crop_name = $_POST["crop_name"];
$crop_id = $_POST["crop_id"];
$crop_plot = $_POST["crop_plot"];
$ppc = $_POST["ppc"];
$crop_count = $_POST["crop_count"];

// Grab Livestock Info
$livestock_name = $_POST["livestock_name"];
$livestock_id = $_POST["livestock_id"];
$livestock_plot = $_POST["livestock_plot"];
$ppa = $_POST["ppa"];
$animal_count = $_POST["animal_count"];

// Create connection #servername, username, password, db 
$conn = mysqli_connect("localhost", "root", "","farm");
// Check connection
if (!$conn) {
   die("Connection failed: " . mysqli_connect_error());
}

		//inserting into crop
$sql = "INSERT INTO crops(crop_name, crop_ID, plot_num, PPC, crop_count, total_value) 
VALUES ('$crop_name', $crop_id, $crop_plot, $ppc, $crop_count, '')";

if(mysqli_query($conn, $sql)){
    echo "|Crops inserted successfully| ";
} else{
    echo "|No Crops inserted| ";
}
 
		//inserting into livestock

$sql2 = "INSERT INTO livestock(livestock_name, livestock_ID, plot_num, PPA, animal_count, total_value ) 
VALUES ('$livestock_name', $livestock_id, $livestock_plot, $ppa, $animal_count, '')";

if(mysqli_query($conn, $sql2)){
    echo "  |Livestock inserted successfully|";
} else{
    echo "  |No LiveStock inserted|";
}


mysqli_close($conn);

?>