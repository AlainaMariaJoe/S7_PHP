<?php
$conn = mysqli_connect("localhost", "root", "", "test");

if ($conn) {
    $sql = "UPDATE testTable SET testField='I love India' WHERE id=4";
    
    if (mysqli_query($conn, $sql)) {
        echo "Record updated successfully";
    } else {
        echo "Error updating record: " . mysqli_error($conn); 
    }


    $sql = "SELECT * FROM testTable";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result)>0 { 
        echo "<table border='border' width='300'><tr><th>id</th><th>My Message</th></tr>"; 
 
        }
        echo "</table>";
    } else {
        echo "0 results";
    }
} else {
    die("Connection failed: " . mysqli_connect_error()); 
}

mysqli_close($conn);
?>
