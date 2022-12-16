<?php

$age = 12;

if($age >= 18){
    echo 'You can vote now';
}
else{
    echo 'Go home kid';
}

$t = date("H");

if($t < 12){
    echo "Good Morning";
}
elseif($t < 18){
    echo "Good Afternoon";
}

else{
    echo "Good Evening";
}


// ternary operator

$post = ['first post'];

$firstpost = $post[0] ?? 'null';
echo $firstpost;

$posts = [];


echo !empty($posts) ? $posts[0] : 'Nothing';


//Switch

$fav_colour = 'yellow';

switch($fav_colour){
    case 'red':
        echo 'You love red';
        break;
        
        case 'blue':
            echo 'You love blue';
            break;

            case 'yellow':
                echo 'You love yellow';
                break;

                default:
                echo 'you love nothing';
                break;
        
}




?>