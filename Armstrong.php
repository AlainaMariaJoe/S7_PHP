<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Prime number checker</h1>
    <form method="post" action="">
        Enter the number:<input type="number" name="number">
        <input type="submit" name="submit" value="submit">
</form>
<?php
function isArm($number)
{
    $sum=0;
    $temp=$number;
    $digit=strlen((string)$number);
    
   while($temp>0)
   {
    $num=$temp%10;
    $sum+=pow($num, $digit);
    $temp=(int)($temp/10);
   }
   return $sum==$number;
}

if(isset($_POST['submit']))
{
    $checknumber=$_POST['number'];

    if (isArm($checknumber)) {
        echo "<p>$checknumber is an Armstrong number.</p>";
    } else {
        echo "<p>$checknumber is not an Armstrong number.</p>";
}
}
?>
</body>
</html>