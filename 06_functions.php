<?php

// without return
function registered($email){
    echo $email . ' registered' . '<br>';
}

registered(4);




// with return


function uranagi($joe1, $joe2){

    return $joe1 + $joe2;
}


echo uranagi(7, 9) .'<br>';




// default values

function umbrella($joe1 = 2, $joe2 = 4){

    return $joe1 + $joe2;
}


 echo umbrella() . '<br>';



// Anonumous Function

$swayam = function($no1, $no2){
    return $no1 - $no2;
};

echo $swayam(54, 5) . '<br>';



// Arrow Functions

$multiply = fn($n1, $n2) => $n1 * $n2;

// 'return' statement and curly braces removed, also discard 'function' keyword and use 'fn'

echo $multiply(54, 5);





?>