<?php
include_once("connection.php");

if(isset($_GET['id'])) {
    // Get the student's name from the URL parameter
    $lecturerId = $_GET['id'];

    // Prepare the DELETE query with a parameterized statement
    $query = "DELETE FROM lect_detail WHERE lecturerId = ?";
    $stmt = $connection->prepare($query);

    if ($stmt) {
        // Bind the parameter
        $stmt->bind_param("s", $lecturerId);

        // Execute the query
        if ($stmt->execute()) {
            // Delete successful, redirect to manageStu.php
            header("Location: manageLect.php");
        } else {
            echo "Error deleting lecturer: " . $stmt->error;
        }

        // Close the statement
        $stmt->close();
    } else {
        echo "Error preparing statement: " . $connection->error;
    }
} else {
    echo "Invalid request. Please provide a lecturer ID.";
}

// Close the connection
$connection->close();
?>
