<?php

$fruits = ['apple', 'banana', 'mango'];


// Get length
echo count($fruits) . '<br>';

// search in an array
var_dump(in_array('papaya', $fruits));

// add to array
$fruits[] = 'grape';
array_push($fruits, 'blueberry', 'cranberry');

echo '<br>';

print_r($fruits);

// add to the beginning
array_unshift($fruits, 'watermelon');
echo '<br>';
print_r($fruits);

// remove from an array
array_pop($fruits);

// remove from beginning
array_shift($fruits);
echo '<br>';
print_r($fruits);

// remove specific element + index
unset($fruits[2]);
echo'<br>';
print_r($fruits);


// Split into 2 chunks

$chunked_array = array_chunk($fruits, 2);
// Splits the given array into 'n' chunks
echo '<br>';
print_r($chunked_array);

// Concatenate the arrays

// 1 merge method

$arr1 = [1,2,3];
$arr2 = [4,5,6];

$arr3 = array_merge($arr1, $arr2);
echo '<br>';
print_r($arr3);

// 2 merge operator method
$arr4 = [...$arr1, ...$arr2];
echo '<br>';
print_r($arr4);


// combine arrays
$a = ['kaju', 'baddaam', 'pista'];
$b = ['white', 'brown', 'green'];

$c = array_combine($a, $b);
echo '<br>';
print_r($c);

// keys array

$keys = array_keys($c);
echo '<br>';
print_r($keys);

// flip arrays
$flipped = array_flip($c);
echo '<br>';
print_r($flipped);

// range of numbers

$numbers = range(1,30);
echo '<br>';
print_r($numbers);

// mapping of numbers

$newNumbers = array_map(function($number){
    return "Number ${number}";
},$numbers);

echo '<br>';
print_r($newNumbers);

// filter of numbers
$lessthan10 = array_filter($numbers, fn($number) => $number <= 10);
echo '<br>';
print_r($lessthan10);

// reduce function

$sum = array_reduce($numbers, fn($carry, $number)
=> $carry + $number);
echo '<br>';
print_r($sum);

// here it starts from 0 and goes till 20 (see $numbers variable)
?>