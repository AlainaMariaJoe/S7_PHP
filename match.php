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
        <input type="text" id="string" name="string" ><br><br>

        <label for="pattern">Enter Pattern:</label><br>
        <input type="text" id="pattern" name="pattern" ><br><br>

        <input type="submit" value="Search myPattern in Mystring">
    </form>
    

<?php

if (isset($_POST["submit"])) {
    $string = $_POST['string'];
    $pattern = $_POST['pattern'];
if(preg_match_all($pattern,$string,$match))
{
    echo " Pattern $pattern found in $string.\n";
}
else
{
    echo " Pattern $pattern not found in $string.\n";
}
}
?>
</body>
</html>