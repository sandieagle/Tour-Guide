<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Tour_guide";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection

if ($conn->connect_error) {

    die("Connection failed: " . $conn->connect_error);
}

$vehicle_choice=$_POST['vehicle_choice'];  
$vehicle_type=$_POST['vehicle_type'];   

$sql = "INSERT INTO vehicleType(VehicleSelected,VehicleType)
VALUES ('$vehicle_choice','$vehicle_type')";

if ($conn->query($sql) === TRUE) {
    echo '<script type="text/javascript">alert("Saved Succefully!");</script>';
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>