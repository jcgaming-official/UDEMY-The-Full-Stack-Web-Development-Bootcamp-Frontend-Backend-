<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nan | Not a Number</title>
</head>
<body>
    <?php 
    $a = 23;
    echo is_nan(23); // this will return false
    echo var_dump(acos($a)); // this will return NAN
    ?>
    
</body>
</html>