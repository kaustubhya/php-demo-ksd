<?php

$numbers = [1, 45, 66];
$fruits = array('apple', 'pear', 'banana');

var_dump($numbers);
echo $fruits[1];


// associate array

$hex = [

    'red' => '#fu6',
    'blue' => '#f01',
    'orange' => '#f11'
];

echo $hex['orange'];


$people = [
    ['first_name' => 'Body',
    'last_name' => 'Sho',
    'email' => 'bodybhai@gmail.com'
],

[
    'first_name' => 'Selmon',
    'last_name' => 'Bhai',
    'email' => 'bhaiisgud@gmail.com'
],

[
    'first_name' => 'K',
    'last_name' => 'KRK',
    'email' => 'krkreview@gmail.com'
]

];

echo $people[2]['email']; 

var_dump(json_encode($people)); 




?>