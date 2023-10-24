<?php
// Connect to your database
$host = 'localhost';
$username = 'root';
$password = '';
$database = 'stu_detail';

$mysqli = new mysqli($host, $username, $password, $database);

if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}

// Get the student ID from the request (you should sanitize and validate the input)
$studentId = $_POST['studentId'];

// Perform the delete operation
$sql = "DELETE FROM students WHERE studentId = ?";

$stmt = $mysqli->prepare($sql);
$stmt->bind_param("s", $studentId);
$result = $stmt->execute();

$stmt->close();
$mysqli->close();
?>
