<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Tour_guide";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_POST['submit'])) {

    $email = $_POST['email'];
    $password = $_POST['password'];
    // SQL query to check if the provided username and password match
    $sql = "SELECT * FROM signup WHERE email = '$email' AND password = '$password'";

    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        header('Location: traveler.php');
        exit;
    } else {
        echo "Login failed"; // User not found or incorrect password
    }

    mysqli_close($conn);
}
?>