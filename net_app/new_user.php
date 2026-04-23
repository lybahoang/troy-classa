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

    // Check if the form was submitted using POST.
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        print("Information received. Process it");
        echo "<h3>Submitted Information:</h3>";
        echo "<strong>Username:</strong> " . $username . "<br>";
        echo "<strong>Full Name:</strong> " . $fullname . "<br>";
        echo "<strong>Password:</strong> " . $password;
    }
    <h2>User Registration</h2>
    <form action="/net_app/newuser.php" method="POST">
        
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
            <input type="password" id="password" name="password" maxlength="10" required>
        </div>

        <button type="submit">Register</button>
    </form>

</body>
</html>
