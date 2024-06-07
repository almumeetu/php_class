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




echo "<br>" . "<br>";

echo "<h1> String Modify </h1>";

// Php has a set of built-in functions that you can use to modify strings.

// Upper Case

// The strtoupper() functions returns the string upper case:

echo "<br>" . "<br>";

$x = "Hello World!". "<br>";

echo "Simple value :" ." ". $x. "<br>";

echo "Uppercase : " .strtoupper($x);

$x = "Hello World! My Name is Saikat. I am a Web Developer,I worked on Softzino Tecnology with the 'Associate Software Developer' Post. Thank You.";
$y = "HELLO SAIKAT ";

echo strtoupper($x). "<br>";
echo strtolower($y). "<br>";
echo str_replace("World","SAIKAT" ,$x). "<br>";
echo str_replace("Associate Software Developer","Sinior Software Engnr" ,$x);

echo "<br>";
echo "<br>";
$a = "AMAR SONAR BANGLA";
echo strrev($a);

echo "<br>";
echo "<br>";
echo "<br>";

echo "<h1>PHP trim()</h1>";
$x = " Hello World! ";
echo trim($x);


echo "<p>The whitespaces are invisible in plain HTML,<br>
but check out the difference in two input fields:</p>";


echo "<input value='" .trim($x) . "'>";
echo "<br>";
echo "<input value='" . trim($x) . "'>";

echo "<h1>PHP ltrim() Function</h1>";

$str = "Hello World!";
echo $str . "<br>";
echo ltrim($str,"Hello");
?>