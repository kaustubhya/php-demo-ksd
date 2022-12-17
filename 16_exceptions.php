<?php

function inverse($x){
    if(!$x){
        throw new Exception('Division By Zero');
    }

    return 1/$x . PHP_EOL;
}

try{
    echo inverse(5);
    echo inverse(0);
}

catch(Exception $e){
    echo 'Caught Exception ' , $e -> getMessage(), ' ' . PHP_EOL;
}
finally{
    echo 'First Finally';
}


try{
    echo inverse(0);
}

catch(Exception $e){
    echo 'Caught Exception ' , $e -> getMessage(), ' ' . PHP_EOL;
}
finally{
    echo 'Second Finally';
}

echo 'Hello World';
?>