<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	echo "New user registered. Process it";
}
?>
<html>
<head>
    <title>Register</title>
</head>
<body>

<h2>Create Account</h2>

<form action="/troy-classa/mini_project/admin_area/new_user.php" method="POST">
    <label>Username:</label>
    <input type="text" name="username" required><br><br>

    <label>Full Name:</label>
    <input type="text" name="fullname" required><br><br>

    <label>Password:</label>
    <input type="text" name="password" required><br><br>

    <label>Description:</label><br>
    <textarea rows="3" cols="40" name="description"></textarea><br><br>

    <button type="submit">Register</button>
</form>
</body>
</html>
