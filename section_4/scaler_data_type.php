<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Data Type</title>
</head>
<body>
    <h1> Scalar Data Type </h1>
    <?php
    $a = "Hello";
    
    $b = "John 'Carl' Quieta";
    
    $c = 'John "Carl" Quieta';

    echo $a;
    echo "<br>";
    echo $b;
    echo "<br>";
    echo $c;
    echo"<br>";
    echo "$a Quieta";
    echo "<br>";
    echo strlen($a);
    echo "<br>";
    echo str_word_count($b);
    echo "<br>";
    echo strrev ($c);

    $int = 123; //int
    $float = 23.2; //float
    echo "<br>";
    echo var_dump($b);
    echo "<br>";
    $valbool = true; //true
    $vafool = false; //false
    echo $valbool;
    echo "<br>";
    echo $vafool;
    echo "<br>";
    $eq = 4;
    $eqz = 4;
    echo ($eq == $eqz);
    ?>
</body>
</html>