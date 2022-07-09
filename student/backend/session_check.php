<?php
    include_once('/dbconnect.php');
    session_start();
    if($_SESSION['user'] != 'sudent')
    {
        // echo $_SERVER['HTTP_HOST']."<br>";
        header('Location: /');
    }
    else
    {
        echo 'STUDENT';
    }
?>