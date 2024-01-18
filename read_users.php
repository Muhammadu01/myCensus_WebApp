<?php

include_once 'db_config.php';

$sql = "SELECT * FROM users";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        // Process and display data as needed
        echo "UserID: " . $row['UserID'] . ", Username: " . $row['Username'] . ", Gender: " . $row['Gender'] . "<br>";
        // ... (other fields)
    }
} else {
    echo "No records found";
}

$conn->close();

?>
