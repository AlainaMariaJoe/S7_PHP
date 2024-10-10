<?php
//q1
$ages = array("Harry" => 21, "Alice" => 20,"Megha" => 22, "Bob" => 19);
//q2
$ages["Megha"] = 28;
asort($ages);

foreach ($ages as $age => $value) {
    echo "$age: $value\n";
}

echo "Alice => ". $ages["Alice"];


?>