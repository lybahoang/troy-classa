<?php // This page edit profile page by changing the description in the account ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Social Network | Setting</title>
    <style>
        /* Reset and Base Styles */
        * { margin: 0; padding: 0; box-sizing: border-box; }
        body { font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; background-color: #f9f9f9; color: #333; }

        /* Navigation Bar */
        nav { background: #333; color: #fff; padding: 1rem 2rem; display: flex; justify-content: space-between; align-items: center; }
        .logo { font-size: 1.5rem; font-weight: bold; }
        .nav-links { list-style: none; display: flex; gap: 2rem; }
        .nav-links a { color: #fff; text-decoration: none; font-weight: 500; transition: color 0.3s; }
        .nav-links a:hover { color: #007bff; }

        /* Main Content Container */
        .main-content { display: flex; justify-content: center; align-items: flex-start; padding: 50px 20px; min-height: 80vh; }
        
        /* Form Card */
        .form-container { background: white; padding: 30px; border-radius: 8px; box-shadow: 0 4px 15px rgba(0,0,0,0.1); width: 100%; max-width: 600px; }
        
        h3 { margin-bottom: 15px; font-size: 1.2rem; color: #444; }
        
        textarea { width: 100%; height: 200px; padding: 15px; border: 1px solid #ddd; border-radius: 4px; resize: none; font-size: 1rem; margin-bottom: 20px; }
        
        /* Green Save Button from Image */
        .save-btn { width: 100%; padding: 12px; background-color: #28a745; color: white; border: none; border-radius: 4px; font-size: 1.1rem; font-weight: bold; cursor: pointer; transition: background 0.3s; }
        .save-btn:hover { background-color: #218838; }

        /* Mobile Adjustments */
        @media (max-width: 600px) {
            nav { flex-direction: column; gap: 1rem; text-align: center; }
            .nav-links { gap: 1rem; font-size: 0.9rem; }
        }
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

    <div class="main-content">
        <div class="form-container">
            <form action="save_description.php" method="POST">
                <h3>Enter description:</h3>
                <textarea name="description" placeholder="Write something here..." required></textarea>
                <button type="submit" class="save-btn">Save</button>
            </form>
        </div>
    </div>

</body>
</html>
