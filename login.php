<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $hostname = $_POST["hostname"];
    $username = $_POST["username"];
    $password = $_POST["password"];
    $database = $_POST["database"];

    $connection = mysqli_connect($hostname, $username, $password, $database);

    if (!$connection) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $enteredUsername = $_POST["username"];
    $enteredPassword = $_POST["password"];

    // Perform the login logic using your database
    // For simplicity, a basic query is used here. You should use prepared statements and hash passwords in a real-world scenario.
    $query = "SELECT * FROM users WHERE Username = '$enteredUsername' AND Password = '$enteredPassword'";
    $result = mysqli_query($connection, $query);

    if ($result && mysqli_num_rows($result) > 0) {
        // Successful login
        // Redirect to a dashboard or home page
        header("Location: dashboard.php");
        exit();
    } else {
        // Invalid login
        echo "Invalid username or password.";
    }

    mysqli_close($connection);
}
?>
