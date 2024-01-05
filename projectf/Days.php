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

$numOfDays=$_POST['numOfDays'];   
$startDate=$_POST['startDate']; 

$sql = "INSERT INTO days (NumberofDays,StartingDate)
VALUES ('$numOfDays','$startDate')";

if ($conn->query($sql) === TRUE) {
    echo '<script type="text/javascript">alert("Saved Succefully!");</script>';
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>