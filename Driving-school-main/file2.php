<?php
$servername = "localhost";
$username = "root";
$password = "";
$databaseName = "driving school";

// Create MySQL connection
$conn = new mysqli($servername, $username, $password, $databaseName);
if ($conn->connect_error) {
    die('Connection Failed: ' . $conn->connect_error);
}

$un = $_POST['uname'];
$pw = $_POST['psw'];

try {
    // Prepare and execute the query
    $stmt = $conn->prepare("SELECT User_Name, CPassword FROM customer WHERE User_Name = ? AND CPassword = ?");
    $stmt->bind_param("ss", $un, $pw);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows > 0) {
        // Successful login
        $message = "Login successful!";
        echo "<script>alert('$message');</script>";
        header("Location: profile/profile.php"); // Redirect to another page
    } else {
        // Incorrect login
        $message = "Invalid username or password.";
        echo "<script>alert('$message');</script>";
        header("Location: login.php"); // Redirect to another page
    }

    $stmt->close();
} catch (Exception $e) {
    // Handle exceptions (e.g., database query errors)
    echo "Error: " . $e->getMessage();
}

$conn->close();
?>
