<?php
$conn = mysqli_connect("localhost", "root", "", "test");
if ($conn)
$myid=$_POST["selectedId"];
$sql = "UPDATE testTable SET testField='$myText' WHERE id=$myid";
if (mysqli_query($conn, $sql))
{
echo "Record updated successfully";

}

else

{ echo "Error updating record: mysqli_error($conn);
}

}
else

{ die("Connection failed: ". mysqli_connect_error());

}
mysqli_close($conn);

?>