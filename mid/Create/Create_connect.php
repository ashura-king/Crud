<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "testdb";

// Create connection
$connection = new mysqli($servername, $username, $password, $database);

$name = "";
$email = "";
$phone = "";
$address = "";
$errorMessage = "";
$successMessage = "";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $address = $_POST["address"];

    do {
        if (empty($name) || empty($email) || empty($phone) || empty($address)) {
            $errorMessage = "All the fields are required";
            break;
        }

        // Add new client to the database using prepared statements
        $stmt = $connection->prepare("INSERT INTO samplecrud (name, email, phone, address) VALUES (?, ?, ?, ?)");
        $stmt->bind_param("ssss", $name, $email, $phone, $address);
        $result = $stmt->execute();

        if (!$result) {
            $errorMessage = "Invalid query: " . $connection->error;
            break;
        }

        $name = "";
        $email = "";
        $phone = "";
        $address = "";
        $successMessage = "Client successfully added";

        // Delay the redirection slightly so that the success message is shown
        header("refresh:2; url=/Index.php");
        exit;
    } while (false);
}

if (!empty($errorMessage)) {
    echo "
    <div class='alert alert-warning alert-dismissible fade show' role='alert'>
        <strong>$errorMessage</strong>
        <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
    </div>";
}

if (!empty($successMessage)) {
    echo "
    <div class='alert alert-success alert-dismissible fade show' role='alert'>
        <strong>$successMessage</strong>
        <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
    </div>";
}

