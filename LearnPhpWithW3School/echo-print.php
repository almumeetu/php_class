<?php 

/* 
* With PHP, there are two basic ways to get output: echo and print.

* echo and print are more or less the same. They are both used to output data to the screen.

* The differences are small: echo has no return value while print has a return value of 1 so it can be used in expressions. echo can take multiple parameters (although such usage is rare) while print can take one argument. echo is marginally faster than print.

*/




//Echo Statement:
/*
* The echo statements can be used with or without parenthees : echo or echo() .
*/
echo "<h1>Echo Statement </h1>";
echo("<h1>PHP is Fun!</h1>");
echo "Hello world!<br>";
echo "<h2>I'm about to learn PHP!<br></h2>";
echo "This ", "string ", "was ", "made ", "with multiple parameters.";

$text1 = "Learn PHP";
$text2 = "W3schools.com";
$x = 5;
$y = 4;

echo "<h2>" . $text1 . "</h2>" . "<br>";
echo "Study PHP at" . $text2 . "<br>";
echo $x + $y;


var_dump($text1);



//Print Statement

print "<h1> Print Statement </h1>";
print("<h1>PHP is Fun!</h1>");
print "Hello world!<br>";
print "<h2>I'm about to learn PHP!<br></h2>";
// print "This ", "string ", "was ", "made ", "with multiple parameters.";

$text1 = "Learn PHP";
$text2 = "W3schools.com";
$x = 5;
$y = 4;

print "<h2>" . $text1 . "</h2>" . "<br>";
print "Study PHP at" . $text2 . "<br>";
print $x + $y;


var_dump($text1);


   











?>