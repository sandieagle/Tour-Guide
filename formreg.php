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

$name=$_POST['name'];  
$contactNo=$_POST['contactNo'];
$email=$_POST['email']; 
$address=$_POST['address'];  
$nic=$_POST['nic'];
$more=$_POST['more'];      

$sql = "INSERT INTO registration(Name,Contact,Email,Address,NIC,More)
VALUES ('$name','$contactNo','$email','$address','$nic','$more')";

if ($conn->query($sql) === TRUE) {
    echo '<script type="text/javascript">alert("Saved Succefully!");</script>';
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>