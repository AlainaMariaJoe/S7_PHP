<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pattern Matching</title>
</head>
<body>
    <h1>Pattern Matching Checker</h1>
    <form method="post">
        <label for="string">Enter String:</label><br>
        <input type="text" id="string" name="string" required><br><br>

        <label for="pattern">Enter Pattern:</label><br>
        <input type="text" id="pattern" name="pattern" required><br><br>

        <input type="submit" name="submit" value="Search myPattern in Mystring">
    </form>

<?php
if (isset($_POST["submit"])) {
    $string = $_POST['string'];
    $pattern = $_POST['pattern'];
    $pattern='/'.$pattern.'/';
    if (preg_match($pattern, $string)) {
        echo "Pattern '$pattern' found in '$string'";
    } else {
        echo "Pattern '$pattern' not found in '$string'";
    }
}
?>
</body>
</html>
