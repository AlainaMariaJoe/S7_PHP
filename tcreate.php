<?php
$conn=mysqli_connect("localhost","root","","alainadb");
if($conn)
{
    $sql="CREATE TABLE testTable(id INT NOT NULL PRIMARY KEY AUTO_INCREMENT, name VARCHAR(75),mark INT)";
    if($res)
    {
        echo "Table testTable successfully created.";
    }
    else
    {
        printf("Couldn't create testTable:\n",mysqli_error($conn));
    }
}
else
{
    printf("Connection failed:\n",mysqli_connect_error());
    exit();
}
mysqli_close($conn);
?>