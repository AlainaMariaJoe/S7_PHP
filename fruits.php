<?php
$fruits=array("Orange","Banana","Papaya","Grapes");
sort($fruits);
foreach($fruits as $i)
{
    echo $i;
    echo"<br>";
}
echo"<br>";
rsort($fruits);
foreach($fruits as $i)
{
    echo $i;
    echo"<br>";
}
echo"<br>";


$fruitswithval=array("Orange"=>16,"Banana"=>20,"Papaya"=>8,"Grapes"=>30);
asort($fruitswithval);
foreach($fruitswithval as $i=>$i_value)
{
    echo "Key=".$i.",Value=".$i_value;
    echo"<br>";
}
echo"<br>";

ksort($fruitswithval);
foreach ($fruitswithval as $fruit => $value) {
    echo "Key = ".$fruit.", Value = ". $value;
    echo "<br>";
}
?>


