<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Digital Name Card</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background-color: #f4f7f6;
        }
        .name-card {
            background: #ffffff;
            width: 350px;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
            text-align: center;
            border-left: 8px solid #0056b3;
        }
        .full-name {
            font-size: 26px;
            font-weight: 700;
            color: #2c3e50;
            margin-bottom: 5px;
        }
        .position {
            font-size: 14px;
            color: #0056b3;
            text-transform: uppercase;
            letter-spacing: 1.5px;
            margin-bottom: 20px;
            font-weight: 600;
        }
        .divider {
            height: 1px;
            background: #eee;
            margin: 15px 0;
        }
        .gender {
            font-size: 13px;
            color: #7f8c8d;
            background: #f1f2f6;
            display: inline-block;
            padding: 5px 15px;
            border-radius: 20px;
        }
    </style>
</head>
<body>

    <div class="name-card">
        <div class="full-name"><?php echo $_GET["fullname"]; ?></div>
        <div class="position"><?php echo $_GET["position"]; ?></div>
        <div class="divider"></div>
        <div class="gender"><?php echo "Gender: " . $_GET["gender"]; ?></div>
    </div>

</body>
</html>
