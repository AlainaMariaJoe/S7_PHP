<?php
function add_five(&$value)
{
    $value+=55;
}
$num=2;
add_five($num);
echo "Num=$num";
?>