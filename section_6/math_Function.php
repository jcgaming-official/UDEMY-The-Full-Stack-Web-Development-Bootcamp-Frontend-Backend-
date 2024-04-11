<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Math Function</title>
</head>
<body>
    <?php
    $a = 20;
    echo var_dump(is_finite($a)); // is_finite() function is used to check whether a number is finite or not.
    echo "<br>";
    echo min(23, 43,54,4); // min() function is used to find the minimum value from the given values.
    echo "<br>";
    echo max(657,34,43,7,32); // max() function is used to find the maximum value from the given values.
    echo "<br>";
    echo sqrt($a); // sqrt() function is used to find the square root of a number.
    echo "<br>";
    echo round(234.23); // round() function is used to round off the number.
    echo "<br>";
    echo tan(0.5);// tan() function is used to find the tangent of a number.
    echo "<br>";
    echo cos(04);// cos() function is used to find the cosine of a number.
    echo "<br>";
    echo sin(0.3);// sin() function is used to find the sine of a number.
    echo "<br>";
    echo abs(-65.3);// abs() function is used to find the absolute value of a number.
    echo "<br>";
    echo var_dump(is_nan($a));// is_nan() function is used to check whether a number is NaN or not.
    echo "<br>";
    echo rad2deg($a);// rad2deg() function is used to convert the radian value to degree.
    echo "<br>";
    echo deg2rad($a);// deg2rad() function is used to convert the degree value to radian.
    
    ?>
    
</body>
</html>