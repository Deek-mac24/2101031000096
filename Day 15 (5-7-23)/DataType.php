<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practical 4</title>
</head>
<body>
    <?php
    $a="123bsdk";
    echo "Type of a is :".gettype($a)."<br>";
    settype($a,"int");
    echo "After Conversion Type Of a Is :".gettype($a);
    ?>
</body>
</html>