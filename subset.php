<?php
$arr1=array(1,6,8,3,6);
$arr2=array(8,3);
if(array_intersect($arr2,$arr1,)==$arr2)
{
    echo"It is subset";
}
else{
    echo "Not a subset";
}
?>