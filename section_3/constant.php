<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variables</title>
</head>
<body>
    <?php 
    define("name", "John Carl", true);
    define ("lastName", " Quieta");
    
    echo name;
    echo lastName;
    echo "<br>";
    define("age", 20);
    echo age;
    echo "<br>";
    //Constant Array

    // define("students",["john","carl", "quieta"]); //array
   // echo students [2]; //prints quieta

    function myfunc(){
        define("students",["john","carl", "quieta"]); //array
       // echo students[2]; //global constant

    }
        myfunc();
        echo students[1];
    ?>
</body>
</html>