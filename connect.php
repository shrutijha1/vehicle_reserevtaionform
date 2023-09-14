<?php
// Database connection parameters
$hostname = "localhost";
$username = "root";
$password = "";
$database = "cardekhoform";

// Create a connection to the MySQL database
$con = mysqli_connect( $hostname , $username , $password , $database);

// Check if the connection was successful
if ($con->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}

// Process form data
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Sanitize input data
    $name = mysqli_real_escape_string($con, $_POST["name"]);
    $email = mysqli_real_escape_string($con, $_POST["email"]);
    $phone = mysqli_real_escape_string($con, $_POST["phone"]);

    // Handle checkbox values
    $vehicles = isset($_POST["vehicles"]) ? implode(", ", $_POST["vehicles"]) : "";

    // Insert data into the database
    $sql = "INSERT INTO reservations (INSERT INTO `reservations`( 'id',`name`, `email`, `phone`, `vehicles`) VALUES ($id, $name , $email , $phone , $vehicles)) ";

    $result = mysqli_query( $con ,$sql);

    if ($result) {
        echo "Form submitted successfully. Thank you!";
    } else {
        echo "Error: ";
    }

    // Close the prepared statement
    $stmt->close();
}

// Close the database connection
$mysqli->close();
?>
