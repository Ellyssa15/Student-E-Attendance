<?php
include_once("connection.php");

if(isset($_GET['id'])) {
    // Get the student's name from the URL parameter
    $name = $_GET['id'];

    // Prepare the DELETE query with a parameterized statement
    $query = "DELETE FROM stu_detail WHERE name = ?";
    $stmt = $connection->prepare($query);

    if ($stmt) {
        // Bind the parameter
        $stmt->bind_param("s", $name);

        // Execute the query
        if ($stmt->execute()) {
            // Delete successful, redirect to manageStu.php
            header("Location: manageStu.php");
        } else {
            echo "Error deleting student: " . $stmt->error;
        }

        // Close the statement
        $stmt->close();
    } else {
        echo "Error preparing statement: " . $connection->error;
    }
} else {
    echo "Invalid request. Please provide a student ID.";
}

// Close the connection
$connection->close();
?>
