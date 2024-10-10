<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Word Count</title>
</head>
<body>
    <h1>Word Count Tool</h1>
    <form method="POST" action="">
        <label for="inputString">Enter a string:</label><br>
        <textarea id="inputString" name="inputString" rows="4" cols="50" required></textarea><br><br>
        <input type="submit" value="Count Words">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Function to count words
        function countWords($string) {
            return str_word_count($string);
        }

        // Get the input string
        $inputString = $_POST['inputString'];

        // Count the words
        $wordCount = countWords($inputString);

        // Display the result
        echo "<h2>The number of words in the string is: $wordCount</h2>";
    }
    ?>
</body>
</html>
