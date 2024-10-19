<?php
$conn = mysqli_connect("localhost", "root", "", "alainadb");
if($conn)
{
    echo "Connected to db established succesfully";
    {
        $sql = "INSERT INTO studentdata (StudentId, Name, Age) VALUES ('$StudentId', '$Name', '$Age')";
        $res=mysqli_query($conn,$sql);
        if($res)
        {
            echo "<br>Data inserted successfully!";
        }
        else
        {
            die("Error: ".mysqli_error($conn));
        }
    }
}
else
{
    die("Connection failed".mysqli_connect_error());
}
mysqli_close($conn);
?>

