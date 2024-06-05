<?php 
    setcookie("user","kozue", time() + 2, "/");

    if(isset($_COOKIE["user"]))
    {
        echo "Cookie is set <br> user is {$_COOKIE["user"]}!";
    }
    else
    {
        echo "Cookie not set";
    }
    // foreach($_COOKIE as $key => $value)
    // {
    //     echo "{$key} = {$value} <br>";
    // }
?>