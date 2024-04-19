<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logical Operator</title>
</head>
<body>
    <?php
    $a = 10;
    $b = 23;
    $c = 10;
    $d = 88;

    // echo var_dump (($a > $b) && ($c > $d)); if both statements are true, then it will return true
    
    // echo var_dump (($a < $b) || ($c === $d)); // if one of the statements is true, then it will return true

    // echo var_dump (($b > $d) !== ($a < $c)) // if both statements are not equal, then it will return true

    echo var_dump (($a < $b) xor ($a > $d)); // if one of the statements is true, then it will return true
    
    ?>
    
</body>
</html>