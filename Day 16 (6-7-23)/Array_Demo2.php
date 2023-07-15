<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $a = array("xtz","abc","dfg");
    print_r($a);
    sort($a);
    echo "<br> after Sorting <br>";
    print_r($a);
    ?>
</body>
</html>