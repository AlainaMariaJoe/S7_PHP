<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border=5 align='center'>
        <caption>Powers Table</caption>
        <tr> <th>No</th><th>Square</th><th>SquareRoot</th><th>Cube</th></tr>
        <?php
        for($number=1;$number<=10;$number++)
        {
            $sqroot=sqrt($number);
            $square=pow($number, 2);
            $cube=pow($number, 3);
            print("<tr align='center'><td>$number</td> <td>$sqroot</td> <td>$square</td> <td>$cube</td></tr>");
        }
        ?>
        </table>
</body>
</html>