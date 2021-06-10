<?php

// Crop Info
$update_crop_id = $_POST["update_crop_id"];
$new_crop_count = $_POST["new_crop_count"];

// Livestock Info
$update_livestock_id = $_POST["update_livestock_id"];
$new_livestock_count = $_POST["new_livestock_count"];

// Deteting Crop Info
$delete_crop_id = $_POST["delete_crop_id"];

//Deleting Livestock ID
$delete_livestock_id = $_POST["delete_livestock_id"];

// Create connection #servername, username, password, db 
$conn = mysqli_connect("localhost", "root", "","farm");
// Check connection
if (!$conn) {
   die("Connection failed: " . mysqli_connect_error());
}

		//Updating crop count
$sql = "UPDATE crops set crop_count = $new_crop_count WHERE crop_ID = $update_crop_id";

if(mysqli_query($conn, $sql)){
    echo "|Crop Count Updated| ";
} else{
    echo "|Crop Count Not Updated| ";
}
 
		//Updating LiveStock count

$sql2 = "UPDATE livestock set animal_count = $new_livestock_count WHERE livestock_ID = $update_livestock_id";

if(mysqli_query($conn, $sql2)){
    echo "  |Livestock Updated| ";
} else{
    echo "  |Livestock Count Not Updated|";
}

		//Delete Crop
$sql3 = "DELETE FROM crops WHERE crop_ID = $delete_crop_id";

if(mysqli_query($conn, $sql3)){
    echo " |Crop Deleted| ";
} else{
    echo " |Crop Not Deleted| ";
}
 
		//livestock
$sql4 = "DELETE FROM livestock WHERE livestock_ID = $delete_livestock_id";

if(mysqli_query($conn, $sql4)){
    echo " |Livestock Deleted| ";
} else{
    echo " |Livestock Not Deleted| ";
}

mysqli_close($conn);

?>