<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "testdb";

// Create connection
$connection = new mysqli($servername, $username, $password, $database);

// Check for connection error
if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}

// Check if 'id' is passed in the URL
if (isset($_GET["id"])) {
    $id = $_GET["id"];
    
    // Use a prepared statement to prevent SQL injection
    $stmt = $connection->prepare("DELETE FROM samplecrud WHERE id = ?");
    $stmt->bind_param("i", $id);
    
    if ($stmt->execute()) {
        // Redirect after successful deletion
        header("Location: /Index.php");
        exit;
    } else {
        die("Error deleting record: " . $connection->error);
    }
}

// Close the connection
$connection->close();

