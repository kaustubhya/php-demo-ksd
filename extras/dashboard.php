<?php

session_start();

if(isset($_SESSION['username'])){
    echo '<h1> Welcome ' . $_SESSION['username'] . '</h1>';
    echo '<a href="logout.php">LogOut</a>';
}
else{
    echo '<h1> Welcome Guest My Man!! </h1>';

    echo '<a href="/php-demo-ksd/13_sessions.php">Home</a>';
}

?>