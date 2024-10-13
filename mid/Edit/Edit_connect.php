<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "testdb";

// Establish database connection
$connection = new mysqli($servername, $username, $password, $database);

$name = "";
$email = "";
$phone = "";
$address = "";
$errorMessage = "";
$successMessage = "";

// Check connection
if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    if (!isset($_GET["id"])) {
        header("Location: /index.php");
        exit;
    }

    $id = $_GET["id"];
    
    // Prepare the statement to prevent SQL injection
    $stmt = $connection->prepare("SELECT * FROM samplecrud WHERE id = ?");
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $result = $stmt->get_result();
    $row = $result->fetch_assoc();

    if (!$row) {
        header("Location: /index.php");
        exit;
    }

    // Populate the form fields with the existing data
    $name = $row["name"];
    $email = $row["email"];
    $phone = $row["phone"];
    $address = $row["address"];

} else {
    // POST METHOD: Update the client data
    $id = $_POST["id"];
    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $address = $_POST["address"];

    // Validate inputs
    if (empty($name) || empty($email) || empty($phone) || empty($address)) {
        $errorMessage = "All fields are required.";
    } else {
        // Prepare the update statement
        $stmt = $connection->prepare("UPDATE samplecrud SET name = ?, email = ?, phone = ?, address = ? WHERE id = ?");
        $stmt->bind_param("ssssi", $name, $email, $phone, $address, $id);

        // Execute the update query and handle errors
        if ($stmt->execute()) {
            $successMessage = "Client updated successfully.";
            header("Location: /index.php");
            exit;
        } else {
            $errorMessage = "Error updating record: " . $connection->error;
        }
    }
}

