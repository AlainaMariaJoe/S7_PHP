<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
</head>
<body>
    <h2>Login Form</h2>
    
    
    <form method="post" action="/submit">
        <label for="username">Username: </label>
        <input type="text" id="username" name="username" required><br><br>
        
        <label for="password">Password: </label>
        <input type="password" id="password" name="password" required><br><br>
        
        <button type="submit" name="submit">Login</button>
        <button type="reset">Cancel</button>
    </form>

    <?php
    if (isset($_POST["submit"])) {
        define("FIVE_DAYS", 60 * 60 * 24 * 5);

        setcookie("username", $_POST[$username], time() + FIVE_DAYS);
        $username=$_COOKIE["username"];
        echo "Cookies set successfully for user: ";
        echo "<p>$username</p> ";
    }
    ?>
</body>
</html>
