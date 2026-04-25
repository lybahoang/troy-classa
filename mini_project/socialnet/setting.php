<?php // This page edit profile page by changing the description in the account ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Content Entry</title>
    <style>
        body { font-family: sans-serif; display: flex; justify-content: center; padding-top: 50px; background-color: #f4f4f9; }
        .container { background: white; padding: 20px; border-radius: 8px; box-shadow: 0 2px 10px rgba(0,0,0,0.1); width: 100%; max-width: 500px; }
        label { display: block; margin-bottom: 10px; font-weight: bold; }
        textarea { width: 100%; height: 150px; padding: 10px; border: 1px solid #ccc; border-radius: 4px; resize: vertical; box-sizing: border-box; font-size: 1rem; }
        button { margin-top: 15px; width: 100%; padding: 10px; background-color: #28a745; color: white; border: none; border-radius: 4px; cursor: pointer; font-size: 1rem; }
        button:hover { background-color: #218838; }

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
        <div class="logo">Simple Social Network | Setting</div>
        <ul class="nav-links">
            <li><a href="homepage.php">Home</a></li>
            <li><a href="profile.php">Profile</a></li>
            <li><a href="signout.php">Sign out</a></li>
        </ul>
    </nav>

    <div class="container">
        <!-- The form uses POST to send data to a processing script -->
        <form action="setting.php" method="POST">
            <label for="content">Enter description:</label>
            <textarea id="content" name="content" placeholder="Write something here..." required></textarea>
            <button type="submit">Save</button>
        </form>
    </div>
</body>
</html>



