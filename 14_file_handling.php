<?php
$file = 'extras/users.txt';

if(file_exists($file)){
    // echo readfile($file);

    $handle = fopen($file, 'r');  // r= read, fopen = file open
    $contents = fread($handle, filesize($file));
    fclose($handle);
    echo $contents;
}
else{
    $handle = fopen($file, 'w');
    $contents = 'Brad' . PHP_EOL . 'Sara' . PHP_EOL . 'Rubesh' . PHP_EOL . 'Donald' . PHP_EOL . 'Savitri Bai'; 
    fwrite($handle, $contents);
    fclose($handle);
}

?>