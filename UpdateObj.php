<?php
$conn = mysqli_connect("localhost", "root", "", "test");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "UPDATE testTable SET testField='India is my Country' WHERE id=3";
if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $conn->error; 
}

$sql = "SELECT * FROM testTable";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    echo "<br/><b>.....id.... My Message... ........</b><br/>";
    while ($row = $result->fetch_assoc()) {
        echo "...." . $row["id"] . "......." . $row["testField"] . "<br>"; 
    }
} else {
    echo "0 results";
}
$conn->close();
?>
