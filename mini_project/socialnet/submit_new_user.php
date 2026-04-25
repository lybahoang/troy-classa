<?php
// 1. Database connection
$host = "0.0.0.0";
$dbname = "mysocialnet";
$user = "socialNetAdmin";
$pass = "socialnetadmin@2026";

$conn = new mysqli($host, $user, $pass, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// 2. Get POST data safely
$username = $_POST['username'] ?? '';
$fullname = $_POST['fullname'] ?? '';
$password = $_POST['password'] ?? '';
$description = $_POST['description'] ?? '';

// 3. Validate (basic)
if (!$username || !$fullname || !$password) {
    die("Missing required fields");
}

// 4. Hash password
$hashedPassword = password_hash($password, PASSWORD_DEFAULT);

// 5. Prepare SQL (IMPORTANT: prevents SQL injection)
$stmt = $conn->prepare(
    "INSERT INTO accounts (username, fullname, password, description)
     VALUES (?, ?, ?, ?)"
);

$stmt->bind_param("ssss", $username, $fullname, $hashedPassword, $description);

// 6. Execute
if ($stmt->execute()) {
    echo "User registered successfully!";
} else {
    echo "Error: " . $stmt->error;
}

// 7. Close
$stmt->close();
$conn->close();
?>