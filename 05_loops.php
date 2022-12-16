<?php

for($number = 0; $number <= 10; $number++){
    echo 'I love you ' . $number;
}


$x = 10;
while($x < 15){
    echo 'Oye ' . $x;
    $x++;
}


$y = 100;
do{
    echo 'Noice ' . $y . '<br>';
    $y++;

}while($y < 109); 



// for each

$posts = ['First Post', 'Second Post', 'Third Post'];

// using normal for

for($x2 = 0; $x2 < count($posts); $x2++){
    echo $posts[$x2] . '<br>';
}

// using for each loop

foreach($posts as $post){
    echo $post . '<br>';
}

// indexing it now

foreach($posts as $index => $post)
{

    echo $index + 1  . ' - ' . $post . '<br>';
}

// for associative arrays

$people = 
    ['first_name' => 'Body',
    'last_name' => 'Sho',
    'email' => 'bodybhai@gmail2.com'
];

foreach($people as $ksd => $peoples){
    echo $ksd . ' - ' . $peoples .  '<br>';
}


   






?>