<?php
$host    = "localhost";
$user    = "root";
$pass    = "1234";
$db_name = "ehospital";

// Create connection
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$connection = mysqli_connect($host, $user, $pass, $db_name);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["appointment_id"])) {
        $appointment_id = $_POST["appointment_id"];

        // Validate and sanitize input to prevent SQL injection
        $appointment_id = mysqli_real_escape_string($connection, $appointment_id);

        // Delete the row based on the ID
        $query = "DELETE FROM appointment WHERE ID = '$appointment_id'";
        $result = mysqli_query($connection, $query);

        if ($result) {
            echo "Row deleted successfully.";
        } else {
            echo "Error deleting row: " . mysqli_error($connection);
        }
    } else {
        echo "Invalid request.";
    }
} else {
    echo "Invalid request method.";
}
?>
