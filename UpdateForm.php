<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="updateFormTest.php" method="post">
<p><label>Enter the id to update</label><br/>
<?php
$conn = mysqli_connect("localhost", "root", "", "alainadb");
if ($conn) {
    $sql = "SELECT * FROM testtable";
    $res = mysqli_query($conn, $sql);
    if (mysqli_num_rows($res) > 0) {
        echo '<select name="selectedId">';
        while ($row = mysqli_fetch_assoc($res)) {
            $StudentId = $row['StudentId'];
            echo '<option value="' . $StudentId . '">' . $StudentId . '</option>'; 
        }
        echo '</select>';
    } else {
        echo "No records found.";
    }
} else {
    die("Connection failed: " . mysqli_connect_error());
}
?>
<br/>
<label>Enter the Text to update</label><br/>
<input type="text" name="testfield" size="30"/><br/>
<input type="submit" name="submit" value="Update Record"/>
</form>
</body>
</html>
