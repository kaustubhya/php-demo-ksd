<?php

$string = 'Hello World';

// Get the length of a string
echo strlen($string);

// Find the position of the first occurrence of a substring in a string
echo '<br>';
echo strpos($string, 'o');

// Find the position of the last occurrence of a substring in a string
echo '<br>';
echo strrpos($string, 'o');

// Reverse a string
echo '<br>';
echo strrev($string);

// Convert all characters to lowercase
echo '<br>';
echo strtolower($string);

// Convert all characters to uppercase
echo '<br>';
echo strtoupper($string);

// Uppercase the first character of each word
echo '<br>';
echo ucwords($string);

// String replace
echo '<br>';
echo str_replace('World', 'Everyone', $string);

// Return portion of a string specified by the offset and length
echo '<br>';
echo substr($string, 0, 5);
echo substr($string, 5);

// Starts with
if (str_starts_with($string, 'Hello')) {
    echo '<br>';
  echo 'YES';
}

// Ends with
if (str_ends_with($string, 'ld')) {
    echo '<br>';
    
  echo 'YES';
}

// HTML entities
$string2 = '<script>alert(open up!!)</script>';
echo '<br>';
echo htmlspecialchars($string2);

// specifiers %s, %d, %f etc.
echo '<br>';
printf('%s likes to %s', 'ksd', 'code and listen spotify');

echo '<br>';
printf('1 + 1 = %f', 1 + 1);

?>