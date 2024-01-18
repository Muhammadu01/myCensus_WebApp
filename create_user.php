<?php

include_once 'db_config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $gender = $_POST['gender'];
    // ... (other fields)

    $sql = "INSERT INTO users (Username, Gender, /* ... other fields */) 
            VALUES ('$username', '$gender', /* ... other values */)";

    if ($conn->query($sql) === TRUE) {
        echo "Record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();

?>
