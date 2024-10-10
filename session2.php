<html><title>LOGIN</title>
<body><?php
if(isset($errorMessage))
{
    echo "<p style='color:red;'>$errorMessage</p>";
}
?>
<form action="testform1.php" methof="post">
    Username:<input name="myPass" type="text"/><br>/>
    Password:<input name="myPass" type="password"/><br>/>

    <input type="submit" name="submit" value="Login