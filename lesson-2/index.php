<?php
// 1. Echo - output text
echo "Hello World!<br>";

// 2. Variables - start with $
$name = "John";
$age = 25;
echo "Name: $name, Age: $age<br>"; // Variables can parse in double-quoted strings

// 3. Basic arithmetic
$x = 10;
$y = 5;
$addition = $x + $y;
$subtraction = $x - $y;
$multiplication = $x * $y;
$division = $x / $y;
$modulus = $x % $y;

echo "Addition Result: $addition<br>";
echo "Subtraction Result: $subtraction<br>";
echo "Multiplication Result: $multiplication<br>";
echo "Division Result: $division<br>";
echo "Modulus Result: $modulus<br>";

// 4. String concatenation
$word1 = "Learning";
$word2 = "PHP";
$sentence = $word1 . " " . $word2 . " Basics!"; // Using . operator
echo $sentence . "<br>";

// Practical example with variables and strings
$price = 10000;
echo "Price: $" . number_format($price, 0, '.', ',') . "<br>";
?>