<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP to JSON Example</title>
</head>
<body>
    <h1>PHP to JSON Output</h1>
    <?php
      $array = array("name" => "John", "age" => 30);
      $json = json_encode($array);
      echo $json; 
    ?>
</body>
</html>
 
