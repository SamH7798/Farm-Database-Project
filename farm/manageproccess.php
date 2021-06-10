<?php

// Employee Info
$employee_id = $_POST["employee_id"];
$employee_name = $_POST["employee_name"];
$dept = $_POST["dept"];
$employee_plot = $_POST["employee_plot"];
$wage = $_POST["wage"];

// Deleting Employee Info
$deleted_id = $_POST["deleted_id"];


// Updating Employee Info
$wage_id = $_POST["wage_id"];
$new_wage = $_POST["new_wage"];

// Create connection #servername, username, password, db 
$conn = mysqli_connect("localhost", "root", "","farm");
// Check connection
if (!$conn) {
   die("Connection failed: " . mysqli_connect_error());
}

		//Entering Employee Info
$sql = "INSERT INTO employee(employee_ID, employee_name, dept_name, plot_num, weekly_wage) 
VALUES ($employee_id, '$employee_name', '$dept', $employee_plot, $wage)";

if(mysqli_query($conn, $sql)){
    echo "|Employee Info Entered| ";
} else{
    echo "|No Employee Entered| ";
}
 
		//Deleteing Employee Info

$sql2 = "DELETE FROM employee where employee_ID = $deleted_id";

if(mysqli_query($conn, $sql2)){
    echo "  |Employee Deleted| ";
} else{
    echo "  |No Employee Deleted|";
}

//         Updating Employee Wage

$sql3 = "UPDATE employee SET weekly_wage = $new_wage WHERE employee_ID= $wage_id";

if(mysqli_query($conn, $sql3)){
    echo "  |Employee Wage Updated|";
} else{
    echo "  |No Employee Wage Update|";
}


mysqli_close($conn);

?>