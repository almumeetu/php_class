<?php 


//String Lengh

$x = "Jhon";

echo "Hello $x";

//The PHP strlen() function returns the length of a string.

echo "strlen()";

echo "<h1> String Length </h1>" . "<br>";
echo "The PHP strlen() function returns the length of a string." . "<br>";


echo "String: " . "Hello World" . "<br>"; 

echo strlen("Hello World !" . "<br>");


echo("Hello World!" . "<br>");



//Word Count 

// * The PHP str_word_count() function counts the number of words in a string.

echo "str_word_count()". "<br>";

echo str_word_count("Hello Saikat, How manys word here?!") . "<br>";

echo str_word_count('a b c d e f g h i j k l m n o p q r s t u v w x y z') . " " . 'Word Number';



// Search For Text Within a String

echo "Search For Text Within a String". "<br>";

echo "strpos()". "<br>";

// The PHP strpos() function searches for a specific text within a string.

// If a match is found,  the function returns the character position of the first match. If no math is found, it will return False.


echo strpos("Hello World!", "o");











?>