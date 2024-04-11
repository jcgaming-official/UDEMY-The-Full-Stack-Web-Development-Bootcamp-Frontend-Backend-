<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>String in PHP</title>
</head>
<body>

    <?php
    $str = "Hello World!, Today  is the best day to learn something new";
    echo strlen($str); //to get the length of the string
    echo "<br>";
    echo str_word_count($str); //to get the number of words in the string
    echo "<br>";
    echo strrev($str); // to reverse the string
    echo "<br>";
    echo strpos($str, "best"); // to get the position of the word in the string
    echo "<br>";
    echo str_replace("best", "good",$str); // to replace the word in the string

    ?>
    
</body>
</html>