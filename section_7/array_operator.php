<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array Operator</title>
</head>
<body>
    <?php
    $a = array("Blue", "Red", "Yellow", "Pink");
    $b = array("Red", "Orange", "Cyan");
    $c = array(1,2,3,4,5);
    $d =  array("1", "2", "3", "4", "5");
    echo $a[3];
    echo "<br>";
    echo var_dump ($c === $d); //identical checks the variable while equality doesnt
    ?>
    
</body>
</html>