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

if (isset($_POST["submit"])) {
    $fileName = $_FILES['fileToUpload']['name'];
    $fileTmpName = $_FILES['fileToUpload']['tmp_name'];

    // Read the file content
    $fileContent = file_get_contents($fileTmpName);

    // Prepare SQL to insert file content into the database
    $stmt = $conn->prepare("INSERT INTO payniiiii (file_name, file_content) VALUES (?, ?)");

    // Check if the statement was prepared successfully
    if ($stmt) {
        // Bind parameters
        $stmt->bind_param("ss", $fileName, $fileContent);

        // Execute the statement
        $stmt->execute();

        // Check if the insertion was successful
        if ($stmt->affected_rows > 0) {
            echo "File uploaded and saved to database successfully.";
        } else {
            echo "Error uploading file.";
        }

        // Close the statement
        $stmt->close();
    } else {
        echo "Error in SQL statement preparation: " . $conn->error;
    }
}

$conn->close();
?>

