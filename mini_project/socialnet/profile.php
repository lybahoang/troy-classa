<?php 
// This page is to display the user fullname and description.
?>
<?php
session_start();
require_once("../db.php");
?>

<?php
// Get the user fullname and description.
$fullname = "";
$description = "";

if (!isset($_SESSION['username'])) {
    header("Location: signin.php");
    exit();
} else {
    $result = db_query("SELECT fullname, description FROM accounts WHERE username = '" . $_SESSION['username'] . "'");
    if (count($result) > 0) {
        $fullname = $result[0]['fullname'];
        $description = $result[0]['description'];
    }
}
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Professional Homepage</title>
    <style>
        /* Basic Reset */
        * { margin: 0; padding: 0; box-sizing: border-box; }
        body { font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; line-height: 1.6; background-color: #f9f9f9; color: #333; }

        /* Navigation Bar Styles */
        nav { background: #333; color: #fff; padding: 1rem 2rem; display: flex; justify-content: space-between; align-items: center; position: sticky; top: 0; z-index: 1000; }
        .logo { font-size: 1.5rem; font-weight: bold; }
        .nav-links { list-style: none; display: flex; gap: 2rem; }
        .nav-links a { color: #fff; text-decoration: none; font-weight: 500; transition: color 0.3s; }
        .nav-links a:hover { color: #007bff; }
    </style>
</head>

<body>
    <nav>
        <div class="logo">Simple Social Network | Profile page</div>
        <ul class="nav-links">
            <li><a href="homepage.php">Home</a></li>
            <li><a href="profile.php">Profile</a></li>
            <li><a href="setting.php">Setting</a></li>
            <li><a href="signout.php">Sign out</a></li>
        </ul>
    </nav>

    <h1>Profile of <?= $_SESSION['username'] ?></h1>
    <div><p><strong>Fullname: </strong> <?= $fullname ?></p></div>
    <div><p><strong>Description: </strong></p></div>
    <?= $description ?>
</body>
</html>