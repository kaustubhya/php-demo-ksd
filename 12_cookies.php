<?php

// set cookie
setcookie('name', 'Brad', time() + 86400 * 30);
// 86400 is equal to 1 day, 1 day *30 = 1 month 

if(isset($_COOKIE['name'])){
    echo $_COOKIE['name'];
}

// delete a cookie
setcookie('name', '', time() - 86400 * 30);
// it gets set then gets unset

?>