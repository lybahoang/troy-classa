<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Information Form</title>
    <style>
        body { font-family: sans-serif; padding: 20px; }
        .form-group { margin-bottom: 15px; }
        label { display: block; font-weight: bold; margin-bottom: 5px; }
        input { padding: 8px; border: 1px solid #ccc; border-radius: 4px; width: 100%; max-width: 300px; }
    </style>
</head>
<body>
    <?php
    $host = "0.0.0.0";
    $user = "dung";
    $pass = "dung@1977";
    $dbname = "mysocialnet";

    // Check if the form was submitted using POST.
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        print("Information received. Process it");
        echo "<h3>Submitted Information:</h3>";
        echo "<strong>Username:</strong> " . $_POST["username"] . "<br>";
        echo "<strong>Full Name:</strong> " . $_POST["fullname"] . "<br>";
        echo "<strong>Password:</strong> " . $_POST["password"];

        $conn = new mysqli($host, $user, $pass, $dbname);
        if ($conn->connect_error) {
            die("Connection failed: ", .$conn->connect_error);
        }
    }
    ?>
    <h2>User Registration</h2>
    <form action="/troy-classa/net_app/new_user.php" method="POST">
        
        <div class="form-group">
            <label for="username">Username (Max 20 chars):</label>
            <input type="text" id="username" name="username" maxlength="20" required>
        </div>

        <div class="form-group">
            <label for="fullname">Full Name (Max 200 chars):</label>
            <input type="text" id="fullname" name="fullname" maxlength="200" required>
        </div>

        <div class="form-group">
            <label for="password">Password (Max 10 chars):</label>
            <input type="text" id="password" name="password" maxlength="10" required>
        </div>

        <button type="submit">Register</button>
    </form>

</body>
</html>
