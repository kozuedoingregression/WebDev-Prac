<?php
    session_start();
    if(isset($_SESSION['view']))
    {
        $_SESSION['view']++;
    }
    else
    {
       $_SESSION['view'] = 1;
    }

    echo "View Count {$_SESSION['view']}";

?>