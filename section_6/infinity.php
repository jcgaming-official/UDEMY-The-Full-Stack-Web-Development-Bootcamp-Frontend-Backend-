<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Infinity</title>

</head>
<body>
    <?php 
    echo PHP_FLOAT_MAX;
    echo "<br>";
    $a = 4;
    echo is_infinite(4); // returns false because 4 is not infinite
    echo "<br>";
    echo is_infinite(log(0)); //returns true because log(0) is infinite
    echo "<br>";
    echo var_dump(is_finite(2004));//returns true because 2004 is finite


    ?>
    
</body>
</html>