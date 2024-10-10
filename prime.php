<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prime Number Checker</title>
</head>
<body>
<h1>Prime Number Checker</h1>
    <form method="post" action="">
        <label for="number">Enter a number:</label>
        <input type="number" id="number" name="number" required>
        <input type="submit" name="submit" value="Submit">
    </form>
    <?php
    function is_prime($num) {
        if ($num <= 1) {
            return false;
        }
        for ($i = 2; $i <= sqrt($num); $i++) {
            if ($num % $i == 0) {
                return false; 
            }
        else {
            return true;
        }
      
    }
}

    if (isset($_POST["submit"])) {
        $num = (int)$_POST['number'];
        if (is_prime($num)) {
            echo "<p>$num is a prime number.</p>";
        } else {
            echo "<p>$num is not a prime number.</p>";
        }
    }
    ?>
</body>
</html>
