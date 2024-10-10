<?php
$string1="jpple";
$string2="Banana";
$result=strcmp($string1,$string2);
if($result<0)
{
    echo "$string1 preceds $string2 alphabetically";
}
elseif ($result==0)
{
    echo "$string1 and $string2 is equal";
}
else{
    echo "$string1 follows $string2 alphabetically";
}
?>