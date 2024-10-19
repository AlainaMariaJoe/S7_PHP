<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
            color: #333;
        }
        nav {
            background-color: #333;
            padding: 10px;
        }
        nav a {
            color: white;
            text-decoration: none;
            padding: 14px 20px;
            display: inline-block;
        }
        nav a:hover {
            background-color: #575757;
        }
        h1 {
            text-align: center;
            margin-top: 20px;
        }
        img {
            display: block;
            margin: 20px auto;
            border: 2px solid #ddd;
            border-radius: 8px;
        }
        footer {
            text-align: center;
            padding: 20px;
            background-color: #333;
            color: white;
            position: relative;
            bottom: 0;
            width: 100%;
        }
    </style>
</head>
<body>

    <nav>
        <a href="myweb.php">HOME</a>
        <a href="studentlogin.php">LOGIN</a>
        <a href="addstudent.php">ADD</a>
        <a href="updatestudent.php">UPDATE</a>
        <a href="deletestudent.php">DELETE</a>
    </nav>

    <?php
    echo "<h1>Welcome to the Home Page</h1>";
    ?>
    <img src="Sjcet.jpg" alt="Sjcet" width="600" height="400">
    
    <footer>
        <p>&copy; 2024 AMJ.com. All rights reserved.</p>
        <p>Contact me: <a href="mailto:alainamariajoe33@gmail.com">alainamariajoe33</a></p>
    </footer>

</body>
</html>
