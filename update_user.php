<?php

include_once 'db_config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $userID = $_POST['userID'];
    $username = $_POST['username'];
    $gender = $_POST['gender'];
    // ... (other fields)

    $sql = "UPDATE users 
            SET Username='$username', Gender='$gender', /* ... other fields */
            WHERE UserID=$userID";

    if ($conn->query($sql) === TRUE) {
        echo "Record updated successfully";
    } else {
        echo "Error updating record: " . $conn->error;
    }
}

$conn->close();

?>
