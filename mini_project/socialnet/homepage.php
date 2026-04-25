<?php
session_start();
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

        /* Hero Section */
        .hero { height: 80vh; display: flex; flex-direction: column; justify-content: center; align-items: center; text-align: center; background: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)), url('https://placeholder.com'); background-size: cover; color: white; padding: 0 20px; }
        .hero h1 { font-size: 3.5rem; margin-bottom: 1rem; }
        .hero p { font-size: 1.2rem; max-width: 600px; }

        /* Responsive Design */
        @media (max-width: 600px) {
            .nav-links { gap: 1rem; }
            .hero h1 { font-size: 2rem; }
        }
    </style>
</head>
<body>

    <nav>
        <div class="logo">BrandName</div>
        <ul class="nav-links">
            <li><a href="homepage.php">Home</a></li>
            <li><a href="profile.php">Profile</a></li>
            <li><a href="setting.php">Setting</a></li>
            <li><a href="signout.php">Sign out</a></li>
        </ul>
    </nav>

    <header id="home" class="hero">
        <h1>Welcome to Our Site</h1>
        <p>Your one-stop solution for professional web services and creative designs.</p>
    </header>

</body>
</html>
