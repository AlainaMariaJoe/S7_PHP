<?php
$conn = mysqli_connect("localhost", "root", "", "alainadb");
if ($conn) {
    $myText = $_POST["testfield"]; 
    $myId = $_POST["selectedId"]; 
    $sql = "UPDATE testtable SET test='$myText' WHERE StudentId='$myId'";
    if (mysqli_query($conn, $sql)) {
        echo "Record successfully UPDATED.";
    } else {
        echo "Record updation failed: " . mysqli_error($conn);
    }
} else {
    die("Connection failed: " . mysqli_connect_error());
}
mysqli_close($conn);
?>
