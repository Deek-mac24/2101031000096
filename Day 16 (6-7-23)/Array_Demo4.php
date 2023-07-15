<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $a=array("Avnish","Sourav","Mahek");
    print_r($a);
    $rev=array_reverse($a);
    echo "<br>";
    print_r($rev);
    echo "<br>";
    echo count($a);
    ?>
</body>
</html>