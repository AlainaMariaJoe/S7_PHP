<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP JSON Example</title>
</head>
<body>
    <h1>JSON Data Output</h1>
    <?php
      $json = '{"name":"John","age":30}';
      $array = json_decode($json, true);
      echo $array['name'];  
?>

</body>
</html>


