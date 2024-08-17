<?php
// Establish connection to the database
$servername = "localhost";
$username = "root"; // Default username for XAMPP
$password = ""; // Default password for XAMPP, usually empty
$database = "reservation"; // Change this to your actual database name

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get form data
$date = $_POST['date'];
$customer_name = $_POST['customer_name'];
$event_type = $_POST['event_type'];
$menu = $_POST['menu'];
$num_people = $_POST['num_people'];
$place = $_POST['place'];
$payment_mode = $_POST['mop'];
$status = $_POST['status'];


// Prepare SQL statement to insert data into database
$sql = "INSERT INTO information (date, customer_name, event_type, menu, num_people, place, payment_method, status) 
VALUES ('$date', '$customer_name', '$event_type', '$menu', '$num_people', '$place', '$payment_mode', '$status')";

// Execute SQL statement
if ($conn->query($sql) === TRUE) {
    echo "Reservation successful!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close database connection
$conn->close();
?>