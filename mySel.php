<?php
$conn = mysqli_connect("localhost", "root", "", "alainadb");
if ($conn) {
    $sql = "SELECT * FROM testtable";
    $res = mysqli_query($conn, $sql);
    if (mysqli_num_rows($res) > 0) {
        echo "<table border='1' width='300'><tr><th>id</th><th>MyText</th></tr>"; 
        while ($row = mysqli_fetch_assoc($res)) {
            echo "<tr><td>" . $row["StudentId"] . "</td><td>" . $row["test"] . "</td></tr>"; 
        }
        echo "</table>";
    } else {
        echo "0 results!";
    }
} else {
    die("Connection failed: " . mysqli_connect_error()); 
}
mysqli_close($conn);
?>
