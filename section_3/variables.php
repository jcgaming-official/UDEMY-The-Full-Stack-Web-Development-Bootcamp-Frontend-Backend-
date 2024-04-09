<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variables</title>
</head>
<body>
    <?php 
    //these are Global variables
    $name = "John Carl";
    echo $name;
    echo "<br>";
    $a = 5;
    $b = 5;
    echo $a + $b;
    echo "<br>";
    echo $a - $b;
    echo "<br>";
    echo $a * $b;
    echo "<br>";
    echo $a / $b;

    // this is specific code and variables inside used for local only
    function jc (){
        echo "<br>";
        $hi = "Local";
        echo $hi;
        //this is how to call the global variable inside the function
        global $name;
        echo "<br>";
        echo $name;   
    }
    //calling the functionto execute the specific code
    jc();


    ?>
</body>
</html>